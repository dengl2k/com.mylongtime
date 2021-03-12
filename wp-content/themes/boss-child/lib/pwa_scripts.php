<?php
function add_pwa_scripts() {
	if(!is_front_page())
		return;
?>  
  <script>  
	
	//Removed notifcations 02.02.21
	/*Notification.requestPermission(function(status) {
		console.log('Notification permission status:', status);
	});*/

	function showNotification(title, message) {
	  if ('Notification' in window) {
		navigator.serviceWorker.ready.then(registration => {
		  registration.showNotification(title, {
			body: message,
			tag: 'vibration-sample'
		  });
		});
	  }
	}

  let deferredPrompt;
  btnAdd = document.getElementById("addHomeBtn");
  
  if(btnAdd != null) {
	  btnAdd.addEventListener('click', (e) => { 
	  // hide our user interface that shows our A2HS button
	  //btnAdd.style.display = 'none';
	  // Show the prompt	  
	  
	  if(deferredPrompt == null) {
		  alert('Error: Try again or check if App is already installed');
		  return;
	  }
	  //Removed notifications 02.02.21
	  //showNotification("ThaiLongtime", "Succesfully installed");
	  deferredPrompt.prompt();
	  // Wait for the user to respond to the prompt
	  deferredPrompt.userChoice
		.then((choiceResult) => {
		  if (choiceResult.outcome === 'accepted') {
			alert('App succesfully installed');
			console.log('User accepted the A2HS prompt');
		  } else {
			console.log('User dismissed the A2HS prompt');
		  }
		  deferredPrompt = null;
		});
	});
  }
  
 /*if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
     }).catch(function(err) {
        console.log("No it didn't. This happened:", err)
    });
 }*/

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent the mini-infobar from appearing on mobile
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI notify the user they can install the PWA
  console.log("PWA Install hook"); 
  if(btnAdd != null) {
	btnAdd.style.display = 'block';
	btnAdd.style.color = '#000000';
  }
});
</script>
<?php
}
 
add_action('wp_footer', 'add_pwa_scripts');
add_filter( 'web_app_manifest', function( $manifest ) {    
	$icons = array();
	$sizes = array(192,256,512);
	foreach($sizes as $size) {
		$icons[] = array(
					'src'   => sprintf( '/android-chrome-%1$dx%1$d.png', $size ),
					'sizes' => sprintf( '%1$dx%1$d', $size ),
					'type'  => 'image/png'
				);		
	}
	$manifest['icons'] = $icons;
    return $manifest;
} );

add_theme_support( 'service_worker', true );

add_filter( 'wp_service_worker_navigation_caching_strategy', function() {
	return WP_Service_Worker_Caching_Routes::STRATEGY_NETWORK_FIRST;
} );

add_filter( 'wp_service_worker_navigation_caching_strategy_args', function( $args ) {
	$args['cacheName'] = 'pages';
	$args['plugins']['expiration']['maxEntries'] = 50;
	return $args;
} );