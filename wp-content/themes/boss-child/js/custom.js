jQuery(function($){
	var selectedDates;
	var label = $('.companion-date-picker legend span.label');
	var user_id= '';
	$("#datepicker").datepicker({
				dateFormat: $.datepicker.ISO_8601,
				firstDay: 1,
				showWeek: false,
				showOn: false,			
				minDate: 0,
				defaultDate: 0,
				numberOfMonths: 1,
				showButtonPanel: false,
				showOtherMonths: true,
				selectOtherMonths: true,
				onSelect: date_selection,
				gotoCurrent: false,
				beforeShowDay: before_showday
	});
	
	function date_selection(date) {
		var the_date = new Date(date.replace("-","/"));			//replace is necessary to get independent of timezone	
		label.text("Select unavailable days in red color");
		fieldset = $( this ).closest('fieldset');
		
		var index = selectedDates.findIndex(function(x) { 
			return x.getYear() === the_date.getYear() &&  x.getMonth() === the_date.getMonth() && x.getDate() === the_date.getDate();
		});

		if(index == -1) {
			selectedDates.push(the_date);			
		}
		else {
			selectedDates.splice(index, 1);			
		}		
	}

	function before_showday(date) {		
		if(!selectedDates) {
			selectedDates = [];						
			var blockedDays = $( this ).data( 'blocked-days' );				
			blockedDays.forEach(function(entry) {
				var date = new Date(entry);	
				if(compareDate(date, new Date())) {
					selectedDates.push(date);				
				}
			});
		}
		var the_date = new Date(date);
		user_id = $( this ).data( 'user-id' );
		var fully_booked_days = $( this ).data( 'fully-booked-days' );
		// Get days needed for block - this affects availability		
		var ymdIndex = the_date.getFullYear() + '-' + (the_date.getMonth() + 1) + '-' + the_date.getDate();

		// Fully booked?
		if ( fully_booked_days[ ymdIndex ] ) {
			if ( fully_booked_days[ ymdIndex ][0] ) {
				return [ false, 'fully_booked', "Booked"];
			}
		}
	
		var index = selectedDates.findIndex(function(x) { 
			return x.getYear() === the_date.getYear() &&  x.getMonth() === the_date.getMonth() && x.getDate() === the_date.getDate();
		});

		var css_classes = '';
		var modify = $( this ).data( 'modify' );
		if(index > -1) {		
			css_classes = css_classes + 'fully_booked';
			return [modify, css_classes, "Select"];	
		}
		else
		{		
			now = new Date();
			if(compareDate(the_date, now)) {
				css_classes = css_classes + 'bookable';			
			}
			return [modify, css_classes, "Select"];	
		}
				
	}	
	function compareDate(date1, date2) {		
		return date1 >= new Date(date2.getFullYear(), date2.getMonth(), date2.getDate());	
	}
	function daysBetween( date1, date2 ) {			
			var one_day=1000*60*60*24;
			var date1_ms = date1.getTime();   
			var date2_ms = date2.getTime(); 
			var difference_ms = date2_ms - date1_ms; 
			return Math.round(difference_ms/one_day); 
		} 

	$("#btn-update-availability").click( function() {			
			selectedDates.sort(function(a, b) {				
				return a>b ? 1 : a<b ? -1 : 0;
			});			
			var dateString = '';
			var oldEntry;
			newDateString = '';
			selectedDates.forEach(function(entry) {
				newDateString = '[' + entry.getFullYear() + '-' + ('0' + (entry.getMonth()+1)).slice(-2) + '-' + ('0' + entry.getDate()).slice(-2) + ']';				
				if(!oldEntry) {
					dateString = newDateString;
				} else {							
					if(daysBetween(oldEntry, entry) > 1) {
						var oldDateString =  '[' + oldEntry.getFullYear() + '-' + ('0' + (oldEntry.getMonth()+1)).slice(-2) + '-' + ('0' + oldEntry.getDate()).slice(-2) + ']';	
						dateString = dateString + oldDateString + ";" + newDateString ;
					}
				}
				oldEntry = entry;
			});	
			dateString = dateString + newDateString;
				var request = $.ajax({
				url: myScriptVars.root + "controller/v1/update_comp_availability/" + user_id + "/" + dateString,
				method: "GET",
				beforeSend: function(xhr) {
					xhr.setRequestHeader( 'X-WP-Nonce', myScriptVars.nonce );
				},
				dataType: 'json',				
				success: function (data) {
					if(data=="true")
						label.text("Calendar was updated");
					else
						label.text(data);					
				},
				error: function(qXHR, textStatus, errorThrown ) {
					label.text(textStatus);
				}
			
			});
			$('body,html').animate({
				scrollTop: label.offset().top-50
			}, 800);
    	}
    );
	
} );