<?php

/**
 * BuddyPress - Members Loop
 *
 * Querystring is set via AJAX in _inc/ajax.php - bp_legacy_theme_object_filter()
 *
 * @package Boss
 * @subpackage bp-legacy
 */

?>
<style>
/* Common Style used for bbPress and BuddyPress */
/* Search Module - Starts Here */
.bs-dir-search {
  float: right;
  margin: 0 0 20px;
}
.bs-dir-search input[type=text] {
  background: transparent;
  border-radius: 100px;
  border: 0;
  height: 34px;
  font-size: 14px;
  letter-spacing: -0.24px;
  padding: 0 30px 0 35px;
}

.bs-search-form {
  background-color: #fff;
  border: 1px solid #DEDFE2;
  border-radius: 100px;
  margin-bottom: 0;
  position: relative;
}
.bs-search-form:before {
  content: '\e81f';
  font-family: 'bb-icons';
  font-style: normal;
  font-weight: normal;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  margin-right: .2em;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  line-height: 1em;
  margin-left: .2em;
  position: absolute;
  top: 10px;
  font-size: 14px;
  color: #4D5C6D;
  left: 9px;
  opacity: 0.4;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Search Module - Ends Here */
.bb-secondary-list-tabs {
  border-bottom: 0;
  margin: 0.9375rem 0;
}
.bb-secondary-list-tabs h4 {
  font-size: 16px;
  font-weight: 400;
  color: #A3A5A9;
  letter-spacing: -0.24px;
  margin: 0;
}
.bb-secondary-list-tabs ul {
  list-style: none;
  margin-left: auto;
  margin-bottom: 0;
}

.bs-sort-button {
  color: #122B46;
  opacity: 0.4;
  font-size: 22px;
  line-height: 1;
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  -webkit-transition: 0.3s all;
          transition: 0.3s all;
}
.bs-sort-button:hover, .bs-sort-button.active {
  color: #122B46;
  opacity: 1;
}

/* Tab list items on BP pages - Starts Here */
.bs-dir-form {
  margin: 0;
}

/* Members List View - Starts Here */
/* Prevent Firefox strange animation when switching from grid to list */
.bs-groups-items.bs-item-list.list-view .bs-item-wrap,
.bs-members-items.bs-item-list.list-view .bs-item-wrap {
  -webkit-transition: border-color .2s linear, box-shadow .2s linear;
          transition: border-color .2s linear, box-shadow .2s linear;
}

.bs-groups-items.bs-item-list .sm-grid-1-2,
.bs-members-items.bs-item-list .sm-grid-1-2 {
  border-color: #E7EAEC;
}

/* End firefox fix */
.item-title a {
  color: #122B46;
  display: inline-block;
  font-size: 20px;
  font-weight: 500;
  letter-spacing: -0.24px;
  line-height: 1.2;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.item-title a:hover {
  color: #007CFF;
}

.bs-members-items.list-view div.action {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  /*justify-content: flex-end;*/
}
.bs-members-items.list-view .bs-generic-button {
  margin-right: 20px;
}

.list-view .avatar:not(.profile-avatar) {
  margin: 0;
  max-width: 52px;
}
.list-view.bs-groups-items .avatar:not(.profile-avatar) {
  max-width: 75px;
}
.list-view .item-wrap-left {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  min-width: 38%;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 38%;
          flex: 0 0 38%;
  padding-right: 20px;
}

.bs-list-actions {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.bs-members-items.grid-view .awaiting_response.bs-generic-button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.bs-members-items.grid-view .awaiting_response.bs-generic-button a {
  width: auto !important;
}

.bs-item-list-tabs .more-button i {
  font-size: 18px;
  line-height: 1;
}
.bs-item-list-tabs .sub-menu {
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  top: 38px;
}
.bs-item-list-tabs .sub-menu li {
  float: none;
  margin: 0;
  width: 100%;
}

@media (max-width: 800px) {
  .list-view .item-wrap-left {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }

  .bs-item-list.list-view div.action {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    padding-left: 75px;
  }

  .list-view .bs-followers {
    margin: 0 18px 0 0;
  }

  .list-view .bs-dropdown-wrap {
    position: absolute;
    right: 15px;
    top: 5px;
  }

  .bs-item-list.list-view .bs-button-follow {
    margin-left: auto;
    margin-right: 0;
  }

  #buddypress .list-view .action .button {
    font-size: 13px;
    min-width: 110px;
    min-height: 30px;
    padding: 6px 20px;
    margin-bottom: 5px;
  }
}
@media (max-width: 543px) {
  .list-view .item-title {
    margin-bottom: 3px;
  }
  .list-view .item-title a {
    font-size: 18px;
  }

  .bs-item-list.list-view div.action {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  .bs-list-actions {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .bs-item-list.list-view .bs-button-follow {
    margin-left: 0;
    margin-top: 8px;
    margin-bottom: 4px;
  }

  #buddypress .list-view .action .button {
    font-size: 13px;
    min-width: 110px;
    min-height: 24px;
    padding: 6px 20px;
  }

  .bs-item-list.list-view .bs-generic-button {
    margin-right: 10px;
  }

  .list-view .bs-followers {
    margin: 0 15px 0 0;
  }

  .bs-dir-search {
    margin: 0 0 40px;
    float: left;
  }
}
@media (max-width: 380px) {
  .bs-item-list.list-view div.action {
    padding-left: 70px;
  }

  .bs-item-list.list-view .item-wrap-left {
    -ms-flex-flow: nowrap;
        flex-flow: nowrap;
  }

  .bs-item-list.list-view .bs-list-actions .send-private-message {
    margin-right: 0;
  }
}
span.location i {
  font-size: 19px;
  margin: 0px -6px 0 -6px;
  position: relative;
  top: 2px;
}

.bs-members-items.list-view .location {
  display: block;
  position: relative;
  padding-left: 15px;
  padding-top: 3px;
  line-height: 1.2;
}
.bs-members-items.list-view .location i {
  position: absolute;
  left: 0;
  top: 0;
}

.bs-followers {
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.24px;
}
.bs-followers span {
  color: #4D5C6D;
}

.follow-wrap {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-bottom: 20px;
}
.follow-wrap .bs-followers {
  font-size: 13px;
}
.follow-wrap .follow {
  border: 0;
  padding: 0;
  font-size: 13px;
  font-weight: 500;
  color: #007CFF;
  letter-spacing: -0.24px;
}
.follow-wrap .follow:hover {
  border: 0;
  background: transparent;
}
.follow-wrap .bs-generic-button {
  line-height: 1;
  margin-left: auto;
}

.member-status {
  background: #00E652;
  border-radius: 100%;
  position: absolute;
  width: 9px;
  height: 9px;
  right: 5px;
  top: 0;
}

/* Members List View - Ends Here */
/*
 * Members Grid Style - Starts Here
 */
.bs-item-list.grid-view > li {
  margin-bottom: 1.25rem;
}

.bs-item-list-inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  background-color: #fff;
  border: 1px solid #E7EAEC;
  border-radius: 4px;
  height: 100%;
  margin: 0 0 -1px;
  padding: 25px 20px 0;
  /*padding: 25px 20px 40px;*/
  position: relative;
  text-align: center;
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
}
.bs-item-list-inner:hover {
  box-shadow: 0 3px 24px 0 rgba(18, 43, 70, 0.08);
  border-radius: 3px;
  position: relative;
  z-index: 1;
}
.bs-item-list-inner .bs-item {
  margin-bottom: 0.625rem;
}
.bs-item-list-inner .item-meta {
  font-size: 0.875rem;
  color: #A3A5A9;
  letter-spacing: -0.24px;
  line-height: 1;
}
.bs-item-list-inner .follow-wrap {
  margin-top: auto;
}

.bs-item-avatar a {
  display: inline-block;
  position: relative;
}
.bs-item-avatar img.avatar {
  max-width: 125px;
  width: 100%;
}

.grid-view .member-status {
  right: 25px;
  top: 5px;
}
.grid-view .bs-item-avatar {
  margin-bottom: 1rem;
}

/* Actions */
div.action a {
  color: rgba(18, 43, 70, 0.4);
  border: 0;
  display: inline-block;
  line-height: 1;
  /*opacity: 0.4;*/
  padding: 7px 0;
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
  border-style: solid;
}
div.action a.active, div.action a:hover {
  background: transparent;
  color: rgba(18, 43, 70, 0.8);
  /*opacity: 1;*/
}
div.action i {
  font-size: 20px;
}
div.action i:not(.boss-icons) {
  line-height: 0;
}

#buddypress .action .button {
  border: 1px solid #007CFF;
  background: #007CFF;
  border-radius: 100px;
  font-weight: 500;
  font-size: 14px;
  font-style: normal;
  color: #fff;
  letter-spacing: -0.24px;
  padding: 8px 20px;
  display: block;
  line-height: 1.2;
  min-width: 140px;
  opacity: 1;
  -webkit-transition: box-shadow linear 0.2s;
          transition: box-shadow linear 0.2s;
}
#buddypress .action .button:focus, #buddypress .action .button:hover {
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
  color: #fff;
}
#buddypress .action .button:active {
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
  color: #fff;
}
#buddypress .action .button.outline {
  border: 1px solid #007CFF;
  background: transparent;
  color: #007CFF;
  box-shadow: none;
}
#buddypress .action .button.outline:focus, #buddypress .action .button.outline:hover {
  background: transparent;
  box-shadow: none;
}

ul.grid-view .action {
  border-top: 1px solid #E7E9EC;
  margin: 0 -20px;
  /*    position: absolute;
      width: 100%;
      bottom: 0;*/
}
ul.grid-view .action > * {
  border-right: 1px solid #E7E9EC;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
ul.grid-view .action > *:last-child {
  border: 0;
}
ul.grid-view .action .bs-dropdown:after {
  right: 42px;
}

@media (min-width: 800px) and (max-width: 1150px) {
  .has-sidebar .list-view .item-wrap-left {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .has-sidebar .bs-item-list.list-view div.action {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    padding-left: 70px;
  }
  .has-sidebar .list-view .bs-dropdown-wrap {
    position: absolute;
    right: 15px;
    top: 5px;
  }
  .has-sidebar .bs-list-actions {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
  }
  .has-sidebar .bs-item-list.list-view .bs-button-follow {
    margin-left: auto;
    margin-right: 0;
  }
  .has-sidebar .list-view .bs-followers {
    margin: 0 18px 0 0;
  }
}
@media (min-width: 800px) and (max-width: 850px) {
  .has-sidebar .bs-list-actions {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
  }
  .has-sidebar .bs-item-list.list-view .bs-generic-button {
    margin-right: 10px;
  }
  .has-sidebar .bs-item-list.list-view div.action {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }
  .has-sidebar .bs-item-list.list-view .bs-button-follow {
    margin-left: 0;
    margin-top: 5px;
    margin-bottom: 5px;
  }
  .has-sidebar #buddypress .list-view .action .button {
    font-size: 13px;
    min-width: 110px;
    min-height: 24px;
    padding: 6px 20px;
  }

  ul.list-view .bb-profile-index-card-area .action.item-wrap-right:not(.profile-second-row) {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
}
.activity-item-header .item-title span img {
  border-radius: 3px;
}

.bp-login-widget-user-avatar {
  position: relative;
}

.bp-login-widget-user-avatar img.avatar {
  height: auto;
  max-width: 46px;
  width: 100%;
  border-radius: 3px;
}

.bp-login-widget-user-avatar img.avatar.profile-avatar {
  max-width: 110px;
}

#content .bb-profile-avatar {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 160px;
          flex: 0 0 160px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  /*height: 100%;*/
}
.no-cover-img #content .bb-profile-avatar {
  -ms-flex-item-align: end;
      align-self: flex-end;
}
#content .bb-profile-avatar img.profile-avatar {
  background: #fff;
  border: 5px solid #fff;
  box-shadow: 0 2px 5px 0 rgba(18, 43, 70, 0.12), 0 0 0 1px #E7E9EC;
  border-radius: 5px;
  max-width: 180px;
  width: 100%;
}

img.profile-avatar {
  background: #fff;
  border: 5px solid #fff;
  box-shadow: 0 2px 5px 0 rgba(18, 43, 70, 0.12), 0 0 0 1px #E7E9EC;
  border-radius: 5px;
  max-width: 100px;
  width: 100%;
}

.bb-profile-details {
  padding: 0 0 15px 30px;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

.bb-profile-details-inner {
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.bb-profile-details-inner .button {
  margin-top: 6px;
  margin-bottom: 6px;
}
.bb-profile-details-inner a.button.small.outline {
  min-height: 10px;
}

.cover-img .profile-item-header {
  margin: 15px 0 3px;
}

#buddypress .profile-title {
  font-size: 2rem;
  line-height: 1.1;
  margin: 6px 15px 6px 0;
  position: relative;
}
#buddypress .profile-title a {
  color: #122B46;
}
#buddypress .profile-title a:hover {
  color: #007CFF;
}
#buddypress .profile-title .bs-dropdown-wrap {
  font-size: 20px;
}

@media (max-width: 580px) {
  #buddypress .profile-title {
    font-size: 1.5rem;
  }
}
.bb-field-tag {
  margin-right: 15px;
  margin-bottom: 6px;
  margin-top: 6px;
  border-radius: 100px;
}

.profile-item-header + div {
  /*margin-top: -10px;*/
}

.bb-field-tag > span {
  border-radius: 100px;
  display: inline-block;
  font-weight: 500;
  font-size: 10px;
  color: #fff;
  line-height: 18px;
  padding: 0 6px;
  letter-spacing: 0.25px;
  text-transform: uppercase;
  margin: 0 3px;
}

@media (max-width: 580px) {
  .bb-field-tag > span {
    padding: 0 15px;
  }
}
.profile-single-meta {
  font-size: 15px;
  /*margin-bottom: 10px;*/
}

.bs-meta-bp_group_description {
  color: #4D5C6D;
}

.bb-profile-meta {
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  font-size: 14px;
  line-height: 1.3575;
  color: #A3A5A9;
  /*margin-bottom: 16px;*/
}
.bb-profile-meta > span {
  margin-right: 22px;
  /*margin-bottom: 10px;*/
  margin-bottom: 6px;
  margin-top: 6px;
}
.bb-profile-meta span span {
  color: #4D5C6D;
}
.bb-profile-meta a {
  color: #122B46;
  display: inline-block;
  opacity: 0.4;
  -webkit-transition: 0.3s all;
          transition: 0.3s all;
  /*margin-bottom: 10px;*/
}
.bb-profile-meta a:hover {
  opacity: 0.9;
}
.bb-profile-meta i[class*="bb-icon-"] {
  font-size: 19px;
  line-height: 1;
}

.bb-separator-dot {
  color: #122B46;
  opacity: 0.15;
  margin-left: 2px;
}

.normal,
.bb-field-counter {
  margin-right: 18px;
  margin-bottom: 5px;
  margin-top: 5px;
}
.normal i,
.bb-field-counter i {
  line-height: 1;
  margin-right: 5px;
  font-size: 18px;
  position: relative;
  top: 2px;
  color: rgba(18, 43, 70, 0.3);
}
.normal span:not(.bs-output),
.bb-field-counter span:not(.bs-output) {
  font-size: 14px;
  color: #A3A5A9;
}

.profile-single-meta.profile-second-row {
  /*margin-bottom: 8px;*/
}

.bb-profile-details-inner > .action {
  margin-top: 6px;
  margin-bottom: 6px;
  margin-left: 0;
  /*padding-top: 20px;*/
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

.bs-meta-bp_group_privacy {
  line-height: 1;
  text-transform: capitalize;
}

.bs-groups-items.list-view .bs-meta-bp_group_privacy {
  /*background-color: transparent !important;*/
}

#buddypress .list-view div.pending a {
  color: rgba(18, 43, 70, 0.4);
}
#buddypress .list-view div.pending a:hover {
  color: rgba(18, 43, 70, 0.8);
}

#item-nav {
  background: #fff;
  border: 1px solid #E7E9EC;
  padding: 0 20px;
  margin: 0 0 30px;
  border-radius: 0 0 4px 4px;
}
.no-cover-img + #item-nav {
  padding-left: 242px;
}

.main-navs #settings-personal-li,
.main-navs #messages-personal-li,
.main-navs #notifications-personal-li {
  display: none !important;
  width: 0 !important;
}

.single-item #content .bs-meta-bp_group_members .bs-group-members img.round {
  max-width: 32px;
}

.single-item .bs-meta-bp_group_members.bb-field-normal {
  margin: 12px 0;
}

.bs-meta-bp_group_privacy.bb-field-tag i {
  font-size: 10px;
}

@media (max-width: 800px) {
  #content .bb-profile-avatar {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 160px;
            flex: 0 0 160px;
  }

  .profile-title {
    font-size: 28px;
    margin-top: 0;
  }

  .no-cover-img .bb-profile-avatar {
    -ms-flex-item-align: start;
        align-self: flex-start;
  }

  .no-cover-img + #item-nav {
    padding-left: 30px;
  }

  .no-cover-img .bb-profile-avatar img.profile-avatar {
    /*margin-bottom: 30px;*/
  }
}
@media (max-width: 720px) {
  .bb-profile-details-inner > div {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }
}
@media (max-width: 580px) {
  #content .bb-profile-avatar {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    text-align: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  div#bb-media-model-container {
    text-align: left;
  }

  .bb-profile-details {
    margin-bottom: 12px;
  }

  .profile-title {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin: 5px 0;
  }

  .profile-first-row {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-bottom: 5px;
  }

  .bs-groups-items.grid-view .profile-first-row {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
  }

  .profile-item .profile-first-row {
    margin-top: 5px;
  }

  .profile-item-header + div {
    margin-top: 0;
  }

  .bb-profile-details .bb-field-tag {
    margin: 0 5px;
  }

  .bb-profile-details {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding: 0;
    text-align: center;
  }

  #content .no-cover-img .bb-profile-avatar img.profile-avatar {
    display: block;
    margin: 0 auto 20px;
    max-width: 160px;
    float: none;
  }

  div#buddypress div#item-header img.avatar {
    margin: 0 auto;
    float: none;
  }

  div.no-cover-img .bb-profile-details-inner {
    margin-top: 0;
  }

  #buddypress .bb-profile-details .profile-title {
    margin-right: 0;
    margin-bottom: 5px;
  }

  .bb-profile-details-inner .action {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .profile-item-header {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .bb-profile-meta {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .bb-profile-meta > div {
    margin: 0 5px 15px;
  }
  .bb-profile-meta i[class*="bb-icon-"] {
    margin-left: 5px;
  }

  .bs-groups-items.grid-view .bb-profile-meta {
    -webkit-box-pack: left;
        -ms-flex-pack: left;
            justify-content: left;
  }

  span.bb-separator-dot {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .bb-profile-meta > span {
    margin: 0 auto 10px;
    padding: 0 8px;
  }

  .no-cover-img + #item-nav {
    padding-left: 20px;
  }

  #buddypress div.item-list-tabs#object-nav li.hideshow {
    float: right;
    margin: 0;
  }
}
.item-avatar {
  position: relative;
}

.bbp-logged-in h4,
.bp-login-widget-user-link {
  position: relative;
}

.profile-single-meta:empty {
  display: none;
}

.widget .item-avatar {
  position: relative;
}

.medium-editor-toolbar-active.medium-editor-toolbar-active {
  z-index: 9999;
}

.medium-editor-toolbar .medium-editor-toolbar-form-active {
  background: #fff;
  padding: 10px 10px;
  box-shadow: 0 6px 24px 0 rgba(18, 43, 70, 0.08);
  border-radius: 8px;
}
.medium-editor-toolbar .medium-editor-toolbar-form-active .medium-editor-toolbar-form a {
  font-size: 16px;
}

.bp-user-blog > .medium-editor-toolbar .medium-editor-toolbar-form-active {
  background: #242424;
  border-radius: 5px;
  color: #999;
}
.bp-user-blog > .medium-editor-toolbar .medium-editor-toolbar-form-active .medium-editor-toolbar-input,
.bp-user-blog > .medium-editor-toolbar .medium-editor-toolbar-form-active .medium-editor-toolbar-input:focus {
  color: #ccc;
  border: 0;
  height: 50px;
  vertical-align: middle;
}
.bp-user-blog > .medium-editor-toolbar .medium-editor-toolbar-form-active a {
  vertical-align: middle;
}

address {
  font-style: inherit;
}

.bb-field-location {
  margin-bottom: 6px;
  margin-top: 6px;
  margin-right: 20px;
  font-size: 14px;
  line-height: 1.2;
}
.bb-field-location i {
  font-size: 17px;
  line-height: 0;
  position: relative;
  top: 2px;
  margin-left: -3px;
}

.bb-field-icon,
.bb-field-link {
  margin-right: 20px;
  margin-bottom: 6px;
  margin-top: 6px;
}
.bb-field-icon a,
.bb-field-link a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #122B46;
  opacity: 0.4;
  -webkit-transition: 0.3s all;
          transition: 0.3s all;
}
.bb-field-icon a:hover,
.bb-field-link a:hover {
  opacity: 0.9;
}
.bb-field-icon i,
.bb-field-link i {
  font-size: 22px;
  line-height: 1;
}
.bb-field-icon .prefix,
.bb-field-link .prefix {
  line-height: 1;
  margin-left: 8px;
}

.bs-meta-xprofile_field:not(.show-balloon),
.bs-meta-xprofile_field[data-balloon=''] {
  cursor: initial;
}
.bs-meta-xprofile_field:not(.show-balloon):before, .bs-meta-xprofile_field:not(.show-balloon):after,
.bs-meta-xprofile_field[data-balloon='']:before,
.bs-meta-xprofile_field[data-balloon='']:after {
  display: none;
}

.bb-field-icon {
  font-size: 0;
}
.bb-field-icon:before, .bb-field-icon:after {
  display: none;
}
.bb-field-icon.show-balloon:before, .bb-field-icon.show-balloon:after {
  display: block;
}
.bb-field-icon .prefix {
  display: none;
}

.bb-profile-index-card-area {
  height: 100%;
}

.profile-second-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

/* Profile Index Cards - List View */
.list-view .bb-profile-index-card-area .bs-item-wrap {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.list-view .bb-profile-index-card-area .bb-field-counter {
  /*margin-bottom: 0;*/
}
.list-view .bb-profile-index-card-area .profile-single-meta {
  margin-bottom: 0;
}
.list-view .bb-profile-index-card-area div.action i:not(.boss-icons) {
  line-height: 0;
}
#buddypress .list-view .bb-profile-index-card-area .bs-generic-button {
  font-size: 14px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
#buddypress .list-view .bb-profile-index-card-area .bs-generic-button a {
  white-space: nowrap;
  text-overflow: ellipsis;
  /*overflow: hidden;*/
  cursor: pointer;
  /*color: $color-headings;*/
}
.list-view .bb-profile-index-card-area .profile-first-row .bb-field-location {
  margin-bottom: 0;
  margin-top: 2px;
}
.list-view .bb-profile-index-card-area .action.item-wrap-right:not(.profile-second-row) {
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}
.list-view .bb-profile-index-card-area .profile-first-row .bb-field-counter {
  margin-top: 5px;
}
.list-view .bb-profile-index-card-area .bs-item-wrap:last-child {
  border-radius: 0;
}
.list-view .bb-profile-index-card-area .bb-field-description {
  display: none;
}
.list-view .bb-profile-index-card-area .awaiting_response.bs-generic-button + .bs-generic-button {
  /*margin-top: 10px;*/
}

a[data-balloon='']:before,
a[data-balloon='']:after {
  display: none;
}

/* Profile Index Cards - Grid View */
.grid-view .bb-profile-index-card-area .bb-field-location,
.grid-view .bb-profile-index-card-area .profile-first-row .bb-field-location {
  margin-bottom: 0;
  margin-top: 8px;
  margin-right: 0;
}
.grid-view .bb-profile-index-card-area .profile-second-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.grid-view .bb-profile-index-card-area .profile-second-row > div {
  margin: 0 auto;
}
.grid-view .bb-profile-index-card-area .profile-third-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.grid-view .bb-profile-index-card-area .profile-third-row > div {
  margin: 0 auto 10px;
}
.grid-view .bb-profile-index-card-area .bb-field-counter span:not(.bs-output) {
  font-size: 13px;
  letter-spacing: -0.24px;
}
#buddypress .grid-view .bb-profile-index-card-area .bs-generic-button a {
  min-width: 10px;
  height: auto;
  border: 0;
  font-size: 13px;
  line-height: 1.5;
  color: rgba(18, 43, 70, 0.4);
  min-height: 35px;
  cursor: pointer;
  padding: 6px;
  /*opacity: .5;*/
}
#buddypress .grid-view .bb-profile-index-card-area .bs-generic-button a:hover {
  color: rgba(18, 43, 70, 0.8);
}
#buddypress .grid-view .bb-profile-index-card-area .bs-generic-button a i:not(.boss-icons) {
  line-height: 0;
}
.grid-view .bb-profile-index-card-area .bb-field-description p:last-child {
  margin-bottom: 0;
}
.grid-view .bb-profile-index-card-area div.action a {
  width: 100%;
}
.grid-view .bb-profile-index-card-area .profile-single-meta {
  margin-bottom: 12px;
  margin-top: auto;
}
.grid-view .bb-profile-index-card-area .bs-item {
  margin-bottom: 12px;
}

#buddypress .list-view .action .button {
  min-width: 130px;
}

.bb-field-normal {
  margin: 6px 18px 6px 0;
}

.bs-meta-xprofile_field:not(.bb-field-tag) {
  background-color: transparent !important;
}

@media (max-width: 580px) {
  .bb-field-normal {
    margin: 3px 10px 3px 0;
  }
}
#content .bs-meta-bp_group_members .bs-group-members {
  display: inline-block;
  margin-right: 12px;
  min-width: 24px;
}
#content .bs-meta-bp_group_members .bs-group-members img.round {
  border: 1px solid #fff;
  max-width: 24px;
  display: inline-block;
  margin-right: -8px;
  position: relative;
  z-index: 3;
  border-radius: 50%;
  float: left;
}

.bs-meta-bp_group_members.normal > span,
.bs-meta-bp_group_members.bb-field-normal > span {
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

#groups-list .item-avatar a {
  display: inline-block;
}

.entry-content p.bps_filters {
  font-size: 14px;
}

p.bps_filters ~ .bs-members-directory .bs-dir-search {
  margin-top: 0;
}

.widget.widget_bps_widget label {
  font-size: 12px;
}
.widget.widget_bps_widget .label {
  background: transparent;
  padding: 0;
}
.widget.widget_bps_widget a.clear-value {
  display: none !important;
}
.widget.widget_bps_widget .editfield input {
  height: 34px !important;
}

.bb-group-profile-index-card-area .bs-group-toggle {
  /*white-space: nowrap;*/
  display: inline-block;
  margin-left: 15px;
}
.bb-group-profile-index-card-area .bs-groups-items .action {
  padding-left: 12px;
}
.bb-group-profile-index-card-area .bb-field-counter {
  line-height: 1;
}
.bb-group-profile-index-card-area .bs-generic-button + .bs-generic-button {
  margin-top: 10px;
}
.bs-groups-items .bb-group-profile-index-card-area .action {
  padding-left: 20px;
}
.bb-group-profile-index-card-area .bb-field-location {
  margin-bottom: 5px;
}

.bs-meta-bp_group_description {
  line-height: 1.357;
}

.profile-single-meta .normal {
  margin: 6px 0;
}

.bs-meta-bp_group_description.bb-field-description {
  font-size: 14px;
  line-height: 1.357;
  margin-top: 6px;
  margin-bottom: 6px;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
}

.bs-dropdown-model .bb-icon-loader {
  margin-left: 10px;
  font-size: 14px;
  /*float: right;*/
}

ul.bb-profile-fields {
  padding: 0;
  list-style: none;
  margin: 0 0 20px;
}
ul.bb-profile-fields li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin-bottom: 1rem;
}
ul.bb-profile-fields .bb-label {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 140px;
          flex: 0 0 140px;
  font-size: 14px;
  color: #A3A5A9;
  line-height: 1.3;
  padding-right: 10px;
}
ul.bb-profile-fields .bb-data {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  font-size: 14px;
  line-height: 1.3;
  word-wrap: break-word;
  min-width: 0;
}

.single-item.groups.forum .forums-header {
  display: none;
}
.single-item.groups.forum .forums-header h1.entry-title {
  display: none;
  visibility: hidden;
}

#activity-actionlist-media a.close-link {
  display: block;
  cursor: pointer;
  margin: 0 auto;
  max-width: 100px;
  text-align: center;
}

.bs-meta-bp_friends_count span.bs-output,
.bs-meta-bp_followers_count span.bs-output,
.bs-meta-bp_following_count span.bs-output {
  font-weight: 500;
}

body.bs-model-open {
  overflow: hidden;
}

@media (min-width: 992px) and (max-width: 1240px) {
  ul.bs-item-list.bs-groups-items.grid-view.grid .md-grid-1-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
}
@media (min-width: 992px) and (max-width: 1100px) {
  ul.bb-profile-fields li {
    margin-bottom: 1.5rem;
  }

  ul.bb-profile-fields .bb-label {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding: 0;
    margin-bottom: 6px;
  }

  ul.bb-profile-fields .bb-data {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }
}
@media (max-width: 991px) {
  div.bs-profile-details-wrap .lg-grid-1-2:nth-child(2n+1) {
    border: 0;
  }

  .bs-profile-details-grid > div {
    margin-bottom: 20px;
  }
}
@media (min-width: 821px) {
  #buddypress > .no-cover-img > div > div > .bb-profile-avatar > a {
    display: block;
    position: absolute;
    bottom: 0;
    width: 100%;
  }
}
@media (max-width: 832px) {
  #content .bb-profile-avatar {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 140px;
            flex: 0 0 140px;
  }
}
@media (max-width: 580px) {
  #content .bb-profile-avatar {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .entry-header + .entry-content .bs-dir-search {
    margin-top: 0;
    width: 100%;
  }

  .bs-dir-search input[type=text] {
    width: 100%;
  }

  ul.bb-profile-fields li {
    margin-bottom: 1.5rem;
  }

  ul.bb-profile-fields .bb-label {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding: 0;
    margin-bottom: 6px;
  }

  ul.bb-profile-fields .bb-data {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .profile-second-row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .bs-groups-items.grid-view .profile-second-row {
    -webkit-box-pack: left;
        -ms-flex-pack: left;
            justify-content: left;
  }
}
@media (max-width: 767px) {
  ul.bs-item-list.bs-groups-items.list-view .profile-first-row {
    display: block;
  }
  ul.bs-item-list.bs-groups-items.list-view .bb-field-normal {
    margin: 0 0 12px;
  }
  ul.bs-item-list.bs-groups-items.list-view .item-wrap-left {
    margin-bottom: 10px;
  }
  ul.bs-item-list.bs-groups-items.list-view .bs-meta-bp_group_last_active {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 20px;
  }
  ul.bs-item-list.bs-groups-items.list-view .bs-meta-bp_group_privacy {
    display: inline-block;
  }
  ul.bs-item-list.bs-groups-items.list-view .bs-groups-items.list-view .item-title-wrap {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
  }
}
@media (max-width: 560px) {
  .bs-members-items.list-view div.action {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .list-view .bb-profile-index-card-area .action.item-wrap-right:not(.profile-second-row) {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .list-view.bs-groups-items .avatar:not(.profile-avatar) {
    max-width: 70px;
  }

  .bs-item-list-tabs ul {
    display: block;
  }
  .bs-item-list-tabs ul:after {
    content: '';
    display: table;
    clear: both;
  }
  .bs-item-list-tabs ul li {
    float: left;
  }
}
.activity-inner {
  word-break: break-all;
  /*Fixed single activity long link issue*/
}

li.feed > a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
li.feed > a:before {
  margin-right: 3px;
}

.buddypress .bp-invites-content li .status {
  font-size: 13px;
  font-style: normal;
  clear: both;
  color: inherit;
  margin: 0;
  display: none;
}

#buddypress ul.group-inviters {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 0;
}
#buddypress ul.group-inviters li {
  font-size: 13px;
}
#buddypress ul.group-inviters li .avatar {
  max-width: 20px;
  margin-left: 6px !important;
}

#buddypress div#item-header .bb-media-model-container .item-avatar .avatar {
  max-width: 36px;
}

#buddypress div#item-header .activity-item-header .item-title .avatar {
  margin-right: 2px;
  margin-top: 2px;
  float: none;
}

.bs-meta-bp_group_members > span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

.buddypress-wrap input[type=email]:focus,
.buddypress-wrap input[type=password]:focus,
.buddypress-wrap input[type=tel]:focus,
.buddypress-wrap input[type=text]:focus,
.buddypress-wrap input[type=url]:focus,
.buddypress-wrap textarea:focus {
  box-shadow: none;
}

#buddypress button.ac-reply-cancel {
  font-size: 14px;
  font-weight: 500;
  color: #A3A5A9;
  letter-spacing: -0.24px;
  margin-right: 15px;
  background: transparent;
  border: 0;
  padding: 0;
  margin: 0 0 0 10px;
}
#buddypress button.ac-reply-cancel:hover {
  color: #122B46;
}

.vue-tabs .tab-content {
  min-width: 0;
}

.tab-container-inner .v-select .dropdown-toggle .clear {
  background: transparent;
  right: 38px;
  font-size: 20px;
}
.tab-container-inner .v-select .dropdown-toggle .clear:hover {
  color: #EF3E46;
}
.tab-container-inner .v-select.v-select .open-indicator {
  bottom: 8px;
  right: 15px;
}
.tab-container-inner .v-select .open-indicator:before {
  border-width: 2px 2px 0 0;
  width: 8px;
  height: 8px;
}
.tab-container-inner .dropdown-menu li {
  margin-bottom: 0 !important;
}
.tab-container-inner .dropdown-menu li a {
  font-size: 14px !important;
}
.tab-container-inner .v-select.v-select .dropdown-toggle {
  position: relative;
}
.tab-container-inner .v-select .selected-tag {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 82%;
          flex: 0 0 82%;
  margin-top: 0;
  min-width: 0;
  max-width: 82%;
}
.tab-container-inner .bs-styled-checkbox + label:before {
  min-width: 20px;
}
.tab-container-inner input.form-control[type=search] {
  position: absolute;
  left: 0;
}

/* Fixed bp-nouveau - Default styles. */
div, dl, li {
  border-radius: 0;
}

.acomment-content,
.bs-forum-content {
  word-wrap: break-word;
}

body.activity-permalink .activity-list .activity-content .activity-header {
  text-align: left;
}

.bb-model-form-content .vue-input-tag-wrapper .new-tag {
  width: auto;
}

#content #buddypress #bb-media-model-container .activity-comments-items ul:not(.bs-dropdown) {
  padding-bottom: 0;
}

#content #buddypress #bb-media-model-container .activity-comments-items ul .avatar {
  max-width: 28px;
}

.bb-profile-details-inner .bs-generic-button.bs-button-follow > a:first-child {
  margin-right: 12px;
}

.webui-popover-title {
  font-weight: 500;
  padding: 12px 14px;
}

.webui-popover-inner .close {
  font-size: 24px;
  margin: 10px 10px 0 0;
}

.appbosscm-feedback-form-submit-button {
  margin-top: 0;
}

#buddypress #activity-stream .activity-meta .bp-secondary-action.appbosscm-activity-report-button {
  /*    background: transparent;
      box-shadow: none;
      font-size: 0;
      padding: 0;
      top: 0;*/
}

#buddypress #activity-stream .activity-meta .bp-secondary-action.appbosscm-activity-report-button:before {
  content: "\E8EA";
  display: inline-block;
  font: normal normal normal 14px/1 'bb-icons';
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  letter-spacing: normal;
  background: transparent;
  font-size: 15px;
}

.appbosscm-feedback-form-field-wrap select {
  font-size: 14px;
}

.single-post .appbosscm-report-button:after,
.single-attachment .appbosscm-report-button:after,
.activity-comments .appbosscm-report-button:after {
  display: none;
}

.single-attachment .appbosscm-moderation-button-wrap,
.single-post .appbosscm-moderation-button-wrap {
  margin-bottom: 30px;
}

#buddypress .groups-meta.action .appbosscm-moderation-button-wrap {
  padding-left: 10px;
}

#buddypress .groups-meta.action .appbosscm-moderation-button-wrap a {
  box-shadow: none;
}

#buddypress .bs-dropdown .appbosscm-moderation-button-wrap {
  font-family: inherit;
  display: block;
}

#bbpress-forums .bs-dropdown .bbp-admin-links a.bbp-topic-reply-link,
#buddypress .bs-dropdown .appbosscm-moderation-button-wrap .appbosscm-report-button {
  -webkit-font-smoothing: inherit;
  -moz-osx-font-smoothing: inherit;
  border: 0;
}

.medium-editor-toolbar-form-active {
  box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.05), 0 6px 32px 0 rgba(18, 43, 70, 0.1);
  border-radius: 4px;
}

.medium-editor-toolbar-form .medium-editor-toolbar-input,
.medium-editor-toolbar-form .medium-editor-toolbar-input:focus {
  background: transparent;
  border: 1px solid #DEDFE2;
  color: #4D5C6D;
  height: 40px;
}

.medium-editor-toolbar .medium-editor-toolbar-actions {
  height: auto;
  padding: 0;
  overflow: hidden;
  padding: 0 15px 10px;
}

.medium-editor-toolbar li .medium-editor-button-first {
  border-bottom-left-radius: 0 !important;
  border-top-left-radius: 0 !important;
  padding-left: 10px !important;
}

.medium-editor-toolbar li .medium-editor-button-last {
  border-bottom-right-radius: 0 !important;
  border-right: none !important;
  border-top-right-radius: 0 !important;
  padding-right: 10px !important;
}

.bbpress a.medium-editor-toolbar-save,
.bbpress a.medium-editor-toolbar-close,
.buddypress a.medium-editor-toolbar-save,
.buddypress a.medium-editor-toolbar-close {
  font-size: 0;
  color: inherit;
}
.bbpress a.medium-editor-toolbar-save:before,
.bbpress a.medium-editor-toolbar-close:before,
.buddypress a.medium-editor-toolbar-save:before,
.buddypress a.medium-editor-toolbar-close:before {
  font-family: "bb-icons";
  line-height: 20px;
  text-align: center;
}
.bbpress a.medium-editor-toolbar-save:before,
.buddypress a.medium-editor-toolbar-save:before {
  content: '\E876';
  font-size: 22px;
}
.bbpress a.medium-editor-toolbar-close:before,
.buddypress a.medium-editor-toolbar-close:before {
  content: '\E828';
  font-size: 24px;
}

.medium-editor-toolbar-form .medium-editor-toolbar-close {
  margin-left: 0;
  margin-right: 10px;
}

.medium-editor-toolbar-form .medium-editor-toolbar-input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.3);
}

.medium-editor-toolbar-form .medium-editor-toolbar-input:-moz-placeholder {
  color: rgba(0, 0, 0, 0.3);
}

.medium-editor-toolbar-form .medium-editor-toolbar-input::-moz-placeholder {
  color: rgba(0, 0, 0, 0.3);
}

.medium-editor-toolbar-form .medium-editor-toolbar-input:-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.3);
}

.medium-editor-anchor-preview {
  font-size: 14px;
  max-width: 300px;
}
.medium-editor-anchor-preview a {
  margin: 0;
  padding: 5px;
}

.medium-editor-toolbar-actions .medium-editor-action > b {
  font-family: 'bb-icons';
  text-align: center;
  width: 24px;
}
.medium-editor-toolbar-actions .medium-editor-action > b:before {
  font-family: 'bb-icons';
  line-height: 1;
  display: block;
  -webkit-transform: none;
      -ms-transform: none;
          transform: none;
}
.medium-editor-toolbar-actions .medium-editor-action-bold b:before {
  content: '\e94a';
}
.medium-editor-toolbar-actions .medium-editor-action-italic b:before {
  content: '\e949';
}
.medium-editor-toolbar-actions .medium-editor-action-unorderedlist b:before {
  content: '\e959';
  font-size: 14px;
  vertical-align: middle;
  display: inline-block;
  margin-top: 3px;
}
.medium-editor-toolbar-actions .medium-editor-action-orderedlist b:before {
  content: '\e95a';
  font-size: 15px;
  vertical-align: middle;
  display: inline-block;
  margin-top: 2px;
}
.medium-editor-toolbar-actions .medium-editor-action-quote b:before {
  content: '\e95b';
  font-size: 13px;
  margin-top: 3px;
  display: inline-block;
}
.medium-editor-toolbar-actions .medium-editor-action-anchor b:before {
  content: '\e816';
  font-size: 20px;
}
.medium-editor-toolbar-actions .medium-editor-action-pre b:before {
  content: '\e958';
  font-size: 16px;
  margin-top: 2px;
  display: inline-block;
}
.medium-editor-toolbar-actions .medium-editor-action-close b:before {
  content: '\e80a';
}

@media screen and (min-width: 46.8em) {
  .bp-list li .item {
    overflow: visible;
  }
}
.bp-list:before,
.bp-list:after {
  content: normal;
}

.bp-pagination.top {
  display: none;
}

#buddypress a.button {
  color: #fff;
  background-color: #007CFF;
  font-weight: 500;
  text-decoration: none;
  border: 1px solid transparent;
  outline: none;
  vertical-align: middle;
}
#buddypress a.button.small {
  font-size: 14px;
  font-weight: 500;
  min-height: 34px;
  padding: 6px 20px;
  border-radius: 100px;
  line-height: 1.4;
}
#buddypress a.button:hover, #buddypress a.button:focus {
  outline: none;
  text-decoration: none;
  color: #fff;
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
  border-color: transparent;
}
#buddypress a.button:active {
  outline: none;
  text-decoration: none;
  color: #fff;
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
}

form[name=whats-new-form] img {
  /*max-width: 58px;*/
}

#buddypress #admins-list li,
#buddypress #members-list li,
#buddypress #mods-list li {
  overflow: initial;
}

#buddypress #pag-top {
  display: none;
}

#buddypress .dir-form {
  margin-top: 40px;
}

li#members-order-select {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.item-title a {
  color: #122B46;
  display: inline-block;
  font-size: 20px;
  font-weight: 500;
  letter-spacing: -0.24px;
  line-height: 1.2;
}
.item-title a:hover {
  color: #007CFF;
}

@media only screen and (max-width: 320px) {
  #buddypress li div.item {
    margin-left: 0;
  }
}
#buddypress div#item-header img.avatar {
  margin: 0;
  max-width: 160px;
}

#buddypress div#item-header #item-header-cover-image #item-header-content {
  margin-left: 0;
  margin-top: 0;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

#buddypress #item-header-cover-image {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

#item-header-cover-image {
  min-height: 225px;
}

#buddypress div.item-list-tabs#object-nav {
  border-top: 1px solid #E7E9EC;
  margin-top: 20px;
  margin-bottom: 0;
  overflow: visible;
}
#buddypress div.item-list-tabs#object-nav li {
  float: left;
  margin: 0;
  padding: 0 30px 0 0;
}
#buddypress div.item-list-tabs#object-nav li.hideshow {
  padding: 0;
}
#buddypress div.item-list-tabs#object-nav a {
  color: #939597;
  display: block;
  padding: 11px 0;
  text-decoration: none;
  font-size: 14px;
  line-height: 2;
}
#buddypress div.item-list-tabs#object-nav a:hover {
  color: #122B46;
}
#buddypress div.item-list-tabs#object-nav .selected a {
  background-color: transparent;
  border-bottom: 1px solid #007CFF;
  margin-bottom: -1px;
  opacity: 1;
  font-weight: 500;
  color: #122B46;
}
#buddypress div.item-list-tabs#object-nav .selected a span {
  background-color: #007CFF;
}
#buddypress div.item-list-tabs#object-nav span {
  background: #C8CBCF;
  box-shadow: none;
  border-radius: 100px;
  font-size: 11px;
  font-weight: 600;
  color: #fff;
  letter-spacing: -0.26px;
  line-height: 15px;
  border: 0;
  min-width: 22px;
  display: inline-block;
  margin-left: 3px;
  padding: 2px 7px 1px;
  text-align: center;
  vertical-align: middle;
}

p#user_switching_switch_on {
  max-width: 1200px;
  padding-left: 10px;
  padding-right: 10px;
  margin: 20px auto 50px;
}

#buddypress .comment-reply-link,
#buddypress .generic-button a,
#buddypress .standard-form button,
#buddypress a.button,
#buddypress input[type=button],
#buddypress input[type=reset],
#buddypress input[type=submit],
#buddypress ul.button-nav li a,
a.bp-title-button {
  font-family: inherit;
  font-size: 15px;
  color: #fff;
  background-color: #007CFF;
  border-radius: 100px;
  min-height: 40px;
  padding: 10px 20px;
  font-weight: 500;
  text-decoration: none;
  cursor: pointer;
  display: inline-block;
  line-height: 1.3;
  border: 1px solid transparent;
  outline: none;
  vertical-align: middle;
  -webkit-appearance: none;
  -webkit-transition: 0.3s all;
          transition: 0.3s all;
}
#buddypress .comment-reply-link:hover, #buddypress .comment-reply-link:focus,
#buddypress .generic-button a:hover,
#buddypress .generic-button a:focus,
#buddypress .standard-form button:hover,
#buddypress .standard-form button:focus,
#buddypress a.button:hover,
#buddypress a.button:focus,
#buddypress input[type=button]:hover,
#buddypress input[type=button]:focus,
#buddypress input[type=reset]:hover,
#buddypress input[type=reset]:focus,
#buddypress input[type=submit]:hover,
#buddypress input[type=submit]:focus,
#buddypress ul.button-nav li a:hover,
#buddypress ul.button-nav li a:focus,
a.bp-title-button:hover,
a.bp-title-button:focus {
  outline: none;
  text-decoration: none;
  color: #fff;
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
}
#buddypress .comment-reply-link:active,
#buddypress .generic-button a:active,
#buddypress .standard-form button:active,
#buddypress a.button:active,
#buddypress input[type=button]:active,
#buddypress input[type=reset]:active,
#buddypress input[type=submit]:active,
#buddypress ul.button-nav li a:active,
a.bp-title-button:active {
  outline: none;
  text-decoration: none;
  color: #fff;
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
}
#buddypress .comment-reply-link.disabled,
#buddypress .generic-button a.disabled,
#buddypress .standard-form button.disabled,
#buddypress a.button.disabled,
#buddypress input[type=button].disabled,
#buddypress input[type=reset].disabled,
#buddypress input[type=submit].disabled,
#buddypress ul.button-nav li a.disabled,
a.bp-title-button.disabled {
  cursor: default;
  font-style: normal;
  color: #C8CBCF;
  background-color: #F5F5F5;
  opacity: 1;
}
#buddypress .comment-reply-link.small,
#buddypress .generic-button a.small,
#buddypress .standard-form button.small,
#buddypress a.button.small,
#buddypress input[type=button].small,
#buddypress input[type=reset].small,
#buddypress input[type=submit].small,
#buddypress ul.button-nav li a.small,
a.bp-title-button.small {
  font-size: 14px;
  font-weight: 500;
  min-height: 34px;
  padding: 6px 20px;
  border-radius: 100px;
}
#buddypress .comment-reply-link.big,
#buddypress .generic-button a.big,
#buddypress .standard-form button.big,
#buddypress a.button.big,
#buddypress input[type=button].big,
#buddypress input[type=reset].big,
#buddypress input[type=submit].big,
#buddypress ul.button-nav li a.big,
a.bp-title-button.big {
  font-size: 16px;
  min-height: 62px;
  padding: 20px 40px;
  border-radius: 100px;
}
#buddypress .comment-reply-link.large,
#buddypress .generic-button a.large,
#buddypress .standard-form button.large,
#buddypress a.button.large,
#buddypress input[type=button].large,
#buddypress input[type=reset].large,
#buddypress input[type=submit].large,
#buddypress ul.button-nav li a.large,
a.bp-title-button.large {
  font-size: 16px;
  min-height: 50px;
  padding: 14px 30px;
  border-radius: 100px;
}
#buddypress .comment-reply-link.outline,
#buddypress .generic-button a.outline,
#buddypress .standard-form button.outline,
#buddypress a.button.outline,
#buddypress input[type=button].outline,
#buddypress input[type=reset].outline,
#buddypress input[type=submit].outline,
#buddypress ul.button-nav li a.outline,
a.bp-title-button.outline {
  background: none;
  border-width: 1px;
  border-color: #007CFF;
  color: #007CFF;
}
#buddypress .comment-reply-link.outline:hover,
#buddypress .generic-button a.outline:hover,
#buddypress .standard-form button.outline:hover,
#buddypress a.button.outline:hover,
#buddypress input[type=button].outline:hover,
#buddypress input[type=reset].outline:hover,
#buddypress input[type=submit].outline:hover,
#buddypress ul.button-nav li a.outline:hover,
a.bp-title-button.outline:hover {
  background: none;
  color: #0070e6;
  border-color: #0070e6;
  box-shadow: none;
}
#buddypress .comment-reply-link.outline:active,
#buddypress .generic-button a.outline:active,
#buddypress .standard-form button.outline:active,
#buddypress a.button.outline:active,
#buddypress input[type=button].outline:active,
#buddypress input[type=reset].outline:active,
#buddypress input[type=submit].outline:active,
#buddypress ul.button-nav li a.outline:active,
a.bp-title-button.outline:active {
  background: none;
  color: #2e94ff;
  border-color: #2e94ff;
  box-shadow: none;
}
#buddypress .comment-reply-link.outline:disabled, #buddypress .comment-reply-link.outline.disabled,
#buddypress .generic-button a.outline:disabled,
#buddypress .generic-button a.outline.disabled,
#buddypress .standard-form button.outline:disabled,
#buddypress .standard-form button.outline.disabled,
#buddypress a.button.outline:disabled,
#buddypress a.button.outline.disabled,
#buddypress input[type=button].outline:disabled,
#buddypress input[type=button].outline.disabled,
#buddypress input[type=reset].outline:disabled,
#buddypress input[type=reset].outline.disabled,
#buddypress input[type=submit].outline:disabled,
#buddypress input[type=submit].outline.disabled,
#buddypress ul.button-nav li a.outline:disabled,
#buddypress ul.button-nav li a.outline.disabled,
a.bp-title-button.outline:disabled,
a.bp-title-button.outline.disabled {
  background: none;
  color: #C8CBCF;
  border-color: #F5F5F5;
  opacity: 1;
}

#buddypress .standard-form button.wp-switch-editor {
  padding: 6px 12px;
  height: auto;
  min-height: 10px;
  border-radius: 0;
  border: 1px solid #d7e0e2;
  border-bottom: 0;
  background: #dcdcdc;
  color: inherit;
}
#buddypress .standard-form .tmce-active .wp-switch-editor.switch-tmce {
  background: #f5f5f5;
}
#buddypress .standard-form .html-active .wp-switch-editor.switch-html {
  background: #f5f5f5;
}
#buddypress .standard-form .html-active .button {
  min-height: 20px;
  color: #122B46;
  border: 1px solid #d7e0e2;
  padding: 6px 6px;
  margin: 4px 1px;
  font-size: 13px;
  line-height: 1;
  border-radius: 3px;
}

#buddypress a.button.outline {
  box-shadow: none;
}

#buddypress table.notification-settings th.title,
#buddypress table.profile-settings th.title {
  width: 100%;
  padding: 0 0 20px;
  border: 0;
}

#buddypress div.item-list-tabs ul:after {
  content: '';
  display: table;
  clear: both;
}

#buddypress div.item-list-tabs#object-nav {
  border-top: 0;
  margin-top: 0;
  margin-bottom: 0;
  overflow: visible;
}

#buddypress div.item-list-tabs#object-nav li li {
  margin: 0;
  display: block;
  width: 100%;
  padding: 0;
}
#buddypress div.item-list-tabs#object-nav li li.selected a {
  border: 0;
}
#buddypress div.item-list-tabs#object-nav li li a {
  display: block;
  font-size: 13px;
  font-weight: inherit;
  color: #4D5C6D;
  letter-spacing: -0.24px;
  line-height: 1;
  margin-bottom: 1px;
  padding: 0.75rem 0.9375rem;
}

.bb-single-bp-header .flex {
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

#buddypress div.item-list-tabs#object-nav a.more-button {
  font-size: 20px;
  padding: 14px 0;
  line-height: 1.1;
}
#buddypress div.item-list-tabs#object-nav a.more-button.active:after {
  bottom: -17px;
}

#buddypress div.item-list-tabs ul.sub-menu {
  top: 50px;
  padding: 10px 0;
}

div.item-list-tabs li.hideshow.menu-item-has-children > a:after {
  top: 50px;
}

#buddypress div.item-list-tabs#object-nav li.hideshow span {
  float: right;
}

/* Site-wide notice */
#sitewide-notice #message {
  background: #1c86f2;
  color: #fff;
  border: 0;
  border-radius: 10px;
  width: auto;
  left: auto;
  right: 1%;
  margin-left: 1%;
  opacity: 0.9;
  font-size: 15px;
  padding: 10px 20px 10px 20px;
}
#sitewide-notice #message h4 {
  max-width: 90%;
  font-size: 18px;
  color: #fff;
  margin-bottom: 10px;
  font-weight: 500;
}
#sitewide-notice #message p {
  padding: 0;
  margin: 0 0 1rem;
  font-size: 1rem;
  line-height: 1.4;
}
#sitewide-notice #message p:empty {
  display: none !important;
}
#sitewide-notice .bb-notice-content > *:last-child {
  margin-bottom: 0;
}
#sitewide-notice ul, #sitewide-notice ol {
  margin-left: 0;
  margin-bottom: 1rem;
  list-style-position: inside;
}
#sitewide-notice button {
  position: absolute;
  top: 15px;
  right: 15px;
  min-height: 0;
  height: 18px;
  width: 18px;
  padding: 0;
  line-height: 16px;
  font-size: 10px;
  font-weight: 800;
  background: #fff;
  color: #1c86f2;
}

@media (min-width: 768px) {
  #sitewide-notice #message {
    min-width: 500px;
  }
}
#buddypress ul.item-list {
  border-top: 0;
  margin-bottom: 20px;
}
#buddypress ul.item-list li:not(.load-more) {
  border-bottom: 0;
}

#buddypress ul.item-list li img.avatar {
  margin: 0;
}

.widget_bp_core_friends_widget .item-meta {
  display: none;
}

.dir-list {
  margin-bottom: 30px;
}

input#send_reply_button {
  min-width: 87px;
}

#buddypress div.item-list-tabs#subnav {
  overflow: visible;
}

.bs-dropdown-model {
  display: none;
}
.bs-dropdown-model.open {
  display: block;
}

.gif-search-result .loading-icon {
  display: block;
  margin: 0 auto;
  max-height: 300px;
}

#buddypress div#message-thread div.message-content {
  margin-left: 0;
}

#buddypress div.item-list-tabs ul.bs-dropdown {
  padding: 10px 0;
}
#buddypress div.item-list-tabs ul.bs-dropdown a {
  padding: 9px 15px;
}

#buddypress #member-forums-sub-nav ul {
  margin-bottom: 25px;
}
#buddypress #member-forums-sub-nav li {
  padding-right: 30px;
  padding-bottom: 10px;
}
#buddypress #member-forums-sub-nav a {
  display: block;
  font-size: 14px;
  color: #939597;
  opacity: 1;
  padding: 0 0 10px;
}
#buddypress #member-forums-sub-nav .selected a {
  background: transparent;
  border-bottom: 1px solid #007CFF;
  font-weight: 500;
  font-size: 14px;
  color: #122B46;
  opacity: 1;
}

@media (max-width: 540px) {
  .bb-photos-wrap .bb-title {
    margin: 0 0 20px;
  }

  .bb-single-bp-header .push-right {
    /*margin: 0;*/
  }

  .bb-photos-actions {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }
  .bb-photos-actions a {
    margin-bottom: 10px;
    margin-left: 0 !important;
  }
}
#buddypress .dir-search input[type=search],
#buddypress .dir-search input[type=text],
#buddypress .groups-members-search input[type=search],
#buddypress .groups-members-search input[type=text],
#buddypress .standard-form input[type=color],
#buddypress .standard-form input[type=date],
#buddypress .standard-form input[type=datetime-local],
#buddypress .standard-form input[type=datetime],
#buddypress .standard-form input[type=email],
#buddypress .standard-form input[type=month],
#buddypress .standard-form input[type=number],
#buddypress .standard-form input[type=password],
#buddypress .standard-form input[type=range],
#buddypress .standard-form input[type=search],
#buddypress .standard-form input[type=tel],
#buddypress .standard-form input[type=text],
#buddypress .standard-form input[type=time],
#buddypress .standard-form input[type=url],
#buddypress .standard-form input[type=week],
#buddypress .standard-form select,
#buddypress .standard-form textarea {
  display: inline-block;
  font-family: inherit;
  font-style: inherit;
  font-size: 15px;
  height: 40px;
  outline: none;
  vertical-align: middle;
  background-color: #fff;
  border: 1px solid #DEDFE2;
  border-radius: 3px;
  box-shadow: none;
  padding: 0 12px;
  width: 100%;
}

#buddypress .standard-form select {
  background-image: url(../images/svg/arrow-down.svg);
  background-repeat: no-repeat;
  background-position: right 1rem center;
  padding-right: 40px;
}
#buddypress .standard-form select:focus {
  background-image: url(../images/svg/arrow-down.svg);
  background-repeat: no-repeat;
  background-position: right 1rem center;
}
#buddypress .standard-form select[multiple] {
  background-image: none;
}

#buddypress .standard-form input[type=search] {
  background-repeat: no-repeat;
  background-position: 10px 50%;
  background-size: 16px;
  background-image: url(../images/svg/search.svg);
  background-position: left 10px center;
  padding-left: 2rem;
}

.widget.buddypress .bp-login-widget-user-links > div {
  padding: 0;
}

.widget_bp_core_login_widget {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.widget_bp_core_login_widget .widget-title {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
}
.widget_bp_core_login_widget .widget-title:empty {
  display: none;
}
.widget_bp_core_login_widget .bp-login-widget-user-avatar {
  margin-right: 15px;
}
.widget_bp_core_login_widget .bp-login-widget-user-links {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.bbp_widget_login {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.bbp_widget_login > .inner {
  width: 100%;
}
.bbp_widget_login .widget-title {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
}
.bbp_widget_login .widget-title:empty {
  display: none;
}
.bbp_widget_login .bbp-logged-in {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.bbp-logged-in {
  position: relative;
}

#buddypress a.disabled,
#buddypress button.disabled,
#buddypress button.pending,
#buddypress div.pending a,
#buddypress input[type=button].disabled,
#buddypress input[type=button].pending,
#buddypress input[type=reset].disabled,
#buddypress input[type=reset].pending,
#buddypress input[type=submit].disabled,
#buddypress input[type=submit].pending,
#buddypress input[type=submit][disabled=disabled] {
  /*border-color: inherit;*/
  /*color: inherit;*/
  cursor: initial;
}

body #buddypress * a {
  box-shadow: initial;
}

body.buddypress .buddypress-wrap h1,
body.buddypress .buddypress-wrap h2,
body.buddypress .buddypress-wrap h3,
body.buddypress .buddypress-wrap h4,
body.buddypress .buddypress-wrap h5,
body.buddypress .buddypress-wrap h6 {
  margin: 0 0 1.6875rem;
}

.bp-navs.bp-navs {
  overflow: initial;
}

body #buddypress .group-item-avatar {
  box-shadow: 0 2px 5px 0 rgba(18, 43, 70, 0.12), 0 0 0 1px #E7E9EC;
}

#buddypress div.item-list-tabs ul li {
  float: left;
  margin: 0;
  list-style: none;
}

#buddypress div.item-list-tabs ul li a,
#buddypress div.item-list-tabs ul li span {
  display: block;
}

.widget.buddypress #friends-list li,
.widget.buddypress #members-list li,
.widget.buddypress #groups-list li {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  margin: 0 0 15px;
  border: 0;
  padding: 0;
}

.buddypress.widget ul.item-list li .item-avatar {
  padding: 0;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 40px;
          flex: 0 0 40px;
}

.buddypress.widget ul.item-list li .item {
  padding: 0;
}

#buddypress div.item-list-tabs ul {
  margin: 0;
  padding: 0;
}

#buddypress .bp-feedback.custom-homepage-info button.bp-tooltip {
  padding: 0;
}

#buddypress .custom-homepage-info.info {
  border: 1px solid #E7E9EC;
  background: #fff;
  box-shadow: none;
  border-radius: 3px;
  padding: 20px;
  position: relative;
  font-size: 16px;
  margin-bottom: 20px;
  margin-top: 0;
}
#buddypress .custom-homepage-info.info button {
  position: absolute;
  right: 10px;
  top: 10px;
  background: transparent;
  border: 0;
  color: #EF3E46;
  box-shadow: none;
}
#buddypress .custom-homepage-info.info p {
  padding: 0;
}
#buddypress .custom-homepage-info.info p:last-child {
  margin-bottom: 0;
}

.bs-groups-items.grid-view .item-avatar .avatar {
  width: 100%;
}

.buddypress-wrap:not(.round-avatars) .bs-groups-items.grid-view .item-avatar .avatar {
  border-radius: 0;
}

.buddypress-wrap a[data-bp-close] span:before,
.buddypress-wrap button[data-bp-close] span:before {
  font-size: 24px;
}

@media screen and (min-width: 75em) {
  .widget-area .buddypress.widget ul.item-list li .avatar,
  .member-front-page .buddypress.widget ul.item-list li .avatar {
    width: 100%;
  }

  .widget-area .buddypress.widget ul.item-list,
  .member-front-page .buddypress.widget ul.item-list {
    margin: 0;
    width: 100%;
  }
}
body.buddypress.register .site-content,
body.buddypress.activation .site-content {
  padding-top: 5%;
}
body.buddypress.register .site-content .content-area,
body.buddypress.activation .site-content .content-area {
  padding-top: 0;
}

@media screen and (min-width: 46.8em) {
  body.buddypress .site-content {
    padding-top: 0;
  }

  .buddypress-wrap.bp-dir-hori-nav:not(.bp-vertical-navs) nav {
    border-bottom: 1px solid #E7E9EC;
    border-top: 0;
    box-shadow: none;
    margin-bottom: 20px;
    margin-top: 0;
  }

  .bp-single-vert-nav .bp-navs.vertical li.selected,
  .bp-single-vert-nav .bp-navs.vertical li:focus,
  .bp-single-vert-nav .bp-navs.vertical li:hover {
    background: rgba(77, 92, 109, 0.1);
  }
}
/* Cover Image */
#cover-image-container {
  background: #fff;
  border: 1px solid #E7E9EC;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin: 0;
  padding: 30px 30px 0;
  font-size: 14px;
  line-height: 1.3575;
}

#header-cover-image {
  background-color: #607387;
}

body #buddypress #header-cover-image {
  background-position: center center;
  margin: -30px -30px 0;
  position: relative;
  width: auto;
}

body #buddypress #header-cover-image.width-full {
  width: 100vw;
  position: relative;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  border-bottom: 1px solid #E7E9EC;
}

body #buddypress #header-cover-image.cover-large {
  height: 300px;
}

body #buddypress #item-header-cover-image {
  min-height: auto;
  margin-bottom: 0;
  padding-bottom: 20px;
  width: 100%;
}

body #buddypress .groups-header #item-header-cover-image {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
body #buddypress .groups-header #item-header-cover-image .group-item-actions {
  min-width: 170px;
}

.bp-user #buddypress #item-header {
  margin: 0;
}

#buddypress #item-header-cover-image #item-header-avatar {
  margin-top: -40px;
  margin-right: 30px;
  margin-bottom: 5px;
  padding: 0;
}

#buddypress #item-header-cover-image.bb-disable-cover-img #item-header-avatar {
  margin-top: 0;
}

body #buddypress #item-header-cover-image #item-header-avatar img.avatar {
  box-shadow: 0 2px 5px 0 rgba(18, 43, 70, 0.12), 0 0 0 1px #E7E9EC;
  border: 5px solid #fff;
  max-width: 180px;
}

body #buddypress:not(.round-avatars) #item-header-cover-image #item-header-avatar img.avatar {
  border-radius: 4px;
}

nav#object-nav {
  background: #FBFBFC;
  border: 1px solid #E7E9EC;
  padding: 0 20px;
  margin: 0 0 20px;
  margin-top: -1px;
  border-radius: 0 0 4px 4px;
}
nav#object-nav li {
  float: left;
  margin: 0;
  padding: 0 30px 0 0;
}
nav#object-nav li.hideshow {
  padding-right: 5px;
}
nav#object-nav a {
  color: #939597;
  display: block;
  padding: 11px 0;
  text-decoration: none;
  font-size: 14px;
  line-height: 2;
}

.buddypress-wrap .bp-navs li:not(.current) a:focus,
.buddypress-wrap .bp-navs li:not(.current) a:hover,
.buddypress-wrap .bp-navs li:not(.selected) a:focus,
.buddypress-wrap .bp-navs li:not(.selected) a:hover {
  background: transparent;
  color: #122B46;
}

.buddypress-wrap .bp-navs li.current a .count,
.buddypress-wrap .bp-navs li.dynamic.current a .count,
.buddypress-wrap .bp-navs li.selected a .count,
.buddypress_object_nav .bp-navs li.current a .count,
.buddypress_object_nav .bp-navs li.selected a .count {
  background-color: #007CFF;
}

nav#object-nav .selected > a {
  background-color: transparent;
  border-bottom: 1px solid #007CFF;
  margin-bottom: -1px;
  opacity: 1;
  font-weight: 500;
  color: #122B46;
}

body #buddypress div#item-header-cover-image h2,
body #buddypress div#item-header-cover-image h2 a {
  font-size: 2rem;
  position: relative;
  color: #122B46;
  text-shadow: none;
}

body #cover-image-container span.activity {
  font-size: 14px;
}

.single-headers .item-meta {
  margin: 0 0 10px;
  padding: 0;
}

#item-header-cover-image .member-header-actions .generic-button a,
#item-header-cover-image .member-header-actions .generic-button button {
  font-size: 12px;
  min-height: 30px;
  padding: 0 20px;
  line-height: 28px;
}
#item-header-cover-image .member-header-actions .generic-button a.friendship-button.pending_friend.requested,
#item-header-cover-image .member-header-actions .generic-button button.friendship-button.pending_friend.requested {
  line-height: 13px;
}
#item-header-cover-image .member-header-actions div.generic-button {
  display: inline-block;
  float: none;
}
#item-header-cover-image .member-header-actions > li {
  float: none;
}
#item-header-cover-image .flex > #send-private-message {
  margin-top: 35px;
  text-align: left;
  min-width: 140px;
  margin-right: -20px;
}
#item-header-cover-image .flex > #send-private-message .thickbox {
  font-size: 12px;
  min-height: 30px;
  padding: 0 20px;
  line-height: 28px;
}

@media screen and (max-width: 1200px) {
  .has-sidebar #buddypress div#item-header #item-header-cover-image #item-header-content > .flex {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }
  .has-sidebar #buddypress div#item-header #item-header-cover-image #item-header-content > .flex .bb-user-content-wrap {
    -webkit-box-flex: 100%;
        -ms-flex: 100%;
            flex: 100%;
  }
  .has-sidebar #buddypress div#item-header #item-header-cover-image #item-header-content > .flex .flex > #send-private-message {
    margin: 5px 0 10px 10px;
  }
}
@media screen and (max-width: 980px) {
  .bp_members.type-bp_members .flex > #send-private-message {
    margin: 20px 0 10px 0 !important;
    -webkit-box-flex: 100%;
        -ms-flex: 100%;
            flex: 100%;
  }
}
@media screen and (max-width: 782px) {
  .bp_members.type-bp_members #item-header-content .gamipress-buddypress-points {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .bp_members.type-bp_members #item-header-content > .flex .bb-user-content-wrap, .bp_members.type-bp_members #item-header-content > .flex .member-header-actions, .bp_members.type-bp_members #item-header-content > .flex #send-private-message {
    text-align: center;
  }
}
#TB_window {
  border-radius: 4px 4px 4px 4px;
}
#TB_window #TB_title {
  display: inline-block;
  width: 100%;
  height: auto;
  padding: 10px 5px;
  border-radius: 4px 4px 0 0;
}
#TB_window #TB_title #TB_closeAjaxWindow #TB_closeWindowButton {
  right: 10px;
}
#TB_window #TB_title #TB_closeAjaxWindow #TB_closeWindowButton:active, #TB_window #TB_title #TB_closeAjaxWindow #TB_closeWindowButton:focus {
  box-shadow: none;
}
#TB_window #TB_title #TB_closeAjaxWindow #TB_closeWindowButton:focus .tb-close-icon {
  box-shadow: none;
}
#TB_window #TB_ajaxContent {
  padding: 0 20px 20px 20px;
  width: 100% !important;
  height: auto !important;
}
#TB_window #private-message-form-ux {
  margin-bottom: 0;
  margin-top: 12px;
  width: 100%;
}
#TB_window #private-message-form-ux > label {
  margin-bottom: 10px;
  display: inline-block;
}
#TB_window #private-message-form-ux input, #TB_window #private-message-form-ux textarea {
  display: block;
  width: 100%;
  max-height: 200px;
}
#TB_window #private-message-form-ux input + br {
  display: none;
}
@media screen and (max-width: 560px) {
  #TB_window {
    width: 80% !important;
    max-width: 100% !important;
    margin-left: 0 !important;
    margin-top: 0 !important;
    -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
  }
}

body .single-headers a.button,
body .single-headers li.generic-button,
body .single-headers div.generic-button {
  margin: 5px 8px 5px 0;
}

nav#object-nav .more-button {
  font-size: 20px;
  padding: 14px 0;
  line-height: 1.1;
}
nav#object-nav .more-button.active:after {
  bottom: -18px;
}
nav#object-nav .sub-menu {
  top: 50px;
  padding: 10px 0;
}
nav#object-nav .sub-menu li {
  margin: 0;
  display: block;
  width: 100%;
  padding: 0;
}
nav#object-nav .sub-menu a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  font-size: 13px;
  font-weight: inherit;
  color: #939597;
  letter-spacing: -0.24px;
  line-height: 1;
  margin-bottom: 1px;
  padding: .75rem .9375rem;
  overflow: hidden;
}
nav#object-nav .sub-menu a:hover {
  background: #F5F5F5;
}
nav#object-nav .sub-menu span.count {
  float: right;
  font-size: 10px;
}
nav#object-nav .sub-menu .selected > a {
  background: #F5F5F5;
  border: 0;
}

@media screen and (min-width: 46.8em) {
  .single-headers #item-header-content {
    padding-left: 0;
  }
}
/* Subnav */
.buddypress-wrap .bp-subnavs ul li:not(:last-child),
.bp-single-vert-nav .bp-wrap .bp-subnavs ul li.current:not(:last-child) {
  padding-right: 30px;
}

.bp-single-vert-nav .bp-wrap .bp-navs.bp-subnavs {
  margin-bottom: 20px;
}

.buddypress-wrap .bp-subnavs li.current a,
.buddypress-wrap .bp-subnavs li.selected a {
  background: transparent;
  border-bottom: 1px solid #007CFF;
  font-weight: 500;
}

@media screen and (max-width: 782px) {
  #buddypress #item-header-cover-image {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  body #buddypress #item-header-cover-image #item-header-avatar {
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 20px;
  }

  #buddypress div#item-header #item-header-cover-image #item-header-content {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }
}
@media screen and (max-width: 46.8em) {
  .buddypress-wrap:not(.bp-single-vert-nav) .bp-navs li {
    background: transparent;
    float: left;
  }

  .buddypress-wrap .single-screen-navs li {
    border-bottom: 0;
  }

  .buddypress-wrap .bp-subnavs li.current a,
  .buddypress-wrap .bp-subnavs li.current a:focus,
  .buddypress-wrap .bp-subnavs li.current a:hover,
  .buddypress-wrap .bp-subnavs li.selected a,
  .buddypress-wrap .bp-subnavs li.selected a:focus,
  .buddypress-wrap .bp-subnavs li.selected a:hover {
    color: #122B46;
  }
}
/* Search */
.bp-user [data-bp-search] form input[type=text],
.bp-user [data-bp-search] form input[type=search],
body .buddypress-wrap .bp-invites-search-form input[type=search] {
  padding: 6px 10px;
  height: auto;
  font-size: 14px;
}

body .buddypress-wrap .bp-invites-search-form input[type=search],
body .buddypress-wrap form.bp-dir-search-form input[type=search],
body .buddypress-wrap form.bp-messages-search-form input[type=search] {
  background-repeat: no-repeat;
  background-position: 10px 50%;
  background-size: 16px;
  background-image: url(../images/svg/search.svg);
  background-position: left 10px center;
  padding-left: 2rem;
  width: 100%;
  min-width: 210px;
  border-radius: 100px;
}
@media screen and (max-width: 544px) {
  body .buddypress-wrap .bp-invites-search-form input[type=search],
  body .buddypress-wrap form.bp-dir-search-form input[type=search],
  body .buddypress-wrap form.bp-messages-search-form input[type=search] {
    min-width: 150px;
  }
}

body.pending-invites .buddypress-wrap .bp-invites-search-form input[type=search] {
  min-width: 360px;
}
@media screen and (max-width: 544px) {
  body.pending-invites .buddypress-wrap .bp-invites-search-form input[type=search] {
    min-width: 280px;
  }
}

input:-webkit-autofill {
  /*-webkit-box-shadow: 0 0 0 30px white inset;*/
}

body .buddypress-wrap form.bp-messages-search-form input[type=search]:-webkit-autofill {
  background-repeat: no-repeat;
  background-position: 10px 50%;
  background-size: 16px;
  background-image: url(../images/svg/search.svg);
  background-position: left 10px center;
}

.buddypress-wrap form.bp-dir-search-form,
.buddypress-wrap form.bp-invites-search-form,
.buddypress-wrap form.bp-messages-search-form {
  background-color: #fff;
  border: 1px solid #DEDFE2;
  box-shadow: none;
  border-radius: 100px;
  margin: 0;
  position: relative;
}

body #content .buddypress-wrap .bp-invites-search-form .nouveau-search-submit,
#content .buddypress-wrap .subnav-filters div button#user_messages_search_submit {
  padding: 0;
  position: absolute !important;
  width: 30px;
  height: 33px;
  opacity: 0;
  left: 0;
  z-index: 10;
  overflow: hidden;
}

.buddypress-wrap form.bp-dir-search-form button[type=submit],
.buddypress-wrap form.bp-messages-search-form button[type=submit] {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 0;
  height: 0;
}

.buddypress-wrap .bp-tables-user,
.buddypress-wrap .bp-tables-report,
.buddypress-wrap table.forum,
.buddypress-wrap table.wp-profile-fields {
  background-color: #fff;
  border-radius: 4px;
  overflow: hidden;
  box-shadow: 0 0 0 1px #E7EAEC;
}

.buddypress-wrap .bp-tables-user tr td,
.buddypress-wrap .bp-tables-user tr th,
.buddypress-wrap .bp-tables-report tr td,
.buddypress-wrap .bp-tables-report tr th,
.buddypress-wrap table.forum tr td,
.buddypress-wrap table.forum tr th,
.buddypress-wrap table.wp-profile-fields tr td,
.buddypress-wrap table.wp-profile-fields tr th {
  padding: 25px 20px;
}

.buddypress-wrap .bp-tables-user thead tr,
.buddypress-wrap .bp-tables-report thead tr,
.buddypress-wrap table.forum thead tr,
.buddypress-wrap table.wp-profile-fields thead tr {
  background: 0 0;
  border-bottom: 1px solid #E7E9EC;
}

.buddypress-wrap .bp-tables-user tbody tr,
.buddypress-wrap .bp-tables-report tbody tr,
.buddypress-wrap table.forum tbody tr,
.buddypress-wrap table.wp-profile-fields tbody tr {
  background: transparent;
}

.buddypress-wrap .bp-tables-user tbody tr:nth-child(odd),
.buddypress-wrap .bp-tables-report tbody tr:nth-child(odd) {
  background: #F7FAFE;
}

.buddypress-wrap .bp-tables-user tbody tr:hover,
.buddypress-wrap .bp-tables-report tbody tr:hover {
  background: #F5F5F5;
}

td.notification-description a {
  font-size: 16px;
  color: #122B46;
  letter-spacing: -0.24px;
  line-height: 1.3;
  position: relative;
}

.buddypress-wrap .subnav-filters .select-wrap {
  margin-right: 12px;
}

.buddypress-wrap .select-wrap {
  background-color: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 3px;
}

.buddypress-wrap .select-wrap select {
  margin-right: 0;
  padding: 6px 25px 6px 10px;
  position: relative;
  text-indent: 0;
}

.buddypress-wrap .select-wrap span.select-arrow {
  display: none;
}

.buddypress-wrap .current-visibility-level {
  color: #A3A5A9;
}

.buddypress-wrap .field-visibility-settings {
  color: inherit;
}

/*@media screen and (min-width: 32em) {*/
body .buddypress-wrap .subnav-filters .component-filters select,
body .buddypress-wrap .subnav-filters .last select {
  font-size: 14px;
  max-width: 100%;
  min-height: 34px;
  background-image: url(../images/svg/arrow-down.svg);
  background-repeat: no-repeat;
  background-position: right 10px center;
  border: 0;
}

/*}*/
.buddypress-wrap .bp-pagination {
  color: #A3A5A9;
  padding: 10px 0;
}

.buddypress-wrap .notifications-options-nav input#notification-bulk-manage {
  border: 0;
  border-radius: 3px;
  line-height: 1;
  margin: 1px 0 0 10px;
  padding: 0 20px;
  min-height: 34px;
  height: 34px;
  font-size: 14px;
  font-weight: 500;
}

.bb-sort-by-date {
  font-size: 15px;
  color: #A3A5A9;
  letter-spacing: -0.24px;
  margin: 0;
}

span.notifications-order-actions {
  box-shadow: 0 0 0 1px #DEDFE2;
  margin-left: 5px;
  padding-top: 1px;
  position: relative;
}
span.notifications-order-actions .dashicons-arrow-up:before,
span.notifications-order-actions .dashicons-arrow-down:before {
  content: "\e87c";
  font-family: 'bb-icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  list-style: none;
  -webkit-font-smoothing: antialiased;
  font-size: 14px;
  position: relative;
  bottom: 3px;
}
span.notifications-order-actions .dashicons-arrow-down:before {
  content: "\e879";
}

body.buddypress .buddypress-wrap .bs-section-title {
  margin-bottom: 0;
}

.buddypress-wrap .bp-messages {
  border: 1px solid #E7E9EC;
  margin: 0;
  border-radius: 3px;
  /*overflow: hidden;*/
}
.buddypress-wrap .bp-messages:after {
  content: '';
  clear: both;
  display: table;
}

span.count:empty {
  display: none !important;
}

#whats-new-content + #message {
  margin-top: 20px;
}

.buddypress-wrap #group-settings-form .bp-messages {
  margin-bottom: 20px;
}

.buddypress-wrap .bp-feedback,
.widget-error .bp-feedback {
  box-shadow: none;
  border: 1px solid #E7E9EC;
  border-radius: 3px;
  color: #4D5C6D;
  /*overflow: hidden;*/
}
.buddypress-wrap .bp-feedback:after,
.widget-error .bp-feedback:after {
  content: '';
  display: table;
}
.buddypress-wrap .bp-feedback .bp-icon,
.widget-error .bp-feedback .bp-icon {
  border-radius: 3px 0 0 3px;
}
.buddypress-wrap .bp-feedback.help .bp-icon, .buddypress-wrap .bp-feedback.info .bp-icon,
.widget-error .bp-feedback.help .bp-icon,
.widget-error .bp-feedback.info .bp-icon {
  background-color: #007CFF;
}
.buddypress-wrap .bp-feedback.loading .bp-icon,
.widget-error .bp-feedback.loading .bp-icon {
  background-color: #f7ba45;
}
.buddypress-wrap .bp-feedback.success .bp-icon,
.widget-error .bp-feedback.success .bp-icon {
  background-color: #1CD991;
}
.buddypress-wrap .bp-feedback.error .bp-icon,
.widget-error .bp-feedback.error .bp-icon {
  background-color: #EF3E46;
}

.buddypress-wrap .bp-feedback:not(.custom-homepage-info) p,
.widget-error .bp-feedback p {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin: 0;
  padding-right: 20px;
}

#buddypress .bp-invites-content ul.item-list li img.avatar {
  border-radius: 50%;
}

#buddypress .bb-groups-messages-left .action .invite-button,
#item-body #group-invites-container .bp-invites-content .action button.invite-button {
  background: url(../images/svg/circle-add.svg) no-repeat;
  height: 26px;
  width: 26px;
  background-size: contain;
  padding: 0;
  min-width: 26px;
}
#buddypress .bb-groups-messages-left .action .invite-button .icons,
#item-body #group-invites-container .bp-invites-content .action button.invite-button .icons {
  opacity: 0;
  visibility: hidden;
}

#buddypress .bb-groups-messages-left .selected .invite-button,
#item-body #group-invites-container .bp-invites-content .selected .action button.invite-button {
  background: url(../images/svg/circle-close.svg) no-repeat;
}

.buddypress-wrap ul.item-list li .group-remove-invite-button span.icons:before,
.buddypress-wrap ul.item-list li.selected .invite-button span.icons:before {
  content: "\e8f7";
  font-family: 'bb-icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  list-style: none;
  -webkit-font-smoothing: antialiased;
  color: #939597;
}

.buddypress-wrap ul.item-list li .invite-button:not(.group-remove-invite-button) span.icons:before {
  content: "\e921";
}

.buddypress-wrap .bp-feedback p {
  font-size: 14px;
  line-height: 1.5;
  padding: 10px 5px;
}

.bulk-select-check,
.bulk-select-all {
  min-width: 40px;
}
.bulk-select-check label,
.bulk-select-all label {
  margin: 0 !important;
}

.notification-list.bb-nouveau-list {
  margin-bottom: 20px;
}

.notification-list.bb-nouveau-list .actions {
  opacity: 1;
  visibility: visible;
  font-size: 0;
}
.notification-list.bb-nouveau-list .actions a {
  color: rgba(18, 43, 70, 0.4);
  /*opacity: 0.4;*/
  margin-left: 6px;
}
.notification-list.bb-nouveau-list .actions .dashicons {
  font-size: 18px;
}
.notification-list.bb-nouveau-list .actions .delete .dashicons {
  font-size: 16px;
  position: relative;
  top: 2px;
}
.notification-list.bb-nouveau-list .actions .dashicons-visibility:before,
.notification-list.bb-nouveau-list .actions .dashicons-dismiss:before,
.notification-list.bb-nouveau-list .actions .dashicons-trash:before,
.notification-list.bb-nouveau-list .actions .dashicons-hidden:before {
  content: "\e8fc";
  font-family: 'bb-icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  list-style: none;
  -webkit-font-smoothing: antialiased;
  font-size: 15px;
}
.notification-list.bb-nouveau-list .actions .dashicons-dismiss:before {
  content: "\e8f6";
}
.notification-list.bb-nouveau-list .actions .dashicons-trash:before {
  content: "\E937";
}
.notification-list.bb-nouveau-list .actions .dashicons-hidden:before {
  content: "\e8be";
}

.buddypress-wrap .bp-invites-filters ul li #bp-invites-prev-page,
.buddypress-wrap .bp-messages-filters ul li #bp-messages-prev-page,
.buddypress-wrap .bp-invites-filters ul li #bp-invites-next-page,
.buddypress-wrap .bp-messages-filters ul li #bp-messages-next-page {
  /*padding: 6px 20px;*/
}
.buddypress-wrap .bp-invites-filters ul li #bp-invites-prev-page:before,
.buddypress-wrap .bp-messages-filters ul li #bp-messages-prev-page:before,
.buddypress-wrap .bp-invites-filters ul li #bp-invites-next-page:before,
.buddypress-wrap .bp-messages-filters ul li #bp-messages-next-page:before {
  /*        font-family: dashicons;
          position: relative;
          top: 1px;
          float: left;
          margin-right: 6px;
          margin-left: -8px;*/
}
.buddypress-wrap .bp-invites-filters ul li #bp-invites-prev-page .bp-screen-reader-text,
.buddypress-wrap .bp-messages-filters ul li #bp-messages-prev-page .bp-screen-reader-text,
.buddypress-wrap .bp-invites-filters ul li #bp-invites-next-page .bp-screen-reader-text,
.buddypress-wrap .bp-messages-filters ul li #bp-messages-next-page .bp-screen-reader-text {
  /*        position: static !important;
          clip: initial;
          width: auto;
          height: auto;*/
}

.buddypress-wrap .bp-invites-filters ul li #bp-invites-next-page:before,
.buddypress-wrap .bp-messages-filters ul li #bp-messages-next-page:before {
  /*        float: right;
          margin-right: -8px;
          margin-left: 6px;*/
}

.buddypress-wrap .subnav-filters:before,
.buddypress-wrap .subnav-filters:after {
  display: none;
}

.buddypress-wrap .subnav-filters > ul {
  margin-left: 0;
  margin-bottom: 0;
}

@media screen and (min-width: 32em) {
  #activity-stream {
    clear: both;
    padding-top: 0;
  }
}
@media (max-width: 543px) {
  .notification-list.bb-nouveau-list .avatar:not(.profile-avatar) {
    max-width: 44px;
  }
  .notification-list.bb-nouveau-list .actions {
    font-size: 0;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding: 8px 0 0 98px;
  }

  body.buddypress .buddypress-wrap .bs-section-title {
    font-size: 20px;
  }

  .bb-sort-by-date {
    font-size: 13px;
    text-align: right;
  }

  .notification-list .bs-item-wrap:not(.bs-header-item) {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}
/* Acitvity */
form#whats-new-form {
  margin: 0;
}
form#whats-new-form .bp-feedback {
  min-width: 100%;
}
form#whats-new-form #whats-new-post-in-box input[type=text] {
  font-size: 13px;
  min-width: 200px;
}
form#whats-new-form #whats-new-post-in-box .bp-activity-object {
  font-size: 13px;
  border-radius: 3px;
  border-color: #DEDFE2;
}

.buddypress .buddypress-wrap form#whats-new-form button.bp-remove-item.dashicons {
  background-color: transparent;
  border: 0;
  padding: 0;
  margin-top: 2px;
  margin-left: 10px;
  margin-right: 3px;
}
.buddypress .buddypress-wrap form#whats-new-form button.bp-remove-item.dashicons:before {
  content: "\e8f7";
  font-family: 'bb-icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  list-style: none;
  -webkit-font-smoothing: antialiased;
  color: #939597;
}

.buddypress-wrap:not(.bp-single-vert-nav) .main-navs > ul > li > a {
  padding: 0 0 15px;
}

body.buddypress article.page > .entry-header .entry-title {
  font-size: 28px;
}

#buddypress #group-activity-search,
#buddypress #dir-groups-search,
#buddypress #dir-activity-search {
  border: 0;
  background-color: transparent;
  padding-left: 35px;
  font-size: 14px;
  height: 34px;
}

select#activity-filter-by {
  border: 0;
}

.filters .feed {
  height: 34px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.filters .feed a {
  color: rgba(18, 43, 70, 0.4);
}
.filters .feed a:hover {
  color: #122b46;
}

body #buddypress .bp-list .action,
body #bbpress-forums .bp-list .action {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin-bottom: 15px;
}
body #buddypress .bp-list .action .generic-button,
body #bbpress-forums .bp-list .action .generic-button {
  margin-right: 15px;
}

@media screen and (max-width: 400px) {
  body #buddypress #members-list.bp-list.following-list .following-meta.action {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  body #buddypress #members-list.bp-list.following-list .following-meta.action .generic-button,
  body #buddypress #members-list.bp-list.following-list .following-meta.action .generic-button:last-child {
    margin-left: 5px;
    margin-right: 5px;
  }
}
#bp-login-widget-form label {
  display: block;
}
#bp-login-widget-form label[for=bp-login-widget-rememberme] {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
#bp-login-widget-form input {
  margin-bottom: 12px;
}

.widget_bp_core_login_widget label[for="bp-login-widget-user-login"]::before,
.widget_bp_core_login_widget label[for="bp-login-widget-user-pass"]::before {
  top: 30px;
}

.widget_bp_core_login_widget label[for='bp-login-widget-user-pass'] span.label-switch {
  top: 32px;
}

.widget_bp_core_login_widget .forgetmenot {
  width: 100%;
}

.bp-list li .item-avatar {
  float: left;
}

div#cover-image-container {
  margin-top: -31px;
}

@media screen and (min-width: 46.8em) {
  .bp-dir-vert-nav .dir-navs {
    min-width: 180px;
  }

  .bp-dir-vert-nav .screen-content {
    border-color: #E7E9EC;
  }

  .bp-dir-vert-nav .dir-navs ul li.selected a {
    background: transparent;
    color: inherit;
  }

  .bp-dir-vert-nav .dir-navs ul li.selected {
    border: 0;
  }

  #buddypress.bp-dir-vert-nav .dir-navs a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    border-bottom: 0;
    padding: 4px 0;
  }
  #buddypress.bp-dir-vert-nav .dir-navs li.selected a {
    border-bottom: 0;
  }

  .bp-dir-vert-nav .dir-navs ul li.selected a span {
    color: #fff;
  }

  .bp-dir-vert-nav .dir-navs ul li a:focus span,
  .bp-dir-vert-nav .dir-navs ul li a:hover span {
    border: 0;
  }
}
/* Groups */
.entry-content #groups-list .item-avatar a {
  display: inline-block;
  background: #fff;
  border: 3px solid #fff;
  box-shadow: 0 2px 5px 0 rgba(18, 43, 70, 0.12), 0 0 0 1px #E7E9EC;
  border-radius: 3px;
}

.entry-content .widget #groups-list .item-avatar a {
  box-shadow: none;
  border: 0;
}

.buddypress-wrap.round-avatars .item-avatar a {
  border-radius: 50%;
}

.buddypress-wrap .groups-list li .item-meta {
  margin-bottom: 0;
  line-height: 1.6;
}

.buddypress #buddypress.bp-dir-vert-nav .create-button a {
  font-size: 14px;
  font-weight: 400;
  min-height: 34px;
  padding: 4px 20px;
  border: 1px solid #007CFF;
  background: transparent;
  color: #007CFF;
  box-shadow: none;
  border-radius: 50px;
  text-decoration: none;
}

#buddypress h4.bb-active-order {
  margin: 0 0 0 20px;
}

.buddypress-wrap .groups-list li .group-desc {
  border: 0;
  border-radius: 0;
  color: #737373;
  font-style: italic;
  margin: 0;
  padding: 0;
}

.buddypress-wrap .grid.bp-list > li .item .group-desc,
.buddypress-wrap .grid.bp-list > li .item .item-block {
  width: 100%;
  margin-top: 0;
  min-height: 10px;
  font-size: 13px;
}

.buddypress-wrap .grid.bp-list > li .item .item-block {
  min-height: auto;
}

.buddypress-wrap .grid.groups-list > li .item .last-activity {
  margin-top: 0;
}

.buddypress-wrap .grid.groups-list li .list-title {
  margin-bottom: 10px;
}

.buddypress-wrap .groups-list li p {
  margin: 0 0 15px;
}

.buddypress #buddypress.bp-dir-hori-nav .create-button a,
.buddypress #buddypress.bp-dir-hori-nav .create-button a:hover {
  text-decoration: none;
}

@media screen and (min-width: 24em) {
  .grid.groups-list .list-wrap {
    min-height: 40px;
  }

  .grid.groups-list .list-wrap .item-block {
    min-height: 10px;
  }
}
@media screen and (min-width: 46.8em) {
  .buddypress .bp-vertical-navs .groups-list .item-avatar {
    margin-right: 20px;
    width: auto;
  }

  .buddypress-wrap .groups-list li .group-desc {
    font-size: 13px;
    line-height: 1.5;
    font-style: normal;
  }
}
@media screen and (max-width: 980px) {
  body #buddypress .group-invites-column .bp-list .action {
    -webkit-box-flex: inherit;
        -ms-flex: inherit;
            flex: inherit;
  }
}
body.single-item.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
body.single-item.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
  margin-top: 0;
  margin-left: 0;
  max-width: 100%;
}

.bp-list li .item-meta, .bp-list li .meta {
  letter-spacing: -0.24px;
  line-height: 1.3;
  font-size: 12px;
  font-weight: 300;
  color: #A3A5A9;
  margin: 0;
}

.single-headers {
  margin-bottom: 0;
}

body.buddypress .buddypress-wrap .bp-screen-title {
  margin: 15px 0 0;
  display: none;
}

.single-headers .activity {
  font-size: 13px;
  margin-bottom: 0;
}

#buddypress #item-header-cover-image .highlight {
  margin-bottom: 6px;
  padding: 0;
}

.group-description p {
  margin-bottom: 1rem;
}

.bp-avatar-nav ul,
.bp-avatar-nav ul.avatar-nav-items li.current {
  border-color: #E7E9EC;
  font-size: 14px;
}

.bp-avatar-nav ul.avatar-nav-items li.current {
  border-bottom-color: #fff;
}

#buddypress input#bp-browse-button {
  margin-top: 10px;
}

.avatar-crop-management #avatar-crop-pane {
  margin-bottom: 10px;
}

.avatar-crop-management #avatar-crop-actions a.avatar-crop-cancel {
  color: #939597;
  font-size: 15px;
}
.avatar-crop-management #avatar-crop-actions a.avatar-crop-cancel:hover {
  color: #007CFF;
}

body #buddypress p.warning,
body.profile_page_bp-profile-edit.modal-open #TB_ajaxContent p.warning,
body.users_page_bp-profile-edit.modal-open #TB_ajaxContent p.warning {
  display: block;
  font-size: 85%;
  margin: 1em 0;
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba;
  position: relative;
  padding: 10px 15px;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 4px;
}

.bb-bp-profile-screen {
  font-size: 16px;
}
.bb-bp-profile-screen .bp-cover-image {
  margin-top: 20px;
  margin-bottom: 20px;
}

#buddypress #bp-delete-avatar,
#buddypress #bp-delete-cover-image {
  color: #fff;
  background-color: #EF3E46;
  border: 0;
  font-size: 14px;
  padding: 12px 25px;
  font-weight: 500;
}
#buddypress #bp-delete-avatar:hover,
#buddypress #bp-delete-cover-image:hover {
  color: #fff;
  background-color: #ed262f;
}

/* Register */
#pass-strength-result {
  margin-bottom: 30px;
}

#buddypress .register-section .bp-heading {
  font-size: 18px;
  margin: 0 0 15px;
  line-height: 1.2;
}
#buddypress .register-section label, #buddypress .register-section legend {
  font-weight: normal;
  font-size: 14px;
  margin: 0 0 3px;
}
#buddypress .register-section input[type=password] {
  margin-bottom: 20px;
}
#buddypress .register-section a.clear-value {
  display: none;
}
#buddypress .register-section .field-visibility-settings-header {
  font-size: 12px;
  margin-bottom: 10px;
}
#buddypress .register-section .field-visibility-settings div.radio label {
  position: relative;
}
#buddypress .register-section .field-visibility-settings div.radio .field-visibility-text {
  margin-left: 35px;
}
#buddypress .register-section .field-visibility-settings input[type=radio] {
  width: 22px !important;
  height: 22px;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 10;
  margin-top: 0;
  opacity: 0;
  margin-right: 10px;
}
#buddypress .register-section .field-visibility-settings span.bs-radio {
  display: inline-block;
  vertical-align: middle;
  cursor: pointer;
  position: absolute;
  top: 0;
  left: 0;
  overflow: hidden;
  width: 22px;
  height: 22px;
  line-height: 1;
  background-color: #fff;
  border: 2px solid #D6DCE6;
  border-radius: 100%;
  margin-right: 10px;
  z-index: 7;
}
#buddypress .register-section .field-visibility-settings span.bs-radio.on:after {
  content: '';
  position: absolute;
  top: 2px;
  left: 2px;
  border-radius: 100%;
  width: 14px;
  height: 14px;
  display: inline-block;
  background-color: #007CFF;
  z-index: 9;
}
#buddypress .register-section .visibility-toggle-link {
  font-size: 13px;
  background-color: transparent;
  color: #122B46;
  border: 0;
  font-weight: 600;
  min-height: auto;
  padding: 0;
  vertical-align: baseline;
  border-radius: 0;
  margin-left: 5px;
}
#buddypress .register-section .visibility-toggle-link:hover, #buddypress .register-section .visibility-toggle-link:focus, #buddypress .register-section .visibility-toggle-link:active {
  background: transparent;
  color: #007CFF;
  box-shadow: none;
}
#buddypress .register-section p.description {
  font-size: 14px;
}
#buddypress .register-section .datebox-selects {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
#buddypress .register-section .datebox-selects label,
#buddypress .register-section .datebox-selects select {
  margin-right: 10px;
  margin-bottom: 10px;
}
#buddypress .register-section .wp-editor-tabs button {
  background: transparent;
  border: 1px solid #ddd;
  color: inherit;
  padding: 6px 12px;
  height: auto;
  min-height: 10px;
  border-radius: 3px 3px 0 0;
}
#buddypress .register-section .wp-editor-tabs button:hover, #buddypress .register-section .wp-editor-tabs button:focus, #buddypress .register-section .wp-editor-tabs button:active {
  background: transparent;
  color: inherit;
  border: 1px solid #ddd;
}
#buddypress .register-section .tmce-active .wp-editor-tabs .switch-tmce,
#buddypress .register-section .html-active .wp-editor-tabs .switch-html {
  background-color: #f5f5f5;
  border-bottom-color: #f5f5f5;
}
#buddypress .register-section .quicktags-toolbar .button {
  color: inherit;
  background: transparent;
  border: 0;
  font-weight: bold;
  padding: 0 5px;
  margin: 0 6px 0 0;
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  height: auto;
  min-height: 10px;
}
#buddypress .register-section .editfield:first-child {
  margin-top: 0;
}

@media screen and (min-width: 46.8em) {
  .buddypress-wrap .register-page .layout-wrap {
    display: block;
  }

  .buddypress-wrap.extended-default-reg .register-page .extended-profile,
  .buddypress-wrap.extended-default-reg .register-page .default-profile {
    padding: 0;
  }
}
/* Group Invites */
#group-invites-container ul.subnav li {
  float: none;
  margin: 0;
  padding-right: 0;
}
#group-invites-container ul.subnav a {
  border-bottom: 0;
  padding: 6px 0;
}

@media screen and (max-width: 680px) {
  #group-invites-container ul.subnav li {
    float: left;
  }
}
form#group_invites_search_form:after {
  content: '';
  display: table;
  clear: both;
}

.drag-drop .drag-drop-inside p {
  color: inherit;
}

.groups.group-admin #buddypress #item-body .bp-navs.group-subnav li {
  float: none;
  padding: 0;
}

body .groups-manage-members-list .section-title {
  background: transparent;
  color: #122B46;
  font-weight: 500;
  font-size: 20px;
  line-height: 1.1;
  padding-left: 0;
  letter-spacing: 0;
}

#buddypress #members-list .members-meta.action > .generic-button:last-child a,
#buddypress #members-list .members-meta.action > .generic-button:last-child button {
  font-size: 0.875rem;
  min-height: 32px;
  padding: 5px 20px;
  border-radius: 100px;
  border: 1px solid #007CFF;
  background: transparent;
  color: #007CFF;
  margin-left: 10px;
  min-width: 120px;
}
#buddypress #members-list .members-meta.action > .generic-button:last-child a:hover, #buddypress #members-list .members-meta.action > .generic-button:last-child a:focus,
#buddypress #members-list .members-meta.action > .generic-button:last-child button:hover,
#buddypress #members-list .members-meta.action > .generic-button:last-child button:focus {
  box-shadow: none;
}

#buddypress .groups-manage-members-list {
  padding: 0;
}
#buddypress .groups-manage-members-list ul.item-list {
  margin: 0 0 30px;
}
#buddypress .groups-manage-members-list .item-list > li {
  background-color: #fff;
  border: 1px solid #E7E9EC;
  margin-bottom: -1px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  padding: 15px 20px;
  position: relative;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 0;
}
#buddypress .groups-manage-members-list .item-list > li .avatar {
  max-width: 44px;
  width: 100%;
  margin-right: 15px;
}
#buddypress .groups-manage-members-list .members-manage-buttons {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  padding-left: 57px;
  margin: 0;
}
#buddypress .groups-manage-members-list .members-manage-buttons .button {
  min-width: 20px;
  display: inline-block;
  font-size: 12px;
  min-height: 20px;
  padding: 4px 12px;
  margin: 5px 10px 5px 0;
}
#buddypress .groups-manage-members-list .list-title.member-name a {
  font-size: 20px;
  font-weight: 400;
}

#group-settings-form fieldset {
  border: 0;
  padding: 0;
  margin-bottom: 0;
  margin-top: 0;
  font-size: 14px;
  line-height: 1.5;
}
#group-settings-form p.description {
  padding: 10px;
  font-size: 13px;
  margin-bottom: 20px;
}

.groups.group-admin #item-body #group-settings-form label[for='delete-group-understand'] {
  margin: 30px 0 15px;
}

#buddypress input#delete-group-button {
  color: #fff;
}

div#bs-member-profile:empty {
  display: none;
}

#item-body .bb-message-heading h2,
#item-body .bs-member-notifications .title.title {
  margin: 0;
}

.group-create #buddypress.bp-single-vert-nav #group-invites-container .group-invites-column,
.group-create .type-bp_members #buddypress.bp-single-vert-nav #group-invites-container .group-invites-column {
  padding: 0;
}

.type-bp_members .buddypress-wrap .activity-list .load-more a,
.type-bp_members .buddypress-wrap .activity-list .load-newest a {
  color: #007CFF;
}
.type-bp_members .buddypress-wrap .activity-list .load-more a:hover,
.type-bp_members .buddypress-wrap .activity-list .load-newest a:hover {
  color: #0F74E0;
}

#item-body #group-invites-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
}
#item-body #group-invites-container .bp-navs.group-subnav {
  border-bottom: 0;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 220px;
          flex: 0 0 220px;
  background: #FBFBFC;
  border-right: 1px solid #E7E9EC;
  min-height: 60vh;
  border-radius: 4px 0 0 4px;
  margin: 0;
  padding: 30px 0;
}
#item-body #group-invites-container .bp-navs.group-subnav a {
  border: 0;
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 13px 20px;
  line-height: 1;
  margin-bottom: 1px;
}
#item-body #group-invites-container .bp-navs.group-subnav a:hover {
  background: rgba(77, 92, 109, 0.1);
}
#item-body #group-invites-container .bp-navs.group-subnav .current a,
#item-body #group-invites-container .bp-navs.group-subnav .selected a {
  background: rgba(77, 92, 109, 0.1);
  color: #007CFF;
  font-weight: 400;
}
#item-body #group-invites-container .group-invites-column {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 30px;
}
#item-body #group-invites-container .bp-invites-content .item-list > li {
  background-color: #fff;
  border: 1px solid #E7E9EC;
  border-bottom: 0;
  margin-bottom: -1px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  padding: 15px 20px;
  position: relative;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 0;
  width: 100%;
}
#item-body #group-invites-container .bp-invites-content .item-list > li:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
#item-body #group-invites-container .bp-invites-content .item-list > li:last-child {
  border-bottom: 1px solid #E7EAEC;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
#item-body #group-invites-container .bp-invites-content .list-title {
  color: #122B46;
  font-size: 20px;
  margin: 0 auto;
  width: 100%;
}
#item-body #group-invites-container .bp-invites-content .item-meta .group-inviters li {
  color: #A3A5A9;
}
#item-body #group-invites-container .bp-invites-content .action {
  position: static;
}
#item-body #group-invites-container .bp-invites-content .action button {
  height: auto;
  min-height: 10px;
  padding: 0;
  min-width: 40px;
  border: 0;
  color: inherit;
  background: transparent;
  box-shadow: none;
}
#item-body #group-invites-container .bp-invites-content .action button .icons:before {
  font-size: 22px;
}
#item-body #group-invites-container .bp-invites-content .button.selected {
  color: #EE343C;
}
#item-body #group-invites-container .bp-invites-content #send-invites-editor {
  margin-top: 30px;
}
#item-body #group-invites-container .bp-invites-content #send-invites-editor img.avatar {
  border-radius: 50%;
  max-width: 40px;
}
#item-body #group-invites-container .bp-invites-content #send-invites-editor #bp-send-invites-form label {
  font-size: 14px;
}
#item-body #group-invites-container .bp-invites-content #send-invites-editor #bp-send-invites-form .action {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row-reverse;
      flex-flow: row-reverse;
}
#item-body #group-invites-container .bp-invites-content #send-invites-editor #bp-send-invites-form .action button {
  color: #939597;
}
#item-body #group-invites-container .bp-invites-content #send-invites-editor #bp-send-invites-form .action button#bp-invites-send {
  margin-left: 0;
  background-color: #007CFF;
  color: #fff;
  min-height: 34px;
  padding: 6px 20px;
  border-radius: 100px;
}
#item-body #group-invites-container .bp-invites-content #send-invites-editor #bp-send-invites-form .action button#bp-invites-send:hover {
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
}

#item-body #group-invites-container .bp-invites-content .action {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

@media screen and (min-width: 768px) and (max-width: 1040px) {
  /*#buddypress .bb-bp-settings-content,*/
  .groups.group-admin #buddypress #item-body #group-settings-form,
  #item-body #group-invites-container .group-invites-column,
  #item-body #group-invites-container .bp-navs.group-subnav,
  .groups.group-admin #buddypress #item-body nav.bp-navs.group-subnav {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    min-height: 10px;
    border-right: 0;
    border-radius: 4px 4px 0 0;
  }

  #item-body #group-invites-container .bp-navs.group-subnav,
  .groups.group-admin #buddypress #item-body nav.bp-navs.group-subnav {
    padding: 0;
  }

  #item-body #group-invites-container .group-invites-column,
  .groups.group-admin #buddypress #item-body #group-settings-form {
    padding: 20px;
  }

  #group-invites-container ul.subnav li,
  .groups.group-admin #buddypress #item-body nav.bp-navs.group-subnav li {
    float: left !important;
  }

  #item-body #group-invites-container .bp-navs.group-subnav {
    border-bottom: 1px solid #E7E9EC;
  }
}
@media screen and (max-width: 767px) {
  #item-body #group-invites-container .group-invites-column,
  #item-body #group-invites-container .bp-navs.group-subnav {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    min-height: 10px;
    border-right: 0;
    border-radius: 4px 4px 0 0;
  }

  #item-body #group-invites-container .bp-navs.group-subnav {
    padding: 0;
  }

  #item-body #group-invites-container .group-invites-column {
    padding: 20px;
  }

  #group-invites-container ul.subnav li {
    float: left !important;
  }

  #item-body #group-invites-container .bp-navs.group-subnav {
    border-bottom: 1px solid #E7E9EC;
  }
}
@media screen and (max-width: 680px) {
  #buddypress .bb-bp-settings-content,
  .groups.group-admin #buddypress #item-body #group-settings-form,
  #item-body #group-invites-container .group-invites-column,
  #item-body #group-invites-container .bp-navs.group-subnav,
  .groups.group-admin #buddypress #item-body nav.bp-navs.group-subnav {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    min-height: 10px;
    border-right: 0;
    border-bottom: 1px solid #E7E9EC;
    border-radius: 4px 4px 0 0;
  }

  #item-body #group-invites-container .bp-navs.group-subnav,
  .groups.group-admin #buddypress #item-body nav.bp-navs.group-subnav {
    padding: 0;
  }

  #item-body #group-invites-container .group-invites-column,
  .groups.group-admin #buddypress #item-body form#group-settings-form {
    padding: 20px;
  }

  .groups.group-admin #buddypress #item-body .bp-navs.group-subnav li {
    float: left;
  }
}
/* Create Group */
.groups.group-create #buddypress .group-create-buttons {
  list-style: none;
  margin: 0;
  overflow: hidden;
  display: inline-block;
}

#create-group-form div#header-cover-image {
  background-color: #FBFBFC;
  border-radius: 4px;
  max-width: 100%;
  margin: 0 auto 15px;
}

.groups.group-create .buddypress-wrap {
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  max-width: 960px;
  margin: 50px auto;
  padding: 50px 100px;
}
.groups.group-create .buddypress-wrap h2.bp-subhead {
  font-size: 28px;
  line-height: 1;
  margin-bottom: 30px;
  text-align: center;
}
.groups.group-create .buddypress-wrap #group-create-tabs {
  background: #FBFBFC;
  border-top: 1px solid #E7E9EC;
  border-bottom: 1px solid #E7E9EC;
  margin: 0 -100px 40px;
  padding: 10px 30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 14px;
  letter-spacing: -0.24px;
}
.groups.group-create .buddypress-wrap .group-create-buttons li {
  padding-right: 0px;
}
.groups.group-create .buddypress-wrap .group-create-buttons li a, .groups.group-create .buddypress-wrap .group-create-buttons li span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.groups.group-create .buddypress-wrap .group-create-buttons li:not(:last-child) a:after, .groups.group-create .buddypress-wrap .group-create-buttons li:not(:last-child) span:after {
  content: '';
  display: inline-block;
  width: 24px;
  height: 1px;
  background: #A3A5A9;
  margin: 0 15px;
}
.groups.group-create .buddypress-wrap .group-create-buttons li span {
  color: #A3A5A9;
}
.groups.group-create .buddypress-wrap .group-create-buttons li:not(:last-child) a:after {
  background: #007CFF;
}
.groups.group-create .buddypress-wrap .group-create-buttons li.current a {
  background: transparent;
  color: #007CFF;
}
.groups.group-create .buddypress-wrap label {
  font-size: 15px;
  font-weight: 400;
  color: #122B46;
  letter-spacing: -0.24px;
  line-height: 1;
  margin: 0 0 8px;
  cursor: pointer;
}
.groups.group-create .buddypress-wrap input:not([type=checkbox]):not([type=radio]):not([type=submit]):not([type=button]) {
  /*height: 50px !important;*/
  margin: 0 0 25px;
}
.groups.group-create .buddypress-wrap #group-desc {
  height: 120px !important;
  padding: 10px !important;
  margin: 0 0 25px;
}
.groups.group-create .buddypress-wrap .submit {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.groups.group-create .buddypress-wrap #group-creation-next {
  margin-right: 0;
  margin-bottom: 15px;
}
.groups.group-create .buddypress-wrap #group-creation-previous {
  margin-bottom: 15px;
}
.groups.group-create .buddypress-wrap #group-creation-finish {
  margin-bottom: 15px;
}
.groups.group-create .buddypress-wrap fieldset {
  border: 0;
  padding: 0;
  margin: 0 0 40px;
}
.groups.group-create .buddypress-wrap legend {
  color: #122B46;
  letter-spacing: -0.14px;
  font-size: 18px;
  font-weight: 500;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 20px;
  display: block;
  width: 100%;
  line-height: 1;
  margin-bottom: 22px;
}
.groups.group-create .buddypress-wrap .group-status-type ul {
  font-size: 14px;
  margin: 0 0 30px 53px;
  line-height: 1.6;
  letter-spacing: -0.24px;
}
.groups.group-create .buddypress-wrap h4 {
  font-weight: 500;
}
.groups.group-create .buddypress-wrap .left-menu {
  float: none;
  max-width: 160px;
  margin: 0 auto 30px;
}
.groups.group-create .buddypress-wrap img.avatar {
  width: 100%;
}
.groups.group-create .buddypress-wrap .main-column {
  margin-left: 0;
  font-size: 14px;
  letter-spacing: -0.24px;
  text-align: center;
  line-height: 1.5;
}
.groups.group-create .buddypress-wrap .main-column p {
  margin-bottom: 1rem;
}
.groups.group-create .buddypress-wrap #drag-drop-area {
  background: #FBFBFC;
  border: 1px dashed #E7E9EC;
  border-radius: 3px;
}
.groups.group-create .buddypress-wrap button#bp-delete-avatar {
  margin-top: 30px;
}
.groups.group-create .buddypress-wrap div#avatar-crop-pane {
  margin-bottom: 20px;
}
.groups.group-create .buddypress-wrap #subnav .subnav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.groups.group-create .buddypress-wrap #subnav li {
  margin: 0 12px;
}
.groups.group-create .buddypress-wrap #subnav a {
  font-size: 18px;
  font-weight: 500;
  letter-spacing: -0.14px;
  line-height: 40px;
}
.groups.group-create .buddypress-wrap .group-invites-search.subnav-search,
.groups.group-create .buddypress-wrap .bp-search,
.groups.group-create .buddypress-wrap #group_invites_search_form {
  width: 100%;
}
.groups.group-create .buddypress-wrap input#group_invites_search {
  background-size: 15px;
  background-position: left 14px center;
  background-color: #FBFBFC;
  height: 32px;
  margin: 0;
  border: 0;
  border-radius: 50px;
  padding-left: 38px;
  font-size: 14px;
}
.groups.group-create .buddypress-wrap .bp-invites-content #members-list li {
  background-color: #fff;
  border: 1px solid #E7E9EC;
  margin-bottom: -1px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  padding: 15px 20px;
  position: relative;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 0;
  width: 100%;
}
.groups.group-create .buddypress-wrap .bp-invites-content #members-list .list-title {
  color: #122B46;
  font-size: 20px;
  margin: 0 auto;
  width: 100%;
}
.groups.group-create .buddypress-wrap .bp-invites-content #members-list li.selected {
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.01);
}
.groups.group-create .buddypress-wrap .bp-invites-content #members-list .action {
  position: static;
}
.groups.group-create .buddypress-wrap .bp-invites-content #members-list button {
  height: auto;
  min-height: 10px;
  padding: 0;
  min-width: 60px;
  border: 0;
  color: inherit;
  background: transparent;
  box-shadow: none;
}
.groups.group-create .buddypress-wrap .bp-invites-content #members-list .button.selected {
  color: #EE343C;
}
.groups.group-create .buddypress-wrap .bp-invites-content #members-list button .icons:before {
  font-size: 22px;
}

#item-body #group-invites-container .bp-invites-content ul.item-list li.selected {
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.01);
}

#group-create-body {
  padding: 0;
}
#group-create-body #group-invites-container {
  margin-bottom: 25px;
}
#group-create-body #group-invites-container ul#members-list:after {
  content: '';
  display: table;
  clear: both;
}

#buddypress textarea.activity-update {
  box-shadow: none;
}

.groups.group-admin .settings-header {
  display: none;
}

.bp-feedback {
  clear: both;
}

.bb-group-settings .bs-item-list.list-view .bs-item-wrap {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.bs-member-notifications .title {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.widget .standard-form.bps_form .editfield {
  margin-bottom: 15px;
}
.widget .standard-form.bps_form label {
  display: block;
  margin-bottom: 5px;
}

#buddypress h1.entry-title.settings-title {
  margin: 0;
}

.buddypress-wrap select {
  height: 40px;
}

body #buddypress #item-body blockquote,
body #buddypress .bp-lists blockquote {
  margin-left: 0;
}

div.bp-avatar-status p.updated,
div.bp-cover-image-status p.updated {
  border-radius: 3px;
  font-size: 14px;
  line-height: 1.5;
}

div.bp-avatar-status p.success,
div.bp-cover-image-status p.success {
  background-color: #1CD991;
  border-color: #1CD991;
  color: #fff;
}

.buddypress-wrap a.loading,
.buddypress-wrap input.loading {
  -webkit-transition-property: none !important;
          transition-property: none !important;
  -webkit-transform: none !important;
      -ms-transform: none !important;
          transform: none !important;
  -webkit-animation: none !important;
          animation: none !important;
}

@media screen and (max-width: 800px) {
  .buddypress-wrap div#group-invites-container .group-subnav-filters .last {
    text-align: right;
  }
}
.mce-top-part.mce-top-part:before {
  box-shadow: none;
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-apply span {
  font-size: 18px;
  padding-right: 2px;
  padding-top: 1px;
}

div.has-text-field #wp-link .query-results {
  top: 260px;
}

@media screen and (max-width: 782px) {
  body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
  body.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    text-align: center;
  }

  .groups-header .groups-meta {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  #wp-link-wrap.has-text-field .query-results {
    top: 275px;
  }
}
#buddypress a.view.activity-time-since {
  display: inline-block;
}

.bp-user.notifications #buddypress #item-header {
  margin-bottom: 20px;
  display: none;
}

body #buddypress div#item-header li {
  float: none;
}
body #buddypress div#item-header .activity-comments-items {
  margin: 0;
  list-style: none;
  background: #FBFBFC;
  padding: 15px;
}

div#item-header .bp-feedback.bp-messages {
  border-radius: 0;
  margin-bottom: 20px;
}
div#item-header .bp-feedback.bp-messages .bp-icon {
  border-radius: 0;
}

.type-bp_members div#item-header #cover-image-container + .bp-feedback.bp-messages {
  margin-top: 20px;
}

.bp-user.notifications #buddypress div#item-header .bp-feedback.bp-messages {
  margin-bottom: 0;
}

#bp-send-invites-form #bp-invites-send,
#bp-send-invites-form #bp-invites-reset {
  display: inline-block;
  margin-right: 15px;
  margin-bottom: 15px;
}

#item-header.groups-header .bp-feedback.bp-feedback {
  /*border-bottom: 0;*/
  border-top: 0;
  border-radius: 0;
  padding: 12px 30px;
  margin: 0;
}
#item-header.groups-header .bp-feedback.bp-feedback p {
  padding: 5px;
}

.buddypress-wrap #group-create-body .bp-cover-image-status p.warning {
  box-shadow: none;
  background: #1CD991;
  border-radius: 3px;
}

.buddypress-wrap .filter label {
  font-size: 14px;
  margin-right: 10px;
  margin-bottom: 0;
}
.buddypress-wrap .filter label:before {
  display: none;
}

.buddypress.widget .activity-list blockquote {
  margin: 0 0 10px;
  padding: 0 0 10px;
  font-size: 14px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.buddypress.widget .activity-list blockquote > p {
  word-wrap: break-word;
  margin-bottom: 10px;
}
.buddypress.widget .activity-list blockquote iframe {
  max-width: 100%;
  height: auto;
}
.buddypress.widget .activity-list blockquote footer {
  overflow: hidden;
}
.buddypress.widget .activity-list blockquote cite {
  float: left;
  margin-right: 15px;
}
.buddypress.widget .activity-list blockquote a.view.activity-time-since {
  line-height: 1;
  display: block;
}

.friends-request-list .list-wrap {
  width: 100%;
}

#buddypress .group-front-page {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-left: -10px;
  margin-right: -10px;
  padding-left: 10px;
  padding-right: 10px;
}
#buddypress .group-front-page .group-description {
  padding-left: 10px;
  padding-right: 10px;
  -webkit-box-ordinal-group: 4;
      -ms-flex-order: 3;
          order: 3;
}
#buddypress .group-front-page #group-front-widgets {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 300px;
          flex: 0 0 300px;
  max-width: 300px;
  padding-left: 10px;
  padding-right: 10px;
  -webkit-box-ordinal-group: 2;
      -ms-flex-order: 1;
          order: 1;
}
#buddypress .group-front-page #group-front-widgets .item-avatar .avatar {
  width: 100%;
}
#buddypress .group-front-page .widget_bp_core_login_widget {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
#buddypress .group-front-page .widget_bp_core_login_widget h2.widget-title {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
}
#buddypress .group-front-page .widget .widget-title {
  font-family: inherit;
  font-size: .75rem;
  font-weight: 600;
  letter-spacing: 0.25px;
  line-height: 1rem;
  margin: 0 0 20px;
  text-transform: uppercase;
}

/*#buddypress .member-front-page {
    display: flex;
    flex-flow: row wrap;
    margin-left: -10px;
    margin-right: -10px;
    padding-left: 10px;
    padding-right: 10px;

    > * {
        flex: 1;
    }

    .member-description {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        order: 3;
    }

    #member-front-widgets {
        flex: 0 0 300px;
        order: 1;

        .item-avatar .avatar {
            width: 100%;
        }
    }

    .widget_bp_core_login_widget {
        display: flex;

        h2.widget-title {
            flex: 0 0 100%;
        }
    }

    .widget .widget-title {
        font-family: inherit;
        font-size: .75rem;
        font-weight: 600;
        letter-spacing: 0.25px;
        line-height: 1rem;
        margin: 0 0 20px;
        text-transform: uppercase;
    }
}

.single .hentry .member-front-page blockquote.member-bio {
    background-color: transparent;
    color: inherit;
    font-size: inherit;
    padding: 0;
    line-height: 1.4;
    margin-bottom: 10px;

    &:before {
        display: none;
    }
}*/
.buddypress-wrap .custom-homepage-info button[data-bp-close] span:before {
  font-size: 20px;
}

.custom-homepage-info .dashicons-dismiss {
  color: rgba(18, 43, 70, 0.4);
}
.custom-homepage-info .dashicons-dismiss:hover {
  color: rgba(18, 43, 70, 0.9);
}
.custom-homepage-info .dashicons-dismiss:before {
  display: inline-block;
  text-rendering: auto;
  font-size: 20px;
  font-family: 'bb-icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  list-style: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\e8f6";
}

#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap {
  border-radius: 4px;
  margin-top: 20px;
}
#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical {
  border-radius: 4px 0 0 4px;
}
#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical li {
  -webkit-transition: 0.3s all;
          transition: 0.3s all;
}
#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical li:hover {
  background: rgba(77, 92, 109, 0.1);
}
#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical li a:hover {
  color: #007CFF;
}
#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical li span {
  border-radius: 100px;
}
#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical .selected > a {
  font-weight: inherit;
}

.buddypress-wrap.round-avatars .widget_bp_core_login_widget .avatar {
  border-radius: 3px;
}

.buddypress .buddypress-wrap .mejs-button > button {
  background-color: transparent;
  background-image: url(../../../../../wp-includes/js/mediaelement/mejs-controls.svg);
  color: inherit;
  border: 0;
  padding: 0;
  width: 20px;
}
.buddypress .buddypress-wrap .mejs-button > button:hover {
  background-color: transparent;
}

.buddypress .buddypress-wrap .mejs-play > button {
  background-position: 0 0;
}

.buddypress .buddypress-wrap .mejs-pause > button {
  background-position: -20px 0;
}

.buddypress .buddypress-wrap .mejs-unmute > button {
  background-position: -40px 0;
}

.buddypress .buddypress-wrap .mejs-mute > button {
  background-position: -60px 0;
}

.buddypress .buddypress-wrap .mejs-fullscreen-button > button {
  background-position: -80px 0;
}

.buddypress .buddypress-wrap .mejs-unfullscreen > button {
  background-position: -100px 0;
}

.buddypress .buddypress-wrap .mejs-captions-button > button {
  background-position: -140px 0;
}

.buddypress .buddypress-wrap .mejs-replay > button {
  background-position: -160px 0;
}

.buddypress .buddypress-wrap .mejs-chapters-button > button {
  background-position: -180px 0;
}

.bp-user .messages nav#object-nav,
.bp-user .notifications nav#object-nav,
.bp-user .settings nav#object-nav {
  display: none;
}

.bb-group-header-wrapper {
  overflow: hidden;
  background: #fff;
  border: 1px solid #E7E9EC;
  border-bottom: 0;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin: 0;
  padding: 30px;
  font-size: 14px;
  line-height: 1.3575;
}
.bb-group-header-wrapper .avatar {
  box-shadow: 0 2px 5px 0 rgba(18, 43, 70, 0.12), 0 0 0 1px #E7E9EC;
  border: 5px solid #fff;
  border-radius: 5px;
}

@media screen and (max-width: 46.8em) {
  .buddypress-wrap .bp-subnavs li.current a,
  .buddypress-wrap .bp-subnavs li.current a:focus,
  .buddypress-wrap .bp-subnavs li.current a:hover,
  .buddypress-wrap .bp-subnavs li.selected a,
  .buddypress-wrap .bp-subnavs li.selected a:focus,
  .buddypress-wrap .bp-subnavs li.selected a:hover {
    background: transparent;
  }
}
@media screen and (min-width: 46.8em) {
  .bp-single-vert-nav .bp-wrap:not(.bp-fullwidth-wrap) {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    background: #fff;
    border: 1px solid #E7E9EC;
  }

  .bb-user-nav-display-wrap nav#object-nav.vertical {
    width: 100%;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 200px;
            flex: 0 0 200px;
  }

  nav#object-nav.vertical {
    width: 100%;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 230px;
            flex: 0 0 230px;
    float: left;
    margin: 0;
    min-height: 50vh;
    padding: 0;
    border-radius: 0;
    border: 0;
    border-right: 1px solid #E7E9EC;
    padding: 20px 0;
  }
  nav#object-nav.vertical li {
    width: 100%;
    padding: 0;
  }
  nav#object-nav.vertical .selected > a {
    background: rgba(77, 92, 109, 0.1);
  }
  nav#object-nav.vertical a {
    border: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    margin-bottom: 1px;
    padding: 10px 15px;
  }
  nav#object-nav.vertical a:hover {
    background: rgba(77, 92, 109, 0.1);
  }

  .bp-single-vert-nav .item-body {
    min-height: 50vh;
    padding: 20px;
  }

  .group-invites.buddypress .bp-single-vert-nav .item-body,
  .type-bp_members .bp-single-vert-nav .item-body {
    overflow: inherit;
  }

  .bp-single-vert-nav .bp-navs.vertical ul {
    border-right: 0;
    border-bottom: 0;
    float: none;
    margin-right: 0;
    width: auto;
  }
}
.bp-messages .bp-feedback {
  margin: 12px 8px;
}

.messages .buddypress-wrap .bp-navs li,
.notifications .buddypress-wrap .bp-navs li {
  float: left;
}

.widget.bp-latest-activities .fluid-width-video-wrapper {
  margin-bottom: 25px;
}

.settings-messages + #bb_profile_avatar_wrap,
.bb-group-settings h4 + #bb_profile_avatar_wrap {
  margin: 0 auto 30px;
}

.bb-author.bb-message-title {
  min-height: 67px;
}

.grid-filters .dashicons {
  font: normal normal normal 22px/1 "bb-icons";
  width: auto;
  height: auto;
}
.grid-filters .layout-grid-view .dashicons:before {
  content: '\e82b';
}
.grid-filters .layout-list-view .dashicons:before {
  content: '\e82a';
}

.widget.widget_bp_profile_completion_widget {
  padding-bottom: 10px;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_progress_wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
      flex-flow: column;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_progress_wrap .progress_container {
  -webkit-box-ordinal-group: 2;
      -ms-flex-order: 1;
          order: 1;
  border: 0;
  background-color: #eef0f3;
  margin-bottom: 6px;
  border-radius: 10px;
  overflow: hidden;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_progress_wrap .progress_container .pc_progress {
  height: 6px;
  border-radius: 10px 0 0 10px;
  background-color: #05d786;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_progress_wrap .progress_text_wrap {
  -webkit-box-ordinal-group: 3;
      -ms-flex-order: 2;
          order: 2;
  text-align: left;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_progress_wrap .progress_text_wrap .progress_text {
  color: #a3a5a9;
  font-size: 12px;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .pc_detailed_progress {
  margin-top: 15px;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap {
  margin: 0;
  padding: 10px 0;
  position: relative;
  border-top: 1px solid #E7E9EC;
  margin-left: 30px;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap:before {
  content: '';
  border: 2px solid #d0d3d6;
  margin-left: -30px;
  margin-right: 10px;
  display: inline-block;
  vertical-align: middle;
  height: 22px;
  width: 22px;
  border-radius: 50%;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap .section_number {
  display: none;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap .section_name a {
  text-decoration: none;
  font-size: 15px;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap .progress .completed_staus {
  background-color: transparent;
  border: 1px solid #f78f02;
  color: #f78f02;
  border-radius: 30px;
  width: 40px;
  font-size: 12px;
  font-weight: 600;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap .section_name {
  width: -webkit-calc(100% - 55px);
  width: calc(100% - 55px);
  display: inline-block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  vertical-align: middle;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap.completed:after {
  content: '\e809';
  font-family: "bb-icons";
  position: absolute;
  left: -30px;
  margin-top: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  font-size: 23px;
  color: #05d786;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap.completed:before {
  border-color: #05d786;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap.completed .section_name a {
  text-decoration: line-through;
  font-size: 15px;
  color: #c8cbcf;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap.completed .progress .completed_staus {
  border-color: #05d786;
  color: #05d786;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap.progress_not_started .progress .completed_staus {
  border-color: #ff3a30;
  color: #ff3a30;
}

@media screen and (max-width: 980px) {
  .groups.group-create .buddypress-wrap {
    padding: 50px 30px;
  }

  .groups.group-create .buddypress-wrap #group-create-tabs {
    margin: 0 -30px 40px;
  }
}
@media screen and (max-width: 640px) {
  .bp-invites-content .bp-list li .item-avatar {
    margin-right: 15px;
  }
  .bp-invites-content #members-list.item-list .item-avatar img {
    max-width: 42px;
  }

  #item-body #group-invites-container .bp-invites-content .list-title {
    font-size: 16px;
  }

  #item-body #group-invites-container .bp-invites-content .action button .icons:before {
    font-size: 18px;
  }

  #item-body #group-invites-container .bp-invites-content .action button {
    min-width: 20px;
  }

  .buddypress-wrap .bp-invites-filters ul li #bp-invites-prev-page,
  .buddypress-wrap .bp-messages-filters ul li #bp-messages-prev-page,
  .buddypress-wrap .bp-invites-filters ul li #bp-invites-next-page,
  .buddypress-wrap .bp-messages-filters ul li #bp-messages-next-page {
    margin-bottom: 10px;
  }

  .buddypress-wrap .subnav-filters .bulk-actions-wrap.bp-show {
    margin-top: 20px;
    margin-bottom: 10px;
  }

  .user-messages-bulk-actions .bulk-actions.select-wrap {
    margin-left: 0;
  }

  .submit input#group-creation-create,
  .groups.group-create .buddypress-wrap #group-creation-next,
  .groups.group-create .buddypress-wrap #group-creation-previous {
    font-size: 13px;
    font-weight: 500;
  }

  .groups.group-create .buddypress-wrap label {
    font-size: 14px;
  }

  .groups.group-create .buddypress-wrap .bp-invites-content #members-list .list-title {
    font-size: 16px;
  }

  .groups.group-create .buddypress-wrap .bp-invites-content #members-list .action {
    margin-left: auto;
  }
}
@media screen and (max-width: 511px) {
  .buddypress-wrap .subnav-filters div {
    clear: both;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .buddypress-wrap .subnav-filters .user-messages-bulk-actions div.bulk-actions-wrap {
    margin-top: 10px;
    margin-bottom: 0;
  }
  .buddypress-wrap .subnav-filters .user-messages-bulk-actions div.bulk-actions-wrap div {
    margin-top: 0;
    margin-bottom: 0;
  }

  .buddypress-wrap .subnav-filters > ul {
    margin-left: 0;
    margin-bottom: 0;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  li.group-act-search {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
  }
}
@media screen and (min-width: 55em) {
  body:not(.has-sidebar) .buddypress-wrap .grid.bp-list > li {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333%;
            flex: 0 0 33.333%;
    max-width: 33.333%;
  }
}
@media screen and (min-width: 75em) {
  body:not(.has-sidebar) .buddypress-wrap .grid.bp-list > li {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
}

/* Actiity Update Form ==> Starts Here */
.activity-update-form {
  border: 0;
  margin: 0;
  padding: 0;
}

.activity-update-form #activity-form-submit-wrapper {
  border-top: 1px solid #EEF0F3;
  margin: 0;
  padding: 0 15px;
}

.activity-post-avatar {
  color: #122B46;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: -0.24px;
}
.activity-post-avatar:hover {
  color: #007CFF;
}

#whats-new-form {
  background-color: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  box-shadow: none;
  margin: 0 0 20px;
  padding: 0;
  position: relative;
}
#whats-new-form.focus-in {
  box-shadow: 0 6px 24px 0 rgba(18, 43, 70, 0.08);
}
#whats-new-form .avatar {
  margin-right: 10px;
  max-width: 36px;
}
#whats-new-form .username {
  color: #122B46;
  font-size: 14px;
  font-weight: 500;
  text-transform: capitalize;
}
#whats-new-form .username:hover {
  color: #007CFF;
}
#whats-new-form .activity-url-scrapper-container {
  margin: 0;
  width: 100%;
}
#whats-new-form .activity-url-scrapper-container #activity-link-preview-url {
  max-width: 400px;
  width: 100%;
}
#whats-new-form #whats-new-toolbar,
#whats-new-form #whats-new-attachments {
  margin: 0;
  padding: 0 15px;
}
#whats-new-form #whats-new-toolbar {
  margin-bottom: 10px;
}
@media screen and (max-width: 520px) {
  #whats-new-form #whats-new-toolbar .post-emoji:first-child .emojionearea-picker {
    margin-left: -5px;
  }
  #whats-new-form #whats-new-toolbar .post-emoji:first-child .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 27px;
  }
  #whats-new-form #whats-new-toolbar .post-emoji:nth-child(2) .emojionearea-picker {
    margin-left: -39px;
  }
  #whats-new-form #whats-new-toolbar .post-emoji:nth-child(2) .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 62px;
  }
  #whats-new-form #whats-new-toolbar .post-emoji:nth-child(3) .emojionearea-picker {
    margin-left: -73px;
  }
  #whats-new-form #whats-new-toolbar .post-emoji:nth-child(3) .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 96px;
  }
  #whats-new-form #whats-new-toolbar .post-emoji:nth-child(4) .emojionearea-picker {
    margin-left: -107px;
  }
  #whats-new-form #whats-new-toolbar .post-emoji:nth-child(4) .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 130px;
  }
  #whats-new-form #whats-new-toolbar .post-gif:first-child .gif-media-search-dropdown {
    left: -10px;
  }
  #whats-new-form #whats-new-toolbar .post-gif:first-child .gif-media-search-dropdown.open:before {
    left: 30px;
  }
  #whats-new-form #whats-new-toolbar .post-gif:nth-child(2) .gif-media-search-dropdown {
    left: -44px;
  }
  #whats-new-form #whats-new-toolbar .post-gif:nth-child(2) .gif-media-search-dropdown.open:before {
    left: 64px;
  }
  #whats-new-form #whats-new-toolbar .post-gif:nth-child(3) .gif-media-search-dropdown {
    left: -78px;
  }
  #whats-new-form #whats-new-toolbar .post-gif:nth-child(3) .gif-media-search-dropdown.open:before {
    left: 98px;
  }
  #whats-new-form #whats-new-toolbar .post-gif:nth-child(4) .gif-media-search-dropdown {
    left: -112px;
  }
  #whats-new-form #whats-new-toolbar .post-gif:nth-child(4) .gif-media-search-dropdown.open:before {
    left: 130px;
  }
}
#whats-new-form .gif-image-container img {
  max-width: 100%;
}
#whats-new-form .found-media-item img {
  max-width: 100%;
}

.activity-attached-gif-container {
  background-repeat: no-repeat;
  margin: 15px 0;
  max-width: 100%;
}
.activity-inner .activity-attached-gif-container {
  margin-bottom: 0;
}
.acomment-content .activity-attached-gif-container {
  margin-top: 10px;
}

.gif-image-container video {
  display: block;
}

.activity-attached-gif-container .gif-image-overlay,
.messages-attached-gif-container .gif-image-overlay {
  background: #fd4343;
  width: 20px;
  height: 20px;
  border-radius: 50%;
}

.gif-image-remove .dashicons:before {
  content: '\E828';
  font: normal normal normal 18px/1 "bb-icons";
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-transform: none;
  position: relative;
  top: -4px;
  left: 0px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.emojionearea .emojionearea-picker .emojionearea-scroll-area .emojionearea-category-title {
  color: #122B46;
  font-weight: 500;
}

.ac-reply-toolbar .dashicons,
#whats-new-toolbar .dashicons,
#whats-new-messages-toolbar .dashicons {
  font: normal normal normal 24px/1 "bb-icons";
  color: rgba(18, 43, 70, 0.4);
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
  width: auto;
  height: auto;
}
.ac-reply-toolbar .dashicons-admin-media:before,
#whats-new-toolbar .dashicons-admin-media:before,
#whats-new-messages-toolbar .dashicons-admin-media:before {
  content: '\E805';
}
.ac-reply-toolbar .dashicons-admin-links:before,
#whats-new-toolbar .dashicons-admin-links:before,
#whats-new-messages-toolbar .dashicons-admin-links:before {
  content: '\E816';
}
.ac-reply-toolbar .dashicons-smiley:before,
#whats-new-toolbar .dashicons-smiley:before,
#whats-new-messages-toolbar .dashicons-smiley:before {
  content: '\E811';
}
.ac-reply-toolbar .dashicons-editor-textcolor:before,
#whats-new-toolbar .dashicons-editor-textcolor:before,
#whats-new-messages-toolbar .dashicons-editor-textcolor:before {
  content: '\e980';
  font-size: 15px;
  vertical-align: top;
  margin-top: 4px;
  display: inline-block;
  width: 24px;
}
.ac-reply-toolbar .emojionearea .emojionearea-button:before,
#whats-new-toolbar .emojionearea .emojionearea-button:before,
#whats-new-messages-toolbar .emojionearea .emojionearea-button:before {
  content: '\E821';
  color: rgba(18, 43, 70, 0.4);
  font: normal normal normal 24px/1 "bb-icons";
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.ac-reply-toolbar .emojionearea .emojionearea-button.active:before,
#whats-new-toolbar .emojionearea .emojionearea-button.active:before,
#whats-new-messages-toolbar .emojionearea .emojionearea-button.active:before {
  color: #122B46;
}
.ac-reply-toolbar .toolbar-button.active .dashicons-smiley:before,
.ac-reply-toolbar .toolbar-button.active .dashicons-admin-media:before,
.ac-reply-toolbar .toolbar-button.active .dashicons-editor-textcolor:before,
#whats-new-toolbar .toolbar-button.active .dashicons-smiley:before,
#whats-new-toolbar .toolbar-button.active .dashicons-admin-media:before,
#whats-new-toolbar .toolbar-button.active .dashicons-editor-textcolor:before,
#whats-new-messages-toolbar .toolbar-button.active .dashicons-smiley:before,
#whats-new-messages-toolbar .toolbar-button.active .dashicons-admin-media:before,
#whats-new-messages-toolbar .toolbar-button.active .dashicons-editor-textcolor:before {
  color: #122B46;
}

.activity-update-form #whats-new {
  padding: 10px 15px;
}
.activity-update-form #whats-new pre {
  white-space: pre-wrap;
}
.activity-update-form #whats-new pre p {
  margin-bottom: 0;
}
.activity-update-form #whats-new p {
  margin-bottom: 15px;
}
.activity-update-form #whats-new ul,
.activity-update-form #whats-new ol {
  margin: 0 0 15px;
}
.activity-update-form #whats-new ul li,
.activity-update-form #whats-new ol li {
  margin: 0 0 3px 18px;
}

.activity-update-form #whats-new-content {
  padding: 0;
}

.active #activity-media-button .dashicons,
.active #activity-link-preview-button .dashicons {
  color: #122B46;
}

.activity-update-form #whats-new-avatar {
  background-color: #FBFBFC;
  border-bottom: 1px solid #E7E9EC;
  border-radius: 4px 4px 0 0;
  margin: 0;
  padding: 12px 15px;
  line-height: 36px;
  text-align: left;
  width: 100%;
}

.activity-update-form textarea#whats-new {
  box-shadow: none;
  border: 0;
  border-radius: 0;
  font-size: 1rem;
  font-weight: 300;
  resize: none !important;
  min-height: 85px;
  padding: 15px;
}
.activity-update-form textarea#whats-new:focus {
  box-shadow: none;
}

.activity-update-form #whats-new-post-in-box {
  margin: 10px 0;
}

.focus-in #whats-new-elements {
  border-bottom: 1px solid #E7E9EC;
}

.buddypress-wrap .filter select,
.buddypress-wrap #whats-new-post-in-box select {
  border: 1px solid #DEDFE2;
  font-size: 13px;
  height: 34px;
}

.dropzone .dz-preview .dz-progress .dz-upload {
  background: #007CFF;
}

.dropzone .dz-complete .dz-remove:after {
  position: relative;
  top: -2px;
}

#buddypress #whats-new-submit {
  margin: 10px 0 10px auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row-reverse;
      flex-flow: row-reverse;
}
#buddypress input#aw-whats-new-reset {
  background: transparent;
  border: 0;
  font-size: 14px;
  color: #A3A5A9;
  font-weight: 400;
  margin: 0 10px;
  padding: 0 10px;
  width: auto;
  box-shadow: none;
}
#buddypress input#aw-whats-new-submit {
  font-size: 14px;
  width: auto;
  font-weight: 500;
  letter-spacing: 0;
  height: 34px;
  padding: 0 20px;
  min-height: 34px;
  margin: 0;
}

@media screen and (min-width: 46.8em) {
  .activity-update-form #whats-new-content,
  .activity-update-form #whats-new-elements,
  .activity-update-form #whats-new-post-in-box,
  .activity-update-form #whats-new-submit {
    margin-left: 0;
  }
}
/* Actiity Update Form ==> Ends Here */
/* Actiity Stream Form ==> Starts Here */
ul.activity-list.bp-list {
  background: transparent;
  border: 0;
  padding: 0;
}

#buddypress .activity-list.bp-list .activity-item,
#bbpress-forums .activity-list.bp-list .activity-item {
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  box-shadow: 0 6px 24px 0 rgba(18, 43, 70, 0);
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 20px;
  padding: 15px 15px 0;
}
#buddypress .activity-list.bp-list .activity-item .activity-link-preview-image img,
#bbpress-forums .activity-list.bp-list .activity-item .activity-link-preview-image img {
  margin-top: 0;
  max-width: 200px;
}

#buddypress .bb-media-model-inner .activity-list.bp-list .activity-item,
#bbpress-forums .bb-media-model-inner .activity-list.bp-list .activity-item {
  margin-bottom: 0;
  min-height: 90vh;
}

#buddypress .bb-media-model-container .activity-list.bp-list .activity-item,
#bbpress-forums .bb-media-model-container .activity-list.bp-list .activity-item {
  border-radius: 0;
  border-left: 0;
  border-top: 0;
  border-right: 0;
}

.actvity-head-bar {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 20px 0;
}
.actvity-head-bar .subnav-filters {
  margin: 0 0 0 auto;
}

.activity-list .activity-item .activity-inner p {
  margin-bottom: 15px;
}
.activity-list .activity-item .activity-inner p:last-child {
  margin-bottom: 0;
}

.activity-list .activity-item .activity-inner blockquote:not(.wp-embedded-content) {
  background: #e3e6ea;
  border-radius: 3px;
  padding: 12px;
  font-size: 22px;
  letter-spacing: -0.24px;
  line-height: 30px;
  position: relative;
  margin: 0 0 15px;
}
.activity-list .activity-item .activity-inner blockquote:not(.wp-embedded-content):before {
  content: '\e832';
  font-family: "bb-icons";
  font-style: normal;
  font-weight: normal;
  display: block;
  text-align: center;
  font-variant: normal;
  color: #fff;
  width: 28px;
  height: 28px;
  font-size: 20px;
  line-height: 28px;
  background: #7F868F;
  border-radius: 100%;
  margin-bottom: 10px;
}
.activity-list .activity-item .activity-inner blockquote:not(.wp-embedded-content) p {
  font-size: 20px;
}
.activity-list .activity-item .activity-inner blockquote:not(.wp-embedded-content) p:last-child {
  margin-bottom: 0;
}
.activity-list .activity-item .activity-inner blockquote:not(.wp-embedded-content) em {
  font-size: 14px;
  color: #fff;
  line-height: 18px;
  display: block;
  margin-top: 20px;
  font-style: normal;
}
.activity-list .activity-item .activity-inner blockquote:not(.wp-embedded-content) a {
  color: #A3A5A9;
}
.activity-list .activity-item .activity-inner > ol,
.activity-list .activity-item .activity-inner > ul {
  margin: 0 0 15px;
}
.activity-list .activity-item .activity-inner > ol li,
.activity-list .activity-item .activity-inner > ul li {
  list-style: decimal;
  margin: 0 0 3px 18px;
  padding: 0;
}
.activity-list .activity-item .activity-inner > ol li:before, .activity-list .activity-item .activity-inner > ol li:before,
.activity-list .activity-item .activity-inner > ul li:before,
.activity-list .activity-item .activity-inner > ul li:before {
  display: none;
}
.activity-list .activity-item .activity-inner > ul li {
  list-style: disc;
}
.activity-list .activity-item .activity-inner pre {
  white-space: pre-wrap;
}
.activity-list .activity-item .activity-inner pre p {
  margin-bottom: 0;
}

.activity-list .activity-content .fluid-width-video-wrapper {
  margin-top: 5px;
  margin-bottom: 15px;
}

.bb-activity-media-wrap,
.activity-list .bb-video-wrapper {
  max-width: 640px;
}

.activity-list .activity-item .activity-header {
  color: #7F868F;
  font-size: 14px;
  letter-spacing: -0.24px;
  margin: 0;
  width: auto;
}

.activity-header a {
  font-size: 14px;
  font-weight: 500;
  letter-spacing: -0.24px;
  color: #122B46;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.activity-header a:hover {
  color: #007CFF;
}
.activity-header p {
  margin: 0;
}

.activity-list .activity-item .activity-content .activity-header,
.activity-list .activity-item .activity-content .comment-header {
  margin-bottom: 15px;
}

#buddypress .activity-list .activity-item .activity-header img.avatar {
  margin-right: 5px;
  margin-left: 3px;
  position: relative;
  bottom: 1px;
}

#buddypress a.view.activity-time-since,
#bbpress-forums a.view.activity-time-since {
  display: none;
}

.activity-item-header .item p a img.avatar {
  border-radius: 50%;
  margin-right: 4px;
  position: relative;
  bottom: 1px;
}

.activity-date {
  color: #939597;
  font-size: 12px;
}

.activity-list .activity-item .bp-generic-meta.action {
  border: 0;
  background: transparent;
  padding: 0;
}

body #buddypress .bp-list.bp-list .bp-generic-meta .generic-button,
body #bbpress-forums .bp-list.bp-list .bp-generic-meta .generic-button {
  margin-bottom: 5px;
  margin-right: 15px;
}

#buddypress .activity-list .action.bp-generic-meta .button,
#bbpress-forums .activity-list .action.bp-generic-meta .button,
#buddypress .activity-list .action.bp-generic-meta .open-close-activity {
  background: transparent;
  border: 0;
  color: #007CFF;
  margin: 0;
  min-width: 10px;
  min-height: 1px;
  padding: 0;
  -webkit-transition-property: none !important;
          transition-property: none !important;
  -webkit-transform: none !important;
      -ms-transform: none !important;
          transform: none !important;
  -webkit-animation: none !important;
          animation: none !important;
}
#buddypress .activity-list .action.bp-generic-meta .button:hover, #buddypress .activity-list .action.bp-generic-meta .button:hover span,
#bbpress-forums .activity-list .action.bp-generic-meta .button:hover,
#bbpress-forums .activity-list .action.bp-generic-meta .button:hover span,
#buddypress .activity-list .action.bp-generic-meta .open-close-activity:hover,
#buddypress .activity-list .action.bp-generic-meta .open-close-activity:hover span {
  background: transparent;
  border: 0;
  box-shadow: none;
  color: #007CFF;
}

.activity-list .activity-item .bp-generic-meta.action .unfav:before,
.activity-list .activity-item .bp-generic-meta.action .unfav .like-count {
  color: #007CFF;
}

.activity-list .activity-item .bp-generic-meta.action .unfav:hover:before {
  color: #007CFF;
}

.activity-state {
  color: #A3A5A9;
  font-size: 13px;
  margin-bottom: 5px;
}

.activity-list .activity-item .bp-generic-meta.action .fav:before,
.activity-list .activity-item .bp-generic-meta.action .unfav:before,
.activity-list .activity-item .bp-generic-meta.action .delete-activity:before,
.activity-list .activity-item .bp-generic-meta.action .spam-activity:before,
.activity-list .activity-item .bp-generic-meta.action .acomment-reply.button:before,
.activity-list .activity-item .bp-generic-meta.action .view.button:before,
.activity-list .activity-item .bp-generic-meta.action .open-close-activity:before {
  display: inline-block;
  text-rendering: auto;
  font-size: 22px;
  min-width: 22px;
  font-family: 'bb-icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  list-style: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  vertical-align: middle;
}

.activity-list .activity-item .bp-generic-meta.action .fav:before {
  content: '\e815';
  position: relative;
  top: -2px;
}

.activity-list .activity-item .bp-generic-meta.action .unfav:before {
  content: '\e815';
  position: relative;
  top: -2px;
}

.activity-list .activity-item .bp-generic-meta.action .delete-activity:before {
  content: "\eaea";
  position: relative;
  top: -1px;
  font-size: 19px;
}

.activity-list .activity-item .bp-generic-meta.action .acomment-reply.button:before {
  content: "\e80b";
}

.activity-list .activity-item .bp-generic-meta.action .view.button:before {
  content: "\e89d";
  position: relative;
  top: -1px;
}

.activity-list .activity-item .bp-generic-meta.action .spam-activity:before {
  content: "\e8c9";
  font-size: 16px;
  position: relative;
  top: -2px;
}

.activity-list .activity-item .bp-generic-meta.action .open-close-activity:before {
  content: "\e90d";
  font-size: 15px;
  position: relative;
  top: -2px;
  color: #007CFF;
  min-width: 20px;
  margin-right: 3px;
}

.activity-list .activity-item .bp-generic-meta.action .open-close-activity.bplua-open-activity:before {
  content: "\e8e4";
}

div#buddypress .activity-read-more a {
  font-size: inherit;
  border: 0;
  padding: 0;
}

#buddypress .activity-list .activity-item .bp-generic-meta.action .open-close-activity {
  margin: 0 15px 5px 0 !important;
  box-shadow: none;
  line-height: 32px !important;
}

#buddypress .activity-list .activity-item .bp-generic-meta.action .open-close-activity,
.activity-list .activity-item .bp-generic-meta.action .button span:not(.bp-screen-reader-text) {
  font-size: 13px;
  font-weight: 400;
  color: #7F868F;
  letter-spacing: -0.24px;
  line-height: 1;
  margin-left: 2px;
  -webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: auto;
}

.bp-activity-head {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 15px;
}

.activity-header {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.activity-list.item-list .activity-item .activity-avatar {
  margin: 0 15px 0 0;
  width: auto;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 36px;
          flex: 0 0 36px;
}

.activity-list .activity-item div.item-avatar img,
.activity-list .activity-item.mini .activity-avatar img.avatar,
.activity-list .activity-item.mini .activity-avatar img.FB_profile_pic {
  max-width: 36px;
}

.buddypress-wrap .activity-comments ul {
  margin-top: 15px;
  margin-bottom: 2px;
}

.buddypress-wrap .activity-comments > .ac-form {
  padding-top: 15px;
}

@media screen and (min-width: 46.8em) {
  .buddypress-wrap.bp-dir-hori-nav:not(.bp-vertical-navs) .actvity-head-bar nav {
    margin-bottom: 0;
  }

  .buddypress-wrap .activity-inner {
    font-size: 14px;
  }
}
/* Actiity Stream Form ==> Ends Here */
.buddypress-wrap .activity-comments {
  margin: 0;
  overflow: visible;
}
.buddypress-wrap .activity-comments form {
  margin: 0;
  padding: 0;
  background: #FBFBFC;
  margin: 0 -15px;
  padding: 15px 15px;
}
.buddypress-wrap .activity-comments > ul {
  background: #FBFBFC;
  margin: 0 -15px;
  padding: 15px 15px 0;
  border-top: 1px solid #EEF0F3;
  border-radius: 0 0 4px 4px;
}

.buddypress-wrap .activity-comments > form:first-child {
  border-top: 1px solid #EEF0F3;
}

.activity-list .activity-item.has-comments {
  padding-bottom: 0;
}

.buddypress-wrap .activity-comments form {
  padding-top: 0;
}

.buddypress-wrap .activity-comments li form.ac-form {
  padding-top: 15px;
  padding-bottom: 0;
}

form.ac-form .ac-reply-content {
  padding-left: 0;
}

.activity-comments li form.ac-form {
  margin-right: 0;
}

.activity-list .activity-item,
.buddypress-wrap .activity-comments ul li {
  padding: 0;
}

#buddypress button.ac-reply-cancel {
  background: transparent;
  box-shadow: none;
  border: 0;
  font-size: 14px;
  color: #A3A5A9;
  font-weight: 500;
  margin: 0;
  padding: 0 10px;
  width: auto;
}

.buddypress-wrap .activity-comments .acomment-content {
  border-left: 0;
  margin: 0 0 0 51px;
  padding: 0;
  overflow: hidden;
}

.buddypress-wrap .activity-comments ul ul .acomment-content,
body #buddypress .bp-list .comment-item .comment-item .action {
  margin-left: 43px;
}

.buddypress-wrap .activity-comments ul ul .acomment-content {
  margin-bottom: 5px;
}

.buddypress-wrap .activity-comments .acomment-meta {
  padding-left: 0;
  color: inherit;
}

.activity-comments-items li {
  position: relative;
}
.activity-comments-items .item-title p {
  margin-bottom: 10px;
  margin-top: 10px;
}
.activity-comments-items .bs-item-wrap .item {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
.activity-comments-items .item-title .video-container {
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius: 0;
}

.activity-comments-items:not(.depth1) {
  padding-bottom: 0;
}

.bs-activity-wrap.bb-media-info-section .activity-comments-items {
  max-height: 100%;
  overflow-x: initial;
  overflow-y: initial;
}

@media screen and (max-width: 544px) {
  .activity-update-form #whats-new-post-in-box {
    float: none;
    width: 100%;
  }
  .activity-update-form #whats-new-post-in-box select {
    width: 100%;
  }
}
.activity-type .gif-photo-type {
  font-size: 13px;
  position: absolute;
  z-index: 9;
  cursor: pointer;
  left: 10px;
  bottom: 10px;
  background-color: #000000;
  padding: 2px 10px;
  color: white;
  border-radius: 5px;
  font-weight: lighter;
}

.activity-type .gif-photo-source {
  position: absolute;
  z-index: 9;
  cursor: pointer;
  bottom: -30px;
  font-size: 14px;
  color: #767676;
}

.buddypress-wrap .activity-comments .bp-feedback {
  padding: 5px 10px;
  font-size: 13px;
}
.buddypress-wrap .activity-comments .bp-feedback.error {
  background-color: #EF3E46;
  color: #fff;
  border: 0;
  margin-top: 20px;
}

body #buddypress .bp-list .activity-comments .action {
  line-height: 1;
  margin-left: 51px;
}

.activity-list.item-list .activity-item .activity-comments img.avatar {
  max-width: 36px;
  width: 100%;
  height: auto;
}
.activity-list.item-list .activity-item .activity-comments > ul ul li img.avatar {
  max-width: 28px;
}

.activity-list .activity-item div.item-avatar {
  margin: 0 15px 0 0;
}

.buddypress-wrap .activity-comments .show-all button:hover {
  color: inherit;
  text-decoration: none;
}

form.ac-form .ac-reply-content .ac-textarea textarea,
form.ac-form .ac-reply-content .ac-textarea textarea:focus {
  box-shadow: none;
  border-color: #EEF0F3;
  resize: none;
  background: #fff;
  height: 36px;
  padding: 5px 10px;
}

#buddypress .bp-list .activity-comments .bp-generic-meta .generic-button a {
  background: transparent;
  padding: 0;
  color: #939597;
  border: 0;
  font-size: 12px;
  line-height: 1;
  margin: 0;
  min-height: 10px;
}

.buddypress-wrap .activity-comments .acomment-content p {
  margin-bottom: 0;
}

.buddypress-wrap .activity-comments .show-all button {
  box-shadow: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 14px;
  text-decoration: none;
  padding: 0;
  margin-bottom: 15px;
}
.buddypress-wrap .activity-comments .show-all button .icon {
  margin-right: 6px;
}
.buddypress-wrap .activity-comments .show-all button .text-button {
  color: #939597;
}
.buddypress-wrap .activity-comments .show-all button .text-button:hover {
  color: #007CFF;
}

.buddypress-wrap .activity-comments ul li {
  border-top: 0;
  margin: 0;
  padding-bottom: 15px;
}

.buddypress-wrap .activity-comments .acomment-content p,
.buddypress-wrap .activity-comments .acomment-meta {
  font-size: 13px;
}

.acomment-meta .author-name {
  color: #122B46;
  font-weight: 600;
}
.acomment-meta .activity-time-since {
  color: #A3A5A9;
  font-size: 12px;
}

form.ac-form .ac-reply-content .ac-textarea {
  padding: 0 10px;
}

#buddypress form.ac-form .ac-reply-content input[type="submit"] {
  padding: 7px 20px;
  height: auto;
  min-height: 10px;
  line-height: 1;
  font-size: 14px;
  font-weight: 500;
  margin: 0 0 0 10px;
}

.acomment-content iframe {
  margin-top: 15px;
  margin-bottom: 5px;
}

.buddypress-wrap .activity-comments ul li ul {
  margin-bottom: 0;
  margin-top: 0;
}
.buddypress-wrap .activity-comments ul li ul li {
  margin-bottom: 0;
  padding-bottom: 0;
}
.buddypress-wrap .activity-comments ul li ul li:first-child {
  margin-top: 15px;
}

.buddypress-wrap .activity-comments > ul > li > ul {
  margin-left: 51px;
}

ul.activity-list.item-list.bp-list {
  margin-bottom: 0;
}

#buddypress ul.item-list .activity-header img.avatar {
  margin-right: 6px;
  margin-left: 4px;
}

.activity-list .activity-item .activity-header .time-since {
  font-size: 12px;
  color: #A3A5A9;
  text-decoration: none;
}
.activity-list .activity-item .activity-header .time-since:hover {
  text-decoration: none;
}

.activity-list .activity-item .activity-header .activity-time-since:before {
  color: #A3A5A9;
}

.activity-list .activity-item .activity-content .activity-inner {
  background: transparent;
  margin: 0 0 12px;
  overflow: hidden;
  padding: 0;
}
.activity-list .activity-item .activity-content .activity-inner iframe {
  margin-top: 10px;
}

.activity-list .activity-item .activity-content .activity-inner,
.activity-list li.bbp_reply_create .activity-content .activity-inner {
  border-color: #E7E9EC;
}

@media screen and (max-width: 1100px) {
  .acomment-content iframe,
  .activity-list .activity-item .activity-content .activity-inner iframe {
    /*        height: 100%;
            width: 100%;*/
  }
}
.activity-header .activity-time-since:before {
  display: block;
  content: '';
}

@media screen and (min-width: 46.8em) {
  .buddypress-wrap .activity-inner,
  .buddypress-wrap .activity-header {
    font-size: 14px;
  }
}
body.activity-permalink #activity-stream {
  margin-top: 0;
  padding-top: 0;
}
body.activity-permalink ul.activity-list {
  margin-top: 0;
}
body.activity-permalink .bp-messages {
  margin-bottom: 20px;
}
body.activity-permalink .activity-list .activity-comments {
  margin-bottom: 0;
}

#buddypress .activity-list.item-list.bp-list > li.load-newest {
  padding-bottom: 15px;
}

body.activity-permalink .activity-comments > ul {
  padding: 15px;
}

@media screen and (min-width: 46.8em) {
  body.activity-permalink .activity-list .activity-avatar {
    left: 0;
    top: 0;
  }
}
.activity-comments-items .item-title {
  word-break: break-word;
}

.buddypress-wrap .activity-comments .show-all button:focus,
.buddypress-wrap .activity-comments .show-all button:hover {
  color: inherit;
}

@media screen and (min-width: 46.8em) {
  .activity.buddypress .bp-single-vert-nav .item-body {
    overflow: inherit;
  }

  .activity-update-form #whats-new-content,
  .activity-update-form #whats-new-elements,
  .activity-update-form #whats-new-post-in-box,
  .activity-update-form #whats-new-submit {
    margin-left: 0;
  }
}
.activity-inner .fluid-width-video-wrapper,
.acomment-content .fluid-width-video-wrapper {
  margin: 12px 0;
}

.fluid-width-video-wrapper iframe {
  margin: 0;
}

.bs-activity-wrap {
  background: #fff;
  border: 1px solid #EEF0F3;
  border-radius: 4px;
  margin-bottom: 20px;
  font-size: 14px;
  line-height: 1.5;
  box-shadow: 0 6px 24px 0 rgba(18, 43, 70, 0);
}

#bs-activity-form-wrap.highlight .bs-activity-wrap {
  border: 1px solid #D2D4D6;
  box-shadow: 0 6px 24px 0 rgba(18, 43, 70, 0.08);
}

.bs-activity-wrap .inner-wrap .map-wrap img {
  width: 100%;
  border-radius: 4px;
}
.bs-activity-wrap .inner-wrap .gif-wrap img {
  border-radius: 4px;
}
.bs-activity-wrap .inner-wrap .video-container {
  border-radius: 4px;
  overflow: hidden;
  margin: 0;
}

.activity-type .dropzone .dz-preview {
  min-width: 200px;
}

.bb-dz-preview-wrap .dz-image {
  border-radius: 4px;
  position: relative;
  overflow: hidden;
  padding-top: 100%;
  display: block;
}
.bb-dz-preview-wrap .dz-image img {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 0;
  min-height: 100%;
  height: auto !important;
  width: auto !important;
  min-width: 100%;
  object-fit: cover !important;
  cursor: move;
}

.bs-update.bs-activity-wrap .inner-wrap {
  margin-top: 15px;
  margin-bottom: 15px;
}

.bs-activity-wrap.bb-media-info-section {
  margin: 0;
}

.loading.bs-activity-wrap:not(.bs-update) {
  padding: 0 15px;
}

.bb-activity-author {
  margin-right: 3px;
}
.bb-activity-author + p {
  display: inline;
}

.bb-mini-profile-card-area + p {
  display: inline;
}

div#buddypress .activity-read-more {
  margin-left: 0;
}
div#buddypress .activity-read-more a {
  font-size: inherit;
  border: 0;
}
div#buddypress .activity-read-more a:hover {
  background: transparent;
}

.wp-embedded-content + .video-container {
  height: auto;
  padding-bottom: 0;
}
.wp-embedded-content + .video-container iframe {
  position: static;
}

iframe.wp-embedded-content {
  max-width: 100%;
  width: 100%;
}

.activity-item-header {
  border-radius: 4px 4px 0 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  min-height: 61px;
  margin-bottom: 5px;
  padding: 12px 0;
}
.bs-update .activity-item-header {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.activity-item-header .item-avatar {
  margin-right: 12px;
  padding-top: 3px;
  position: relative;
}
.activity-item-header .item-avatar .avatar:not(.profile-avatar) {
  border-radius: 50%;
  max-width: 36px;
}
.activity-item-header .item {
  line-height: 21px;
}
.activity-item-header .item p {
  margin-bottom: 0;
  color: #7F868F;
}
.activity-item-header .item p a {
  color: #122B46;
}
.activity-item-header .item p a:hover {
  color: #007CFF;
  text-decoration: none;
}
.activity-item-header .item p a img.avatar {
  border-radius: 50%;
  margin-right: 4px;
  position: relative;
  bottom: 1px;
}
.activity-item-header .item p a.activity-time-since {
  display: none;
}
.activity-item-header .bs-dropdown:after {
  right: 19px;
}

#buddypress .activity-item-header .item p a.activity-time-since:hover {
  text-decoration: none;
}

.bs-update .activity-item-header {
  background-color: #FBFBFC;
  border-bottom: 1px solid #EEF0F3;
  padding: 12px 15px;
}

.activity-item-header .item-title {
  font-size: 14px;
  letter-spacing: -0.24px;
  color: #939597;
  position: relative;
}
.activity-item-header .item-title img {
  position: relative;
  bottom: 1px;
}

.gif-holder .loading-icon {
  max-width: 80px;
}

.activity-item-header .item-title a {
  font-size: 14px;
  letter-spacing: -0.24px;
  color: #122B46;
  display: inline;
}
.activity-item-header .item-title a:hover {
  color: #007CFF;
}

.activity-item-header .item-meta {
  font-size: 12px;
}

.activity-date {
  color: #A3A5A9;
}

a.activity-date:hover {
  color: #122B46;
}

.activity-item-body .inner-wrap.act-photo {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-left: -6px;
  margin-right: -6px;
  margin-top: 0;
  margin-bottom: 0;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.activity-body-photo a img {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 0;
  min-height: 100%;
  width: auto;
  min-width: 100%;
  object-fit: cover;
}

.activity-item-footer {
  padding: 15px 0;
}
.activity-item-footer input {
  width: 100%;
}

span.gif-photo-source {
  display: none;
}

.activity-item-footer a.bb-like-wrap .bb-icon-like,
.activity-item-footer a.bb-comment-ico .bb-icon-comment {
  color: rgba(18, 43, 70, 0.4);
  font-size: 24px;
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
}

.activity-item-footer a.bb-like-wrap.bb-favorite .bb-icon-like {
  color: #122b46;
}

.activity-item-footer a.bb-comment-ico {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 0 auto 0 25px;
}

.activity-item-footer a.bb-like-wrap i.bb-icon-like:hover,
.activity-item-footer a.bb-comment-ico i.bb-icon-comment:hover {
  color: rgba(18, 43, 70, 0.8);
}

.activity-item-footer .like-count,
.activity-item-footer .comment-count {
  color: #7F868F;
}

.bs-activity-wrap .bs-dropdown-link {
  color: rgba(18, 43, 70, 0.4);
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
  font-size: 20px;
  opacity: 0.4;
}
.bs-activity-wrap .bs-dropdown-link:hover {
  color: rgba(18, 43, 70, 0.8);
}

span.gif-photo-type {
  display: none;
}

.bs-activity-wrap .bs-dropdown {
  right: -12px;
}
.bs-activity-wrap .bs-dropdown#activity-actionlist-location {
  padding: 10px;
}
.bs-activity-wrap .bs-dropdown.bs-emoji-dropdown .emoji-mart {
  border: 0;
}
.bs-activity-wrap .bs-dropdown.bs-emoji-dropdown .emoji-mart .emoji-mart-anchors .emoji-mart-anchor {
  color: rgba(18, 43, 70, 0.3);
  cursor: pointer;
}
.bs-activity-wrap .bs-dropdown.bs-emoji-dropdown .emoji-mart .emoji-mart-anchors .emoji-mart-anchor:hover {
  color: rgba(18, 43, 70, 0.8);
}
.bs-activity-wrap .bs-dropdown.bs-emoji-dropdown .emoji-mart .emoji-mart-anchors .emoji-mart-anchor-selected {
  color: rgba(18, 43, 70, 0.8) !important;
}
.bs-activity-wrap .bs-dropdown.bs-emoji-dropdown .emoji-mart .emoji-mart-anchors .emoji-mart-anchor-selected .emoji-mart-anchor-bar {
  background-color: rgba(18, 43, 70, 0.8) !important;
}
.bs-activity-wrap .bs-dropdown.bs-emoji-dropdown .emoji-mart-search {
  margin-bottom: 6px;
}
.bs-activity-wrap .bs-dropdown.bs-emoji-dropdown .emoji-mart-search input {
  height: 35px;
  font-size: 14px;
  padding: .1em .9em;
}

.bs-activity-wrap .bs-dropdown:after {
  right: 22px;
}

.bb-media-model-container .add-comment-wrap.bb-emoji-up .bs-emoji-dropdown,
.bb-media-model-container .activity-comments-items li:nth-child(n+4) .bs-emoji-dropdown {
  bottom: 40px;
  top: auto;
  right: -5px;
  left: auto;
}
.bb-media-model-container .add-comment-wrap.bb-emoji-up .bs-emoji-dropdown:after,
.bb-media-model-container .activity-comments-items li:nth-child(n+4) .bs-emoji-dropdown:after {
  right: -2px;
  bottom: -10px;
  top: auto;
  -webkit-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
          transform: rotate(135deg);
}

.bb-media-model-container .bs-item-wrap:last-child .bs-dropdown {
  top: auto;
  bottom: 25px;
}
.bb-media-model-container .bs-item-wrap:last-child .bs-dropdown:after {
  right: -2px;
  bottom: -10px;
  top: auto;
  -webkit-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
          transform: rotate(135deg);
}

.bs-activity-comments {
  background-color: #FBFBFC;
  border-top: 1px solid #EEF0F3;
  margin: 0 -15px;
}

.activity-comments-items .bs-activity-comments {
  border-top: 0;
  margin-top: 10px;
}

.bs-activity-ctrl {
  border-top: 1px solid #EEF0F3;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0 15px;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.bs-activity-ctrl > div {
  margin-top: 10px;
  margin-bottom: 10px;
}

#buddypress h6.list-comments-heading {
  padding: 15px 20px 5px;
  margin-bottom: 0;
  font-size: 13px;
  color: #939597;
  font-weight: 400;
  letter-spacing: 0;
  line-height: 1;
}
#buddypress h6.list-comments-heading a {
  color: inherit;
}
#buddypress h6.list-comments-heading a:hover {
  color: #007CFF;
}

.activity-comments-items .bs-item-wrap .item-avatar {
  margin-right: 12px;
}
.activity-comments-items .bs-item-wrap .item-avatar .avatar:not(.profile-avatar) {
  border-radius: 50%;
  max-width: 36px;
}

.activity-comments-items:not(.depth1) .bs-item-wrap .item-avatar .avatar:not(.profile-avatar) {
  max-width: 28px;
}

.bb-media-comments-wrapper:not(.depth1) {
  padding-left: 48px;
}

.bb-media-comments-wrapper.depth3 {
  padding-left: 42px;
}

.bb-media-comments-wrapper.depth4 {
  padding-left: 40px;
}

.activity-comments-items > li > .bb-media-comments-wrapper.depth1 {
  padding-left: 50px;
}

.bb-mini-profile-card-area:empty {
  display: none;
}

.add-comment-wrap {
  background-color: #FBFBFC;
  border-top: 1px solid #EEF0F3;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 12px 15px;
  border-radius: 0 0 4px 4px;
}
.add-comment-wrap .item-avatar {
  margin-right: 12px;
}
.add-comment-wrap .avatar:not(.profile-avatar) {
  max-width: 36px;
}
.add-comment-wrap .add-comment {
  width: 100%;
  background: transparent;
  border-radius: 4px;
}
.add-comment-wrap .add-comment:hover {
  background: #fff;
}

.bb-activity-info-inner-wrap {
  font-size: 14px;
  letter-spacing: -0.24px;
  line-height: 22px;
  padding: 0 15px;
}

.bs-activity-comments:empty {
  display: none;
}

.bb-media-model-wrapper.bb-internal-model .bb-activity-info-inner-wrap {
  max-height: -webkit-calc(100% - 61px);
  max-height: calc(100% - 61px);
  overflow: auto;
}

.activity-item-footer .like-count {
  margin-left: 7px;
}

.activity-item-footer .comment-count {
  margin-left: 10px;
}

.activity-comment-field {
  margin-right: auto;
}

.activity-comment-field {
  width: 100%;
}

.activity-comment-field textarea.bs-comment-textarea {
  width: 100%;
  padding: 5px 12px;
  height: 2.417em;
  border-color: transparent;
  background-color: transparent;
  color: #7F868F;
  font-size: 14px;
  resize: none;
  font-size: 13px;
  color: #4D5C6D;
  letter-spacing: -0.22px;
  line-height: 1.307;
}

.activity-comment-field textarea.bs-comment-textarea:focus {
  border-color: transparent;
  background-color: transparent;
}

.bs-activity-comments .add-comment .bs-generic-button {
  position: relative;
}
.bs-activity-comments .add-comment .bs-generic-button a {
  color: rgba(18, 43, 70, 0.4);
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
  font-size: 20px;
}

.bs-activity-comments .add-comment .bs-generic-button a:hover {
  color: rgba(18, 43, 70, 0.8);
}

.bs-activity-comments .add-comment .bs-generic-button i {
  font-size: 20px;
}

.bs-item-list.activity-comments-items.list-view .bs-item-wrap:last-child,
.bs-item-list.activity-comments-items.list-view .bs-item-wrap:first-child {
  border-radius: 0;
}

.bs-item-list.activity-comments-items.list-view .bs-item-wrap {
  border: 0;
  background-color: transparent;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap:hover {
  box-shadow: 0 3px 24px 0 rgba(18, 43, 70, 0.08);
  border-radius: 3px;
  position: relative;
  z-index: 1;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap .item-expand .bs-dropdown {
  right: 7px;
  top: 45px;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap ul.activity-comments-items {
  width: 100%;
  padding-top: 10px;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap ul.activity-comments-items li {
  padding-right: 0;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap ul.activity-comments-items li:hover {
  box-shadow: none;
  border-radius: 0;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap ul.activity-comments-items li:last-of-type {
  padding-bottom: 0;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap ul.activity-comments-items li .item-expand .bs-dropdown {
  right: -15px;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap .item {
  line-height: 24px;
}
.bs-item-list.activity-comments-items.list-view .bs-item-wrap .add-comment-wrap {
  padding-right: 0;
}

.list-comments-wrap > .bs-item-list.activity-comments-items.list-view {
  border-bottom: 1px solid #EEF0F3;
}

.bs-item-list.activity-comments-items.list-view.depth1 li.bs-item-wrap.hide_comment {
  display: none;
}

.item-wrap-stretch {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  min-width: 100%;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
}

.activity-comments-items .bs-item-wrap .item-expand {
  margin-left: 20px;
  position: relative;
}

.activity-comments-items .bs-item-wrap a.expand-comment {
  color: rgba(18, 43, 70, 0.4);
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
  font-size: 14px;
  opacity: 1;
}
.activity-comments-items .bs-item-wrap a.expand-comment .bb-icon-angle-down {
  font-size: 22px;
  position: relative;
  top: -5px;
}
.activity-comments-items .bs-item-wrap a.expand-comment:hover {
  color: rgba(18, 43, 70, 0.8);
}

.activity-comments-items .item,
.activity-comments-items .item-title a,
.bs-item-list.activity-comments-items.list-view .item-meta {
  font-size: 14px;
}

.activity-comments-items .activity-comment-text {
  color: #7F868F;
}

.bs-item-list.activity-comments-items.list-view .item-meta {
  margin: 5px 0 0;
  font-size: 12px;
}

.bs-item-list.activity-comments-items.list-view .item-meta a {
  color: #7F868F;
}

.bs-item-list.activity-comments-items.list-view .item-meta a:hover {
  color: #007CFF;
}

.activity-comments-items .item-expand .bs-dropdown {
  top: 28px;
}

.inner-wrap.act-poll {
  margin-left: 70px;
}

.inner-wrap.act-poll label {
  font-size: 1rem;
  margin-bottom: 20px;
  display: block;
}

.poll-button {
  margin-right: 20px;
}

#buddypress .poll-button input[type=button],
.poll-button input[type=button] {
  padding-right: 40px;
  padding-left: 40px;
}

.bb-input-vote .count {
  color: #7F868F;
}

.bb-input-vote {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 20px 0 0;
}

.bb-shared-poll .poll-item {
  background: #fff;
  border-radius: 4px;
  position: relative;
  height: 35px;
  line-height: 35px;
  margin: 10px 0;
  padding: 0 15px;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.bb-shared-poll .poll-progress {
  display: inline-block;
  height: 35px;
  background-color: #E7E9EC;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
}

.poll-data {
  position: relative;
  z-index: 9;
}

.poll-item i.bb-icon-check-small {
  margin: 0 0 0 10px;
}

.poll-item i.bb-icon-check-small:before {
  content: '\e809';
  width: 22px;
  height: 22px;
  line-height: 22px;
  border: 1px solid #4D5C6D;
  border-radius: 50%;
}

.bs-befriend .inner-wrap {
  text-align: center;
  color: #7F868F;
}

.befriend-info {
  margin-bottom: 5px;
}
.befriend-info p {
  margin: 0;
}
.befriend-info a {
  color: #122B46;
}
.befriend-info img.avatar {
  max-width: 30px;
  border-radius: 50%;
  margin-right: 6px;
}

.befriend-date {
  font-size: 12px;
  display: none;
}

#buddypress .befriend-info a.activity-time-since {
  color: #122B46;
}
#buddypress .befriend-info a.activity-time-since:hover {
  color: #007CFF;
  text-decoration: none;
}

.befriend-info a:hover {
  color: #007CFF;
}

.befriend-icon img {
  max-width: 70px;
  display: block;
  margin: 0 auto 15px;
}

.bs-activity-wrap .post-info {
  letter-spacing: -0.24px;
  line-height: 1.357;
  word-wrap: break-word;
}
.bs-activity-wrap .post-info p {
  margin-bottom: 1rem;
}
.bs-activity-wrap .post-info img {
  margin-top: 1rem;
}

.bs-activity-wrap.bb-poll .activity-item-body {
  padding-left: 48px;
}
.bs-activity-wrap.bb-poll .activity-item-body .inner-wrap {
  font-size: 16px;
}

.bb-poll-footer {
  margin-bottom: 10px;
}

.entry-content .bs-video-post .fluid-width-video-wrapper {
  margin-bottom: 0;
  margin-top: 0;
}

.bs-activity-map .map-wrap img {
  width: 100%;
}

.post-link-container {
  border-radius: 4px;
  border: 1px solid #EEF0F3;
  overflow: hidden;
  margin-bottom: 20px;
  max-width: 420px;
  position: relative;
  min-height: 36px;
}
.post-link-container .close-link {
  position: absolute;
  right: 5px;
  top: 5px;
}
.post-link-container h4 {
  font-size: 15px;
  font-weight: 500;
  letter-spacing: -0.24px;
  line-height: 1.21;
  margin: 0 0 10px;
}
.post-link-container .link-wrap {
  padding: 7px 10px;
}

.link-info {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  padding: 40px 20px;
  font-size: 13px;
  color: #939597;
  letter-spacing: -0.24px;
  line-height: 1.38;
  -ms-flex-item-align: center;
      align-self: center;
}

.link-img-holder {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 180px;
  min-height: 208px;
}
.link-img-holder a {
  display: block;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: 50% 50%;
  background-color: transparent;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  min-height: 140px;
}

.post-link-container .bb-icon-close-circle:before {
  color: #939597;
  font-size: 1.5em;
  margin-top: 5px;
}

.activity-update-buttons {
  padding: 0;
  margin-left: auto;
}

a.cancel {
  font-size: 14px;
  color: #A3A5A9;
  letter-spacing: -0.24px;
  margin-right: 15px;
}

#buddypress .activity-post input[type=button] {
  padding-left: 40px;
  padding-right: 40px;
  font-size: 14px;
}

#buddypress .activity-post input.cancel[type=button] {
  background-color: #fff;
  border-color: #fff;
  color: #7F868F;
}

textarea.activity-update {
  width: 100%;
  min-height: 85px;
  padding: 0;
  border-color: #fff;
  font-size: 1rem;
  font-weight: 300;
  resize: none;
  border: 0;
}

label[for='whats-new-post-in'] {
  font-size: 14px;
  color: inherit;
  letter-spacing: -0.24px;
  margin-right: 5px;
}

#whats-new-post-in {
  height: 30px;
  width: auto;
  font-size: 13px;
}

.bs-update .activity-item-body {
  padding: 0 15px;
}
.bs-update .activity-item-footer {
  padding: 0 15px 15px;
}

.bs-update .activity-item-footer a.activity-type-icon i,
.bs-update .activity-item-footer a.activity-emoji-icon i {
  color: rgba(18, 43, 70, 0.4);
  font-size: 24px;
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
  padding: 0 3px;
}

.bs-update .activity-item-footer a.activity-type-icon i:hover,
.bs-update .activity-item-footer a.activity-emoji-icon i:hover,
.bs-update .activity-item-footer a.activity-type-icon.active i {
  color: rgba(18, 43, 70, 0.8);
}

.group-wrap {
  overflow: hidden;
}

.activity-types > * {
  text-align: center;
  display: inline-block;
  margin-right: 8px;
}

.bs-activity-wrap.bs-activity-group .inner-wrap {
  margin-top: 0;
  margin-bottom: 0;
}

.group-media {
  /*    position: relative;
      z-index: 1;*/
}

.group-hero-image {
  padding-top: 40.476%;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  position: relative;
  overflow: hidden;
}

.group-hero-image img {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 0;
  min-height: 100%;
  width: auto;
  min-width: 100%;
  object-fit: cover;
}

.group-icon {
  position: absolute;
  bottom: -60px;
  left: 50px;
  z-index: 5;
}

.group-icon div#item-header-avatar {
  display: inline-block;
}

.group-icon div#item-header-avatar img {
  max-width: 160px;
}

.group-meta {
  padding: 25px 20px 25px 270px;
  border: 1px solid #EEF0F3;
  border-top: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}

.group-activity-members a {
  margin-left: -20px;
}

.group-activity-members img.avatar {
  max-width: 40px;
  border: 2px solid #fff;
}

.count-members {
  color: #7F868F;
  padding-left: 10px;
}

.type-case-photo ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  list-style: none;
  width: 100%;
  margin-top: 1rem;
  font-size: 0;
  margin: 0 0 1rem;
}
.type-case-photo ul li {
  position: relative;
  display: inline-block;
  width: -webkit-calc(33.333% - 0.5rem);
  width: calc(33.333% - 0.5rem);
  margin-bottom: 0.5rem;
}
.type-case-photo ul li a img {
  position: absolute;
  top: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 4px;
}
.type-case-photo ul li:before {
  display: block;
  width: 100%;
  padding-bottom: 100%;
  content: ' ';
}

.type-tag-wrap {
  display: inline-block;
  margin-bottom: 1rem;
  font-size: 16px;
}
.type-tag-wrap a i:before {
  color: rgba(18, 43, 70, 0.4);
  font-weight: bold;
}

.type-tag-wrap .bs-dropdown {
  top: -75px;
  right: inherit;
  left: 0;
  opacity: 1;
  visibility: visible;
  padding: 10px;
  min-width: 300px;
}
.type-tag-wrap .bs-dropdown input[type=search] {
  width: 100%;
  padding-left: 2.5rem;
}

.type-tag-wrap .bs-dropdown:after {
  top: unset;
  right: unset;
  left: 50px;
  bottom: -12px;
  -webkit-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
          transform: rotate(135deg);
}

.close-type-photo {
  font-size: 24px;
  position: absolute;
  top: 5px;
  right: 5px;
  z-index: 9;
  cursor: pointer;
}
.close-type-photo i {
  color: #fd4343;
}

.act-dropdown-wrap {
  position: relative;
}

.act-dropdown {
  position: absolute;
  left: -15px;
  top: 38px;
  background: #fff;
  box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.05), 0 6px 32px 0 rgba(18, 43, 70, 0.1);
  border-radius: 4px;
  padding: 10px;
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
  margin: 0;
  min-width: 400px;
  z-index: 100;
}
.act-dropdown:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  top: 1px;
  margin: 0 auto;
  left: 20px;
  box-sizing: border-box;
  border: 6px solid black;
  border-color: #fff #fff transparent transparent;
  -webkit-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
          transform-origin: 0 0;
  -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
          transform: rotate(-45deg);
  box-shadow: 2px -3px 3px 0 rgba(0, 0, 0, 0.02);
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
  z-index: 101;
}
.act-dropdown#activity-actionlist-gifsearch .gif-search-result {
  max-height: 300px;
  overflow: auto;
  margin: 10px 0;
}
.act-dropdown input[type=search] {
  padding-left: 2.5rem;
  width: 100%;
}

@media (max-width: 544px) {
  .act-dropdown {
    min-width: 250px;
  }
}
a.activity-type-icon {
  position: relative;
}

a.activity-type-icon.disabled {
  display: none;
}

span.bs-dropdown-wrap.disabled {
  display: none;
}

a.activity-type-icon.open-down:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  top: 37px;
  margin: 0 auto;
  left: 10px;
  box-sizing: border-box;
  border: 6px solid black;
  border-color: #fff #fff transparent transparent;
  -webkit-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
          transform-origin: 0 0;
  -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
          transform: rotate(-45deg);
  box-shadow: 2px -3px 3px 0 rgba(0, 0, 0, 0.02);
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
  z-index: 101;
}

.gif-holder ul {
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 0 5px 0 0;
}
.gif-holder ul li {
  width: -webkit-calc(100% * (1/3) );
  width: calc(100% * (1/3) );
  margin-bottom: 4px;
  padding: 0 2px;
}
.gif-holder ul li img {
  width: 100%;
}

.bs-dropdown-model {
  display: none;
}
.bs-dropdown-model.open {
  display: block;
}

.bb-input-poll {
  max-width: 400px;
}
.bb-input-poll .item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 6px 0;
}
.bb-input-poll .item:before {
  content: '';
  background: #FBFBFC;
  border: 1px solid #DEDFE2;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  margin-right: 10px;
  cursor: move;
}
.bb-input-poll input {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin-right: 7px;
  font-size: 14px;
  height: 34px;
  max-width: 343px;
}
.bb-input-poll .bb-icon-close-circle {
  font-size: 22px;
  color: #c4cad1;
  cursor: pointer;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.2s all;
          transition: 0.2s all;
}
.bb-input-poll .item:hover .bb-icon-close-circle {
  visibility: visible;
  opacity: 1;
}
.bb-input-poll .bb-sign {
  font-size: 14px;
}

#adds-poll-choice {
  padding: 10px 26px 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  font-size: 12px;
  color: #007CFF;
  letter-spacing: -0.24px;
  font-weight: 500;
  line-height: 1;
}
#adds-poll-choice a {
  cursor: pointer;
}

.bb-input-poll .close-link {
  color: #EF3E46;
  margin-left: 20px;
}
.bb-input-poll .close-link .bb-sign {
  font-size: 11px;
}

.bb-activity-media-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin: 0 -3px;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  position: relative;
}

.bb-activity-media-elem {
  padding: 3px;
}
.bb-activity-media-elem .entry-img {
  background: transparent;
  border-radius: 3px;
  margin: 0;
  position: relative;
  padding-top: 38.56%;
}
.bb-activity-media-elem .bb-photos-length {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  height: 100%;
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background: rgba(0, 0, 0, 0.4);
  color: #fff;
  font-size: 16px;
}
.bb-activity-media-elem .bb-photos-length strong {
  color: inherit;
  display: block;
  font-size: 28px;
  font-weight: 400;
  margin-bottom: 10px;
}

.bbp-reply-content .bb-activity-media-elem .bb-photos-length {
  font-size: 12px;
}
.bbp-reply-content .bb-activity-media-elem .bb-photos-length strong {
  font-size: 20px;
  line-height: 1;
  margin-bottom: 5px;
}

.bb-media-length-2 .act-grid-1-1 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}

.act-grid-1-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}

.activity-body-photo a.entry-img {
  padding-top: 40.476%;
  border-radius: 4px;
}

.activity-body-photo .act-grid-1-2 a.entry-img {
  padding-top: 52.56%;
}

.bb-media-length-1 .bb-activity-media-elem .entry-img {
  padding-top: 0;
}
.bb-media-length-1 .bb-activity-media-elem .entry-img img {
  position: static;
}
.bb-media-length-2 .bb-activity-media-elem .entry-img {
  padding-top: 80%;
}
.bb-media-length-3 .bb-activity-media-elem .entry-img.act-grid-1-1 {
  padding-top: 52.56%;
}

.bb-media-length-4 .act-grid-1-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 33.33%;
          flex: 0 0 33.33%;
  max-width: 33.33%;
}
.bb-media-length-4 .bb-activity-media-elem.act-grid-1-2 .entry-img {
  padding-top: 72.56%;
}

.bb-media-length-5 .bb-activity-media-elem .entry-img {
  padding-top: 72.56%;
}
.bb-media-length-5 .act-grid-1-1 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.bb-media-length-5 .act-grid-1-1 + .act-grid-1-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.bb-media-length-5 .act-grid-1-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 33.33%;
          flex: 0 0 33.33%;
  max-width: 33.33%;
}

.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-2 .entry-img {
  padding-top: 55.56%;
}
.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 64%;
          flex: 0 0 64%;
  max-width: 64%;
}
.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout ~ .bb-activity-media-elem {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 36%;
          flex: 0 0 36%;
  max-width: 36%;
}
.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout ~ .bb-activity-media-elem .entry-img {
  padding-top: 105.6%;
}
.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout + div + div {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 36%;
}

.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 64%;
          flex: 0 0 64%;
  max-width: 64%;
}
.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout ~ .bb-activity-media-elem {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 36%;
          flex: 0 0 36%;
  max-width: 36%;
}
.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout ~ .bb-activity-media-elem .entry-img {
  padding-top: 69.1%;
}
.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout .entry-img {
  padding-top: 119%;
}
.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout + div {
  position: absolute;
  right: 0;
  top: 33.4%;
  width: 36%;
}
.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout + div + div {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 36%;
}

.bb-activity-media-wrap.bb-media-length-more .bb-activity-media-elem .entry-img {
  padding-top: 82.56%;
}
.bb-activity-media-wrap.bb-media-length-more .act-grid-1-1 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.bb-activity-media-wrap.bb-media-length-more .act-grid-1-1 + .act-grid-1-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.bb-activity-media-wrap.bb-media-length-more .act-grid-1-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 33.33%;
          flex: 0 0 33.33%;
  max-width: 33.33%;
}

.activity-item-header .item-title img {
  margin-right: 5px;
  margin-left: 5px;
}

ul.bb-choices {
  list-style: none;
  font-size: 16px;
  color: #122B46;
  margin: 0 0 20px;
}
ul.bb-choices li {
  margin-bottom: 12px;
}
ul.bb-choices a {
  color: inherit;
}
ul.bb-choices .bb-choice-wrap {
  position: relative;
  border-radius: 3px;
  overflow: hidden;
  font-size: 16px;
  color: #122B46;
  padding: 6px 12px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
ul.bb-choices label {
  font-size: 16px;
}
ul.bb-choices .bar {
  margin-right: 20px;
  position: relative;
}
ul.bb-choices svg {
  position: relative;
}
ul.bb-choices .bg-bag {
  width: 50%;
  background: #E7E9EC;
  display: block;
  position: absolute;
  left: 0;
  height: 100%;
  top: 0;
}
ul.bb-choices strong {
  font-weight: 500;
  min-width: 42px;
  display: inline-block;
}
ul.bb-choices .bb-votes {
  color: #A3A5A9;
  letter-spacing: -0.24px;
}
ul.bb-choices .bs-styled-radio + label:before,
ul.bb-choices .bs-styled-radio + .bb-radio-label:before {
  border-width: 1px;
  width: 18px;
  height: 18px;
  top: -2px;
}
ul.bb-choices .bs-styled-radio:checked + label:before,
ul.bb-choices .bs-styled-radio:checked + .bb-radio-label:before {
  background: #1CD991;
  border-color: #1CD991;
}
ul.bb-choices .bs-styled-radio:checked + label:after,
ul.bb-choices .bs-styled-radio:checked + .bb-radio-label:after {
  background: transparent;
  color: #fff;
  content: '\E809';
  display: inline-block;
  font: normal normal normal 14px/1 "bb-icons";
  font-size: 24px;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  left: -3px;
  top: -2px;
}

.bb-poll-footer .button {
  min-width: 110px;
  margin-right: 25px;
}
.bb-poll-footer .bb-votes {
  color: #A3A5A9;
  letter-spacing: -0.24px;
}

.map-wrap {
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
}
.map-wrap .bb-map-img-wrap {
  position: relative;
  overflow: hidden;
  padding-top: 42.56%;
  display: block;
}
.map-wrap .bb-map-img-wrap img {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 0;
  min-height: 100%;
  width: auto;
  min-width: 100%;
  object-fit: cover;
}
.map-wrap .location-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 15px;
}
.map-wrap h4 {
  font-size: 14px;
  font-weight: 500;
  letter-spacing: -0.24px;
  margin: 0 0 3px;
}
.map-wrap .location-meta {
  font-size: 13px;
  color: #A3A5A9;
  line-height: 1.4;
}
.map-wrap .bb-checkin-img {
  display: inline-block;
  margin-right: 15px;
}

.activity-add-smile {
  position: relative;
}

.bb-load-new-activities {
  margin-bottom: 20px;
}

#bs-activity-form-wrap .bs-activity-wrap.bs-activity-wrap .dropzone .dz-default {
  min-height: 200px;
  max-height: 200px;
}

#bs-activity-update-wrap .dropzone.dz-started .dz-message {
  -webkit-box-ordinal-group: 3;
      -ms-flex-order: 2;
          order: 2;
  min-height: 1px;
  max-width: 200px;
  height: 200px;
  font-size: 14px;
  line-height: 1;
  margin: 0 5px 10px 5px;
}

#buddypress div#subnav.bb-item-list-tabs {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-bottom: 20px;
}
#buddypress div#subnav.bb-item-list-tabs ul#activity-sub-nav {
  margin: 0;
}
#buddypress div#subnav.bb-item-list-tabs ul#activity-sub-nav > li {
  padding-bottom: 0;
}
#buddypress div#subnav.bb-item-list-tabs ul#activity-sub-nav .sub-menu {
  top: 36px;
}
#buddypress div#subnav.bb-item-list-tabs ul#activity-sub-nav .sub-menu li {
  float: none;
}
#buddypress div#subnav.bb-item-list-tabs ul#activity-sub-nav .sub-menu li a {
  padding: 9px 15px;
}
#buddypress div#subnav.bb-item-list-tabs ul#activity-sub-nav .sub-menu li.selected a {
  background: #F5F5F5;
  color: #122B46;
  border-bottom: 0;
}
#buddypress div#subnav.bb-item-list-tabs a.more-button {
  font-size: 16px;
}
#buddypress div#subnav.bb-item-list-tabs a.more-button:after {
  bottom: -25px;
}
#buddypress div#subnav.bb-item-list-tabs .bs-dropdown-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 13px;
}
#buddypress div#subnav.bb-item-list-tabs .bs-sort-button {
  padding: 5px 0px 5px 10px;
}

ul#activity-sub-nav {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.dz-details,
.bb-mini-group-profile-card-area:empty {
  display: none;
}

.activity.bp-user #bs-activity-update-wrap .dropzone.dz-started .dz-message {
  max-width: 99px;
  height: 100px;
  min-height: 100px;
  font-size: 11px;
  line-height: 1;
}
.activity.bp-user .activity-type .dropzone .dz-preview {
  min-width: 99px;
}
.activity.bp-user .dropzone .dz-default span:before {
  height: 25px;
  width: 30px;
  margin: 0 auto 10px;
}

.activity-comments-items {
  margin: 0;
  list-style: none;
  background: #FBFBFC;
  padding: 15px;
}
.activity-comments-items li:not(:last-child) {
  margin-bottom: 20px;
}
.activity-comments-items .item-title {
  font-size: 13px;
  letter-spacing: -0.22px;
  line-height: 1.307;
  position: relative;
}
.activity-comments-items .item-title a {
  font-weight: 600;
}
.activity-comments-items .bs-activity-comments:not(.show) {
  display: none;
}
.activity-comments-items .bs-item-list.list-view .bs-item-wrap {
  margin-bottom: 15px;
  padding: 0;
}
.activity-comments-items .bs-item-list.list-view .bs-item-wrap:last-child {
  margin-bottom: 0;
}
.activity-comments-items h6.list-comments-heading {
  padding: 0;
  margin-bottom: 16px;
  font-size: 13px;
  color: #939597;
}
.activity-comments-items h6.list-comments-heading a {
  color: inherit;
}
.activity-comments-items .activity-comments-items .bs-item-wrap a.expand-comment .bb-icon-angle-down:before {
  font-size: 20px;
}
.activity-comments-items .bs-item-list.activity-comments-items.list-view .bs-item-wrap .item-expand .bs-dropdown {
  min-width: 100px;
  right: 24px;
  top: -5px;
  padding: 2px 0;
}
.activity-comments-items .bs-item-list.activity-comments-items.list-view .bs-item-wrap .item-expand .bs-dropdown:after {
  top: 8px;
  right: -12px;
  -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
          transform: rotate(45deg);
}
.activity-comments-items .bs-item-list.activity-comments-items.list-view .bs-item-wrap:hover {
  box-shadow: none;
}
.activity-comments-items .activity-comments-items .activity-comment-text {
  display: inline-block;
  font-size: 13px;
  letter-spacing: -0.22px;
  line-height: 17px;
  color: inherit;
}
.activity-comments-items .activity-comment-text p {
  margin: 0;
}
.activity-comments-items .list-comments-wrap > .bs-item-list.activity-comments-items.list-view {
  border-bottom: 0;
}
.activity-comments-items .add-comment-wrap .add-comment {
  background: #fff;
}
.activity-comments-items .item-meta {
  font-size: 12px;
  color: #A3A5A9;
  letter-spacing: -0.18px;
  line-height: 1.666;
  margin: 5px 0 0;
}
.activity-comments-items .item-meta a {
  color: inherit;
}
.activity-comments-items .item-meta a:hover {
  color: #122B46;
}

.bb-media-comment-text {
  border: 0;
  height: 36px;
  resize: none;
  width: 100%;
  font-size: 14px;
  padding: 5px 12px;
  overflow: hidden;
}

.bb-media-comment-wrap {
  position: relative;
}
.bb-media-comment-wrap .item-meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  position: absolute;
  right: 6px;
  bottom: 2px;
  font-size: 20px;
}
.bb-media-comment-wrap .item-meta a {
  color: #A3A5A9;
}

.activity-item-header .item-title .bs-dropdown a {
  display: block;
}

.bs-item-list-tabs .more-button.active:after {
  bottom: -18px;
}

body.activity.bp-user:not(.settings):not(.edit-details) .dropzone .dz-default span:before {
  height: 26px;
  width: 31px;
}

body.activity.bp-user .dropzone .dz-preview .dz-error-mark {
  top: 28%;
}

li.load-more a.button {
  min-width: 180px;
}
li.load-more a.loading:after {
  content: "\e838";
  font-family: "bb-icons";
  font-size: 18px;
  line-height: 1;
  margin-left: 10px;
  text-align: center;
  display: inline-block;
  -webkit-animation: spin 3s infinite linear;
          animation: spin 3s infinite linear;
}

.buddypress-wrap .activity-list .load-more,
.buddypress-wrap .activity-list .load-newest {
  background: transparent;
  border: 0;
  border-radius: 0;
  box-shadow: none;
  overflow: hidden;
}

#activity-gif-button.open .dashicons {
  color: #122B46;
}

.webui-popover.webui-popover {
  z-index: 999912;
}

#buddypress .activity-list.item-list.bp-list > li.load-newest {
  padding-bottom: 0;
  border-bottom: 1px solid #E7E9EC;
}

.search-query-input,
.emojionearea-search > input {
  border-radius: 100px;
}

.blogs.activity-item .activity-inner img:not(.emoji) {
  border-radius: 3px;
  margin-top: 10px;
}

@media only screen and (min-width: 1081px) {
  #secondary.sidebar-left {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }
}
@media only screen and (min-width: 768px) and (max-width: 1080px) {
  #user-activity,
  #secondary-right {
    display: none;
  }
}
@media only screen and (max-width: 640px) {
  .bb-input-poll .bb-icon-close-circle {
    visibility: visible;
    opacity: 1;
  }

  .bb-activity-media-elem .bb-photos-length {
    font-size: 11px;
  }

  .bb-activity-media-elem .bb-photos-length strong {
    font-size: 18px;
    line-height: 1;
    margin: 0;
  }

  .activity-comments-items:not(.depth1) {
    padding-left: 8px;
    padding-right: 8px;
  }

  .activity-comments-items.depth3 {
    padding-left: 8px;
  }

  .activity-comments-items.depth4 {
    padding-left: 8px;
  }

  .post-link-container {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  .link-img-holder {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    width: 100%;
    min-height: 180px;
  }

  .link-info {
    padding: 20px;
  }

  .activity-type .dropzone .dz-preview {
    min-width: 104px;
  }

  #bs-activity-update-wrap .dropzone.dz-started .dz-message {
    max-width: 106px;
    height: 106px;
    font-size: 11px;
    line-height: 1.2;
  }

  body:not(.settings):not(.edit-details) .dropzone .dz-default span:before {
    height: 31px;
    width: 36px;
  }

  body:not(.settings):not(.edit-details) .dropzone .dz-default {
    min-height: 18vh;
    font-size: 14px;
  }

  .dropzone .dz-preview .dz-error-mark {
    top: 28%;
  }

  #bs-activity-form-wrap .bs-activity-wrap.bs-activity-wrap .dropzone .dz-default {
    min-height: 80px;
    max-height: 104px;
  }
}
@media only screen and (max-width: 520px) {
  .actvity-head-bar {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }
  .actvity-head-bar .subnav-filters {
    margin: 10px 0 0;
    width: 100%;
  }
}
/* Members */
.avatar {
  border-radius: 50%;
}

.subnav-search.members-search {
  float: right;
  margin-top: -56px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.buddypress-wrap .subnav-search.members-search .subnav-filters {
  margin-top: 0;
  margin-left: 10px;
}

#buddypress #dir-members-search {
  border: 0;
  background-color: transparent;
  padding-left: 32px;
  font-size: 14px;
  height: 34px;
}

.member-status {
  background: #00E652;
  border: 2px solid #fff;
  border-radius: 100%;
  position: absolute;
  width: 12px;
  height: 12px;
  right: 2px;
  top: 0;
}
.grid .member-status {
  right: 18px;
  top: 5px;
  width: 14px;
  height: 14px;
}

#members-list.grid,
#friend-list.grid,
#groups-list.grid {
  margin: 0 -10px;
}

#friend-list.item-list .item-avatar img,
#members-list.item-list .item-avatar img {
  border-radius: 50%;
}

#friend-list.item-list li,
#members-list.item-list li,
.item-list.bp-search-results-list li,
.item-list.groups-list li {
  margin: 0;
  padding: 0;
}
#friend-list.item-list:not(.grid) .list-wrap,
#members-list.item-list:not(.grid) .list-wrap,
.item-list.bp-search-results-list:not(.grid) .list-wrap,
.item-list.groups-list:not(.grid) .list-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
#friend-list.item-list:not(.grid) li:first-child .list-wrap,
#members-list.item-list:not(.grid) li:first-child .list-wrap,
.item-list.bp-search-results-list:not(.grid) li:first-child .list-wrap,
.item-list.groups-list:not(.grid) li:first-child .list-wrap {
  border-radius: 3px 3px 0 0;
}
#friend-list.item-list:not(.grid) li:last-child .list-wrap,
#members-list.item-list:not(.grid) li:last-child .list-wrap,
.item-list.bp-search-results-list:not(.grid) li:last-child .list-wrap,
.item-list.groups-list:not(.grid) li:last-child .list-wrap {
  border-radius: 0 0 3px 3px;
}
#friend-list.item-list .list-wrap,
#members-list.item-list .list-wrap,
.item-list.bp-search-results-list .list-wrap,
.item-list.groups-list .list-wrap {
  background-color: #fff;
  border: 1px solid #E7E9EC;
  margin: 0 0 -1px;
  overflow: visible;
  padding: 15px 20px;
  position: relative;
  -webkit-transition: box-shadow linear .2s;
          transition: box-shadow linear .2s;
}
#friend-list.item-list .list-wrap:hover,
#members-list.item-list .list-wrap:hover,
.item-list.bp-search-results-list .list-wrap:hover,
.item-list.groups-list .list-wrap:hover {
  box-shadow: 0 3px 24px 0 rgba(18, 43, 70, 0.08);
  position: relative;
  z-index: 1;
}
#friend-list.item-list.grid .list-wrap,
#members-list.item-list.grid .list-wrap,
.item-list.bp-search-results-list.grid .list-wrap,
.item-list.groups-list.grid .list-wrap {
  border-radius: 4px;
}
#friend-list.item-list.grid .list-wrap.footer-buttons-on,
#members-list.item-list.grid .list-wrap.footer-buttons-on,
.item-list.bp-search-results-list.grid .list-wrap.footer-buttons-on,
.item-list.groups-list.grid .list-wrap.footer-buttons-on {
  padding: 15px 20px 52px 20px;
}
#friend-list.item-list .item-avatar img,
#members-list.item-list .item-avatar img,
.item-list.bp-search-results-list .item-avatar img,
.item-list.groups-list .item-avatar img {
  max-width: 52px;
}

#members-list.item-list:not(.grid) .list-wrap {
  display: block;
}
#members-list.item-list:not(.grid) .list-wrap .list-wrap-inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

#members-list.item-list li .bp-members-list-hook .more-action-button {
  display: none;
}
#members-list.item-list li .bp-members-list-hook .generic-button {
  margin: 10px 0 0;
  display: block;
}
#members-list.item-list li .bp-members-list-hook .generic-button a {
  font-size: 13px;
  display: block;
  padding: 10px 20px;
  border: 1px solid #e7e9ec;
  border-radius: 5px;
  background-color: transparent;
  color: #939597;
  min-height: 0;
  text-align: center;
  line-height: 1;
}
#members-list.item-list li .bp-members-list-hook .generic-button a:hover {
  color: #4c464e;
}
#members-list.item-list:not(.grid) .has_hook_content.list-wrap {
  padding-right: 35px;
}
@media screen and (max-width: 1240px) {
  #members-list.item-list:not(.grid) .has_hook_content.list-wrap {
    padding-bottom: 25px;
  }
}
@media screen and (max-width: 880px) and (min-width: 768px) {
  #members-list.item-list:not(.grid) li .has_hook_content .button-wrap.member-button-wrap {
    padding-right: 6px;
  }
}
@media screen and (max-width: 480px) {
  #members-list.item-list:not(.grid) li .has_hook_content .button-wrap.member-button-wrap {
    padding-right: 6px;
  }
}
#members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .more-action-button {
  position: absolute;
  right: 0;
  top: 27px;
  padding-right: 10px;
  z-index: 11;
  display: block;
}
#members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .more-action-button i.bb-icon-menu-dots-h {
  font-size: 20px;
  color: #939597;
}
@media screen and (max-width: 1240px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .more-action-button {
    right: -4px;
  }
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .more-action-button i.bb-icon-menu-dots-h {
    font-size: 24px;
  }
}
@media screen and (max-width: 1100px) and (min-width: 768px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .more-action-button {
    top: inherit;
    bottom: 26px;
  }
}
@media screen and (max-width: 880px) and (min-width: 768px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .more-action-button {
    top: 50%;
    bottom: inherit;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    margin-top: -2px;
  }
}
@media screen and (max-width: 680px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .more-action-button {
    top: inherit;
    bottom: 27px;
  }
}
@media screen and (max-width: 480px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .more-action-button {
    right: -1px;
    top: 50%;
    bottom: inherit;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    margin-top: -4px;
  }
}
#members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: ease 0.3s;
          transition: ease 0.3s;
  background-color: #fff;
  margin-top: 0;
  text-align: center;
  padding: 15px;
  border-radius: 4px;
  position: absolute;
  right: 0;
  box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.05), 0 6px 32px 0 rgba(18, 43, 70, 0.1);
  top: 70px;
  z-index: 111;
}
@media screen and (max-width: 1100px) and (min-width: 768px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner {
    top: 100%;
    margin-top: -20px;
  }
}
@media screen and (max-width: 880px) and (min-width: 768px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner {
    top: 50%;
    margin-top: 20px;
  }
}
@media screen and (max-width: 680px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner {
    top: 100%;
    margin-top: -20px;
  }
}
@media screen and (max-width: 480px) {
  #members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner {
    top: 50%;
    margin-top: 20px;
  }
}
#members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  margin: 0 auto;
  top: 0;
  right: 16px;
  box-sizing: border-box;
  border: 8px solid black;
  border-color: #fff #fff transparent transparent;
  -webkit-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
          transform-origin: 0 0;
  -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
          transform: rotate(-45deg);
  box-shadow: 2px -3px 3px 0 rgba(0, 0, 0, 0.02);
  z-index: 101;
  opacity: 1;
  visibility: visible;
}
#members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner .generic-button {
  margin: 0 0 15px 0;
  display: block;
}
#members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner .generic-button:last-child {
  margin: 0;
}
#members-list.item-list:not(.grid) li .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner .generic-button a {
  font-size: 14px;
  min-height: 34px;
  padding: 6px 20px;
  border: 1px solid #e7e9ec;
  color: #939597;
  border-radius: 100px;
  text-align: center;
  min-width: 140px;
  line-height: 1.5;
}
#members-list.item-list:not(.grid) li.active {
  z-index: 111;
}
#members-list.item-list:not(.grid) li.active .has_hook_content .bp-members-list-hook .bp-members-list-hook-inner {
  opacity: 1;
  visibility: visible;
}

.item-list.groups-list .item-avatar img {
  max-width: 75px;
}

.buddypress-wrap #members-list li .user-update {
  border: 0;
  border-radius: 0;
  font-style: normal;
  font-size: 13px;
  margin: 0;
  padding: 0;
  clear: both;
}

/* Grid Layouts */
#groups-list.grid,
#members-list.grid,
#friend-list.grid {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin-bottom: 0;
  width: auto;
}
#groups-list.grid > li,
#members-list.grid > li,
#friend-list.grid > li {
  margin: 0 0 20px;
  padding: 0 10px;
}

#groups-list.groups-list {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
}

.list-title a {
  color: #122B46;
  display: inline-block;
  font-size: 20px;
  font-weight: 500;
  letter-spacing: -0.24px;
  line-height: 1.2;
  text-transform: capitalize;
}
.list-title a:hover {
  color: #007CFF;
}

.buddypress-wrap .groups-list:not(.grid) li .group-desc,
.buddypress-wrap #members-list:not(.grid) li .user-update,
.buddypress-wrap #friend-list:not(.grid) li .user-update {
  display: none;
}

body #buddypress .bp-list .action,
body #bbpress-forums .bp-list .action {
  margin: 0;
}
body #buddypress .bp-list .action .generic-button,
body #bbpress-forums .bp-list .action .generic-button {
  margin: 0 10px 0 0;
}
body #buddypress .bp-list .action .generic-button:last-child,
body #bbpress-forums .bp-list .action .generic-button:last-child {
  margin-right: 0;
}
body #buddypress .bp-list .action .generic-button a, body #buddypress .bp-list .action .generic-button button,
body #bbpress-forums .bp-list .action .generic-button a,
body #bbpress-forums .bp-list .action .generic-button button {
  font-size: 13px;
  font-weight: 500;
  min-height: 32px;
  line-height: 32px;
  padding: 0 20px;
  background: transparent;
  border: 1px solid #007CFF;
  background: transparent;
  color: #007CFF;
  margin: 5px 0;
  -webkit-font-smoothing: initial;
  -moz-font-smoothing: initial;
  box-shadow: none;
}

body #buddypress .bp-list.members-list .action .generic-button button,
body #buddypress .bp-list.members-list .action .generic-button a,
body #bbpress-forums .bp-list.members-list .action .generic-button button,
body #bbpress-forums .bp-list.members-list .action .generic-button a {
  padding: 0;
  line-height: 1.54;
  min-height: auto;
  border: 0;
  color: #939597;
  margin-bottom: 0;
  box-shadow: none;
}
body #buddypress .bp-list.members-list .action .generic-button button:hover,
body #buddypress .bp-list.members-list .action .generic-button a:hover,
body #bbpress-forums .bp-list.members-list .action .generic-button button:hover,
body #bbpress-forums .bp-list.members-list .action .generic-button a:hover {
  color: #007CFF;
}

.buddypress-wrap .bp-list li .list-title {
  margin-bottom: 5px;
}

.buddypress-wrap .bp-list li .last-activity,
.buddypress-wrap .bp-list li .member-type {
  clear: left;
  margin-top: 0px;
  letter-spacing: -0.24px;
  line-height: 1.3;
  font-size: 12px;
  font-weight: 300;
  color: #A3A5A9;
  margin: 0;
}

.buddypress-wrap .grid > li .last-activity {
  font-weight: 500;
}

.buddypress-wrap .grid > li .member-type {
  font-weight: 500;
  font-size: 13px;
}

.bp-list li .item .group-details,
.bp-list li .item .item-avatar,
.bp-list li .item .item-meta,
.bp-list li .item .list-title {
  text-align: left;
}

.bp-list li .item-avatar {
  float: left;
  margin-right: 20px;
}
.bp-list li .item-avatar a {
  display: inline-block;
  position: relative;
}

.bp-list li .item .item-block {
  margin-right: 0;
  width: auto;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
}

body.logged-in .bp-list li .item .item-block {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 36%;
          flex: 0 0 36%;
}

.bp-list li .item {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

.buddypress-wrap #members-list li .user-update,
.buddypress-wrap #friend-list li .user-update {
  font-size: 14px;
}

#members-list.bp-list.grid li,
#friend-list.bp-list.grid li {
  margin-bottom: 20px;
}
#members-list.bp-list.grid .item-avatar,
#friend-list.bp-list.grid .item-avatar {
  margin-bottom: 18px;
  margin-top: 10px;
}
#members-list.bp-list.grid .item-avatar a,
#friend-list.bp-list.grid .item-avatar a {
  display: inline-block;
}
#members-list.bp-list.grid .item-avatar img,
#friend-list.bp-list.grid .item-avatar img {
  max-width: 126px;
  width: 100%;
}
#members-list.bp-list.grid .action,
#friend-list.bp-list.grid .action {
  text-align: center;
}
#members-list.bp-list.grid .action .generic-button,
#friend-list.bp-list.grid .action .generic-button {
  margin: 0;
}
#members-list.bp-list.grid .action .generic-button a, #members-list.bp-list.grid .action .generic-button button,
#friend-list.bp-list.grid .action .generic-button a,
#friend-list.bp-list.grid .action .generic-button button {
  width: auto;
  float: none;
  margin: 0 auto 12px;
}

.buddypress-wrap .grid.bp-list > li .item .item-block {
  margin-bottom: 10px;
}

.buddypress:not(.logged-in) .grid.groups-list .list-wrap {
  min-height: 30px;
}

.grid > li .list-wrap .list-title {
  padding: 0;
}

.buddypress-wrap .grid.bp-list > li .list-wrap {
  padding-bottom: 15px;
  height: 100%;
}

.buddypress-wrap .grid.bp-list > li .action {
  padding: 0;
  position: static;
  width: 100%;
}

#members-list.grid .list-wrap .item-block,
#friend-list.grid .list-wrap .item-block {
  min-height: 10px;
}
#members-list.grid .list-wrap .item-block .member-name a,
#friend-list.grid .list-wrap .item-block .member-name a {
  width: 100%;
  overflow-wrap: break-word;
  word-wrap: break-word;
}

.buddypress-wrap .grid.bp-list > li .item .user-update {
  text-align: center;
  width: 100%;
}

.grid > li .list-wrap .update {
  color: #737373;
  padding: 0;
  font-size: 13px;
  line-height: 1.6;
}

div#buddypress .bs-members-items.list-view .activity-read-more a {
  padding-left: 0;
}

div#buddypress .bs-members-items.list-view .bs-meta-bp_member_last_post,
div#buddypress .bs-members-items.list-view .bs-meta-xprofile_field {
  line-height: 1.3;
  overflow-wrap: break-word;
  word-wrap: break-word;
  -ms-word-break: break-all;
  word-break: break-all;
  word-break: break-word;
  -ms-hyphens: auto;
  -webkit-hyphens: auto;
  hyphens: auto;
}
div#buddypress .bs-members-items.list-view .bs-meta-bp_member_last_post.normal span:not(.bs-output),
div#buddypress .bs-members-items.list-view .bs-meta-xprofile_field.normal span:not(.bs-output) {
  font-size: 13px;
}

#buddypress .bb-member-profile-card span.activity {
  font-size: 13px;
}

#buddypress .single-headers .item-meta span {
  color: #A3A5A9;
}

.buddypress-wrap .subnav-filters {
  margin-bottom: 0;
  margin-top: 0;
}

.bp-secondary-header {
  margin-bottom: 20px;
}
.bp-secondary-header .bb-icon-sort-desc,
.bp-secondary-header .bb-icon-grid-view-small,
.bp-secondary-header .bb-icon-list-view-small {
  font-size: 22px;
}

#members-list,
#friend-list {
  padding: 0;
  margin: 0;
}

/* Layout options - Starts Here */
.buddypress-wrap .grid-filters {
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 3px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 21px;
}
.buddypress-wrap .grid-filters a {
  color: #122B46;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding-left: 5px;
  padding-right: 5px;
  opacity: 0.4;
  -webkit-transition: 0.3s all;
          transition: 0.3s all;
}
.buddypress-wrap .grid-filters a:hover {
  color: #122B46;
  opacity: 1;
}
.buddypress-wrap .grid-filters .active {
  opacity: 1;
}

a.layout-grid-view {
  padding-left: 5px;
  border-right: 1px solid #E7E9EC;
}

.buddypress-wrap .subnav-filters:after {
  content: '';
  display: table;
  clear: both;
}
.buddypress-wrap .subnav-filters .bp-search {
  float: left;
}

.buddypress-wrap .subnav-filters .grid-filters {
  padding: 0;
  clear: right;
  float: right;
}
.buddypress-wrap .subnav-filters .grid-filters a {
  padding-top: 4px;
  padding-bottom: 4px;
}
.buddypress-wrap .subnav-filters .grid-filters a i {
  font-size: 22px;
}

.button-wrap.member-button-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}
.button-wrap.member-button-wrap i {
  font-size: 22px;
}

#buddypress .button-wrap.member-button-wrap .generic-button:not(.follow-button) a,
#buddypress .button-wrap.member-button-wrap .generic-button:not(.follow-button) button {
  background: transparent;
  color: #939597;
  padding: 0;
  margin: 0;
  line-height: 1;
  min-height: 1px;
  border: 0;
}
#buddypress .button-wrap.member-button-wrap .generic-button:not(.follow-button) a:hover, #buddypress .button-wrap.member-button-wrap .generic-button:not(.follow-button) a:focus,
#buddypress .button-wrap.member-button-wrap .generic-button:not(.follow-button) button:hover,
#buddypress .button-wrap.member-button-wrap .generic-button:not(.follow-button) button:focus {
  color: #007CFF;
  background: transparent;
  box-shadow: none;
}

.followers-wrap,
.following-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  font-size: 14px;
  color: #939597;
  line-height: 1;
  margin-bottom: 5px;
  margin-top: 5px;
}
.followers-wrap b,
.following-wrap b {
  color: #4D5C6D;
  font-weight: 400;
  margin-right: 3px;
}

#buddypress .member-button-wrap .follow-button .follow-button {
  min-width: 140px;
}

#buddypress .bp-list li .generic-button {
  margin: 0 0 0 20px;
}

.directory.members .buddypress-wrap .subnav-filters {
  margin-bottom: 0;
}

.buddypress-wrap .grid.bp-list > li .item {
  width: 100%;
}

.bp-list:not(.grid) .only-grid-view {
  display: none !important;
}

.bp-list.grid li .item {
  -ms-flex-flow: column;
      flex-flow: column;
}
.bp-list.grid .only-list-view {
  display: none !important;
}

.button-wrap.member-button-wrap.on-top {
  position: absolute;
  top: 2px;
  right: 5px;
}

#buddypress .bp-list li .on-top .generic-button {
  margin: 0;
}
#buddypress .bp-list li .on-top .generic-button i {
  opacity: 0.7;
}

#buddypress .bp-list li .on-top #send-private-message {
  margin: 0 2px 0 0;
}

#buddypress .only-grid-view .follow-button .follow-button {
  background: transparent;
  border: 0;
  border-radius: 0;
  box-shadow: none;
  color: #007CFF;
  line-height: 1.3;
  min-height: 1px;
  padding: 0;
}
#buddypress .only-grid-view .follow-button .follow-button:hover {
  color: #007CFF;
}

#buddypress .bp-list li .follow-container > div {
  -webkit-box-flex: unset;
      -ms-flex: unset;
          flex: unset;
}
#buddypress .bp-list li .follow-container .generic-button {
  font-size: 14px;
  line-height: 1;
  margin: 5px 0;
}

.bb-friend-button-tag {
  display: none;
}

.member-header-actions .bb-friend-button-tag {
  display: inline-block;
}
.member-header-actions .friendship-button i {
  display: none;
}
.member-header-actions .friendship-button[data-balloon]:before,
.member-header-actions .friendship-button[data-balloon]:after {
  display: none;
}

#buddypress .bp-list li .member-button-wrap .friendship-button .bp-feedback.success {
  font-size: 0;
  border: 0;
  margin: 0;
  padding: 0;
  text-align: center;
}
#buddypress .bp-list li .member-button-wrap .friendship-button .bp-feedback.success:before {
  content: '\e93b';
  font-family: "bb-icons";
  display: inline-block;
  line-height: 1;
  font-weight: normal;
  font-style: normal;
  speak: none;
  text-decoration: inherit;
  text-transform: none;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
  height: 20px;
  font-size: 20px;
  padding-top: 3px;
  vertical-align: top;
  text-align: center;
  color: #939597;
  opacity: 0.7;
}

#buddypress .bp-list li .member-request-list-wrap .friends-meta .bp-feedback.success {
  border: 0;
  font-size: 13px;
  font-weight: 500;
  min-height: 32px;
  line-height: 32px;
  padding: 0 20px;
  background: transparent;
  border: 1px solid #E7E9EC;
  background: transparent;
  color: #A3A5A9;
  margin: 5px 0;
  -webkit-font-smoothing: initial;
  border-radius: 100px;
}

#buddypress .only-grid-view.button-wrap.member-button-wrap.footer-button-wrap {
  border-top: 1px solid #E7E9EC;
  margin: 0 -20px 0;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: absolute;
  width: 100%;
  bottom: 0;
}
#buddypress .only-grid-view.button-wrap.member-button-wrap.footer-button-wrap > .generic-button {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: 35px;
  padding: 6px 10px 7px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
#buddypress .only-grid-view.button-wrap.member-button-wrap.footer-button-wrap > .friendship-button {
  border-right: 1px solid #E7E9EC;
}
#buddypress .only-grid-view.button-wrap.member-button-wrap.footer-button-wrap a,
#buddypress .only-grid-view.button-wrap.member-button-wrap.footer-button-wrap button {
  border: 0;
}
#buddypress .only-grid-view.button-wrap.member-button-wrap.footer-button-wrap a:focus,
#buddypress .only-grid-view.button-wrap.member-button-wrap.footer-button-wrap button:focus {
  color: #007CFF;
  opacity: 1;
}
#buddypress .only-grid-view.button-wrap.member-button-wrap.footer-button-wrap i {
  opacity: 0.7;
}

.follow-container {
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.list-wrap:not(.footer-buttons-on) .follow-container {
  margin-top: 20px;
}

body.logged-in .bp-list li .list-wrap:not(.follow-active) .item .item-block {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.buddypress-wrap .bb-profile-grid .subnav-filters {
  margin-bottom: 20px;
}

#buddypress .member-request-list-wrap .follow-button,
#buddypress .member-request-list-wrap #send-private-message {
  display: none;
}

.follow-container.justify-center {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.buddypress:not(.logged-in) .grid.bp-list .list-wrap {
  padding-bottom: 15px;
}

.button-wrap.member-button-wrap .friendship-button i {
  font-size: 17px;
}

.button-wrap.member-button-wrap .friendship-button .bb-icon-connection-waiting {
  font-size: 18px;
}

#buddypress .follow-button button {
  color: #fff;
  border-color: #007CFF;
}
#buddypress .follow-button button.outline {
  border-color: #007CFF;
  color: #007CFF;
}

#buddypress .bp-list:not(.grid) .follow-button button.outline {
  background-color: transparent;
}

.bp-members-list-hook:empty,
.member-button-wrap.footer-button-wrap:empty {
  display: none !important;
}

@media screen and (min-width: 24em) {
  .grid.members-list .list-wrap {
    min-height: 40px;
  }
}
@media screen and (max-width: 1120px) {
  .has-sidebar #friend-list .list-wrap.member-request-list-wrap {
    -ms-flex-flow: wrap;
        flex-flow: wrap;
  }
  .has-sidebar #friend-list .friends-meta.action {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }
  .has-sidebar #buddypress .list-wrap.member-request-list-wrap .friends-meta.action {
    margin-top: 15px;
  }
  .has-sidebar #buddypress #friend-list .action .button {
    min-width: 100px;
  }
}
@media screen and (max-width: 992px) {
  #friend-list .list-wrap.member-request-list-wrap {
    -ms-flex-flow: wrap;
        flex-flow: wrap;
  }
  #friend-list .friends-meta.action {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  body #buddypress .list-wrap.member-request-list-wrap .friends-meta.action {
    margin-top: 15px;
  }

  #buddypress #friend-list .action .button {
    min-width: 100px;
  }
}
@media screen and (max-width: 980px) {
  body #buddypress .bp-list .action {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}
@media screen and (min-width: 768px) and (max-width: 1100px) {
  body.logged-in .bp-list li .item .item-block {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}
@media screen and (min-width: 768px) and (max-width: 880px) {
  body.logged-in .bp-list li .item .item-block {
    margin-bottom: 8px;
  }

  #buddypress .bp-list:not(.grid) li .follow-button {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin: 5px 0;
  }
}
@media screen and (max-width: 680px) {
  body.logged-in .bp-list li .item .item-block {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }
}
@media screen and (max-width: 511px) {
  .directory.members .buddypress-wrap .subnav-filters .component-filters,
  .directory.members .buddypress-wrap .subnav-filters div {
    margin-top: 0;
    margin-bottom: 0;
  }
}
@media screen and (max-width: 480px) {
  body.logged-in .bp-list li .item .item-block {
    margin-bottom: 8px;
  }

  #buddypress .bp-list:not(.grid) li .follow-button {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin: 5px 0;
  }

  #buddypress #friend-list .action .button,
  .has-sidebar #buddypress #friend-list .action .button {
    min-width: 80px;
  }

  body #buddypress #friend-list .action .generic-button {
    margin-right: 5px;
  }

  .buddypress .item-list.groups-list:not(.grid) .list-wrap {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .buddypress .item-list.groups-list:not(.grid) .list-wrap .item-avatar {
    margin-bottom: 15px;
  }
}
#object-nav .sub-menu {
  background: #fff;
  box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.05), 0 6px 32px 0 rgba(18, 43, 70, 0.1);
  border-radius: 4px;
  list-style: none;
  padding: 10px 0;
  position: absolute;
  right: -20px;
  top: 50px;
  margin: 0;
  min-width: 168px;
  opacity: 0;
  visibility: hidden;
  z-index: 100;
}
#object-nav .sub-menu.active {
  opacity: 1;
  visibility: visible;
}
#object-nav .more-button {
  padding: 14px 0;
  line-height: 1.1;
}
#object-nav .more-button i {
  font-size: 1.25rem;
}

body.buddypress.bp-user #page #primary .entry-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.bp-dir-hori-nav nav#object-nav {
  background: #fff;
}
.bp-dir-hori-nav nav.horizontal {
  display: block;
  width: 100%;
  height: auto;
}

.bb-user-content-wrap {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.bb-user-content-wrap .member-social {
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.bb-user-content-wrap .member-social > .flex {
  margin-bottom: 10px;
}

.social-networks-wrap {
  white-space: nowrap;
}
.social-networks-wrap svg path {
  fill: #939597;
}

.member-title-wrap {
  margin: 30px 0 5px 0;
}

.users-header .bp-member-type {
  background: #D94C61;
  border-radius: 100px;
  font-size: 11px;
  font-weight: 600;
  color: #fff;
  letter-spacing: 0.25px;
  text-align: center;
  display: inline-block;
  padding: 4px 10px 4px;
  line-height: 1;
}

.single-headers .member-header-actions > .generic-button {
  margin: 5px 0 10px 10px;
}

body #buddypress .member-header-actions {
  padding-left: 20px;
  margin: 15px 0 0;
  text-align: right;
  overflow: visible;
}
body #buddypress .member-header-actions a,
body #buddypress .member-header-actions button {
  font-weight: 500;
}
body #buddypress .member-header-actions .friendship-button i {
  font-size: 15px;
}

#buddypress div#item-header-cover-image .user-nicename a,
#buddypress div#item-header-cover-image .user-nicename {
  margin: 0 10px 0 0;
}

.single-headers .followers-wrap,
.single-headers .following-wrap {
  -webkit-box-flex: initial;
      -ms-flex: initial;
          flex: initial;
  margin-right: 20px;
}
.single-headers .followers-wrap b,
.single-headers .following-wrap b {
  font-weight: 500;
}

#member-front-widgets {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin: 0 -10px;
}
#member-front-widgets .widget {
  margin: 10px;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 calc(25% - 20px);
          flex: 0 0 -webkit-calc(25% - 20px);
          flex: 0 0 calc(25% - 20px);
}
#member-front-widgets ul.item-list {
  margin: 0;
}

#buddypress .bb-bp-invites-content {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 55px 80px;
}
#buddypress .bb-bp-invites-content .screen-heading {
  font-weight: 500;
  font-size: 22px;
  line-height: 1.1;
}
#buddypress .bb-bp-invites-content .invite-info {
  font-size: 16px;
  color: #A3A5A9;
  letter-spacing: -0.27px;
  line-height: 1.2;
}
#buddypress .bb-bp-invites-content label {
  display: block;
  font-size: 16px;
  font-weight: 400;
  color: #A3A5A9;
  letter-spacing: -0.27px;
  line-height: 1.2;
  margin: 1.6875rem 0;
}
#buddypress .bb-bp-invites-content textarea {
  height: 120px;
  margin-bottom: 0;
  padding: 10px 15px;
}
#buddypress .bb-bp-invites-content .bp-feedback {
  margin: 0 0 30px;
}

#member-invites-table {
  box-shadow: none;
  margin-bottom: 0;
}
#member-invites-table th,
#member-invites-table td {
  padding: 12px 0 12px 25px;
}
#member-invites-table th {
  background-color: #f5f6f7;
  border-bottom: 1px solid #E7E9EC;
  border-top: 1px solid #E7E9EC;
}
#member-invites-table th:first-child {
  border-left: 1px solid #E7EAEC;
}
#member-invites-table th:last-child {
  border-right: 1px solid #E7EAEC;
}
#member-invites-table tr {
  background-color: transparent !important;
  border-bottom: 0;
}
#member-invites-table tr td {
  border-bottom: 0;
}
#member-invites-table tr td input {
  background-color: #fbfbfc !important;
}
#member-invites-table tr td:first-child {
  border-left: 1px solid #E7EAEC;
}
#member-invites-table tr td:last-child {
  border-right: 1px solid #E7EAEC;
}
#member-invites-table tr:first-child td {
  padding-top: 24px;
}
#member-invites-table tr:last-child td {
  border-bottom: 1px solid #E7EAEC;
  padding-top: 10px;
  padding-bottom: 25px;
}
#member-invites-table th.actions,
#member-invites-table td.field-actions {
  padding: 12px 0 12px 25px;
  text-align: left;
}
#member-invites-table th.actions span,
#member-invites-table td.field-actions span {
  color: #9ca8b4;
  border: 1px solid #9ca8b4;
  border-radius: 100%;
  padding: 1px 1px;
  line-height: 16px;
  font-size: 16px;
  text-align: center;
  display: inline-block;
  vertical-align: middle;
  margin-right: 5px;
  margin-left: -15px;
  cursor: pointer;
}
#member-invites-table th.actions span i:before,
#member-invites-table td.field-actions span i:before {
  content: '\e828';
  font-family: "bb-icons";
  vertical-align: top;
}
#member-invites-table .field-actions-last {
  padding: 12px 0;
  text-align: left;
}
#member-invites-table .field-actions-add {
  margin-left: 7px;
}
#member-invites-table .field-actions-add i {
  vertical-align: middle;
  display: inline-block;
  background-color: #007CFF;
  color: #fff;
  border-radius: 100%;
  padding: 6px 5px 4px 5px;
  height: auto;
  width: auto;
  line-height: 1;
}
#member-invites-table .field-actions-add i :before {
  content: '\e922';
  font-family: "bb-icons";
}

#buddypress #send-invite-form #wp-bp-member-invites-custom-content-editor-container {
  border-radius: 4px;
  overflow: hidden;
}
#buddypress #send-invite-form .submit {
  padding-top: 30px;
}

@media screen and (max-width: 420px) {
  #send-invite-form #member-invites-table {
    table-layout: fixed;
  }
  #send-invite-form #member-invites-table th {
    white-space: normal;
    line-height: 1.2;
  }
  #send-invite-form #member-invites-table th.title {
    width: 40%;
  }
  #send-invite-form #member-invites-table th.title.actions {
    width: 20%;
  }
  #send-invite-form #member-invites-table td {
    padding: 12px 5px;
  }
  #send-invite-form #member-invites-table td input {
    max-width: 100%;
    margin: 0 5px;
  }
  #send-invite-form #member-invites-table td.field-actions span {
    margin-right: 0;
    margin-left: 6px;
  }
  #send-invite-form #member-invites-table td .field-actions-add {
    margin-left: 2px;
  }
}
.bp-invitee-status a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.bp-invitee-status span {
  font-size: 20px;
  width: 22px;
  margin-right: 5px;
}
.bp-invitee-status .registered {
  color: inherit;
}

#buddypress #invites-send-invite-personal-li a:before {
  content: '\E910';
}

#buddypress #invites-sent-invites-personal-li a:before {
  content: '\E8AE';
}

td.field-name span,
td.field-email span {
  word-break: break-word;
}

body.invites.has-sidebar #buddypress .bp-settings-container .bp-navs {
  background: transparent;
  border-bottom: 1px solid #e7e9ec;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  min-height: 10px;
  border-right: 0;
  border-radius: 4px 4px 0 0;
  padding: 0;
}
body.invites.has-sidebar #buddypress .bp-settings-container .bp-navs a {
  margin: 0 20px -1px;
  padding: 14px 0;
}
body.invites.has-sidebar #buddypress .bp-settings-container .bp-navs a:before {
  display: none;
}
body.invites.has-sidebar #buddypress .bp-settings-container .bp-navs a:hover {
  background: transparent;
}
body.invites.has-sidebar #buddypress .bp-settings-container .bp-navs .selected a {
  background: transparent;
  border-bottom: 1px solid #007CFF;
  font-weight: 500;
}
body.invites.has-sidebar #buddypress .bp-settings-container .bp-navs li {
  float: left;
}
body.invites.has-sidebar #buddypress .bb-bp-invites-content {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 30px 50px;
}
body.invites.has-sidebar #buddypress.bp-single-vert-nav .bb-bp-invites-content {
  padding: 30px;
}
body.invites.has-sidebar #buddypress.bp-single-vert-nav .bp-settings-container {
  margin: 0 -20px;
  border: 0;
}

.member-header-actions.action:empty {
  display: none;
}

@media only screen and (min-width: 1081px) {
  #user-activity,
  #group-activity {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
    padding-top: 0;
  }
}
#secondary.no-padding-top {
  padding-top: 0;
}

.bp-single-vert-nav .bb-profile-grid #subnav {
  margin-bottom: 20px;
}

.recent-visitors {
  background: #fff;
  border: 1px solid #E7E9EC;
  padding: 20px;
  border-top: 0;
}
.recent-visitors h5 {
  font-weight: 500;
  margin-bottom: 12px !important;
}
.recent-visitors a {
  display: inline-block;
  margin-right: 5px;
}

@media screen and (max-width: 600px) {
  .invite-settings.bp-tables-user {
    white-space: nowrap;
    margin-bottom: 10px;
  }
}
@media screen and (max-width: 1200px) {
  #member-front-widgets .widget {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(33.33% - 20px);
            flex: 0 0 -webkit-calc(33.33% - 20px);
            flex: 0 0 calc(33.33% - 20px);
  }
}
@media screen and (min-width: 981px) {
  body #buddypress .member-header-actions {
    /*display: flex;*/
    /*flex-flow: row wrap;*/
    margin: 30px 0 0;
  }
}
@media screen and (max-width: 1080px) {
  #buddypress .bb-bp-invites-content {
    padding: 30px;
  }
}
@media screen and (max-width: 900px) {
  #buddypress .bb-bp-invites-content {
    padding: 20px;
    max-width: 100%;
  }

  body.invites.has-sidebar #buddypress .bb-bp-invites-content {
    padding: 20px;
  }
}
@media screen and (max-width: 980px) {
  div#item-header-content .flex {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  body #buddypress .member-header-actions {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding: 0;
    text-align: left;
  }
  body #buddypress .member-header-actions > .generic-button {
    float: left;
    margin-left: 0;
    margin-right: 10px;
  }

  #member-front-widgets .widget {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(50% - 20px);
            flex: 0 0 -webkit-calc(50% - 20px);
            flex: 0 0 calc(50% - 20px);
  }
}
@media screen and (max-width: 782px) {
  div#item-header-content .flex {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    /*margin-top: 10px;*/
  }

  .social-networks-wrap {
    width: 100%;
  }

  .member-title-wrap {
    margin-top: 5px;
  }

  .single-headers .following-wrap {
    margin-right: 0;
  }

  body #buddypress .member-header-actions {
    text-align: center;
  }
  body #buddypress .member-header-actions > .generic-button {
    float: none;
    margin-left: 5px;
    margin-right: 5px;
  }

  .single-headers .followers-wrap,
  .single-headers .following-wrap {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  #buddypress div#item-header-cover-image .user-nicename {
    margin: 0 0 5px;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .single-headers .activity {
    margin-bottom: 0;
  }
}
@media screen and (max-width: 640px) {
  #member-front-widgets .widget {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 20px);
            flex: 0 0 -webkit-calc(100% - 20px);
            flex: 0 0 calc(100% - 20px);
  }
}
/* Friends / Groups */
.widget.buddypress div.item-options,
.elementor-widget-wrap div.item-options {
  border-bottom: 1px solid #E7E9EC;
  font-size: 0;
  line-height: 1;
  margin: -10px 0 15px;
  padding: 0;
}
.widget.buddypress div.item-options a,
.elementor-widget-wrap div.item-options a {
  color: #939597;
  font-size: 0.875rem;
  display: inline-block;
  padding-bottom: 10px;
  margin-right: 1.25rem;
  margin-top: 10px;
  -webkit-animation: unset !important;
          animation: unset !important;
}
.widget.buddypress div.item-options a:hover,
.elementor-widget-wrap div.item-options a:hover {
  color: #007CFF;
}
.widget.buddypress div.item-options a:last-child,
.elementor-widget-wrap div.item-options a:last-child {
  margin-right: 0;
}
.widget.buddypress div.item-options .selected,
.elementor-widget-wrap div.item-options .selected {
  border-bottom: 1px solid #007CFF;
  color: #007CFF;
  font-weight: 600;
  margin-bottom: -1px;
}

.widget.buddypress div.item,
.widget.buddypress .bp-login-widget-user-links > div {
  margin: 0;
}

.widget.buddypress .bp-login-widget-user-links .bp-login-widget-user-link {
  margin-bottom: 0px;
  margin-top: 4px;
}

.widget.buddypress .bp-login-widget-user-links > div.bp-login-widget-user-link a {
  font-weight: 500;
  font-size: 14px;
  line-height: 19px;
  color: #122B46;
}
.widget.buddypress .bp-login-widget-user-links > div.bp-login-widget-user-link a:hover {
  color: #007CFF;
}

.widget.buddypress div.item-avatar img {
  height: auto;
  margin: 0;
  max-width: 38px;
  width: 100%;
  border-radius: 100%;
}

.widget.widget_bp_groups_widget div.item-avatar img {
  border-radius: 3px;
}

.widget_bp_groups_widget.buddypress div.item-avatar img {
  height: auto;
  max-width: 48px;
  width: 100%;
}

.widget_bp_core_whos_online_widget.buddypress div.item-avatar img,
.elementor-widget-wp-widget-bp_core_whos_online_widget div.item-avatar img,
.widget_bp_core_recently_active_widget.buddypress div.item-avatar img,
.widget_bp_follow_following_widget.buddypress div.item-avatar img,
.widget_bp_follow_follower_widget.buddypress div.item-avatar img,
.elementor-widget-wp-widget-bp_core_recently_active_widget div.item-avatar img,
.elementor-widget-wp-widget-bp_core_follow_following_widget div.item-avatar img {
  height: auto;
  max-width: 52px;
  width: 100%;
}

.widget.buddypress:not(.widget_bp_groups_widget) span.activity {
  display: none;
}

.widget.buddypress .item-avatar a {
  float: none;
  margin-bottom: 0;
  margin-right: 0;
}

.widget.buddypress #friends-list li,
.elementor-widget-wp-widget-bp_core_members_widget #friends-list li,
.elementor-widget-wp-widget-bp_core_members_widget #members-list li,
.widget.buddypress #members-list li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 3px 0;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  min-width: 100%;
}

.widget.buddypress #groups-list li,
.elementor-widget-wrap #groups-list li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 10px 0;
  margin-bottom: 0;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  min-width: 100%;
}

.widget.buddypress div.item-content,
.widget.buddypress div.item-meta {
  margin-left: 0;
}

.widget_bp_core_whos_online_widget .avatar-block,
.elementor-widget-wp-widget-bp_core_whos_online_widget .avatar-block,
.widget_bp_core_recently_active_widget .avatar-block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin: 0 -2px;
}

.widget_bp_core_whos_online_widget .item-avatar,
.elementor-widget-wp-widget-bp_core_whos_online_widget .item-avatar,
.widget_bp_core_recently_active_widget .item-avatar,
.widget_bp_follow_following_widget .item-avatar,
.widget_bp_follow_follower_widget .item-avatar,
.elementor-widget-wp-widget-bp_core_recently_active_widget .item-avatar,
.elementor-widget-wp-widget-bp_core_follow_following_widget .item-avatar {
  padding: 2px;
  /*flex: 0 0 20%;*/
  max-width: 20%;
}

.widget .item-list .item-avatar {
  margin-right: 12px;
  /*min-width: 48px;*/
}

.widget .item-list .item {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.widget .item-list .item-title a {
  color: #122B46;
  letter-spacing: -0.24px;
  line-height: 16px;
}
.widget .item-list .item-title a:hover {
  color: #007CFF;
}

.widget.widget_bp_groups_widget .item-list .item-title {
  margin-bottom: 3px;
}

.widget.widget_bp_groups_widget .item-list .item-title a {
  font-size: 0.9375rem;
  font-weight: 500;
  color: #122B46;
  letter-spacing: -0.24px;
}

.widget.buddypress span.activity {
  color: #A3A5A9;
  font-size: 12px;
  letter-spacing: -0.26px;
  line-height: 1.2;
}

/* widget_bp_core_login_widget */
.widget_bp_core_login_widget {
  /*overflow: hidden;*/
}
.widget_bp_core_login_widget:after {
  content: '';
  display: table;
  clear: both;
}
.widget_bp_core_login_widget.bs-bp-login .widget-title {
  margin-bottom: 10px;
}
.widget_bp_core_login_widget label {
  font-size: 0.875rem;
}
.widget_bp_core_login_widget .input {
  height: 34px;
  padding-left: 35px;
}
.widget_bp_core_login_widget .input[type=text],
.widget_bp_core_login_widget .input[type=password] {
  width: 100%;
}
.widget_bp_core_login_widget .forgetmenot {
  float: left;
  margin-top: 10px;
}
.widget_bp_core_login_widget.buddypress #bp-login-widget-form #bp-login-widget-submit {
  float: right;
  margin-top: 20px;
  margin-right: 0;
  background: #9CA8B4;
  border-radius: 100px;
  border: 0;
  color: #fff;
  font-size: 14px;
  font-weight: 500;
  min-width: 100px;
  height: 34px;
  cursor: pointer;
  padding: 5px 20px;
}
.widget_bp_core_login_widget.buddypress #bp-login-widget-form #bp-login-widget-submit.bp-login-btn-active {
  background: #007CFF;
}
.widget_bp_core_login_widget label[for='bp-login-widget-user-login'],
.widget_bp_core_login_widget label[for='bp-login-widget-user-pass'] {
  position: relative;
}
.widget_bp_core_login_widget label[for='bp-login-widget-user-login']:before,
.widget_bp_core_login_widget label[for='bp-login-widget-user-pass']:before {
  font-family: 'bb-icons';
  font-style: normal;
  font-weight: normal;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  line-height: 1em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: absolute;
  left: 10px;
  color: #A1ABB5;
}
.widget_bp_core_login_widget label[for='bp-login-widget-user-login']:before {
  content: '\e825';
  font-size: 16px;
  top: 30px;
}
.widget_bp_core_login_widget label[for='bp-login-widget-user-pass']:before {
  content: '\e829';
  font-size: 20px;
  top: 29px;
}
.widget_bp_core_login_widget label[for='bp-login-widget-user-pass'] span.label-switch {
  position: absolute;
  top: 32px;
  right: 10px;
  font-size: 0;
  -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease;
}
.widget_bp_core_login_widget label[for='bp-login-widget-user-pass'] span.label-switch:after {
  content: '\e8be';
  font-family: "bb-icons";
  font-style: normal;
  font-weight: normal;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  margin-right: .2em;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  line-height: 1em;
  margin-left: .2em;
  font-size: 14px;
  cursor: pointer;
  color: #a1abb5;
}
.widget_bp_core_login_widget label[for='bp-login-widget-user-pass'] span.label-switch.bb-eye:after {
  content: '\e8fc';
}
.widget_bp_core_login_widget .bp-login-widget-register-link {
  clear: both;
  display: none;
}
.widget_bp_core_login_widget .bs-login-id {
  margin: 0;
  text-align: center;
}
.widget_bp_core_login_widget .bs-login-id span {
  width: 33%;
  border-radius: 100%;
  position: relative;
  display: inline-block;
  background-size: cover;
  background-color: transparent;
  background-repeat: no-repeat;
  background-position: 50% 50%;
}
.widget_bp_core_login_widget .bs-login-id span:after {
  content: "";
  display: block;
  padding-bottom: 100%;
}

/* Sitewide Activity */
.widget .bp-site-wide-message #message button {
  background: transparent;
  border: 0;
  padding: 0;
  position: absolute;
  top: 0;
  min-height: 1px;
  top: -48px;
  right: -7px;
}
.widget .bp-site-wide-message #message button span {
  font-size: 0;
  line-height: 1;
  display: block;
}
.widget .bp-site-wide-message #message button span:before {
  content: '\e80a';
  color: #A1ABB5;
  font-family: 'bb-icons';
  font-size: 26px;
  font-style: normal;
  font-weight: normal;
  display: inline-block;
  text-decoration: inherit;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.widget .bp-site-wide-message #message p {
  margin: 0;
  padding-right: 0;
  position: static;
}
.widget .bp-site-wide-message #message p strong {
  font-weight: 600;
  font-size: 12px;
  color: #122B46;
  letter-spacing: 0.25px;
  line-height: 16px;
  text-transform: uppercase;
  margin-bottom: -8px;
  display: block;
}

.bp-site-wide-message {
  position: relative;
}

div#groups-list-options {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

.bb-widget-dropdown {
  margin-left: auto;
  position: relative;
}
.bb-widget-dropdown i.bb-icon-menu-dots-v {
  position: relative;
  top: -2px;
  font-size: 20px;
  margin-bottom: -5px;
  display: block;
}

/* Recently Active Members Widget */
.widget_bp_core_recently_active_widget .widget-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.widget_bp_core_recently_active_widget .widget-title a.bs-widget-reload {
  color: #939597;
  margin-left: auto;
}

/* Who's Online Widget */
.more-block {
  text-align: center;
  text-transform: uppercase;
  margin: 10px 0 0;
  display: block;
  height: 14px;
  font-size: 12px;
  line-height: 14px;
}
.more-block a.count-more {
  cursor: pointer;
  padding-left: 10px;
}
.more-block a.count-more .bb-icon-angle-right {
  vertical-align: middle;
  line-height: 14px;
}
.more-block .bb-icon-angle-right:before {
  font-size: 24px;
  vertical-align: bottom;
  margin-left: .1em;
  margin-right: 0;
}

.widget_bp_core_whos_online_widget .item-avatar a,
.elementor-widget-wp-widget-bp_core_whos_online_widget .item-avatar a {
  position: relative;
  display: inline-block;
}
.widget_bp_core_whos_online_widget .item-avatar a .member-status,
.elementor-widget-wp-widget-bp_core_whos_online_widget .item-avatar a .member-status {
  width: 13px;
  height: 13px;
  right: -3px;
  top: 1px;
  border: 2px solid #fff;
}
.widget_bp_core_whos_online_widget .item-avatar a .member-status.online,
.elementor-widget-wp-widget-bp_core_whos_online_widget .item-avatar a .member-status.online {
  background-color: #1CD991;
}
.widget_bp_core_whos_online_widget .item-avatar a .member-status.offline,
.elementor-widget-wp-widget-bp_core_whos_online_widget .item-avatar a .member-status.offline {
  background-color: #bdbdbd;
}

/* Members Widget */
.elementor-widget-wp-widget-bp_core_members_widget #members-list .item-avatar a,
.widget_bp_core_members_widget #members-list .item-avatar a {
  position: relative;
  display: inline-block;
}
.elementor-widget-wp-widget-bp_core_members_widget #members-list .item-avatar a .member-status,
.widget_bp_core_members_widget #members-list .item-avatar a .member-status {
  width: 13px;
  height: 13px;
  right: -3px;
  top: 1px;
  border: 2px solid #fff;
}
.elementor-widget-wp-widget-bp_core_members_widget #members-list .item-avatar a .member-status.online,
.widget_bp_core_members_widget #members-list .item-avatar a .member-status.online {
  background-color: #1CD991;
}
.elementor-widget-wp-widget-bp_core_members_widget #members-list .item-avatar a .member-status.offline,
.widget_bp_core_members_widget #members-list .item-avatar a .member-status.offline {
  background-color: #bdbdbd;
}

.widget_bp_core_members_widget #members-list .member_last_visit {
  font-size: 12px;
  color: #A3A5A9;
}

/* Networkside Posts Widget */
.widget.buddypress #network-list li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.widget.buddypress #network-list li .item-title a {
  letter-spacing: 0;
  color: #122B46;
}
.widget.buddypress #network-list li .item-data {
  color: #122B46;
}
.widget.buddypress #network-list li .item-data .netowrk-post-activity {
  color: #939597;
}
.widget.buddypress #network-list li div.item-avatar img {
  width: 28px;
  height: 28px;
}
.widget.buddypress #network-list li .data-photo {
  max-width: 60%;
  margin: 5px 0 5px;
}
.widget.buddypress #network-list li .data-photo a {
  border-radius: 3px;
}

.netowrk-post-type {
  color: #939597;
}

a.button.logout-link {
  padding: 6px 15px;
  min-height: 20px;
  font-size: 12px;
  font-weight: 600;
  font-style: normal;
  line-height: 1;
}

body.buddypress .buddypress-wrap .bbp-logged-in h4 {
  margin-top: 4px;
  margin-bottom: 0px;
}

.buddypress .buddypress-wrap .bbp_widget_login a.button.logout-link,
#buddypress .bbp_widget_login a.button.logout-link {
  padding: 3px 0 3px;
  font-size: 13px;
  font-weight: 500;
  font-style: normal;
  line-height: 1;
  color: #007CFF;
  background: transparent;
  border: 0;
  min-height: auto;
}
.buddypress .buddypress-wrap .bbp_widget_login a.button.logout-link:hover,
#buddypress .bbp_widget_login a.button.logout-link:hover {
  color: #0F74E0;
}

.bp-login-widget-user-logout a.logout {
  padding: 0 0 3px;
  font-size: 13px;
  font-weight: 500;
  font-style: normal;
  line-height: 1;
}

.single .hentry .buddypress.widget .activity-list blockquote {
  background: transparent;
  color: #4D5C6D;
}
.single .hentry .buddypress.widget .activity-list blockquote:before {
  display: none;
}

.widget_bp_follow_following_widget .avatar-block,
.widget_bp_follow_follower_widget .avatar-block,
.elementor-widget-wp-widget-bp_core_recently_active_widget .avatar-block,
.elementor-widget-wp-widget-bp_core_follow_following_widget .avatar-block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin: 0 -2px;
}

.widget .mc4wp-form-fields p,
#buddypress .widget .mc4wp-form-fields p,
.buddypress .buddypress-wrap .widget .mc4wp-form-fields p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.widget .mc4wp-form-fields input[type="submit"],
#buddypress .widget .mc4wp-form-fields input[type="submit"],
.buddypress .buddypress-wrap .widget .mc4wp-form-fields input[type="submit"] {
  font-size: 14px;
  padding: 0 10px;
  border-radius: 0 3px 3px 0;
}
.widget .mc4wp-form-fields input[type="submit"]:disabled,
#buddypress .widget .mc4wp-form-fields input[type="submit"]:disabled,
.buddypress .buddypress-wrap .widget .mc4wp-form-fields input[type="submit"]:disabled {
  background: #D0D4D8;
}
.widget .mc4wp-form-fields input[type="submit"][disabled=disabled],
#buddypress .widget .mc4wp-form-fields input[type="submit"][disabled=disabled],
.buddypress .buddypress-wrap .widget .mc4wp-form-fields input[type="submit"][disabled=disabled] {
  background: #D0D4D8;
  color: #fff;
  border: 1px solid transparent;
}
.widget .mc4wp-form-fields input[type="email"],
#buddypress .widget .mc4wp-form-fields input[type="email"],
.buddypress .buddypress-wrap .widget .mc4wp-form-fields input[type="email"] {
  border-radius: 3px 0 0 3px;
  border-right: 0;
  font-size: 14px;
  letter-spacing: -0.24px;
  min-width: 160px;
}

.widget_display_topics ul li {
  margin-bottom: 15px;
}
.widget_display_topics ul div {
  font-size: 12px;
  color: rgba(0, 0, 0, 0.45);
  margin-top: 3px;
}
.widget_display_topics ul img.avatar {
  border-radius: 50%;
}

body.buddypress .buddypress-wrap .bb-recent-posts h4 {
  margin: 0;
}

#buddypress .widget_display_search input#bbp_search_submit {
  display: none;
}

.buddypress-wrap.round-avatars .widget:not(.widget_bp_core_members_widget) .avatar {
  border-radius: 3px;
}

.buddypress-wrap .widget.widget_bps_widget .standard-form label {
  font-weight: normal;
  margin-top: 0;
}
.buddypress-wrap .widget.widget_bps_widget .standard-form .submit {
  padding-top: 0;
}

.widget_sfwd-quiz-widget li h4,
body.buddypress .buddypress-wrap .widget_sfwd-quiz-widget li h4 {
  margin-bottom: 10px;
}

#buddypress .widget_search .search-submit {
  display: none;
}

.widget_nav_menu.buddypress_object_nav {
  overflow: hidden;
}

.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical {
  width: 100%;
  min-height: auto;
}
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical li.selected {
  background: transparent;
}
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical li a {
  padding: 2px 0;
}

#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical ul li a:hover {
  color: #122B46;
}
#buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical ul li:hover {
  background: transparent;
}

.widget_nav_menu.buddypress_object_nav nav#object-nav,
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical {
  padding-left: 0;
  padding-right: 0;
  background-color: transparent;
  border: 0;
  margin-bottom: 0;
}
.widget_nav_menu.buddypress_object_nav nav#object-nav .more-button,
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical .more-button {
  display: none;
}
.widget_nav_menu.buddypress_object_nav nav#object-nav > ul > li,
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical > ul > li {
  padding-right: 0;
  float: none;
}
.widget_nav_menu.buddypress_object_nav nav#object-nav ul.sub-menu,
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical ul.sub-menu {
  margin-left: 0;
}
.widget_nav_menu.buddypress_object_nav nav#object-nav ul.sub-menu a,
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical ul.sub-menu a {
  padding: 8px 0;
}
.widget_nav_menu.buddypress_object_nav nav#object-nav ul.sub-menu a:hover,
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical ul.sub-menu a:hover {
  background: transparent;
}
.widget_nav_menu.buddypress_object_nav nav#object-nav ul.sub-menu .selected > a,
.widget_nav_menu.buddypress_object_nav nav#object-nav.vertical ul.sub-menu .selected > a {
  background: transparent;
}

.widget .bp-navs ul li {
  margin-bottom: 10px;
}

/* Profile search widget */
.bp-profile-search-widget {
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  font-size: 0.875rem;
  line-height: 1.35;
  margin-bottom: 0.9375rem;
  padding: 0;
}
.bp-profile-search-widget .bps-form-title {
  font-family: inherit;
  font-size: 0.75rem;
  font-weight: 600;
  color: #122B46;
  letter-spacing: 0.25px;
  line-height: 1rem;
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
  margin: 0;
  padding: 1.125rem 1.25rem;
  text-transform: uppercase;
}
.bp-profile-search-widget .bps-form {
  margin: 0;
  padding: 1.125rem 1.25rem 1.375rem;
}
.bp-profile-search-widget .bps-label {
  font-size: 14px;
  font-weight: 400;
  margin-bottom: 8px;
  display: block;
}
.bp-profile-search-widget .bps-label strong {
  font-weight: 400;
}
.bp-profile-search-widget label {
  font-size: 14px;
  font-weight: 400;
}
.bp-profile-search-widget .bp-radio-wrap label,
.bp-profile-search-widget .bp-checkbox-wrap label {
  color: #7F868F;
}
.bp-profile-search-widget input[type="search"] {
  background: transparent;
  padding-left: 12px;
  width: 100%;
}
.bp-profile-search-widget p.bps-description {
  margin: 5px 0;
  font-size: 12px;
  color: #7F868F;
}
.bp-profile-search-widget .bp-radio-wrap,
.bp-profile-search-widget .bp-checkbox-wrap {
  margin-bottom: 10px;
}
.bp-profile-search-widget .submit-wrapper input {
  min-width: 140px;
  font-size: 14px;
  font-weight: 500;
}
.bp-profile-search-widget .bp-field-wrap input:not([type=checkbox]):not([type=radio]) {
  width: 100%;
}
.bp-profile-search-widget .clear-from-wrap {
  margin-bottom: 20px;
}
.bp-profile-search-widget .bp-heading-field-wrap {
  background: #FBFBFC;
  border-top: 1px solid #E7E9EC;
  border-bottom: 1px solid #E7E9EC;
  margin: 0 -20px 20px;
  padding: 12px 20px;
}
.bp-profile-search-widget .bp-heading-field-wrap strong {
  text-transform: uppercase;
  font-size: 0.75rem;
  font-weight: 600;
  color: #122B46;
}
.bp-profile-search-widget .bp-heading-field-wrap p.bps-description {
  margin: 5px 0 0;
}
.bp-profile-search-widget .date-label {
  display: block;
  margin-bottom: 5px;
}
.bp-profile-search-widget .date-wrapper select {
  margin-bottom: 10px;
}

.buddypress.widget ul.item-list {
  margin: 0;
}

.buddypress.widget ul.item-list li .item-avatar .avatar {
  width: 100%;
}

.widget.activity_update .activity-link-preview-image,
.elementor-widget-wp-widget-bp_latest_activities .activity-link-preview-image {
  max-width: 100%;
}
.widget.activity_update .activity-link-preview-content,
.elementor-widget-wp-widget-bp_latest_activities .activity-link-preview-content {
  clear: both;
  padding: 0;
}
.widget.activity_update .activity-link-preview-title,
.elementor-widget-wp-widget-bp_latest_activities .activity-link-preview-title {
  font-style: normal;
  margin-bottom: 5px;
  margin-right: 0;
}
.widget.activity_update footer cite,
.elementor-widget-wp-widget-bp_latest_activities footer cite {
  margin-right: 12px;
}
.widget.activity_update .activity-list > div,
.elementor-widget-wp-widget-bp_latest_activities .activity-list > div {
  margin-bottom: 15px;
}
.widget.activity_update .activity-list > div:last-of-type,
.elementor-widget-wp-widget-bp_latest_activities .activity-list > div:last-of-type {
  margin-bottom: 0;
}
.widget.activity_update .activity-list > div p,
.elementor-widget-wp-widget-bp_latest_activities .activity-list > div p {
  margin-bottom: 10px;
}
.widget.activity_update .activity-list img,
.elementor-widget-wp-widget-bp_latest_activities .activity-list img {
  margin-bottom: 0;
}
.widget.activity_update .view.activity-time-since,
.elementor-widget-wp-widget-bp_latest_activities .view.activity-time-since {
  font-style: normal;
  font-weight: 500;
  font-size: 13px;
}
.widget.activity_update footer,
.elementor-widget-wp-widget-bp_latest_activities footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.widget.activity_update .activity-update .update-item,
.elementor-widget-wp-widget-bp_latest_activities .activity-update .update-item {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.widget.activity_update .activity-update p,
.elementor-widget-wp-widget-bp_latest_activities .activity-update p {
  color: #A3A5A9;
}
.widget.activity_update .activity-update p a:not(.activity-time-since),
.elementor-widget-wp-widget-bp_latest_activities .activity-update p a:not(.activity-time-since) {
  color: #122B46;
  font-weight: 500;
}
.widget.activity_update .activity-update p a:not(.activity-time-since):hover,
.elementor-widget-wp-widget-bp_latest_activities .activity-update p a:not(.activity-time-since):hover {
  color: #007CFF;
}
.widget.activity_update .activity-update .activity-time-since,
.elementor-widget-wp-widget-bp_latest_activities .activity-update .activity-time-since {
  display: block;
  font-size: 12px;
  color: #939597;
  margin-top: 5px;
}
.widget.activity_update .activity-update .activity-time-since:hover,
.elementor-widget-wp-widget-bp_latest_activities .activity-update .activity-time-since:hover {
  color: #007CFF;
}

.buddypress.widget .activity-update .update-item cite {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 40px;
          flex: 0 0 40px;
}

.widget.bp-latest-activities .activity-update {
  color: #A3A5A9;
  font-size: 14px;
  letter-spacing: -0.24px;
  margin-bottom: 20px;
}
.widget.bp-latest-activities a {
  color: #122B46;
}
.widget.bp-latest-activities a:hover {
  color: #007CFF;
}
.widget.bp-latest-activities p {
  margin-bottom: 0;
}

.widget-area .widget.bp-latest-activities .activity-update p img {
  max-width: 15px;
  vertical-align: text-bottom;
  margin-right: 5px;
  margin-left: 2px;
}

.subnav-search.groups-search {
  float: right;
  margin-top: -56px;
}

.bs-groups-items {
  margin-bottom: 0;
}
.bs-groups-items .item-title a {
  margin-bottom: 8px;
  display: inline-block;
}
.bs-groups-items .item-meta p {
  margin-bottom: 7px;
}
.bs-groups-items .item-meta p:last-child {
  margin: 0;
}
.bs-groups-items span.status {
  text-transform: capitalize;
}
.bs-groups-items .item-desc {
  font-size: 14px;
  color: #4D5C6D;
  line-height: 1.35;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding-right: 30px;
  display: block;
  display: -webkit-box;
  height: 2.69em;
  margin: 0 auto;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.bs-groups-items .item-desc:after {
  content: ' ';
  display: inline-block;
  vertical-align: middle;
}
.bs-groups-items .action {
  margin-left: auto;
}
.bs-groups-items.list-view .item-title-wrap {
  min-width: 0;
}
.bs-groups-items.list-view .item-title a {
  display: block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.group-item-avatar {
  background: #fff;
  border: 3px solid #fff;
  box-shadow: 0 2px 5px 0 rgba(18, 43, 70, 0.12), 0 0 0 1px #E7E9EC;
  border-radius: 1px;
  display: inline-block;
}

a.group-item-avatar {
  border-radius: 3px;
  /*width: 81px;*/
}
a.group-item-avatar .avatar {
  max-width: 100%;
}

.bs-groups-items.grid-view .bs-item-list-inner {
  padding-bottom: 14px;
  text-align: left;
}
.bs-groups-items.grid-view .item-avatar {
  margin-top: -50px;
  position: relative;
  max-width: 75px;
  width: 100%;
}
.bs-groups-items.grid-view span.status {
  font-size: 13px;
  color: #939597;
  letter-spacing: -0.24px;
}
.bs-groups-items.grid-view .item-title {
  margin-bottom: 15px;
}
.bs-groups-items.grid-view .item-title a {
  margin-bottom: 0;
}

.bs-group-head {
  margin-bottom: 6px;
}

.btn-group {
  color: #007CFF;
  font-size: 13px;
  line-height: 1.1875;
  letter-spacing: -0.24px;
  font-weight: 500;
  cursor: pointer;
}

.buddypress-wrap .item-list.groups-list .item-meta {
  font-size: 13px;
  font-weight: 400;
  color: #A3A5A9;
}
.buddypress-wrap .item-list.groups-list .invite-message {
  margin-top: 5px;
  font-size: 14px;
  font-style: italic;
}

body #buddypress .bp-list .action .generic-button .leave-group,
body #buddypress .bp-list .action .generic-button .membership-requested {
  background: #007CFF;
  color: #fff;
}
body #buddypress .bp-list .action .generic-button .leave-group:hover,
body #buddypress .bp-list .action .generic-button .membership-requested:hover {
  color: #fff;
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
}

body #buddypress .bp-list .action .generic-button .membership-requested {
  min-width: 140px;
}

.item-desc.group-item-desc {
  -ms-flex-item-align: center;
      align-self: center;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  font-size: 14px;
  line-height: 1.4;
  padding-right: 20px;
}

.buddypress-wrap .groups-list .item-desc.group-item-desc p {
  margin: 0;
  max-width: 85%;
}

#buddypress .bp-list.groups-list li .list-wrap .item .item-block {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 28%;
          flex: 0 0 28%;
  padding-right: 15px;
}
#buddypress .bp-list.groups-list li .list-wrap .item .item-block .groups-title a {
  width: 100%;
  overflow-wrap: break-word;
  word-wrap: break-word;
}

.groups-loop-buttons {
  -ms-flex-item-align: center;
      align-self: center;
  min-width: 140px;
}

.bp-groups-filter-wrap #dir-filters,
#groups-order-select,
div#groups-order-select .select-wrap {
  margin-top: 0;
  margin-bottom: 0;
}

@media (hover: none) {
  .entry-content .bs-group-head a.btn-group:not(.button):hover {
    color: #007CFF;
  }
}
#buddypress .group-title {
  line-height: 1;
  margin: 6px 0 2px;
}

.bs-group-cover {
  overflow: hidden;
  margin: -15px -20px 5px;
  position: relative;
}
.bs-group-cover a {
  border-radius: 3px 3px 0 0;
  position: relative;
  overflow: hidden;
  padding-top: 52.56%;
  display: block;
  background: #809AB4;
}
.bs-group-cover a:before {
  background: rgba(0, 0, 0, 0.25);
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}
.bs-group-cover img {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 0;
  min-height: 100%;
  width: auto;
  min-width: 100%;
  object-fit: cover;
}

.bs-group-members {
  display: inline-block;
  margin-right: 12px;
}
.bs-group-members img {
  border: 1px solid #fff;
  max-width: 24px;
  display: inline-block;
  margin-right: -8px;
  position: relative;
  z-index: 3;
}
.bs-group-members img:nth-child(2) {
  z-index: 2;
}
.bs-group-members img:nth-child(3) {
  z-index: 1;
}

a.bb-more {
  display: inline-block;
}
a.bb-more i:before {
  margin: 0;
  font-size: 19px;
  line-height: 0.5;
  position: relative;
  top: 3px;
  left: -7px;
  opacity: 0.7;
}

.members-count {
  color: #4D5C6D;
}

.bs-groups-items .bs-item-list-inner .item-meta {
  font-size: 12px;
}

.bs-groups-directory .bs-item-list-tabs {
  clear: both;
}

#groups-list.bp-list .avatar {
  border-radius: 3px;
}
#groups-list.bp-list .group-avatar-wrap {
  min-height: 81px;
  min-width: 81px;
}

.elementor-widget-wrap .buddypress-wrap.bp-shortcode-wrap .subnav-filters {
  margin: 25px 0;
}
.elementor-widget-wrap #groups-list.bp-list li {
  min-width: inherit;
  padding: 0 9px;
  margin: 0 0 20px;
  display: list-item;
}
.elementor-widget-wrap #groups-list.bp-list li .item {
  line-height: inherit;
}
.elementor-widget-wrap #groups-list.bp-list li .item-avatar {
  -webkit-box-flex: 0;
      -ms-flex: none;
          flex: none;
  margin-right: 0;
}
.elementor-widget-wrap #groups-list.bp-list li .bs-group-members img {
  max-width: 24px;
  border-radius: 50%;
  border: 1px solid #fff;
}
.elementor-widget-wrap #groups-list.bp-list:not(.grid) .item-avatar {
  margin-right: 20px;
}

#groups-list.bp-list.grid.bb-cover-enabled .item-avatar {
  margin-bottom: 20px;
  text-align: left;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
#groups-list.bp-list.grid.bb-cover-enabled .item-avatar .group-avatar-wrap {
  margin-top: -47px;
}
#groups-list.bp-list.grid.bb-cover-enabled .item-avatar img {
  max-width: 75px;
  width: 100%;
}
#groups-list.bp-list.grid.bb-cover-enabled .item-avatar .generic-button {
  text-align: right;
}
#groups-list.bp-list.grid.bb-cover-enabled .item-avatar .generic-button .group-button {
  line-height: 1.3;
  min-height: 1px;
  padding: 0;
  border: 0;
  border-radius: 0;
  min-width: 1px;
  width: auto;
  background: transparent;
  box-shadow: none;
  margin: 5px 0 5px auto;
  font-size: 14px;
  color: #007CFF;
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
}
#groups-list.bp-list.grid.bb-cover-enabled .item-avatar .generic-button .group-button:hover {
  color: #007CFF;
}
#groups-list.bp-list.grid.bb-cover-enabled .item-avatar .generic-button .group-button span {
  font-size: 0;
}
#groups-list.bp-list.grid.bb-cover-enabled .item-avatar .generic-button .group-button span:before {
  content: '\e876';
  font-family: 'bb-icons';
  speak: none;
  font-size: 14px;
  margin-right: 5px;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  list-style: none;
  -webkit-font-smoothing: antialiased;
}
#groups-list.bp-list.grid.bb-cover-enabled .list-title,
#groups-list.bp-list.grid.bb-cover-enabled .item-meta {
  text-align: left;
}
#groups-list.bp-list.grid.bb-cover-enabled .groups-loop-buttons {
  -ms-flex-item-align: end;
      align-self: flex-end;
  min-width: 1px;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin-left: 10px;
}
#groups-list.bp-list.grid.bb-cover-enabled .groups-loop-buttons .group-button {
  text-align: right;
}
#groups-list.bp-list.grid.bb-cover-enabled .last-activity,
#groups-list.bp-list.grid.bb-cover-enabled .footer-button-wrap {
  display: none;
}

#groups-list.bp-list.grid.bb-cover-disabled .item-avatar .groups-loop-buttons {
  display: none;
}
#groups-list.bp-list.grid.bb-cover-disabled img.avatar {
  max-width: 115px;
  width: 100%;
}
#groups-list.bp-list.grid.bb-cover-disabled .group-avatar-wrap {
  margin: 5px 0 20px;
}
#groups-list.bp-list.grid.bb-cover-disabled .item-meta {
  margin-bottom: 5px;
}

.group-members-wrap.only-grid-view {
  font-size: 12px;
  color: #A3A5A9;
  letter-spacing: -0.24px;
  margin-bottom: 2px;
  text-align: left;
}

.groups.group-members #group-members-search {
  height: 34px;
  font-size: 15px;
}
.groups.group-members .buddypress-wrap .subnav-filters {
  margin-bottom: 20px;
}

a.bb-more-link {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
a.bb-more-link i {
  font-size: 12px;
}

.groups.single-item .activity-update-form {
  margin-bottom: 20px;
}

#item-body.group-single-wrapper {
  margin: 0 -10px;
}

.bb-cover-disabled.grid .group-members-wrap.only-grid-view {
  display: none;
}

.bp-shortcode-wrap .bp-feedback.info {
  margin-top: -5px;
  margin-bottom: 20px;
}
.bp-shortcode-wrap .dir-list {
  border-top: 1px solid #E7E9EC;
  padding-top: 30px;
}
.bp-shortcode-wrap .item-desc.group-item-desc {
  padding-right: 40px;
}

.buddypress-wrap.bp-shortcode-wrap .subnav-filters {
  margin-top: -56px;
  float: right;
}

body #buddypress .bp-list .action .generic-button .group-button {
  min-width: 170px;
}

#request-membership-form #group-request-membership-comments {
  min-height: 80px;
  margin-bottom: 20px;
}

@media screen and (min-width: 800px) {
  .sidebar-left .bb-profile-grid,
  .sidebar-left .bb-user-nav-display-wrap {
    -ms-flex-flow: row-reverse;
        flex-flow: row-reverse;
  }
}
@media (min-width: 800px) and (max-width: 1150px) {
  .has-sidebar .bs-groups-items.list-view .item-wrap-left {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
  .has-sidebar .bs-groups-items.list-view .item-wrap-left {
    margin-bottom: 20px;
  }
  .has-sidebar .bs-groups-items.list-view div.action {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding: 0;
    margin: 0;
  }
  .has-sidebar .bs-groups-items.list-view .item-wrap-right {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }
  .has-sidebar .bs-groups-items .item-desc {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 15px;
    padding-right: 0;
  }
  .has-sidebar #buddypress .bs-groups-items .action .button {
    display: inline-block;
  }

  .bs-item-list.list-view .bb-group-profile-card .bs-meta-bp_group_last_active {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 15px;
  }
}
@media (max-width: 1000px) {
  .bs-groups-items.list-view .item-wrap-left {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }

  .bs-groups-items.list-view .item-wrap-left {
    margin-bottom: 20px;
  }
  .bs-groups-items.list-view div.action {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding: 0;
    margin: 0;
  }
  .bs-groups-items.list-view .item-wrap-right {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    /*flex: 0 0 100%;*/
  }

  .bs-groups-items .item-desc {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 15px;
    padding-right: 0;
  }

  #buddypress .bs-groups-items .action .button {
    display: inline-block;
  }

  .item-desc.group-item-desc {
    margin: 10px 0;
    padding-right: 0;
  }

  .item-desc.group-item-desc,
  #buddypress .bp-list.groups-list li .list-wrap .item .item-block {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding-right: 0;
  }

  .buddypress-wrap .groups-list .item-desc.group-item-desc p {
    max-width: 100%;
  }

  body.logged-in .bp-list.groups-list li .item .item-block {
    margin-bottom: 0;
  }
}
@media (max-width: 543px) {
  .item-title a {
    font-size: 18px;
    line-height: 1.4;
  }

  .bs-groups-items.list-view .item-wrap-left {
    padding-right: 0;
  }

  .bs-groups-items.list-view .item-wrap-right {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }
}
@media screen and (max-width: 782px) {
  #item-actions.group-item-actions dl {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin: 0 0 10px;
    padding: 0;
  }
}
@media (max-width: 380px) {
  .list-view .item-wrap-left {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  .bs-item-list.list-view a.group-item-avatar {
    /*width: 65px;*/
  }

  .bs-item-list.list-view .item-avatar {
    /*flex: 0 0 100%;*/
    /*margin-bottom: 15px;*/
    margin-right: 15px;
  }

  .bs-groups-items .item-title a {
    margin-bottom: 3px;
  }

  .bs-groups-items.list-view .item-title-wrap {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
  }
}
@media (max-width: 360px) {
  .subnav-search.groups-search {
    float: right;
    margin-top: -6px;
    width: 100%;
    margin-bottom: 20px;
  }
}
.bb-single-bp-content {
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  padding: 20px;
  margin-bottom: 20px;
}
#buddypress .bb-single-bp-content.bb-friends-wrap .bs-dir-search {
  margin-top: -10px;
}
.bb-single-bp-content .bs-item-list-tabs {
  margin-top: 20px;
  margin-bottom: -16px;
  border: 0;
}
.bb-single-bp-content .bs-item-list-tabs .selected a {
  font-weight: inherit;
}

#buddypress .bb-single-bp-header {
  border-bottom: 1px solid #E7E9EC;
  margin: 0 -20px 20px;
  padding: 0 20px 15px;
}
#buddypress .bb-single-bp-header .bs-title {
  font-family: inherit;
  font-size: 1rem;
  letter-spacing: 0.33px;
  margin-bottom: 0;
  font-weight: 600;
  text-transform: uppercase;
  line-height: 1;
}
#buddypress .bb-single-bp-header .bs-dir-search {
  margin: 0 0 0 auto;
}
#buddypress .bb-single-bp-header .bs-link {
  font-size: 14px;
}

.single-item.groups #buddypress div#item-header #item-header-cover-image #item-header-content,
.single-item.groups #buddypress div#item-header #item-header-cover-image #item-actions {
  max-width: none;
}
.single-item.groups #buddypress div#item-header div.generic-button {
  margin: 0;
}
.single-item.groups #buddypress div#item-header #item-buttons {
  padding: 0;
  margin-bottom: 0;
}
.single-item.groups #buddypress .group-title-bar {
  margin-top: 30px;
}
.single-item.groups #buddypress div#item-header div#item-meta {
  margin: 10px 0 5px 0;
  padding: 0;
}
.single-item.groups #buddypress div#item-header div#item-meta p {
  margin-bottom: 12px;
  color: #4D5C6D;
}
.single-item.groups #buddypress .highlight,
.single-item.groups #buddypress .highlight strong {
  display: block;
  margin-bottom: 12px;
  font-size: 15px;
  background: none;
}
.single-item.groups #buddypress .group-members-preview .gmp-list {
  margin-right: 10px;
}
.single-item.groups #buddypress .group-members-preview img {
  float: right;
  width: 32px;
  height: 32px;
  margin-left: -10px;
  border-radius: 50%;
  border: 1px solid #fff;
}
.single-item.groups #buddypress .group-members-preview img:last-child {
  margin: 0;
}
.single-item.groups #buddypress div#item-header div#item-meta .group-members-preview p {
  margin: 0;
  font-size: 13px;
  color: #939597;
}
.single-item.groups #buddypress div#item-header div#item-meta .group-members-preview p span {
  color: #3C4A5A;
}

.single-item.subgroups #buddypress .item-body .subnav-filters {
  margin-bottom: 1.5em;
}
.single-item.subgroups #buddypress .item-body .groups-type-navs {
  display: none;
}

#buddypress #item-header-cover-image #item-buttons {
  margin-left: auto;
}

#buddypress .generic-button a.group-button.join-group,
#buddypress .generic-button a.group-button.leave-group,
#buddypress .bs-group-invite .button {
  background: none;
  border-width: 1px;
  border-color: #007CFF;
  box-shadow: none;
  color: #007CFF;
  font-size: 14px;
  min-height: 34px;
  padding: 6px 20px;
  border-radius: 100px;
}
#buddypress .generic-button a.group-button.join-group:hover,
#buddypress .generic-button a.group-button.leave-group:hover,
#buddypress .bs-group-invite .button:hover {
  color: #0070e6;
  border-color: #0070e6;
}

.bb-group-members-wrap .grid-view .member-status {
  /*    right: auto;
      left: 4px;
      top: 4px;*/
}

.bb-group-members-wrap.bb-single-bp-content .item-meta {
  margin: 10px 0 15px;
}

/* Widgets */
.bs-suggested-groups .item {
  margin-bottom: 10px;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  overflow: hidden;
}
.bs-suggested-groups .item .bs-suggested-group-cover {
  height: 66px;
  display: block;
  background-position: center top;
  background-repeat: no-repeat;
  background-size: cover;
}
.bs-suggested-groups .item #item-header-avatar {
  position: relative;
  width: 52px;
  margin-left: 15px;
  margin-top: -40px;
  border: 2px solid #fff;
  border-radius: 3px;
}
.bs-suggested-groups .item #item-header-avatar a {
  border-radius: 3px;
  overflow: hidden;
}
.bs-suggested-groups .item .item-meta {
  position: relative;
  padding: 10px 15px 15px;
}
.bs-suggested-groups .item h5 {
  margin-bottom: 0;
}
.bs-suggested-groups .item .meta-members {
  font-size: 13px;
  color: #939597;
}
.bs-suggested-groups .item a.meta-join {
  font-size: 15px;
  position: absolute;
  top: 2px;
  right: 15px;
}
.bs-suggested-groups .item a.meta-join:hover {
  color: #0070e6;
}

.widget-title .stats {
  color: #818385;
}

.bs-suggested-groups .more,
.bs-group-invite .more {
  font-weight: 600;
}

.bs-group-admins ul,
.bs-group-members-grid ul,
.bs-group-photos ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 0 -2px -4px;
}
.bs-group-admins ul li,
.bs-group-members-grid ul li,
.bs-group-photos ul li {
  margin-bottom: 4px;
  padding: 0 2px;
  width: -webkit-calc(100% * (1/4) );
  width: calc(100% * (1/4) );
}
.bs-group-admins ul a,
.bs-group-members-grid ul a,
.bs-group-photos ul a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  text-align: center;
  font-size: 13px;
  border-radius: 3px;
  overflow: hidden;
  background: rgba(18, 43, 70, 0.05);
  color: #007CFF;
}
.bs-group-admins ul img,
.bs-group-members-grid ul img,
.bs-group-photos ul img {
  width: 100%;
}

.bs-group-photos ul li {
  width: -webkit-calc(100% * (1/3) );
  width: calc(100% * (1/3) );
}

.bs-group-invite .widget-title {
  margin-bottom: 10px;
}
.bs-group-invite p {
  margin-bottom: 12px;
}

.widget .more {
  font-size: 12px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.widget .more i {
  margin-left: -8px;
  font-size: 24px;
}
.widget .more:hover {
  color: #0070e6;
}

.bs-group-members-grid,
.bs-group-photos {
  padding-bottom: 15px;
}
.bs-group-members-grid .more,
.bs-group-photos .more {
  margin-top: 15px;
  text-transform: uppercase;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.bs-group-invite .group-invite-form,
#buddypress .bs-group-invite .group-invite-form {
  margin-bottom: 10px;
}
.bs-group-invite input,
#buddypress .bs-group-invite input {
  font-size: 14px;
  height: 33px;
}
.bs-group-invite input[type="email"],
#buddypress .bs-group-invite input[type="email"] {
  width: -webkit-calc(100% - 72px);
  width: calc(100% - 72px);
  border: 1px solid #DEDFE2;
  border-radius: 3px 0 0 3px;
}
.bs-group-invite input[type="submit"],
#buddypress .bs-group-invite input[type="submit"] {
  min-height: 33px;
  line-height: 33px;
  padding-top: 0;
  padding-bottom: 0;
  background: #D0D4D8;
  border-radius: 0 3px 3px 0;
  border-left: 0;
  color: #fff;
}
.bs-group-invite .button:hover,
#buddypress .bs-group-invite .button:hover {
  background: transparent;
}

/* Members tab */
.group-members-heading {
  padding: 20px;
  border: 1px solid #E7E9EC;
  border-bottom: none;
  border-radius: 4px 4px 0 0;
  background: #fff;
}
.group-members-heading h6 {
  margin: 0;
  text-transform: uppercase;
}

hr.group-members-border {
  height: 1px;
  margin: 0 20px;
  background: #E7E9EC;
}

#buddypress #member-list {
  padding: 10px;
  border: 1px solid #E7E9EC;
  border-top: none;
  border-radius: 0 0 4px 4px;
  background: #fff;
}
#buddypress #member-list li {
  padding: 10px;
  border: none;
}
#buddypress #member-list h5 {
  margin-bottom: 0;
  font-weight: 600;
}
#buddypress #member-list h5 a {
  color: #122B46;
}
#buddypress #member-list .member-options-wrap {
  position: relative;
  cursor: pointer;
}
#buddypress #member-list .member-options-wrap > a {
  color: #A3A5A9;
}
#buddypress #member-list .member-options-wrap > a:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  top: 26px;
  margin: 0 8px 0 0;
  right: 0;
  box-sizing: border-box;
  border: 8px solid black;
  border-color: #fff #fff transparent transparent;
  -webkit-transform-origin: 0 0;
      -ms-transform-origin: 0 0;
          transform-origin: 0 0;
  -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
          transform: rotate(-45deg);
  box-shadow: 2px -3px 3px 0 rgba(0, 0, 0, 0.02);
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
  z-index: 101;
  opacity: 0;
  visibility: hidden;
}
#buddypress #member-list .member-options-wrap .member-options-menu {
  position: absolute;
  right: 0;
  top: 26px;
  margin-right: -10px;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.05), 0 6px 32px 0 rgba(18, 43, 70, 0.1);
  border-radius: 4px;
  z-index: 100;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
}
#buddypress #member-list .member-options-wrap .member-options-menu a {
  display: block;
  padding: 2px 15px;
  margin: 0;
  min-height: 0;
  font-size: 13px;
  line-height: 24px;
  white-space: nowrap;
  border: 0;
  border-radius: 0;
  background: none;
  color: #4D5C6D;
  text-align: left;
}
#buddypress #member-list .member-options-wrap .member-options-menu a:hover {
  color: #007CFF;
  background: #f5f5f5;
}
#buddypress #member-list .member-options-wrap:hover > a {
  color: #122B46;
}
#buddypress #member-list .member-options-wrap:hover > a:after {
  opacity: 1;
  visibility: visible;
}
#buddypress #member-list .member-options-wrap:hover .member-options-menu {
  opacity: 1;
  visibility: visible;
}
#buddypress #member-list .inside {
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  overflow: hidden;
}
#buddypress #member-list .inside > a {
  display: block;
  overflow: hidden;
}
#buddypress #member-list .inside img {
  margin: 0;
}
#buddypress #member-list .member-info {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 20px;
}
#buddypress #member-list .member-location {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 14px;
  color: #939597;
}
#buddypress #member-list .member-location i {
  margin-left: -8px;
  font-size: 20px;
}
#buddypress #member-list .activity {
  position: absolute;
  bottom: 20px;
  left: 20px;
}

.bs-item-list.square-view .bs-item-list-inner {
  padding: 0;
}
.bs-item-list.square-view .bs-item-avatar {
  margin-bottom: 0;
}
.bs-item-list.square-view .bs-item-avatar img.avatar {
  border-radius: 3px 0 0 3px;
  max-width: 150px;
}
.bs-item-list.square-view .bb-member-deails-wrap {
  text-align: left;
  padding: 20px;
}
.bs-item-list.square-view .follow-wrap {
  margin-bottom: 0;
}
.bs-item-list.square-view a.bs-dropdown-link {
  color: #122B46;
  border: 0;
  display: inline-block;
  line-height: 1;
  opacity: 0.4;
  padding: 7px 0;
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
  font-size: 20px;
}

.bb-member-deails-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.bb-member-deails-wrap > div {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
}
.bb-member-deails-wrap > div:last-child {
  margin-top: auto;
}
.bb-member-deails-wrap .item-meta {
  margin-top: -20px;
}

.bp-group-status {
  margin-bottom: 1rem;
}

p.bp-group-meta.bp-group-status,
p.bp-group-meta.bp-group-type {
  -ms-flex-item-align: start;
      align-self: flex-start;
  margin-top: 8px;
  margin-bottom: 10px;
}

.groups-header #item-header-cover-image #item-actions {
  padding: 0;
  text-align: left;
}

.group-description {
  font-size: 14px;
  color: inherit;
  margin: 10px 0 0;
}

.groups-header div#item-actions {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
      flex-flow: column;
}

.group-members #buddypress #item-body .bp-navs.group-subnav,
.groups-header .moderators-lists .moderators-title {
  display: none;
}

.buddypress-wrap.bp-single-vert-nav .group-invites-members-listing {
  padding-bottom: 20px;
}

#group-invites-container .bb-groups-invites-left #members-list {
  max-height: 60vh;
}

.group-invites #buddypress.buddypress-wrap.bp-single-vert-nav #item-body {
  padding-bottom: 0;
}
.group-invites #buddypress.buddypress-wrap.bp-single-vert-nav #item-body #group-invites-container {
  border: 0;
  margin: 0 -20px;
}
.group-invites #buddypress.buddypress-wrap.bp-single-vert-nav #item-body #group-invites-container .bp-navs.group-subnav {
  background: transparent;
  min-height: 1px;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  padding: 0 20px;
  border-radius: 0;
  border: 0;
}
.group-invites #buddypress.buddypress-wrap.bp-single-vert-nav #item-body #group-invites-container .group-invites-column {
  padding: 0;
}
.group-invites #buddypress.buddypress-wrap.bp-single-vert-nav #item-body li.selected {
  background: transparent;
}

.pending-invites #buddypress.buddypress-wrap.bp-single-vert-nav #item-body #group-invites-container .group-invites-column {
  padding: 20px 20px 0;
}
.pending-invites #item-body #group-invites-container .bp-invites-content .list-title {
  margin-bottom: 5px;
}

.group-invites .bp-dir-hori-nav:not(.bp-vertical-navs) #item-body #group-invites-container .bp-navs.group-subnav {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  min-height: 1px;
  border: 0;
  padding: 0 20px;
  border-radius: 4px 4px 0 0;
  background: #fff;
  border-bottom: 1px solid #E7E9EC;
}
.group-invites .bp-dir-hori-nav:not(.bp-vertical-navs) #group-invites-container ul.subnav li {
  float: left;
  margin-right: 30px;
}
.group-invites .bp-dir-hori-nav:not(.bp-vertical-navs) #item-body #group-invites-container .subnav li.selected {
  background: transparent;
  border-bottom: 1px solid #007CFF;
  margin-bottom: -1px;
}
.group-invites .bp-dir-hori-nav:not(.bp-vertical-navs) #item-body #group-invites-container .subnav li.selected a {
  font-weight: 500;
}
.group-invites .bp-dir-hori-nav:not(.bp-vertical-navs) #item-body #group-invites-container .bp-navs.group-subnav a {
  background: transparent;
  margin-bottom: 0;
  padding: 16px 0;
}

@media (max-width: 1050px) {
  .group-invites .bp-single-vert-nav nav#object-nav.vertical {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    border: 0;
    border-bottom: 1px solid #E7E9EC;
    min-height: 1px;
    padding: 10px 0;
  }

  .group-invites .bp-single-vert-nav nav#object-nav.vertical li {
    width: auto;
  }

  .group-invites #buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap nav#object-nav.vertical {
    border-radius: 4px 4px 0 0;
  }

  .group-invites nav#object-nav.vertical a {
    padding: 5px 15px;
  }
}
.groups-header .parent-list .parent-title {
  display: none;
}

.groups.group-admin #buddypress.buddypress-wrap.bp-single-vert-nav #item-body {
  border: 0;
  -ms-flex-flow: column;
      flex-flow: column;
}
.groups.group-admin #buddypress.buddypress-wrap.bp-single-vert-nav #item-body .bp-navs.group-subnav {
  background: transparent;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  min-height: 1px;
  padding: 0;
  border: 0;
}
.groups.group-admin #buddypress.buddypress-wrap.bp-single-vert-nav #item-body .bp-navs.group-subnav a {
  background: transparent;
  line-height: 1.6875rem;
  padding: 0 0 10px;
  margin-bottom: -1px;
}
.groups.group-admin #buddypress.buddypress-wrap.bp-single-vert-nav #item-body .bp-navs.group-subnav .selected a {
  border-bottom: 1px solid #007CFF;
  font-weight: 500;
}
.groups.group-admin #buddypress.buddypress-wrap.bp-single-vert-nav #item-body .bp-navs.group-subnav li {
  float: left;
}
.groups.group-admin #buddypress.buddypress-wrap.bp-single-vert-nav #item-body #group-settings-form {
  padding: 30px 0 0;
}

.bp-learndash-reports-filters-form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.bp-learndash-reports-filters-form > * {
  margin-left: 10px;
  margin-bottom: 10px;
}
.bp-learndash-reports-filters-form button.button {
  font-size: 14px;
  font-weight: 500;
  min-height: 34px;
  min-width: 120px;
  padding: 6px 20px;
}
.bp-learndash-reports-filters-form .bp-learndash-reports-filters select {
  height: 34px;
}

.bp_ld_report_table_wrapper h2 {
  font-weight: 500;
  font-size: 22px;
  line-height: 1.1;
}

.bp_ld_report_table_wrapper .bp_ld_report_table {
  border: 0;
  border-collapse: collapse;
  border-radius: 4px;
  overflow: hidden;
  box-shadow: 0 0 0 1px #E7EAEC;
  width: 100% !important;
}
.bp_ld_report_table_wrapper .bp_ld_report_table thead tr {
  background: #fff;
  border-bottom: 1px solid #E7E9EC;
}
.bp_ld_report_table_wrapper .bp_ld_report_table thead th {
  border-bottom: 0;
  font-size: 13px;
  outline: none;
  font-weight: normal;
  text-transform: uppercase;
  color: #A3A5A9;
}
.bp_ld_report_table_wrapper .bp_ld_report_table th,
.bp_ld_report_table_wrapper .bp_ld_report_table td {
  border: 0;
  font-size: 14px;
  padding: 12px 20px;
}

table.dataTable.no-footer.bp_ld_report_table {
  border-bottom: 0;
}

table.dataTable thead .sorting {
  background: url("../images/svg/sort-arrows.svg") no-repeat center right 15px;
  background-size: 10px;
}
table.dataTable thead .sorting_asc {
  background: url("../images/svg/sort-up.svg") no-repeat center right 15px;
  background-size: 8px;
}
table.dataTable thead .sorting_desc {
  background: url("../images/svg/sort-down.svg") no-repeat center right 15px;
  background-size: 8px;
}

.dataTables_wrapper .dataTables_processing {
  background: rgba(255, 255, 255, 0.78);
  box-shadow: 0 0 0 1px #e7eaec;
  top: 0;
  height: -webkit-calc(97% - 29px);
  height: calc(97% - 29px);
  min-height: 48px;
  margin: 0 auto;
  left: 0;
  padding: 15px 0 0 0;
  border-radius: 4px;
  font-size: 0;
}
.dataTables_wrapper .dataTables_processing:after {
  content: '\e838';
  -webkit-animation: spin 2s infinite linear;
          animation: spin 2s infinite linear;
  font: normal normal normal 20px/1 "bb-icons";
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.ld-report-course-name {
  font-weight: 500;
  font-size: 22px;
  line-height: 1.1;
}
.ld-report-course-name a {
  color: inherit;
}

a.button.ld-report-export-csv.has-data {
  min-width: 140px;
}

.ld-report-course-stats,
.ld-report-user-stats {
  color: #939597;
  margin-bottom: 35px;
  border-radius: 5px;
}
.ld-report-course-stats b,
.ld-report-user-stats b {
  color: #4D5C6D;
}

.user-steps {
  color: #939597;
}
.user-steps b {
  color: #4D5C6D;
}

.ld-report-user-stats .user-message {
  margin-left: auto;
}
.ld-report-user-stats a.send-message {
  min-width: 120px;
}
.ld-report-user-stats .item-meta {
  font-size: 13px;
}
.ld-report-user-stats .user-info {
  min-width: 25%;
}
#buddypress .ld-report-user-stats .generic-button .send-message {
  font-size: 14px;
  font-weight: 500;
  min-height: 34px;
  padding: 6px 20px;
}

.item-header-wrap .bp-group-meta {
  margin: 0;
}
.item-header-wrap .bp-group-meta span {
  background-color: #EEF0F3;
  border-radius: 100px;
  display: inline-block;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.25px;
  color: rgba(77, 92, 109, 0.8);
  padding: 6px 12px;
  line-height: 1;
  margin: 0 6px 0 0;
  white-space: nowrap;
}
.item-header-wrap .bp-group-meta .group-type {
  background: #D94C61;
  color: #fff;
}
.item-header-wrap .bp-group-meta .type-separator {
  display: none;
}
.buddypress-wrap .item-header-wrap .bp-title {
  font-size: 13px;
  font-weight: 500;
  color: #A3A5A9;
  margin: 0 0 5px;
}
.item-header-wrap #item-actions.group-item-actions {
  margin-bottom: 0;
}
.item-header-wrap span.group-visibility:before {
  font: normal normal normal 12px/1 "bb-icons";
  speak: none;
  display: inline-block;
  margin-right: 5px;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.item-header-wrap span.group-visibility.public:before {
  content: '\e8e4';
  color: #0dd081;
}
.item-header-wrap span.group-visibility.private:before {
  content: '\e90d';
  color: #D94C61;
}
.item-header-wrap span.group-visibility.hidden:before {
  content: '\e850';
  color: #f7ba45;
  -webkit-transform: scale(1.4);
      -ms-transform: scale(1.4);
          transform: scale(1.4);
}

#buddypress div#item-header-cover-image .bb-bp-group-title {
  margin: 0 10px 6px 0;
}

#buddypress #item-header .bp-group-parent-wrap .parent-list {
  margin: 0;
  padding: 0;
}
#buddypress #item-header .bp-group-parent-wrap .parent-list .avatar {
  max-width: 26px;
  height: auto;
}
#buddypress #item-header .bp-group-parent-wrap .group-list {
  margin: 0 10px 0 0;
}
#buddypress #item-header .bp-group-parent-wrap .group-list li {
  margin: 0;
}
#buddypress #item-header .bp-group-parent-wrap .bp-parent-group-title-wrap {
  margin: 0;
}

.bp-group-parent-wrap {
  margin-bottom: 10px;
}

#buddypress .bp-group-status .group-type,
#buddypress .bp-group-type .group-visibility {
  display: none;
}

.bp-parent-group-title {
  color: #4D5C6D;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: -0.2px;
}

.bp-current-group-title {
  font-size: 14px;
  letter-spacing: -0.2px;
  color: #939597;
}

#admins-list .action {
  margin-left: auto;
  margin-bottom: 0;
}
#admins-list .action .button {
  min-height: 30px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0;
  padding: 0 20px;
  line-height: 30px;
}

#group-settings-form #admins-list li:last-child,
#group-settings-form #members-list li:last-child {
  border-bottom: 1px solid #E7E9EC;
}

ul#group-admins li {
  margin: 0 -10px 0 0;
}
ul#group-admins li a {
  display: inline-block;
}
ul#group-admins li .avatar {
  border: 2px solid #fff;
}

@media (max-width: 800px) {
  ul#group-admins {
    margin-left: -10px;
  }
}
.groups-header .moderators-lists {
  margin: 0;
}

.groups-header #item-header-cover-image #item-actions,
.groups-header #item-header-cover-image #item-header-content {
  padding-bottom: 0;
}

.groups-header #item-header-content .generic-button .group-button {
  background: transparent;
  color: #007CFF;
  box-shadow: none;
}
.groups-header #item-header-content .generic-button .group-button:hover, .groups-header #item-header-content .generic-button .group-button:focus {
  background: none;
  color: #0070e6;
  border-color: #0070e6;
}
.groups-header #item-header-content .generic-button .group-button:active {
  background: none;
  color: #3d9bff;
  border-color: #3d9bff;
}

#buddypress .action .button.appbosscm-report-button {
  min-height: 1px;
  margin: 0;
}

#buddypress .groups-header.single-headers .action .button {
  margin-left: 12px;
  margin-right: 0;
}

#buddypress .bp-list.grid .button.appbosscm-report-button {
  min-width: 1px;
  width: auto;
}

form.appbosscm-feedback-form {
  margin: 0 0 1rem;
}
form.appbosscm-feedback-form label {
  font-size: 14px;
}

.appbosscm-feedback-form-field-wrap {
  margin-bottom: 1rem;
}

.appbosscm-feedback-form-wrapper input.appbosscm-feedback-form-submit-button {
  min-width: 120px;
  font-weight: 500;
  font-size: 14px;
  min-height: 1px;
  padding: 8px 20px;
  height: auto;
}

#buddypress .users-header.single-headers .action .button.appbosscm-report-button {
  min-width: 1px;
}

.groups-header .moderators-lists .user-list {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

#buddypress .groups-header.single-headers .action .generic-button:first-child .button {
  margin-left: 0;
}

.groups-meta.action:after {
  content: '';
  display: table;
  clear: both;
}

.buddypress-wrap:not(.bp-single-vert-nav) .bp-manage-group-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  margin-bottom: 30px;
}

/* Manage Group */
.groups.group-admin #buddypress #item-body .bp-navs.group-subnav {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 220px;
          flex: 0 0 220px;
  background: #FBFBFC;
  border-right: 1px solid #E7E9EC;
  border-bottom: 0;
  min-height: 60vh;
  border-radius: 4px 0 0 4px;
  margin: 0;
  padding: 30px 0;
}
.groups.group-admin #buddypress #item-body .bp-navs.group-subnav a {
  border: 0;
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.24px;
  display: block;
  padding: 13px 20px;
  line-height: 1;
  margin-bottom: 1px;
}
.groups.group-admin #buddypress #item-body .bp-navs.group-subnav a:hover {
  background: rgba(77, 92, 109, 0.1);
}
.groups.group-admin #buddypress #item-body .bp-navs.group-subnav .current a,
.groups.group-admin #buddypress #item-body .bp-navs.group-subnav .selected a {
  background: rgba(77, 92, 109, 0.1);
  color: #007CFF;
  font-weight: 400;
  text-decoration: none;
}
.groups.group-admin #buddypress #item-body #group-settings-form {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 40px 50px;
}
.groups.group-admin #buddypress #item-body #group-settings-form label {
  display: block;
  font-size: 15px;
  font-weight: 400;
  color: #4D5C6D;
  letter-spacing: -0.27px;
  line-height: 1.187;
  margin-bottom: 12px;
  margin-top: 0;
}
.groups.group-admin #buddypress #item-body #group-settings-form #delete-group-understand + label:before {
  margin-right: 12px;
}
.groups.group-admin #buddypress #item-body #group-settings-form input[type=text], .groups.group-admin #buddypress #item-body #group-settings-form textarea {
  margin-bottom: 30px;
}
.groups.group-admin #buddypress #item-body #group-settings-form textarea {
  height: auto;
  min-height: 100px;
  line-height: 1.35;
  padding: 10px 12px;
}
.groups.group-admin #buddypress #item-body #group-settings-form .bp-controls-wrap {
  margin: 0 0 30px;
}
.groups.group-admin #buddypress #item-body #group-settings-form .group-settings-selections fieldset label {
  font-weight: 600;
}
.groups.group-admin #buddypress #item-body #group-settings-form .group-parent #bp-groups-parent {
  margin-bottom: 1em;
}
.groups.group-admin #buddypress #item-body .group-settings-selections fieldset {
  border: 0;
  padding: 0;
  margin: 0 0 20px;
}
.groups.group-admin #buddypress #item-body .group-settings-selections legend {
  color: #122B46;
  font-size: 18px;
  font-weight: 500;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 15px;
  width: 100%;
  margin-bottom: 25px;
}
.groups.group-admin #buddypress #item-body .group-settings-selections ul {
  font-size: 13px;
  margin: 0 0 30px 53px;
  line-height: 1.6;
}
.groups.group-admin #buddypress #item-body label.bp-label-text.warn {
  margin-top: 40px;
}
.groups.group-admin #buddypress #drag-drop-area {
  background: rgba(240, 243, 247, 0.5);
  border: 1px dashed #DEDFE2;
  border-radius: 6px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 16px;
  letter-spacing: -0.24px;
  line-height: 26px;
}

.groups .bp-single-vert-nav #item-body #subnav .subnav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin: 0 -20px;
  padding: 0 20px;
  border-bottom: 1px solid #e7e9ec;
}
.groups .bp-single-vert-nav #item-body #subnav .subnav li:not(:last-child) {
  padding-right: 30px;
}
.groups .bp-single-vert-nav #item-body #subnav .subnav .current a {
  border-color: #007CFF;
  font-weight: 500;
}
.groups .bp-single-vert-nav #item-body #subnav .subnav a {
  background: transparent;
  border-bottom: 1px solid transparent;
  display: block;
  padding: 0 0 16px;
  line-height: 1;
  margin-bottom: -1px;
}

.groups .bp-single-vert-nav .bb-media-container.group-media,
.groups .bp-single-vert-nav .bb-media-container.group-albums {
  border: 0;
  padding: 0;
}
.groups .bb-single-course-sidebar {
  margin: 0 !important;
}
.groups .bb-single-course-sidebar .widget {
  box-shadow: none;
  border: 1px solid #E7E9EC;
}
.groups .bb-learndash-content-wrap {
  padding-top: 0;
}
.groups .bb-grid .bb-learndash-content-wrap {
  padding-right: 10px;
}
.groups h3.bbp-topic-title {
  display: none;
}
.groups #bbpress-forums {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
      flex-flow: column;
}
.groups #bbpress-forums .bp-group-single-forums {
  -webkit-box-ordinal-group: 6;
      -ms-flex-order: 5;
          order: 5;
}
.groups .bb-learndash-content-wrap .entry-title {
  font-weight: 500;
  margin-top: 10px;
}
.groups .bb-learndash-content-wrap .bb-course-excerpt {
  margin-bottom: 30px;
}
.groups .bb-learndash-content-wrap .ld-progress-stats {
  color: inherit !important;
}
.groups .bb-learndash-content-wrap .bb-about-instructor h5 {
  margin: 0 0 5px;
}
.groups .learndash-wrapper .ld-course-status .ld-status {
  font-weight: 500;
}

#bbpress-forums.single-with-sub-forum {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
      flex-flow: column;
}
#bbpress-forums.single-with-sub-forum .bp-group-single-forums {
  -webkit-box-ordinal-group: 6;
      -ms-flex-order: 5;
          order: 5;
}

#bbpress-forums .bp-group-single-forums hr {
  height: 1px;
  margin: 0 0 35px;
}

#group-messages-container {
  min-height: 100%;
}

#group-settings-form #request-list {
  margin: 0;
  padding: 0;
}
#group-settings-form #request-list li {
  margin: 0;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
#group-settings-form #request-list .action {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
#group-settings-form #request-list .item-title {
  text-align: left;
}
#group-settings-form #request-list img.avatar {
  max-width: 50px;
}
#group-settings-form #request-list .item {
  -ms-flex-flow: column;
      flex-flow: column;
}
#group-settings-form #request-list .item-title h3 {
  margin: 0 0 5px;
}

@media (min-width: 1181px) {
  .logged-in .item-header-wrap .bp-group-title-wrap,
  .logged-in .item-header-wrap .group-description {
    max-width: 70%;
  }
  .logged-in .item-header-wrap .groups-meta.action {
    position: absolute;
    top: 20px;
    right: 0;
    max-width: 25%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }
  .logged-in .item-header-wrap .groups-meta.action > .generic-button {
    margin-bottom: 10px !important;
  }
}
@media (max-width: 1080px) {
  .groups-header .groups-meta {
    margin: 12px 0 4px;
  }

  #buddypress .groups-header.single-headers .groups-meta.action .button {
    margin-left: 0;
  }
}
@media (max-width: 960px) {
  .dataTables_wrapper {
    overflow: auto;
  }
}
@media (min-width: 992px) and (max-width: 1200px) {
  #buddypress #member-list .inside img {
    width: 90px;
  }

  #buddypress #member-list .activity {
    position: static;
  }
}
@media (max-width: 799px) {
  .bb-single-bp-content .flex.bs-item-list-tabs {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  #buddypress .bb-single-bp-content.bb-friends-wrap .bs-dir-search {
    margin-top: -45px;
    float: right;
  }

  .bb-single-bp-content .bs-item-list-tabs ul {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    clear: both;
  }

  #buddypress div#item-header-cover-image .bb-bp-group-title {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin: 0 0 12px;
  }

  div#item-header-content .group-description {
    margin-top: 20px;
  }

  .groups-header .groups-meta {
    margin: 4px 0;
  }
}
@media (min-width: 749px) {
  .bp-single-vert-nav #group-messages-container {
    background: transparent;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
  }

  .groups.messages .bp-single-vert-nav .groups-header.single-headers {
    margin-bottom: 20px;
  }
}
@media (max-width: 748px) {
  .group-invites #buddypress.buddypress-wrap.bp-single-vert-nav #item-body #group-invites-container .bp-navs.group-subnav {
    padding-top: 15px;
  }

  .group-invites #buddypress.buddypress-wrap.bp-single-vert-nav #item-body #group-invites-container {
    margin: 0 -10px;
  }

  .group-invites nav#object-nav.vertical a {
    padding: 5px 0;
  }

  .group-invites .bp-single-vert-nav nav#object-nav.vertical {
    border-bottom: 0;
  }

  .group-invites .buddypress-wrap.bp-vertical-navs .bb-profile-grid {
    border: 1px solid #E7E9EC;
    border-radius: 4px;
  }
}
@media (max-width: 520px) {
  .bs-item-list.square-view .bs-item-avatar img.avatar {
    max-width: 100px;
  }

  .bb-member-deails-wrap .item-meta {
    margin-top: -8px;
  }

  .bb-single-bp-header .bs-dir-search {
    width: 100%;
  }

  #buddypress .bb-single-bp-content.bb-friends-wrap .bs-dir-search {
    margin-top: 0;
    margin-bottom: 20px;
  }

  .bs-item-list.square-view .bb-member-deails-wrap {
    padding: 8px 15px;
  }

  .tab-container-inner .list-view .avatar:not(.profile-avatar) {
    max-width: 36px;
  }
  .tab-container-inner .bb-group-settings .item-title a {
    font-size: 16px;
  }
  .tab-container-inner .action .button {
    width: 100%;
  }
}
@media (max-width: 380px) {
  #buddypress .bb-single-bp-content.bb-friends-wrap .bs-dir-search {
    margin-top: 0;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 20px;
  }
}
.messages-wrapper {
  background: #FFF;
  border: 1px solid #E7E9EC;
  border-radius: 5px;
  min-height: 50vh;
}
.messages-wrapper #subnav .subnav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
  min-height: 65px;
}
.messages-wrapper #subnav li {
  margin: 0;
  padding: 0;
}
.messages-wrapper #subnav #compose-personal-li {
  margin-right: 0;
}
.messages-wrapper #subnav a {
  border: 0;
  font-weight: 400;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: .875rem;
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
}
.messages-wrapper #inbox-personal-li a {
  color: #122B46;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: -0.24px;
  line-height: 1;
  padding: 0;
}
.messages-wrapper #inbox-personal-li a:hover {
  color: #007CFF;
}
.messages-wrapper #compose-personal-li a {
  color: #007CFF;
  font-size: 0;
  padding: 0;
}
.messages-wrapper #compose-personal-li a:after {
  content: '\E80C';
  font-family: "bb-icons";
  font-size: 22px;
  line-height: 20px;
  text-align: center;
}
.messages-wrapper #user_messages_search {
  height: 32px;
  background-size: 14px;
  background-position: left 12px center;
  background-color: #FBFBFC;
}

.bp-messages-nav-panel .user-messages-search,
.bp-messages-nav-panel .messages-search {
  width: 100%;
}
.bp-messages-nav-panel #subnav {
  padding: 0 20px;
  margin: 0;
}
@media (max-width: 800px) {
  .bp-messages-nav-panel #subnav {
    border-bottom: 1px solid #E7E9EC;
  }
}

.buddypress-wrap .bb-profile-grid .bp-messages-nav-panel .subnav-filters {
  margin: 15px 20px;
}

.bp-messages-feedback:empty {
  display: none;
}

/* Messages tab */
#buddypress div.message-search {
  margin-right: 0;
  margin-left: 10px;
}
#buddypress div.message-search input[type="text"] {
  height: 34px;
  font-size: 13px;
  padding: 0 12px;
  border-radius: 17px;
  background-size: 16px;
  background-repeat: no-repeat;
  background-position: 14px 53%;
  background-image: url("../images/svg/search.svg");
  padding-left: 2.375rem;
}

.messages-screen .bp-messages-feedback .bp-feedback {
  margin: 30px;
}

@-webkit-keyframes autofill {
  to {
    background-color: transparent;
    background-image: url("../images/svg/search.svg");
  }
}
#buddypress div.message-search input#messages_search:-webkit-autofill {
  -webkit-animation-name: autofill;
  -webkit-animation-fill-mode: both;
}

#message-thread {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  min-width: 0;
  position: relative;
  padding: 30px 30px 0;
  border-left: 1px solid #E7E9EC;
  max-height: 78vh;
  min-height: 78vh;
  overflow-x: hidden;
  overflow-y: auto;
}

div#buddypress #message-thread .confirm {
  position: absolute;
  top: 20px;
  right: 20px;
}
div#buddypress #message-thread div.alt {
  background: rgba(247, 250, 254, 0.5);
}

.message-metadata {
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
.message-metadata img {
  float: none;
  max-width: 40px;
  border-radius: 50%;
  margin-right: 15px;
}
.message-metadata .meta-user-info a {
  display: block;
  font-weight: 500;
  font-size: 14px;
  line-height: 19px;
  color: #122B46;
  margin-bottom: 2px;
}
.message-metadata .meta-user-info a:hover {
  color: #007CFF;
}
.message-metadata .meta-user-info span {
  display: block;
  font-size: 12px;
  line-height: 14px;
  color: #A3A5A9;
}

.thread-load {
  display: block;
  text-align: center;
}

#bb-message-subject {
  margin-bottom: 5px;
  font-family: inherit;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: -0.27px;
  line-height: 1.1875;
}

#buddypress #message-thread #message-recipients {
  letter-spacing: -0.24px;
  margin: 0;
}
#buddypress #message-thread #message-recipients .highlight {
  font-size: 14px;
  font-weight: 300;
  color: #939597;
  background-color: transparent;
}
#buddypress #message-thread #message-recipients .highlight a {
  color: #122B46;
}
#buddypress #message-thread #message-recipients .highlight a:hover {
  color: #007CFF;
}

#message-thread {
  margin: 0;
  font-size: 14px;
  color: #4D5C6D;
  line-height: 1.5;
  letter-spacing: -0.24px;
}
#message-thread h1, #message-thread .h1, #message-thread h2, #message-thread .h2, #message-thread h3, #message-thread .h3, #message-thread h4, #message-thread .h4, #message-thread h5, #message-thread .h5, #message-thread h6, #message-thread .h6, #message-thread p, #message-thread address, #message-thread hr {
  margin-bottom: 1rem;
}

a.bb-cover-link {
  display: block;
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
  font-size: 0;
  height: 100%;
}

.thread-to a,
.thread-subject,
.thread-excerpt {
  max-width: 100%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.thread-subject .emoji {
  max-width: 14px;
  vertical-align: middle;
  line-height: 1;
  margin-top: 0;
  margin-bottom: 0;
  height: auto !important;
}

.reply-box {
  padding: 30px;
}
.reply-box .reply-box-header {
  margin-bottom: 16px;
}
.reply-box .avatar {
  width: 40px;
  margin-right: 10px;
}
.reply-box .reply-user-info p {
  margin-bottom: 0;
  line-height: 20px;
}
.reply-box .reply-user-info p:first-child {
  font-size: 14px;
  font-weight: 500;
  color: #4D5C6D;
}
.reply-box .reply-user-info p:last-child {
  font-size: 12px;
  color: #A3A5A9;
}
.reply-box textarea {
  display: block;
  width: 100%;
  height: 100px;
  margin-bottom: 16px;
  padding: 0 0 0 50px;
  border: none;
  font-size: 16px;
  resize: vertical;
}

#buddypress .reply-box input[type="submit"].small {
  font-size: 14px;
  min-height: 34px;
  padding: 6px 20px;
  border-radius: 100px;
  line-height: 1.4;
}
#buddypress .reply-box input[type="submit"].small:hover {
  outline: none;
  text-decoration: none;
  color: #fff;
  background-color: #0070e6;
  border-color: transparent;
}

#send_message_form {
  padding: 20px;
  margin: 0;
  position: relative;
  color: #4D5C6D;
  min-height: -webkit-calc(69vh + 128px);
  min-height: calc(69vh + 128px);
  max-height: -webkit-calc(69vh + 128px);
  max-height: calc(69vh + 128px);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
      flex-flow: column;
}
#send_message_form .bp-messages-form-header {
  border-bottom: 1px solid #E7E9EC;
  margin: 0 -20px 20px;
  padding: 0 20px 18px;
}
#send_message_form label[for=send-to-input] {
  margin: 0;
}
#send_message_form .select2-selection--multiple {
  border-color: transparent;
  padding: 0;
}
#send_message_form .select2-selection__rendered li {
  margin: 0;
}
#send_message_form li.select2-selection__choice {
  margin-right: 10px;
}
#send_message_form #bp-message-content {
  margin: auto -20px 0;
  padding: 20px 20px 0;
}
#buddypress #send_message_form .select2-search__field {
  background: transparent;
  border-width: 0;
  min-width: 100%;
  width: 100% !important;
  padding-left: 0;
}
#send_message_form .dropzone .dz-default {
  margin: 0 0 20px;
}
#send_message_form .select2-container--default .select2-selection--multiple .select2-selection__choice {
  background-color: #4D5C6D;
  border-color: #4D5C6D;
  font-size: 14px;
  color: #FFF;
  letter-spacing: -0.24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row-reverse;
      flex-flow: row-reverse;
  padding: 0 8px;
}
#send_message_form .select2-selection__choice__remove {
  font-size: 0;
  line-height: 1;
  margin: 0 0 0 8px;
}
#send_message_form .select2-selection__choice__remove:before {
  content: '\E828';
  font-family: "bb-icons";
  font-size: 13px;
  line-height: 1;
  background: #fff;
  border-radius: 50%;
  color: #4D5C6D;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-width: 13px;
  min-height: 13px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body .select2-container .select2-dropdown {
  background: #fff;
  box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.05), 0 6px 32px 0 rgba(18, 43, 70, 0.1);
  border-radius: 4px;
  border: 0;
  padding: 5px 10px;
  margin-right: 0;
  max-width: 300px;
}
body .select2-container .select2-dropdown .select2-results__option {
  border-radius: 3px;
  margin-bottom: 0;
  font-size: 14px;
  padding: 2px 5px;
}

.thread.bb-new-message {
  background: rgba(0, 124, 255, 0.1);
}

.messages .ac_results {
  background: #fff;
  box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.05), 0 6px 32px 0 rgba(18, 43, 70, 0.1);
  border-radius: 4px;
  border: none;
  min-width: 200px;
  font-size: 13px;
  max-width: 200px;
  padding: 5px 0;
  margin-left: -12px;
  margin-top: 4px;
  overflow: visible;
}
.messages .ac_results:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  top: 1px;
  margin: 0 auto;
  left: 15px;
  box-sizing: border-box;
  border: 6px solid black;
  border-color: #fff #fff transparent transparent;
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
      transform-origin: 0 0;
  -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
          transform: rotate(-45deg);
  box-shadow: 2px -3px 3px 0 rgba(0, 0, 0, 0.02);
  -webkit-transition: all linear 0.2s;
          transition: all linear 0.2s;
  z-index: 101;
}
.messages .ac_results li {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.messages .ac_results .ac_odd {
  background: #fff;
}
.messages .ac_results .ac_over {
  color: #007CFF;
  background: #f5f5f5;
}
.messages .ac_results img {
  margin-right: 0;
  width: auto !important;
  max-width: 25px;
  border-radius: 50%;
}

#buddypress div#message-thread .bb-send-reply-title {
  font-size: 13px;
  font-weight: 500;
  color: #4D5C6D;
}

#sitewide-notice {
  position: fixed;
  z-index: 9999;
  top: 2%;
  right: 1%;
}

@media (max-width: 600px) {
  #send_message_form {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .bb-messages-wrap {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .thread.bb-new-message {
    display: none;
  }

  .bb-messages-wrap,
  #message-thread {
    overflow: initial;
    min-height: 100%;
    max-height: 100%;
  }

  .bb-mobile-view .bb-messages-wrap {
    display: none;
  }

  #message-thread {
    padding: 30px 20px;
  }

  .metadata-right {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding-left: 50px;
  }

  .message-metadata .message-star-actions {
    margin-left: auto;
  }
}
@media (max-width: 520px) {
  #buddypress .bb-message-heading .message-search {
    margin: 10px auto;
    width: 100%;
  }

  .bb-message-heading .message-search #messages_search {
    width: 100%;
  }
}
.buddypress-wrap .subnav-filters .user-messages-bulk-actions label {
  padding: 0;
  margin: 0;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 500;
  text-transform: uppercase;
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .select-wrap:focus,
.buddypress-wrap .subnav-filters .user-messages-bulk-actions .select-wrap:hover {
  box-shadow: none;
  outline: 0;
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-apply {
  padding: 0;
  margin: 0;
  min-height: 10px;
  line-height: 1;
}

.user-messages-bulk-actions .bulk-actions.select-wrap {
  margin-left: 10px;
  margin-right: 10px;
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions div select {
  border: 1px solid #eee;
  -webkit-appearance: none;
  background-image: url(../images/svg/arrow-down.svg);
  background-repeat: no-repeat;
  background-position: right 10px center;
  font-size: 14px;
  height: 26px;
  padding: 0 25px 0 8px;
}

#bp-message-thread-list {
  max-height: inherit;
}

.buddypress-wrap .subnav-filters.bp-messages-filters .messages-search {
  margin-bottom: 0;
  margin-top: 0;
}

.buddypress-wrap .subnav-filters.bp-messages-filters ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.bp-messages-content {
  margin: 0;
}

.bp-messages-content-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
      flex-flow: column;
  padding: 0 20px;
  height: -webkit-calc(69vh + 130px);
  height: calc(69vh + 130px);
}
.bp-messages-content-wrapper #messages-post-media-uploader.open {
  height: -webkit-calc(100% - 145px);
  height: calc(100% - 145px);
  left: 0;
  margin: 0;
}

#message-threads {
  border: 0;
}
#message-threads li {
  margin-bottom: 1px;
}
#message-threads li .close-conversation {
  right: 26px;
}
#message-threads li .close-conversation .dashicons-no-alt {
  font-family: "bb-icons";
}
#message-threads li .close-conversation .dashicons-no-alt:before {
  content: '\e828';
  font-size: 22px;
}
#message-threads li .close-conversation .dashicons-no-alt:hover {
  color: #122B46;
}
#message-threads .bb-user-avatar {
  margin-right: 15px;
}
#message-threads .bb-user-avatar .avatar {
  max-width: 40px;
}

.bb-thread-subject {
  line-height: 1.3;
  margin-bottom: 10px;
}

nav#subnav #subnav {
  margin-bottom: 0;
}

.bb-thread-cb {
  margin-top: 10px;
}

#message-threads .bp-message-link {
  border-bottom: 0;
  padding: 10px 28px 10px 20px;
  min-width: 0;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
#message-threads .bp-message-link:last-child {
  border-bottom: 0;
}
#message-threads .bp-message-link.unread {
  background-color: inherit;
}
#message-threads .bp-message-link.unread .thread-to {
  position: relative;
}
#message-threads .bp-message-link.unread .thread-to:before {
  content: '\25CF';
  font-size: 14px;
  color: #007CFF;
  position: absolute;
  left: -14px;
  top: 0;
}
#message-threads .bp-message-link:hover {
  background: #F5F6F7;
}
#message-threads .bp-message-link:hover .thread-to {
  color: #007CFF;
}

#message-threads li.selected {
  background-color: #F7FAFE;
}

#message-threads .bp-message-link .thread-cb {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 35px;
          flex: 0 0 35px;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

#message-threads .bb-thread-info {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  min-width: 0;
}

.bb-thread-title {
  font-size: 15px;
}
.bb-thread-title .bb-user-link {
  font-weight: 500;
  color: inherit;
}

.bb-thread-header {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  line-height: 1;
  margin-bottom: 3px;
}

#message-threads .bp-message-link .thread-date {
  padding: 0 0 0 10px;
  line-height: 1;
  font-size: 11px;
  color: #939597;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  letter-spacing: -0.19px;
  min-width: 0;
}

.bp-messages-content time {
  font-size: 12px;
  letter-spacing: -0.24px;
  line-height: 1.3;
  font-size: 12px;
  font-weight: 300;
  color: #A3A5A9;
}

.user-messages-bulk-actions .bs-styled-checkbox + label:before {
  margin-right: 15px;
}

#buddypress .mce-toolbar .mce-btn button, #buddypress .mce-toolbar .mce-btn button:hover, #buddypress .mce-toolbar .mce-btn button:focus {
  background: transparent;
  border: 0;
  box-shadow: none;
  padding: 0;
  margin: 0;
  color: inherit;
  min-height: 16px;
  padding-bottom: 2px;
}

#message-threads li .thread-content .excerpt {
  margin: 0 0 3px;
  font-size: 14px;
  color: #7F868F;
  line-height: 1.2;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.bp-messages-content #bp-message-thread-header h2:first-child {
  background-color: transparent;
  color: #122B46;
  padding: 0;
  margin-bottom: 12px;
  font-family: inherit;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: -0.27px;
  line-height: 1.25;
}

.bp-messages-content .preview-thread-title .messages-title,
.bp-messages-content .single-thread-title .messages-title {
  padding-left: 0;
}

ul.participants-list {
  list-style: none;
  margin: 0;
}

.preview-content .actions {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.bp-messages-content .thread-participants dd,
.bp-messages-content .thread-participants ul {
  margin-bottom: 0;
}

dl.thread-participants {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  padding: 10px 20px 10px 0;
}
dl.thread-participants + .actions {
  position: absolute;
  right: 20px;
}

.bp-messages-content .thread-participants img {
  width: 100%;
  max-width: 30px;
  border-radius: 50%;
}

.bp-messages-content .preview-pane-header,
.bp-messages-content .single-message-thread-header {
  margin-bottom: 0;
}

.bp-messages-content .thread-participants {
  margin: 0;
  width: auto;
  font-size: 16px;
  color: #122B46;
  letter-spacing: -0.27px;
}
.bp-messages-content .thread-participants .participants-name a {
  color: #122B46;
}
.bp-messages-content .thread-participants .participants-name a:hover {
  color: #007CFF;
}
.bp-messages-content .thread-participants dt {
  padding-right: 10px;
}
.bp-messages-content .thread-participants dt, .bp-messages-content .thread-participants dd {
  display: block;
  width: 100%;
  line-height: 1.2em;
}

.bp-messages-content .participants-list a {
  display: inline-block;
  margin-right: 3px;
}

div#subsubnav:empty {
  display: none;
}

dl.thread-participants {
  font-size: 14px;
  line-height: 1.5;
  letter-spacing: -0.24px;
}

body.compose .bp-messages-content {
  border: 0;
}
body.compose #compose-personal-li #compose {
  color: #939597;
}

.mce-btn button:hover,
.mce-window-head .mce-close:hover {
  background: transparent;
  box-shadow: none;
}

.message-action-delete.bp-tooltip.bp-icons {
  background: transparent;
  border: 0;
  color: inherit;
}
.message-action-delete.bp-tooltip.bp-icons:hover, .message-action-delete.bp-tooltip.bp-icons:focus {
  background: transparent;
  box-shadow: none;
  border: 0;
}

.bp-hide {
  display: none !important;
}

.bp-messages-content .thread-participants li {
  float: left;
  margin: 5px 2px;
}

.bp-messages-content .single-message-thread-header {
  border-bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: 65px;
}
.bp-messages-content .single-message-thread-header .actions .message_actions .message_action__list {
  min-width: 200px;
}
.bp-messages-content .single-message-thread-header .message_actions .message_action__list li a {
  padding: 10px 12px;
}
.bp-messages-content .single-message-thread-header .message_actions .message_action__list li a:hover {
  background-color: #F5F5F5;
  color: #007CFF;
}
.bp-messages-content .single-message-thread-header .message_actions .message_action__list li a:before {
  font-family: bb-icons;
  font-size: 15px;
  display: inline-block;
  margin-right: 10px;
  width: 20px;
  text-align: center;
}
.bp-messages-content .single-message-thread-header .message_actions .message_action__list li.unread a:before {
  content: '\e8ae';
}
.bp-messages-content .single-message-thread-header .message_actions .message_action__list li.hide_thread a:before {
  content: '\e8f7';
}
.bp-messages-content .single-message-thread-header .message_actions .message_action__list li.delete_messages a:before {
  content: '\e938';
}
.bp-messages-content .single-message-thread-header .message_actions .message_action__list li.delete_thread a:before {
  content: '\e937';
}

.single.messages.view .bp-messages-filters,
.single.messages.view .bp-messages-threads-list {
  display: block;
}

.bp-messages-content:empty {
  display: none;
}

.bp-messages-content,
.bp-messages-threads-list {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  min-width: 0;
  padding: 0;
}

#message-threads .bp-message-link .thread-avatar {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 45px;
          flex: 0 0 45px;
  margin-right: 15px;
}

#message-threads .bp-message-link .thread-avatar img.avatar {
  margin: 0;
}

.thread-to {
  font-size: 14px;
  color: #122B46;
  margin-bottom: 5px;
  opacity: 0.85;
  text-transform: capitalize;
}
.unread .thread-to {
  font-weight: 500;
  opacity: 1;
}

.unread .thread-subject {
  font-weight: 500;
}
.unread .thread-date time {
  position: relative;
}
.unread .thread-date time:after {
  content: '';
  height: 8px;
  width: 8px;
  border-radius: 100%;
  background-color: #0f74e0;
  display: inline-block;
  position: absolute;
  right: -17px;
}

.buddypress-wrap .bp-messages.bp-user-messages-feedback {
  border: 0;
  border-radius: 0;
}

.messages.compose #message-threads .bp-message-link .thread-date,
.messages.view #message-threads .bp-message-link .thread-date {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  padding: 7px 0 0 10px;
  margin-bottom: auto;
}

#bp-messages-next-page,
#bp-messages-prev-page {
  padding: 0 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  line-height: 34px;
  height: 34px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-left: 15px;
}

#message-threads .bp-message-link .thread-content .thread-subject {
  color: #939597;
  font-size: 12px;
  letter-spacing: -0.21px;
  line-height: 1.5;
}

#message-threads li.unread .thread-subject .subject {
  color: #939597;
}

.bp-avatar-wrap {
  margin-right: 18px;
  max-width: 38px;
}

.bp-messages-content #bp-message-thread-list {
  background: transparent;
  border: 0;
  border-top: 1px solid #E7E9EC;
  margin: 0 -20px;
  padding: 10px 20px;
  -webkit-box-flex: 1;
      -ms-flex: auto;
          flex: auto;
  height: auto;
}
.bp-messages-content #bp-message-thread-list li {
  margin: 0 -20px;
  border-radius: 0;
  padding: 10px 20px;
  border: 0;
  box-shadow: none;
  width: auto;
}
.bp-messages-content #bp-message-thread-list .message-metadata .user-link strong:after {
  display: none;
}

.bp-messages-content form.send-reply .avatar-box {
  padding: 0;
}

#message-threads .bp-message-link .thread-content {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  line-height: 1;
  min-width: 0;
}

.bp-messages-content .thread-participants .thread-date {
  color: #A3A5A9;
  font-size: 13px;
  font-weight: normal;
}

#bp-message-load-more:empty {
  display: none;
}

#buddypress .message-action-delete,
#buddypress .message_action__anchor {
  background: transparent;
  border: 0;
  color: inherit;
  font-size: 10px;
  padding: 0;
  line-height: 1;
  min-height: 1px;
  height: auto;
  width: 100%;
}
#buddypress .message-action-delete:hover, #buddypress .message-action-delete:focus,
#buddypress .message_action__anchor:hover,
#buddypress .message_action__anchor:focus {
  background: transparent;
  box-shadow: none;
}
#buddypress .message-action-delete .dashicons-menu,
#buddypress .message_action__anchor .dashicons-menu {
  font: normal normal normal 18px/1 "bb-icons";
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #939597;
  font-size: 21px;
}
#buddypress .message-action-delete .dashicons-menu:before,
#buddypress .message_action__anchor .dashicons-menu:before {
  content: '\e81b';
}

.bp-messages-content .actions {
  line-height: 1.3;
}

.message-metadata .user-link {
  height: auto;
}

.bp-messages-content #bp-message-thread-list .message-metadata time {
  color: #A3A5A9;
  font-size: 12px;
  padding-left: 4px;
}
.bp-messages-content #bp-message-thread-list .message-metadata .avatar {
  width: auto;
}

.bp-messages-content #send-reply {
  margin: 0 -20px 0 -20px;
  height: auto;
  width: auto;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.bp-messages-content #send-reply .message-box {
  width: 100%;
}
.bp-messages-content #send-reply .wp-editor-container {
  border-left: 0;
  border-right: 0;
}
.bp-messages-content #send-reply .message-metadata {
  display: none;
}
.bp-messages-content #send-reply #bp-message-content {
  margin-top: 0;
}
.bp-messages-content #send-reply .dropzone .dz-default {
  padding: 20px;
}

.buddypress-wrap .standard-form#send-reply textarea {
  width: 100%;
  border: 0;
}

#bp-message-thread-list:empty {
  border: 0;
  max-height: -webkit-calc(58vh + 65px);
  max-height: calc(58vh + 65px);
  min-height: -webkit-calc(58vh + 65px);
  min-height: calc(58vh + 65px);
  padding: 20px;
  text-align: center;
}
#bp-message-thread-list:empty:before {
  font: normal normal normal 20px/1 "bb-icons";
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: '\E838';
  -webkit-animation: spin 2s infinite linear;
          animation: spin 2s infinite linear;
}

#bp-message-load-more .button .dashicons-update {
  font-family: "bb-icons";
}
#bp-message-load-more .button .dashicons-update:before {
  content: "\e838";
}

.messages.compose .bp-messages-filters {
  display: block;
}

#buddypress #bp-messages-send,
#buddypress #bp-messages-reset {
  min-width: 140px;
  font-weight: 500;
  height: 40px;
}

.buddypress-wrap .standard-form .wp-editor-container {
  border: 1px solid #DEDFE2;
}

.send-reply.loading {
  position: relative;
}
.send-reply.loading:before {
  background: rgba(255, 255, 255, 0.6);
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: 10;
}
.send-reply.loading:after {
  position: absolute;
  top: 42%;
  left: 0;
  right: 0;
  margin-top: 0;
  margin: auto;
  content: "\e838";
  font-family: "bb-icons";
  font-size: 24px;
  line-height: 36px;
  text-align: center;
  -webkit-animation: spin 3s infinite linear;
          animation: spin 3s infinite linear;
  z-index: 12;
}

#message_content_ifr {
  max-height: 80px;
}

#message_content {
  margin-bottom: 0;
}
#message_content > p:last-child {
  margin-bottom: 0;
}

.no-message-wrap .dashicons-email-alt {
  background: url(../images/svg/new-message.svg) no-repeat center center;
  display: block;
  margin: 20px auto 0;
  height: 80px;
  width: 86px;
}
.no-message-wrap .dashicons-email-alt:before {
  display: none;
}

.no-message-content {
  padding: 20px 40px;
  font-size: 15px;
  color: #939597;
  letter-spacing: -0.24px;
  line-height: 1.46;
}
#bp-messages-threads-list .no-message-content h3 {
  font-size: 22px;
  margin-bottom: 15px;
}

#bp-message-content {
  border-top: 1px solid #E7E9EC;
  padding: 20px;
}
#bp-message-content .medium-editor-element,
#bp-message-content .medium-editor-placeholder {
  font-size: 16px;
  line-height: 1.28;
}
#bp-message-content pre {
  white-space: pre-wrap;
  position: relative;
  z-index: 1;
}
#bp-message-content pre p {
  margin-bottom: 0;
}
#bp-message-content p {
  margin-bottom: 15px;
}
#bp-message-content ul:not(.medium-editor-toolbar-actions),
#bp-message-content ol:not(.medium-editor-toolbar-actions) {
  margin-bottom: 15px;
  margin-left: 16px;
}
#bp-message-content ul:not(.medium-editor-toolbar-actions) li,
#bp-message-content ol:not(.medium-editor-toolbar-actions) li {
  margin: 5px 0;
}
#bp-message-content .medium-editor-element:not(.emojionearea) {
  border: 0;
  min-height: 60px;
  overflow: auto;
  max-height: -webkit-calc(69vh - 128px);
  max-height: calc(69vh - 128px);
  margin: 0 -20px;
  padding: 0 20px;
}
#bp-message-content .medium-editor-element:not(.emojionearea).medium-editor-placeholder:after {
  left: 0;
  font-size: 16px;
}
#bp-message-content .medium-editor-placeholder:after {
  color: #C3C6C9;
}
#bp-message-content .messages-attached-gif-container {
  margin-bottom: 10px;
}
@media screen and (max-width: 560px) {
  #bp-message-content .messages-attached-gif-container {
    max-width: 100%;
    background-repeat: no-repeat;
  }
}

.bp-messages-content #send_reply_button {
  margin: 0;
}

#message-form-submit-wrapper,
#message-reply-form-submit-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

#message-new-submit,
#message-reply-new-submit {
  padding: 0;
}
#message-new-submit input,
#message-reply-new-submit input {
  margin-right: 0;
}

.bp-messages-container .bp-messages.loading {
  border: 0;
}
.bp-messages-container .bp-messages.loading .dashicons-update {
  font-family: "bb-icons";
}
.bp-messages-container .bp-messages.loading .dashicons-update:before {
  content: "\e838";
}

.bp-message-content-wrap .bp-messages.loading {
  display: none;
}

#page .ql-bubble .ql-tooltip {
  padding: 0 10px;
}
#page .ql-bubble .ql-tooltip button {
  background: transparent;
  margin: 0;
  padding: 0;
}
#page .ql-bubble.ql-toolbar button svg,
#page .ql-bubble .ql-toolbar button svg {
  float: none;
  max-width: 18px;
}
#page .ql-bubble .ql-toolbar .ql-formats {
  margin: 0;
}
#page .ql-bubble .ql-toolbar .ql-formats:first-child {
  margin-left: 0;
}

.bp-single-message-content .bp-user-link,
.bp-single-message-content strong.bp-user-deleted {
  font-size: 14px;
  color: #122B46;
  letter-spacing: -0.2px;
  line-height: 1.21;
}
.bp-single-message-content .message-metadata {
  line-height: 1;
  margin-bottom: 5px;
}
.bp-single-message-content img.emoji, .bp-single-message-content img.emojioneemoji {
  margin: 1px 3px;
  width: 18px !important;
  height: 18px !important;
}
.bp-single-message-content blockquote {
  margin-top: 0;
}

ul#bp-message-thread-list .bp-message-content-wrap {
  color: #122B46;
  letter-spacing: -0.2px;
  line-height: 1.28;
  overflow: initial;
}
ul#bp-message-thread-list .bp-message-content-wrap p {
  margin-bottom: 15px;
}
ul#bp-message-thread-list .bp-message-content-wrap ul, ul#bp-message-thread-list .bp-message-content-wrap ol {
  margin-bottom: 15px;
  margin-left: 16px;
}
ul#bp-message-thread-list .bp-message-content-wrap li {
  background: transparent;
  margin: 5px 0;
  padding: 0;
  list-style-type: disc;
}
ul#bp-message-thread-list .bp-message-content-wrap li p {
  margin-bottom: 0;
}
ul#bp-message-thread-list .bp-message-content-wrap ol li {
  list-style-type: decimal;
}
ul#bp-message-thread-list .bp-message-content-wrap pre {
  width: -webkit-calc(100% + 12px);
  width: calc(100% + 12px);
}
ul#bp-message-thread-list .bp-message-content-wrap blockquote {
  background: #e3e6ea;
  border-radius: 4px;
  padding: 12px;
  font-size: 22px;
  letter-spacing: -0.24px;
  line-height: 30px;
  position: relative;
  margin: 0 0 15px;
  width: -webkit-calc( 100% + 12px );
  width: calc( 100% + 12px );
}
ul#bp-message-thread-list .bp-message-content-wrap blockquote p {
  font-size: 20px;
  margin-bottom: 0;
}
ul#bp-message-thread-list .bp-message-content-wrap blockquote:before {
  content: '\e832';
  font-family: "bb-icons";
  font-style: normal;
  font-weight: normal;
  display: inline-block;
  text-align: center;
  font-variant: normal;
  color: #fff;
  width: 28px;
  height: 28px;
  font-size: 20px;
  line-height: 28px;
  background: #7F868F;
  border-radius: 100%;
  margin-bottom: 10px;
}

ul#bp-message-thread-list .group-messages-highlight .bp-message-content-wrap pre {
  width: auto;
  border: 1px solid #f8e8ac;
  background: #fff;
}
ul#bp-message-thread-list .group-messages-highlight .bp-message-content-wrap blockquote {
  width: auto;
  border: 1px solid #f8e8ac;
  background: #fffef7;
}
ul#bp-message-thread-list .group-messages-highlight .bp-message-content-wrap blockquote:before {
  color: #f8e8ac;
  border: 1px solid #f8e8ac;
  background: #fff;
}

.messages .bp-single-vert-nav .item-body {
  padding: 0;
}
.messages .bp-single-vert-nav #subnav {
  border-bottom: 1px solid #E7E9EC;
}

#whats-new-messages-toolbar .emojionearea .emojionearea-picker .emojionearea-search > input {
  outline: none;
  width: 100%;
  min-width: 100%;
  height: 30px;
}
#whats-new-messages-toolbar .gif-media-search-dropdown.open {
  margin: 0 0 10px -20px;
  top: auto;
  bottom: 100%;
  padding-bottom: 0;
  padding-top: 10px;
}
#whats-new-messages-toolbar .gif-media-search-dropdown:before {
  left: 38px;
  top: auto;
  bottom: -11px;
  -webkit-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
          transform: rotate(135deg);
}
#whats-new-messages-toolbar .gif-search-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column-reverse;
      flex-flow: column-reverse;
}
#whats-new-messages-toolbar .emojionearea .emojionearea-picker {
  top: auto;
  bottom: 40px;
}
#whats-new-messages-toolbar .emojionearea .emojionearea-picker.emojionearea-filters-position-top .emojionearea-filters {
  top: auto;
  bottom: 0;
}
#whats-new-messages-toolbar .emojionearea .emojionearea-picker .emojionearea-search-panel {
  top: auto;
  bottom: 40px;
}
#whats-new-messages-toolbar .emojionearea .emojionearea-picker.emojionearea-filters-position-top.emojionearea-search-position-top .emojionearea-scroll-area {
  bottom: auto;
  top: 0;
}
#whats-new-messages-toolbar .emojionearea .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
  bottom: -10px;
  top: auto;
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg);
}
@media screen and (max-width: 1080px) {
  #whats-new-messages-toolbar .gif-media-search-dropdown.open {
    z-index: 999;
  }
  #whats-new-messages-toolbar .gif-media-search-dropdown.open .gif-search-results {
    max-height: 280px;
  }
  #whats-new-messages-toolbar .post-emoji .emojionearea .emojionearea-picker {
    z-index: 999;
  }
  #whats-new-messages-toolbar .post-emoji:first-child .emojionearea .emojionearea-picker {
    left: -31px;
  }
  #whats-new-messages-toolbar .post-emoji:first-child .emojionearea .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 34px;
  }
  #whats-new-messages-toolbar .post-emoji:nth-child(2) .emojionearea .emojionearea-picker {
    left: -65px;
  }
  #whats-new-messages-toolbar .post-emoji:nth-child(2) .emojionearea .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 68px;
  }
  #whats-new-messages-toolbar .post-emoji:nth-child(3) .emojionearea .emojionearea-picker {
    left: -99px;
  }
  #whats-new-messages-toolbar .post-emoji:nth-child(3) .emojionearea .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 102px;
  }
  #whats-new-messages-toolbar .post-emoji:nth-child(4) .emojionearea .emojionearea-picker {
    left: -133px;
  }
  #whats-new-messages-toolbar .post-emoji:nth-child(4) .emojionearea .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 136px;
  }
  #whats-new-messages-toolbar .post-gif:first-child .gif-media-search-dropdown.open {
    left: -10px;
  }
  #whats-new-messages-toolbar .post-gif:first-child .gif-media-search-dropdown.open:before {
    left: 50px;
  }
  #whats-new-messages-toolbar .post-gif:nth-child(2) .gif-media-search-dropdown.open {
    left: -44px;
  }
  #whats-new-messages-toolbar .post-gif:nth-child(2) .gif-media-search-dropdown.open:before {
    left: 84px;
  }
  #whats-new-messages-toolbar .post-gif:nth-child(3) .gif-media-search-dropdown.open {
    left: -78px;
  }
  #whats-new-messages-toolbar .post-gif:nth-child(3) .gif-media-search-dropdown.open:before {
    left: 118px;
  }
  #whats-new-messages-toolbar .post-gif:nth-child(4) .gif-media-search-dropdown.open {
    left: -112px;
  }
  #whats-new-messages-toolbar .post-gif:nth-child(4) .gif-media-search-dropdown.open:before {
    left: 152px;
  }
}

.bp-close-compose-form {
  color: rgba(18, 43, 70, 0.4);
  line-height: 1;
}
.bp-close-compose-form .dashicons {
  font: normal normal normal 24px/1 "bb-icons";
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
  width: auto;
  height: auto;
}
.bp-close-compose-form .dashicons:before {
  content: '\E8F6';
}

.bp-back-to-thread-list {
  color: rgba(18, 43, 70, 0.4);
  line-height: 1;
  margin-left: -10px;
}
.bp-back-to-thread-list .dashicons {
  font: normal normal normal 24px/1 "bb-icons";
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
  width: auto;
  height: auto;
}
.bp-back-to-thread-list .dashicons:before {
  content: '\E87A';
}

#message-threads .current a {
  background: #F5F6F7;
}

.bp-single-message-content .bp-message-content-wrap p.joined {
  color: #A3A5A9;
  font-weight: normal;
}

@media screen and (min-width: 46.8em) {
  .bp-single-vert-nav #subnav {
    background: transparent;
  }

  .bp-single-vert-nav #subnav li {
    font-size: inherit;
    margin: 0;
  }

  .bp-single-vert-nav #subnav li a {
    border-right: 0;
    padding: 0 0 5px;
  }
}
@media screen and (min-width: 55em) {
  .buddypress-wrap form.bp-dir-search-form,
  .buddypress-wrap form.bp-invites-search-form,
  .buddypress-wrap form.bp-messages-search-form {
    width: auto;
  }
}
@media screen and (min-width: 1081px) {
  .bp-messages-nav-panel {
    border-right: 1px solid #E7E9EC;
  }
}
@media screen and (max-width: 1080px) {
  .messages-wrapper {
    margin-bottom: 20px;
    min-height: 65vh;
  }

  #send_message_form {
    min-height: 74vh;
  }
}
@media screen and (max-width: 800px) {
  .messages-screen > .flex {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .messages-screen > .flex .bp-messages-content {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    border-top: 1px solid #E7E9EC;
  }
}
@media screen and (max-width: 680px) {
  .messages-wrapper #subnav {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .buddypress-wrap .messages-wrapper .bp-subnavs {
    margin: 0;
  }

  .messages-wrapper #subnav .subnav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  .messages-screen {
    border-left: 0;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .bp-messages-content #message-threads {
    max-width: 100%;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    min-height: 10px;
    max-height: 100%;
    overflow: initial;
  }
}
@media screen and (min-width: 46.8em) {
  .bp-messages-user-threads {
    max-height: 66vh;
  }
}
#buddypress .notifications-header {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 14px;
}
#buddypress .notifications-header .entry-title {
  margin: 0;
}
#buddypress .notifications-header .subnav-filters {
  margin: 0;
}
#buddypress .notifications-header #subnav {
  border: 0;
}
#buddypress .notifications-header .bp-navs {
  margin: 0;
  width: auto;
}
#buddypress .notifications-header .bp-navs li {
  margin-bottom: 0;
}
#buddypress .notifications-header .bp-navs li:last-child {
  padding: 0;
}

.notifications-options-nav .select-wrap {
  float: left;
}

@media screen and (max-width: 544px) {
  .notifications-options-nav > .select-wrap {
    width: 100%;
  }

  .notification-list .bs-header-item .bb-sort-by-date {
    margin-left: 10px;
  }
}
#notifications-bulk-management #notification-select {
  background-position: right 0.6rem center;
  border: 0;
  font-size: 14px;
  height: 34px;
  padding-right: 30px;
  min-width: 125px;
}

.bs-member-notifications .notification-header {
  border: 0;
  padding: 0;
  margin-bottom: 30px;
}
.bs-member-notifications .title.title {
  font-size: 1.75rem;
}
.bs-member-notifications .notification-header a {
  font-size: 0.875rem;
}
.bs-member-notifications .notification-header .settings {
  color: inherit;
  font-size: 1.375rem;
  /*opacity: 0.4;*/
  color: #9CA8B4;
  min-width: 22px;
  text-align: right;
  margin-left: 20px;
}

.notification-wrap.menu-item-has-children > a:after {
  bottom: -4px;
  left: 0;
}
.notification-wrap.menu-item-has-children > a:before {
  content: '';
  display: block;
  position: absolute;
  bottom: 7px;
  left: 4px;
  width: 15px;
  height: 15px;
  background: #fff;
  border-right: 1px solid #E7E9EC;
  border-bottom: 1px solid #E7E9EC;
  -webkit-transform: rotate(-135deg);
      -ms-transform: rotate(-135deg);
          transform: rotate(-135deg);
  opacity: 0;
  visibility: hidden;
}
.notification-wrap.menu-item-has-children.selected > a:before {
  opacity: 1;
  visibility: visible;
  z-index: 1002;
}

.circle-mark {
  display: block;
  width: 10px;
  height: 10px;
  border: 2px solid;
  border-radius: 100%;
  color: rgba(0, 124, 255, 0.5);
}
.circle-mark.read {
  background: #007CFF;
}

.notification-list .unread {
  background: #F7FAFE;
}

.bs-item-list.notification-list .bs-item-wrap.read-item {
  background: #F7FAFE;
}
.bs-item-list.notification-list .bs-item-wrap:not(.no-hover-effect):hover {
  border-left-color: #F5F5F5;
  border-right-color: #F5F5F5;
}

.unread-item {
  background: #F0F3F7;
}

.notification-list {
  margin-left: 0;
}
.site-header .notification-list {
  min-width: 420px;
  max-height: 52vh;
  overflow: auto;
  padding-bottom: 0;
  margin-bottom: 0;
  overflow-x: hidden;
}
@media (max-width: 543px) {
  .site-header .notification-list {
    min-width: 330px;
  }
}
@media (max-width: 380px) {
  .site-header .notification-list {
    min-width: 280px;
  }
}
.notification-list li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  padding: 15px 20px;
  border-bottom: 1px solid #E7E9EC;
  position: relative;
}
.notification-list li:hover {
  background: #F5F5F5;
}
@media (min-width: 1025px) {
  .notification-list li:hover .actions {
    opacity: 1;
    visibility: visible;
    -webkit-transition: 0.2s all;
            transition: 0.2s all;
  }
}
.notification-list .actions {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-item-align: center;
      align-self: center;
  padding-left: 5px;
  position: relative;
}
@media (min-width: 1025px) {
  .notification-list .actions {
    opacity: 0;
    visibility: hidden;
  }
}
.notification-list .actions a {
  display: inline-block;
  padding: 0;
  font-size: 24px;
  margin-left: 4px;
}
.notification-list .bs-item-wrap {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.notification-list .delete-notification {
  color: #122B46;
  opacity: 0.4;
  margin-left: 10px;
}
.notification-list .delete-notification:hover {
  color: #007CFF;
  opacity: 1;
}
.notification-list .bb-header-loader .dashicons-update {
  font-family: "bb-icons";
}
.notification-list .bb-header-loader .dashicons-update:before {
  content: "\e838";
}

.menu-item-has-children .notification-list li:last-child {
  margin-bottom: -1px;
}

#header-notification-dropdown .notification-list li {
  padding-right: 12px;
}

.notification-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 15px 20px;
  border-bottom: 1px solid #E7E9EC;
}
.notification-header a {
  display: block;
  font-size: 13px;
  font-weight: inherit;
  color: #007CFF;
  letter-spacing: -0.24px;
  line-height: 1;
  margin: 0 0 0 22px;
  padding: 0;
}
.notification-header a:hover {
  background: transparent;
}
.notification-header a.mark-all-read {
  margin-left: auto;
}
.notification-header .settings {
  color: inherit;
}
.notification-header .settings i {
  margin-left: -7px;
}
.notification-header .title {
  font-size: 1rem;
  line-height: 1;
  margin: 0;
}
.notification-header .title + a {
  margin-left: auto;
}

.notification-avatar {
  margin-right: 10px;
  position: relative;
}
.notification-avatar img {
  display: block;
  max-width: 36px;
  border-radius: 50%;
}

.notification-content {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  font-size: 14px;
  color: #A3A5A9;
  letter-spacing: -0.24px;
  line-height: 1.3;
  position: relative;
}
.notification-content a {
  color: #122B46;
}
.notification-content a:hover {
  background: transparent;
}
.notification-content a span {
  color: #007CFF;
  display: inline-block;
}
.notification-content .posted {
  display: block;
  margin-top: 3px;
}

.bs-item-wrap .notification-content {
  font-size: 16px;
}
.bs-item-wrap span.posted {
  font-size: 14px;
}
.bs-item-wrap .notification-avatar {
  margin-right: 20px;
}

.notification-footer {
  position: relative;
  bottom: 0;
  background: #fff;
  width: 100%;
  border-top: 1px solid #E7E9EC;
}
.notification-footer .delete-all {
  font-size: 12px;
  font-weight: 500;
  color: #007CFF;
  padding: 12px 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.notification-footer .bb-icon-angle-right {
  color: inherit;
  margin-left: 0;
  opacity: 0.6;
}

.bb-full-link {
  font-size: 0;
}
.bb-full-link > a {
  cursor: pointer;
  font-size: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  opacity: 0;
}

#header-messages-dropdown-elem .notification-link.active i:after {
  right: 0px;
}

body.settings .bp-vertical-navs #item-body,
body.messages .bp-vertical-navs #item-body,
body.notifications .bp-vertical-navs #item-body {
  margin: 0;
  padding: 0;
}
body.settings .bp-vertical-navs #subnav,
body.messages .bp-vertical-navs #subnav,
body.notifications .bp-vertical-navs #subnav {
  margin: 0 !important;
}
body.settings #buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap,
body.messages #buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap,
body.notifications #buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap {
  margin-top: 0;
}

@media (min-width: 544px) {
  #notifications-filter-select .select-wrap {
    margin: 0 0 0 30px;
  }
}
@media (max-width: 543px) {
  .bs-member-notifications .bs-item-list.list-view .bs-item-wrap {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }

  section.notifications .notification-list .actions {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-top: 10px;
    padding-left: 75px;
  }

  .bs-item-wrap span.posted {
    margin-top: 5px;
  }

  .bs-member-notifications .notification-header {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  #buddypress #item-body .bs-member-notifications .title {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 20px;
  }

  .bs-member-notifications .notification-header a.mark-all-read {
    margin-left: 0;
  }

  .bs-member-notifications .notification-header .settings {
    margin-left: auto;
  }

  #buddypress .notifications-header {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  #buddypress .notifications-header .subnav-filters {
    margin-top: 20px;
    width: 100%;
  }

  .notifications-header .subnav-search,
  .notifications-header .notifications-search {
    width: 100%;
  }

  #buddypress .notifications-header .bp-navs li:last-child {
    padding-right: 0;
  }

  .notifications-header .subnav-filters div {
    margin-top: 0;
    margin-bottom: 0;
  }
}
@media screen and (max-width: 440px) {
  .bb-sort-by-date {
    margin-top: 10px;
    width: 100%;
  }
}
body.bp-user.profile:not(.public) #buddypress.bp-single-vert-nav.bp-vertical-navs .bp-wrap {
  margin-top: 0;
}
body.bp-user.profile:not(.public) .bp-wrap {
  /*        display: flex;
          flex-flow: row wrap;*/
  background: transparent;
  border: 0;
}
body.bp-user.profile:not(.public) .bp-vertical-navs #item-body {
  margin: 0;
  padding: 0;
}
body.bp-user.profile:not(.public) .bp-vertical-navs #subnav {
  margin: 0 !important;
}

.bp-vertical-navs .bb-profile-grid {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  min-width: 1px;
  margin: 0;
}

.buddypress-wrap .profile {
  margin: 0;
}

header.profile-header {
  margin-bottom: 30px;
}

#item-body .bb-profile-title {
  margin: 0;
}

.profile-loop-header {
  margin-bottom: 0;
  border-bottom: 1px solid #E7E9EC;
  margin: 0 -30px 30px;
  padding: 10px 30px;
}
.profile-loop-header .entry-title.bb-profile-title {
  margin: 0;
  font-family: inherit;
  font-size: 18px;
  font-weight: 500;
}
@media (max-width: 375px) {
  #buddypress .bp-profile-content .profile-loop-header .button {
    padding: 6px 14px;
  }
}

.bp-profile-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  margin-bottom: 30px;
}
.bp-profile-wrapper table.profile-fields {
  box-shadow: none;
  border-radius: 0;
}
.bp-profile-wrapper .bp-tables-user tbody tr:nth-child(odd) {
  background: transparent;
}
.bp-profile-wrapper .bp-widget:not(:last-child) {
  margin-bottom: 30px;
}
.bp-profile-wrapper #public-personal-li {
  display: none;
}

.bb-user-nav-display-wrap .bp-profile-wrapper {
  background: transparent;
  border: 0;
  border-radius: 0;
}
.bb-user-nav-display-wrap .bp-profile-content {
  padding: 0;
}
.bb-user-nav-display-wrap header.profile-header {
  padding-top: 0;
  padding-bottom: 20px;
}

#page #buddypress #item-body .bp-profile-wrapper #subnav {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 230px;
          flex: 0 0 230px;
  background: #FBFBFC;
  border-right: 1px solid #E7E9EC;
  border-bottom: 0;
  min-height: 60vh;
  border-radius: 4px 0 0 4px;
  margin: 0;
  padding: 30px 0;
}
#page #buddypress #item-body .bp-profile-wrapper #subnav .subnav {
  float: none;
}
#page #buddypress #item-body .bp-profile-wrapper #subnav li {
  float: none;
  padding: 0;
}
#page #buddypress #item-body .bp-profile-wrapper #subnav a {
  border: 0;
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 16px 20px;
  line-height: 1;
  margin-bottom: 1px;
}
#page #buddypress #item-body .bp-profile-wrapper #subnav a:before {
  content: '\E8EE';
  font: normal normal normal 14px/1 "bb-icons";
  speak: none;
  display: inline-block;
  font-size: 18px;
  margin-right: 10px;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
#page #buddypress #item-body .bp-profile-wrapper #subnav a:hover {
  background: rgba(77, 92, 109, 0.1);
  color: #122B46;
}
#page #buddypress #item-body .bp-profile-wrapper #subnav #edit:before {
  content: '\e89b';
}
#page #buddypress #item-body .bp-profile-wrapper #subnav #change-avatar:before {
  content: '\E8A2';
}
#page #buddypress #item-body .bp-profile-wrapper #subnav #change-cover-image:before {
  content: '\e8a8';
}
#page #buddypress #item-body .bp-profile-wrapper #subnav .selected a {
  background: rgba(77, 92, 109, 0.1);
  color: #007CFF;
  font-weight: 400;
}

.bp-profile-content {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 0 30px 30px;
}
.bp-profile-content .profile:not(.public) {
  padding: 50px;
}
.bp-profile-content .profile:not(.public) .screen-heading {
  font-weight: 500;
  font-size: 22px;
  line-height: 1.1;
}

.profile.change-avatar .bp-feedback,
.profile.change-cover-image .bp-feedback {
  font-size: 14px;
  line-height: 1.7;
}
.profile.change-avatar .bp-help-text,
.profile.change-cover-image .bp-help-text {
  font-style: normal;
  padding: 10px 0;
}
.profile.change-avatar .warning,
.profile.change-cover-image .warning {
  line-height: 1.6;
}

.profile.change-cover-image .bp-cover-image {
  margin: 20px 0;
}

.buddypress-wrap .profile.public .profile-group-title {
  border-bottom: 1px solid #E7E9EC;
  font-size: 18px;
  margin-bottom: 15px;
  padding-bottom: 5px;
}

#buddypress div.bp-profile-content table.profile-fields tr td {
  padding: 0 0 12px;
  word-break: break-word;
}

#buddypress div.bp-profile-content table.profile-fields tr td.label {
  padding-right: 12px;
}

.buddypress-wrap .profile.edit .editfield .description {
  outline: none;
  color: #bdbdbd;
  font-size: 14px;
}

.bs-profile-details-wrap .profile-details-heading {
  margin-bottom: 20px;
  padding: 10px 0;
  line-height: 30px;
  border-bottom: 1px solid #E7E9EC;
}
.bs-profile-details-wrap .bs-profile-widget-heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
}
.bs-profile-details-wrap .bs-profile-widget-heading i {
  display: none;
  margin-right: 10px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  font-size: 22px;
}
.bs-profile-details-wrap .lg-grid-1-2:nth-child(2n + 1) {
  border-right: 1px solid #E7E9EC;
}
.bs-profile-details-wrap .bp-widget {
  margin-bottom: 30px;
}

.bs-profile-details-grid .bb-field-group:nth-child(odd) .bp-widget {
  padding-right: 10px;
}
.bs-profile-details-grid .bb-field-group:nth-child(even) .bp-widget {
  padding-left: 10px;
}

#buddypress table.profile-fields tr td.label,
#buddypress table.profile-fields tr td.data {
  padding: 5px 0;
  font-size: 14px;
  font-weight: normal;
  line-height: inherit;
  background: none;
  border: 0;
}

#buddypress table.profile-fields tr td.label {
  color: #A3A5A9;
  width: 35%;
}

#buddypress table.profile-fields tr td.data {
  color: #4D5C6D;
  width: 65%;
}

#buddypress table.profile-fields tr:hover {
  background: transparent;
}

#buddypress table.profile-fields tr td.label {
  display: table-cell;
  padding-right: 20px;
  width: 35%;
  vertical-align: top;
}

#buddypress table.profile-fields tr td.data {
  display: table-cell;
  width: 65%;
  vertical-align: top;
}

.profile.public .bp-widget:not(:last-child) {
  /*        margin-bottom: 20px;
          border-bottom: 1px solid $color-border;
          padding-bottom: 20px;*/
}

#item-body > div.profile .bp-feedback .bp-help-text {
  display: block;
  font-style: normal;
  padding: 10px 5px;
}
#item-body > div.profile p.bp-feedback {
  background: #FBFBFC;
  border: 1px solid #E7E9EC;
  border-radius: 3px;
  font-size: 14px;
  line-height: 1.5;
  overflow: hidden;
}

#item-body .profile #drag-drop-area {
  background: rgba(240, 243, 247, 0.5);
  border: 1px dashed #DEDFE2;
  border-radius: 6px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 16px;
  color: #122B46;
  letter-spacing: -0.24px;
  line-height: 26px;
}

#profile-edit-form fieldset {
  border: 0;
  padding: 0;
  margin-bottom: 0;
  margin-top: 0;
}

#buddypress #profile-edit-form .datebox-selects {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

div#buddypress #profile-edit-form .datebox-selects label {
  margin-top: 0;
  margin-bottom: 0;
}

#buddypress .profile.edit > #profile-edit-form {
  max-width: 100%;
}
#buddypress .profile.edit > #profile-edit-form .editfield {
  background: transparent;
  border: 0;
  margin: 0;
  padding: 0;
}
#buddypress .profile.edit > #profile-edit-form fieldset {
  padding: 0;
}
#buddypress .profile.edit > #profile-edit-form fieldset .editfield legend {
  font-size: 14px;
  color: #122B46;
}
#buddypress .profile.edit > #profile-edit-form select,
#buddypress .profile.edit > #profile-edit-form input[type="number"],
#buddypress .profile.edit > #profile-edit-form input[type="email"],
#buddypress .profile.edit > #profile-edit-form input[type="text"] {
  height: 50px;
}
#buddypress .profile.edit > #profile-edit-form select[multiple] {
  min-height: 90px;
  padding: 5px;
}
#buddypress .profile.edit > #profile-edit-form select[multiple] option {
  padding: 7px;
}
#buddypress .profile.edit > #profile-edit-form .editfield {
  margin: 15px 0;
}
#buddypress .profile.edit .button-nav {
  margin: 30px 0;
  border-bottom: 1px solid #E7E9EC;
}
#buddypress .profile.edit .button-nav a {
  background: transparent;
  padding: 0 0 10px;
  border: 0;
  margin: 0 20px -1px 0;
  color: inherit;
  min-height: 1px;
  border-radius: 0;
  box-shadow: none;
}
#buddypress .profile.edit .button-nav a:hover {
  color: #122B46;
}
#buddypress .profile.edit .button-nav .current a {
  background: transparent;
  border-bottom: 1px solid #007CFF;
  color: #122B46;
  font-weight: 500;
}
#buddypress .profile.edit .visibility-toggle-link {
  font-size: 13px;
  background-color: transparent;
  color: #122B46;
  border: 0;
  font-weight: 600;
  min-height: auto;
  padding: 0;
  vertical-align: baseline;
  /*border-bottom: 1px dotted;*/
  border-radius: 0;
  margin-left: 5px;
}
#buddypress .profile.edit .visibility-toggle-link:hover, #buddypress .profile.edit .visibility-toggle-link:focus, #buddypress .profile.edit .visibility-toggle-link:active {
  background: transparent;
  color: #007CFF;
  box-shadow: none;
}
#buddypress .profile.edit .field-visibility-settings-header {
  font-size: 12px;
}

.buddypress-wrap .profile.edit .button-nav li {
  margin-top: 10px;
}

/* Profile */
#item-body > div.profile {
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  padding: 20px;
  margin-bottom: 20px;
  font-size: 16px;
}
#item-body > div.profile .bp-tables-user,
#item-body > div.profile table.forum,
#item-body > div.profile table.wp-profile-fields {
  border-radius: 0;
  box-shadow: none;
}
#item-body > div.profile tr:nth-child(odd) {
  background: transparent;
}
#item-body > div.profile .profile-group-title {
  border-bottom: 0;
  margin-bottom: 20px;
  color: #122B46;
  font-size: 18px;
  line-height: 1;
}
#item-body > div.profile h2.screen-heading {
  border-bottom: 1px solid #E7E9EC;
  margin: 0 -20px 20px;
  padding: 0 20px 15px;
  letter-spacing: 0.33px;
  font-size: 1rem;
  font-weight: 600;
  text-transform: uppercase;
  line-height: 1;
}

a.link-change-cover-image,
a.link-change-profile-image {
  color: #939597;
}
a.link-change-cover-image:hover,
a.link-change-profile-image:hover {
  color: #007CFF;
}

.bb-buddypanel #item-header .width-full a.link-change-cover-image {
  left: 45px;
}

.bb-buddypanel.buddypanel-open #item-header .width-full a.link-change-cover-image {
  left: 120px;
}

.buddypress-wrap .profile.edit .repeater_group_outer {
  background: #FBFBFC;
  border-radius: 4px;
  padding: 15px 15px 0;
}

#buddypress #btn_add_repeater_set {
  float: left;
  height: 32px;
  margin-right: 10px;
}
#buddypress #btn_add_repeater_set .dashicons {
  font: normal normal normal 18px/1 "bb-icons";
}
#buddypress #btn_add_repeater_set .dashicons:before {
  content: "\E922";
}

#buddypress .repeater_tools a {
  color: #939597;
  cursor: pointer;
}
#buddypress .repeater_tools a:hover {
  color: #007CFF;
}
#buddypress .repeater_tools .dashicons {
  font: normal normal normal 18px/1 "bb-icons";
}
#buddypress .repeater_tools .dashicons-edit:before {
  content: "\E89B";
}
#buddypress .repeater_tools .dashicons-trash:before {
  content: "\E937";
}

tr.repeater-separator td {
  border-top: 1px solid rgba(0, 0, 0, 0.025);
  border-bottom: 0;
}

.repeater_group_inner {
  border-top: 1px solid #eee;
  display: none;
  margin: 10px -15px;
  padding: 10px 15px;
}

.buddypress-wrap .profile.edit .repeater_group_outer .repeater_tools {
  margin-bottom: 15px;
}

.buddypress-wrap .profile.edit .repeater_group_outer .repeater_set_title {
  font-size: 17px;
}

.active .repeater_set_title {
  font-weight: 600;
}

.bb-user-nav-display-wrap .widget-area {
  margin-top: 20px;
}

body #buddypress .bp-list.invites .action {
  margin: 0 0 0 auto;
}

.bp-sitewide-notice-wrap {
  background: transparent;
  border: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.bp-sitewide-notice .bp-sitewide-notice-wrap {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 0 auto;
  max-width: 1200px;
  padding-left: 10px;
  padding-right: 10px;
  width: 100%;
}

.bp-feedback.bp-sitewide-notice + .users-header div#cover-image-container {
  margin-top: -26px;
}

.site .bp-feedback.bp-sitewide-notice {
  background: #fff;
  box-shadow: 0px 10px 25px -5px rgba(18, 43, 70, 0.05);
  padding: 20px 30px;
  border: 0;
  border-bottom: 1px solid #E7E9EC;
  border-radius: 0;
  line-height: 1.5;
  margin: 0;
  position: relative;
}
.site-content .bp-feedback.bp-sitewide-notice {
  display: none;
}
.bp-feedback.bp-sitewide-notice button {
  height: auto;
  width: auto;
  padding: 0;
  background: transparent;
  box-shadow: none;
  border: 0;
  color: #4D5C6D;
  margin-left: auto;
}
.bp-feedback.bp-sitewide-notice .bp-icon {
  display: none;
}
.bp-feedback.bp-sitewide-notice p {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 0 10px 0 0;
  color: #4D5C6D;
  font-size: 14px;
}
.bp-feedback.bp-sitewide-notice strong {
  display: block;
  margin-bottom: -15px;
}

.messages #buddypress .bp-feedback.bp-sitewide-notice {
  margin-top: -25px;
}

@media (min-width: 800px) {
  #buddypress table.profile-fields tr td.label {
    width: 25%;
  }

  #buddypress table.profile-fields tr td.data {
    width: 75%;
  }
}
@media (max-width: 991px) {
  .bs-profile-details-grid .bb-field-group:nth-child(odd) .bp-widget {
    padding-right: 0;
  }
  .bs-profile-details-grid .bb-field-group:nth-child(even) .bp-widget {
    padding-left: 0;
  }
}
@media screen and (max-width: 900px) {
  #page #buddypress #item-body .bp-profile-wrapper #subnav {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    min-height: 10px;
    border-right: 0;
    border-radius: 4px 4px 0 0;
    padding: 0;
  }

  #page #buddypress #item-body .bp-profile-wrapper #subnav li {
    float: left;
    margin-right: 1px;
  }

  #buddypress .profile.edit .button-nav a {
    margin-top: 20px;
  }

  #buddypress .profile.edit .button-nav {
    margin-top: 0;
  }

  .buddypress-wrap .item-body .profile.edit .screen-heading {
    margin: 0;
  }

  .bp-profile-content .profile:not(.public) {
    padding: 30px 0;
  }
}
@media screen and (max-width: 520px) {
  #buddypress #btn_add_repeater_set {
    margin-bottom: 15px;
  }

  #buddypress #profile-edit-form {
    margin-bottom: 0;
  }
}
/* Settings */
.bp-settings-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  margin-bottom: 30px;
}

body.settings #buddypress.bp-single-vert-nav .item-body:not(#group-create-body) #subnav {
  background: #FBFBFC;
}

body.settings #buddypress.bp-single-vert-nav .item-body:not(#group-create-body) #subnav li.current a {
  color: #122B46;
}

#buddypress .bp-settings-container .bp-navs {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 230px;
          flex: 0 0 230px;
  background: #FBFBFC;
  border-right: 1px solid #E7E9EC;
  border-bottom: 0;
  min-height: 60vh;
  border-radius: 4px 0 0 4px;
  margin: 0;
  padding: 30px 0;
}
#buddypress .bp-settings-container .bp-navs li {
  float: none;
  padding: 0;
}
#buddypress .bp-settings-container .bp-navs a {
  border: 0;
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 16px 20px;
  line-height: 1;
  margin-bottom: 1px;
}
#buddypress .bp-settings-container .bp-navs a:before {
  content: '\E8EE';
  font: normal normal normal 14px/1 "bb-icons";
  speak: none;
  display: inline-block;
  font-size: 18px;
  margin-right: 10px;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
@media only screen and (max-width: 768px) {
  #buddypress .bp-settings-container .bp-navs a:before {
    display: none;
  }
}
#buddypress .bp-settings-container .bp-navs a:hover {
  background: rgba(77, 92, 109, 0.1);
  color: #007CFF;
}
#buddypress .bp-settings-container .bp-navs #general:before {
  content: '\E92A';
}
#buddypress .bp-settings-container .bp-navs #notifications:before {
  content: '\E910';
}
#buddypress .bp-settings-container .bp-navs #profile:before {
  content: '\E90D';
}
#buddypress .bp-settings-container .bp-navs #invites:before {
  content: '\E93D';
}
#buddypress .bp-settings-container .bp-navs #export:before {
  content: '\E889';
}
#buddypress .bp-settings-container .bp-navs #delete-account:before {
  content: '\E937';
}
#buddypress .bp-settings-container .bp-navs ul.subnav {
  width: 100%;
}
@media only screen and (max-width: 900px) {
  #buddypress .bp-settings-container .bp-navs ul.subnav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
}
#buddypress .bp-settings-container .bp-navs .current a,
#buddypress .bp-settings-container .bp-navs .selected a {
  background: rgba(77, 92, 109, 0.1);
  color: #007CFF;
  font-weight: 400;
}

#buddypress .bb-bp-settings-content {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 55px 80px;
}
#buddypress .bb-bp-settings-content h2.screen-heading {
  font-weight: 500;
  font-size: 22px;
  line-height: 1.1;
}
#buddypress .bb-bp-settings-content label {
  display: block;
  font-size: 16px;
  font-weight: 400;
  color: #4D5C6D;
  letter-spacing: -0.27px;
  line-height: 1.187;
  margin-bottom: 12px;
}
#buddypress .bb-bp-settings-content .bp-radio-wrap label {
  display: inline-block;
}
#buddypress .bb-bp-settings-content .settings-input {
  margin-bottom: 20px;
}
#buddypress .bb-bp-settings-content .bp-feedback {
  margin-bottom: 30px;
}
#buddypress .bb-bp-settings-content .info.bp-feedback {
  background: #FBFBFC;
}
#buddypress .bb-bp-settings-content .info.email-pwd-info {
  display: none;
}
#buddypress .bb-bp-settings-content .bp-help-text {
  font-size: 16px;
  color: #A3A5A9;
  letter-spacing: -0.27px;
  line-height: 1.2;
}
#buddypress .bb-bp-settings-content .notification-settings {
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  margin-top: 20px;
  margin-bottom: 20px;
}
#buddypress .bb-bp-settings-content .notification-settings th, #buddypress .bb-bp-settings-content .notification-settings td {
  border-bottom: 0;
  padding: 0;
}
#buddypress .bb-bp-settings-content .notification-settings th,
#buddypress .bb-bp-settings-content .notification-settings td {
  padding: 6px 0;
  border: 0;
  vertical-align: middle;
  font-size: 16px;
  color: inherit;
  letter-spacing: -0.27px;
  line-height: 1.38;
}
#buddypress .bb-bp-settings-content .notification-settings th {
  font-size: 14px;
  color: #A3A5A9;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  font-weight: 500;
}
#buddypress .bb-bp-settings-content .notification-settings th.title {
  padding-top: 30px;
}
#buddypress .bb-bp-settings-content .notification-settings th.yes {
  min-width: 80px;
}
#buddypress .bb-bp-settings-content .bp-tables-user,
#buddypress .bb-bp-settings-content table.forum,
#buddypress .bb-bp-settings-content table.wp-profile-fields {
  table-layout: fixed;
}
#buddypress .bb-bp-settings-content .bp-tables-user th.title,
#buddypress .bb-bp-settings-content table.forum th.title,
#buddypress .bb-bp-settings-content table.wp-profile-fields th.title {
  padding: 12px 20px;
}
#buddypress .bb-bp-settings-content .bp-tables-user td,
#buddypress .bb-bp-settings-content table.forum td,
#buddypress .bb-bp-settings-content table.wp-profile-fields td {
  background: transparent;
  border: 0;
  padding: 12px 20px;
}
#buddypress .bb-bp-settings-content table#xprofile-settings-base th:first-child,
#buddypress .bb-bp-settings-content table#xprofile-settings-important-data th:first-child {
  width: 40%;
}

#buddypress .bp-tables-report {
  table-layout: fixed;
}
#buddypress .bp-tables-report th {
  padding: 12px 20px;
}
#buddypress .bp-tables-report td {
  background: transparent;
  border: 0;
  padding: 12px 20px;
}

.bb-bp-settings-content #settings-form input.settings-input {
  height: 50px;
}
.bb-bp-settings-content input#submit {
  min-width: 160px;
  height: 42px;
  font-weight: 500;
}

.dz-default {
  font-size: 14px;
  font-weight: 300;
  cursor: pointer;
  letter-spacing: -0.24px;
  line-height: 1.3;
  position: relative;
  z-index: 1;
  color: #fff;
  text-align: center;
}
.dz-default:before {
  content: '\e847';
  font-family: "bb-icons";
  font-size: 24px;
  font-style: normal;
  font-weight: normal;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  margin-right: .2em;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  line-height: 1em;
  margin-left: .2em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.dz-default span {
  display: block;
  margin-top: 8px;
}

.dz-default.dz-drag {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  margin: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  z-index: 5;
  pointer-events: none;
}
.dz-default.dz-drag:before {
  content: '\e82a';
}

.left-vertical-tabs {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 250px;
          flex: 0 0 250px;
  background: #FBFBFC;
  border-right: 1px solid #E7E9EC;
  min-height: 60vh;
  border-radius: 4px 0 0 4px;
  padding: 40px 0;
}
.left-vertical-tabs ul {
  list-style: none;
  margin: 0;
}
.left-vertical-tabs ul a {
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.24px;
  display: block;
  padding: 13px 20px;
  line-height: 1;
}
.left-vertical-tabs ul a:hover {
  color: #007CFF;
}
.left-vertical-tabs ul i {
  font-size: 24px;
  width: 24px;
}
.left-vertical-tabs li {
  -webkit-transition: 0.3s all;
          transition: 0.3s all;
  margin-bottom: 1px;
}
.left-vertical-tabs li:hover {
  background: rgba(77, 92, 109, 0.1);
}
.left-vertical-tabs .active {
  background: rgba(77, 92, 109, 0.1);
}
.left-vertical-tabs .active a {
  color: #122b46;
}
.left-vertical-tabs span.title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.left-vertical-tabs span.title span {
  margin-left: 10px;
}

.bb-input-wrap {
  display: block;
  position: relative;
}
.bb-input-wrap .bb-input {
  height: 50px;
  width: 100%;
}
.bb-input-wrap i {
  left: 0;
  top: 0;
  position: absolute;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #122B46;
  opacity: 0.4;
  font-size: 22px;
  z-index: 1;
}
.bb-input-wrap i + .bb-input {
  padding-left: 48px;
}
.bb-input-wrap .bb-icon-visibility {
  font-size: 24px;
  left: auto;
  right: 0;
}
.bb-input-wrap .bb-textarea {
  height: 120px;
  width: 100%;
}
.bb-input-wrap textarea {
  resize: vertical;
}

span.bb-visibility-wrap {
  right: 0;
  top: 0;
  position: absolute;
  width: 50px;
  height: 50px;
  line-height: 50px;
  z-index: 1;
}

.bb-input[type=password] + .bb-visibility-wrap .bb-icon-visibility:before {
  content: '\e850';
}

.bb-input[type=text] + .bb-visibility-wrap .bb-icon-visibility:before {
  content: '\e844';
}

.bs-settings-container .bb-input[type='password'] {
  padding-right: 40px;
}

.settings-header.entry-header {
  margin-bottom: 30px;
}

.profile-header i.bb-icon-user-small,
.settings-header i.bb-icon-user-small {
  margin: 0;
  width: auto;
  height: auto;
  font-size: 18px;
  position: relative;
  line-height: 1;
  top: 1px;
}

div.bs-settings-container .bb-profile-avatar-wrap {
  position: relative;
  margin-left: 45px;
  margin-top: -155px;
  height: 152px;
  width: 152px;
}
div.bs-settings-container .bb-profile-avatar-wrap .dz-default span {
  display: block;
}

.bb-profile-avatar-wrap + .button-wrap {
  margin-top: 0;
}

#bb-profile-avatar-wrap-components {
  overflow: hidden;
  height: 152px;
  width: 152px;
  border-radius: 4px;
  position: relative;
}
#bb-profile-avatar-wrap-components video {
  position: absolute;
  z-index: 3;
  object-fit: cover;
}
#bb-profile-avatar-wrap-components #captureAvatarlink {
  position: absolute;
  z-index: 3;
  top: 0;
  left: 10px;
  font-size: 12px;
  font-weight: 500;
  text-transform: uppercase;
}
#bb-profile-avatar-wrap-components #avatar-drag-message {
  z-index: 1;
}
#bb-profile-avatar-wrap-components div#profile_avatar {
  background-size: cover;
  background-repeat: no-repeat;
  border: 2px solid #fff;
  position: relative;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  z-index: 5;
}
#bb-profile-avatar-wrap-components div#profile_avatar:before {
  background: rgba(18, 43, 70, 0.3);
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
}
#bb-profile-avatar-wrap-components .croppie-container {
  position: absolute;
  top: 0;
  -webkit-transition: all 200ms ease;
          transition: all 200ms ease;
  z-index: 3;
}
#bb-profile-avatar-wrap-components .croppie-container .cr-boundary {
  width: 100% !important;
  height: 100% !important;
  position: absolute;
  top: 0;
  z-index: 3;
  background: #fff;
}
#bb-profile-avatar-wrap-components .croppie-container .cr-viewport {
  border: 0;
}

.has-sidebar .bb-profile-avatar-wrap {
  width: 90px;
  height: 90px;
  margin-top: -60px;
}
.has-sidebar .bb-profile-avatar-wrap .dz-default span {
  display: none;
}

.bb-profile-cover-wrap #cover-drag-message {
  z-index: 1;
}
.bb-profile-cover-wrap .croppie-container {
  position: absolute;
  overflow: hidden;
  border-radius: 4px;
  z-index: 3;
}
.bb-profile-cover-wrap .croppie-container .cr-boundary {
  width: 100% !important;
  height: 100% !important;
  padding-top: 26.895%;
  position: absolute;
  top: 0;
  background: #fff;
}
.bb-profile-cover-wrap .croppie-container .cr-viewport {
  border: 0;
}
.bb-profile-cover-wrap .dz-default {
  position: absolute;
  top: 50%;
  margin-top: -25px;
}
.bb-profile-cover-wrap .dz-default.dz-drag {
  top: 0;
  margin: 0;
}

.cr-viewport {
  width: 100% !important;
  height: 100% !important;
}

.bb-profile-wrap {
  z-index: 2;
  position: relative;
}
.bb-profile-wrap [class*="bb-delete"] {
  color: #fff;
  font-size: 22px;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 5;
}
.bb-profile-wrap .bs-dropdown-wrap {
  position: absolute;
  z-index: 7;
  top: 0;
  right: 0;
}
.bb-profile-wrap .bs-dropdown-wrap .bs-dropdown {
  top: 46px;
}
.bb-profile-wrap .bs-dropdown-wrap .bs-dropdown:after {
  right: 15px;
}
.bb-profile-wrap .bs-dropdown-wrap .bb-icon-menu-dots-v {
  color: #fff;
  position: relative;
  right: 10px;
  top: 10px;
}
.bb-profile-wrap.loading .cr-image {
  opacity: 0.6 !important;
}
.bb-profile-wrap.loading:before {
  position: absolute;
  top: 38%;
  left: 0;
  right: 0;
  margin-top: 0;
  margin: auto;
  content: "\e838";
  font-family: "bb-icons";
  font-size: 24px;
  line-height: 36px;
  color: white;
  text-align: center;
  -webkit-animation: spin 3s infinite linear;
          animation: spin 3s infinite linear;
  z-index: 12;
}
.bb-profile-wrap.loading .dz-default {
  display: none;
}

body.notifications.bp-user #item-header,
body.settings.bp-user #item-header {
  /*display: none;*/
  /*This is removed due to issue in 'BuddyPress Nouveau'*/
}

.bb-field-wrap {
  margin-bottom: 20px;
}

.bb-profile-section .bs-dropdown-link .bs-dropdown-link {
  font-size: 14px;
  cursor: pointer;
  color: #939597;
  background-image: url(../images/svg/arrow-down.svg);
  background-position: right 7px;
  background-repeat: no-repeat;
  padding-right: 15px;
}
.bb-profile-section i {
  font-size: 14px;
  color: #939597;
  margin-right: 5px;
}
.bb-profile-section input:not([type='checkbox']):not([type='radio']), .bb-profile-section textarea, .bb-profile-section select {
  width: 100%;
}
.bb-profile-section .bb-icon-user-small-plus {
  font-size: 17px;
}

.notification-settings-wrap {
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  padding-top: 25px;
  padding-bottom: 25px;
}
.notification-settings-wrap:last-child {
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.notification-settings-wrap th, .notification-settings-wrap td {
  padding: 6px 0;
  border: 0;
  vertical-align: middle;
  font-size: 16px;
  color: #4D5C6D;
  letter-spacing: -0.27px;
  line-height: 1.38;
}
.notification-settings-wrap th {
  padding: 5px 0 15px;
}
.notification-settings-wrap .yes {
  padding-left: 15px;
  text-align: right;
}

div#message.error {
  background-color: #EF3E46;
  color: #fff;
  border: 1px solid #EF3E46;
  padding: 0.615em 2.25em 0.615em 1.15em;
  font-size: 14px;
  line-height: 1.5;
  border-radius: 3px;
}

.bb-delete-account-wrap {
  margin: 30px 0;
}

.vdp-datepicker .vdp-datepicker__calendar {
  background: #fff;
  box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.08);
  border: 0;
  border-radius: 4px;
  max-width: 100%;
}
.vdp-datepicker .vdp-datepicker__calendar header {
  border-bottom: 1px solid #E8EAED;
  overflow: hidden;
  height: 48px;
  line-height: 48px;
  font-size: 14px;
  color: #007CFF;
  letter-spacing: -0.24px;
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.vdp-datepicker .vdp-datepicker__calendar > div {
  padding: 10px 20px 20px;
}
.vdp-datepicker .vdp-datepicker__calendar .prev,
.vdp-datepicker .vdp-datepicker__calendar .next {
  line-height: 1;
  text-indent: 0;
  font-size: 0;
}
.vdp-datepicker .vdp-datepicker__calendar .prev:before,
.vdp-datepicker .vdp-datepicker__calendar .next:before {
  content: '\e827';
  color: #53597B;
  display: inline-block;
  font: normal normal normal 14px/1 "bb-icons";
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  left: 10px;
  font-size: 24px;
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg);
  top: -12px;
}
.vdp-datepicker .vdp-datepicker__calendar .prev:after,
.vdp-datepicker .vdp-datepicker__calendar .next:after {
  display: none;
}
.vdp-datepicker .vdp-datepicker__calendar .next:before {
  -webkit-transform: rotate(0);
      -ms-transform: rotate(0);
          transform: rotate(0);
}
.vdp-datepicker .vdp-datepicker__calendar .cell.day-header {
  font-size: 10px;
  color: #4D5C6D;
  opacity: 0.5;
  text-transform: uppercase;
}
.vdp-datepicker .vdp-datepicker__calendar .cell {
  font-size: 14px;
  color: #122B46;
}
.vdp-datepicker .vdp-datepicker__calendar .cell.selected,
.vdp-datepicker .vdp-datepicker__calendar .cell.selected.highlighted,
.vdp-datepicker .vdp-datepicker__calendar .cell.selected:hover {
  background: transparent;
  color: #fff;
  position: relative;
}
.vdp-datepicker .vdp-datepicker__calendar .cell.selected:not(.day),
.vdp-datepicker .vdp-datepicker__calendar .cell.selected.highlighted:not(.day),
.vdp-datepicker .vdp-datepicker__calendar .cell.selected:hover:not(.day) {
  background: #007CFF;
}
.vdp-datepicker .vdp-datepicker__calendar .cell.selected.day:before,
.vdp-datepicker .vdp-datepicker__calendar .cell.selected.highlighted.day:before,
.vdp-datepicker .vdp-datepicker__calendar .cell.selected:hover.day:before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  display: block;
  height: 32px;
  width: 32px;
  background: #007CFF;
  color: #fff;
  border-radius: 50%;
  z-index: -1;
  top: 3px;
}
.vdp-datepicker .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).day:hover,
.vdp-datepicker .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).month:hover,
.vdp-datepicker .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).year:hover {
  border: 1px solid transparent;
  /*color: $color-link;*/
}
.vdp-datepicker .vdp-datepicker__calendar .cell:not(.selected):hover {
  color: #007CFF;
}

#buddypress #profile-edit-form {
  max-width: 520px;
  width: 100%;
}
#buddypress #profile-edit-form .editfield {
  margin-bottom: 20px;
}
#buddypress #profile-edit-form fieldset {
  margin: 0;
}
#buddypress #profile-edit-form .clear-value {
  display: none;
}
#buddypress #profile-edit-form label:not(.bp-screen-reader-text),
#buddypress #profile-edit-form legend:not(.bp-screen-reader-text) {
  display: block;
  font-size: 16px;
  font-weight: 400;
  font-style: normal;
  color: #4D5C6D;
  letter-spacing: -0.27px;
  line-height: 1.187;
  margin-bottom: 12px;
}
#buddypress #profile-edit-form input[type="text"], #buddypress #profile-edit-form select {
  color: #122B46;
  height: 50px;
  font-style: normal;
  width: 100%;
}
#buddypress #profile-edit-form .field-visibility-settings-toggle {
  margin: 0;
  position: relative;
}
#buddypress #profile-edit-form .field-visibility-settings-toggle select {
  position: absolute;
  right: 0;
  top: -6px;
  width: 140px;
  height: 30px;
  font-size: 14px;
  color: #939597;
  background-image: url(../images/svg/arrow-down.svg);
  background-repeat: no-repeat;
  background-position: right 10px center;
  padding-right: 26px;
  border: 0;
  text-align: right;
  direction: rtl;
  font-style: normal;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
#buddypress #profile-edit-form .wp-editor-container button,
#buddypress #profile-edit-form .wp-editor-container .button {
  padding: 4px 2px;
  background: transparent;
  border: 0;
  height: auto;
  margin: 0;
  min-height: 20px;
}
#buddypress #profile-edit-form .wp-editor-container .mce-ico {
  color: #222;
}
#buddypress #profile-edit-form .quicktags-toolbar {
  background: #ecf0f1;
}
#buddypress #profile-edit-form .wp-editor-container textarea {
  border: 0;
  font-family: inherit;
  color: #122B46;
  letter-spacing: -0.24px;
  line-height: 1.5;
  font-size: 1rem;
  padding-top: 10px;
  padding-bottom: 10px;
  height: auto;
}
#buddypress #profile-edit-form .datebox-selects {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
#buddypress #profile-edit-form .datebox-selects select:not(:last-child) {
  margin-right: 10px;
}
#buddypress #profile-edit-form .datebox-selects label {
  margin-right: 10px;
  -webkit-box-ordinal-group: 1;
      -ms-flex-order: 0;
          order: 0;
}
#buddypress #profile-edit-form div.submit {
  clear: none;
  padding: 0;
}
#buddypress #profile-edit-form div.submit input {
  margin-right: 0;
}

@media (min-width: 1081px) {
  .left-vertical-tabs [data-balloon]:before,
  .left-vertical-tabs [data-balloon]:after {
    display: none;
  }
}
@media (max-width: 1080px) {
  .has-sidebar .left-vertical-tabs {
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
}
@media (max-width: 800px) {
  .notification-settings-wrap th, .notification-settings-wrap td {
    font-size: 14px;
  }

  .bb-profile-avatar-wrap {
    width: 80px;
    height: 80px;
    margin-top: -70px;
    margin-left: 30px;
  }
  .bb-profile-avatar-wrap .dz-default span {
    display: none;
  }
}
@media (max-width: 800px) {
  div.bs-settings-container .bb-profile-avatar-wrap {
    margin-left: 30px;
    margin-top: -122px;
    height: 120px;
    width: 120px;
  }

  .bb-profile-avatar-wrap #bb-profile-avatar-wrap-components {
    height: 120px;
    width: 120px;
  }

  .bs-dropdown-wrap .bs-dropdown a.bb-webcam {
    display: none;
  }

  .tab-container .bb-profile-wrap {
    z-index: initial;
  }
}
@media screen and (max-width: 900px) {
  #buddypress .bp-settings-container .bp-navs {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    min-height: 10px;
    border-right: 0;
    border-radius: 4px 4px 0 0;
    padding: 0;
  }

  #buddypress .bp-settings-container .bp-navs li {
    /*width: 50%; This is creating issue with layout on Account Settings page. */
    float: left;
  }

  #buddypress .bb-bp-settings-content {
    padding: 20px;
  }
}
@media (max-width: 640px) {
  div.bs-settings-container .bb-profile-avatar-wrap {
    width: 120px;
    height: 120px;
    margin: -20px auto 40px;
  }

  .bb-profile-avatar-wrap #bb-profile-avatar-wrap-components {
    height: 120px;
    width: 120px;
  }

  .bb-profile-avatar-wrap .button-wrap {
    margin-top: -15px;
  }

  div.bs-settings-container .bb-profile-avatar-wrap .dz-default span {
    font-size: 11px;
  }

  #buddypress .bp-settings-container .bp-navs a {
    color: #007CFF;
  }
}
@media (min-width: 541px) {
  #buddypress #profile-edit-form .datebox-selects select[name*='day'] {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 90px;
            flex: 0 0 90px;
  }
}
@media (max-width: 540px) {
  .bb-profile-wrap.loading:before {
    font-size: 20px;
  }

  .left-vertical-tabs [data-balloon]:before,
  .left-vertical-tabs [data-balloon]:after {
    display: none;
  }

  .vdp-datepicker .vdp-datepicker__calendar .cell {
    font-size: 10px;
  }

  .vdp-datepicker .vdp-datepicker__calendar .cell.selected.day:before, .vdp-datepicker .vdp-datepicker__calendar .cell.selected.highlighted.day:before, .vdp-datepicker .vdp-datepicker__calendar .cell.selected:hover.day:before {
    height: 24px;
    width: 24px;
    top: 8px;
  }

  .vdp-datepicker .vdp-datepicker__calendar .cell.day-header {
    font-size: 8px;
    font-weight: bold;
  }

  .bb-profile-avatar-wrap + .button-wrap {
    text-align: center;
  }
  .bb-profile-avatar-wrap + .button-wrap .button {
    margin-bottom: 10px;
  }

  #buddypress #profile-edit-form .field-visibility-settings-toggle > span {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  #buddypress #profile-edit-form label, #buddypress #profile-edit-form legend {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 0;
  }

  #buddypress #profile-edit-form .field-visibility-settings-toggle select {
    text-align: left;
    direction: inherit;
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
    position: static;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 10px;
    padding-left: 0;
  }

  #buddypress #profile-edit-form input[type="text"], #buddypress #profile-edit-form select {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  #buddypress #profile-edit-form .datebox-selects {
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }

  #buddypress #profile-edit-form .datebox-selects select:not(:last-child) {
    margin-right: 0;
    margin-bottom: 12px;
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }
}
@media (max-width: 380px) {
  .bs-settings-container .button-wrap input[type="button"] {
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .settings-messages .message {
    font-size: 13px;
  }
  .settings-messages .message code {
    font-size: 13px;
  }

  .bb-profile-section .bs-dropdown-link .bs-dropdown-link {
    font-size: 11px;
  }

  .bb-profile-section i {
    font-size: 12px;
    margin-right: 3px;
  }

  span.push-right.field-visibility {
    margin: 0;
  }

  .settings #buddypress .settings-header {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .settings #buddypress .settings-header > .button {
    margin: 10px auto 0;
  }
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.buddypress-wrap .bp-tables-report tr th {
  font-size: 14px;
}

body #buddypress a.export-csv {
  background-color: #007CFF;
  color: #fff;
  font-size: 14px;
  border-radius: 100px;
  padding: 10px 30px;
  text-decoration: none;
  display: inline-block;
  line-height: 1.3;
  outline: none;
  vertical-align: middle;
  -webkit-appearance: none;
  -webkit-transition: 0.3s all;
          transition: 0.3s all;
}
body #buddypress a.export-csv:hover {
  box-shadow: inset 0 0 0 99999px rgba(0, 0, 0, 0.1);
}

.bs-bp-container-reg #buddypress #signup-form.standard-form {
  overflow: hidden;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form > p {
  font-size: 14px;
  line-height: 21px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form p.description {
  margin: 0 0 12px 0;
  background: transparent;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form #basic-details-section.register-section,
.bs-bp-container-reg #buddypress #signup-form.standard-form #profile-details-section.register-section {
  float: none;
  margin: 0 auto;
  width: 100%;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form #basic-details-section.register-section > h2,
.bs-bp-container-reg #buddypress #signup-form.standard-form #profile-details-section.register-section > h2 {
  margin-bottom: 0.5rem;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form #basic-details-section.register-section {
  margin-bottom: 0;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form #profile-details-section.register-section .editfield {
  margin-top: 0;
  margin-bottom: 0;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=color],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=date],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=datetime-local],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=datetime],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=email],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=month],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=number],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=password],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=range],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=search],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=tel],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=text],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=time],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=url],
.bs-bp-container-reg #buddypress #signup-form.standard-form input[type=week],
.bs-bp-container-reg #buddypress #signup-form.standard-form select,
.bs-bp-container-reg #buddypress #signup-form.standard-form textarea {
  display: inline-block;
  width: 100%;
  font-family: inherit;
  font-size: 15px;
  height: 40px;
  outline: none;
  vertical-align: middle;
  background-color: #fff;
  border: 1px solid #DEDFE2;
  border-radius: 3px;
  box-shadow: none;
  padding: 0 12px;
  margin-bottom: 12px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form input#signup_blog_url {
  margin-bottom: 0;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form select {
  padding-right: 30px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .datebox-selects select {
  width: auto;
}
@media (max-width: 544px) {
  .bs-bp-container-reg #buddypress #signup-form.standard-form .datebox-selects select {
    width: 100%;
    margin-bottom: 10px;
  }
}
.bs-bp-container-reg #buddypress #signup-form.standard-form fieldset {
  margin-top: 0;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form label,
.bs-bp-container-reg #buddypress #signup-form.standard-form legend {
  font-weight: normal;
  font-size: 14px;
  color: #122B46;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .radio-button-options label {
  line-height: 1;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .checkbox-options label,
.bs-bp-container-reg #buddypress #signup-form.standard-form .radio-button-options label {
  margin-top: 8px;
  margin-bottom: 8px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .submit input[type=submit],
.bs-bp-container-reg #buddypress #signup-form.standard-form button {
  font-size: 14px;
  margin-right: 0;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form button {
  padding: 6px 20px;
  min-height: 34px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .field-visibility-settings-toggle {
  font-size: 12px;
  margin-top: 0.3rem;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .field-visibility-settings-toggle button {
  font-size: 12px;
  font-weight: normal;
  background: none;
  background-color: none;
  color: #A1ABB5;
  border: 0;
  min-height: auto;
  padding: 0;
  border-radius: 0;
  line-height: 1.6875rem;
  vertical-align: baseline;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form a.clear-value {
  font-size: 12px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .register-section > h2 {
  font-size: 18px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap.html-active .wp-editor-tabs button {
  border-color: #ddd;
  border-bottom: 0;
  background-color: transparent;
  border-radius: 3px 3px 0 0;
  box-shadow: none;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap.html-active .wp-editor-tabs button.switch-html {
  background-color: #FBFBFC;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap.tmce-active .wp-editor-tabs button {
  border-color: #ddd;
  border-bottom: 0;
  background-color: transparent;
  border-radius: 3px 3px 0 0;
  box-shadow: none;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap.tmce-active button.switch-tmce {
  background-color: #FBFBFC;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-tabs button {
  border-radius: 0;
  padding: 0 15px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container {
  border-radius: 3px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar {
  background-color: #FBFBFC;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-btn-group .mce-btn:focus,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-btn-group .mce-btn:hover,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .qt-dfw:focus, .bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .qt-dfw:hover,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-btn-group .mce-btn:focus,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-btn-group .mce-btn:hover,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .qt-dfw:focus,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .qt-dfw:hover {
  box-shadow: none;
  border-color: transparent;
  color: rgba(18, 43, 70, 0.8);
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-btn-group .mce-btn:focus .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-btn-group .mce-btn:hover .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .qt-dfw:focus .mce-ico, .bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .qt-dfw:hover .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-btn-group .mce-btn:focus .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-btn-group .mce-btn:hover .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .qt-dfw:focus .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .qt-dfw:hover .mce-ico {
  color: rgba(18, 43, 70, 0.8);
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-btn-group .mce-btn.mce-disabled:focus,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-btn-group .mce-btn.mce-disabled:hover,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-btn-group .mce-btn.mce-disabled:focus,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-btn-group .mce-btn.mce-disabled:hover {
  color: rgba(18, 43, 70, 0.4);
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-btn-group .mce-btn.mce-disabled:focus .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-btn-group .mce-btn.mce-disabled:hover .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-btn-group .mce-btn.mce-disabled:focus .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-btn-group .mce-btn.mce-disabled:hover .mce-ico {
  color: rgba(18, 43, 70, 0.4);
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel .mce-toolbar .mce-ico,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar .mce-toolbar .mce-ico {
  color: rgba(18, 43, 70, 0.4);
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .mce-panel button i,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container .quicktags-toolbar button i {
  font-size: 16px;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container button,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container input[type=button] {
  background-color: transparent;
  border-color: transparent;
  border-radius: 0;
  padding: 0 8px;
  color: rgba(18, 43, 70, 0.4);
  box-shadow: none;
  min-height: 30px;
  -webkit-transition: all linear .2s;
          transition: all linear .2s;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container button:hover,
.bs-bp-container-reg #buddypress #signup-form.standard-form .wp-editor-wrap .wp-editor-container input[type=button]:hover {
  color: rgba(18, 43, 70, 0.8);
}
.bs-bp-container-reg #buddypress #signup-form.standard-form div.error {
  background-color: #EF3E46;
  color: #fff;
  width: 100%;
  border-radius: 3px;
  font-size: 14px;
  padding: 6px 12px;
  margin-bottom: 3px;
  border: 0;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form div.error .error {
  padding: 0;
  border: 0;
  border-radius: 0;
  width: auto;
  margin: 0;
  background: transparent;
  line-height: 1;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form div.error span.bp-icon {
  margin-right: 0;
  display: none;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form div.error p {
  padding: 0;
  margin: 0;
  line-height: 1.6875rem;
}
.bs-bp-container-reg #buddypress #signup-form.standard-form .submit {
  padding: 25px 0 0;
}

.bs-bp-container-reg .buddypress-wrap #pass-strength-result.short,
.bs-bp-container-reg .buddypress-wrap #pass-strength-result.show {
  font-weight: normal;
  background-color: #e0e1e1;
  border-color: #e0e1e1;
  border-radius: 3px;
  font-size: 14px;
}

.bs-bp-container-reg .buddypress-wrap #pass-strength-result.short {
  background-color: #EF3E46;
  border-color: #EF3E46;
  color: #fff;
}

.bs-bp-container-reg .buddypress-wrap #pass-strength-result.strong {
  background-color: #1CD991;
  border-color: #1CD991;
  color: #fff;
  font-weight: normal !important;
}

.bs-bp-container-reg .buddypress-wrap .bp-messages.info {
  background-color: #007CFF;
  border-color: #007CFF;
}
.bs-bp-container-reg .buddypress-wrap .bp-messages.info .bp-icon {
  background-color: #007CFF;
  margin-right: 0px;
}
.bs-bp-container-reg .buddypress-wrap .bp-messages.info .bp-icon:before {
  font-family: 'bb-icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  list-style: none;
  -webkit-font-smoothing: antialiased;
  content: "\e8c2";
}
.bs-bp-container-reg .buddypress-wrap .bp-messages.info p {
  color: #fff;
}

body.buddypress.register article.bp_register {
  max-width: 450px;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
body.buddypress.register article.bp_register .entry-header {
  margin-bottom: 1.2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
body.buddypress.register article.bp_register .entry-header h1 {
  font-size: 20px;
  margin-right: auto;
}
body.buddypress.register article.bp_register .entry-header span {
  font-size: 14px;
  text-transform: lowercase;
}

body.buddypress.register .register-section-logo {
  width: 48%;
  max-width: 450px;
  text-align: center;
  margin: 0 auto 1.7rem;
}
body.buddypress.register .register-section-logo img {
  max-width: 320px;
  width: 22%;
}
body.buddypress.register .register-section-logo span {
  background-size: contain;
  width: 84px;
  /*height: 84px;*/
  height: auto;
  display: block;
  background-position: center top;
  background-repeat: no-repeat;
  margin: auto;
}
body.buddypress.register .register-section-logo .bs-register-section-logo {
  visibility: hidden;
  width: 100%;
}
body.buddypress.register .register-section-logo a {
  font-size: 20px;
  line-height: 1.3em;
}

body.buddypress.register.login-split-page .login-split {
  display: none;
}

.register-section.extended-profile .wp-editor-wrap,
.register-section.extended-profile .checkbox-options,
.register-section.extended-profile .radio-button-options {
  margin-bottom: 12px;
}

@media (min-width: 992px) {
  body.buddypress.register.login-split-page {
    min-height: 100%;
  }
  body.buddypress.register.login-split-page .site-content {
    padding: 0;
    min-height: 100vh;
    height: 100%;
  }
  body.buddypress.register.login-split-page .container {
    max-width: none;
    padding: 0;
    height: 100%;
  }
  body.buddypress.register.login-split-page .bb-grid {
    margin: 0;
    height: 100%;
  }
  body.buddypress.register.login-split-page .login-split {
    padding: 0;
    width: 50%;
    position: fixed;
    left: 0px;
    height: 100%;
    display: block;
  }
  body.buddypress.register.login-split-page #primary {
    position: static;
    margin-left: 50%;
  }
  body.buddypress.register.login-split-page .bs-bp-container-reg {
    padding-left: 0;
    padding-right: 0;
  }
  body.buddypress.register.login-split-page .register-section-logo {
    margin-right: 0;
    margin-left: 50px;
    margin-top: 50px;
    min-width: 320px;
    text-align: left;
  }
  body.buddypress.register.login-split-page article.bp_register {
    margin-right: 0;
    margin-left: 50px;
    min-width: 320px;
  }
  body.buddypress.register.login-split-page .submit input[type=submit] {
    width: 100%;
  }

  body.buddypress.register.login-split-page .login-split .split-overlay {
    width: 100%;
    height: 100%;
    background-color: #000000;
    position: relative;
    z-index: 1;
    opacity: 0;
  }

  body.buddypress.register.login-split-page .login-split div {
    color: #fff;
  }

  body.buddypress.register.login-split-page .login-split > div:not(.split-overlay) {
    display: block;
    width: 50%;
    max-width: 300px;
    margin: 0 auto;
    padding: 8% 0 0;
    font-size: 32px;
    line-height: 1.15;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 9;
    margin: auto;
  }

  body.buddypress.register.login-split-page .login-split > div > span {
    font-size: 16px;
    line-height: 1.4;
    display: block;
    margin-top: 20px;
  }
}
@media (max-width: 800px) {
  body.buddypress.register article.bp_register {
    width: 90%;
  }

  body.buddypress.register .register-section-logo {
    width: 90%;
  }
}
@media (max-width: 544px) {
  body.buddypress.register article.bp_register {
    width: 100%;
  }

  body.buddypress.register .register-section-logo {
    width: 100%;
  }
}
body.register .registration-popup.bb-modal {
  max-width: 800px;
}

body.buddypress.activation article.bp_activate {
  max-width: 450px;
  width: 48%;
  margin-left: auto;
  margin-right: auto;
}
body.buddypress.activation article.bp_activate .entry-header {
  margin-bottom: 1.2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
body.buddypress.activation article.bp_activate .entry-header h1 {
  font-size: 20px;
  margin-right: auto;
}
body.buddypress.activation article.bp_activate .entry-header span {
  font-size: 14px;
  text-transform: lowercase;
}
body.buddypress.activation article.bp_activate label {
  font-weight: normal;
  font-size: 14px;
}

body.buddypress.activation .site {
  min-height: initial;
}

body.buddypress.activation .activate-section-logo {
  width: 48%;
  max-width: 450px;
  text-align: center;
  margin: 0 auto 1.7rem;
}
body.buddypress.activation .activate-section-logo img {
  max-width: 320px;
  width: 22%;
}
body.buddypress.activation .activate-section-logo span {
  background-size: contain;
  width: 84px;
  /*height: 84px;*/
  height: auto;
  display: block;
  background-position: center top;
  background-repeat: no-repeat;
  margin: auto;
}
body.buddypress.activation .activate-section-logo a {
  font-size: 20px;
  line-height: 1.3em;
}

body.buddypress.activation.login-split-page .login-split {
  display: none;
}

@media (min-width: 992px) {
  body.buddypress.activation.login-split-page {
    height: 100%;
  }
  body.buddypress.activation.login-split-page .site-content {
    padding: 0;
    min-height: initial;
    height: 100%;
  }
  body.buddypress.activation.login-split-page .container {
    max-width: none;
    padding: 0;
    height: 100%;
  }
  body.buddypress.activation.login-split-page .bb-grid {
    margin: 0;
    height: 100%;
  }
  body.buddypress.activation.login-split-page .login-split {
    padding: 0;
    width: 50%;
    position: fixed;
    left: 0px;
    height: 100%;
    display: block;
  }
  body.buddypress.activation.login-split-page #primary {
    position: absolute;
    left: 50%;
  }
  body.buddypress.activation.login-split-page .bs-bp-container-reg {
    padding-left: 0;
    padding-right: 0;
  }
  body.buddypress.activation.login-split-page .activate-section-logo {
    margin-right: 0;
    margin-left: 50px;
    margin-top: 50px;
    min-width: 320px;
    text-align: left;
  }
  body.buddypress.activation.login-split-page article.bp_activate {
    margin-right: 0;
    margin-left: 50px;
    min-width: 320px;
  }
  body.buddypress.activation.login-split-page .submit input[type=submit] {
    width: 100%;
  }

  body.buddypress.activation.login-split-page .login-split .split-overlay {
    width: 100%;
    height: 100%;
    background-color: #000000;
    position: relative;
    z-index: 1;
    opacity: 0;
  }

  body.buddypress.activation.login-split-page .login-split div {
    color: #fff;
  }

  body.buddypress.activation.login-split-page .login-split > div:not(.split-overlay) {
    display: block;
    width: 50%;
    max-width: 300px;
    margin: 0 auto;
    padding: 8% 0 0;
    font-size: 32px;
    line-height: 1.15;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 9;
    margin: auto;
  }

  body.buddypress.activation.login-split-page .login-split > div > span {
    font-size: 16px;
    line-height: 1.4;
    display: block;
    margin-top: 20px;
  }
}
@media (max-width: 800px) {
  body.buddypress.activation article.bp_activate {
    width: 90%;
  }

  body.buddypress.activation .activate-section-logo {
    width: 90%;
  }
}
@media (max-width: 544px) {
  body.buddypress.activation article.bp_activate {
    width: 100%;
  }

  body.buddypress.activation .activate-section-logo {
    width: 100%;
  }
}
body.group-create .site-content > .container {
  max-width: 100%;
}
body.group-create .content-area {
  padding-top: 0;
}
body.group-create #buddypress .item-body {
  margin: 0;
}
body.group-create #group-invites-container .total-members-text,
body.group-create #group-invites-container input.select2-search__field,
body.group-create #group-invites-container label.bp-group-invite-label {
  margin: 0;
}
body.group-create .bb-groups-invites-left .bb-panel-head {
  min-height: 66px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
body.group-create .bb-groups-invites-left .bb-panel-subhead {
  width: 100%;
}
body.group-create #group-invites-container .bb-groups-invites-left #members-list {
  max-height: 67vh;
}
body.group-create #send_group_invite_form .select2-selection__rendered {
  max-height: 200px;
}

.bb-create-group-container {
  margin: 0 -20px;
}
.bb-create-group-container div#profile_cover {
  padding-top: 22%;
}
.bb-create-group-container div#profile_cover:before {
  background: #EEF0F3;
}
#group-create-body .bb-create-group-container .dz-default {
  min-height: 1px;
  background: transparent;
  border: 0;
  line-height: 1;
}
#group-create-body .bb-create-group-container .dz-default span:before {
  background: url(../images/svg/group-avatar.svg) no-repeat;
  margin: 0;
  width: 65px;
  height: 60px;
}
#group-create-body .bb-create-group-container .dz-default.dz-message {
  font-size: 0;
}
.bb-create-group-container .bb-profile-cover-wrap .more-actions,
.bb-create-group-container #bb_profile_avatar_wrap .more-actions {
  top: 50%;
  left: 0;
  right: 0;
  margin: auto;
  margin-top: 40px;
  max-width: 240px;
  font-size: 16px;
  text-align: center;
  z-index: 22;
}
.bb-create-group-container .bb-profile-cover-wrap .croppie-container,
.bb-create-group-container #bb_profile_avatar_wrap .croppie-container {
  border-radius: 0;
}
.bb-create-group-container .bb-profile-cover-wrap .bb-icon-menu-dots-v,
.bb-create-group-container #bb_profile_avatar_wrap .bb-icon-menu-dots-v {
  font-family: inherit;
  font-size: 16px;
  color: rgba(77, 92, 109, 0.63);
  letter-spacing: -0.24px;
  right: 0;
  top: 0;
}
.bb-create-group-container .bb-profile-cover-wrap .bb-icon-menu-dots-v:before,
.bb-create-group-container #bb_profile_avatar_wrap .bb-icon-menu-dots-v:before {
  content: '';
}
.bb-create-group-container .bb-profile-cover-wrap .bs-dropdown,
.bb-create-group-container #bb_profile_avatar_wrap .bs-dropdown {
  top: 35px;
  left: 0;
  right: 0;
  margin: auto;
  max-width: 160px;
}
.bb-create-group-container .bb-profile-cover-wrap .bs-dropdown:after,
.bb-create-group-container #bb_profile_avatar_wrap .bs-dropdown:after {
  right: 0;
  left: 0;
}
.bb-create-group-container #bb-profile-avatar-wrap-components div#profile_avatar {
  background: #EEF0F3;
  border: 2px solid rgba(255, 255, 255, 0.37);
  box-shadow: 0 4px 12px 0 #D0D3D6;
  border-radius: 5px;
}
.bb-create-group-container .bb-profile-avatar-wrap,
.bb-create-group-container #bb-profile-avatar-wrap-components {
  height: 200px;
  width: 200px;
  overflow: visible;
}
.bb-create-group-container .bb-profile-avatar-wrap {
  margin-left: 150px;
  margin-top: -162px;
}
.bb-create-group-container #bb-profile-avatar-wrap-components div#profile_avatar:before {
  display: none;
}
.bb-create-group-container .bb-profile-avatar-wrap .dz-default span {
  display: block;
}
.bb-create-group-container .bb-profile-wrap .croppie-container .cr-boundary {
  border: 1px solid #fff;
  border-radius: 5px;
}
.bb-create-group-container .bb-privary-box {
  background: #fff;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.12);
  border-radius: 4px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  min-width: 160px;
  min-height: 130px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-flow: column;
      flex-flow: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: relative;
  cursor: pointer;
}
.bb-create-group-container .bb-privary-box .bb-text {
  opacity: 0.5;
  color: #4D5C6D;
  line-height: 1;
  margin-top: 15px;
}
.bb-create-group-container .bb-privary-box svg {
  opacity: 0.5;
}

div#profile_cover {
  border-radius: 4px;
  padding-top: 36.47%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  overflow: hidden;
  margin-bottom: 2rem;
  z-index: 5;
}
div#profile_cover:before {
  background: rgba(18, 43, 70, 0.3);
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
}

.bb-profile-avatar-wrap {
  position: relative;
  margin-left: 45px;
  margin-top: -155px;
  height: 152px;
  width: 152px;
}

div#profile_avatar {
  background-size: cover;
  background-repeat: no-repeat;
  border: 2px solid #fff;
  position: relative;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  z-index: 5;
}

#group-create-body #bb_profile_avatar_wrap .dz-default span:before {
  background: url(../images/svg/group-profile.svg) no-repeat;
  margin-top: -20px;
}

.bb-profile-wrap .croppie-container .cr-overlay {
  background: rgba(0, 0, 0, 0.3);
}

.bb-create-group-container #bb_profile_avatar_wrap .dz-started ~ div .bb-icon-menu-dots-v,
.bb-profile-cover-wrap .dz-started ~ div .bb-icon-menu-dots-v {
  color: #fff;
}

#create-group-form.standard-form .bb-create-group-details-wrap {
  max-width: 750px;
  margin: auto;
  padding: 80px 15px 0;
}
#create-group-form.standard-form .bb-create-group-details-wrap .bb-field-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  margin: 0 0 30px;
  padding: 0;
  font-size: 14px;
  color: #4D5C6D;
  letter-spacing: -0.24px;
  line-height: 1.57;
}
#create-group-form.standard-form .bb-create-group-details-wrap .bb-field-wrap > label {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 200px;
          flex: 0 0 200px;
  margin: 0;
  padding: 0;
  font-size: 14px;
  font-weight: 500;
  color: #4D5C6D;
  letter-spacing: -0.24px;
  cursor: pointer;
}
#create-group-form.standard-form .bb-create-group-details-wrap .bb-field-input {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}
#create-group-form.standard-form .bb-create-group-details-wrap .bb-field-input label {
  font-size: 14px;
  color: #4D5C6D;
  font-weight: 500;
  letter-spacing: -0.24px;
  cursor: pointer;
  /*            -webkit-font-smoothing: antialiased;
              -moz-osx-font-smoothing: grayscale;*/
}
#create-group-form.standard-form .bb-create-group-details-wrap input,
#create-group-form.standard-form .bb-create-group-details-wrap select {
  height: 48px;
  font-size: 14px;
  letter-spacing: -0.24px;
  padding: 10px 15px;
}
#create-group-form.standard-form .bb-create-group-details-wrap textarea {
  height: 145px;
  resize: none;
  font-size: 14px;
  letter-spacing: -0.24px;
  padding: 10px 15px;
}
#create-group-form.standard-form .bb-create-group-details-wrap .bb-field-inner-wrap {
  margin-bottom: 20px;
}
#create-group-form.standard-form .bb-create-group-details-wrap .bb-field-inner-wrap:last-child {
  margin-bottom: 0;
}
#create-group-form.standard-form .bb-create-group-details-wrap .bb-field-inner-wrap span {
  color: #939597;
}
#create-group-form.standard-form .bb-create-group-details-wrap .bb-field-inner-wrap .checked + span {
  color: #4D5C6D;
}
#create-group-form.standard-form .bb-create-group-details-wrap input.button {
  min-width: 200px;
}
#create-group-form.standard-form .bb-create-group-details-wrap a.cancel {
  margin-right: 25px;
}
#create-group-form.standard-form .bb-create-group-details-wrap .group-create-privacy .radio {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}
#create-group-form.standard-form .bb-create-group-details-wrap .group-create-privacy .radio .bb-field-inner-wrap {
  margin-right: 10px;
}
#create-group-form.standard-form .bb-create-group-details-wrap .group-create-privacy .checked + .bb-privary-box {
  box-shadow: 0 7px 16px 0 rgba(0, 0, 0, 0.12), inset 0 -2px 0 0 #007CFF;
}
#create-group-form.standard-form .bb-create-group-details-wrap .group-create-privacy .checked + .bb-privary-box svg {
  opacity: 1;
}
#create-group-form.standard-form .bb-create-group-details-wrap .group-create-privacy .checked + .bb-privary-box .bb-text {
  opacity: 1;
}

#content form.standard-form .left-menu #invite-list ul {
  margin: 0;
}

#content form.standard-form .left-menu #invite-list ul li {
  margin: 0 0 15px;
}

#content div#invite-list {
  background: transparent;
  height: auto;
  margin: 0;
  overflow: auto;
  padding: 0 20px 20px;
  width: auto;
  max-height: 500px;
}
#content div#invite-list ul {
  margin: 0;
  list-style: none;
}
#content div#invite-list .avatar {
  max-width: 40px;
  border-radius: 50%;
  margin-right: 10px;
}
#content div#invite-list label {
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
#content div#invite-list .bb-name-wrap span {
  display: block;
}
#content div#invite-list .bb-name {
  font-size: 16px;
  color: #4D5C6D;
  letter-spacing: -0.24px;
  line-height: 1;
}
#content div#invite-list .bb-mention {
  font-size: 13px;
  font-weight: 300;
  color: rgba(0, 0, 0, 0.3);
  letter-spacing: -0.24px;
  line-height: 1;
  margin-top: 3px;
}
#content div#invite-list .bb-input-wrap {
  margin-left: auto;
}
#content div#invite-list .bb-input-wrap input {
  position: absolute;
  opacity: 0;
}
#content div#invite-list .bb-check-icon {
  display: inline-block;
  width: 22px;
  height: 22px;
  background: url(../images/svg/circle-add.svg) no-repeat;
  background-size: cover;
  border: 0;
  border-radius: 0;
  margin-right: 0;
}
#content div#invite-list input:checked + .bb-check-icon {
  background-image: url(../images/svg/circle-select.svg);
  opacity: 0.5;
}

ul#friend-list .avatar {
  border-radius: 50%;
  max-width: 52px;
}
ul#friend-list .bb-user-avatar {
  margin-right: 15px;
}

.bb-invite-search {
  padding: 20px;
}

.bb-invite-user-meta h2 {
  color: #122B46;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: -0.24px;
  line-height: 1.2;
  /*        -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;*/
  margin: 0;
}
.bb-invite-user-meta h2 a {
  color: inherit;
}
.bb-invite-user-meta .bb-activity {
  display: block;
  font-size: 13px;
  font-weight: 300;
  color: rgba(0, 0, 0, 0.3);
  letter-spacing: -0.24px;
  line-height: 1;
  margin-top: 3px;
}

#send-invite-form ul#friend-list li {
  border-bottom: 1px solid #eaeaea;
  padding: 20px 0;
}

#buddypress div.pagination .pag-count {
  margin-left: 0;
}

.invite-action {
  margin-left: auto;
}

.main-column.hide {
  display: none;
}

div#group-step-popup {
  max-width: 600px;
  padding: 40px;
}
div#group-step-popup #content div#invite-list {
  max-height: 45vh;
}
div#group-step-popup .bb-invite-search input {
  width: 100%;
}
div#group-step-popup .bb-input-wrap input {
  width: 26px;
  height: 26px;
  background: url(../images/svg/circle-add.svg) no-repeat;
  background-size: cover;
  border: 0;
  border-radius: 0;
  margin-right: 0;
  display: block;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
div#group-step-popup .bb-input-wrap input:checked {
  background-image: url(../images/svg/circle-select.svg);
  opacity: 0.5;
}
div#group-step-popup #content div#invite-list .avatar {
  max-width: 44px;
  margin-right: 20px;
}
div#group-step-popup #content form.standard-form .left-menu #invite-list ul li {
  margin: 0;
  border-bottom: 1px solid #E7E9EC;
  padding-bottom: 20px;
  padding-top: 20px;
}
div#group-step-popup #content div#invite-list .bb-name {
  font-size: 18px;
}
div#group-step-popup #content div#invite-list .bb-mention {
  margin-top: 6px;
}
div#group-step-popup input#groups_invite_search {
  height: 50px;
}
div#group-step-popup .bb-search-title {
  font-size: 30px;
  color: #4D5C6D;
  letter-spacing: -0.23px;
  text-align: center;
  line-height: 40px;
  margin-bottom: 5px;
}
div#group-step-popup .mfp-close {
  background: transparent;
}
div#group-step-popup .mfp-close:hover {
  background: transparent;
}

.group-step-buttons {
  text-align: center;
}
.group-step-buttons input.button {
  min-width: 180px;
  min-height: 46px;
}

.bb-no-fiends {
  font-size: 14px;
}

/* Manage Group */
#buddypress .bb-group-settings {
  font-size: 16px;
}
#buddypress .bb-group-settings .bs-styled-checkbox + label {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
#buddypress .bb-group-settings .bs-styled-checkbox:checked + label:before {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 20px;
          flex: 0 0 20px;
}
#buddypress .bb-group-settings .bb-field-title {
  font-size: 18px;
  font-weight: 500;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 15px;
}
#buddypress .bb-group-settings .bs-styled-radio:checked + label:after,
#buddypress .bb-group-settings .bs-styled-radio:checked + .bb-radio-label:after {
  top: 4px;
}
#content #buddypress .bb-group-settings .action .button {
  min-width: 20px;
  display: inline-block;
  font-size: 12px;
  min-height: 20px;
  padding: 4px 12px;
}
#content #buddypress .bb-group-settings .bs-item-wrap div.action {
  padding: 0;
}
#content #buddypress .bb-group-settings .bs-item-wrap .bs-generic-button {
  margin: 0 5px 0 0;
}
#buddypress .bb-group-settings .bs-item-wrap > .item > .item-title {
  margin-bottom: 5px;
}
#buddypress .bb-group-settings .item-title a {
  font-size: 18px;
}
#buddypress .bb-group-settings .bs-item-list.list-view {
  margin-bottom: 30px;
}
#buddypress .bb-group-settings .bs-members-items .bs-generic-button {
  margin-right: 5px;
}
#buddypress .bb-group-settings .item-title {
  position: relative;
}
#buddypress .bb-group-settings .bs-members-items.list-view .bb-profile-card div.action {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
}
#buddypress .bb-group-settings .bs-members-items.list-view .bb-profile-card div.action a {
  font-size: 13px;
}

.groups.edit-details div#secondary {
  /*display: none;*/
}

.group-create-privacy label {
  font-weight: 500;
}

.bb-group-desc {
  font-size: 13px;
  margin: 0 0 30px 53px;
  line-height: 1.6;
}

.bb-delete-group-wrap {
  margin: 30px 0;
}

.bb-create-group-container div.bb-profile-avatar-wrap:first-child {
  margin: 50px auto 0;
}

p.group-setting-label {
  outline: none;
  margin: 0 0 12px;
}

#create-group-form #group-create-body select {
  width: auto;
  min-width: 50%;
  margin: 0 0 8px;
}

.groups.group-create .buddypress-wrap .group-status-type ul:last-child {
  margin-bottom: 0;
}

.groups.group-create .buddypress-wrap .group-status-type label {
  font-size: 16px;
  line-height: 1;
}

.groups.group-create .buddypress-wrap .submit {
  padding: 0;
}

#bp-delete-cover-image-container {
  margin-bottom: 30px;
}

#create-group-form > .bp-messages {
  margin-bottom: 30px;
}

@media (max-width: 1080px) {
  .bb-create-group-cover-wrap div#profile_cover {
    padding-top: 28%;
  }

  .bb-create-group-container .bb-profile-avatar-wrap {
    margin-left: 60px;
  }

  #send-invite-form .left-menu {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 240px;
            flex: 0 0 240px;
  }

  #content div#invite-list .avatar {
    max-width: 36px;
  }

  #content div#invite-list .bb-name {
    font-size: 14px;
  }

  .invite-action {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    padding-left: 67px;
    padding-top: 6px;
  }

  #buddypress a.button.small.remove {
    font-size: 13px;
    min-height: 30px;
    padding: 5px 20px;
  }

  .bb-invite-user-meta .bb-activity {
    font-size: 11px;
  }
}
@media (min-width: 800px) and (max-width: 920px) {
  .invite-action.invite-action {
    padding-left: 0;
  }
}
@media (max-width: 820px) {
  .bb-create-group-container .bb-privary-box {
    min-width: 130px;
    min-height: 100px;
  }

  #create-group-form.standard-form .bb-create-group-details-wrap .bb-field-wrap > label {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 150px;
            flex: 0 0 150px;
  }
}
@media (max-width: 760px) {
  .bb-create-group-cover-wrap div#profile_cover {
    padding-top: 32%;
  }

  .bb-create-group-container .bb-profile-avatar-wrap,
  .bb-create-group-container #bb-profile-avatar-wrap-components {
    height: 160px;
    width: 160px;
  }

  .bb-create-group-container #bb_profile_avatar_wrap .bb-icon-menu-dots-v {
    font-size: 12px;
  }
}
@media (max-width: 640px) {
  .bb-create-group-container .bb-profile-avatar-wrap {
    margin: 0 auto;
    margin-top: -50px;
  }

  .bb-create-group-cover-wrap div#profile_cover {
    padding-top: 45%;
  }

  #create-group-form.standard-form .bb-create-group-details-wrap .bb-field-wrap > label {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    margin-bottom: 10px;
  }
}
@media (max-width: 580px) {
  #send-invite-form .left-menu {
    border-right: 0;
    border-bottom: 1px solid #E7E9EC;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  div#group-step-popup {
    padding: 30px;
  }
}
@media (max-width: 440px) {
  .bb-create-group-cover-wrap div#profile_cover {
    padding-top: 60%;
  }
}
body.bp-search .buddypanel {
  z-index: 611;
}
body.bp-search .site-header {
  z-index: 610;
}
body.bp-search .bp-search-ac-header {
  box-shadow: 0 1px 0 0 rgba(139, 141, 157, 0.05), 0 5px 10px 0 rgba(65, 71, 108, 0.15);
  display: block;
  left: 0 !important;
  padding: 10px 0;
  right: 0;
  width: 100vw !important;
  z-index: 50;
}
body.bp-search .bp-search-ac-header > li:not(.bbls-view_all_type-type) {
  max-width: 1190px;
  margin: auto;
  width: -webkit-calc(100% - 68px);
  width: calc(100% - 68px);
}
body.bp-search .bp-search-ac-header > li.bbls-view_all_type-type {
  margin-top: 10px;
  margin-bottom: -10px;
  text-align: center;
}
body.bp-search .bp-search-ac-header img {
  border-radius: 50%;
}
@media (min-width: 800px) {
  body.bp-search.bb-buddypanel .bp-search-ac-header {
    left: 68px !important;
    width: -webkit-calc(100vw - 68px) !important;
    width: calc(100vw - 68px) !important;
  }
  body.bp-search.buddypanel-open .bp-search-ac-header {
    left: 220px !important;
    width: -webkit-calc(100vw - 220px) !important;
    width: calc(100vw - 220px) !important;
  }
}
body.bp-search .bbls-category a {
  font-size: 12px;
  font-weight: 600;
  color: #939597;
  letter-spacing: 0.7px;
  text-transform: uppercase;
}
body.bp-search .bp-search-ac .item-avatar img {
  max-width: 48px;
  min-height: 48px;
  width: 100%;
  height: auto;
}

.members-group-list .item-entry-header {
  font-size: 18px;
  color: #122B46;
}

.activity-user {
  /*color: $color-headings;*/
  font-weight: 500;
}

.item-title.activity-content p:last-child {
  margin: 0;
}

.bp-search-results-list li:first-child .list-wrap {
  border-radius: 0 !important;
}
#buddypress .bp-search-results-list .list-wrap {
  border-left: 0;
  border-right: 0;
  box-shadow: none;
  padding-left: 0;
  padding-right: 0;
}
.bp-search-results-list .bp-search-item .item-avatar {
  max-width: 90px;
  width: 100%;
}
.bp-search-results-list .bp-search-item .item-avatar a {
  border-radius: 3px;
  display: block;
  margin-right: 15px;
  max-width: 100%;
  min-height: 90px;
  overflow: hidden;
  position: relative;
  width: 100%;
  height: auto;
}
.bp-search-results-list .bp-search-item .item-avatar img {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 0;
  min-height: 100%;
  width: auto;
  min-width: 100%;
  object-fit: cover;
}
.bp-search-results-list .entry-summary {
  font-size: 14px;
  /*font-weight: 300;*/
  color: #939597;
  letter-spacing: -0.24px;
  line-height: 1.3;
  margin-bottom: 6px;
}
.bp-search-results-list .entry-content {
  float: none;
  width: auto;
  word-break: break-word;
}
.bp-search-results-list .fluid-width-video-wrapper {
  min-width: 240px;
  margin: 0 !important;
}
.bp-search-results-list .item-meta.activity-header {
  margin-bottom: 0 !important;
}
.bp-search-results-list .bp-search-item .entry-meta, .bp-search-results-list .bp-search-item .entry-meta a, .bp-search-results-list .bp-search-item .entry-meta span,
.bp-search-results-list .bp-search-item .item-tags,
.bp-search-results-list .bp-search-item .item-tags a,
.bp-search-results-list .bp-search-item .item-tags span {
  font-size: 13px;
  color: #939597;
  letter-spacing: 0;
  line-height: 1.3;
}
.bp-search-results-list .bp-search-item .entry-meta span.middot,
.bp-search-results-list .bp-search-item .item-tags span.middot {
  display: inline-block;
  margin: 0 6px;
  font-size: 17px;
  color: #C3C6C9;
  line-height: 0;
}
.bp-search-results-list .bp-search-item .item-tags {
  margin-top: 5px;
}
.bp-search-results-list .entry-content:last-child {
  margin: 0;
}

.search-results .bp-list li .item-meta {
  font-size: 13px;
  font-weight: 400;
}
.search-results .pag-count {
  float: left;
  margin: 0 0 10px;
}
.search-results .pag-data {
  color: #A3A5A9;
  font-size: 13px;
}
.search-results .pagination {
  float: right;
  margin: 0 0 10px;
}
.search-results .pagination-links a,
.search-results .pagination-links span {
  color: #007CFF;
  padding: 0;
  border: 0;
  font-size: 13px;
  padding: 0 5px;
}
.search-results .pagination-links .current {
  color: #A3A5A9;
}
.search-results .item-meta.last-activity {
  font-size: 13px;
}

#buddypress .dir-form.bp-search-results-wrapper {
  margin-top: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  margin-bottom: 30px;
}

#buddypress .bp-search-results-wrapper .bp-navs {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 260px;
          flex: 0 0 260px;
  background: #FBFBFC;
  border-right: 1px solid #E7E9EC;
  border-bottom: 0;
  min-height: 60vh;
  border-radius: 4px 0 0 4px;
  margin: 0;
  padding: 30px 0;
}
#buddypress .bp-search-results-wrapper .bp-navs li {
  float: none;
  padding: 0;
}
#buddypress .bp-search-results-wrapper .bp-navs a {
  border: 0;
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 16px 20px;
  line-height: 1;
  margin-bottom: 1px;
}
#buddypress .bp-search-results-wrapper .bp-navs a:before {
  content: '\e96A';
  font: normal normal normal 14px/1 "bb-icons";
  speak: none;
  display: inline-block;
  font-size: 18px;
  margin-right: 10px;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 22px;
  text-align: center;
}
@media only screen and (max-width: 768px) {
  #buddypress .bp-search-results-wrapper .bp-navs a:before {
    display: none;
  }
}
#buddypress .bp-search-results-wrapper .bp-navs a:hover {
  background: rgba(77, 92, 109, 0.1);
  color: #007CFF;
}
#buddypress .bp-search-results-wrapper .bp-navs li:first-child a:before {
  content: '\e96F';
}
#buddypress .bp-search-results-wrapper .bp-navs .activity a:before {
  content: '\e854';
}
#buddypress .bp-search-results-wrapper .bp-navs .activity_comment a:before {
  content: '\e967';
}
#buddypress .bp-search-results-wrapper .bp-navs .members a:before {
  content: '\e96D';
}
#buddypress .bp-search-results-wrapper .bp-navs .groups a:before {
  content: '\e96B';
}
#buddypress .bp-search-results-wrapper .bp-navs .forum a:before,
#buddypress .bp-search-results-wrapper .bp-navs .topic a:before {
  content: '\e969';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-product a:before {
  content: '\e970';
  -webkit-transform: scale(1.1);
      -ms-transform: scale(1.1);
          transform: scale(1.1);
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-bp-member-type a:before {
  content: '\e971';
}
#buddypress .bp-search-results-wrapper .bp-navs .posts a:before {
  content: '\e965';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-page a:before {
  content: '\e96A';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-sfwd-courses a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-course a:before {
  content: '\e957';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-sfwd-lessons a:before {
  content: '\e968';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-sfwd-topic a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-lesson a:before {
  content: '\e96C';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-sfwd-quiz a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-llms_quiz a:before {
  content: '\e956';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-wp-parser-function a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-wp-parser-class a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-wp-parser-hook a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-wp-parser-method a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-command a:before {
  content: '\e977';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-llms_assignment a:before {
  content: '\e96C';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-llms_membership a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-memberpressproduct a:before {
  content: '\e96E';
}
#buddypress .bp-search-results-wrapper .bp-navs .cpt-llms_certificate a:before,
#buddypress .bp-search-results-wrapper .bp-navs .cpt-llms_my_certificate a:before {
  content: '\e975';
}
#buddypress .bp-search-results-wrapper .bp-navs ul.subnav {
  width: 100%;
}
@media only screen and (max-width: 900px) {
  #buddypress .bp-search-results-wrapper .bp-navs ul.subnav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
}
#buddypress .bp-search-results-wrapper .bp-navs .current a,
#buddypress .bp-search-results-wrapper .bp-navs .selected a {
  background: rgba(77, 92, 109, 0.1);
  color: #007CFF;
  font-weight: 400;
}

.search-results-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.search-results-header .bp-search-form-wrapper {
  margin-bottom: 1.6875rem;
}

.bp-search-page .bp-navs ul li .count {
  margin-left: auto;
}

.buddypress-wrap .members-list li .member-name,
.bp-search-results-list .bp-search-item .item-title {
  margin-bottom: 6px;
  margin-top: 0;
  word-break: break-word;
  font-size: 14px;
  color: #122B46;
  letter-spacing: -0.21px;
  line-height: 1.35;
}

.entry-title.item-title a:empty {
  display: none;
}

.results-group {
  margin-bottom: 40px;
}

.bp-search-page .results-group ul#activity-stream li.activity-item {
  padding: 0;
}

#buddypress .bp-search-form-wrapper .bp-dir-search-form input[type=search] {
  border: 0;
  background-color: transparent;
  padding-left: 32px;
  font-size: 14px;
  height: 34px;
}

#buddypress header.results-group-header {
  background: #fff;
  border-bottom: 0;
  border-radius: 3px 3px 0 0;
  padding: 0 0 20px;
}
#buddypress header.results-group-header .results-group-title {
  font-family: inherit;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0.25px;
  line-height: 1;
  margin: 0;
  text-transform: uppercase;
}

.search_results {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 35px 40px 10px;
  min-width: 0;
}
.search_results .avatar {
  border-radius: 0;
}
.search_results .item-title a {
  font-size: inherit;
}
.search_results div.item-avatar a {
  display: block;
}

.total-results {
  font-size: 12px;
  color: #122B46;
  letter-spacing: 0.25px;
  line-height: 1;
}

#buddypress ul.bp-search-results-list {
  margin-bottom: 0;
  padding-bottom: 0;
}

.bp-search-results-wrap .view-all-link {
  color: #007CFF;
  font-size: 14px;
  letter-spacing: -0.22px;
}
.bp-search-results-wrap .view-all-link:hover, .bp-search-results-wrap .view-all-link:focus {
  color: #007CFF;
}
.bp-search-results-wrap .view-all-link:after {
  content: '\e87b';
  font: normal normal normal 14px/1 "bb-icons";
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #999;
  margin-left: 2px;
}

body.bp-search .bp-search-ac-header .bbls-undefined-type {
  padding: 5px 10px;
  margin: 5px auto 0 !important;
}

.bp-search-ac .loading-msg {
  padding: 10px 20px;
}

.bp-search-ac.ui-menu .ui-menu-item .bp-search-ajax-item.noresult {
  font-weight: 500;
  font-size: 14px;
  color: #122B46;
  padding: 10px;
}

.bp-search-results-wrapper .bp-navs.bp-subnavs {
  float: left;
  margin: 0 0 30px;
  width: auto;
}

.bp-search-results-wrapper .bp-search-form-wrapper {
  float: right;
  margin: 0 0 30px;
}

.bp-search-results-list .bp-search-item .item-desc {
  font-size: 13px;
  font-weight: 300;
  color: #A3A5A9;
}

.bp-search-ac.ui-menu .ui-menu-item.ui-state-focus,
.bp-search-ac.ui-menu .ui-menu-item.ui-state-hover,
.bp-search-ac.ui-menu .ui-menu-item:hover {
  background: #F7FAFE;
}

.bp-search-ajax-item .item-title {
  font-size: 14px;
  color: #122B46;
  letter-spacing: -0.24px;
}

.bp-search-ajax-item .item .item-desc,
.bp-search-ajax-item .item .item-tags {
  font-size: 12px;
  color: #A3A5A9;
  letter-spacing: -0.18px;
}

.bp-search-results-wrap .results-group-footer {
  margin-top: 15px;
}

/* Activity Results */
.bp-search-results-wrap.results-group-activity .activity-content .activity-header {
  margin-bottom: 4px;
}
.bp-search-results-wrap.results-group-activity .activity-header a {
  text-transform: capitalize;
}
.bp-search-results-wrap.results-group-activity .activity-inner {
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.24px;
  line-height: 1.3;
}
.bp-search-results-wrap.results-group-activity li .item {
  margin-bottom: 0;
}
.bp-search-results-wrap.results-group-activity time {
  font-size: 13px;
  font-weight: 400;
}
.bp-search-results-wrap.results-group-activity .activity-item .activity-avatar {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 90px;
          flex: 0 0 90px;
}
.bp-search-results-wrap.results-group-activity .activity-avatar img {
  max-width: 100%;
}

/* Activity Comments Result */
.bp-search-results-wrap.results-group-activity_comment .activity-header a {
  letter-spacing: 0;
  text-transform: capitalize;
}
.bp-search-results-wrap.results-group-activity_comment .activity-inner {
  font-size: 14px;
  color: #939597;
  letter-spacing: -0.21px;
  line-height: 1.42;
}
.bp-search-results-wrap.results-group-activity_comment .activity-inner a {
  color: inherit;
}
.bp-search-results-wrap.results-group-activity_comment .activity-inner a:hover {
  color: #007CFF;
}
.bp-search-results-wrap.results-group-activity_comment .activity-inner p {
  margin: 0 0 5px;
}

/* Groups Result */
.bp-search-results-wrap.results-group-cpt-product span.entry-meta {
  margin: 4px 0;
}
.bp-search-results-wrap.results-group-cpt-product .rating-custom .woocommerce-product-rating .star-rating {
  margin: 0 0 5px;
}
.bp-search-results-wrap.results-group-cpt-product .rating-custom .star-rating {
  font-size: 14px;
}
.bp-search-results-wrap.results-group-cpt-product .star-rating span {
  color: #FFD21A;
}
.bp-search-results-wrap.results-group-cpt-product .product-sale {
  line-height: 1;
  margin-top: 2px;
}
.bp-search-results-wrap.results-group-cpt-product .product-sale .onsale {
  background: #3EBC7D;
  border-radius: 4px;
  font-size: 11px;
  color: #FFFFFF;
  letter-spacing: -0.24px;
  display: inline-block;
  line-height: 1;
  padding: 3px 6px;
}

/* Groups Result */
.bp-search-results-wrap.results-group-cpt-sfwd-courses dd.course_progress {
  height: 4px;
  margin: 0 0 8px;
  max-width: 220px;
  width: 100%;
}
.bp-search-results-wrap.results-group-cpt-sfwd-courses .course_progress_blue {
  background: #05D786;
}
.bp-search-results-wrap.results-group-cpt-sfwd-courses .entry-meta {
  margin-bottom: 6px;
}

.bp-search-page .results-group ul#activity-stream li.activity-item .activity-inner {
  margin-bottom: 6px;
}

#buddypress .bp-search-results-list.groups-list .avatar {
  border-radius: 3px;
}

.bp-search-item.bp-search-item_sfwd-topic .entry-summary,
.bp-search-item.bp-search-item_sfwd-lessons .entry-summary {
  font-size: 13px;
}

.bp-search-ac.ui-autocomplete.bp-forum-search-ac-header {
  border-radius: 10px;
  border: 0;
}

.bp-search-results-list .learndash-wrapper.learndash-widget {
  display: none;
}

@media screen and (max-width: 900px) {
  #buddypress .bp-search-results-wrapper .bp-navs {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    min-height: 10px;
    border-right: 0;
    border-radius: 4px 4px 0 0;
    padding: 0;
  }

  #buddypress .bp-search-results-wrapper .bp-navs li {
    float: left;
  }

  .bp-search-page .bp-navs ul li .count {
    margin-left: 10px;
  }

  .search_results {
    padding: 30px;
  }
}
@media (max-width: 640px) {
  #buddypress .bp-search-results-wrapper .search_filters > ul {
    padding-right: 0;
  }

  .bp-search-results-wrapper .bp-navs.bp-subnavs {
    margin-bottom: 20px;
  }

  .bp-search-results-wrapper .bp-navs.bp-subnavs,
  .bp-search-results-wrapper .bp-search-form-wrapper {
    float: none;
  }
}
.directory.media .subnav-filters .subnav-search {
  position: absolute;
  right: 0;
  top: 0;
  margin: 0;
}
.directory.media .dir-search.media-search.bp-search {
  margin: 0;
}
.directory.media #buddypress #dir-media-search {
  border: 0;
  background-color: transparent;
  padding-left: 32px;
  font-size: 14px;
  height: 34px;
}

.bb-media-container {
  background: #fff;
  border: 1px solid #E7E9EC;
  border-radius: 4px;
  padding: 20px;
  margin-bottom: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
      flex-flow: column;
}
.bb-media-container #subnav {
  margin: 20px -20px;
  width: auto;
  padding: 0 20px;
}

.bb-media-actions-wrap {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 0;
  -webkit-box-ordinal-group: 0;
      -ms-flex-order: -1;
          order: -1;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
#buddypress .bb-media-actions-wrap .bb-title {
  margin: 0;
}
.groups.single-item .bb-media-actions-wrap {
  margin-bottom: 20px;
}

#buddypress .media-list.item-list {
  margin-bottom: 0;
  padding-top: 0;
  margin-left: -10px;
  margin-right: -10px;
}
#buddypress .bb-photo-list li {
  margin-bottom: 20px;
  margin-top: 0;
  padding: 0 10px;
}
#buddypress .bb-photo-cover-wrap {
  border-radius: 3px;
}
#buddypress .bb-photo-thumb {
  box-shadow: 0 3px 12px -1px rgba(7, 10, 25, 0.2), 0 22px 27px -20px rgba(7, 10, 25, 0.2);
  -webkit-transition: all .3s ease;
          transition: all .3s ease;
}
#buddypress .bb-photo-thumb:hover {
  box-shadow: 0 15px 45px -5px rgba(7, 10, 25, 0.25);
  -webkit-filter: brightness(1.07);
          filter: brightness(1.07);
  -webkit-transform: translate(0, -2px);
      -ms-transform: translate(0, -2px);
          transform: translate(0, -2px);
}

.single.media.albums .bb-media-container #subnav {
  margin-top: -10px;
}

.bb-media-actions-wrap.album-actions-wrap {
  margin-bottom: 30px;
}

.dropzone .dz-default {
  background: rgba(240, 243, 247, 0.5);
  border: 1px dashed #dedfe2;
  border-radius: 6px;
  min-height: 20vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 16px;
  color: #122b46;
  letter-spacing: -0.24px;
  line-height: 26px;
  padding: 20px 0;
}
.dropzone .dz-default:before {
  display: none;
}
.dropzone .dz-default span {
  margin-top: 0;
}
.dropzone .dz-default span:before {
  background: url(../images/svg/upload.svg) no-repeat;
  background-size: cover;
  content: " ";
  height: 41px;
  width: 48px;
  display: block;
  margin: 0 auto 15px;
}

#buddypress .bb-model-header h4 {
  margin: 0;
}

#boss-media-create-album-popup .bb-model-header {
  margin-bottom: 25px;
}
#boss-media-create-album-popup .media-uploader-wrapper {
  max-height: 48vh;
  overflow-x: hidden;
  overflow-y: auto;
}

.bbm-uploader-model-wrap .media-uploader-wrapper {
  max-height: 48vh;
  overflow-x: hidden;
  overflow-y: auto;
}

.bb-photos-meta {
  margin-bottom: 20px;
}
.bb-photos-meta .bb-delete {
  line-height: 1;
}
.bb-photos-meta .bb-delete i {
  font-size: 24px;
}
.bb-photos-meta .bb-select i {
  font-size: 12px;
}
.bb-photos-meta .bb-select.selected i {
  background: #007CFF;
  color: #fff;
  border-color: #007CFF;
}

.bb-photos-meta i {
  font-size: 22px;
}

.bb-photos-meta .bb-icon-select {
  font-size: 18px;
}

.bb-media-check-wrap .dashicons {
  font: normal normal normal 14px/1 "bb-icons";
  speak: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  border: 1px solid #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.bb-media-check-wrap .dashicons:before {
  content: '\E876';
}
.selected .bb-media-check-wrap .dashicons {
  background-color: #007CFF;
}

.modal-container .bp-existing-media-wrap {
  margin-bottom: 0;
  padding: 30px 0;
}

.bb-model-header {
  margin-bottom: 0;
}

.bb-model-footer .button {
  margin-top: 20px;
}
.bb-model-footer .bb-dropdown-wrap {
  margin-bottom: 5px;
}

.bb-photo-thumb label {
  display: block;
}

.bp-media-upload-tab-content {
  padding-top: 30px;
}

.modal-container .dropzone {
  margin-bottom: 0;
}
.modal-container .bp-media-upload-tab {
  font-weight: 500;
  font-size: 15px;
  color: #939597;
}
.modal-container .bp-media-upload-tab.selected {
  color: #122B46;
}

.activity-list.loading .dashicons-update {
  font-family: 'bb-icons';
}
.activity-list.loading .dashicons-update:before {
  content: '\E838';
}

#buddypress .bb-photo-list li.load-more {
  margin: 20px auto 10px;
  text-align: center;
}

.bb-member-photos-header {
  margin-top: 0;
}
.groups.single-item .bb-member-photos-header {
  /*margin-top: 20px;*/
}

.bb-groups-invites-left .bb-panel-head {
  position: relative;
  border-bottom: 1px solid #e7e9ec;
  padding: 15px 20px;
}
.bb-groups-invites-left .bb-panel-subhead {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 4px 0px;
}
.bb-groups-invites-left span.select-members-text {
  font-size: 13px;
}
.bb-groups-invites-left .bb-title-wrap {
  margin: -20px -20px 20px;
  border-bottom: 1px solid #E7E9EC;
  padding: 20px;
}
.bb-groups-invites-left .bs-styled-checkbox + label:before {
  vertical-align: middle;
}
.bb-groups-invites-left .bs-styled-checkbox:checked + label:after {
  top: 4px;
}
.bb-groups-invites-left #members-list.item-list .item-avatar img {
  max-width: 45px;
}
.bb-groups-invites-left input#group_invites_search {
  background-size: 14px;
  background-position: left 12px center;
  background-color: #FBFBFC;
  height: 32px;
}

#item-body .total-members-text {
  font-size: 18px;
  font-weight: 500;
  letter-spacing: -0.24px;
  margin: 0;
}

.bb-groups-invites-right-top {
  min-height: 222px;
}
.bb-groups-invites-right-top div.bp-feedback {
  background: #fbfbfc;
}

#send_group_invite_form .bb-groups-invites-right-top .bb-title {
  margin: 0;
  line-height: 1.4;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: -0.24px;
}

.bb-groups-invites-right .bb-title-wrap {
  margin: -20px -20px 20px;
  border-bottom: 1px solid #E7E9EC;
  padding: 20px;
}

#buddypress input#bp_invites_reset {
  background: transparent;
  color: #007CFF;
  border: 1px solid #007CFF;
  box-shadow: none;
}

#group-invites-container .bb-groups-invites-left .group-invites-members-listing .action button {
  background: url(../images/svg/circle-add.svg) no-repeat;
  height: 26px;
  width: 26px;
  background-size: contain;
  padding: 0;
  min-width: 26px;
}

#group-invites-container .bb-groups-invites-left .group-invites-members-listing li.selected .action button {
  background: url(../images/svg/circle-close.svg) no-repeat;
}

#group-invites-container .bb-groups-invites-left .group-invites-members-listing .action button .icons {
  opacity: 0;
}

#send_group_invite_form .select2-selection__choice__remove {
  font-size: 0;
  padding: 1px 0 0 0;
}
#send_group_invite_form .select2-selection__choice__remove:before {
  content: '\e828';
  font-family: 'bb-icons';
  font-size: 14px;
  line-height: 1;
  color: #4d5c6d;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
      justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
      align-items: center;
  -webkit-font-smoothing: antialiased;
}

#bp-group-invite-content #whats-new-toolbar {
  padding: 20px;
  position: absolute;
  bottom: 0;
  right: 0;
}

#group-invites-new-submit {
  padding: 0;
}
#group-invites-new-submit #bp_invites_reset {
  margin: 0;
}

#bp-invites-dropdown-options-loader {
  margin-left: auto;
  margin-right: 10px;
  position: relative;
  top: 3px;
}
#bp-invites-dropdown-options-loader .dashicons-update:before {
  content: '\e838';
  font-family: 'bb-icons';
  font-size: 20px;
  display: block;
  -webkit-transform: scale(0.8);
      -ms-transform: scale(0.8);
          transform: scale(0.8);
}

.group-invites-members-listing .bp-invites-feedback {
  padding: 0 20px;
}

.group-invites-members-listing .dashicons-update:before {
  content: '\e838';
  font-family: 'bb-icons';
  font-size: 20px;
  display: block;
}

#buddypress #send_group_invite_form .select2-search__field {
  height: 30px;
}

body #buddypress .group-invites-members-listing .bp-list .action {
  max-width: 26px;
}

body.send-invites .select2-container .select2-dropdown {
  display: none;
}

.bb-more-invites-wrap .dashicons {
  margin-right: 5px;
}
.bb-more-invites-wrap .dashicons:before {
  content: '\e921';
  font: normal normal normal 18px/1 "bb-icons";
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  vertical-align: text-bottom;
}

.bb-panel-head {
  min-height: 66px;
}

.bb-groups-messages-left .bp-search {
  padding: 0 20px;
}
.bb-groups-messages-left select {
  height: 37px;
}
.bb-groups-messages-left .bp-list li .item-avatar {
  margin-right: 15px;
}
.bb-groups-messages-left #members-list.item-list .item-avatar img {
  max-width: 45px;
}

#item-body .total-members-text {
  font-size: 18px;
  font-weight: 500;
  letter-spacing: -0.24px;
}

#group_messages_search {
  background-size: 14px;
  background-position: left 12px center;
  background-color: #FBFBFC;
  height: 32px;
}

.bb-groups-messages-right .bb-title-wrap {
  margin: -20px -20px 20px;
  border-bottom: 1px solid #E7E9EC;
  padding: 20px;
}

.bb-groups-messages-right .group-messages-compose {
  font-size: 0;
}
.bb-groups-messages-right .group-messages-compose:after {
  content: "\E80C" !important;
  font-family: bb-icons !important;
  font-size: 22px;
  line-height: 20px;
  text-align: center;
}

#group-messages-container .bb-groups-messages-right-top .bb-title {
  margin: 0;
  line-height: 1.4;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: -0.24px;
}

label.bp-group-message-label {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.group-messages-members-listing .button {
  box-shadow: none !important;
}

a.bb-close-select-members.button {
  min-width: 110px;
}

.add-more-members .bb-add-members {
  font-size: 14px;
}
.add-more-members .bb-add-members .dashicons {
  margin-right: 5px;
}
.add-more-members .bb-add-members .dashicons:before {
  content: '\e921';
  font: normal normal normal 18px/1 "bb-icons";
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
@media screen and (max-width: 560px) {
  .add-more-members .bb-add-members {
    font-size: 12px;
  }
  .add-more-members .bb-add-members .dashicons:before {
    font-size: 16px;
  }
}

#group-messages-container .load-more .dashicons-update {
  font-family: "bb-icons";
}

#group-messages-container .load-more .dashicons-update:before {
  content: "\e838";
}

#send_group_message_form .select2-selection__choice__remove {
  font-size: 0;
  line-height: 1;
  margin: 0 0 0 8px;
}

#send_group_message_form .select2-selection__choice__remove:before {
  content: '\E828';
  font-family: "bb-icons";
  font-size: 13px;
  line-height: 1;
  background: #fff;
  border-radius: 50%;
  color: #4D5C6D;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-width: 13px;
  min-height: 13px;
  text-indent: -1px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.bb-groups-messages-right .medium-editor-element,
.bb-groups-messages-right .medium-editor-placeholder {
  padding: 0;
}
.bb-groups-messages-right .medium-editor-element pre,
.bb-groups-messages-right .medium-editor-placeholder pre {
  white-space: pre-wrap;
  position: relative;
  z-index: 1;
}
.bb-groups-messages-right .medium-editor-element pre p,
.bb-groups-messages-right .medium-editor-placeholder pre p {
  margin-bottom: 0;
}
.bb-groups-messages-right .group-messages-type {
  height: 34px !important;
}
.bb-groups-messages-right .standard-form .submit {
  padding: 0;
}
.bb-groups-messages-right div.bp-feedback {
  background: #fbfbfc;
}
.bb-groups-messages-right .bp-group-messages-attached-gif-container {
  margin-bottom: 20px;
}
.bb-groups-messages-right .bp-group-messages-attached-gif-container.closed {
  display: none;
}

#group-messages-container .group-messages-members-listing .item-list li {
  border-bottom: 0;
  margin: 0 -20px 1px;
  width: auto;
  padding: 8px 20px;
}

.bb-groups-messages-right #whats-new-toolbar {
  padding: 0;
  margin-top: auto;
}
.bb-groups-messages-right #whats-new-toolbar #send_group_message_button {
  margin: 0;
}
.bb-groups-messages-right #whats-new-toolbar .emojionearea .emojionearea-picker .emojionearea-search > input {
  outline: none;
  width: 100%;
  min-width: 100%;
  height: 30px;
}
.bb-groups-messages-right #whats-new-toolbar .gif-media-search-dropdown.open {
  margin: 0 0 10px -20px;
  top: auto;
  bottom: 100%;
  padding-bottom: 0;
  padding-top: 10px;
}
.bb-groups-messages-right #whats-new-toolbar .gif-media-search-dropdown:before {
  left: 38px;
  top: auto;
  bottom: -11px;
  -webkit-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
          transform: rotate(135deg);
}
.bb-groups-messages-right #whats-new-toolbar .gif-search-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column-reverse;
      flex-flow: column-reverse;
}
.bb-groups-messages-right #whats-new-toolbar .emojionearea .emojionearea-picker {
  top: auto;
  bottom: 40px;
}
.bb-groups-messages-right #whats-new-toolbar .emojionearea .emojionearea-picker.emojionearea-filters-position-top .emojionearea-filters {
  top: auto;
  bottom: 0;
}
.bb-groups-messages-right #whats-new-toolbar .emojionearea .emojionearea-picker .emojionearea-search-panel {
  top: auto;
  bottom: 40px;
}
.bb-groups-messages-right #whats-new-toolbar .emojionearea .emojionearea-picker.emojionearea-filters-position-top.emojionearea-search-position-top .emojionearea-scroll-area {
  bottom: auto;
  top: 0;
}
.bb-groups-messages-right #whats-new-toolbar .emojionearea .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
  bottom: -10px;
  top: auto;
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg);
}
body #buddypress #item-body blockquote,
body #buddypress .bp-lists blockquote {
    margin-left: 10px
}

body #buddypress .bp-list .action {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

@media screen and (min-width:46.8em) {
    body.buddypress .entry-content,
    body.buddypress .entry-header,
    body.buddypress .site-content .entry-header {
        max-width: none
    }
    body.buddypress .entry-header {
        float: none;
        max-width: none
    }
    body.buddypress .entry-content {
        float: none;
        max-width: none
    }
    body.buddypress .site-content {
        padding-top: 2.5em
    }
    body.buddypress #page #primary {
        max-width: none
    }
    body.buddypress #page #primary .entry-content,
    body.buddypress #page #primary .entry-header {
        float: none;
        width: auto
    }
}

.bp-wrap:after,
.bp-wrap:before {
    content: " ";
    display: table
}

.bp-wrap:after {
    clear: both
}

body.buddypress article.page>.entry-header {
    margin-bottom: 2em;
    padding: 0
}

body.buddypress article.page>.entry-header .entry-title {
    font-size: 28px;
    font-weight: inherit;
    color: #767676
}

@media screen and (min-width:46.8em) {
    body.buddypress article.page>.entry-header .entry-title {
        font-size: 34px
    }
}

.buddypress-wrap dt.section-title {
    font-size: 18px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap dt.section-title {
        font-size: 22px
    }
}

.buddypress-wrap .bp-label-text,
.buddypress-wrap .message-threads {
    font-size: 13px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .bp-label-text,
    .buddypress-wrap .message-threads {
        font-size: 16px
    }
}

.buddypress-wrap .activity-header {
    font-size: 13px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .activity-header {
        font-size: 16px
    }
}

.buddypress-wrap .activity-inner {
    font-size: 15px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .activity-inner {
        font-size: 18px
    }
}

.buddypress-wrap #whats-new-post-in {
    font-size: 16px
}

.buddypress-wrap .acomment-meta,
.buddypress-wrap .mini .activity-header {
    font-size: 16px
}

.buddypress-wrap .dir-component-filters #activity-filter-by {
    font-size: 13px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .dir-component-filters #activity-filter-by {
        font-size: 16px
    }
}

.buddypress-wrap .bp-tables-report th,
.buddypress-wrap .bp-tables-user th {
    font-size: 13px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .bp-tables-report th,
    .buddypress-wrap .bp-tables-user th {
        font-size: 16px
    }
}

.buddypress-wrap .bp-tables-report td,
.buddypress-wrap .bp-tables-user td {
    font-size: 12px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .bp-tables-report td,
    .buddypress-wrap .bp-tables-user td {
        font-size: 14px
    }
}

.buddypress-wrap .profile-fields th {
    font-size: 15px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .profile-fields th {
        font-size: 18px
    }
}

.buddypress-wrap .profile-fields td {
    font-size: 13px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .profile-fields td {
        font-size: 16px
    }
}

.buddypress-wrap #notification-select {
    font-size: 12px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap #notification-select {
        font-size: 14px
    }
}

.bp-navs {
    background: 0 0;
    clear: both;
    overflow: hidden
}

.bp-navs ul {
    margin: 0;
    padding: 0
}

.bp-navs ul li {
    list-style: none;
    margin: 0
}

.bp-navs ul li.last select {
    max-width: 185px
}

.bp-navs ul li a,
.bp-navs ul li span {
    border: 0;
    display: block;
    padding: 5px 10px;
    text-decoration: none
}

.bp-navs ul li .count {
    background: #eaeaea;
    border: 1px solid #ccc;
    border-radius: 50%;
    color: #222;
    display: inline;
    font-size: 12px;
    margin-left: 2px;
    padding: 3px 6px;
    text-align: center;
    vertical-align: middle
}

.bp-navs ul li.current a,
.bp-navs ul li.selected a {
    color: #333;
    opacity: 1
}

.bp-navs.bp-invites-filters ul li a,
.bp-navs.bp-messages-filters ul li a {
    border: 1px solid #ccc;
    display: inline-block
}

.main-navs.dir-navs {
    margin-bottom: 20px
}

.buddypress-wrap .bp-navs li a:hover a .count,
.buddypress-wrap .bp-navs li.current a .count,
.buddypress-wrap .bp-navs li.selected a .count {
    background-color: #ccc
}

.buddypress-wrap .bp-navs li:not(.current) a:focus,
.buddypress-wrap .bp-navs li:not(.current) a:hover,
.buddypress-wrap .bp-navs li:not(.selected) a:focus,
.buddypress-wrap .bp-navs li:not(.selected) a:hover {
    background: #ccc;
    color: #333
}

.buddypress-wrap .bp-navs li.current a,
.buddypress-wrap .bp-navs li.current a:focus,
.buddypress-wrap .bp-navs li.current a:hover,
.buddypress-wrap .bp-navs li.selected a,
.buddypress-wrap .bp-navs li.selected a:focus,
.buddypress-wrap .bp-navs li.selected a:hover {
    background: #555;
    color: #fafafa
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .main-navs:not(.dir-navs) li.current a,
    .buddypress-wrap .main-navs:not(.dir-navs) li.selected a {
        background: #fff;
        color: #333;
        font-weight: 600
    }
    .buddypress-wrap .main-navs.vertical li.current a,
    .buddypress-wrap .main-navs.vertical li.selected a {
        background: #555;
        color: #fafafa;
        text-decoration: none
    }
    .buddypress-wrap.bp-dir-hori-nav:not(.bp-vertical-navs) nav {
        border-bottom: 1px solid #eee;
        border-top: 1px solid #eee;
        -webkit-box-shadow: 0 2px 12px 0 #fafafa;
        -moz-box-shadow: 0 2px 12px 0 #fafafa;
        box-shadow: 0 2px 12px 0 #fafafa
    }
}

.buddypress-wrap .bp-subnavs li.current a,
.buddypress-wrap .bp-subnavs li.selected a {
    background: #fff;
    color: #333;
    font-weight: 600
}

@media screen and (max-width:46.8em) {
    .buddypress-wrap:not(.bp-single-vert-nav) .bp-navs li {
        background: #eaeaea
    }
}

.buddypress-wrap:not(.bp-single-vert-nav) .main-navs>ul>li>a {
    padding: .7em calc(.5em + 2px)
}

.buddypress-wrap:not(.bp-single-vert-nav) .group-subnav#subsubnav,
.buddypress-wrap:not(.bp-single-vert-nav) .user-subnav#subsubnav {
    background: 0 0
}

.buddypress-wrap .bp-subnavs {
    margin: 10px 0;
    overflow: hidden
}

.buddypress-wrap .bp-subnavs ul li {
    margin-top: 0
}

.buddypress-wrap .bp-subnavs ul li.current:focus,
.buddypress-wrap .bp-subnavs ul li.current:hover,
.buddypress-wrap .bp-subnavs ul li.selected:focus,
.buddypress-wrap .bp-subnavs ul li.selected:hover {
    background: 0 0;
    color: #333
}

.buddypress-wrap .bp-navs.bp-invites-filters#subsubnav ul li.last,
.buddypress-wrap .bp-navs.bp-invites-nav#subnav ul li.last,
.buddypress-wrap .bp-navs.bp-messages-filters#subsubnav ul li.last {
    margin-top: 0
}

@media screen and (max-width:46.8em) {
    .buddypress-wrap .single-screen-navs {
        border: 1px solid #eee
    }
    .buddypress-wrap .single-screen-navs li {
        border-bottom: 1px solid #eee
    }
    .buddypress-wrap .single-screen-navs li:last-child {
        border-bottom: none
    }
    .buddypress-wrap .bp-subnavs li a {
        font-size: 14px
    }
    .buddypress-wrap .bp-subnavs li.current a,
    .buddypress-wrap .bp-subnavs li.current a:focus,
    .buddypress-wrap .bp-subnavs li.current a:hover,
    .buddypress-wrap .bp-subnavs li.selected a,
    .buddypress-wrap .bp-subnavs li.selected a:focus,
    .buddypress-wrap .bp-subnavs li.selected a:hover {
        background: #555;
        color: #fff
    }
}

.buddypress-wrap .bp-navs li.current a .count,
.buddypress-wrap .bp-navs li.selected a .count,
.buddypress_object_nav .bp-navs li.current a .count,
.buddypress_object_nav .bp-navs li.selected a .count {
    background-color: #fff
}

.buddypress-wrap .bp-navs li.dynamic a .count,
.buddypress-wrap .bp-navs li.dynamic.current a .count,
.buddypress-wrap .bp-navs li.dynamic.selected a .count,
.buddypress_object_nav .bp-navs li.dynamic a .count,
.buddypress_object_nav .bp-navs li.dynamic.current a .count,
.buddypress_object_nav .bp-navs li.dynamic.selected a .count {
    background-color: #5087e5;
    border: 0;
    color: #fafafa
}

.buddypress-wrap .bp-navs li.dynamic a:hover .count,
.buddypress_object_nav .bp-navs li.dynamic a:hover .count {
    background-color: #5087e5;
    border: 0;
    color: #fff
}

.buddypress-wrap .bp-navs li a .count:empty,
.buddypress_object_nav .bp-navs li a .count:empty {
    display: none
}

.buddypress-wrap .bp-navs.group-create-links ul li:not(.current),
.buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) {
    color: #767676
}

.buddypress-wrap .bp-navs.group-create-links ul li:not(.current) a,
.buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a {
    color: #767676
}

.buddypress-wrap .bp-navs.group-create-links ul li:not(.current) a:focus,
.buddypress-wrap .bp-navs.group-create-links ul li:not(.current) a:hover,
.buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a:focus,
.buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a:hover {
    background: 0 0;
    color: #333
}

.buddypress-wrap .bp-navs.group-create-links ul li:not(.current) a[disabled]:focus,
.buddypress-wrap .bp-navs.group-create-links ul li:not(.current) a[disabled]:hover,
.buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a[disabled]:focus,
.buddypress_object_nav .bp-navs.group-create-links ul li:not(.current) a[disabled]:hover {
    color: #767676
}

.buddypress-wrap .bp-navs.group-create-links ul li.current a,
.buddypress_object_nav .bp-navs.group-create-links ul li.current a {
    text-align: center
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .bp-navs li {
        float: left
    }
    .buddypress-wrap #subsubnav .activity-search {
        float: left
    }
    .buddypress-wrap #subsubnav .filter {
        float: right
    }
}

.buddypress_object_nav .bp-navs li a .count {
    display: inline-block;
    float: right
}

@media screen and (min-width:46.8em) {
    .bp-dir-vert-nav .bp-navs.dir-navs {
        background: 0 0
    }
    .bp-dir-vert-nav .bp-navs.dir-navs a .count {
        float: right
    }
}

.buddypress-wrap .dir-component-filters .filter label {
    display: inline
}

.buddypress-wrap .subnav-filters:after,
.buddypress-wrap .subnav-filters:before {
    content: " ";
    display: table
}

.buddypress-wrap .subnav-filters:after {
    clear: both
}

.buddypress-wrap .subnav-filters {
    background: 0 0;
    list-style: none;
    margin: 15px 0;
    padding: 0
}

.buddypress-wrap .subnav-filters div {
    margin: 0
}

.buddypress-wrap .subnav-filters>ul {
    float: left;
    list-style: none
}

.buddypress-wrap .subnav-filters.bp-messages-filters ul {
    width: 100%
}

.buddypress-wrap .subnav-filters.bp-messages-filters .messages-search {
    margin-bottom: 1em
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .subnav-filters.bp-messages-filters .messages-search {
        margin-bottom: 0
    }
}

.buddypress-wrap .subnav-filters div {
    float: none
}

.buddypress-wrap .subnav-filters div input[type=search],
.buddypress-wrap .subnav-filters div select {
    font-size: 16px
}

.buddypress-wrap .subnav-filters div button.nouveau-search-submit {
    padding: 5px .8em 6px
}

.buddypress-wrap .subnav-filters div button#user_messages_search_submit {
    padding: 7px .8em;
    width: auto
}

.buddypress-wrap .subnav-filters .component-filters {
    margin-top: 10px
}

.buddypress-wrap .subnav-filters .feed {
    margin-right: 15px
}

.buddypress-wrap .subnav-filters .last.filter label {
    display: inline
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-actions-wrap:after,
.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-actions-wrap:before {
    content: " ";
    display: table
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-actions-wrap:after {
    clear: both
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-actions-wrap.bp-show {
    display: inline-block
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-actions-wrap.bp-hide {
    display: none
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .select-wrap {
    border: 0
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .select-wrap:focus,
.buddypress-wrap .subnav-filters .user-messages-bulk-actions .select-wrap:hover {
    outline: 1px solid #d6d6d6
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-actions {
    float: left
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions label {
    display: inline-block;
    font-weight: 300;
    margin-right: 25px;
    padding: 5px 0
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions div select {
    -webkit-appearance: textfield
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-apply {
    border: 0;
    border-radius: none;
    font-weight: 400;
    line-height: 1.8;
    margin: 0 0 0 10px;
    padding: 3px 5px;
    text-align: center;
    text-transform: none;
    width: auto
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions .bulk-apply span {
    vertical-align: middle
}

.buddypress-wrap .subnav-filters .user-messages-bulk-actions input {
    margin-left: .5em
}

@media screen and (min-width:32em) {
    .buddypress-wrap .subnav-filters li {
        margin-bottom: 0
    }
    .buddypress-wrap .subnav-filters .bp-search,
    .buddypress-wrap .subnav-filters .dir-search,
    .buddypress-wrap .subnav-filters .feed,
    .buddypress-wrap .subnav-filters .group-act-search,
    .buddypress-wrap .subnav-filters .group-invites-search,
    .buddypress-wrap .subnav-filters .subnav-search,
    .buddypress-wrap .subnav-filters .subnav-search form,
    .buddypress-wrap .subnav-filters .user-messages-bulk-actions {
        float: left
    }
    .buddypress-wrap .subnav-filters .component-filters,
    .buddypress-wrap .subnav-filters .last {
        float: right;
        margin-top: 0;
        margin-left: 0;
        width: auto
    }
    .buddypress-wrap .subnav-filters .component-filters select,
    .buddypress-wrap .subnav-filters .last select {
        max-width: 250px
    }
}

.buddypress-wrap .notifications-options-nav input#notification-bulk-manage {
    border: 0;
    border-radius: 0;
    line-height: 1.6
}

.buddypress-wrap .group-subnav-filters .group-invites-search {
    margin-bottom: 1em
}

.buddypress-wrap .group-subnav-filters .last {
    text-align: center
}

@media screen and (max-width:32em) {
    .buddypress-wrap .subnav-filters .grid-filters {
        margin-top: 10px
    }
}

@media screen and (min-width:32em) {
    .buddypress-wrap .subnav-filters .grid-filters {
        float: right;
        padding: 0
    }
}

.buddypress-wrap .grid-filters {
    display: flex;
    align-items: center;
    border: 1px solid #eee;
    height: 36px
}

.buddypress-wrap .grid-filters a {
    border-bottom: 0;
    color: #ccc;
    padding: 0 6px;
    line-height: 36px
}

.buddypress-wrap .grid-filters a,
.buddypress-wrap .grid-filters a:active,
.buddypress-wrap .grid-filters a:focus {
    outline: 0
}

.buddypress-wrap .grid-filters a i {
    vertical-align: middle
}

.buddypress-wrap .grid-filters a.active {
    color: #222
}

a.layout-grid-view {
    border-right: 1px solid #eee
}

.flex.bp-secondary-header.align-items-center>.push-right.flex .no-ajax:last-child div div div {
    margin-right: 0
}

.buddypress-wrap .bp-pagination {
    background: 0 0;
    border: 0;
    color: #767676;
    float: left;
    font-size: small;
    margin: 0;
    padding: .7em 0;
    position: relative;
    width: 100%
}

.buddypress-wrap .bp-pagination .pag-count {
    float: left
}

.buddypress-wrap .bp-pagination .bp-pagination-links {
    float: right;
    margin-right: 10px
}

.buddypress-wrap .bp-pagination .bp-pagination-links a,
.buddypress-wrap .bp-pagination .bp-pagination-links span {
    font-size: small;
    padding: 0 5px
}

.buddypress-wrap .bp-pagination .bp-pagination-links a:focus,
.buddypress-wrap .bp-pagination .bp-pagination-links a:hover {
    opacity: 1
}

.buddypress-wrap .bp-pagination p {
    margin: 0
}

.bp-list:after,
.bp-list:before {
    content: " ";
    display: table
}

.bp-list:after {
    clear: both
}

.bp-list {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    clear: both;
    list-style: none;
    margin: 20px 0;
    padding: .7em 0;
    width: 100%
}

.bp-list li:after,
.bp-list li:before {
    content: " ";
    display: table
}

.bp-list li:after {
    clear: both
}

.bp-list>li {
    border-bottom: 1px solid #eaeaea
}

.bp-list li {
    list-style: none;
    margin: 10px 0;
    padding: .7em 0;
    position: relative
}

.bp-list li .item-avatar {
    text-align: center
}

.bp-list li .item-avatar img.avatar {
    display: inline
}

.bp-list li .item .group-details,
.bp-list li .item .item-avatar,
.bp-list li .item .item-meta,
.bp-list li .item .list-title {
    text-align: center
}

.bp-list li .item .list-title {
    clear: none;
    font-size: 22px;
    font-weight: 400;
    line-height: 1.1;
    margin: 0 auto
}

@media screen and (min-width:46.8em) {
    .bp-list li .item .list-title {
        font-size: 26px
    }
}

.bp-list li .item-meta,
.bp-list li .meta {
    color: #737373;
    font-size: 12px;
    margin-bottom: 10px;
    margin-top: 10px
}

.bp-list li .last-post {
    text-align: center
}

.bp-list li .action {
    margin: 0;
    text-align: center
}

.bp-list li .action .generic-button {
    display: inline-block;
    font-size: 12px;
    margin: 0 10px 0 0
}

.bp-list li .action div.generic-button {
    margin: 10px 0
}

@media screen and (min-width:46.8em) {
    .bp-list li .item-avatar {
        float: left;
        margin-right: 5%
    }
    .bp-list li .item {
        margin: 0;
        overflow: hidden
    }
    .bp-list li .item .item-meta,
    .bp-list li .item .list-title {
        float: none;
        text-align: left
    }
    .bp-list li .item .group-details,
    .bp-list li .item .last-post {
        text-align: left
    }
    .bp-list li .group-desc,
    .bp-list li .last-post,
    .bp-list li .user-update {
        clear: none;
        overflow: hidden;
        width: auto
    }
    .bp-list li .action {
        clear: left;
        padding: 0;
        text-align: left
    }
    .bp-list li .action li.generic-button {
        margin-right: 0
    }
    .bp-list li .action div.generic-button {
        margin: 0 0 10px
    }
    .bp-list li .generic-button {
        display: block;
        margin: 0 0 5px 0
    }
}

@media screen and (min-width:32em) {
    #activity-stream {
        clear: both;
        padding-top: 1em
    }
}

.activity-list.bp-list {
    background: #fafafa;
    border: 1px solid #eee
}

.activity-list.bp-list .activity-item {
    background: #fff;
    border: 1px solid #b7b7b7;
    -webkit-box-shadow: 0 0 6px #d2d2d2;
    -moz-box-shadow: 0 0 6px #d2d2d2;
    box-shadow: 0 0 6px #d2d2d2;
    margin: 20px 0
}

.activity-list.bp-list li:first-child {
    margin-top: 0
}

.friends-list {
    list-style-type: none
}

.friends-request-list .item-title,
.membership-requests-list .item-title {
    text-align: center
}

@media screen and (min-width:46.8em) {
    .friends-request-list li,
    .membership-requests-list li {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-flex-flow: row nowrap;
        -moz-flex-flow: row nowrap;
        -ms-flex-flow: row nowrap;
        -o-flex-flow: row nowrap;
        flex-flow: row nowrap
    }
    .friends-request-list li .item,
    .membership-requests-list li .item {
        -webkit-flex: 1 1 auto;
        -moz-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
        -o-flex: 1 1 auto;
        flex: 1 1 auto
    }
    .friends-request-list li .action,
    .membership-requests-list li .action {
        text-align: right
    }
    .friends-request-list li .item-title,
    .membership-requests-list li .item-title {
        font-size: 22px;
        text-align: left
    }
    .friends-request-list li .item-title h3,
    .membership-requests-list li .item-title h3 {
        margin: 0
    }
}

#notifications-user-list {
    clear: both;
    padding-top: 1em
}

@media screen and (min-width:46.8em) {
    body:not(.logged-in) .bp-list .item {
        margin-right: 0
    }
}

.activity-permalink .item-list,
.activity-permalink .item-list li.activity-item {
    border: 0
}

.item-body .activity-update-form .activity-form {
    margin: 0;
    padding: 0
}

.activity-update-form {
    border: 1px solid #ccc;
    -webkit-box-shadow: inset 0 0 6px #eee;
    -moz-box-shadow: inset 0 0 6px #eee;
    box-shadow: inset 0 0 6px #eee;
    margin: 15px 0
}

.activity-update-form #whats-new-avatar {
    border-bottom: 1px solid #ddd;
    padding: 10px;
    margin: 0
}

.activity-update-form #whats-new-avatar img {
    box-shadow: none;
    display: inline-block;
    margin-right: 10px;
    vertical-align: middle
}

.activity-update-form .activity-post-avatar {
    display: inline-block
}

.activity-update-form #whats-new {
    outline: 0;
    box-shadow: none;
    min-height: 80px;
    overflow: hidden;
    padding: 10px;
    resize: none!important
}

.activity-update-form #whats-new-content {
    padding: 0
}

.activity-update-form #whats-new-attachments {
    padding: 10px
}

.activity-update-form #whats-new-elements-buttons {
    margin: 1em 0
}

.activity-update-form #whats-new-elements-buttons ul {
    list-style: none
}

.activity-update-form #whats-new-elements-buttons ul li {
    display: inline-block
}

#whats-new-toolbar {
    padding: 10px
}

#whats-new-messages-toolbar,
#whats-new-toolbar {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

#whats-new-messages-toolbar .post-elements-buttons-item,
#whats-new-toolbar .post-elements-buttons-item {
    margin-right: 10px;
    position: relative
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar {
    top: inherit;
    bottom: 6px;
    left: 38px;
    visibility: hidden;
    z-index: 99;
    background-color: #fff;
    opacity: 0;
    transition: all ease .3s;
    height: 0;
    right: 0;
    overflow: hidden;
    border-radius: 0
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar.active,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar.active {
    display: block;
    border-radius: 0;
    z-index: 112;
    opacity: 1;
    visibility: visible;
    bottom: 10px;
    height: 40px
}

div .bbp-reply-form #whats-new-toolbar .medium-editor-toolbar.active,
div .bbp-topic-form #whats-new-toolbar .medium-editor-toolbar.active {
    bottom: 10px
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar.medium-editor-toolbar-active,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar.medium-editor-toolbar-active {
    opacity: 1
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions {
    background-color: transparent;
    height: auto
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button {
    box-shadow: none;
    padding: 10px 10px 10px 0;
    min-width: 30px;
    border: 0;
    background-color: transparent!important;
    color: rgba(18, 43, 70, .4)!important
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-button-active,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-button-active {
    color: #122b46!important;
    background: none transparent!important
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-action-close,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-action-close {
    padding-right: 0
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input {
    width: 210px;
    margin-bottom: 0;
    background-color: #fff;
    border: 1px solid #dedfe2;
    color: #4d5c6d
}

.bbp-reply-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input::-webkit-input-placeholder,
.bbp-topic-form #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input::-webkit-input-placeholder {
    color: #4d5c6d
}

.activity-update-form #whats-new-content {
    position: relative
}

.activity-update-form #whats-new-content .medium-editor-toolbar {
    top: inherit;
    bottom: -52px;
    left: 38px;
    visibility: hidden;
    z-index: 99;
    background-color: #fff;
    transition: all ease .3s;
    height: 0;
    right: 0;
    overflow: hidden;
    display: none
}

.activity-update-form #whats-new-content .medium-editor-toolbar.active {
    border-radius: 0;
    z-index: 112;
    visibility: visible;
    bottom: 0;
    height: 44px
}

div .activity-update-form #whats-new-content .medium-editor-toolbar.active {
    bottom: -51px
}

.activity-update-form #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-actions {
    background-color: transparent
}

.activity-update-form #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-actions button {
    box-shadow: none;
    padding: 10px 10px 10px 0;
    min-width: 30px;
    border: 0;
    background-color: transparent!important;
    color: rgba(18, 43, 70, .4)!important
}

.activity-update-form #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-button-active {
    color: #122b46!important;
    background: none transparent!important
}

.activity-update-form #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-action-close {
    padding-right: 0
}

.activity-update-form #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input {
    width: 210px;
    margin-bottom: 0;
    background-color: #fff;
    border: 1px solid #dedfe2;
    color: #4d5c6d
}

.activity-update-form #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input::-webkit-input-placeholder {
    color: #4d5c6d
}

.activity-update-form #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-form-active {
    position: absolute;
    bottom: -6px;
    box-shadow: none
}

.bbpress #bbpress-forums #whats-new-toolbar.media-off .medium-editor-toolbar,
.bp-messages-content #bp-message-content #whats-new-messages-toolbar .media-off+.medium-editor-toolbar,
.buddypress #buddypress.buddypress-wrap .activity-update-form.media-off #whats-new-content .medium-editor-toolbar,
.buddypress #buddypress.buddypress-wrap .bbp-reply-form #whats-new-toolbar.media-off .medium-editor-toolbar,
.buddypress #buddypress.buddypress-wrap .bbp-topic-form #whats-new-toolbar.media-off .medium-editor-toolbar {
    visibility: visible;
    height: 44px;
    left: 0;
    opacity: 1;
    border-radius: 0
}

.bbpress #bbpress-forums #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-actions,
.bp-messages-content #bp-message-content #whats-new-messages-toolbar .media-off+.medium-editor-toolbar .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .activity-update-form.media-off #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .bbp-reply-form #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .bbp-topic-form #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-actions {
    opacity: .4
}

.bbpress #bbpress-forums #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-actions li,
.bp-messages-content #bp-message-content #whats-new-messages-toolbar .media-off+.medium-editor-toolbar .medium-editor-toolbar-actions li,
.buddypress #buddypress.buddypress-wrap .activity-update-form.media-off #whats-new-content .medium-editor-toolbar .medium-editor-toolbar-actions li,
.buddypress #buddypress.buddypress-wrap .bbp-reply-form #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-actions li,
.buddypress #buddypress.buddypress-wrap .bbp-topic-form #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-actions li {
    pointer-events: none
}

.bbpress #bbpress-forums #whats-new-toolbar.media-off .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions,
.bp-messages-content #bp-message-content #whats-new-messages-toolbar .media-off+.medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .activity-update-form.media-off #whats-new-content .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .bbp-reply-form #whats-new-toolbar.media-off .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .bbp-topic-form #whats-new-toolbar.media-off .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions {
    opacity: 1
}

.bbpress #bbpress-forums #whats-new-toolbar.media-off .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions li,
.bp-messages-content #bp-message-content #whats-new-messages-toolbar .media-off+.medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions li,
.buddypress #buddypress.buddypress-wrap .activity-update-form.media-off #whats-new-content .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions li,
.buddypress #buddypress.buddypress-wrap .bbp-reply-form #whats-new-toolbar.media-off .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions li,
.buddypress #buddypress.buddypress-wrap .bbp-topic-form #whats-new-toolbar.media-off .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions li {
    pointer-events: auto
}

.buddypress #buddypress.buddypress-wrap .activity-update-form.media-off #whats-new-content .medium-editor-toolbar {
    bottom: -25px
}

.bp-messages-content #bp-message-content #whats-new-messages-toolbar .media-off+.medium-editor-toolbar {
    bottom: -24px;
    left: -15px
}

.activity-update-form .focus-in #whats-new-content .medium-editor-toolbar {
    display: block
}

#whats-new-textarea [contenteditable=true]:empty:before {
    content: attr(placeholder);
    color: #bbb;
    cursor: text;
    display: block
}

#activity-form-submit-wrapper {
    border-top: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    flex-flow: row wrap;
    align-items: center;
    padding: 0 10px
}

#whats-new-post-in-box {
    margin: 10px 0
}

#whats-new-post-in-box #whats-new-post-in-box-items {
    list-style: none;
    margin: 10px 0
}

#whats-new-post-in-box #whats-new-post-in-box-items li {
    margin-bottom: 10px
}

#whats-new-post-in-box #whats-new-post-in-box-items #activity-autocomplete {
    padding: .3em
}

#whats-new-post-in-box #whats-new-post-in-box-items .bp-activity-object {
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    align-items: center;
    padding: .2em
}

#whats-new-post-in-box #whats-new-post-in-box-items .bp-activity-object .avatar {
    width: 30px
}

#whats-new-post-in-box #whats-new-post-in-box-items .bp-activity-object span {
    padding-left: 10px;
    vertical-align: middle
}

#whats-new-post-in-box #whats-new-post-in-box-items .bp-activity-object:focus,
#whats-new-post-in-box #whats-new-post-in-box-items .bp-activity-object:hover {
    background: #eaeaea;
    cursor: pointer
}

#whats-new-post-in-box #whats-new-post-in-box-items .bp-activity-object.selected {
    border: 1px solid #d6d6d6
}

#whats-new-submit {
    margin: 10px 0;
    display: flex;
    flex-flow: row-reverse
}

#whats-new-submit input {
    font-size: 14px;
    line-height: 1
}

.gif-media-search {
    position: relative;
    max-width: 400px
}

div[class*=attached-gif-container] {
    position: relative
}

div[class*=attached-gif-container] .gif-image-remove {
    border-radius: 10px;
    cursor: pointer;
    height: 19px;
    right: 2px;
    top: 4px;
    width: 19px
}

div[class*=attached-gif-container] .gif-image-overlay {
    color: #fff;
    margin-top: 0;
    position: absolute
}

div[class*=attached-gif-container] .gif-player {
    position: relative;
    max-width: 480px
}

div[class*=attached-gif-container] .gif-player video {
    margin: 0;
    max-width: 100%
}

div[class*=attached-gif-container] .gif-play-button {
    height: 80px;
    width: 80px;
    position: absolute;
    left: 50%;
    margin-left: -40px;
    top: 50%;
    margin-top: -40px
}

div[class*=attached-gif-container] .gif-play-button span.dashicons {
    font-size: 80px;
    width: 80px;
    height: 80px;
    margin: 0;
    padding: 0;
    line-height: 0
}

div[class*=attached-gif-container] .gif-icon {
    background: url(../images/gif-symbol.png) bottom left no-repeat;
    position: absolute;
    width: 100%;
    height: 100%;
    display: block;
    bottom: 30px;
    left: 10px;
    background-size: 40px 30px;
    max-width: 40px;
    max-height: 30px
}

.gif-media-search-dropdown {
    position: absolute;
    top: 100%;
    z-index: 99;
    display: none;
    margin: 10px 0 0 -16px;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 2px 7px 1px rgba(0, 0, 0, .05), 0 6px 32px 0 rgba(18, 43, 70, .1);
    padding-bottom: 10px
}

.gif-media-search-dropdown.open {
    display: block;
    width: 300px
}

.gif-media-search-dropdown:before {
    content: " ";
    position: absolute;
    width: 0;
    height: 0;
    top: 1px;
    margin: 0 auto;
    left: 20px;
    box-sizing: border-box;
    border: 6px solid #000;
    border-color: #fff #fff transparent transparent;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    transform: rotate(-45deg);
    box-shadow: 2px -3px 3px 0 rgba(0, 0, 0, .02);
    transition: all linear .2s;
    z-index: 101
}

@media screen and (min-width:768px) {
    .gif-media-search-dropdown.open {
        width: 360px
    }
}

.gif-search-query {
    background-color: #fff;
    border-radius: 4px 4px 0 0;
    position: relative;
    padding: 10px;
    margin: 0
}

.gif-search-content .gif-search-results {
    padding: 0 10px;
    overflow: auto;
    min-height: 280px;
    max-height: 380px
}

.gif-search-content .gif-search-results ul {
    columns: 2 auto;
    column-gap: 4px;
    margin: 0;
    padding: 0;
    list-style: none
}

.gif-search-content .gif-search-results ul li {
    margin: 0 0 4px;
    padding: 0
}

.gif-search-content .gif-search-results ul .bg1 {
    background: #e0245e
}

.gif-search-content .gif-search-results ul .bg2 {
    background: #f45d22
}

.gif-search-content .gif-search-results ul .bg3 {
    background: #ffad1f
}

.gif-search-content .gif-search-results ul .bg4 {
    background: #17bf63
}

.gif-search-content .gif-search-results ul .bg5 {
    background: #1c94e0
}

.gif-search-content .gif-search-results ul .bg6 {
    background: #794bc4
}

.found-media-item img {
    width: 100%;
    height: 100%;
    min-width: 100%
}

input.search-query-input {
    width: 100%
}

#content .toolbar-button {
    box-shadow: none
}

@media screen and (max-width:768px) {
    .activity-update-form .activity-form.focus-in #whats-new-content .medium-editor-toolbar-actions button,
    .bbp-topic-form #whats-new-toolbar .medium-editor-toolbar-actions button {
        padding: 10px 5px 10px 0
    }
    .activity-update-form .activity-form.focus-in #whats-new-content .medium-editor-toolbar-actions button.medium-editor-button-first,
    .bbp-topic-form #whats-new-toolbar .medium-editor-toolbar-actions button.medium-editor-button-first {
        padding-left: 5px!important
    }
    .activity-update-form .activity-form.focus-in #whats-new-content .medium-editor-toolbar.active {
        opacity: 1
    }
}

@media screen and (max-width:560px) {
    .activity-update-form .activity-form.focus-in #whats-new-content .medium-editor-toolbar-actions button,
    .bbp-topic-form #whats-new-toolbar .medium-editor-toolbar-actions button {
        padding: 10px 0
    }
    .activity-update-form .activity-form.focus-in #whats-new-content .medium-editor-toolbar-form .medium-editor-toolbar-input,
    .bbp-topic-form #whats-new-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input {
        max-width: calc(100% - 90px);
        width: auto
    }
}

.activity-list {
    padding: .7em
}

.activity-list .activity-item:after,
.activity-list .activity-item:before {
    content: " ";
    display: table
}

.activity-list .activity-item:after {
    clear: both
}

.activity-list .activity-item {
    list-style: none;
    padding: 1em
}

.activity-list .activity-item.has-comments {
    padding-bottom: 1em
}

.activity-list .activity-item div.item-avatar {
    margin: 0 auto;
    text-align: center;
    width: auto
}

.activity-list .activity-item div.item-avatar img {
    height: auto;
    max-width: 40%
}

@media screen and (min-width:46.8em) {
    .activity-list .activity-item div.item-avatar {
        margin: 0 2% 0 0;
        text-align: left;
        width: 15%
    }
    .activity-list .activity-item div.item-avatar img {
        max-width: 80%
    }
}

.activity-list .activity-item.mini {
    font-size: 13px;
    position: relative
}

.activity-list .activity-item.mini .activity-avatar {
    margin-left: auto;
    text-align: center;
    width: auto
}

.activity-list .activity-item.mini .activity-avatar img.FB_profile_pic,
.activity-list .activity-item.mini .activity-avatar img.avatar {
    max-width: 15%
}

@media screen and (min-width:46.8em) {
    .activity-list .activity-item.mini .activity-avatar {
        margin-left: 15px;
        text-align: left;
        width: 15%
    }
    .activity-list .activity-item.mini .activity-avatar img.FB_profile_pic,
    .activity-list .activity-item.mini .activity-avatar img.avatar {
        max-width: 60%
    }
}

.activity-list .activity-item.new_forum_post .activity-inner,
.activity-list .activity-item.new_forum_topic .activity-inner {
    border-left: 2px solid #eaeaea;
    margin-left: 10px;
    padding-left: 1em
}

.activity-list .activity-item.newest_blogs_activity,
.activity-list .activity-item.newest_friends_activity,
.activity-list .activity-item.newest_groups_activity,
.activity-list .activity-item.newest_mentions_activity {
    background: rgba(31, 179, 221, .1)
}

.activity-list .activity-item .activity-inreplyto {
    color: #767676;
    font-size: 13px
}

.activity-list .activity-item .activity-inreplyto>p {
    display: inline;
    margin: 0
}

.activity-list .activity-item .activity-inreplyto .activity-inner,
.activity-list .activity-item .activity-inreplyto blockquote {
    background: 0 0;
    border: 0;
    display: inline;
    margin: 0;
    overflow: hidden;
    padding: 0
}

.activity-list .activity-item .activity-header {
    margin: 0 auto;
    width: 80%
}

.activity-list .activity-item .activity-header a,
.activity-list .activity-item .activity-header img {
    display: inline
}

.activity-list .activity-item .activity-header .avatar {
    display: inline-block;
    margin: 0 5px;
    vertical-align: bottom
}

.activity-list .activity-item .activity-header .time-since {
    font-size: 14px;
    color: #767676;
    text-decoration: none
}

.activity-list .activity-item .activity-header .time-since:hover {
    color: #767676;
    cursor: pointer;
    text-decoration: underline
}

.activity-list .activity-item .activity-header .activity-to {
    visibility: hidden;
    display: inline-block;
    white-space: nowrap;
    width: 1em
}

.activity-list .activity-item .activity-header .activity-to:before {
    font-family: dashicons;
    vertical-align: middle;
    content: "\f344";
    visibility: visible
}

@media screen and (min-width:55em) {
    .activity-list .activity-item .activity-header .activity-to:before {
        font-size: 15px
    }
}

.activity-list .activity-item .activity-header .activity-time-since:before {
    content: "\00b7 ";
    color: #767676;
    display: inline-block;
    margin-right: 3px;
    vertical-align: middle
}

.activity-list .activity-item .activity-content .activity-header,
.activity-list .activity-item .activity-content .comment-header {
    color: #767676;
    margin-bottom: 10px
}

.activity-list .activity-item .activity-content p {
    margin: 0
}

.activity-list .activity-item .activity-content .activity-state {
    display: none;
    font-size: 12px;
    clear: both
}

.activity-list .activity-item .activity-content .activity-state .ac-state-separator,
.activity-list .activity-item .activity-content .activity-state .activity-state-comments,
.activity-list .activity-item .activity-content .activity-state .activity-state-likes {
    display: none
}

.activity-list .activity-item .activity-content .activity-state a {
    border: 0;
    padding: 0
}

.activity-list .activity-item .activity-content .activity-state.has-likes .activity-state-likes {
    display: inline-block
}

.activity-list .activity-item .activity-content .activity-state.has-comments .activity-state-comments {
    display: inline-block
}

.activity-list .activity-item .activity-content .activity-state.has-comments,
.activity-list .activity-item .activity-content .activity-state.has-likes {
    display: block
}

.activity-list .activity-item .activity-content .activity-state.has-likes.has-comments .ac-state-separator {
    display: inline-block
}

.activity-list .activity-item .activity-inner p {
    word-break: break-word
}

.activity-list .activity-item .activity-read-more {
    margin-left: 1em;
    white-space: nowrap
}

.activity-list .activity-item ul.activity-meta {
    margin: 0;
    padding-left: 0
}

.activity-list .activity-item ul.activity-meta li {
    border: 0;
    display: inline-block
}

.activity-list .activity-item .bp-generic-meta.action {
    border: 1px solid transparent;
    background: #fafafa;
    padding: 2px;
    position: relative;
    text-align: left
}

.activity-list .activity-item .bp-generic-meta.action div.generic-button {
    margin: 0
}

.activity-list .activity-item .bp-generic-meta.action .button {
    background: 0 0
}

.activity-list .activity-item .bp-generic-meta.action a {
    padding: 4px 8px
}

.activity-list .activity-item .bp-generic-meta.action .button:focus,
.activity-list .activity-item .bp-generic-meta.action .button:hover {
    background: 0 0
}

.activity-list .activity-item .bp-generic-meta.action .button:before,
.activity-list .activity-item .bp-generic-meta.action .icons:before {
    font-family: dashicons;
    font-size: 18px;
    vertical-align: middle
}

.activity-list .activity-item .bp-generic-meta.action .acomment-reply.button:before {
    content: "\f101"
}

.activity-list .activity-item .bp-generic-meta.action .view:before {
    content: "\f125"
}

.activity-list .activity-item .bp-generic-meta.action .fav:before {
    content: "\f529"
}

.activity-list .activity-item .bp-generic-meta.action .unfav:before {
    content: "\f529";
    color: #0061ac
}

.activity-list .activity-item .bp-generic-meta.action .delete-activity:before {
    content: "\f153"
}

.activity-list .activity-item .bp-generic-meta.action .spam-activity:before {
    content: "\f227"
}

.activity-list .activity-item .bp-generic-meta.action .delete-activity:hover {
    color: #800
}

.activity-list .activity-item .bp-generic-meta.action .button {
    border: 0;
    box-shadow: none
}

.activity-list .activity-item .bp-generic-meta.action .button span {
    background: 0 0;
    font-weight: 600
}

.activity-list .activity-item .bp-generic-meta.action .unfav .like-count {
    color: #0061ac
}

@media screen and (min-width:46.8em) {
    .activity-list.bp-list {
        padding: 30px
    }
    .activity-list .activity-item .activity-content {
        margin: 0;
        position: relative
    }
    .activity-list .activity-item .activity-content:after {
        clear: both;
        content: "";
        display: table
    }
    .activity-list .activity-item .activity-header {
        margin: 0 15px 0 0;
        width: auto
    }
}

.activity-inner:empty {
    display: none
}

.activity-list .load-more,
.activity-list .load-newest {
    background: #fafafa;
    border: 1px solid #eee;
    font-size: 110%;
    margin: 15px 0;
    padding: 0;
    text-align: center
}

.activity-list .load-more a,
.activity-list .load-newest a {
    color: #555;
    display: block;
    padding: .7em 0
}

.activity-list .load-more a:focus,
.activity-list .load-more a:hover,
.activity-list .load-newest a:focus,
.activity-list .load-newest a:hover {
    background: #fff;
    color: #333
}

.activity-list .load-more:focus,
.activity-list .load-more:hover,
.activity-list .load-newest:focus,
.activity-list .load-newest:hover {
    border-color: #e1e1e1;
    -webkit-box-shadow: 0 0 6px 0 #eaeaea;
    -moz-box-shadow: 0 0 6px 0 #eaeaea;
    box-shadow: 0 0 6px 0 #eaeaea
}

.activity-url-scrapper-loading {
    display: block;
    font-size: 14px;
    color: #a3a5a9;
    letter-spacing: -.24px;
    margin: 12px 0 10px
}

.activity-link-preview-container {
    padding: 25px;
    line-height: 1.5;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    color: #82878c;
    background: #fff;
    border: 1px solid #e5e5e5;
    position: relative;
    overflow: auto;
    zoom: 1
}

.activity-video-preview .activity-link-preview-container {
    border: 0;
    border-radius: 0;
    margin: 0;
    padding: 0;
    max-width: 640px
}

.activity-link-preview-container div.fluid-width-video-wrapper {
    margin-top: 0;
    margin-bottom: 0
}

.activity-link-preview-image {
    float: left;
    max-width: 160px;
    margin-right: 20px;
    margin-bottom: 20px;
    position: relative
}

.activity-link-preview-image img {
    width: 100%;
    height: auto;
    border: none
}

.activity-url-scrapper-container .activity-link-preview-image {
    margin-bottom: 30px
}

.activity-video-preview {
    padding: 0
}

.activity-link-preview-title {
    font-weight: 600;
    font-size: 22px;
    line-height: 1.3;
    color: #32373c
}

.activity-link-preview-title {
    margin: 0 0 15px
}

.activity-link-preview-title a,
.activity-link-preview-title a:hover {
    color: #32373c
}

.activity-link-preview-title a:hover {
    text-decoration: underline!important
}

.activity-link-preview-excerpt p {
    font-size: 14px;
    font-weight: 400
}

.activity-link-preview-excerpt a.activity-link-preview-more {
    color: #b4b9be
}

.activity-link-preview-excerpt a.activity-link-preview-more:hover {
    text-decoration: underline!important
}

.activity-url-thumb-nav {
    position: absolute;
    bottom: 3px;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center
}

#buddypress .activity-url-thumb-nav button {
    cursor: pointer;
    width: auto;
    padding: 0 6px;
    margin: 0 3px;
    height: auto;
    min-height: 10px
}

.activity-url-thumb-nav .dashicons {
    font-size: 14px;
    line-height: 1;
    position: relative;
    top: 3px
}

#activity-url-scrapper-img-count {
    font-size: 12px;
    color: #7f7f7f;
    margin-top: 5px
}

.activity-url-error {
    color: red
}

#activity-url-scrapper-url {
    color: rgba(0, 0, 0, .6);
    font-size: 14px
}

#activity-close-link-suggestion {
    border: 0;
    color: rgba(0, 0, 0, .4);
    font-size: 16px;
    position: absolute;
    left: 3px;
    top: 8px;
    text-decoration: none
}

.activity-post-form-link-wp-embed #activity-close-link-suggestion {
    top: 30px;
    left: 8px;
    right: auto;
    background: #fff;
    z-index: 11;
    width: 20px;
    height: 20px;
    border-radius: 50%
}

@media screen and (max-width:32em) {
    #activity-close-link-suggestion {
        color: #000
    }
}

#activity-link-preview-close-image {
    border: 0;
    color: #fff;
    font-size: 16px;
    left: 3px;
    position: absolute;
    top: 3px;
    text-decoration: none
}

#activity-close-link-suggestion:focus,
#activity-link-preview-close-image:focus {
    outline: 0
}

.acomment-content .buddyboss-media-photo-link,
.activity-inner .buddyboss-media-photo-link {
    display: none!important
}

blockquote.wp-embedded-content {
    padding: 25px;
    line-height: 1.5;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    font-size: 14px;
    font-style: normal;
    color: #82878c;
    background: #fff;
    border: 1px solid #e5e5e5;
    position: relative;
    margin: 0
}

blockquote.wp-embedded-content>a,
blockquote.wp-embedded-content>p:first-child>a {
    color: #32373c;
    font-weight: 600;
    font-size: 22px;
    line-height: 1.3
}

blockquote.wp-embedded-content>a:hover,
blockquote.wp-embedded-content>p:first-child>a:hover {
    text-decoration: underline
}

.activity-inner iframe.lazy {
    animation-duration: 1.3s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: lazyAmination;
    animation-timing-function: linear;
    background: #f6f7f8;
    background-size: 800px 104px
}

@keyframes lazyAmination {
    0% {
        background-position: 100% 0
    }
    100% {
        background-position: -300% 0
    }
}

.buddypress-wrap .activity-comments {
    clear: both;
    margin: 0 5%;
    position: relative;
    width: auto
}

.buddypress-wrap .activity-comments ul {
    clear: both;
    list-style: none;
    margin: 15px 0 0;
    padding: 0
}

.buddypress-wrap .activity-comments ul li {
    border-top: 1px solid #eee;
    border-bottom: 0;
    padding: 1em 0 0
}

.buddypress-wrap .activity-comments ul li:first-child {
    border-top: 0
}

.buddypress-wrap .activity-comments ul li:last-child {
    margin-bottom: 0
}

.buddypress-wrap .activity-comments>ul>li>ul {
    margin-left: 5%
}

.buddypress-wrap .activity-comments div.acomment-avatar {
    width: auto
}

.buddypress-wrap .activity-comments div.acomment-avatar img {
    border-width: 1px;
    float: left;
    height: 25px;
    max-width: none;
    width: 25px
}

.buddypress-wrap .activity-comments .acomment-content p,
.buddypress-wrap .activity-comments .acomment-meta {
    font-size: 14px
}

.buddypress-wrap .activity-comments .acomment-meta {
    color: #555;
    overflow: hidden;
    padding-left: 2%
}

.buddypress-wrap .activity-comments .acomment-content {
    border-left: 1px solid #ccc;
    margin: 15px 0 0 10%;
    padding: .7em 1em
}

.buddypress-wrap .activity-comments .acomment-content p {
    margin-bottom: .5em
}

.buddypress-wrap .activity-comments .acomment-options {
    float: left;
    margin: 10px 0 10px 20px
}

.buddypress-wrap .activity-comments .acomment-options a {
    color: #767676;
    font-size: 14px
}

.buddypress-wrap .activity-comments .acomment-options a:focus,
.buddypress-wrap .activity-comments .acomment-options a:hover {
    color: inherit
}

.buddypress-wrap .activity-comments .bp-generic-meta.action {
    background: 0 0;
    margin-top: 10px
}

.buddypress-wrap .activity-comments .bp-generic-meta.action button {
    font-size: 14px;
    font-weight: 400;
    text-transform: none
}

.buddypress-wrap .activity-comments .show-all button {
    font-size: 14px;
    text-decoration: underline;
    padding-left: .7em
}

.buddypress-wrap .activity-comments .show-all button span {
    text-decoration: none
}

.buddypress-wrap .activity-comments .show-all button:focus span,
.buddypress-wrap .activity-comments .show-all button:hover span {
    color: #5087e5
}

.buddypress-wrap .mini .activity-comments {
    clear: both;
    margin-top: 0
}

body.activity-permalink .activity-comments {
    background: 0 0;
    width: auto
}

body.activity-permalink .activity-comments>ul {
    padding: 0 .7em 0 1em
}

body.activity-permalink .activity-comments ul li>ul {
    margin-top: 10px
}

form.ac-form {
    display: none;
    padding: 1em
}

form.ac-form .ac-reply-avatar {
    float: left
}

form.ac-form .ac-reply-avatar img {
    border: 1px solid #eee
}

form.ac-form .ac-reply-content a {
    text-decoration: none
}

form.ac-form .ac-reply-content .ac-textarea {
    margin-bottom: 15px;
    padding: 0 .7em
}

form.ac-form .ac-reply-content .ac-textarea .ac-input[contenteditable=true] {
    background: 0 0;
    box-shadow: none;
    color: #555;
    font-family: inherit;
    font-size: 100%;
    margin: 0;
    outline: 0;
    padding: .5em;
    width: 100%;
    border: 1px solid #ccc
}

form.ac-form .ac-reply-content .ac-textarea .ac-input[contenteditable=true]:focus {
    -webkit-box-shadow: 0 0 6px #d6d6d6;
    -moz-box-shadow: 0 0 6px #d6d6d6;
    box-shadow: 0 0 6px #d6d6d6
}

form.ac-form .ac-reply-content .ac-textarea .dropzone.open {
    margin-top: 20px
}

form.ac-form .ac-reply-content .ac-textarea .ac-reply-toolbar {
    display: flex;
    margin-top: 10px
}

form.ac-form .ac-reply-content .ac-textarea .ac-reply-toolbar .post-elements-buttons-item {
    margin-right: 10px;
    position: relative
}

form.ac-form .ac-reply-content .ac-textarea .gif-search-results-list {
    margin: 0;
    padding: 0;
    list-style: none
}

form.ac-form .ac-reply-content .ac-textarea .gif-search-content .gif-search-results ul li {
    padding: 0
}

form.ac-form .ac-reply-content input {
    margin-top: 10px
}

.bp-ac-form-cotainer {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.ac-reply-content {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    min-width: 0;
    color: #767676;
    padding-left: 1em
}

.activity-comments li form.ac-form {
    clear: both;
    margin-right: 15px
}

.activity-comments form.root {
    margin-left: 0
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .blogs-list li .item-meta {
        clear: left;
        float: none
    }
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .bp-dir-vert-nav .blogs-list .list-title {
        width: auto
    }
}

.buddypress-wrap .groups-list li .list-title {
    text-align: center
}

.buddypress-wrap .groups-list li .group-details {
    clear: left
}

.buddypress-wrap .groups-list li .group-desc {
    border: 1px solid #eaeaea;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    border-radius: 10px;
    background-clip: padding-box;
    font-size: 13px;
    color: #737373;
    font-style: italic;
    margin: 10px auto 0;
    padding: 1em
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .groups-list li .group-desc {
        font-size: 16px
    }
}

.buddypress-wrap .groups-list li p {
    margin: 0 0 .5em
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .groups-list li .item {
        margin-right: 0
    }
    .buddypress-wrap .groups-list li .item-meta,
    .buddypress-wrap .groups-list li .list-title {
        text-align: left;
        width: auto
    }
    .buddypress-wrap .groups-list li .item-meta {
        margin-bottom: 20px
    }
    .buddypress-wrap .groups-list li .last-activity {
        clear: left;
        margin-top: -20px
    }
}

.buddypress-wrap .groups-list li.group-no-avatar div.group-desc {
    margin-left: 0
}

.buddypress-wrap .mygroups .groups-list.grid .wrap {
    min-height: 450px;
    padding-bottom: 0
}

@media screen and (min-width:46.8em) {
    .buddypress .bp-vertical-navs .groups-list .item-avatar {
        margin-right: 3%;
        width: 15%
    }
}

.buddypress-wrap .members-list li .member-name {
    margin-bottom: 10px
}

.buddypress-wrap .members-list li .user-update {
    border: 1px solid #eaeaea;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    border-radius: 10px;
    background-clip: padding-box;
    color: #737373;
    font-style: italic;
    font-size: 13px;
    margin: 15px auto;
    padding: 1em
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .members-list li .user-update {
        font-size: 16px
    }
}

.buddypress-wrap .members-list li .user-update .activity-read-more {
    display: block;
    font-size: 12px;
    font-style: normal;
    margin-top: 10px;
    padding-left: 2px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .members-list li .last-activity {
        clear: left;
        margin-top: -10px
    }
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .members-group-list li .joined {
        clear: left;
        float: none;
        margin-top: 0
    }
    .buddypress-wrap .members-group-list li .role {
        clear: left;
        float: none;
        font-size: 14px;
        margin: 0
    }
}

@media screen and (min-width:32em) {
    body:not(.logged-in) .members-list .user-update {
        width: 96%
    }
}

.members-directory-wrapper {
    display: flex;
    flex-flow: row wrap
}

@media screen and (min-width:46.8em) {
    .members-directory-wrapper {
        flex-flow: row-reverse
    }
    .members-directory-wrapper .bp-profile-search-widget {
        flex: 0 0 220px;
        min-width: 0;
        margin-left: 30px
    }
}

.members-directory-wrapper .members-directory-container {
    flex: 1;
    min-width: 0
}

@media screen and (max-width:46.8em) {
    .members-directory-wrapper .bp-profile-search-widget {
        flex: 0 0 100%;
        min-width: 0
    }
}

.members-directory-wrapper .bp-field-wrap {
    margin-bottom: 20px
}

.members-directory-wrapper .bps-description {
    font-size: 13px;
    margin: 5px 0;
    color: #767676
}

.bp-profile-search-widget .bp-field-wrap {
    margin-bottom: 20px
}

.bp-profile-search-widget .bps-form-title {
    font-size: 13px;
    font-weight: 400;
    color: #767676;
    line-height: 1;
    margin-top: 0;
    margin-bottom: 20px
}

.bp-profile-search-widget label {
    font-weight: 600;
    font-size: 15px
}

.bp-profile-search-widget select {
    width: 100%
}

.register-page .register-section {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.register-page .signup-form {
    margin-top: 20px
}

.register-page .signup-form .default-profile input {
    margin-bottom: 20px
}

.register-page .signup-form label,
.register-page .signup-form legend {
    margin: 10px 0 0
}

.register-page .signup-form .editfield {
    margin: 15px 0
}

.register-page .signup-form .editfield fieldset {
    border: 0;
    padding: 0
}

.register-page .signup-form .editfield fieldset legend {
    margin: 0 0 5px;
    text-indent: 0
}

.register-page .signup-form .editfield .field-visibility-settings {
    padding: .7em 0
}

.register-page .signup-form .editfield .field-visibility-settings fieldset {
    margin: 10px 0
}

.register-page .signup-form p.field-visibility-settings-header {
    margin: 10px 0
}

.register-page .signup-form #signup-avatar img {
    margin: 0 15px 10px 0
}

.register-page .signup-form .password-entry,
.register-page .signup-form .password-entry-confirm {
    border: 1px solid #eee
}

.register-page .signup-form .blog-details {
    margin-top: 25px
}

.register-page .signup-form .blog-details h2 {
    margin-bottom: 10px
}

.register-page .register-privacy-info {
    margin: 15px 0 0
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .register-page .layout-wrap {
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around
    }
    .buddypress-wrap .register-page .layout-wrap .default-profile {
        flex: 1 100%;
        min-width: 0
    }
    .buddypress-wrap .register-page .layout-wrap .blog-details {
        flex: 1 100%;
        min-width: 0
    }
    .buddypress-wrap .register-page .submit {
        clear: both
    }
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap.extended-default-reg .register-page .default-profile {
        flex: 1 100%;
        min-width: 0
    }
    .buddypress-wrap.extended-default-reg .register-page .extended-profile {
        flex: 1 100%;
        min-width: 0
    }
    .buddypress-wrap.extended-default-reg .register-page .blog-details {
        flex: 1 100%;
        min-width: 0
    }
}

body.register #page #primary .entry-header {
    text-align: center
}

@media screen and (min-width:55em) {
    body.register #page #primary .entry-header,
    body.register .buddypress-wrap {
        max-width: 460px;
        margin-left: auto;
        margin-right: auto
    }
}

body.register .registration-popup {
    background: #fff;
    padding: 30px;
    text-align: left;
    min-height: 400px;
    max-width: 650px;
    margin: 40px auto;
    position: relative
}

body.register .registration-popup .mfp-close {
    color: #000
}

body.register .registration-popup .mfp-close:focus,
body.register .registration-popup .mfp-close:hover {
    background: 0 0
}

#buddypress #signup-form input:focus {
    border-color: #aaa
}

#buddypress #signup-form input.error {
    border-color: #b71717;
    border-width: 2px
}

#buddypress #signup-form label.error {
    display: none!important
}

.bs-bp-container-reg .buddypress-wrap #email-strength-result {
    border-style: solid;
    border-width: 1px;
    display: none;
    font-weight: 700;
    margin: 10px 0;
    margin-bottom: 10px;
    padding: .7em;
    text-align: center;
    width: auto
}

.bs-bp-container-reg .buddypress-wrap #email-strength-result.mismatch {
    font-weight: 400;
    background-color: #e0e1e1;
    border-color: #e0e1e1;
    border-radius: 3px;
    font-size: 14px
}

.bs-bp-container-reg .buddypress-wrap #email-strength-result.show {
    font-weight: 400;
    color: #fff;
    border-radius: 3px;
    font-size: 14px;
    display: block
}

#email-strength-result.bad,
.bs-bp-container-reg .buddypress-wrap #email-strength-result.error {
    background-color: #ef3e46;
    border-color: #ef3e46;
    color: #fff
}

#group-create-body {
    padding: .7em
}

#group-create-body .creation-step-name {
    text-align: center
}

#group-create-body .avatar-nav-items {
    margin-top: 15px
}

.single-headers:after,
.single-headers:before {
    content: " ";
    display: table
}

.single-headers:after {
    clear: both
}

.single-headers {
    margin-bottom: 15px
}

.single-headers #item-header-avatar a {
    border: 0;
    display: block;
    position: relative;
    text-align: center;
    text-decoration: none
}

.single-headers .activity,
.single-headers .group-status {
    display: inline
}

.single-headers .group-status {
    font-size: 14px;
    padding-right: 1em
}

.single-headers .activity {
    display: inline-block;
    font-size: 14px;
    padding: 0
}

.single-headers #sitewide-notice p,
.single-headers div#message p {
    background-color: #ffd;
    border: 1px solid #cb2;
    color: #440;
    font-weight: 400;
    margin-top: 3px;
    text-decoration: none
}

.single-headers h2 {
    line-height: 1.2;
    margin: 0 0 5px
}

.single-headers h2 a {
    color: #767676;
    text-decoration: none
}

.single-headers h2 span.highlight {
    display: inline-block;
    font-size: 60%;
    font-weight: 400;
    line-height: 1.7;
    vertical-align: middle
}

.single-headers h2 span.highlight span {
    background: #a1dcfa;
    color: #fff;
    cursor: pointer;
    font-size: 80%;
    font-weight: 700;
    margin-bottom: 2px;
    padding: 1px 4px;
    position: relative;
    right: -2px;
    top: -2px;
    vertical-align: middle
}

.single-headers .item-header-wrap {
    display: flex;
    flex-flow: row wrap
}

.single-headers img.avatar {
    margin: 0 15px 19px 0
}

.single-headers .item-meta {
    color: #767676;
    font-size: 14px;
    margin: 15px 0 5px;
    padding-bottom: .7em
}

.single-headers ul {
    list-style: none;
    margin: 0
}

.single-headers ul>.generic-button {
    display: inline-block;
    text-align: center;
    margin: 5px 10px 10px 0
}

.single-headers .group-description ol,
.single-headers .group-description ul {
    list-style-position: inside!important;
    margin: 0 0 1rem
}

.single-headers .group-description ul {
    list-style: initial
}

.single-headers .group-description ol {
    list-style: decimal
}

.single-headers .member-header-actions>.generic-button {
    display: inline-block;
    text-align: center;
    margin: 5px 10px 10px 0
}

.single-headers div.generic-button {
    text-align: center
}

@media screen and (min-width:46.8em) {
    .single-headers a.button,
    .single-headers div.generic-button,
    .single-headers li.generic-button {
        float: left
    }
}

.single-headers div#message.info {
    line-height: .8
}

body.no-js .single-item-header .js-self-profile-button {
    display: none
}

#create-group-form #header-cover-image {
    margin-bottom: 15px
}

@media screen and (min-width:783px) {
    #item-header-avatar {
        padding-right: 1em
    }
}

@media screen and (max-width:782px) {
    .single-headers .item-header-wrap {
        flex-flow: column
    }
    #item-header-content {
        text-align: center
    }
}

#cover-image-container {
    flex: 0 0 100%;
    min-width: 0;
    position: relative
}

#header-cover-image {
    background-color: #555;
    background-position: center top;
    background-repeat: no-repeat;
    background-size: cover;
    border: 0;
    display: block;
    left: 0;
    margin: 0;
    padding: 0;
    position: relative;
    top: 0;
    width: 100%;
    z-index: 1
}

#item-header-cover-image {
    margin-bottom: 1em;
    position: relative;
    z-index: 2
}

#item-header-cover-image #item-header-avatar {
    margin-top: -70px;
    padding: 0 1em;
    position: relative
}

#item-header-avatar img {
    border: solid 2px #fff;
    background: rgba(255, 255, 255, .8);
    box-shadow: none;
    display: block;
    margin: 0 auto
}

.users-header #item-header-cover-image #item-header-content {
    flex: 1;
    margin-top: -50px;
    min-width: 0
}

.groups-header .bp-group-type-list {
    margin: 0
}

.groups-header .bp-feedback {
    clear: both
}

.groups-header .action .button {
    margin-right: 10px
}

.groups-header .moderators-lists {
    margin-top: 0;
    display: table-cell
}

.groups-header .moderators-lists .moderators-title {
    font-size: 14px
}

.groups-header .moderators-lists .user-list {
    margin: 0 0 5px
}

.groups-header .moderators-lists .user-list ul:after {
    clear: both;
    content: "";
    display: table
}

.groups-header .moderators-lists .user-list li {
    display: inline-block;
    float: none;
    margin: 4px 0 0 4px
}

.groups-header .moderators-lists img.avatar {
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    float: none;
    height: 30px;
    margin: 0;
    max-width: 100%;
    width: 30px
}

.groups-header .parent-list {
    padding: 0 1em 0 0;
    display: table-cell
}

.groups-header .parent-list .parent-title {
    font-size: 14px
}

.groups-header .parent-list .group-list {
    margin: 0 0 5px
}

.groups-header .parent-list .group-list ul:after {
    clear: both;
    content: "";
    display: table
}

.groups-header .parent-list .group-list li {
    display: inline-block;
    float: none;
    margin: 4px 0 0 4px
}

.groups-header .parent-list img.avatar {
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    float: none;
    height: 30px;
    margin: 0;
    max-width: 100%;
    width: 30px
}

.groups-header .desc-wrap {
    background: #eaeaea;
    border: 1px solid #d6d6d6;
    margin: 0 0 15px;
    padding: 1em;
    text-align: center
}

.groups-header .desc-wrap .group-description {
    background: #fafafa;
    padding: 1em;
    text-align: left
}

.groups-header .desc-wrap .group-description p:last-child {
    margin-bottom: 0
}

@media screen and (min-width:783px) {
    .groups-header #item-header-content {
        flex: 1;
        min-width: 0
    }
    .groups-header #item-header-cover-image #item-actions,
    .groups-header #item-header-cover-image #item-header-content {
        padding-top: 15px;
        padding-bottom: 15px
    }
    .groups-header .group-item-actions {
        margin-left: 15px;
        text-align: right;
        max-width: 25%;
        display: table
    }
    .groups-header .groups-meta {
        clear: both
    }
}

@media screen and (max-width:782px) {
    .groups-header #item-header-cover-image #item-actions,
    .groups-header #item-header-cover-image #item-header-content {
        padding-bottom: 15px
    }
}

.bp-user .users-header .user-nicename {
    margin-bottom: 5px
}

.bp-user .member-header-actions {
    overflow: hidden
}

.bp-user .member-header-actions *>* {
    display: block
}

body.buddypress.bp-user #page #primary .entry-header {
    display: none
}

.buddypress-wrap .item-body .screen-heading {
    font-size: 20px;
    font-weight: 400
}

.buddypress-wrap .item-body .button-tabs {
    margin: 30px 0 15px
}

.buddypress-wrap .item-body .group-create-buttons {
    list-style: none
}

.buddypress-wrap .item-body .group-create-buttons li {
    padding-right: 12px
}

.buddypress-wrap.bp-single-vert-nav .bp-list:not(.grid) .item-entry {
    padding-left: .7em
}

.single-item.group-members .item-body .filters:not(.no-subnav) {
    border-top: 5px solid #eaeaea;
    padding-top: 1em
}

.single-item.subgroups .item-body #subnav-filters .subnav-search {
    display: none
}

.single-item.subgroups .item-body #subnav-filters #dir-filters {
    display: none
}

.buddypress-wrap .group-status-type ul {
    margin: 0 0 20px 20px
}

.groups-manage-members-list {
    padding: .7em 0
}

.groups-manage-members-list dd {
    margin: 0;
    padding: 1em 0
}

.groups-manage-members-list .section-title {
    background: #eaeaea;
    padding-left: .3em
}

.groups-manage-members-list ul {
    list-style: none;
    margin-bottom: 0
}

.groups-manage-members-list ul li {
    border-bottom: 1px solid #eee;
    margin-bottom: 10px;
    padding: .7em .3em .3em
}

.groups-manage-members-list ul li:last-child,
.groups-manage-members-list ul li:only-child {
    border-bottom: 0
}

.groups-manage-members-list ul li:nth-child(even) {
    background: #fafafa
}

.groups-manage-members-list ul li.banned-user {
    background: #fad3d3
}

.groups-manage-members-list ul .member-name {
    margin-bottom: 0;
    text-align: center
}

.groups-manage-members-list ul img {
    display: block;
    margin: 0 auto;
    width: 20%
}

@media screen and (min-width:32em) {
    .groups-manage-members-list ul .member-name {
        text-align: left
    }
    .groups-manage-members-list ul img {
        display: inline;
        width: 50px
    }
}

.groups-manage-members-list ul .members-manage-buttons:after,
.groups-manage-members-list ul .members-manage-buttons:before {
    content: " ";
    display: table
}

.groups-manage-members-list ul .members-manage-buttons:after {
    clear: both
}

.groups-manage-members-list ul .members-manage-buttons {
    margin: 15px 0 5px
}

.groups-manage-members-list ul .members-manage-buttons a.button {
    color: #767676;
    display: block;
    font-size: 13px
}

@media screen and (min-width:32em) {
    .groups-manage-members-list ul .members-manage-buttons a.button {
        display: inline-block
    }
}

.groups-manage-members-list ul .members-manage-buttons.text-links-list {
    margin-bottom: 0
}

@media screen and (max-width:32em) {
    .groups-manage-members-list ul .members-manage-buttons.text-links-list a.button {
        background: #fafafa;
        border: 1px solid #eee;
        display: block;
        margin-bottom: 10px
    }
}

.groups-manage-members-list ul .action:not(.text-links-list) a.button {
    font-size: 12px
}

@media screen and (min-width:46.8em) {
    .groups-manage-members-list ul li .avatar,
    .groups-manage-members-list ul li .member-name {
        float: left
    }
    .groups-manage-members-list ul li .avatar {
        margin-right: 15px
    }
    .groups-manage-members-list ul li .action {
        clear: both;
        float: left
    }
}

#avatar-crop-actions {
    margin-top: 15px
}

#avatar-crop-actions a.avatar-crop-cancel {
    color: #555;
    margin-top: 15px
}

#group-invites-container {
    background: #fff;
    border: 1px solid #e7e9ec;
    border-radius: 4px;
    margin-bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.bb-groups-invites-right {
    flex: 1
}

.bb-groups-invites-left {
    border-right: 1px solid #e7e9ec;
    min-width: 0;
    flex: 0 0 360px
}

.bb-groups-invites-left .bp-list li .item-avatar {
    margin-right: 15px
}

.bb-groups-invites-left .group-invites-search {
    padding: 20px
}

#item-body #group-invites-container li.selected {
    background: #f5f5f5
}

#group-invites-container .bb-groups-invites-right .bp-invites-feedback-hide {
    display: none
}

#send_group_invite_form .select2-selection--multiple {
    border-color: transparent;
    padding: 0
}

#send_group_invite_form .select2-selection__rendered {
    display: flex;
    align-items: center;
    flex-flow: row wrap;
    list-style: none;
    padding: 0;
    max-height: 120px;
    overflow: auto
}

#send_group_invite_form .select2-search.select2-search--inline {
    flex: 1;
    min-width: 0
}

#buddypress #send_group_invite_form .select2-search__field {
    background: 0 0;
    border-width: 0;
    min-width: 100%;
    width: 100%!important;
    padding-left: 0
}

body.groups.group-invites .select2-dropdown .select2-results__option {
    border-radius: 3px;
    margin-bottom: 0;
    font-size: 14px;
    padding: 2px 5px
}

body.groups.group-invites li.select2-results__option.select2-results__invite {
    border-radius: 3px;
    margin-bottom: 0;
    font-size: 14px;
    list-style: none;
    padding: 2px 5px
}

body.groups.group-invites span.select2-dropdown.select2-dropdown--below {
    background: #fff;
    box-shadow: 0 2px 7px 1px rgba(0, 0, 0, .05), 0 6px 32px 0 rgba(18, 43, 70, .1);
    border-radius: 4px;
    border: 0;
    padding: 5px 10px;
    margin-right: 0;
    max-width: 300px;
    display: none
}

.bb-groups-invites-right-top {
    padding: 20px
}

.bb-groups-invites-right-top .bb-title-wrap {
    display: flex;
    justify-content: space-between;
    align-items: center
}

.bb-groups-invites-right-top .bb-add-invites {
    font-size: 14px;
    display: flex;
    align-items: center;
    line-height: 1
}

.bb-invites-footer {
    border-top: 1px solid #e7e9ec;
    padding: 10px 20px;
    text-align: right
}

@media screen and (min-width:768px) {
    .bb-groups-invites-right-top .bb-add-invites,
    .bb-invites-footer {
        display: none
    }
}

@media screen and (max-width:767px) {
    .bb-groups-invites-left {
        display: none
    }
    div#bp-group-invite-content #send-invites-control {
        min-height: 100px
    }
    .bb-groups-invites-left.bb-select-member-view {
        position: fixed;
        background: rgba(0, 0, 0, .69);
        content: "";
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999999;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden
    }
    .bb-groups-invites-left.bb-select-member-view .bb-groups-invites-left-inner {
        background: #fff;
        border-radius: 5px;
        width: 90%;
        max-width: 500px;
        overflow: hidden
    }
    div.group-invites-members-listing {
        padding-bottom: 0
    }
    .group-invites-members-listing .bp-invites-feedback {
        margin-bottom: 30px
    }
}

a.bb-close-invites-members.button {
    min-width: 110px
}

.bb-groups-invites-right-bottom {
    border-top: 1px solid #e7e9ec
}

body.groups.group-invites #send_group_invite_form .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #4d5c6d;
    border-color: #4d5c6d;
    font-size: 14px;
    color: #fff;
    letter-spacing: -.24px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-flow: row-reverse;
    flex-flow: row-reverse;
    padding: 0 8px
}

#send_group_invite_form li.select2-selection__choice {
    margin-right: 10px;
    margin-bottom: 5px;
    margin-top: 5px
}

#send_group_invite_form .select2-selection__choice__remove {
    line-height: 1;
    margin: 0 0 0 8px;
    width: 16px;
    height: 16px;
    background: #fff;
    border-radius: 50%;
    color: #333;
    font-size: 14px;
    text-align: center
}

#send_group_invite_form .select2-selection--multiple {
    border-color: transparent;
    padding: 0
}

#send_group_invite_form .select2-search.select2-search--inline {
    flex: 1;
    min-width: 0
}

#send_group_invite_form #group-invites-toolbar {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px
}

#send_group_invite_form #group-invites-toolbar .post-elements-buttons-item {
    margin-right: 10px;
    position: relative
}

#group-invites-toolbar .post-elements-buttons-item {
    margin-right: 10px;
    position: relative
}

#bp-group-invite-content .medium-editor-element,
#bp-group-invite-content .medium-editor-placeholder {
    font-size: 16px
}

#bp-group-invite-content #send-invites-control {
    border: 0;
    resize: none;
    padding: 25px;
    height: auto;
    max-height: 32vh
}

#group-invites-container .bb-groups-invites-left .group-invites-members-listing .bp-invites-feedback-hide {
    display: none
}

#group-invites-container .bb-groups-invites-left .item-list li {
    border: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    position: relative;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 0;
    margin: 0 -20px 1px;
    width: auto;
    padding: 8px 20px
}

#group-invites-container .bb-groups-invites-left .group-invites-members-listing .list-title,
#group-invites-container .bb-groups-invites-left .group-invites-members-listing .list-title a {
    font-size: 15px;
    font-weight: 400;
    margin: 0 auto;
    width: 100%
}

#group-invites-container .bb-groups-invites-left .group-invites-members-listing .action button {
    height: auto;
    min-height: 10px;
    padding: 0;
    min-width: 40px;
    border: 0;
    color: inherit;
    background: 0 0;
    box-shadow: none
}

#group-invites-container .bb-groups-invites-left .last {
    text-align: center;
    float: right
}

#group-invites-container .bb-groups-invites-left .bp-group-invites-filters .button.group-invite-button {
    background-color: transparent;
    border: 0;
    padding-left: 5px;
    padding-right: 5px
}

#group-invites-container .bb-groups-invites-left #group-group-invites-container .button.group-invite-button {
    min-height: 34px;
    padding: 5px 16px
}

#group-invites-container .bb-groups-invites-left .button.group-invite-button {
    min-height: 26px;
    padding: 0;
    background: 0 0;
    border: 0
}

.bp-single-invite-wrap.group-invites-highlight {
    background: #fffced;
    padding: 10px;
    border: 1px solid #f9efca;
    border-radius: 5px
}

#group-invites-container .select2-container--default.select2-container--disabled .select2-selection--multiple {
    background-color: transparent!important;
    cursor: default
}

#group-invites-container div#group-invites-new-submit {
    margin-left: auto;
    display: flex
}

#group-invites-container select.group-invites-type {
    margin-right: 10px
}

#group-invites-container #send_group_invite_form {
    margin-bottom: 0;
    position: relative;
    height: 100%;
    padding-bottom: 55px
}

#group-invites-container .bb-groups-invites-right>.bp-feedback {
    margin: 20px
}

.bp-single-invite-content .bp-invite-content-wrap p.joined {
    color: #847d7d;
    font-style: italic;
    font-weight: 700
}

.group-invites-members-listing {
    padding-bottom: 20px
}

#group-invites-container .bb-groups-invites-left #members-list {
    max-height: 55vh;
    overflow: auto;
    margin: 0;
    padding: 0 20px
}

.group-invites.pending-invites.invite #group-invites-container .group-invites-column .group-subnav-filters div .last {
    display: none
}

#group-invites-container .bb-groups-invites-left .group-invites-members-listing #members-list .load-more .center {
    width: 100%;
    text-align: center
}

#group-invites-container .bb-groups-invites-left .bp-invites-dropdown-options-loader-hide,
#group-invites-container .bb-groups-invites-left .group-invites-members-listing .last,
#group-invites-container .bb-groups-invites-right .bp-invites-submit-loader-hide {
    display: none
}

.bb-groups-invites-left .group-invites-members-listing .bp-invites-feedback,
.bb-groups-invites-right #send_group_invite_form .bb-groups-invites-right-top .bp-invites-feedback {
    display: none
}

#bp-pending-invites-loader {
    display: none
}

#bp-pending-invites-loader {
    position: relative;
    text-align: center
}

#bp-pending-invites-loader .dashicons-update:before {
    content: "\e838";
    font-family: bb-icons;
    font-size: 20px;
    display: block;
    -webkit-transform: scale(.8);
    -ms-transform: scale(.8);
    transform: scale(.8)
}

#bp-invites-submit-loader {
    margin-left: auto;
    margin-right: 10px;
    position: relative;
    top: 10px
}

#bp-invites-submit-loader .dashicons-update:before {
    content: "\e838";
    font-family: bb-icons;
    font-size: 20px;
    display: block;
    -webkit-transform: scale(.8);
    -ms-transform: scale(.8);
    transform: scale(.8)
}

.group-invites-members-listing .bp-list li .item {
    overflow: initial
}

.buddypress.groups .activity-update-form {
    margin-top: 0
}

.buddypress-wrap .profile {
    margin-top: 30px
}

.buddypress-wrap .public .profile-fields td.label {
    width: 30%
}

.buddypress-wrap .profile.edit .button-nav {
    list-style: none;
    margin: 30px 0 10px
}

.buddypress-wrap .profile.edit .button-nav li {
    display: inline-block;
    margin-right: 10px
}

.buddypress-wrap .profile.edit .button-nav li a {
    font-size: 18px
}

.buddypress-wrap .profile.edit .editfield {
    background: #fafafa;
    border: 1px solid #eee;
    margin: 15px 0;
    padding: 1em
}

.buddypress-wrap .profile.edit .editfield fieldset {
    border: 0
}

.buddypress-wrap .profile.edit .editfield fieldset label {
    font-weight: 400
}

.buddypress-wrap .profile.edit .editfield fieldset label.xprofile-field-label {
    display: inline
}

.buddypress-wrap .profile.edit .repeater_group_outer {
    margin: 0 0 15px;
    padding: 15px;
    cursor: move;
    background: #fff;
    border: 1px solid #eee
}

.buddypress-wrap .profile.edit .repeater_group_outer .repeater_tools {
    display: flex;
    flex-flow: row wrap
}

.buddypress-wrap .profile.edit .repeater_group_outer .repeater_tools a {
    align-items: center;
    display: flex
}

.buddypress-wrap .profile.edit .repeater_group_outer .repeater_set_title {
    flex: 1;
    min-width: 0
}

.buddypress-wrap .profile.edit .repeater_group_outer .repeater_set_edit {
    margin-left: auto;
    margin-right: 5px
}

.buddypress-wrap .profile.edit .editfield {
    display: flex;
    flex-direction: column
}

.buddypress-wrap .profile.edit .editfield legend {
    margin-bottom: 10px
}

.buddypress-wrap .profile.edit .editfield .description {
    margin-top: -10px;
    margin-bottom: 10px;
    order: 2
}

.buddypress-wrap .profile.edit .editfield>fieldset {
    order: 1
}

.buddypress-wrap .profile.edit .editfield .field-visibility-settings,
.buddypress-wrap .profile.edit .editfield .field-visibility-settings-toggle {
    order: 3
}

#btn_add_repeater_set {
    align-items: center;
    display: flex;
    float: right
}

#btn_add_repeater_set .dashicons {
    margin-right: 5px
}

body.no-js .buddypress-wrap .field-visibility-settings-close,
body.no-js .buddypress-wrap .field-visibility-settings-toggle {
    display: none
}

body.no-js .buddypress-wrap .field-visibility-settings {
    display: block
}

.buddypress-wrap .field-visibility-settings {
    margin: 10px 0
}

.buddypress-wrap .current-visibility-level {
    font-style: normal;
    color: #333
}

.buddypress-wrap .field-visibility-settings,
.buddypress-wrap .field-visibility-settings-header {
    color: #737373
}

.buddypress-wrap .field-visibility-settings fieldset {
    margin: 5px 0
}

.buddypress-wrap .standard-form .editfield fieldset {
    margin: 0
}

.buddypress-wrap .standard-form .field-visibility-settings label {
    font-weight: 400;
    margin: 0
}

.buddypress-wrap .standard-form .field-visibility-settings .radio {
    list-style: none;
    margin-bottom: 0
}

.buddypress-wrap .standard-form .field-visibility-settings .field-visibility-settings-close {
    font-size: 12px
}

.buddypress-wrap .standard-form .wp-editor-container {
    border: 1px solid #dedede
}

.buddypress-wrap .standard-form .wp-editor-container textarea {
    background: #fff;
    width: 100%
}

.buddypress-wrap .standard-form .description {
    font-size: inherit
}

.buddypress-wrap .standard-form .field-visibility-settings legend,
.buddypress-wrap .standard-form .field-visibility-settings-header {
    font-style: italic
}

.buddypress-wrap .standard-form .field-visibility-settings-header {
    font-size: 14px;
    margin: 5px 0
}

.buddypress-wrap .standard-form .field-visibility-settings label,
.buddypress-wrap .standard-form .field-visibility-settings legend {
    font-size: 14px
}

.buddypress-wrap .standard-form .field-visibility select {
    margin: 0
}

.buddypress-wrap .html-active button.switch-html {
    background: #f5f5f5;
    border-bottom-color: transparent;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.buddypress-wrap .tmce-active button.switch-tmce {
    background: #f5f5f5;
    border-bottom-color: transparent;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.buddypress-wrap .profile.public .profile-group-title {
    border-bottom: 1px solid #ccc
}

body.register .buddypress-wrap .page ul {
    list-style: none
}

.buddypress-wrap .profile .bp-avatar-nav {
    margin-top: 20px
}

#item-header a.link-change-cover-image,
#item-header a.link-change-profile-image {
    background: rgba(255, 255, 255, .9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    width: 30px;
    height: 30px;
    left: 12px;
    top: 12px;
    z-index: 3;
    opacity: 0;
    transition: all .2s;
    -webkit-box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2)
}

#item-header-avatar a.link-change-profile-image {
    top: 100px;
    left: 50%;
    margin-left: -15px
}

#header-cover-image:hover a.link-change-cover-image,
#item-header-avatar:hover a.link-change-profile-image {
    opacity: 1
}

.social-networks-wrap span.social {
    display: inline-block;
    width: 20px;
    margin-right: 10px
}

.social-networks-wrap svg {
    width: 100%;
    vertical-align: middle
}

.item-body .bp-widget {
    margin-bottom: 20px
}

@media screen and (max-width:782px) {
    .member-header-actions.action {
        margin-top: 15px
    }
    .single-headers li.generic-button {
        float: none
    }
}

div.profile_completion_wrap .progress_text_wrap {
    text-align: right;
    margin-bottom: 5px
}

div.profile_completion_wrap .progress_container {
    border: 1px solid #000;
    border-radius: 12px
}

div.profile_completion_wrap .progress_container .pc_progress {
    height: 8px;
    background-color: #0b80a4;
    border-radius: 12px 0 0 12px
}

div.profile_completion_wrap ul.pc_detailed_progress li {
    margin: 15px 0
}

div.profile_completion_wrap ul.pc_detailed_progress li span.completed_staus {
    color: #fff;
    border-radius: 8px;
    padding: 2px;
    float: right;
    width: 50px;
    text-align: center
}

div.profile_completion_wrap ul.pc_detailed_progress li.completed span.completed_staus {
    background-color: #8a2
}

div.profile_completion_wrap ul.pc_detailed_progress li.incomplete span.section_name a {
    color: #5087e5;
    text-decoration: underline
}

div.profile_completion_wrap ul.pc_detailed_progress li.incomplete span.completed_staus {
    background-color: #b71717
}

#member-invites-table .field-actions,
#member-invites-table .field-actions-last {
    text-align: center
}

#member-invites-table .field-actions .field-actions-remove,
#member-invites-table .field-actions-last .field-actions-remove {
    cursor: pointer
}

#member-invites-table .field-actions-add {
    cursor: pointer
}

#member-invites-table .field-actions-add i {
    background-color: #000;
    color: #fff;
    border-radius: 100%;
    padding: 3px 4px 1px 3px;
    height: auto;
    width: auto;
    line-height: normal
}

#member-invites-table .field-actions-add.disabled {
    cursor: not-allowed
}

#member-invites-table .field-actions-add.disabled i {
    background-color: #ccc
}

.preview-content .actions a {
    text-decoration: none
}

.bp-messages-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap
}

.bp-messages-content {
    flex: 1;
    min-width: 0;
    padding-left: 20px
}

.bp-messages-content .avatar {
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none
}

.bp-messages-content .thread-participants {
    list-style: none
}

.bp-messages-content .thread-participants dd {
    margin-left: 0
}

.bp-messages-content time {
    color: #737373;
    font-size: 12px
}

.bp-messages-content .thread-date {
    color: #737373;
    font-size: 14px
}

#message-threads {
    clear: both;
    list-style: none;
    margin: 0;
    padding: 0;
    width: 100%
}

#message-threads:empty {
    display: none
}

#message-threads .bp-message-link {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-flex-flow: row nowrap;
    -moz-flex-flow: row nowrap;
    -ms-flex-flow: row nowrap;
    -o-flex-flow: row nowrap;
    flex-flow: row nowrap;
    margin: 0;
    overflow: hidden;
    padding: .7em
}

#message-threads .bp-message-link .thread-cb {
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    align-items: center;
    -webkit-flex: 1 2 5%;
    -moz-flex: 1 2 5%;
    -ms-flex: 1 2 5%;
    -o-flex: 1 2 5%;
    flex: 1 2 5%
}

#message-threads .bp-message-link .thread-to {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 100%
}

#message-threads .bp-message-link .thread-to img.avatar {
    float: left;
    margin: 5px 10px 0 0
}

#message-threads .bp-message-link .thread-to .user-name {
    display: inline-block;
    line-height: 1.1
}

#message-threads .bp-message-link .thread-to .num-recipients {
    color: #737373;
    font-weight: 400;
    font-size: 12px;
    margin: 0
}

#message-threads .bp-message-link .thread-date {
    -webkit-flex: 1 2 15%;
    -moz-flex: 1 2 15%;
    -ms-flex: 1 2 15%;
    -o-flex: 1 2 15%;
    flex: 1 2 15%
}

#message-threads .bp-message-link.unread {
    background-color: #fafafa
}

#message-threads .bp-message-link.unread .thread-subject .subject {
    color: #5087e5
}

#message-threads .bp-message-link .thread-content {
    min-width: 0;
    -webkit-flex: 1 2 50%;
    -moz-flex: 1 2 50%;
    -ms-flex: 1 2 50%;
    -o-flex: 1 2 50%;
    flex: 1 2 50%
}

@media screen and (min-width:55em) {
    #message-threads .bp-message-link .thread-content {
        -webkit-flex: 1 2 70%;
        -moz-flex: 1 2 70%;
        -ms-flex: 1 2 70%;
        -o-flex: 1 2 70%;
        flex: 1 2 70%
    }
}

#message-threads .bp-message-link .thread-content .excerpt {
    color: #737373;
    font-size: 12px;
    margin: 0
}

#message-threads .bp-message-link .thread-content .thread-subject {
    font-size: 14px;
    vertical-align: top
}

#message-threads .bp-message-link .thread-content .thread-subject a {
    color: #737373
}

#message-threads .bp-message-link .thread-content .thread-subject .excerpt {
    font-weight: 400
}

#message-threads .bp-message-link .thread-date {
    color: #767676;
    font-size: 13px;
    padding-left: 5px;
    text-align: right
}

#message-threads .bp-message-link .thread-avatar {
    margin-right: 15px;
    max-width: 60px;
    -webkit-flex: 1 2 10%;
    -moz-flex: 1 2 10%;
    -ms-flex: 1 2 10%;
    -o-flex: 1 2 10%;
    flex: 1 2 10%
}

#message-threads .bp-message-link .thread-avatar img.avatar {
    max-width: 60px;
    width: 100%
}

.bp-messages-content .actions {
    margin-left: auto
}

.bp-messages-content .actions .bp-icons:not(.bp-hide) {
    display: inline-block;
    margin: 0;
    padding: .3em .7em
}

.bp-messages-content .actions .bp-icons:not(.bp-hide):before {
    font-size: 26px
}

.bp-messages-content .actions .message_actions .message_action__anchor {
    color: #555
}

.bp-messages-content .actions .message_actions .message_action__list {
    display: none;
    margin: 0;
    position: absolute;
    background: #fff;
    box-shadow: 0 2px 7px 1px rgba(0, 0, 0, .05), 0 6px 32px 0 rgba(18, 43, 70, .1);
    border-radius: 4px;
    padding: 5px 0;
    min-width: 165px;
    right: -20px;
    top: 35px;
    z-index: 119;
    list-style: none
}

.bp-messages-content .actions .message_actions .message_action__list.open {
    display: block
}

.bp-messages-content .actions .message_actions .message_action__list ul {
    margin: 0
}

.bp-messages-content .actions .message_actions .message_action__list li {
    margin: 0;
    list-style: none
}

.bp-messages-content .actions .message_actions .message_action__list li a {
    font-size: 13px;
    font-weight: inherit;
    color: #939597;
    letter-spacing: -.24px;
    line-height: 1;
    margin-bottom: 1px;
    padding: .5625rem .9375rem;
    display: block
}

.bp-messages-content .actions .message_actions .message_action__list:before {
    content: " ";
    position: absolute;
    width: 0;
    height: 0;
    top: 0;
    right: 27px;
    border: 6px solid #000;
    border-color: #fff #fff transparent transparent;
    -webkit-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    box-shadow: 2px -3px 3px 0 rgba(0, 0, 0, .02);
    z-index: 1002
}

.bp-messages-content form.send-reply .avatar-box {
    padding: .7em 0
}

.bp-messages-content .single-message-thread-header {
    border-bottom: 1px solid #eaeaea;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.bp-messages-content .single-thread-title {
    font-size: 16px
}

.bp-messages-content .single-thread-title .messages-title {
    padding-left: 2em
}

.bp-messages-content .thread-participants {
    float: left;
    margin: 5px 0;
    width: 70%
}

.bp-messages-content .thread-participants dd {
    margin-bottom: 10px
}

.bp-messages-content .thread-participants li {
    float: left;
    margin-left: 5px
}

.bp-messages-content .thread-participants img {
    width: 30px
}

.bp-messages-content #bp-message-thread-list li .message-content blockquote,
.bp-messages-content #bp-message-thread-list li .message-content ol,
.bp-messages-content #bp-message-thread-list li .message-content ul {
    list-style-position: inside;
    margin-left: 0
}

.bp-messages-content ul#message-threads:empty {
    display: none
}

.bp-messages-content #bp-message-thread-header h2:first-child {
    background-color: #eaeaea;
    color: #555;
    font-weight: 700;
    margin: 0;
    padding: .5em
}

.bp-messages-content #message-threads .thread-content a {
    border: 0;
    text-decoration: none
}

.bp-messages-content .standard-form #subject {
    margin-bottom: 20px
}

@media screen and (max-width:540px) {
    .bp-messages-content .single-message-thread-header .actions a[data-bp-tooltip][data-bp-tooltip-pos=left]:after {
        max-width: 100vw;
        white-space: normal;
        min-width: 200px
    }
}

#bp-message-thread-list {
    background: #fafafa;
    border-top: 1px solid #eaeaea;
    clear: both;
    list-style: none;
    padding: 0 1em
}

#bp-message-thread-list:after {
    content: " ";
    clear: both;
    display: table
}

#bp-message-thread-list li {
    background: #fff;
    border: 1px solid #ccc;
    -webkit-box-shadow: -2px 1px 9px 0 #eee;
    -moz-box-shadow: -2px 1px 9px 0 #eee;
    box-shadow: -2px 1px 9px 0 #eee;
    padding: .7em;
    margin: 1em 0;
    width: 100%
}

#bp-message-thread-list .message-metadata .avatar {
    width: 30px
}

#bp-message-thread-list .message-metadata .user-link {
    font-size: 12px;
    display: inline-block;
    color: #222
}

#bp-message-thread-list .message-metadata .user-link strong {
    font-size: 16px;
    font-weight: 600
}

#bp-message-thread-list .message-metadata .user-link strong:after {
    content: "\00b7";
    color: #767676;
    font-size: 20px;
    margin-left: 6px;
    vertical-align: middle;
    display: inline-block
}

#bp-message-thread-list .message-metadata time {
    color: #767676;
    font-size: 14px;
    padding: 0 2px
}

#bp-message-thread-list .message-metadata button {
    padding: 0 .3em
}

#bp-message-thread-list .message-metadata button:before {
    font-size: 16px
}

#bp-message-thread-list .bp-message-content-wrap {
    font-size: 14px;
    clear: both;
    overflow: hidden;
    margin: 0 auto
}

#bp-message-thread-list .bp-message-content-wrap p {
    margin-bottom: 8px
}

#bp-message-thread-list img.avatar {
    float: left;
    margin: 0 10px 0 0
}

#bp-message-thread-list .actions a:before {
    font-size: 18px
}

div.bp-navs#subsubnav.bp-messages-filters .user-messages-bulk-actions {
    margin-right: 15px;
    max-width: 42.5%
}

div#subsubnav:empty {
    display: none
}

input#send-to-input {
    margin-bottom: 20px
}

#compose-personal-li a {
    margin-top: 0
}

#bp-message-load-more:not(.loading),
#bp-messages-next-page,
#bp-messages-prev-page {
    display: none!important
}

#bp-message-load-more {
    background: rgba(255, 255, 255, .7);
    position: absolute;
    top: 60px;
    text-align: center;
    width: 100%;
    left: 0;
    padding: 20px 0;
    margin: 6px 0 0
}

#bp-message-load-more .button {
    font-size: 0;
    padding: 0;
    margin: auto;
    width: auto;
    color: inherit;
    background-color: transparent;
    border: 0
}

#bp-message-load-more .button:focus,
#bp-message-load-more .button:hover {
    outline: 0;
    text-decoration: none;
    color: inherit;
    box-shadow: none
}

#send_message_form .select2-selection--multiple {
    border-color: #d6d6d6;
    padding: 3px 5px
}

#send_message_form .select2-selection__rendered {
    display: flex;
    align-items: center;
    flex-flow: row wrap;
    padding: 0
}

#send_message_form .select2-search.select2-search--inline {
    flex: 1;
    min-width: 0
}

#send_message_form .select2-selection__rendered li {
    margin: 5px
}

#send_message_form .select2-search__field {
    min-width: 120px;
    height: 30px;
    margin: 0;
    border: 0;
    background: 0 0;
    padding: 0 5px
}

.medium-editor-action-close b:before {
    content: "\f153"
}

.bp-messages-content #bp-message-content {
    margin-top: 20px;
    padding: 20px
}

.bp-messages-content #bp-message-content #whats-new-messages-toolbar {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.bp-messages-content #bp-message-content .medium-editor-toolbar {
    top: inherit;
    bottom: 5px;
    z-index: 99;
    background-color: #fff;
    visibility: hidden;
    transition: all ease .3s;
    height: 0;
    right: 0;
    overflow: hidden;
    left: 25px
}

.bp-messages-content #bp-message-content .medium-editor-toolbar.active {
    display: block;
    border-radius: 0;
    z-index: 112;
    visibility: visible;
    bottom: -5px;
    height: 40px
}

.bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-actions {
    background-color: transparent;
    height: auto;
    padding: 0 10px 0 0
}

.bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-actions button {
    box-shadow: none;
    padding: 10px 10px 10px 0;
    min-width: 30px;
    border: 0;
    background-color: transparent!important;
    color: rgba(18, 43, 70, .4)!important
}

.bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-button-active {
    color: #122b46!important;
    background: none transparent!important
}

.bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-action-close {
    padding-right: 0
}

.bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input {
    width: 220px
}

.bp-messages-content #bp-message-content #whats-new-messages-toolbar {
    padding: 5px 15px 0 0;
    width: 100%
}

.bbpress #bbpress-forums .medium-editor-toolbar .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .medium-editor-toolbar .medium-editor-toolbar-actions {
    opacity: 0
}

.bbpress #bbpress-forums .medium-editor-toolbar.active .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .medium-editor-toolbar.active .medium-editor-toolbar-actions {
    opacity: .4
}

.bbpress #bbpress-forums .medium-editor-toolbar.active .medium-editor-toolbar-actions li,
.buddypress #buddypress.buddypress-wrap .medium-editor-toolbar.active .medium-editor-toolbar-actions li {
    pointer-events: none
}

.bbpress #bbpress-forums .medium-editor-toolbar.active.medium-editor-toolbar-active .medium-editor-toolbar-actions,
.buddypress #buddypress.buddypress-wrap .medium-editor-toolbar.active.medium-editor-toolbar-active .medium-editor-toolbar-actions {
    opacity: 1
}

.bbpress #bbpress-forums .medium-editor-toolbar.active.medium-editor-toolbar-active .medium-editor-toolbar-actions li,
.buddypress #buddypress.buddypress-wrap .medium-editor-toolbar.active.medium-editor-toolbar-active .medium-editor-toolbar-actions li {
    pointer-events: auto
}

.messages .select2-dropdown {
    border-color: #d6d6d6
}

.messages .select2-dropdown .select2-results__option[aria-selected=true] {
    display: none
}

.messages-wrapper #subnav .subnav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%
}

.bp-messages-nav-panel {
    display: block;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 360px;
    flex: 0 0 360px;
    min-width: 0
}

@media screen and (max-width:46.8em) {
    .bp-messages-nav-panel {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        min-width: 0
    }
}

.messages-wrapper #subnav #compose-personal-li {
    margin-left: auto;
    margin-right: 10px
}

#inbox {
    pointer-events: none
}

#compose-personal-li a {
    font-size: 0
}

#compose-personal-li a:after {
    content: "\f465";
    font-size: 20px;
    line-height: 1;
    font-family: dashicons;
    vertical-align: top;
    text-align: center;
    transition: color .1s ease-in;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

#message_content {
    margin-bottom: 10px
}

.no-message-wrap {
    padding: 70px 0 20px;
    text-align: center
}

.no-message-content {
    padding: 20px
}

.no-message-wrap .dashicons {
    font-size: 30px;
    width: auto;
    height: auto;
    margin-bottom: 5px
}

#user_messages_search_form,
.bp-search.messages-search {
    width: 100%
}

.bp-user-messages-loading.loading {
    border: 0;
    padding: 15px;
    text-align: center
}

.bp-single-message-wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.bp-avatar-wrap {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    min-width: 0;
    max-width: 40px;
    margin-right: 10px
}

.bp-single-message-content {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    min-width: 0
}

.bp-single-message-content .bb-activity-media-elem {
    min-width: 20%
}

.bp-messages-content-wrapper {
    position: relative
}

.bp-messages-content-wrapper #messages-post-media-uploader.open {
    position: absolute;
    top: 0;
    background: rgba(255, 255, 255, .99);
    height: calc(100% - 245px);
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    left: 0;
    border-radius: 4px;
    padding: 20px;
    overflow: auto
}

.bp-messages-form-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 10px
}

.bp-back-to-thread-list {
    margin-right: 10px
}

body .bp-messages-user-threads {
    max-height: 69vh;
    overflow: auto
}

#bp-message-thread-list {
    max-height: 50vh;
    overflow: auto
}

@media screen and (min-width:1080px) {
    .bp-back-to-thread-list,
    .bp-close-compose-form {
        display: none
    }
}

@media screen and (max-width:1080px) {
    .bp-messages-nav-panel {
        flex: 0 0 100%;
        border-right: 0;
        min-width: 0
    }
    .bp-messages-content {
        display: none
    }
    .bp-compose-message .bp-messages-nav-panel,
    .bp-view-message .bp-messages-nav-panel {
        display: none
    }
    .bp-compose-message .bp-messages-content,
    .bp-view-message .bp-messages-content {
        display: block;
        padding-left: 0
    }
}

@media screen and (max-width:767px) {
    #bp-message-thread-list,
    .bp-messages-user-threads {
        max-height: 400px
    }
    .bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-actions button {
        padding: 10px 5px 10px 0
    }
    .bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-button-first {
        padding-left: 5px!important
    }
}

@media screen and (max-width:560px) {
    .bp-messages-content #bp-message-content #message-reply-form-submit-wrapper {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end;
        margin: 0 -20px
    }
    .bp-messages-content #bp-message-content #message-reply-form-submit-wrapper #whats-new-messages-toolbar {
        padding: 0 15px 0 20px
    }
    .bp-messages-content #bp-message-content #message-reply-form-submit-wrapper #message-reply-new-submit {
        padding: 20px 20px 0;
        text-align: right;
        border-top: 1px solid #ebe9e6;
        width: 100%;
        margin-top: 10px
    }
    .bp-messages-content #bp-message-content .medium-editor-toolbar {
        left: 45px
    }
    .bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-actions button {
        padding: 10px 0;
        min-width: 30px
    }
    .bp-messages-content #bp-message-content .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input {
        max-width: calc(100% - 90px);
        width: auto
    }
    .bp-messages-content #bp-message-content #whats-new-messages-toolbar .media-off+.medium-editor-toolbar {
        left: 10px
    }
}

.buddypress.settings .profile-settings.bp-tables-user select {
    width: 100%
}

#activate-page .bp-messages {
    margin-bottom: 20px
}

.buddypress-wrap #whats-new-post-in-box select,
.buddypress-wrap .filter select {
    border: 1px solid #d6d6d6
}

.buddypress-wrap input.action[disabled] {
    cursor: pointer;
    opacity: .4
}

.buddypress-wrap #notification-bulk-manage[disabled] {
    display: none
}

.buddypress-wrap fieldset legend {
    font-size: inherit;
    font-weight: 600
}

.buddypress-wrap input[type=email]:focus,
.buddypress-wrap input[type=password]:focus,
.buddypress-wrap input[type=tel]:focus,
.buddypress-wrap input[type=text]:focus,
.buddypress-wrap input[type=url]:focus,
.buddypress-wrap textarea:focus {
    -webkit-box-shadow: 0 0 8px #eaeaea;
    -moz-box-shadow: 0 0 8px #eaeaea;
    box-shadow: 0 0 8px #eaeaea
}

.buddypress-wrap select {
    height: auto
}

.buddypress-wrap textarea {
    resize: vertical
}

.buddypress-wrap .standard-form .bp-controls-wrap {
    margin: 1em 0
}

.buddypress-wrap .standard-form .groups-members-search input[type=search],
.buddypress-wrap .standard-form .groups-members-search input[type=text],
.buddypress-wrap .standard-form [data-bp-search] input[type=search],
.buddypress-wrap .standard-form [data-bp-search] input[type=text],
.buddypress-wrap .standard-form input[type=color],
.buddypress-wrap .standard-form input[type=date],
.buddypress-wrap .standard-form input[type=datetime-local],
.buddypress-wrap .standard-form input[type=datetime],
.buddypress-wrap .standard-form input[type=email],
.buddypress-wrap .standard-form input[type=month],
.buddypress-wrap .standard-form input[type=number],
.buddypress-wrap .standard-form input[type=password],
.buddypress-wrap .standard-form input[type=range],
.buddypress-wrap .standard-form input[type=search],
.buddypress-wrap .standard-form input[type=tel],
.buddypress-wrap .standard-form input[type=text],
.buddypress-wrap .standard-form input[type=time],
.buddypress-wrap .standard-form input[type=url],
.buddypress-wrap .standard-form input[type=week],
.buddypress-wrap .standard-form select,
.buddypress-wrap .standard-form textarea {
    background: #fafafa;
    border: 1px solid #d6d6d6;
    border-radius: 0;
    font: inherit;
    font-size: 100%;
    padding: .7em
}

.buddypress-wrap .standard-form input[required],
.buddypress-wrap .standard-form select[required],
.buddypress-wrap .standard-form textarea[required] {
    box-shadow: none;
    outline: 0
}

.buddypress-wrap .standard-form input[required]:focus,
.buddypress-wrap .standard-form select[required]:focus,
.buddypress-wrap .standard-form textarea[required]:focus {
    border-color: #d6d6d6;
    border-width: 1px
}

.buddypress-wrap .standard-form input.invalid[required],
.buddypress-wrap .standard-form select.invalid[required],
.buddypress-wrap .standard-form textarea.invalid[required] {
    border-color: #b71717
}

.buddypress-wrap .standard-form input:not(.button-small),
.buddypress-wrap .standard-form textarea {
    width: 100%
}

.buddypress-wrap .standard-form input[type=checkbox],
.buddypress-wrap .standard-form input[type=radio] {
    margin-right: 5px;
    width: auto
}

.buddypress-wrap .standard-form select {
    padding: 3px
}

.buddypress-wrap .standard-form textarea {
    height: 120px
}

.buddypress-wrap .standard-form textarea#message_content {
    height: 200px
}

.buddypress-wrap .standard-form input[type=password] {
    margin-bottom: 5px
}

.buddypress-wrap .standard-form input:focus,
.buddypress-wrap .standard-form select:focus,
.buddypress-wrap .standard-form textarea:focus {
    background: #fafafa;
    color: #555;
    outline: 0
}

.buddypress-wrap .standard-form label,
.buddypress-wrap .standard-form span.label {
    display: block;
    font-weight: 600;
    margin: 15px 0 5px;
    width: auto
}

.buddypress-wrap .standard-form label[for=delete-account-understand] {
    display: inline-block
}

.buddypress-wrap .standard-form a.clear-value {
    display: block;
    margin-top: 5px;
    outline: 0
}

.buddypress-wrap .standard-form .submit {
    clear: both;
    padding: 15px 0 0
}

.buddypress-wrap .standard-form p.submit {
    margin-bottom: 0
}

.buddypress-wrap .standard-form div.submit input {
    margin-right: 15px
}

.buddypress-wrap .standard-form #invite-list label,
.buddypress-wrap .standard-form p label {
    font-weight: 400;
    margin: auto
}

.buddypress-wrap .standard-form p.description {
    color: #737373;
    margin: 5px 0
}

.buddypress-wrap .standard-form div.checkbox label:nth-child(n+2),
.buddypress-wrap .standard-form div.radio div label {
    color: #737373;
    font-size: 100%;
    font-weight: 400;
    margin: 5px 0 0
}

.buddypress-wrap .standard-form#send-reply textarea {
    width: 97.5%
}

.buddypress-wrap .standard-form#sidebar-login-form label {
    margin-top: 5px
}

.buddypress-wrap .standard-form#sidebar-login-form input[type=password],
.buddypress-wrap .standard-form#sidebar-login-form input[type=text] {
    padding: 4px;
    width: 95%
}

.buddypress-wrap .standard-form.profile-edit input:focus {
    background: #fff
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .standard-form .left-menu {
        float: left
    }
    .buddypress-wrap .standard-form #invite-list ul {
        list-style: none;
        margin: 1%
    }
    .buddypress-wrap .standard-form #invite-list ul li {
        margin: 0 0 0 1%
    }
    .buddypress-wrap .standard-form .main-column {
        margin-left: 190px
    }
    .buddypress-wrap .standard-form .main-column ul#friend-list {
        clear: none;
        float: left
    }
    .buddypress-wrap .standard-form .main-column ul#friend-list h4 {
        clear: none
    }
}

.buddypress-wrap .standard-form .bp-tables-user label {
    margin: 0
}

.buddypress-wrap .standard-form button.visibility-toggle-link {
    font-size: 12px;
    margin: 5px
}

.buddypress-wrap .signup-form label,
.buddypress-wrap .signup-form legend {
    font-weight: 400
}

body.no-js .buddypress #delete_inbox_messages,
body.no-js .buddypress #message-type-select,
body.no-js .buddypress #messages-bulk-management #select-all-messages,
body.no-js .buddypress #notifications-bulk-management #select-all-notifications,
body.no-js .buddypress label[for=message-type-select] {
    display: none
}

.buddypress-wrap .wp-editor-wrap .wp-editor-wrap button,
.buddypress-wrap .wp-editor-wrap .wp-editor-wrap input[type=button],
.buddypress-wrap .wp-editor-wrap .wp-editor-wrap input[type=submit],
.buddypress-wrap .wp-editor-wrap a.button,
.buddypress-wrap .wp-editor-wrap input[type=reset] {
    padding: 0 8px 1px
}

.buddypress-wrap .select-wrap {
    border: 1px solid #eee
}

.buddypress-wrap .select-wrap label {
    display: inline
}

.buddypress-wrap .select-wrap select::-ms-expand {
    display: none
}

.buddypress-wrap .select-wrap select {
    -moz-appearance: none;
    -webkit-appearance: none;
    -o-appearance: none;
    appearance: none;
    border: 0;
    cursor: pointer;
    padding: 5px 25px 5px 10px;
    position: relative;
    z-index: 1;
    width: 100%
}

.buddypress-wrap .select-wrap select,
.buddypress-wrap .select-wrap select:active,
.buddypress-wrap .select-wrap select:focus {
    background: 0 0
}

.buddypress-wrap .select-wrap span.select-arrow {
    font-size: 10px;
    display: inline-block;
    position: absolute;
    right: 8px;
    top: 10px;
    z-index: 0
}

.buddypress-wrap .select-wrap span.select-arrow:before {
    color: #ccc;
    content: "\25BC"
}

.buddypress-wrap .select-wrap:focus .select-arrow:before,
.buddypress-wrap .select-wrap:hover .select-arrow:before {
    color: #a6a6a6
}

.buddypress-wrap .subnav-filters .select-wrap {
    position: relative
}

@media screen and (min-width:32em) {
    .buddypress-wrap .subnav-filters .select-wrap {
        margin-right: 12px
    }
}

.buddypress-wrap .bp-search form:focus,
.buddypress-wrap .bp-search form:hover,
.buddypress-wrap .select-wrap:focus,
.buddypress-wrap .select-wrap:hover {
    border: 1px solid #d5d4d4;
    box-shadow: inset 0 0 3px #eee
}

@media screen and (min-width:32em) {
    .buddypress-wrap .notifications-options-nav .select-wrap {
        float: left
    }
}

ul.bbp-stats {
    display: flex;
    flex-flow: row wrap;
    list-style: none;
    padding: 0;
    margin: 40px -20px;
    width: auto
}

ul.bbp-stats li {
    padding: 0 20px;
    text-align: center;
    margin-bottom: 40px;
    flex: 0 0 50%
}

@media screen and (min-width:46.8em) {
    ul.bbp-stats li {
        flex: 0 0 25%
    }
}

ul.bbp-stats h4 {
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 10px
}

ul.bbp-stats .bbp-count {
    font-size: 30px
}

.buddypress-wrap .bp-dir-search-form,
.buddypress-wrap .bp-messages-search-form:after,
.buddypress-wrap .bp-messages-search-form:before {
    content: " ";
    display: table
}

.buddypress-wrap .bp-dir-search-form,
.buddypress-wrap .bp-messages-search-form:after {
    clear: both
}

.buddypress-wrap form.bp-dir-search-form,
.buddypress-wrap form.bp-invites-search-form,
.buddypress-wrap form.bp-messages-search-form {
    border: 1px solid #eee;
    width: 100%
}

@media screen and (min-width:55em) {
    .buddypress-wrap form.bp-dir-search-form,
    .buddypress-wrap form.bp-invites-search-form,
    .buddypress-wrap form.bp-messages-search-form {
        width: 15em
    }
}

.buddypress-wrap form.bp-dir-search-form label,
.buddypress-wrap form.bp-invites-search-form label,
.buddypress-wrap form.bp-messages-search-form label {
    margin: 0
}

.buddypress-wrap form.bp-dir-search-form button[type=submit],
.buddypress-wrap form.bp-dir-search-form input[type=search],
.buddypress-wrap form.bp-dir-search-form input[type=text],
.buddypress-wrap form.bp-invites-search-form button[type=submit],
.buddypress-wrap form.bp-invites-search-form input[type=search],
.buddypress-wrap form.bp-invites-search-form input[type=text],
.buddypress-wrap form.bp-messages-search-form button[type=submit],
.buddypress-wrap form.bp-messages-search-form input[type=search],
.buddypress-wrap form.bp-messages-search-form input[type=text] {
    background: 0 0;
    border: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    background-clip: padding-box
}

.buddypress-wrap form.bp-dir-search-form input[type=search],
.buddypress-wrap form.bp-dir-search-form input[type=text],
.buddypress-wrap form.bp-invites-search-form input[type=search],
.buddypress-wrap form.bp-invites-search-form input[type=text],
.buddypress-wrap form.bp-messages-search-form input[type=search],
.buddypress-wrap form.bp-messages-search-form input[type=text] {
    float: left;
    line-height: 1.5;
    padding: 3px 10px;
    width: 80%
}

.buddypress-wrap form.bp-dir-search-form button[type=submit],
.buddypress-wrap form.bp-invites-search-form button[type=submit],
.buddypress-wrap form.bp-messages-search-form button[type=submit] {
    float: right;
    font-size: inherit;
    font-weight: 400;
    line-height: 1.5;
    padding: 3px .7em;
    text-align: center;
    text-transform: none;
    width: 20%;
    visibility: visible!important
}

.buddypress-wrap form.bp-dir-search-form button[type=submit] span,
.buddypress-wrap form.bp-invites-search-form button[type=submit] span,
.buddypress-wrap form.bp-messages-search-form button[type=submit] span {
    font-family: dashicons;
    font-size: 18px;
    line-height: 1.6
}

.buddypress-wrap form.bp-dir-search-form button[type=submit].bp-show,
.buddypress-wrap form.bp-invites-search-form button[type=submit].bp-show,
.buddypress-wrap form.bp-messages-search-form button[type=submit].bp-show {
    height: auto;
    left: 0;
    overflow: visible;
    position: static;
    top: 0
}

.buddypress-wrap form.bp-dir-search-form input[type=search]::-webkit-search-cancel-button,
.buddypress-wrap form.bp-invites-search-form input[type=search]::-webkit-search-cancel-button,
.buddypress-wrap form.bp-messages-search-form input[type=search]::-webkit-search-cancel-button {
    -webkit-appearance: searchfield-cancel-button
}

.buddypress-wrap form.bp-dir-search-form input[type=search]::-webkit-search-results-button,
.buddypress-wrap form.bp-dir-search-form input[type=search]::-webkit-search-results-decoration,
.buddypress-wrap form.bp-invites-search-form input[type=search]::-webkit-search-results-button,
.buddypress-wrap form.bp-invites-search-form input[type=search]::-webkit-search-results-decoration,
.buddypress-wrap form.bp-messages-search-form input[type=search]::-webkit-search-results-button,
.buddypress-wrap form.bp-messages-search-form input[type=search]::-webkit-search-results-decoration {
    display: none
}

.buddypress-wrap ul.filters li form label input {
    line-height: 1.4;
    padding: .1em .7em
}

.buddypress-wrap .dir-form {
    clear: both
}

.budypress.no-js form.bp-dir-search-form button[type=submit] {
    height: auto;
    left: 0;
    overflow: visible;
    position: static;
    top: 0
}

.bp-user [data-bp-search] form input[type=search],
.bp-user [data-bp-search] form input[type=text] {
    padding: 6px 10px 7px
}

.buddypress-wrap .bp-tables-report,
.buddypress-wrap .bp-tables-user,
.buddypress-wrap table.forum,
.buddypress-wrap table.wp-profile-fields {
    width: 100%
}

.buddypress-wrap .bp-tables-report thead tr,
.buddypress-wrap .bp-tables-user thead tr,
.buddypress-wrap table.forum thead tr,
.buddypress-wrap table.wp-profile-fields thead tr {
    background: 0 0;
    border-bottom: 2px solid #ccc
}

.buddypress-wrap .bp-tables-report tbody tr,
.buddypress-wrap .bp-tables-user tbody tr,
.buddypress-wrap table.forum tbody tr,
.buddypress-wrap table.wp-profile-fields tbody tr {
    background: #fafafa
}

.buddypress-wrap .bp-tables-report tr td,
.buddypress-wrap .bp-tables-report tr th,
.buddypress-wrap .bp-tables-user tr td,
.buddypress-wrap .bp-tables-user tr th,
.buddypress-wrap table.forum tr td,
.buddypress-wrap table.forum tr th,
.buddypress-wrap table.wp-profile-fields tr td,
.buddypress-wrap table.wp-profile-fields tr th {
    padding: .7em;
    vertical-align: middle
}

.buddypress-wrap .bp-tables-report tr td.label,
.buddypress-wrap .bp-tables-user tr td.label,
.buddypress-wrap table.forum tr td.label,
.buddypress-wrap table.wp-profile-fields tr td.label {
    border-right: 1px solid #eaeaea;
    font-weight: 600;
    width: 25%
}

.buddypress-wrap .bp-tables-report tr.alt td,
.buddypress-wrap .bp-tables-user tr.alt td,
.buddypress-wrap table.wp-profile-fields tr.alt td {
    background: #fafafa
}

.buddypress-wrap table.profile-fields .data {
    padding: .7em 1em
}

.buddypress-wrap table.profile-fields .repeater-separator {
    background: 0 0
}

.buddypress-wrap table.profile-fields tr:last-child {
    border-bottom: none
}

.buddypress-wrap table.notifications td {
    padding: 1em .7em
}

.buddypress-wrap table.notifications .bulk-select-all,
.buddypress-wrap table.notifications .bulk-select-check {
    width: 7%
}

.buddypress-wrap table.notifications .bulk-select-check {
    vertical-align: middle
}

.buddypress-wrap table.notifications .date,
.buddypress-wrap table.notifications .notification-description,
.buddypress-wrap table.notifications .notification-since,
.buddypress-wrap table.notifications .title {
    width: 39%
}

.buddypress-wrap table.notifications .actions,
.buddypress-wrap table.notifications .notification-actions {
    width: 15%
}

.buddypress-wrap table.notification-settings th.title,
.buddypress-wrap table.profile-settings th.title {
    width: 80%
}

.buddypress-wrap table.notifications .notification-actions a.delete,
.buddypress-wrap table.notifications .notification-actions a.mark-read {
    display: inline-block
}

.buddypress-wrap table.notification-settings {
    margin-bottom: 15px;
    text-align: left
}

.buddypress-wrap #groups-notification-settings {
    margin-bottom: 0
}

.buddypress-wrap table.notification-settings td:first-child,
.buddypress-wrap table.notification-settings th.icon,
.buddypress-wrap table.notifications td:first-child,
.buddypress-wrap table.notifications th.icon {
    display: none
}

.buddypress-wrap table.notification-settings .no,
.buddypress-wrap table.notification-settings .yes {
    text-align: center;
    width: 40px;
    vertical-align: middle
}

.buddypress-wrap table#message-threads {
    clear: both
}

.buddypress-wrap table#message-threads .thread-info {
    min-width: 40%
}

.buddypress-wrap table#message-threads .thread-info p {
    margin: 0
}

.buddypress-wrap table#message-threads .thread-info p.thread-excerpt {
    color: #737373;
    font-size: 12px;
    margin-top: 3px
}

.buddypress-wrap table.profile-fields {
    margin-bottom: 20px
}

.buddypress-wrap table.profile-fields:last-child {
    margin-bottom: 0
}

.buddypress-wrap table.profile-fields p {
    margin: 0
}

.buddypress-wrap table.profile-fields p:last-child {
    margin-top: 0
}

.bp-screen-reader-text {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
    word-wrap: normal!important
}

.clearfix:after {
    content: " ";
    clear: both;
    display: table
}

.center-vert {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    align-items: center
}

.bp-hide {
    display: none
}

.bp-show {
    height: auto;
    left: 0;
    overflow: visible;
    position: static;
    top: 0
}

.buddypress .buddypress-wrap .activity-state a,
.buddypress .buddypress-wrap .comment-reply-link,
.buddypress .buddypress-wrap .generic-button a,
.buddypress .buddypress-wrap a.bp-title-button,
.buddypress .buddypress-wrap a.button,
.buddypress .buddypress-wrap button,
.buddypress .buddypress-wrap input[type=button],
.buddypress .buddypress-wrap input[type=reset],
.buddypress .buddypress-wrap input[type=submit],
.buddypress .buddypress-wrap ul.button-nav:not(.button-tabs) li a {
    background: #fff;
    border-color: #ccc;
    border-style: solid;
    border-width: 1px;
    color: #555;
    cursor: pointer;
    font-size: inherit;
    font-weight: 400;
    outline: 0;
    line-height: 1.3;
    padding: .3em .7em;
    text-align: center;
    text-decoration: none;
    width: auto
}

.buddypress .buddypress-wrap .button-small[type=button] {
    padding: 0 8px 1px
}

.buddypress .buddypress-wrap .button-nav li a:focus,
.buddypress .buddypress-wrap .button-nav li a:hover,
.buddypress .buddypress-wrap .button-nav li.current a,
.buddypress .buddypress-wrap .comment-reply-link:focus,
.buddypress .buddypress-wrap .comment-reply-link:hover,
.buddypress .buddypress-wrap .generic-button a:focus,
.buddypress .buddypress-wrap .generic-button a:hover,
.buddypress .buddypress-wrap a.button:focus,
.buddypress .buddypress-wrap a.button:hover,
.buddypress .buddypress-wrap button:focus,
.buddypress .buddypress-wrap button:hover,
.buddypress .buddypress-wrap input[type=button]:focus,
.buddypress .buddypress-wrap input[type=button]:hover,
.buddypress .buddypress-wrap input[type=reset]:focus,
.buddypress .buddypress-wrap input[type=reset]:hover,
.buddypress .buddypress-wrap input[type=submit]:focus,
.buddypress .buddypress-wrap input[type=submit]:hover {
    background: #ededed;
    border-color: #999;
    color: #333;
    outline: 0;
    text-decoration: none
}

.buddypress .buddypress-wrap a.disabled,
.buddypress .buddypress-wrap button.disabled,
.buddypress .buddypress-wrap button.pending,
.buddypress .buddypress-wrap div.pending a,
.buddypress .buddypress-wrap input[type=button].disabled,
.buddypress .buddypress-wrap input[type=button].pending,
.buddypress .buddypress-wrap input[type=reset].disabled,
.buddypress .buddypress-wrap input[type=reset].pending,
.buddypress .buddypress-wrap input[type=submit].pending,
.buddypress .buddypress-wrap input[type=submit][disabled=disabled] {
    border-color: #eee;
    color: #767676;
    cursor: default
}

.buddypress .buddypress-wrap a.disabled:hover,
.buddypress .buddypress-wrap button.disabled:hover,
.buddypress .buddypress-wrap button.pending:hover,
.buddypress .buddypress-wrap div.pending a:hover,
.buddypress .buddypress-wrap input[type=button]:hover.disabled,
.buddypress .buddypress-wrap input[type=button]:hover.pending,
.buddypress .buddypress-wrap input[type=reset]:hover.disabled,
.buddypress .buddypress-wrap input[type=reset]:hover.pending,
.buddypress .buddypress-wrap input[type=submit]:hover.disabled,
.buddypress .buddypress-wrap input[type=submit]:hover.pending {
    border-color: #eee;
    color: #767676
}

.buddypress .buddypress-wrap button.text-button,
.buddypress .buddypress-wrap input.text-button {
    background: 0 0;
    border: 0;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #767676
}

.buddypress .buddypress-wrap button.text-button.small,
.buddypress .buddypress-wrap input.text-button.small {
    font-size: 13px
}

.buddypress .buddypress-wrap button.text-button:focus,
.buddypress .buddypress-wrap button.text-button:hover,
.buddypress .buddypress-wrap input.text-button:focus,
.buddypress .buddypress-wrap input.text-button:hover {
    background: 0 0;
    text-decoration: underline
}

.buddypress .buddypress-wrap .activity-list a.button {
    border: none
}

.buddypress .buddypress-wrap .bp-invites-content ul.bp-list li a.invite-button:hover {
    color: #1fb3dd
}

.buddypress .buddypress-wrap .bp-invites-content ul.bp-list li a.group-remove-invite-button:hover,
.buddypress .buddypress-wrap .bp-invites-content ul.bp-list li a.invite-button:hover,
.buddypress .buddypress-wrap .bp-invites-content ul.bp-list li.selected a.group-remove-invite-button:hover,
.buddypress .buddypress-wrap .bp-invites-content ul.bp-list li.selected a.invite-button:hover {
    color: #a00
}

.buddypress .buddypress-wrap #item-buttons:empty {
    display: none
}

.buddypress .buddypress-wrap input:disabled:focus,
.buddypress .buddypress-wrap input:disabled:hover {
    background: 0 0
}

.buddypress .buddypress-wrap .text-links-list a.button {
    background: 0 0;
    border: none;
    border-right: 1px solid #eee;
    color: #737373;
    display: inline-block;
    padding: .3em 1em
}

.buddypress .buddypress-wrap .text-links-list a.button:visited {
    color: #d6d6d6
}

.buddypress .buddypress-wrap .text-links-list a.button:focus,
.buddypress .buddypress-wrap .text-links-list a.button:hover {
    color: #5087e5
}

.buddypress .buddypress-wrap .text-links-list a:first-child {
    padding-left: 0
}

.buddypress .buddypress-wrap .text-links-list a:last-child {
    border-right: none
}

.buddypress .buddypress-wrap .bp-list.grid .action a,
.buddypress .buddypress-wrap .bp-list.grid .action button {
    border: 1px solid #ccc;
    display: block;
    margin: 0
}

.buddypress .buddypress-wrap .bp-list.grid .action a:focus,
.buddypress .buddypress-wrap .bp-list.grid .action a:hover,
.buddypress .buddypress-wrap .bp-list.grid .action button:focus,
.buddypress .buddypress-wrap .bp-list.grid .action button:hover {
    background: #ededed
}

.buddypress #buddypress .create-button {
    background: 0 0;
    text-align: center
}

.buddypress #buddypress .create-button a:focus,
.buddypress #buddypress .create-button a:hover {
    text-decoration: underline
}

@media screen and (min-width:46.8em) {
    .buddypress #buddypress .create-button {
        float: right
    }
}

.buddypress #buddypress .create-button a {
    border: 1px solid #ccc;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    background-clip: padding-box;
    -webkit-box-shadow: inset 0 0 6px 0 #eaeaea;
    -moz-box-shadow: inset 0 0 6px 0 #eaeaea;
    box-shadow: inset 0 0 6px 0 #eaeaea;
    margin: .2em 0;
    width: auto
}

.buddypress #buddypress .create-button a:focus,
.buddypress #buddypress .create-button a:hover {
    background: 0 0;
    border-color: #ccc;
    -webkit-box-shadow: inset 0 0 12px 0 #eaeaea;
    -moz-box-shadow: inset 0 0 12px 0 #eaeaea;
    box-shadow: inset 0 0 12px 0 #eaeaea
}

@media screen and (min-width:46.8em) {
    .buddypress #buddypress.bp-dir-vert-nav .create-button {
        float: none;
        padding-top: 2em
    }
    .buddypress #buddypress.bp-dir-vert-nav .create-button a {
        margin-right: .5em
    }
}

.buddypress #buddypress.bp-dir-hori-nav .create-button {
    float: left
}

.buddypress #buddypress.bp-dir-hori-nav .create-button a,
.buddypress #buddypress.bp-dir-hori-nav .create-button a:hover {
    background: 0 0;
    border: 0;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin: 0
}

.buddypress-wrap button.ac-reply-cancel,
.buddypress-wrap button.bp-icons {
    background: 0 0;
    border: 0
}

.buddypress-wrap button.bp-icons:focus,
.buddypress-wrap button.bp-icons:hover {
    background: 0 0
}

.buddypress-wrap button.ac-reply-cancel:focus,
.buddypress-wrap button.ac-reply-cancel:hover {
    background: 0 0;
    text-decoration: underline
}

.buddypress-wrap .bp-invites-content li .invite-button span.icons:before,
.buddypress-wrap .bp-invites-filters .invite-button span.icons:before,
.buddypress-wrap .bp-messages-filters li a.messages-button:before,
.buddypress-wrap .feed a:before,
.buddypress-wrap .filter label:before,
.buddypress-wrap span.icons:before {
    font-family: dashicons;
    font-size: 18px
}

.buddypress-wrap .bp-invites-content .item-list li .invite-button span.icons:before {
    font-size: 27px
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .bp-invites-content .item-list li .invite-button span.icons:before {
        font-size: 32px
    }
}

.buddypress-wrap .bp-list a.button.invite-button:focus,
.buddypress-wrap .bp-list a.button.invite-button:hover {
    background: 0 0
}

.buddypress-wrap .filter label:before {
    content: "\f536"
}

.buddypress-wrap div.feed a:before,
.buddypress-wrap li.feed a:before {
    content: "\f303"
}

.buddypress-wrap ul.item-list li .invite-button:not(.group-remove-invite-button) span.icons:before {
    content: "\f502"
}

.buddypress-wrap ul.item-list li .group-remove-invite-button span.icons:before,
.buddypress-wrap ul.item-list li.selected .invite-button span.icons:before {
    content: "\f153"
}

.warn {
    color: #b71717
}

.bp-messages {
    border: 1px solid #ccc;
    margin: 0 0 15px
}

.bp-messages .sitewide-notices {
    display: block;
    margin: 5px;
    padding: .7em
}

.bp-messages.info {
    margin-bottom: 0
}

.bp-messages.updated {
    clear: both;
    display: block
}

.bp-messages.bp-user-messages-feedback {
    border: 0
}

#group-create-body .bp-cover-image-status p.warning {
    background: #0b80a4;
    border: 0;
    -webkit-box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
    color: #fff
}

.bp-feedback:not(.custom-homepage-info) {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-flex-flow: row nowrap;
    -moz-flex-flow: row nowrap;
    -ms-flex-flow: row nowrap;
    -o-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-align: stretch;
    -webkit-align-items: stretch;
    -webkit-box-align: stretch;
    align-items: stretch
}

.bp-feedback {
    background: #fff;
    color: #807f7f;
    -webkit-box-shadow: 0 1px 1px 1px rgba(0, 0, 0, .1);
    -moz-box-shadow: 0 1px 1px 1px rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 1px rgba(0, 0, 0, .1);
    color: #737373;
    margin: 10px 0;
    position: relative
}

.bp-feedback p {
    margin: 0;
    padding: 10px 5px
}

.bp-feedback span.bp-icon {
    color: #fff;
    display: block;
    font-family: dashicons;
    left: 0;
    margin-right: 10px;
    position: relative;
    padding: 0 .5em
}

.bp-feedback .bp-icon {
    font-size: 20px;
    padding: 0 2px
}

.bp-feedback .bp-help-text {
    font-style: italic
}

.bp-feedback .text {
    font-size: 14px;
    margin: 0;
    padding: .7em 0
}

.bp-feedback.no-icon {
    padding: .7em
}

.bp-feedback.small:before {
    line-height: inherit
}

a[data-bp-close] span,
button[data-bp-close] span {
    font-size: 24px
}

.buddypress .buddypress-wrap a[data-bp-close],
.buddypress .buddypress-wrap button[data-bp-close] {
    border: 0;
    padding: 0;
    height: auto;
    margin-bottom: auto;
    margin-top: 10px;
    margin-right: 12px
}

.buddypress .buddypress-wrap a[data-bp-close]:focus,
.buddypress .buddypress-wrap a[data-bp-close]:hover,
.buddypress .buddypress-wrap button[data-bp-close]:focus,
.buddypress .buddypress-wrap button[data-bp-close]:hover {
    background: 0 0
}

.bp-feedback.no-icon a[data-bp-close],
.bp-feedback.no-icon button[data-bp-close] {
    top: -6px;
    right: 6px
}

button[data-bp-close]:hover {
    background-color: transparent
}

.bp-feedback.error .bp-icon,
.bp-feedback.help .bp-icon,
.bp-feedback.info .bp-icon,
.bp-feedback.loading .bp-icon,
.bp-feedback.success .bp-icon,
.bp-feedback.updated .bp-icon,
.bp-feedback.warning .bp-icon {
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    align-items: center
}

.bp-feedback.help .bp-icon,
.bp-feedback.info .bp-icon {
    background-color: #0b80a4
}

.bp-feedback.help .bp-icon:before,
.bp-feedback.info .bp-icon:before {
    content: "\f348"
}

.bp-feedback.error .bp-icon,
.bp-feedback.warning .bp-icon {
    background-color: #d33
}

.bp-feedback.error .bp-icon:before,
.bp-feedback.warning .bp-icon:before {
    content: "\f534"
}

.bp-feedback.loading .bp-icon {
    background-color: #ffd087
}

.bp-feedback.loading .bp-icon:before {
    content: "\f469"
}

.bp-feedback.success .bp-icon,
.bp-feedback.updated .bp-icon {
    background-color: #8a2
}

.bp-feedback.success .bp-icon:before,
.bp-feedback.updated .bp-icon:before {
    content: "\f147"
}

.bp-feedback.help .bp-icon:before {
    content: "\f468"
}

#pass-strength-result {
    background-color: #eee;
    border-color: #ddd;
    border-style: solid;
    border-width: 1px;
    display: none;
    font-weight: 700;
    margin: 10px 0 10px 0;
    padding: .7em;
    text-align: center;
    width: auto
}

#pass-strength-result.show {
    display: block
}

#pass-strength-result.mismatch {
    background-color: #333;
    border-color: transparent;
    color: #fff
}

#pass-strength-result.bad,
#pass-strength-result.error {
    background-color: #ffb78c;
    border-color: #ff853c;
    color: #fff
}

#pass-strength-result.short {
    background-color: #ffa0a0;
    border-color: #f04040;
    color: #fff
}

#pass-strength-result.strong {
    background-color: #66d66e;
    border-color: #438c48;
    color: #fff
}

.standard-form#signup_form div div.error {
    background: #faa;
    color: #a00;
    margin: 0 0 10px 0;
    padding: .7em;
    width: 90%
}

.accept,
.reject {
    float: left;
    margin-left: 10px
}

.members-list.grid .bp-ajax-message {
    background: rgba(255, 255, 255, .9);
    border: 1px solid #eee;
    font-size: 14px;
    left: 2%;
    position: absolute;
    padding: .7em 1em;
    right: 2%;
    top: 30px
}

.buddypress.widget .item-options {
    font-size: 14px
}

.buddypress.widget ul.item-list {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-flex-flow: column nowrap;
    -moz-flex-flow: column nowrap;
    -ms-flex-flow: column nowrap;
    -o-flex-flow: column nowrap;
    flex-flow: column nowrap;
    list-style: none;
    margin: 10px -2%;
    overflow: hidden
}

@media screen and (min-width:32em) {
    .buddypress.widget ul.item-list {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        -webkit-flex-flow: row wrap;
        -moz-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
        -o-flex-flow: row wrap;
        flex-flow: row wrap
    }
}

.buddypress.widget ul.item-list li {
    border: 1px solid #eee;
    -ms-flex-align: stretch;
    -webkit-align-items: stretch;
    -webkit-box-align: stretch;
    align-items: stretch;
    -webkit-flex: 1 1 46%;
    -moz-flex: 1 1 46%;
    -ms-flex: 1 1 46%;
    -o-flex: 1 1 46%;
    flex: 1 1 46%;
    margin: 2%
}

@media screen and (min-width:75em) {
    .buddypress.widget ul.item-list li {
        -webkit-flex: 0 1 20%;
        -moz-flex: 0 1 20%;
        -ms-flex: 0 1 20%;
        -o-flex: 0 1 20%;
        flex: 0 1 20%
    }
}

.buddypress.widget ul.item-list li .item-avatar {
    padding: .7em;
    text-align: center
}

.buddypress.widget ul.item-list li .item-avatar .avatar {
    width: 60%
}

.buddypress.widget ul.item-list li .item {
    padding: 0 .7em .7em
}

.buddypress.widget ul.item-list li .item .item-meta {
    font-size: 12px;
    overflow-wrap: break-word
}

.buddypress.widget .activity-list {
    padding: 0
}

.buddypress.widget .activity-list blockquote {
    margin: 0 0 1.5em;
    overflow: visible;
    padding: 0 0 .75em .75em
}

.buddypress.widget .activity-list img {
    margin-bottom: .5em
}

.buddypress.widget .avatar-block {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    -moz-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    -o-flex-flow: row wrap;
    flex-flow: row wrap
}

.buddypress.widget .avatar-block img {
    margin-bottom: 1em;
    margin-right: 1em
}

.buddypress.widget .activity-update .update-item {
    display: flex
}

.buddypress.widget .activity-update .update-item img {
    box-shadow: none
}

.buddypress.widget .activity-update .update-item cite {
    flex: 0 0 50px;
    min-width: 0;
    margin-right: 10px
}

.buddypress.widget .activity-update .update-item cite a {
    box-shadow: none
}

.buddypress.widget .activity-update .update-item cite img {
    width: 100%
}

.buddypress.widget .activity-update .update-item a img {
    margin-bottom: 0
}

.widget-area .buddypress.widget ul.item-list li {
    -webkit-flex: 0 1 46%;
    -moz-flex: 0 1 46%;
    -ms-flex: 0 1 46%;
    -o-flex: 0 1 46%;
    flex: 0 1 46%;
    margin: 2% 2% 10px
}

@media screen and (min-width:75em) {
    .widget-area .buddypress.widget ul.item-list li .avatar {
        width: 100%
    }
}

@media screen and (min-width:75em) {
    .widget-area .buddypress.widget ul.item-list {
        margin: 10px -2%;
        width: 100%
    }
    .widget-area .buddypress.widget ul.item-list li {
        -webkit-flex: 0 1 auto;
        -moz-flex: 0 1 auto;
        -ms-flex: 0 1 auto;
        -o-flex: 0 1 auto;
        flex: 0 1 auto;
        margin: 10px 2% 1%;
        width: 46%
    }
}

#buddypress-wrap * {
    transition: opacity .1s ease-in-out .1s
}

#buddypress-wrap a.button,
#buddypress-wrap a.generic-button,
#buddypress-wrap button,
#buddypress-wrap input[type=reset],
#buddypress-wrap input[type=submit] {
    transition: background .1s ease-in-out .1s, color .1s ease-in-out .1s, border-color .1s ease-in-out .1s
}

.buddypress-wrap a.loading,
.buddypress-wrap input.loading {
    -moz-animation: loader-pulsate .5s infinite ease-in-out alternate;
    -webkit-animation: loader-pulsate .5s infinite ease-in-out alternate;
    animation: loader-pulsate .5s infinite ease-in-out alternate;
    border-color: #aaa
}

@-webkit-keyframes loader-pulsate {
    from {
        border-color: #aaa;
        -webkit-box-shadow: 0 0 6px #ccc;
        box-shadow: 0 0 6px #ccc
    }
    to {
        border-color: #ccc;
        -webkit-box-shadow: 0 0 6px #f8f8f8;
        box-shadow: 0 0 6px #f8f8f8
    }
}

@-moz-keyframes loader-pulsate {
    from {
        border-color: #aaa;
        -moz-box-shadow: 0 0 6px #ccc;
        box-shadow: 0 0 6px #ccc
    }
    to {
        border-color: #ccc;
        -moz-box-shadow: 0 0 6px #f8f8f8;
        box-shadow: 0 0 6px #f8f8f8
    }
}

@keyframes loader-pulsate {
    from {
        border-color: #aaa;
        -moz-box-shadow: 0 0 6px #ccc;
        box-shadow: 0 0 6px #ccc
    }
    to {
        border-color: #ccc;
        -moz-box-shadow: 0 0 6px #f8f8f8;
        box-shadow: 0 0 6px #f8f8f8
    }
}

.buddypress-wrap a.loading:hover,
.buddypress-wrap input.loading:hover {
    color: #777
}

.animate-spin {
    animation: spin 2s infinite linear;
    display: inline-block
}

@-moz-keyframes spin {
    0% {
        transform: rotate(0)
    }
    100% {
        transform: rotate(359deg)
    }
}

@-webkit-keyframes spin {
    0% {
        transform: rotate(0)
    }
    100% {
        transform: rotate(359deg)
    }
}

@-o-keyframes spin {
    0% {
        transform: rotate(0)
    }
    100% {
        transform: rotate(359deg)
    }
}

@-ms-keyframes spin {
    0% {
        transform: rotate(0)
    }
    100% {
        transform: rotate(359deg)
    }
}

@keyframes spin {
    0% {
        transform: rotate(0)
    }
    100% {
        transform: rotate(359deg)
    }
}

[class*=hint--] {
    position: relative;
    display: inline-block
}

[class*=hint--]:after,
[class*=hint--]:before {
    position: absolute;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: hidden;
    opacity: 0;
    z-index: 1000000;
    pointer-events: none;
    -webkit-transition: .3s ease;
    -moz-transition: .3s ease;
    transition: .3s ease;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    transition-delay: 0s
}

[class*=hint--]:hover:after,
[class*=hint--]:hover:before {
    visibility: visible;
    opacity: 1
}

[class*=hint--]:hover:after,
[class*=hint--]:hover:before {
    -webkit-transition-delay: .1s;
    -moz-transition-delay: .1s;
    transition-delay: .1s
}

[class*=hint--]:before {
    content: "";
    position: absolute;
    background: 0 0;
    border: 6px solid transparent;
    z-index: 1000001
}

[class*=hint--]:after {
    background: #383838;
    color: #fff;
    padding: 8px 10px;
    font-size: 12px;
    font-family: "Helvetica Neue", helvetica, arial, sans-serif;
    line-height: 12px;
    white-space: nowrap
}

[class*=hint--][aria-label]:after {
    content: attr(aria-label)
}

[class*=hint--][data-hint]:after {
    content: attr(data-hint)
}

[aria-label=""]:after,
[aria-label=""]:before,
[data-hint=""]:after,
[data-hint=""]:before {
    display: none!important
}

.hint--top-left:before {
    border-top-color: #383838
}

.hint--top-right:before {
    border-top-color: #383838
}

.hint--top:before {
    border-top-color: #383838
}

.hint--bottom-left:before {
    border-bottom-color: #383838
}

.hint--bottom-right:before {
    border-bottom-color: #383838
}

.hint--bottom:before {
    border-bottom-color: #383838
}

.hint--left:before {
    border-left-color: #383838
}

.hint--right:before {
    border-right-color: #383838
}

.hint--top:before {
    margin-bottom: -11px
}

.hint--top:after,
.hint--top:before {
    bottom: 100%;
    left: 50%
}

.hint--top:before {
    left: calc(50% - 6px)
}

.hint--top:after {
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    transform: translateX(-50%)
}

.hint--top:hover:before {
    -webkit-transform: translateY(-8px);
    -moz-transform: translateY(-8px);
    transform: translateY(-8px)
}

.hint--top:hover:after {
    -webkit-transform: translateX(-50%) translateY(-8px);
    -moz-transform: translateX(-50%) translateY(-8px);
    transform: translateX(-50%) translateY(-8px)
}

.hint--bottom:before {
    margin-top: -11px
}

.hint--bottom:after,
.hint--bottom:before {
    top: 100%;
    left: 50%
}

.hint--bottom:before {
    left: calc(50% - 6px)
}

.hint--bottom:after {
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    transform: translateX(-50%)
}

.hint--bottom:hover:before {
    -webkit-transform: translateY(8px);
    -moz-transform: translateY(8px);
    transform: translateY(8px)
}

.hint--bottom:hover:after {
    -webkit-transform: translateX(-50%) translateY(8px);
    -moz-transform: translateX(-50%) translateY(8px);
    transform: translateX(-50%) translateY(8px)
}

.hint--right:before {
    margin-left: -11px;
    margin-bottom: -6px
}

.hint--right:after {
    margin-bottom: -14px
}

.hint--right:after,
.hint--right:before {
    left: 100%;
    bottom: 50%
}

.hint--right:hover:before {
    -webkit-transform: translateX(8px);
    -moz-transform: translateX(8px);
    transform: translateX(8px)
}

.hint--right:hover:after {
    -webkit-transform: translateX(8px);
    -moz-transform: translateX(8px);
    transform: translateX(8px)
}

.hint--left:before {
    margin-right: -11px;
    margin-bottom: -6px
}

.hint--left:after {
    margin-bottom: -14px
}

.hint--left:after,
.hint--left:before {
    right: 100%;
    bottom: 50%
}

.hint--left:hover:before {
    -webkit-transform: translateX(-8px);
    -moz-transform: translateX(-8px);
    transform: translateX(-8px)
}

.hint--left:hover:after {
    -webkit-transform: translateX(-8px);
    -moz-transform: translateX(-8px);
    transform: translateX(-8px)
}

.hint--top-left:before {
    margin-bottom: -11px
}

.hint--top-left:after,
.hint--top-left:before {
    bottom: 100%;
    left: 50%
}

.hint--top-left:before {
    left: calc(50% - 6px)
}

.hint--top-left:after {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    transform: translateX(-100%)
}

.hint--top-left:after {
    margin-left: 12px
}

.hint--top-left:hover:before {
    -webkit-transform: translateY(-8px);
    -moz-transform: translateY(-8px);
    transform: translateY(-8px)
}

.hint--top-left:hover:after {
    -webkit-transform: translateX(-100%) translateY(-8px);
    -moz-transform: translateX(-100%) translateY(-8px);
    transform: translateX(-100%) translateY(-8px)
}

.hint--top-right:before {
    margin-bottom: -11px
}

.hint--top-right:after,
.hint--top-right:before {
    bottom: 100%;
    left: 50%
}

.hint--top-right:before {
    left: calc(50% - 6px)
}

.hint--top-right:after {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    transform: translateX(0)
}

.hint--top-right:after {
    margin-left: -12px
}

.hint--top-right:hover:before {
    -webkit-transform: translateY(-8px);
    -moz-transform: translateY(-8px);
    transform: translateY(-8px)
}

.hint--top-right:hover:after {
    -webkit-transform: translateY(-8px);
    -moz-transform: translateY(-8px);
    transform: translateY(-8px)
}

.hint--bottom-left:before {
    margin-top: -11px
}

.hint--bottom-left:after,
.hint--bottom-left:before {
    top: 100%;
    left: 50%
}

.hint--bottom-left:before {
    left: calc(50% - 6px)
}

.hint--bottom-left:after {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    transform: translateX(-100%)
}

.hint--bottom-left:after {
    margin-left: 12px
}

.hint--bottom-left:hover:before {
    -webkit-transform: translateY(8px);
    -moz-transform: translateY(8px);
    transform: translateY(8px)
}

.hint--bottom-left:hover:after {
    -webkit-transform: translateX(-100%) translateY(8px);
    -moz-transform: translateX(-100%) translateY(8px);
    transform: translateX(-100%) translateY(8px)
}

.hint--bottom-right:before {
    margin-top: -11px
}

.hint--bottom-right:after,
.hint--bottom-right:before {
    top: 100%;
    left: 50%
}

.hint--bottom-right:before {
    left: calc(50% - 6px)
}

.hint--bottom-right:after {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    transform: translateX(0)
}

.hint--bottom-right:after {
    margin-left: -12px
}

.hint--bottom-right:hover:before {
    -webkit-transform: translateY(8px);
    -moz-transform: translateY(8px);
    transform: translateY(8px)
}

.hint--bottom-right:hover:after {
    -webkit-transform: translateY(8px);
    -moz-transform: translateY(8px);
    transform: translateY(8px)
}

.hint--large:after,
.hint--medium:after,
.hint--small:after {
    white-space: normal;
    line-height: 1.4;
    word-wrap: break-word
}

.hint--small:after {
    width: 80px
}

.hint--medium:after {
    width: 150px
}

.hint--large:after {
    width: 300px
}

[class*=hint--]:after {
    text-shadow: 0 -1px 0 #000;
    box-shadow: 4px 4px 8px rgba(0, 0, 0, .3)
}

.hint--error:after {
    background-color: #b34e4d;
    text-shadow: 0 -1px 0 #592726
}

.hint--error.hint--top-left:before {
    border-top-color: #b34e4d
}

.hint--error.hint--top-right:before {
    border-top-color: #b34e4d
}

.hint--error.hint--top:before {
    border-top-color: #b34e4d
}

.hint--error.hint--bottom-left:before {
    border-bottom-color: #b34e4d
}

.hint--error.hint--bottom-right:before {
    border-bottom-color: #b34e4d
}

.hint--error.hint--bottom:before {
    border-bottom-color: #b34e4d
}

.hint--error.hint--left:before {
    border-left-color: #b34e4d
}

.hint--error.hint--right:before {
    border-right-color: #b34e4d
}

.hint--warning:after {
    background-color: #c09854;
    text-shadow: 0 -1px 0 #6c5328
}

.hint--warning.hint--top-left:before {
    border-top-color: #c09854
}

.hint--warning.hint--top-right:before {
    border-top-color: #c09854
}

.hint--warning.hint--top:before {
    border-top-color: #c09854
}

.hint--warning.hint--bottom-left:before {
    border-bottom-color: #c09854
}

.hint--warning.hint--bottom-right:before {
    border-bottom-color: #c09854
}

.hint--warning.hint--bottom:before {
    border-bottom-color: #c09854
}

.hint--warning.hint--left:before {
    border-left-color: #c09854
}

.hint--warning.hint--right:before {
    border-right-color: #c09854
}

.hint--info:after {
    background-color: #3986ac;
    text-shadow: 0 -1px 0 #1a3c4d
}

.hint--info.hint--top-left:before {
    border-top-color: #3986ac
}

.hint--info.hint--top-right:before {
    border-top-color: #3986ac
}

.hint--info.hint--top:before {
    border-top-color: #3986ac
}

.hint--info.hint--bottom-left:before {
    border-bottom-color: #3986ac
}

.hint--info.hint--bottom-right:before {
    border-bottom-color: #3986ac
}

.hint--info.hint--bottom:before {
    border-bottom-color: #3986ac
}

.hint--info.hint--left:before {
    border-left-color: #3986ac
}

.hint--info.hint--right:before {
    border-right-color: #3986ac
}

.hint--success:after {
    background-color: #458746;
    text-shadow: 0 -1px 0 #1a321a
}

.hint--success.hint--top-left:before {
    border-top-color: #458746
}

.hint--success.hint--top-right:before {
    border-top-color: #458746
}

.hint--success.hint--top:before {
    border-top-color: #458746
}

.hint--success.hint--bottom-left:before {
    border-bottom-color: #458746
}

.hint--success.hint--bottom-right:before {
    border-bottom-color: #458746
}

.hint--success.hint--bottom:before {
    border-bottom-color: #458746
}

.hint--success.hint--left:before {
    border-left-color: #458746
}

.hint--success.hint--right:before {
    border-right-color: #458746
}

.hint--always:after,
.hint--always:before {
    opacity: 1;
    visibility: visible
}

.hint--always.hint--top:before {
    -webkit-transform: translateY(-8px);
    -moz-transform: translateY(-8px);
    transform: translateY(-8px)
}

.hint--always.hint--top:after {
    -webkit-transform: translateX(-50%) translateY(-8px);
    -moz-transform: translateX(-50%) translateY(-8px);
    transform: translateX(-50%) translateY(-8px)
}

.hint--always.hint--top-left:before {
    -webkit-transform: translateY(-8px);
    -moz-transform: translateY(-8px);
    transform: translateY(-8px)
}

.hint--always.hint--top-left:after {
    -webkit-transform: translateX(-100%) translateY(-8px);
    -moz-transform: translateX(-100%) translateY(-8px);
    transform: translateX(-100%) translateY(-8px)
}

.hint--always.hint--top-right:before {
    -webkit-transform: translateY(-8px);
    -moz-transform: translateY(-8px);
    transform: translateY(-8px)
}

.hint--always.hint--top-right:after {
    -webkit-transform: translateY(-8px);
    -moz-transform: translateY(-8px);
    transform: translateY(-8px)
}

.hint--always.hint--bottom:before {
    -webkit-transform: translateY(8px);
    -moz-transform: translateY(8px);
    transform: translateY(8px)
}

.hint--always.hint--bottom:after {
    -webkit-transform: translateX(-50%) translateY(8px);
    -moz-transform: translateX(-50%) translateY(8px);
    transform: translateX(-50%) translateY(8px)
}

.hint--always.hint--bottom-left:before {
    -webkit-transform: translateY(8px);
    -moz-transform: translateY(8px);
    transform: translateY(8px)
}

.hint--always.hint--bottom-left:after {
    -webkit-transform: translateX(-100%) translateY(8px);
    -moz-transform: translateX(-100%) translateY(8px);
    transform: translateX(-100%) translateY(8px)
}

.hint--always.hint--bottom-right:before {
    -webkit-transform: translateY(8px);
    -moz-transform: translateY(8px);
    transform: translateY(8px)
}

.hint--always.hint--bottom-right:after {
    -webkit-transform: translateY(8px);
    -moz-transform: translateY(8px);
    transform: translateY(8px)
}

.hint--always.hint--left:before {
    -webkit-transform: translateX(-8px);
    -moz-transform: translateX(-8px);
    transform: translateX(-8px)
}

.hint--always.hint--left:after {
    -webkit-transform: translateX(-8px);
    -moz-transform: translateX(-8px);
    transform: translateX(-8px)
}

.hint--always.hint--right:before {
    -webkit-transform: translateX(8px);
    -moz-transform: translateX(8px);
    transform: translateX(8px)
}

.hint--always.hint--right:after {
    -webkit-transform: translateX(8px);
    -moz-transform: translateX(8px);
    transform: translateX(8px)
}

.hint--rounded:after {
    border-radius: 4px
}

.hint--no-animate:after,
.hint--no-animate:before {
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    transition-duration: 0s
}

.hint--bounce:after,
.hint--bounce:before {
    -webkit-transition: opacity .3s ease, visibility .3s ease, -webkit-transform .3s cubic-bezier(.71, 1.7, .77, 1.24);
    -moz-transition: opacity .3s ease, visibility .3s ease, -moz-transform .3s cubic-bezier(.71, 1.7, .77, 1.24);
    transition: opacity .3s ease, visibility .3s ease, transform .3s cubic-bezier(.71, 1.7, .77, 1.24)
}

button[data-bp-tooltip] {
    overflow: visible
}

[data-bp-tooltip] {
    position: relative;
    cursor: pointer
}

[data-bp-tooltip]:after {
    pointer-events: none;
    opacity: 0;
    transition: all .18s ease-out .18s;
    font-weight: 500;
    font-size: 13px;
    letter-spacing: -.24px;
    background: rgba(18, 43, 70, .95);
    border-radius: 4px;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .22);
    color: #fff;
    content: attr(data-bp-tooltip);
    line-height: 1.3;
    padding: 7px 15px;
    position: absolute;
    white-space: nowrap;
    z-index: 10
}

[data-bp-tooltip]:before {
    background: no-repeat url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http://www.w3.org/2000/svg%22%20width%3D%2236px%22%20height%3D%2212px%22%3E%3Cpath%20fill%3D%22rgba(18, 43, 70, 0.95)%22%20transform%3D%22rotate(0)%22%20d%3D%22M2.658,0.000%20C-13.615,0.000%2050.938,0.000%2034.662,0.000%20C28.662,0.000%2023.035,12.002%2018.660,12.002%20C14.285,12.002%208.594,0.000%202.658,0.000%20Z%22/%3E%3C/svg%3E");
    background-size: 100% auto;
    width: 18px;
    height: 6px;
    pointer-events: none;
    opacity: 0;
    transition: all .18s ease-out .18s;
    content: "";
    position: absolute;
    z-index: 10
}

[data-bp-tooltip]:hover:after,
[data-bp-tooltip]:hover:before,
[data-bp-tooltip][data-bp-tooltip-visible]:after,
[data-bp-tooltip][data-bp-tooltip-visible]:before {
    opacity: 1;
    pointer-events: auto
}

[data-bp-tooltip].font-awesome:after {
    font-family: FontAwesome
}

[data-bp-tooltip][data-bp-tooltip-break]:after {
    white-space: pre
}

[data-bp-tooltip][data-bp-tooltip-blunt]:after,
[data-bp-tooltip][data-bp-tooltip-blunt]:before {
    transition: none
}

[data-bp-tooltip][data-bp-tooltip-pos=up]:after {
    bottom: 100%;
    left: 50%;
    margin-bottom: 11px;
    transform: translate(-50%, 10px);
    transform-origin: top
}

[data-bp-tooltip][data-bp-tooltip-pos=up]:before {
    bottom: 100%;
    left: 50%;
    margin-bottom: 5px;
    transform: translate(-50%, 10px);
    transform-origin: top
}

[data-bp-tooltip][data-bp-tooltip-pos=up]:hover:after,
[data-bp-tooltip][data-bp-tooltip-pos=up][data-bp-tooltip-visible]:after {
    transform: translate(-50%, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=up]:hover:before,
[data-bp-tooltip][data-bp-tooltip-pos=up][data-bp-tooltip-visible]:before {
    transform: translate(-50%, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=up-left]:after {
    bottom: 100%;
    left: 0;
    margin-bottom: 11px;
    transform: translate(0, 10px);
    transform-origin: top
}

[data-bp-tooltip][data-bp-tooltip-pos=up-left]:before {
    bottom: 100%;
    left: 5px;
    margin-bottom: 5px;
    transform: translate(0, 10px);
    transform-origin: top
}

[data-bp-tooltip][data-bp-tooltip-pos=up-left]:hover:after,
[data-bp-tooltip][data-bp-tooltip-pos=up-left][data-bp-tooltip-visible]:after {
    transform: translate(0, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=up-left]:hover:before,
[data-bp-tooltip][data-bp-tooltip-pos=up-left][data-bp-tooltip-visible]:before {
    transform: translate(0, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=up-right]:after {
    bottom: 100%;
    right: 0;
    margin-bottom: 11px;
    transform: translate(0, 10px);
    transform-origin: top
}

[data-bp-tooltip][data-bp-tooltip-pos=up-right]:before {
    bottom: 100%;
    right: 5px;
    margin-bottom: 5px;
    transform: translate(0, 10px);
    transform-origin: top
}

[data-bp-tooltip][data-bp-tooltip-pos=up-right]:hover:after,
[data-bp-tooltip][data-bp-tooltip-pos=up-right][data-bp-tooltip-visible]:after {
    transform: translate(0, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=up-right]:hover:before,
[data-bp-tooltip][data-bp-tooltip-pos=up-right][data-bp-tooltip-visible]:before {
    transform: translate(0, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=down]:after {
    left: 50%;
    margin-top: 11px;
    top: 100%;
    transform: translate(-50%, -10px)
}

[data-bp-tooltip][data-bp-tooltip-pos=down]:before {
    left: 50%;
    margin-top: 5px;
    top: 100%;
    background: no-repeat url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http://www.w3.org/2000/svg%22%20width%3D%2236px%22%20height%3D%2212px%22%3E%3Cpath%20fill%3D%22rgba(18, 43, 70, 0.95)%22%20transform%3D%22rotate(180 18 6)%22%20d%3D%22M2.658,0.000%20C-13.615,0.000%2050.938,0.000%2034.662,0.000%20C28.662,0.000%2023.035,12.002%2018.660,12.002%20C14.285,12.002%208.594,0.000%202.658,0.000%20Z%22/%3E%3C/svg%3E");
    background-size: 100% auto;
    width: 18px;
    height: 6px;
    transform: translate(-50%, -10px)
}

[data-bp-tooltip][data-bp-tooltip-pos=down]:hover:after,
[data-bp-tooltip][data-bp-tooltip-pos=down][data-bp-tooltip-visible]:after {
    transform: translate(-50%, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=down]:hover:before,
[data-bp-tooltip][data-bp-tooltip-pos=down][data-bp-tooltip-visible]:before {
    transform: translate(-50%, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=down-left]:after {
    left: 0;
    margin-top: 11px;
    top: 100%;
    transform: translate(0, -10px)
}

[data-bp-tooltip][data-bp-tooltip-pos=down-left]:before {
    left: 5px;
    margin-top: 5px;
    top: 100%;
    background: no-repeat url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http://www.w3.org/2000/svg%22%20width%3D%2236px%22%20height%3D%2212px%22%3E%3Cpath%20fill%3D%22rgba(18, 43, 70, 0.95)%22%20transform%3D%22rotate(180 18 6)%22%20d%3D%22M2.658,0.000%20C-13.615,0.000%2050.938,0.000%2034.662,0.000%20C28.662,0.000%2023.035,12.002%2018.660,12.002%20C14.285,12.002%208.594,0.000%202.658,0.000%20Z%22/%3E%3C/svg%3E");
    background-size: 100% auto;
    width: 18px;
    height: 6px;
    transform: translate(0, -10px)
}

[data-bp-tooltip][data-bp-tooltip-pos=down-left]:hover:after,
[data-bp-tooltip][data-bp-tooltip-pos=down-left][data-bp-tooltip-visible]:after {
    transform: translate(0, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=down-left]:hover:before,
[data-bp-tooltip][data-bp-tooltip-pos=down-left][data-bp-tooltip-visible]:before {
    transform: translate(0, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=down-right]:after {
    right: 0;
    margin-top: 11px;
    top: 100%;
    transform: translate(0, -10px)
}

[data-bp-tooltip][data-bp-tooltip-pos=down-right]:before {
    right: 5px;
    margin-top: 5px;
    top: 100%;
    background: no-repeat url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http://www.w3.org/2000/svg%22%20width%3D%2236px%22%20height%3D%2212px%22%3E%3Cpath%20fill%3D%22rgba(18, 43, 70, 0.95)%22%20transform%3D%22rotate(180 18 6)%22%20d%3D%22M2.658,0.000%20C-13.615,0.000%2050.938,0.000%2034.662,0.000%20C28.662,0.000%2023.035,12.002%2018.660,12.002%20C14.285,12.002%208.594,0.000%202.658,0.000%20Z%22/%3E%3C/svg%3E");
    background-size: 100% auto;
    width: 18px;
    height: 6px;
    transform: translate(0, -10px)
}

[data-bp-tooltip][data-bp-tooltip-pos=down-right]:hover:after,
[data-bp-tooltip][data-bp-tooltip-pos=down-right][data-bp-tooltip-visible]:after {
    transform: translate(0, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=down-right]:hover:before,
[data-bp-tooltip][data-bp-tooltip-pos=down-right][data-bp-tooltip-visible]:before {
    transform: translate(0, 0)
}

[data-bp-tooltip][data-bp-tooltip-pos=left]:after {
    margin-right: 11px;
    right: 100%;
    top: 50%;
    transform: translate(10px, -50%)
}

[data-bp-tooltip][data-bp-tooltip-pos=left]:before {
    margin-right: 5px;
    right: 100%;
    top: 50%;
    background: no-repeat url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http://www.w3.org/2000/svg%22%20width%3D%2212px%22%20height%3D%2236px%22%3E%3Cpath%20fill%3D%22rgba(18, 43, 70, 0.95)%22%20transform%3D%22rotate(-90 18 18)%22%20d%3D%22M2.658,0.000%20C-13.615,0.000%2050.938,0.000%2034.662,0.000%20C28.662,0.000%2023.035,12.002%2018.660,12.002%20C14.285,12.002%208.594,0.000%202.658,0.000%20Z%22/%3E%3C/svg%3E");
    background-size: 100% auto;
    width: 6px;
    height: 18px;
    transform: translate(10px, -50%)
}

[data-bp-tooltip][data-bp-tooltip-pos=left]:hover:after,
[data-bp-tooltip][data-bp-tooltip-pos=left][data-bp-tooltip-visible]:after {
    transform: translate(0, -50%)
}

[data-bp-tooltip][data-bp-tooltip-pos=left]:hover:before,
[data-bp-tooltip][data-bp-tooltip-pos=left][data-bp-tooltip-visible]:before {
    transform: translate(0, -50%)
}

[data-bp-tooltip][data-bp-tooltip-pos=right]:after {
    left: 100%;
    margin-left: 11px;
    top: 50%;
    transform: translate(-10px, -50%)
}

[data-bp-tooltip][data-bp-tooltip-pos=right]:before {
    left: 100%;
    margin-left: 5px;
    top: 50%;
    background: no-repeat url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http://www.w3.org/2000/svg%22%20width%3D%2212px%22%20height%3D%2236px%22%3E%3Cpath%20fill%3D%22rgba(18, 43, 70, 0.95)%22%20transform%3D%22rotate(90 6 6)%22%20d%3D%22M2.658,0.000%20C-13.615,0.000%2050.938,0.000%2034.662,0.000%20C28.662,0.000%2023.035,12.002%2018.660,12.002%20C14.285,12.002%208.594,0.000%202.658,0.000%20Z%22/%3E%3C/svg%3E");
    background-size: 100% auto;
    width: 6px;
    height: 18px;
    transform: translate(-10px, -50%)
}

[data-bp-tooltip][data-bp-tooltip-pos=right]:hover:after,
[data-bp-tooltip][data-bp-tooltip-pos=right][data-bp-tooltip-visible]:after {
    transform: translate(0, -50%)
}

[data-bp-tooltip][data-bp-tooltip-pos=right]:hover:before,
[data-bp-tooltip][data-bp-tooltip-pos=right][data-bp-tooltip-visible]:before {
    transform: translate(0, -50%)
}

[data-bp-tooltip][data-bp-tooltip-length=small]:after {
    white-space: normal;
    width: 80px
}

[data-bp-tooltip][data-bp-tooltip-length=medium]:after {
    white-space: normal;
    width: 150px
}

[data-bp-tooltip][data-bp-tooltip-length=large]:after {
    white-space: normal;
    width: 260px
}

[data-bp-tooltip][data-bp-tooltip-length=xlarge]:after {
    white-space: normal;
    width: 380px
}

@media screen and (max-width:768px) {
    [data-bp-tooltip][data-bp-tooltip-length=xlarge]:after {
        white-space: normal;
        width: 90vw
    }
}

[data-bp-tooltip][data-bp-tooltip-length=fit]:after {
    white-space: normal;
    width: 100%
}

#item-body,
.single-screen-navs {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.grid>li,
.grid>li .generic-button a {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.grid>li {
    border-bottom: 0;
    padding-bottom: 10px;
    padding-top: 0
}

.grid>li .list-wrap {
    background: #fafafa;
    border: 1px solid #eee;
    padding-bottom: 15px;
    position: relative;
    overflow: hidden;
    padding-top: 14px;
    height: 100%
}

.grid>li .list-wrap .list-title {
    padding: .7em .7em 0
}

.grid>li .list-wrap .update {
    color: #737373;
    padding: .7em 2em
}

.grid>li .item-avatar {
    text-align: center
}

.grid>li .item-avatar .avatar {
    border-radius: 50%;
    display: inline-block;
    width: 50%
}

@media screen and (min-width:24em) {
    .grid.members-list .list-wrap .item-block {
        margin: 0 auto
    }
    .grid.members-group-list .list-wrap .item-block {
        margin: 0 auto
    }
    .grid.groups-list .list-wrap .group-desc {
        margin: 15px auto 0;
        min-height: 5em;
        overflow: hidden
    }
    .grid.groups-list .list-wrap .group-details,
    .grid.groups-list .list-wrap .item-desc,
    .grid.groups-list .list-wrap .last-activity {
        margin-bottom: 0
    }
    .grid.groups-list .list-wrap .group-details p,
    .grid.groups-list .list-wrap .item-desc p,
    .grid.groups-list .list-wrap .last-activity p {
        margin-bottom: 0
    }
    .grid.blogs-list .list-wrap .item-block {
        margin: 0 auto
    }
}

@media screen and (min-width:24em) {
    .grid>li.item-entry {
        float: left;
        margin: 0
    }
}

.buddypress-wrap .grid.bp-list {
    display: flex;
    flex-flow: row wrap;
    padding-top: 1em;
    margin-left: -5px;
    margin-right: -5px;
    width: auto
}

.buddypress-wrap .grid.bp-list>li {
    border-bottom: none;
    flex: 0 0 100%;
    max-width: 100%;
    min-width: 0;
    padding: 0 5px;
    margin-bottom: 10px
}

@media screen and (min-width:32em) {
    .buddypress-wrap .grid.bp-list>li {
        flex: 0 0 50%;
        max-width: 50%
    }
}

@media screen and (min-width:75em) {
    .buddypress-wrap .grid.bp-list>li {
        flex: 0 0 33.33%;
        max-width: 33.33%;
    }
}

.buddypress-wrap .grid.bp-list>li .item-avatar {
    margin: 0;
    text-align: center;
    width: auto
}

.buddypress-wrap .grid.bp-list>li .item-avatar img.avatar {
    display: inline-block;
    height: auto;
    width: 50%
}

.buddypress-wrap .grid.bp-list>li .item-meta,
.buddypress-wrap .grid.bp-list>li .list-title {
    float: none;
    text-align: center
}

.buddypress-wrap .grid.bp-list>li .list-title {
    font-size: inherit;
    line-height: 1.1
}

.buddypress-wrap .grid.bp-list>li .item {
    font-size: 18px;
    left: 0;
    margin: 0 auto;
    text-align: center
}

@media screen and (min-width:46.8em) {
    .buddypress-wrap .grid.bp-list>li .item {
        font-size: 22px
    }
}

.buddypress-wrap .grid.bp-list>li .item .group-desc,
.buddypress-wrap .grid.bp-list>li .item .item-block {
    float: none
}

.buddypress-wrap .grid.bp-list>li .item .item-block {
    margin-bottom: 10px
}

.buddypress-wrap .grid.bp-list>li .item .last-activity {
    margin-top: 5px
}

.buddypress-wrap .grid.bp-list>li .item .group-desc {
    clear: none
}

.buddypress-wrap .grid.bp-list>li .item .user-update {
    clear: both;
    text-align: left
}

.buddypress-wrap .grid.bp-list>li .item .activity-read-more a {
    display: inline
}

.buddypress-wrap .grid.bp-list>li .action .generic-button {
    float: none;
    margin: 0;
    text-align: center;
    width: 100%
}

.buddypress-wrap .grid.bp-list>li .action .generic-button a,
.buddypress-wrap .grid.bp-list>li .action .generic-button button {
    width: 100%
}

.buddypress-wrap .grid.bp-list>li .avatar,
.buddypress-wrap .grid.bp-list>li .item,
.buddypress-wrap .grid.bp-list>li .item-avatar {
    float: none
}

.buddypress-wrap #members-list.bp-list.members-group-list li.item-entry-header {
    margin: 20px 0
}

.buddypress-wrap #members-list.grid.bp-list.members-group-list li.item-entry-header {
    max-width: 100%;
    flex: 100%;
    min-width: 0
}

@media screen and (min-width:46.8em) {
    .bp-single-vert-nav .bp-wrap {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }
    .bp-single-vert-nav .bp-navs.vertical {
        border-right: 1px solid #d6d6d6;
        border-bottom: 0;
        float: left;
        width: 25%;
        overflow: visible
    }
    .bp-single-vert-nav .bp-navs.vertical ul {
        margin: 0
    }
    .bp-single-vert-nav .bp-navs.vertical li {
        float: none;
        margin-right: 0
    }
    .bp-single-vert-nav .bp-navs.vertical li.selected a {
        background: #ccc;
        color: #333
    }
    .bp-single-vert-nav .bp-navs.vertical li:focus,
    .bp-single-vert-nav .bp-navs.vertical li:hover {
        background: #ccc
    }
    .bp-single-vert-nav .bp-navs.vertical li span {
        background: #d6d6d6;
        border-radius: 10%;
        float: right;
        margin-right: 2px
    }
    .bp-single-vert-nav .bp-navs.vertical li:hover span {
        border-color: #eaeaea
    }
    .bp-single-vert-nav .item-body {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        min-width: 0;
        padding-left: 20px
    }
    .bp-single-vert-nav #subnav {
        background: #eaeaea;
        margin: 0;
        width: auto
    }
    .bp-single-vert-nav #subnav li {
        font-size: 16px;
        margin: 10px 0
    }
    .bp-single-vert-nav #subnav li a {
        border-right: 1px solid #ccc;
        padding: 0 .7em
    }
    .bp-single-vert-nav #subnav li a:focus,
    .bp-single-vert-nav #subnav li a:hover {
        background: 0 0
    }
    .bp-single-vert-nav #subnav li.current a {
        background: 0 0;
        color: #333
    }
    .bp-single-vert-nav #subnav li:last-child a {
        border: none
    }
    .bp-dir-vert-nav .dir-navs {
        float: left;
        left: 1px;
        position: relative;
        width: 20%
    }
    .bp-dir-vert-nav .dir-navs ul li {
        float: none;
        overflow: hidden;
        width: auto
    }
    .bp-dir-vert-nav .dir-navs ul li.selected {
        border: 1px solid #eee
    }
    .bp-dir-vert-nav .dir-navs ul li.selected a {
        background: #555;
        color: #fff
    }
    .bp-dir-vert-nav .dir-navs ul li.selected a span {
        background: #eaeaea;
        border-color: #ccc;
        color: #5087e5
    }
    .bp-dir-vert-nav .dir-navs ul li a:focus,
    .bp-dir-vert-nav .dir-navs ul li a:hover {
        background: #ccc;
        color: #333
    }
    .bp-dir-vert-nav .dir-navs ul li a:focus span,
    .bp-dir-vert-nav .dir-navs ul li a:hover span {
        border: 1px solid #555
    }
    .bp-dir-vert-nav .screen-content {
        border-left: 1px solid #d6d6d6;
        margin-left: 20%;
        overflow: hidden;
        padding: 0 0 2em 1em
    }
    .bp-dir-vert-nav .screen-content .subnav-filters {
        margin-top: 0
    }
}

.admin-bar.bp-hide-adminbar {
    margin-top: -32px
}

@media screen and (max-width:782px) {
    .admin-bar.bp-hide-adminbar {
        margin-top: -46px
    }
}

.admin-bar.bp-hide-adminbar #wpadminbar {
    display: none
}

.admin-bar.bp-hide-adminbar .bb-mobile-panel-wrapper {
    top: 0;
    height: 100%
}

.admin-bar.bp-hide-adminbar a.bb-close-panel i {
    top: 32px
}

.bbp-forums,
.bbp-topics {
    list-style: none;
    padding: 0
}

#bbpress-forums hr {
    margin: 0 0 20px
}

#bbpress-forums {
    background: 0 0;
    clear: both;
    margin-bottom: 20px;
    font-size: 12px
}

#bbpress-forums:after {
    content: " ";
    display: table;
    clear: both
}

#bbpress-forums div.even,
#bbpress-forums ul.even {
    background-color: #fff
}

#bbpress-forums div.odd,
#bbpress-forums ul.odd {
    background-color: #fafafa
}

body.reply-edit .reply {
    float: none
}

#bbpress-forums div.reply {
    height: auto;
    width: 100%
}

#bbpress-forums div.bbp-forum-header,
#bbpress-forums div.bbp-reply-header,
#bbpress-forums div.bbp-topic-header {
    background-color: #f4f4f4
}

#bbpress-forums .status-spam.even,
#bbpress-forums .status-trash.even {
    background-color: #fee
}

#bbpress-forums .status-spam.odd,
#bbpress-forums .status-trash.odd {
    background-color: #fdd
}

#bbpress-forums .status-closed,
#bbpress-forums .status-closed a {
    color: #ccc
}

#bbpress-forums ul.bbp-threaded-replies {
    margin-left: 50px
}

#bbpress-forums ul.bbp-forums,
#bbpress-forums ul.bbp-lead-topic,
#bbpress-forums ul.bbp-replies,
#bbpress-forums ul.bbp-search-results,
#bbpress-forums ul.bbp-topics {
    font-size: 12px;
    overflow: hidden;
    border: 1px solid #eee;
    margin-bottom: 20px;
    clear: both
}

#bbpress-forums li.bbp-body,
#bbpress-forums li.bbp-footer,
#bbpress-forums li.bbp-header {
    clear: both
}

#bbpress-forums li.bbp-footer,
#bbpress-forums li.bbp-header {
    background: #f3f3f3;
    border-top: 1px solid #eee;
    font-weight: 700;
    padding: 8px;
    text-align: center
}

#bbpress-forums li.bbp-header {
    background: #eaeaea
}

#bbpress-forums li.bbp-header ul {
    overflow: hidden
}

#bbpress-forums .bbp-forums-list {
    margin: 0 0 0 5px;
    padding-left: 15px;
    border-left: 1px solid #ddd
}

#bbpress-forums .bbp-forums-list li {
    display: inline;
    font-size: 11px
}

#bbpress-forums li.bbp-footer p {
    margin: 0;
    line-height: 1
}

li.bbp-forum-info,
li.bbp-topic-title {
    float: left;
    text-align: left
}

li.bbp-forum-info {
    width: 50%
}

li.bbp-topic-title {
    width: 65%
}

li.bbp-topic-title a.bbp-topic-permalink {
    font-size: 14px
}

li.bbp-forum-reply-count,
li.bbp-forum-topic-count,
li.bbp-topic-reply-count {
    float: left;
    text-align: center;
    width: 15%
}

li.bbp-forum-freshness,
li.bbp-topic-freshness {
    text-align: center;
    float: left;
    width: 20%
}

#bbpress-forums li.bbp-body ul.forum,
#bbpress-forums li.bbp-body ul.topic {
    border-top: 1px solid #eee;
    overflow: hidden;
    padding: 8px
}

li.bbp-header div.bbp-reply-content span#favorite-toggle,
li.bbp-header div.bbp-reply-content span#subscription-toggle,
li.bbp-header div.bbp-topic-content span#favorite-toggle,
li.bbp-header div.bbp-topic-content span#subscription-toggle {
    float: right
}

#bbpress-forums div.bbp-forum-title h3,
#bbpress-forums div.bbp-reply-title h3,
#bbpress-forums div.bbp-topic-title h3 {
    background: 0 0;
    border: none;
    font-size: 16px;
    line-height: 1;
    margin: 8px 0;
    padding: 0;
    text-transform: none
}

#bbpress-forums div.bbp-forum-author,
#bbpress-forums div.bbp-reply-author,
#bbpress-forums div.bbp-topic-author {
    float: left;
    text-align: center;
    width: 115px
}

#bbpress-forums div.bbp-forum-author img.avatar,
#bbpress-forums div.bbp-reply-author img.avatar,
#bbpress-forums div.bbp-topic-author img.avatar {
    border: none;
    max-width: 80px;
    padding: 0;
    margin: 12px auto 0;
    float: none
}

#bbpress-forums div.bbp-forum-author a.bbp-author-name,
#bbpress-forums div.bbp-reply-author a.bbp-author-name,
#bbpress-forums div.bbp-topic-author a.bbp-author-name {
    margin: 0 12px;
    word-break: break-word;
    display: inline-block
}

#bbpress-forums div.bbp-reply-author a.bbp-author-name,
#bbpress-forums div.bbp-topic-author a.bbp-author-name {
    clear: left;
    display: block
}

#bbpress-forums div.bbp-forum-author .bbp-author-role,
#bbpress-forums div.bbp-reply-author .bbp-author-role,
#bbpress-forums div.bbp-topic-author .bbp-author-role {
    font-size: 11px;
    font-style: italic
}

#bbpress-forums li.bbp-footer .bbp-forum-author,
#bbpress-forums li.bbp-footer .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-search-author,
#bbpress-forums li.bbp-footer .bbp-topic-author,
#bbpress-forums li.bbp-header .bbp-forum-author,
#bbpress-forums li.bbp-header .bbp-reply-author,
#bbpress-forums li.bbp-header .bbp-search-author,
#bbpress-forums li.bbp-header .bbp-topic-author {
    float: left;
    margin: 0;
    padding: 0;
    width: 120px
}

#bbpress-forums li.bbp-footer .bbp-forum-content,
#bbpress-forums li.bbp-footer .bbp-reply-content,
#bbpress-forums li.bbp-footer .bbp-search-content,
#bbpress-forums li.bbp-footer .bbp-topic-content,
#bbpress-forums li.bbp-header .bbp-forum-content,
#bbpress-forums li.bbp-header .bbp-reply-content,
#bbpress-forums li.bbp-header .bbp-search-content,
#bbpress-forums li.bbp-header .bbp-topic-content {
    margin-left: 140px;
    padding: 0;
    text-align: left
}

div.bbp-forum-header,
div.bbp-reply-header,
div.bbp-topic-header,
li.bbp-body div.hentry {
    margin-bottom: 0;
    overflow: hidden;
    padding: 8px
}

div.bbp-forum-header,
div.bbp-reply-header,
div.bbp-topic-header {
    border-top: 1px solid #ddd;
    clear: both
}

#bbpress-forums div.bbp-forum-content,
#bbpress-forums div.bbp-reply-content,
#bbpress-forums div.bbp-topic-content {
    margin-left: 130px;
    padding: 12px 12px 12px 0;
    text-align: left
}

#bbpress-forums div.bbp-forum-content:after,
#bbpress-forums div.bbp-reply-content:after,
#bbpress-forums div.bbp-topic-content:after {
    clear: both;
    content: ".";
    display: block;
    float: none;
    height: 0;
    font-size: 0;
    visibility: hidden
}

#bbpress-forums div.bbp-reply-content a:not(.entry-img),
#bbpress-forums div.bbp-topic-content a:not(.entry-img) {
    background: 0 0;
    border: none;
    display: inline;
    font-weight: 400;
    margin: 0;
    padding: 0
}

#bbpress-forums div.bbp-reply-content h1,
#bbpress-forums div.bbp-reply-content h2,
#bbpress-forums div.bbp-reply-content h3,
#bbpress-forums div.bbp-reply-content h4,
#bbpress-forums div.bbp-reply-content h5,
#bbpress-forums div.bbp-reply-content h6,
#bbpress-forums div.bbp-topic-content h1,
#bbpress-forums div.bbp-topic-content h2,
#bbpress-forums div.bbp-topic-content h3,
#bbpress-forums div.bbp-topic-content h4,
#bbpress-forums div.bbp-topic-content h5,
#bbpress-forums div.bbp-topic-content h6 {
    clear: none;
    line-height: 1;
    margin: 24px 0;
    padding: 0
}

#bbpress-forums div.bbp-reply-content img,
#bbpress-forums div.bbp-topic-content img {
    max-width: 100%
}

#bbpress-forums div.bbp-reply-content ol,
#bbpress-forums div.bbp-reply-content ul,
#bbpress-forums div.bbp-topic-content ol,
#bbpress-forums div.bbp-topic-content ul {
    margin: 0 15px 15px;
    padding: 0
}

#bbpress-forums div.bbp-reply-content ul li,
#bbpress-forums div.bbp-topic-content ul li {
    list-style-type: disc
}

#bbpress-forums div.bbp-reply-content ol li,
#bbpress-forums div.bbp-topic-content ol li {
    list-style-type: decimal
}

#bbpress-forums div.bbp-reply-content ol li li,
#bbpress-forums div.bbp-topic-content ol li li {
    list-style-type: lower-alpha
}

#bbpress-forums div.bbp-reply-content ol li li li,
#bbpress-forums div.bbp-topic-content ol li li li {
    list-style-type: upper-roman
}

#bbpress-forums div.bbp-reply-content code,
#bbpress-forums div.bbp-topic-content code {
    display: inline-block;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 0 5px;
    max-width: 100%;
    vertical-align: middle;
    margin-top: -3px
}

#bbpress-forums .bbp-the-content pre {
    position: relative;
    z-index: 1
}

#bbpress-forums div.bbp-reply-content pre code,
#bbpress-forums div.bbp-topic-content pre code {
    display: block;
    border: none;
    padding: 0;
    margin: 0;
    background-color: transparent;
    overflow-wrap: normal;
    overflow: auto;
    max-width: 100%
}

#bbpress-forums div.bbp-reply-to {
    margin-left: 130px;
    padding: 12px 12px 12px 0;
    text-align: right
}

#bbpress-forums div#bbp-cancel-reply-to {
    text-align: right
}

#bbp_editor_forum_content,
#bbp_editor_topic_content {
    border: 1px solid #d6d6d6;
    border-radius: 3px;
    min-height: 80px;
    padding: .7em
}

#bbp_editor_forum_content:focus,
#bbp_editor_topic_content:focus {
    color: #222;
    border-color: #333
}

div.bbp-breadcrumb {
    float: left
}

div.bbp-breadcrumb,
div.bbp-topic-tags {
    font-size: 12px
}

#bbpress-forums div.bbp-breadcrumb p,
#bbpress-forums div.bbp-topic-tags p {
    margin-bottom: 10px
}

#bbpress-forums div.bbp-topic-tags {
    float: right
}

#bbp-topic-hot-tags {
    clear: both
}

span#subscription-toggle {
    float: right
}

#bbpress-forums #bbp-search-form {
    clear: left
}

#bbpress-forums #bbp-search-form .hidden {
    height: 0;
    width: 0;
    overflow: hidden;
    position: absolute;
    background: 0 0;
    left: -999em
}

#bbpress-forums #bbp-search-form #bbp_search {
    display: inline-block;
    width: auto
}

#bbpress-forums div.bbp-search-form {
    float: right
}

span.bbp-admin-links {
    float: right;
    color: #ddd
}

span.bbp-admin-links a {
    color: #bbb;
    font-weight: 400;
    font-size: 10px;
    text-transform: uppercase;
    text-decoration: none
}

fieldset span.bbp-admin-links {
    float: left
}

tr td span.bbp-admin-links a:hover {
    color: #ff4b33
}

td.bbp-topic-admin-links,
td.bbp-topic-counts {
    width: 50%
}

.bbp-forum-header a.bbp-forum-permalink,
.bbp-reply-header a.bbp-reply-permalink,
.bbp-topic-header a.bbp-topic-permalink {
    float: right;
    margin-left: 10px;
    color: #ccc
}

.bbp-row-actions #favorite-toggle a {
    text-decoration: none;
    padding: 0 3px 1px;
    color: #7c7;
    border: 1px solid #aca;
    background-color: #dfd;
    font-weight: 700;
    font-size: 13px
}

.bbp-row-actions #favorite-toggle a:hover {
    color: #5a5;
    border-color: #7c7;
    background-color: #beb
}

.bbp-row-actions #favorite-toggle span.is-favorite a {
    color: #faa;
    border: 1px solid #faa;
    background-color: #fee
}

.bbp-row-actions #favorite-toggle span.is-favorite a:hover {
    color: #c88;
    border-color: #c88;
    background-color: #fdd
}

.bbp-row-actions #subscription-toggle a {
    text-decoration: none;
    padding: 0 3px 1px;
    color: #7c7;
    border: 1px solid #aca;
    background-color: #dfd;
    font-weight: 700;
    font-size: 13px
}

.bbp-row-actions #subscription-toggle a:hover {
    color: #5a5;
    border-color: #7c7;
    background-color: #beb
}

.bbp-row-actions #subscription-toggle span.is-subscribed a {
    color: #faa;
    border: 1px solid #faa;
    background-color: #fee
}

.bbp-row-actions #subscription-toggle span.is-subscribed a:hover {
    color: #c88;
    border-color: #c88;
    background-color: #fdd
}

#bbpress-forums .bbp-forum-info .bbp-forum-content,
#bbpress-forums p.bbp-topic-meta {
    font-size: 11px;
    margin: 5px 0;
    padding: 0;
    word-wrap: break-word
}

#bbpress-forums p.bbp-topic-meta span {
    white-space: nowrap
}

.bbp-pagination-count {
    float: left;
    border: 1px solid transparent
}

.bbp-pagination-links {
    float: right;
    list-style: none
}

.bbp-pagination-links a,
.bbp-pagination-links span.current {
    display: block;
    float: left;
    padding: 0 5px;
    margin-left: 5px;
    border: 1px solid #efefef;
    text-decoration: none
}

.bbp-pagination-links a:hover,
.bbp-pagination-links span.current {
    background: #eee;
    opacity: .8;
    border: 1px solid #ddd
}

.bbp-pagination-links span.dots {
    display: block;
    float: left;
    padding: 1px 4px;
    margin-left: 5px
}

.bbp-pagination {
    float: left;
    width: 100%;
    margin-bottom: 15px
}

.bbp-topic-pagination {
    display: inline-block;
    margin-left: 5px;
    margin-bottom: 2px
}

.bbp-topic-pagination a {
    font-size: 10px;
    line-height: 10px;
    padding: 1px 3px;
    border: 1px solid #ddd;
    text-decoration: none
}

#bbpress-forums fieldset.bbp-form {
    clear: left
}

#bbpress-forums fieldset.bbp-form {
    border: 1px solid #eee;
    padding: 10px 20px;
    margin-bottom: 10px
}

#bbpress-forums fieldset.bbp-form legend {
    padding: 5px
}

#bbpress-forums fieldset.bbp-form label {
    margin: 0;
    display: inline-block
}

#bbp-edit-topic-tag.bbp-form fieldset.bbp-form label,
#bbp-login fieldset label,
#bbp-lost-pass fieldset label,
#bbp-register fieldset label {
    width: 100px
}

#bbpress-forums fieldset.bbp-form input,
#bbpress-forums fieldset.bbp-form p,
#bbpress-forums fieldset.bbp-form select,
#bbpress-forums fieldset.bbp-form textarea {
    margin: 0 0 10px
}

textarea#bbp_forum_content,
textarea#bbp_reply_content,
textarea#bbp_topic_content {
    width: 97%;
    box-sizing: border-box
}

textarea#bbp_forum_content {
    height: 210px
}

#bbpress-forums fieldset.bbp-forum-form-attributes {
    width: 200px;
    float: right;
    clear: none;
    margin-left: 25px
}

#bbpress-forums fieldset select#bbp_forum_id {
    max-width: 200px
}

.bbp-reply-form,
.bbp-topic-form,
.bbp-topic-tag-form {
    clear: left
}

body.reply-edit .bbp-reply-form div.avatar img,
body.single-forum .bbp-topic-form div.avatar img,
body.single-reply .bbp-reply-form div.avatar img,
body.topic-edit .bbp-topic-form div.avatar img {
    margin-right: 0;
    padding: 10px;
    border: 1px solid #ddd;
    line-height: 0;
    background-color: #efefef
}

body.page .bbp-reply-form code,
body.page .bbp-topic-form code,
body.reply-edit .bbp-reply-form code,
body.single-forum .bbp-topic-form code,
body.single-topic .bbp-reply-form code,
body.topic-edit .bbp-topic-form code {
    font-size: 10px;
    background-color: #f0fff8;
    border: 1px solid #ceefe1;
    display: block;
    padding: 8px;
    margin-top: 5px;
    width: 369px
}

#delete_tag,
#merge_tag {
    display: inline
}

div.bbp-submit-wrapper {
    margin-top: 15px;
    float: right;
    clear: both
}

p.form-allowed-tags {
    max-width: 100%
}

#bbpress-forums div.bbp-the-content-wrapper {
    margin-bottom: 10px
}

#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content {
    width: 100%;
    margin: 0;
    border-radius: 0;
    font-size: 12px
}

#bbpress-forums div.bbp-the-content-wrapper table,
#bbpress-forums div.bbp-the-content-wrapper tbody,
#bbpress-forums div.bbp-the-content-wrapper td,
#bbpress-forums div.bbp-the-content-wrapper tr {
    border: none;
    padding: 0;
    margin: 0;
    width: auto;
    line-height: 1
}

#bbpress-forums div.bbp-the-content-wrapper input {
    font-size: 12px;
    padding: 5px;
    margin: 0 2px 0 0;
    line-height: 1
}

#bbpress-forums div.bbp-the-content-wrapper div.quicktags-toolbar {
    padding: 5px;
    min-height: 26px
}

#bbpress-forums div.bbp-the-content-wrapper td.mceToolbar {
    padding: 4px 4px 8px
}

#bbpress-forums div.wp-editor-container {
    margin: 0;
    padding: 0;
    line-height: 0
}

#bbpress-forums div.bbp-the-content-wrapper td.mceStatusbar {
    line-height: 16px
}

.bbp-forum-content ul.sticky,
.bbp-topics ul.sticky,
.bbp-topics ul.super-sticky,
.bbp-topics-front ul.super-sticky {
    background-color: #ffffe0!important;
    font-size: 1.1em
}

#bbpress-forums .bbp-reply-content ul.bbp-reply-revision-log,
#bbpress-forums .bbp-reply-content ul.bbp-topic-revision-log,
#bbpress-forums .bbp-topic-content ul.bbp-topic-revision-log {
    border-top: 1px dotted #ddd;
    width: 100%;
    margin: 0;
    padding: 8px 0 0;
    font-size: 11px;
    color: #aaa
}

#bbpress-forums .bbp-reply-content .bb-activity-media-wrap+.bbp-reply-revision-log,
#bbpress-forums .bbp-reply-content .bb-activity-media-wrap+ul.bbp-topic-revision-log,
#bbpress-forums .bbp-topic-content .bb-activity-media-wrap+.bbp-reply-revision-log,
#bbpress-forums .bbp-topic-content .bb-activity-media-wrap+ul.bbp-topic-revision-log {
    margin-top: 15px
}

#bbpress-forums .bbp-reply-content ul.bbp-reply-revision-log li,
#bbpress-forums .bbp-reply-content ul.bbp-topic-revision-log li,
#bbpress-forums .bbp-topic-content ul.bbp-topic-revision-log li {
    list-style-type: none
}

.bbp-login-form fieldset legend {
    display: none
}

.bbp-login-form .bbp-email input,
.bbp-login-form .bbp-password input,
.bbp-login-form .bbp-username input {
    padding: 5px
}

.bbp-login-form label {
    width: 140px;
    display: inline-block
}

#sidebar .bbp-login-form label {
    width: 70px
}

.bbp-login-form .bbp-email,
.bbp-login-form .bbp-password,
.bbp-login-form .bbp-remember-me,
.bbp-login-form .bbp-submit-wrapper,
.bbp-login-form .bbp-username {
    margin-top: 10px
}

.bbp-login-form .bbp-submit-wrapper {
    text-align: right
}

.bbp-login-form .bbp-login-links a {
    float: left;
    clear: left
}

.bbp-logged-in img.avatar {
    float: left;
    margin: 0 15px 0 0
}

.bbp-logged-in h4 {
    font-weight: 700;
    font-size: 1.3em;
    clear: none;
    margin-bottom: 10px
}

#bbpress-forums .widget_display_replies img.avatar,
#bbpress-forums .widget_display_topics img.avatar,
#bbpress-forums p.bbp-topic-meta img.avatar,
#bbpress-forums ul.bbp-reply-revision-log img.avatar,
#bbpress-forums ul.bbp-topic-revision-log img.avatar {
    float: none;
    margin-bottom: -3px;
    border: 3px double #ddd;
    -webkit-box-shadow: none;
    box-shadow: none
}

fieldset div.avatar {
    float: right
}

.activity-list li.bbp_reply_create .activity-content .activity-inner,
.activity-list li.bbp_topic_create .activity-content .activity-inner {
    border-left: 2px solid #eaeaea;
    margin-left: 5px;
    padding-left: 10px
}

#bbpress-forums dl.bbp-user-capabilities {
    display: inline-block;
    vertical-align: top
}

#bbpress-forums dl.bbp-user-capabilities dt {
    margin: 0 0 10px;
    text-transform: capitalize
}

#bbpress-forums dl.bbp-user-capabilities dd {
    margin: 0;
    padding: 0
}

#bbpress-forums div.row-actions {
    font-size: 11px;
    visibility: hidden
}

#bbpress-forums li:hover>div.row-actions {
    visibility: visible
}

@media only screen and (max-width:480px) {
    #bbpress-forums div.bbp-topic-tags {
        clear: left;
        float: left
    }
    div.bbp-search-form button,
    div.bbp-search-form input {
        font-size: 11px;
        padding: 2px
    }
    li.bbp-forum-info {
        width: 50%
    }
    li.bbp-topic-title {
        width: 65%
    }
    li.bbp-forum-reply-count,
    li.bbp-forum-topic-count,
    li.bbp-topic-reply-count {
        width: 10%
    }
    span.bbp-reply-post-date {
        float: left
    }
    span.bbp-admin-links {
        clear: left;
        float: left
    }
    #bbpress-forums .bbp-forums-list li {
        display: block;
        font-size: 11px
    }
    #bbpress-forums .bbp-body div.bbp-reply-author {
        margin: -15px 10px 10px;
        min-height: 100px;
        padding-left: 80px;
        position: relative;
        text-align: left;
        width: 100%
    }
    #bbpress-forums div.bbp-reply-author a.bbp-author-name {
        clear: none;
        display: inline-block;
        margin-left: 0;
        word-wrap: break-word
    }
    #bbpress-forums div.bbp-reply-author img.avatar {
        position: absolute;
        top: 15px;
        left: 0;
        width: 60px;
        height: auto
    }
    #bbpress-forums div.bbp-reply-author .bbp-author-role {
        font-size: 12px;
        font-style: normal
    }
    #bbpress-forums .bbp-body div.bbp-reply-content {
        clear: both;
        margin: 10px;
        padding: 0
    }
    #bbpress-forums div.bbp-reply-content p {
        margin-bottom: 15px
    }
    div.bbp-submit-wrapper {
        float: left
    }
    #bbpress-forums fieldset.bbp-form {
        padding: 0 10px 10px
    }
    #bbpress-forums #bbp-user-body {
        clear: both;
        margin-left: 0;
        word-wrap: break-word
    }
}

@media only screen and (max-width:320px) {
    #bbpress-forums div.bbp-search-form {
        margin-bottom: 10px
    }
    #bbpress-forums li.bbp-body li.bbp-forum-info,
    #bbpress-forums li.bbp-body li.bbp-topic-title,
    #bbpress-forums li.bbp-header li.bbp-forum-info,
    #bbpress-forums li.bbp-header li.bbp-topic-title {
        width: 100%
    }
    #bbpress-forums li.bbp-header li.bbp-forum-info,
    #bbpress-forums li.bbp-header li.bbp-topic-title {
        text-align: center;
        text-transform: uppercase
    }
    #bbpress-forums li.bbp-body li.bbp-forum-reply-count,
    #bbpress-forums li.bbp-body li.bbp-forum-topic-count,
    #bbpress-forums li.bbp-body li.bbp-topic-reply-count,
    #bbpress-forums li.bbp-header li.bbp-forum-reply-count,
    #bbpress-forums li.bbp-header li.bbp-forum-topic-count,
    #bbpress-forums li.bbp-header li.bbp-topic-reply-count {
        width: 20%
    }
    #bbpress-forums li.bbp-body li.bbp-forum-freshness,
    #bbpress-forums li.bbp-body li.bbp-topic-freshness,
    #bbpress-forums li.bbp-header li.bbp-forum-freshness,
    #bbpress-forums li.bbp-header li.bbp-topic-freshness {
        width: 58%
    }
    #bbpress-forums li.bbp-body li.bbp-forum-freshness,
    #bbpress-forums li.bbp-body li.bbp-forum-reply-count,
    #bbpress-forums li.bbp-body li.bbp-forum-topic-count,
    #bbpress-forums li.bbp-body li.bbp-topic-freshness,
    #bbpress-forums li.bbp-body li.bbp-topic-reply-count {
        margin-top: 7px
    }
    #bbpress-forums li.bbp-footer,
    #bbpress-forums li.bbp-header {
        font-size: 10px
    }
    #bbpress-forums li.bbp-header div.bbp-reply-author {
        text-align: left;
        width: 25%
    }
    #bbpress-forums li.bbp-header div.bbp-reply-content {
        margin-left: 25%
    }
    #bbpress-forums p.bbp-topic-meta img.avatar {
        width: 14px;
        height: auto
    }
    #bbpress-forums div.bbp-the-content-wrapper td.mceToolbar {
        padding: 1px
    }
    #bbpress-forums div.bbp-the-content-wrapper td.mceToolbar td {
        width: 20px;
        height: 20px
    }
    #bbpress-forums div.wp-editor-container {
        width: 100%;
        overflow: auto
    }
    #bbpress-forums input#bbp_topic_tags,
    #bbpress-forums input#bbp_topic_title {
        width: 95%
    }
}

@media only screen and (max-width:240px) {
    #bbpress-forums li.bbp-body li.bbp-forum-reply-count,
    #bbpress-forums li.bbp-body li.bbp-forum-topic-count,
    #bbpress-forums li.bbp-body li.bbp-topic-reply-count,
    #bbpress-forums li.bbp-footer div.bbp-reply-author,
    #bbpress-forums li.bbp-footer div.bbp-reply-content,
    #bbpress-forums li.bbp-header li.bbp-forum-reply-count,
    #bbpress-forums li.bbp-header li.bbp-forum-topic-count,
    #bbpress-forums li.bbp-header li.bbp-topic-reply-count {
        width: 45%
    }
    #bbpress-forums li.bbp-body li.bbp-forum-freshness,
    #bbpress-forums li.bbp-body li.bbp-topic-freshness,
    #bbpress-forums li.bbp-header div.bbp-reply-author,
    #bbpress-forums li.bbp-header div.bbp-reply-content,
    #bbpress-forums li.bbp-header li.bbp-forum-freshness,
    #bbpress-forums li.bbp-header li.bbp-topic-freshness {
        clear: both;
        width: 100%
    }
    #bbpress-forums li.bbp-header li.bbp-forum-freshness,
    #bbpress-forums li.bbp-header li.bbp-topic-freshness {
        text-align: center
    }
    #bbpress-forums li.bbp-body li.bbp-topic-freshness,
    #bbpress-forums li.bbp-header div.bbp-reply-content {
        margin-left: 0;
        text-align: left
    }
    #bbpress-forums li.bbp-body li.bbp-topic-freshness p.bbp-topic-meta {
        display: inline-block
    }
    #bbpress-forums li.bbp-header {
        overflow: hidden
    }
    #bbpress-forums li.bbp-footer div.bbp-reply-content {
        display: inline-block;
        margin-left: 0
    }
    #bbpress-forums li.bbp-body div.bbp-reply-author {
        min-height: 60px;
        padding-left: 60px
    }
    #bbpress-forums div.bbp-reply-author img.avatar {
        width: 40px;
        height: auto
    }
}

body .bb-select-dropdown.select2-dropdown {
    background: #fff;
    box-shadow: 0 2px 7px 1px rgba(0, 0, 0, .05), 0 6px 32px 0 rgba(18, 43, 70, .1);
    border-radius: 4px;
    border: 0;
    padding: 5px 10px;
    margin-right: 0;
    max-width: 300px
}

body .bb-select-container .select2-search__field {
    background: 0 0;
    border-width: 0;
    min-width: 100%;
    width: 100%!important;
    padding-left: 0
}

body .bb-select-container li.select2-results__option.select2-results__message {
    border-radius: 3px;
    margin-bottom: 0;
    font-size: 14px;
    padding: 2px 5px
}

body .bb-select-container li.select2-search.select2-search--inline {
    flex: 1;
    min-width: 0
}

body .bb-select-container ul.select2-selection__rendered {
    display: flex!important;
    align-items: center;
    flex-flow: row wrap;
    padding: 0!important
}

body .bb-select-container.select2-selection.select2-selection--multiple {
    border-color: transparent;
    padding: 0
}

.bb-select-container input.select2-search__field {
    margin: 0!important
}

.bb-select-dropdown li.select2-results__option.select2-results__message {
    border-radius: 3px;
    margin-bottom: 0;
    font-size: 14px;
    padding: 2px 5px
}

.bb-select-container li.select2-selection__choice {
    background-color: #4d5c6d!important;
    border-color: #4d5c6d!important;
    font-size: 14px;
    color: #fff;
    letter-spacing: -.24px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-flow: row-reverse;
    flex-flow: row-reverse;
    padding: 0 8px;
    margin: 0 10px 0 0
}

.bb-select-container span.select2-selection__choice__remove {
    font-size: 0;
    line-height: 1;
    margin: 0 0 0 8px
}

.bb-select-container span.select2-selection__choice__remove:before {
    content: "\E828";
    font-family: bb-icons;
    font-size: 13px;
    line-height: 1;
    background: #fff;
    border-radius: 50%;
    color: #4d5c6d;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-width: 13px;
    min-height: 13px;
    text-indent: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.bbp-forum-form #bbp_editor_forum_content {
    min-height: 120px
}

.bbp-forum-form label {
    color: inherit;
    display: inline-block;
    font-size: 15px;
    letter-spacing: -.24px;
    margin-bottom: 5px
}

.bp-forum-settings {
    display: flex;
    flex-flow: row wrap;
    margin: 0 -10px
}

.bp-forum-settings>p {
    flex: 1;
    padding: 0 10px
}

@media (max-width:900px) {
    .bp-forum-settings>p {
        flex: 0 0 50%
    }
}

@media (max-width:500px) {
    .bp-forum-settings>p {
        flex: 0 0 100%
    }
}

h2.bbp-form-title.entry-title {
    margin-bottom: 25px
}

.bbp-forum-title-label span {
    opacity: .6;
    font-size: 14px
}


/*! jQuery UI - v1.11.4 - 2015-11-24
* http://jqueryui.com
* Includes: core.css, accordion.css, menu.css
* Copyright jQuery Foundation and other contributors; Licensed MIT */

.ui-helper-hidden {
    display: none
}

.ui-helper-hidden-accessible {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px
}

.ui-helper-reset {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    line-height: 1.3;
    text-decoration: none;
    font-size: 100%;
    list-style: none
}

.ui-helper-clearfix:after,
.ui-helper-clearfix:before {
    content: "";
    display: table;
    border-collapse: collapse
}

.ui-helper-clearfix:after {
    clear: both
}

.ui-helper-clearfix {
    min-height: 0
}

.ui-helper-zfix {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
    opacity: 0
}

.ui-front {
    z-index: 100
}

.ui-state-disabled {
    cursor: default!important
}

.ui-icon {
    display: block;
    text-indent: -99999px;
    overflow: hidden;
    background-repeat: no-repeat
}

.ui-widget-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.ui-accordion .ui-accordion-header {
    display: block;
    cursor: pointer;
    position: relative;
    margin: 2px 0 0;
    padding: .5em .5em .5em .7em;
    min-height: 0;
    font-size: 100%
}

.ui-accordion .ui-accordion-icons {
    padding-left: 2.2em
}

.ui-accordion .ui-accordion-icons .ui-accordion-icons {
    padding-left: 2.2em
}

.ui-accordion .ui-accordion-header .ui-accordion-header-icon {
    position: absolute;
    left: .5em;
    top: 50%;
    margin-top: -8px
}

.ui-accordion .ui-accordion-content {
    padding: 1em 2.2em;
    border-top: 0;
    overflow: auto
}

.ui-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: block;
    outline: 0
}

.ui-menu .ui-menu {
    position: absolute
}

.ui-menu .ui-menu-item {
    position: relative;
    margin: 0;
    padding: 3px 1em 3px .4em;
    cursor: pointer;
    min-height: 0
}

.ui-menu .ui-menu-divider {
    margin: 5px 0;
    height: 0;
    font-size: 0;
    line-height: 0;
    border-width: 1px 0 0
}

.ui-menu-icons {
    position: relative
}

.ui-menu-icons .ui-menu-item {
    padding-left: 2em
}

.ui-menu .ui-icon {
    position: absolute;
    top: 0;
    bottom: 0;
    left: .2em;
    margin: auto 0
}

.ui-menu .ui-menu-icon {
    left: auto;
    right: 0
}

.bp-search-ajax-item {
    margin: 0
}

.bp-search-ajax-item>a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.bp-search-ajax-item .item-avatar {
    margin-right: 12px;
    width: 50px
}

.bp-search-ajax-item .item-avatar img {
    vertical-align: middle;
    max-width: 48px;
    width: 100%;
    height: auto
}

.bp-search-ajax-item .item {
    flex: 1;
    min-width: 0;
    overflow: hidden;
    line-height: 1.3;
    align-self: center
}

.bp-search-ajax-item .item .item-desc,
.bp-search-ajax-item .item .item-tags {
    margin-top: 5px;
    font-size: 80%;
    color: #a9a9a9
}

.bp-search-ajax-item .item-title {
    font-size: 15px;
    color: #122b46;
    letter-spacing: -.24px;
    margin-bottom: 3px
}

.bp-search-ajax-item .item-meta {
    margin-bottom: 0;
    font-size: 12px;
    color: #a3a5a9;
    letter-spacing: -.18px
}

.ui-menu .ui-menu-item a,
.ui-menu .ui-menu-item a:active,
.ui-menu .ui-menu-item a:hover {
    text-decoration: none
}

.bp-search-ac.ui-autocomplete {
    border-radius: 0;
    -webkit-box-shadow: 0 2px 3px 0 rgba(50, 50, 50, .4);
    -moz-box-shadow: 0 2px 3px 0 rgba(50, 50, 50, .4);
    box-shadow: 0 2px 3px 0 rgba(50, 50, 50, .4);
    max-height: 80%;
    min-width: 280px;
    overflow-x: hidden;
    overflow-y: hidden;
    background-color: #fff
}

.ui-widget-content {
    border: none
}

.bp-search-ac .x {
    display: none!important
}

.bp-search-ac li.bbls-category {
    font-weight: 600;
    padding: 14px 10px 5px;
    position: relative;
    top: -1px;
    box-sizing: border-box
}

.bp-search-ac li.bbls-category a {
    font-weight: 600
}

.bp-search-ac li:not(.bbls-category) {
    padding: 0 10px
}

.bp-search-ac li:not(.bbls-category) .bp-search-ajax-item {
    padding: 10px 0
}

.bp-search-ac .bbls-category+li .bp-search-ajax-item,
.bp-search-ac.ui-menu .ui-menu-item.bbls-view_all_type-type .bp-search-ajax-item {
    padding-top: 9px
}

.bp-search-ac .bbls-category:not(:first-child) {
    border-top: 1px solid #e5e5e5
}

.bp-search-ac.ui-menu .ui-menu-divider {
    border-width: 0;
    margin: 0
}

.bp-search-ac.ui-menu .ui-menu-item.ui-state-focus {
    border: none;
    color: inherit
}

.bp-search-ac.ui-menu .ui-menu-item {
    list-style-image: none;
    box-sizing: border-box
}

.bp-search-ac.ui-menu .ui-menu-item.ui-state-focus,
.bp-search-ac.ui-menu .ui-menu-item.ui-state-hover,
.bp-search-ac.ui-menu .ui-menu-item:hover {
    background: #f4f5f6
}

.bp-search-ac.ui-menu .ui-menu-item.bbls-view_all_type-type {
    padding: 0
}

.bp-search-ac.ui-menu .ui-menu-item.bbls-view_all_type-type .bp-search-ajax-item {
    padding: 0;
    border-top: 1px solid #e5e5e5;
    border-bottom: 0;
    position: relative;
    top: -1px
}

.bp-search-ac.ui-menu .ui-menu-item .bp-search-ajax-item.noresult {
    padding: 13px 7px 11px
}

.bp-search-ac.ui-menu .ui-menu-item.bbls-view_all_type-type .bp-search-ajax-item a {
    display: block;
    padding: 9px 10px;
    text-align: center
}

@media screen and (max-width:720px) {
    .bp-search-ac.ui-autocomplete {
        overflow-y: scroll
    }
}

#buddypress .results-group ul.item-list {
    border-top: none!important
}

.search_results .results-group-title {
    text-transform: capitalize;
    float: left;
    margin-bottom: 0
}

.bp-search-page .results-group ul#activity-stream {
    margin: 0;
    padding: 0;
    background: 0 0;
    border: 0;
    box-shadow: none
}

.bp-search-page .results-group ul#activity-stream li.activity-item {
    border: 0;
    box-shadow: none;
    margin: 0
}

.bp-search-page .results-group ul#activity-stream li.activity-item .activity-inner {
    margin: 0;
    padding: 0;
    background: 0 0
}

.bp-search-page .bp-navs ul li .count {
    margin-left: 6px
}

.bp-search-results-wrap .results-group-header {
    border-bottom: 1px solid #ccc;
    display: flex;
    align-items: center;
    padding-bottom: 5px
}

.bp-search-results-wrap .results-group-header .view-all-link-hidden {
    display: none
}

.bp-search-results-wrap .results-group-title {
    flex: 1;
    min-width: 0
}

.bp-search-results-wrap .results-group-footer {
    text-align: center
}

.bp-search-results-wrap .view-all-link {
    font-size: 14px;
    color: #888;
    line-height: 1
}

div.search_results .item-list {
    margin-top: 0;
    padding-top: 0
}

div.search_results .groups-list li .last-activity {
    margin-top: 0
}

.bp-search-results-wrapper .bp-search-form-wrapper {
    float: left;
    margin: 0 0 20px
}

.search_results {
    clear: both
}

.bp-search-item {
    margin: 0 0 20px;
    padding: 0 0 20px;
    border-bottom: 1px solid #eee
}

#buddypress .results-group ul.awpcp_ad_listing-list div img {
    margin-top: 20px
}

.bp-search-ac .loading-msg {
    padding: 20px;
    white-space: nowrap;
    font-size: 12px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center
}

.bp-search-ac .loading-msg .bb_global_search_spinner {
    background: url(../images/spinner.png) no-repeat center;
    background-size: 100% 100%;
    width: 19px;
    height: 19px;
    margin: 0 10px 0 0
}

.bb_global_search_spinner {
    margin: 20px;
    width: 100px;
    height: 100px;
    background: red;
    -webkit-animation-name: bb_global_srch_spin;
    -webkit-animation-duration: 4s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-name: bb_global_srch_spin;
    -moz-animation-duration: 4s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    -ms-animation-name: bb_global_srch_spin;
    -ms-animation-duration: 4s;
    -ms-animation-iteration-count: infinite;
    -ms-animation-timing-function: linear;
    animation-name: bb_global_srch_spin;
    animation-duration: 4s;
    animation-iteration-count: infinite;
    animation-timing-function: linear
}

.bp-search-ac .ui-corner-all {
    display: none
}

@-moz-keyframes bb_global_srch_spin {
    from {
        -moz-transform: rotate(0)
    }
    to {
        -moz-transform: rotate(360deg)
    }
}

@-webkit-keyframes bb_global_srch_spin {
    from {
        -webkit-transform: rotate(0)
    }
    to {
        -webkit-transform: rotate(360deg)
    }
}

@keyframes bb_global_srch_spin {
    from {
        transform: rotate(0)
    }
    to {
        transform: rotate(360deg)
    }
}

.ac_results li.ui-menu-divider {
    margin: 0;
    padding: 0
}

.ac_results.ui-menu .ui-menu-item.ui-state-hover,
.ac_results.ui-menu .ui-menu-item:hover,
.ac_results.ui-menu .ui-state-active,
.ac_results.ui-menu .ui-state-focus {
    margin: 0;
    background-color: #888
}

.ac_results.ui-menu .ui-menu-item.ui-state-hover a,
.ac_results.ui-menu .ui-menu-item:hover a,
.ac_results.ui-menu .ui-state-active a,
.ac_results.ui-menu .ui-state-focus a {
    color: #fff
}

.bp-search-results-list .bp-search-item {
    margin: 0;
    padding: 15px 0
}

.bp-search-results-list .bp-search-item .list-wrap {
    display: flex
}

.bp-search-results-list .bp-search-item .item-avatar {
    margin-right: 12px;
    max-width: 50px
}

.bp-search-results-list .bp-search-item .item-avatar img.avatar {
    display: block
}

.bp-search-results-list .bp-search-item .item {
    display: block;
    flex: 1;
    min-width: 0;
    align-self: center
}

.bp-search-results-list .bp-search-item .item-title {
    float: none;
    font-size: 16px;
    color: #122b46;
    letter-spacing: -.24px;
    line-height: 1;
    margin: 5px 0;
    text-align: left
}

.bp-search-results-list .bp-search-item p.item-meta {
    margin-bottom: 0;
    text-align: left
}

.bp-search-results-list .bp-search-item .item-desc {
    color: #737373;
    font-size: 12px;
    line-height: 1.4
}

.bp-search-results-list .bp-search-item .rating-custom div.product .woocommerce-product-rating {
    margin-bottom: 1.618em
}

.bp-search-results-list .bp-search-item .rating-custom .woocommerce-product-rating .star-rating {
    margin: .5em 4px 0 0;
    float: left
}

.bp-search-results-list .bp-search-item .rating-custom .woocommerce-product-rating:after,
.bp-search-results-list .bp-search-item .rating-custom .woocommerce-product-rating:before {
    content: " ";
    display: table
}

.bp-search-results-list .bp-search-item .rating-custom .woocommerce-product-rating {
    line-height: 2
}

.bp-search-results-list .bp-search-item .rating-custom .star-rating {
    float: right;
    overflow: hidden;
    position: relative;
    height: 1em;
    line-height: 1;
    font-size: 1em;
    width: 5.4em;
    font-family: star
}

.bp-search-results-list .bp-search-item .rating-custom .star-rating:before {
    content: "\73\73\73\73\73";
    color: #d3ced2;
    float: left;
    top: 0;
    left: 0;
    position: absolute
}

.bp-search-results-list .bp-search-item .rating-custom .star-rating {
    line-height: 1;
    font-size: 1em;
    font-family: star
}

.bp-search-results-list .bp-search-item .rating-custom .star-rating span {
    overflow: hidden;
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    padding-top: 1.5em
}

.bp-search-results-list .bp-search-item .rating-custom .star-rating span:before {
    content: "\53\53\53\53\53";
    top: 0;
    position: absolute;
    left: 0
}

.bp-search-results-list .bp-search-item .rating-custom .star-rating span {
    overflow: hidden;
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    padding-top: 1.5em
}

.bp-search-results-list .bp-search-item .woocommerce-review-link {
    display: none
}

.bp-search-results-list .bp-search-item .product-sale {
    margin-top: .5em
}

.bp-search-results-list .bp-search-item .product-sale .onsale {
    padding: .202em;
    text-align: center;
    background-color: #77a464;
    color: #fff;
    font-size: 80%;
    z-index: 9
}

.bp-search-results-list .bp-search-item dd.course_progress {
    margin: 0;
    width: 40%;
    height: 5px
}

.bp-search-results-list .bp-search-item .entry-meta a,
.bp-search-results-list .bp-search-item .entry-meta span {
    color: #737373;
    font-size: 90%
}

.bp-search-results-wrapper.bp-search-no-results {
    display: flex;
    flex-flow: column-reverse
}

.bp-search-results-wrapper.bp-search-no-results .search_filters {
    display: none
}

.bp-search-results-wrapper.bp-search-no-results .search_results {
    margin-bottom: 20px;
    margin-top: -10px
}

.mfp-bg {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1042;
    overflow: hidden;
    position: fixed;
    background: #0b0b0b;
    opacity: .8
}

.mfp-wrap {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1043;
    position: fixed;
    outline: 0!important;
    -webkit-backface-visibility: hidden
}

.mfp-container {
    text-align: center;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    padding: 0 8px;
    box-sizing: border-box
}

.mfp-container:before {
    content: "";
    display: inline-block;
    height: 100%;
    vertical-align: middle
}

.mfp-align-top .mfp-container:before {
    display: none
}

.mfp-content {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    margin: 0 auto;
    text-align: left;
    z-index: 1045
}

.mfp-ajax-holder .mfp-content,
.mfp-inline-holder .mfp-content {
    width: 100%;
    cursor: auto
}

.mfp-ajax-cur {
    cursor: progress
}

.mfp-zoom-out-cur,
.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
    cursor: -moz-zoom-out;
    cursor: -webkit-zoom-out;
    cursor: zoom-out
}

.mfp-zoom {
    cursor: pointer;
    cursor: -webkit-zoom-in;
    cursor: -moz-zoom-in;
    cursor: zoom-in
}

.mfp-auto-cursor .mfp-content {
    cursor: auto
}

.mfp-arrow,
.mfp-close,
.mfp-counter,
.mfp-preloader {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none
}

.mfp-loading.mfp-figure {
    display: none
}

.mfp-hide {
    display: none!important
}

.mfp-preloader {
    color: #ccc;
    position: absolute;
    top: 50%;
    width: auto;
    text-align: center;
    margin-top: -.8em;
    left: 8px;
    right: 8px;
    z-index: 1044
}

.mfp-preloader a {
    color: #ccc
}

.mfp-preloader a:hover {
    color: #fff
}

.mfp-s-ready .mfp-preloader {
    display: none
}

.mfp-s-error .mfp-content {
    display: none
}

button.mfp-arrow,
button.mfp-close {
    overflow: visible;
    cursor: pointer;
    background: 0 0;
    border: 0;
    -webkit-appearance: none;
    display: block;
    outline: 0;
    padding: 0;
    z-index: 1046;
    box-shadow: none;
    touch-action: manipulation
}

button::-moz-focus-inner {
    padding: 0;
    border: 0
}

.mfp-close {
    width: 44px;
    height: 44px;
    line-height: 44px;
    position: absolute;
    right: 0;
    top: 0;
    text-decoration: none;
    text-align: center;
    opacity: .65;
    padding: 0 0 18px 10px;
    color: #fff;
    font-style: normal;
    font-size: 28px;
    font-family: Arial, Baskerville, monospace
}

.mfp-close:focus,
.mfp-close:hover {
    opacity: 1
}

.mfp-close:active {
    top: 1px
}

.mfp-close-btn-in .mfp-close {
    color: #333
}

.mfp-iframe-holder .mfp-close,
.mfp-image-holder .mfp-close {
    color: #fff;
    right: -6px;
    text-align: right;
    padding-right: 6px;
    width: 100%
}

.mfp-counter {
    position: absolute;
    top: 0;
    right: 0;
    color: #ccc;
    font-size: 12px;
    line-height: 18px;
    white-space: nowrap
}

.mfp-arrow {
    position: absolute;
    opacity: .65;
    margin: 0;
    top: 50%;
    margin-top: -55px;
    padding: 0;
    width: 90px;
    height: 110px;
    -webkit-tap-highlight-color: transparent
}

.mfp-arrow:active {
    margin-top: -54px
}

.mfp-arrow:focus,
.mfp-arrow:hover {
    opacity: 1
}

.mfp-arrow:after,
.mfp-arrow:before {
    content: " ";
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent
}

.mfp-arrow:after {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px
}

.mfp-arrow:before {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: .7
}

.mfp-arrow-left {
    left: 0
}

.mfp-arrow-left:after {
    border-right: 17px solid #fff;
    margin-left: 31px
}

.mfp-arrow-left:before {
    margin-left: 25px;
    border-right: 27px solid #3f3f3f
}

.mfp-arrow-right {
    right: 0
}

.mfp-arrow-right:after {
    border-left: 17px solid #fff;
    margin-left: 39px
}

.mfp-arrow-right:before {
    border-left: 27px solid #3f3f3f
}

.mfp-iframe-holder {
    padding-top: 40px;
    padding-bottom: 40px
}

.mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px
}

.mfp-iframe-holder .mfp-close {
    top: -40px
}

.mfp-iframe-scaler {
    width: 100%;
    height: 0;
    overflow: hidden;
    padding-top: 56.25%
}

.mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, .6);
    background: #000
}

img.mfp-img {
    width: auto;
    max-width: 100%;
    height: auto;
    display: block;
    line-height: 0;
    box-sizing: border-box;
    padding: 40px 0;
    margin: 0 auto
}

.mfp-figure {
    line-height: 0
}

.mfp-figure:after {
    content: " ";
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, .6);
    background: #444
}

.mfp-figure small {
    color: #bdbdbd;
    display: block;
    font-size: 12px;
    line-height: 14px
}

.mfp-figure figure {
    margin: 0
}

.mfp-bottom-bar {
    margin-top: -36px;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    cursor: auto
}

.mfp-title {
    text-align: left;
    line-height: 18px;
    color: #f3f3f3;
    word-wrap: break-word;
    padding-right: 36px
}

.mfp-image-holder .mfp-content {
    max-width: 100%
}

.mfp-gallery .mfp-image-holder .mfp-figure {
    cursor: pointer
}

@media screen and (max-width:800px) and (orientation:landscape),
screen and (max-height:300px) {
    .mfp-img-mobile .mfp-image-holder {
        padding-left: 0;
        padding-right: 0
    }
    .mfp-img-mobile img.mfp-img {
        padding: 0
    }
    .mfp-img-mobile .mfp-figure:after {
        top: 0;
        bottom: 0
    }
    .mfp-img-mobile .mfp-figure small {
        display: inline;
        margin-left: 5px
    }
    .mfp-img-mobile .mfp-bottom-bar {
        background: rgba(0, 0, 0, .6);
        bottom: 0;
        margin: 0;
        top: auto;
        padding: 3px 5px;
        position: fixed;
        box-sizing: border-box
    }
    .mfp-img-mobile .mfp-bottom-bar:empty {
        padding: 0
    }
    .mfp-img-mobile .mfp-counter {
        right: 5px;
        top: 3px
    }
    .mfp-img-mobile .mfp-close {
        top: 0;
        right: 0;
        width: 35px;
        height: 35px;
        line-height: 35px;
        background: rgba(0, 0, 0, .6);
        position: fixed;
        text-align: center;
        padding: 0
    }
}

@media all and (max-width:900px) {
    .mfp-arrow {
        -webkit-transform: scale(.75);
        transform: scale(.75)
    }
    .mfp-arrow-left {
        -webkit-transform-origin: 0;
        transform-origin: 0
    }
    .mfp-arrow-right {
        -webkit-transform-origin: 100%;
        transform-origin: 100%
    }
    .mfp-container {
        padding-left: 6px;
        padding-right: 6px
    }
}

body.login .login-popup {
    background: #fff;
    padding: 30px;
    text-align: left;
    min-height: 400px;
    max-width: 650px;
    margin: 40px auto;
    position: relative
}

body.login .login-popup .mfp-close {
    color: #000
}

body.login .login-popup .mfp-close:focus,
body.login .login-popup .mfp-close:hover {
    background: 0 0
}

.bb-activity-media-wrap {
    display: flex;
    flex-flow: row wrap;
    margin: 0 -3px;
    align-items: flex-start;
    position: relative
}

.act-grid-1-1 {
    flex: 0 0 100%;
    max-width: 100%;
    min-width: 0
}

.bb-media-length-2 .act-grid-1-1 {
    flex: 0 0 50%;
    max-width: 50%;
    min-width: 0
}

.act-grid-1-2 {
    flex: 0 0 50%;
    max-width: 50%;
    min-width: 0
}

.bb-activity-media-elem {
    padding: 3px
}

.bb-activity-media-elem .entry-img {
    background: 0 0;
    border-radius: 3px;
    display: block;
    margin: 0;
    position: relative;
    padding-top: 42.56%;
    overflow: hidden
}

.bb-media-length-1 .bb-activity-media-elem .entry-img {
    padding-top: 42.56%
}

.bb-media-length-2 .bb-activity-media-elem .entry-img {
    padding-top: 72.56%
}

.bb-media-length-3 .bb-activity-media-elem .entry-img.act-grid-1-1 {
    padding-top: 52.56%
}

.bb-activity-media-elem .entry-img img {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 0;
    min-height: 100%;
    width: auto;
    min-width: 100%;
    object-fit: cover
}

.bb-activity-media-elem .bb-photos-length {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    flex-flow: row wrap;
    justify-content: center;
    background: rgba(0, 0, 0, .4);
    color: #fff;
    font-size: 16px
}

.bb-activity-media-elem .bb-photos-length strong {
    color: inherit;
    display: block;
    font-size: 28px;
    font-weight: 400;
    margin-bottom: 10px
}

.bb-media-length-4 .act-grid-1-2 {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    min-width: 0
}

.bb-media-length-4 .bb-activity-media-elem.act-grid-1-2 .entry-img {
    padding-top: 72.56%
}

.bb-media-length-5 .bb-activity-media-elem .entry-img {
    padding-top: 72.56%
}

.bb-media-length-5 .act-grid-1-1 {
    flex: 0 0 50%;
    max-width: 50%;
    min-width: 0
}

.bb-media-length-5 .act-grid-1-1+.act-grid-1-2 {
    flex: 0 0 50%;
    max-width: 50%;
    min-width: 0
}

.bb-media-length-5 .act-grid-1-2 {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    min-width: 0
}

.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-2 .entry-img {
    padding-top: 55.56%
}

.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout {
    flex: 0 0 64%;
    max-width: 64%;
    min-width: 0
}

.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout~.bb-activity-media-elem {
    flex: 0 0 36%;
    max-width: 36%;
    min-width: 0
}

.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout~.bb-activity-media-elem .entry-img {
    padding-top: 105.6%
}

.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout .entry-img {
    padding-top: 118%
}

.bb-activity-media-wrap.bb-media-length-3 .act-grid-1-1.bb-vertical-layout+div+div {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 36%
}

.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout {
    flex: 0 0 64%;
    max-width: 64%;
    min-width: 0
}

.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout~.bb-activity-media-elem {
    flex: 0 0 36%;
    max-width: 36%;
    min-width: 0
}

.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout~.bb-activity-media-elem .entry-img {
    padding-top: 69.1%
}

.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout .entry-img {
    padding-top: 119%
}

.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout+div {
    position: absolute;
    right: 0;
    top: 33.4%;
    width: 36%
}

.bb-activity-media-wrap.bb-media-length-4 .act-grid-1-1.bb-vertical-layout+div+div {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 36%
}

.bb-activity-media-wrap.bb-media-length-more .bb-activity-media-elem .entry-img {
    padding-top: 82.56%
}

.bb-activity-media-wrap.bb-media-length-more .act-grid-1-1 {
    flex: 0 0 50%;
    max-width: 50%;
    min-width: 0
}

.bb-activity-media-wrap.bb-media-length-more .act-grid-1-1+.act-grid-1-2 {
    flex: 0 0 50%;
    max-width: 50%;
    min-width: 0
}

.bb-activity-media-wrap.bb-media-length-more .act-grid-1-2 {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    min-width: 0
}

.modal-mask {
    position: fixed;
    z-index: 999901;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, .5);
    transition: opacity .3s ease;
    display: flex;
    align-items: center
}

.modal-mask.bb-white {
    background: rgba(250, 251, 253, .9)
}

.modal-wrapper {
    max-width: 600px;
    margin: 50px auto;
    vertical-align: middle;
    width: 90%
}

.modal-wrapper.bb-medium {
    max-width: 740px
}

.modal-wrapper.bb-large {
    max-width: 1080px
}

.modal-container {
    width: auto;
    margin: 0 auto;
    padding: 20px 30px 30px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 6px 24px 0 rgba(18, 43, 70, .08);
    transition: all .3s ease
}

.bb-model-wrap .modal-container {
    border: 1px solid #d2d4d6
}

.bbm-model-wrap input,
.bbm-model-wrap textarea {
    width: 100%
}

.bbm-model-wrap label {
    font-size: 16px;
    line-height: 1.5;
    display: block;
    margin-bottom: 7px
}

.bbm-model-wrap textarea {
    min-height: 80px;
    resize: none;
    margin-bottom: 20px
}

.modal-header h3 {
    margin-top: 0;
    color: #42b983
}

.modal-body {
    margin: 20px 0
}

.modal-default-button {
    float: right
}

.bb-model-header {
    background: #fbfbfc;
    box-shadow: 0 1px 0 0 #eef0f3;
    border-radius: 4px 4px 0 0;
    padding: 17px 25px 16px;
    margin: -20px -30px 30px;
    display: flex;
    align-items: center
}

.bb-model-header.bg-white {
    background: #fff
}

.bb-model-header h4 {
    margin: 0;
    font-size: 17px;
    font-weight: 500
}

.bb-model-header .bb-model-close-button {
    margin-left: auto;
    line-height: 1
}

.modal-enter {
    opacity: 0
}

.modal-leave-active {
    opacity: 0
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
    -webkit-transform: scale(1.1);
    transform: scale(1.1)
}

.bb-model-close-button {
    font-size: 24px;
    color: rgba(17, 49, 80, .4)
}

.bb-photos-wrap .bb-title {
    font-size: 28px;
    line-height: 1;
    margin: 0
}

.bb-photos-wrap .bb-single-bp-header .button {
    margin-left: 5px
}

.bb-member-photos-list {
    margin: 0;
    list-style: none
}

.bb-member-photos-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 20px
}

.bb-photos-meta {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-left: auto;
    margin-bottom: 10px
}

.bb-photos-meta a {
    margin-left: 10px
}

.bb-photos-meta .bb-delete i {
    font-size: 21px
}

.bb-photos-meta .bb-select i {
    border: 1px solid;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 15px;
    border-radius: 50%;
    width: 19px;
    height: 19px
}

.bb-photos-meta .bb-select.selected i {
    background: #000;
    color: #fff;
    border-color: #000
}

.bb-photos-date {
    font-size: 14px;
    color: #939597
}

.buddypress-wrap .bp-list.bb-photo-list {
    display: flex;
    flex-flow: row wrap;
    list-style: none;
    padding: 0;
    margin: 0 -5px
}

.buddypress-wrap .bp-list.bb-photo-list li {
    flex: 0 0 20%;
    min-width: 0;
    margin: 0;
    padding: 5px
}

.bb-photo-cover-wrap {
    position: relative;
    overflow: hidden;
    padding-top: 100%;
    display: block
}

.bb-photo-cover-wrap img {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 0;
    min-height: 100%;
    width: auto;
    min-width: 100%;
    object-fit: cover
}

.bb-photo-cover-wrap:after {
    content: " ";
    position: absolute;
    background: rgba(0, 0, 0, .35);
    border-radius: 3px;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    transition: .3s all
}

.bb-photo-cover-wrap:not(.selected):after {
    visibility: hidden;
    opacity: 0
}

.bb-photo-thumb {
    position: relative
}

.bb-photo-thumb.selected .bb-media-check-wrap,
.bb-photo-thumb.selected .bb-photo-cover-wrap:after,
.bb-photo-thumb:hover .bb-media-check-wrap,
.bb-photo-thumb:hover .bb-photo-cover-wrap:after {
    visibility: visible;
    opacity: 1
}

.bb-media-check-wrap {
    position: absolute;
    transition: .3s all;
    top: 15px;
    right: 15px;
    color: #fff;
    width: 20px;
    height: 20px;
    font-size: 15px;
    text-align: center;
    line-height: 1;
    z-index: 2;
    visibility: hidden;
    opacity: 0
}

.bb-media-model-wrapper.bb-internal-model {
    position: fixed;
    z-index: 999990;
    background-color: rgba(0, 0, 0, .9);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    overflow: auto
}

.bb-media-model-container {
    max-width: 90%;
    min-width: 90%;
    position: relative;
    margin: auto;
    padding: 20px 0
}

#buddypress .bb-media-model-container .activity-list {
    border: 0;
    margin: 0;
    padding: 0
}

#bbpress-forums .bb-media-model-container .activity-list .activity-item,
#buddypress .bb-media-model-container .activity-list .activity-item {
    border: 0;
    box-shadow: none;
    margin: 0;
    max-height: 90vh;
    min-height: 90vh;
    overflow: auto
}

.bb-media-model-inner {
    background: #fff;
    border-radius: 4px;
    display: flex;
    flex-flow: row wrap;
    position: relative;
    overflow: hidden
}

a.theater-command {
    position: absolute;
    align-self: center;
    left: 0;
    top: 0;
    z-index: 1;
    width: 20%;
    height: 100%;
    display: flex;
    align-items: center;
    padding: 0 20px;
    opacity: 0;
    visibility: hidden;
    transition: .2s all
}

.bb-media-section:hover a.theater-command {
    opacity: 1;
    visibility: visible
}

a.theater-command.bb-next-media {
    left: auto;
    right: 0;
    width: 80%;
    justify-content: flex-end
}

.bb-media-section {
    display: flex;
    flex: 0 0 100%;
    align-items: center;
    justify-content: center;
    background: #000;
    position: relative
}

.bb-media-section figure {
    margin: 0
}

.bb-media-section figure img {
    max-height: 90vh;
    width: auto
}

a.bb-close-model {
    position: absolute;
    top: 20px;
    right: 20px;
    line-height: 1;
    z-index: 22
}

.bb-media-info-section {
    flex: 0 0 100%;
    min-width: 0
}

.bb-media-info-section .item-title {
    margin-bottom: 2px
}

.bb-media-info-section .item-title a {
    font-size: 13px
}

.bb-media-info-section .item-avatar {
    margin-right: 12px
}

.bb-media-info-section .avatar {
    border-radius: 50%;
    max-width: 36px
}

.bb-media-info-header {
    font-size: 14px;
    color: #939597;
    letter-spacing: -.24px;
    line-height: 16px;
    margin-bottom: 15px
}

.bb-media-info-header .item-title a {
    font-size: 14px
}

.bb-media-desc {
    min-height: 120px
}

.bb-model-meta {
    padding: 12px 0
}

.bb-model-meta a {
    color: #555;
    opacity: .4;
    display: flex;
    align-items: center;
    margin-right: 20px
}

.bb-model-meta i:before {
    font-size: 22px;
    line-height: 1;
    margin: 0 5px 0 0
}

.bb-model-meta .bb-count {
    font-size: 13px;
    letter-spacing: -.24px
}

#boss-media .bb-media-model-inner .bs-item-wrap .item-meta {
    font-size: 12px;
    color: #a3a5a9;
    letter-spacing: -.18px;
    line-height: 1.666
}

#boss-media .bb-media-model-inner .bs-item-wrap .item-meta .item-meta a {
    color: inherit
}

#boss-media .bb-media-model-inner .bs-item-wrap .item-meta .item-meta a:hover {
    color: #5087e5
}

.bb-media-info-content {
    position: relative
}

.bb-media-info-footer {
    background: #fbfbfc;
    border-top: 1px solid #eef0f3;
    padding: 12px 15px
}

.bb-media-info-footer .add-comment-wrap {
    padding: 0
}

.bb-media-info-footer .add-comment-wrap .add-comment {
    background: #fff
}

a.bb-smile {
    color: rgba(18, 43, 70, .4);
    transition: all linear .2s;
    font-size: 20px
}

a.bb-smile:hover {
    color: rgba(18, 43, 70, .8)
}

body.bb-model-open {
    overflow: hidden
}

.bs-activity-comments:empty {
    display: none
}

.bb-single-album-header {
    padding-top: 20px
}

.bb-single-album-header .bb-title {
    font-size: 24px;
    font-weight: 500;
    letter-spacing: -.24px;
    line-height: 1;
    margin: 0 0 5px!important
}

.bb-single-album-header>a {
    font-size: 14px;
    display: block
}

.bb-single-album-header p {
    opacity: .7;
    font-size: 13px;
    color: #000;
    letter-spacing: -.24px
}

.bb-single-album-header span.bb-sep {
    margin: 0 5px
}

.bb-album-photos-list {
    list-style: none;
    margin-left: 0
}

.album-single-view.no-photos .modal-mask {
    position: relative;
    width: auto;
    height: auto
}

.album-single-view.no-photos .modal-wrapper.bb-large {
    max-width: 100%;
    margin: 0;
    width: 100%
}

.album-single-view.no-photos .bb-model-header {
    display: none
}

.album-single-view.no-photos .modal-container {
    padding: 0;
    margin: 0;
    box-shadow: none
}

.album-single-view.no-photos .dropzone .dz-default {
    background: 0 0
}

.bb-photos-wrap .bb-model-footer {
    padding-top: 20px
}

@media (max-width:544px) {
    .bb-photos-wrap #boss-media-create-album-popup .bb-model-footer {
        flex-direction: column
    }
    .bb-photos-wrap #boss-media-create-album-popup .bb-model-footer .button.push-right {
        margin: 20px auto 0
    }
    .bb-photos-wrap #boss-media-create-album-popup .bb-model-footer .bb-dropdown-wrap {
        width: 100%
    }
    .bb-photos-wrap #boss-media-create-album-popup .bb-model-footer .bb-dropdown-wrap select {
        width: 100%
    }
}

.bb-single-album-page .bb-single-bp-header .bb-add-photos {
    display: none!important
}

.bb-album-actions {
    text-align: center;
    font-size: 12px;
    margin-top: -25px;
    margin-bottom: 20px;
    padding-top: 10px;
    display: flex;
    align-items: center
}

.bb-album-actions select {
    margin-left: auto;
    font-size: 14px;
    color: #939597;
    border: 0;
    text-align: right;
    direction: rtl;
    background-position: right 10px center;
    padding-right: 26px;
    width: 160px;
    height: 30px!important
}

.bb-album-actions>a:first-of-type {
    margin-left: 0
}

div#buddypress div.bb-album-actions .button {
    min-height: 24px;
    padding: 4px 15px;
    font-size: 12px;
    margin: 0 10px 0 0
}

div#buddypress .bb-album-actions .button.error.outline {
    background: 0 0;
    color: #ef3e46;
    border-color: #ef3e46
}

.bb-member-albums-items {
    list-style: none;
    margin: 0
}

.bb-member-albums-items>li:not(:last-child) {
    border-bottom: 1px solid #eef0f3;
    padding-bottom: 30px;
    margin-bottom: 30px
}

ul.bb-albums-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    list-style: none;
    overflow: hidden;
    margin: 0 -5px
}

ul.bb-albums-list li {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
    min-width: 0;
    padding: 5px
}

ul.bb-albums-list a {
    position: relative;
    overflow: hidden;
    padding-top: 100%;
    display: block;
    background: #809ab4
}

ul.bb-albums-list img {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 0;
    min-height: 100%;
    width: auto;
    min-width: 100%;
    object-fit: cover
}

ul.bb-albums-list .bb-more-photos {
    font-size: 14px;
    font-weight: 300;
    color: #939597;
    letter-spacing: -.24px;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    display: flex;
    align-items: center;
    flex-flow: column;
    justify-content: center
}

ul.bb-albums-list .bb-more-photos strong {
    line-height: 1;
    font-size: 24px;
    color: #4d5c6d;
    letter-spacing: -.24px;
    text-align: center;
    font-weight: 400
}

.bb-album-list-item .bs-cover-wrap {
    border-radius: 0;
    padding-top: 93.52%
}

.bb-album-list-item .bs-cover-wrap:after {
    content: " ";
    position: absolute;
    background-image: linear-gradient(0deg, #000 0, rgba(0, 0, 0, .01) 60%, rgba(0, 0, 0, 0) 100%);
    border-radius: 3px;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0
}

.bb-album-cover-wrap {
    position: relative
}

.bb-album-cover-wrap h4 {
    font-size: 20px;
    color: inherit;
    letter-spacing: -.24px;
    line-height: 1;
    margin: 0 0 12px
}

.bb-album-cover-wrap .bb-album-content-wrap {
    position: absolute;
    bottom: 0;
    z-index: 11;
    left: 0;
    padding: 25px;
    font-size: 13px;
    color: #fff;
    letter-spacing: -.24px;
    line-height: 1;
    width: 100%
}

#buddypress .bb-album-content-wrap h4 {
    margin-bottom: 12px
}

.bbm-uploader-model-wrap .dropzone .dz-remove:after {
    top: -6px
}

@media (min-width:768px) {
    .bb-media-model-inner {
        max-height: 90vh;
        min-height: 90vh
    }
    .bb-media-section {
        flex: 1;
        min-width: 0
    }
    .bb-media-info-section {
        flex: 0 0 376px;
        min-width: 0
    }
}

@media (max-width:767px) {
    a.bb-close-model {
        top: 10px;
        right: 10px
    }
}

@media (max-width:1000px) {
    .bb-album-cover-wrap .bb-album-content-wrap {
        font-size: 11px;
        padding: 15px
    }
    .bb-album-cover-wrap h4 {
        font-size: 18px
    }
    ul.bb-albums-list .bb-more-photos {
        font-size: 10px
    }
    ul.bb-albums-list .bb-more-photos strong {
        font-size: 20px
    }
    .buddypress-wrap .bp-list.bb-photo-list li {
        flex: 0 0 25%
    }
}

@media (max-width:580px) {
    ul.bb-albums-list li {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
        min-width: 0
    }
    .bb-album-list-item .bs-cover-wrap {
        padding-top: 95.52%
    }
    .buddypress-wrap .bp-list.bb-photo-list li {
        flex: 0 0 50%
    }
}

.bb-custom-check {
    position: absolute;
    opacity: 0
}

.bb-custom-check+label {
    color: #fff;
    position: relative;
    cursor: pointer;
    padding: 0
}

.bb-custom-check:checked+label {
    color: #fff
}

#media_uploader.dropzone .bb-dz-preview-wrap .dz-image img {
    cursor: default
}

.bb-dropzone-wrap.bb-has-items .dz-default {
    display: none!important
}

.bb-dropzone-wrap.bb-has-items {
    margin: -8px
}

.bb-dropzone-wrap.bb-has-items .dz-preview {
    margin: 8px;
    width: calc(20% - 16px)
}

.bb-model-footer .button {
    min-width: 130px
}

.bbm-uploader-model-wrap .bb-model-header h4 {
    font-size: 22px
}

.bbm-uploader-model-wrap .bb-model-header span {
    font-size: 1rem;
    color: #939597;
    letter-spacing: -.24px;
    line-height: 24px;
    margin-right: 15px
}

.bbm-uploader-model-wrap .bb-model-header .dashicons {
    font-size: 22px;
    margin: 0
}

.bb-media-actions-wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: 15px 0
}

.bb-media-actions-wrap h2 {
    margin: 0
}

.bb-add-media {
    display: inline-block
}

.emojionearea.emojionearea-standalone {
    vertical-align: top
}

.webui-popover.webui-popover {
    z-index: 999991
}

.text-center {
    text-align: center
}

.modal-container .bp-existing-media-wrap {
    margin-bottom: 20px;
    max-height: 68vh;
    overflow: auto
}

.bb-model-close-button .dashicons {
    font-size: 22px
}

.bb-dropdown-wrap,
.bb-field-wrap {
    margin-bottom: 20px
}

.bp-media-upload-tab {
    margin-right: 15px
}

#bbpress-forums ul.bp-list.loading,
#buddypress ul.bp-list.loading {
    background: #fff;
    padding: 20px;
    text-align: center
}

.bb-media-model-inner .gif-media-search-dropdown.open {
    width: 300px;
    left: -50px
}

.comment-item .bb-media-model-inner ul .gif-media-search-dropdown.open {
    left: -80px
}

.bb-media-model-inner .gif-media-search-dropdown:before {
    left: 70px
}

.comment-item .bb-media-model-inner ul .gif-media-search-dropdown:before {
    left: 100px
}

.bb-media-model-inner .emojionearea .emojionearea-picker.emojionearea-picker-position-bottom {
    left: -110px
}

.bb-media-model-inner .emojionearea .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 112px
}

.bb-media-model-inner .ac-reply-toolbar.post-media-disabled.post-gif-disabled .emojionearea-picker.emojionearea-picker-position-bottom {
    left: -28px
}

.bb-media-model-inner .ac-reply-toolbar.post-media-disabled.post-gif-disabled .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 30px
}

.bb-media-model-inner .ac-reply-content .ac-reply-toolbar.post-media-disabled.post-gif-disabled .emojionearea-picker.emojionearea-picker-position-bottom {
    left: -50px
}

.bb-media-model-inner .ac-reply-content .ac-reply-toolbar.post-media-disabled.post-gif-disabled .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 52px
}

.bb-media-model-inner .ac-reply-toolbar.post-media-disabled:not(.post-gif-disabled) .emojionearea-picker.emojionearea-picker-position-bottom {
    left: -80px
}

.bb-media-model-inner .ac-reply-toolbar.post-media-disabled:not(.post-gif-disabled) .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 82px
}

.bb-media-model-inner .ac-reply-toolbar.post-media-disabled:not(.post-gif-disabled) .gif-media-search-dropdown.open {
    left: -30px
}

.bb-media-model-inner .ac-reply-toolbar.post-media-disabled:not(.post-gif-disabled) .gif-media-search-dropdown:before {
    left: 50px
}

.bb-media-model-inner .ac-reply-toolbar.post-gif-disabled:not(.post-media-disabled) .emojionearea-picker.emojionearea-picker-position-bottom {
    left: -80px
}

.bb-media-model-inner .ac-reply-toolbar.post-gif-disabled:not(.post-media-disabled) .emojionearea-picker.emojionearea-picker-position-bottom .emojionearea-wrapper:after {
    left: 82px
}

img.emoji,
img.emojioneemoji {
    display: inline-block;
    margin: 3px;
    width: 24px!important;
    height: 24px!important
}

.dropzone,
.dropzone * {
    box-sizing: border-box
}

.dropzone {
    border: 0;
    padding: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    flex-flow: row wrap
}

.dropzone .dz-message {
    margin-top: 0;
    margin-bottom: 0
}

.dropzone.dz-clickable {
    cursor: pointer
}

.dropzone.dz-clickable * {
    cursor: default
}

.dropzone.dz-clickable .dz-message,
.dropzone.dz-clickable .dz-message * {
    cursor: pointer
}

.dropzone.dz-started .dz-message {
    display: none
}

.dz-default.dz-message {
    flex: 0 0 100%;
    min-width: 0
}

.dropzone.dz-drag-hover .dz-message {
    opacity: .5
}

.dropzone .dz-preview {
    position: relative;
    margin: 0 5px 10px
}

.dz-image {
    border-radius: 4px;
    overflow: hidden
}

.dz-image img {
    display: block
}

.dropzone .dz-preview.dz-file-preview .dz-image {
    border-radius: 4px;
    position: relative;
    overflow: hidden;
    padding-top: 100%;
    display: block;
    background: #f0f3f7
}

.dropzone .dz-preview.dz-file-preview .dz-image img {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 0;
    width: auto;
    min-width: 100%;
    object-fit: cover
}

.dropzone .dz-remove {
    font-size: 0;
    text-align: center;
    display: block;
    cursor: pointer;
    border: none;
    position: absolute;
    top: 5px;
    right: 5px;
    height: 14px;
    width: 14px;
    border-radius: 50%;
    color: #c3c6c9;
    z-index: 101;
    overflow: hidden
}

.dropzone .dz-complete .dz-remove:after {
    content: "\00d7";
    font-size: 14px;
    line-height: 1
}

.dropzone .dz-complete .dz-remove {
    color: #fff;
    box-shadow: 0 0 3px rgba(0, 0, 0, .1);
    background: #fd4343
}

.dropzone .dz-preview:hover {
    z-index: 1000
}

.dropzone .dz-preview:hover .dz-details {
    opacity: 1
}

.dropzone .dz-preview .dz-details .dz-size {
    margin-bottom: 1em;
    font-size: 16px
}

.dropzone .dz-preview .dz-details .dz-filename span {
    display: block;
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    letter-spacing: -.24px;
    font-weight: 300;
    margin-top: 8px
}

.dropzone .dz-preview.dz-success .dz-success-mark {
    -webkit-animation: passing-through 3s cubic-bezier(.77, 0, .175, 1);
    -moz-animation: passing-through 3s cubic-bezier(.77, 0, .175, 1);
    -ms-animation: passing-through 3s cubic-bezier(.77, 0, .175, 1);
    -o-animation: passing-through 3s cubic-bezier(.77, 0, .175, 1);
    animation: passing-through 3s cubic-bezier(.77, 0, .175, 1)
}

.dropzone .dz-preview.dz-error .dz-error-mark {
    opacity: 1;
    -webkit-animation: slide-in 3s cubic-bezier(.77, 0, .175, 1);
    -moz-animation: slide-in 3s cubic-bezier(.77, 0, .175, 1);
    -ms-animation: slide-in 3s cubic-bezier(.77, 0, .175, 1);
    -o-animation: slide-in 3s cubic-bezier(.77, 0, .175, 1);
    animation: slide-in 3s cubic-bezier(.77, 0, .175, 1)
}

.dropzone .dz-preview .dz-error-mark,
.dropzone .dz-preview .dz-success-mark {
    pointer-events: none;
    opacity: 0;
    z-index: 500;
    position: absolute;
    display: block;
    margin-left: auto;
    margin-top: auto;
    width: 100%;
    top: 45%;
    left: 0;
    text-align: center
}

.dropzone .dz-preview .dz-error-mark {
    font-size: 30px;
    top: 38%
}

.dz-error-mark svg,
.dz-success-mark svg {
    max-width: 20px;
    height: auto;
    margin: -10px 0 0 10px
}

.dz-success-mark svg path {
    fill: #1cd991
}

.dz-error-mark svg path {
    fill: #ef3e46
}

.dz-error-mark i {
    color: #ef3e46
}

.dropzone .dz-preview.dz-processing .dz-progress {
    opacity: 1;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -ms-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear
}

.dropzone .dz-preview.dz-complete .dz-progress {
    opacity: 0;
    -webkit-transition: opacity .4s ease-in;
    -moz-transition: opacity .4s ease-in;
    -ms-transition: opacity .4s ease-in;
    -o-transition: opacity .4s ease-in;
    transition: opacity .4s ease-in
}

.dropzone .dz-preview:not(.dz-processing) .dz-progress {
    -webkit-animation: pulse 6s ease infinite;
    -moz-animation: pulse 6s ease infinite;
    -ms-animation: pulse 6s ease infinite;
    -o-animation: pulse 6s ease infinite;
    animation: pulse 6s ease infinite
}

.dropzone .dz-preview .dz-progress {
    opacity: 1;
    z-index: 100;
    pointer-events: none;
    position: absolute;
    height: 2px;
    left: 0;
    right: 0;
    bottom: 0;
    top: 50%;
    width: 80%;
    margin: 0 auto;
    background: rgba(255, 255, 255, .9);
    -webkit-transform: scale(1);
    border-radius: 8px;
    overflow: hidden
}

.dropzone .dz-preview .dz-progress .dz-upload {
    background: #333;
    background: linear-gradient(to bottom, #666, #444);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 0;
    -webkit-transition: width .3s ease-in-out;
    -moz-transition: width .3s ease-in-out;
    -ms-transition: width .3s ease-in-out;
    -o-transition: width .3s ease-in-out;
    transition: width .3s ease-in-out
}

.dropzone .dz-preview.dz-error .dz-error-message {
    display: block
}

.dropzone .dz-preview.dz-error:hover .dz-error-message {
    opacity: 1;
    pointer-events: auto
}

.dropzone .dz-preview .dz-error-message {
    pointer-events: none;
    z-index: 100;
    position: absolute;
    display: block;
    display: none;
    opacity: 0;
    -webkit-transition: opacity .3s ease;
    -moz-transition: opacity .3s ease;
    -ms-transition: opacity .3s ease;
    -o-transition: opacity .3s ease;
    transition: opacity .3s ease;
    border-radius: 8px;
    font-size: 13px;
    top: 130px;
    left: -10px;
    width: 140px;
    background: #be2626;
    background: linear-gradient(to bottom, #be2626, #a92222);
    padding: .5em 1.2em;
    color: #fff;
    word-wrap: break-word
}

.dropzone .dz-preview .dz-error-message:after {
    content: " ";
    position: absolute;
    top: -6px;
    left: 64px;
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #be2626
}

.vue-dropzone .dz-preview .dz-details .dz-filename {
    overflow: hidden
}

.vue-dropzone .dz-preview .dz-details .dz-filename span,
.vue-dropzone .dz-preview .dz-details .dz-size span {
    background-color: transparent
}

.vue-dropzone .dz-preview .dz-progress .dz-upload {
    background: #007cff
}

.vue-dropzone .dz-preview .dz-error-message {
    top: 24px;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    width: 96%;
    font-size: 10px;
    line-height: 1.3
}

.vue-dropzone .dz-preview .dz-error-message:after {
    bottom: -6px;
    top: initial;
    border-top: 6px solid #a92222;
    border-bottom: none
}

@-webkit-keyframes passing-through {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px)
    }
    30%,
    70% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px)
    }
}

@-moz-keyframes passing-through {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px)
    }
    30%,
    70% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px)
    }
}

@keyframes passing-through {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px)
    }
    30%,
    70% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0)
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px)
    }
}

@-webkit-keyframes slide-in {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px)
    }
    30% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0)
    }
}

@-moz-keyframes slide-in {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px)
    }
    30% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0)
    }
}

@keyframes slide-in {
    0% {
        opacity: 0;
        -webkit-transform: translateY(40px);
        -moz-transform: translateY(40px);
        -ms-transform: translateY(40px);
        -o-transform: translateY(40px);
        transform: translateY(40px)
    }
    30% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0)
    }
}

@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }
    10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1)
    }
    20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }
}

@-moz-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }
    10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1)
    }
    20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }
}

@keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }
    10% {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1)
    }
    20% {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }
}

.dropzone .dz-default {
    border: 4px dashed #bbb;
    min-height: 20vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #767676;
    font-size: 110%;
    margin: 5px 0;
    text-align: center
}

.dz-details {
    display: none
}

.dropzone.dz-started {
    margin: 0 -5px 20px
}

.dropzone.dz-started .dz-default.dz-message {
    display: flex;
    order: 2;
    min-height: 1px;
    max-width: 120px;
    height: 120px;
    font-size: 12px;
    text-align: center;
    line-height: 1.3;
    margin: 0 5px 10px
}

.dropzone.dz-started .dz-default.dz-message span:before {
    background-size: 30px;
    height: 26px;
    width: 30px;
    margin: 0 auto 10px
}

#group-messages-container {
    background: #fff;
    border: 1px solid #e7e9ec;
    border-radius: 4px;
    margin-bottom: 20px;
    display: flex;
    flex-flow: row wrap
}

@media screen and (max-width:540px) {
    #group-messages-container .bb-groups-messages-right #whats-new-toolbar {
        display: block
    }
    #group-messages-container .bb-groups-messages-right #whats-new-toolbar .post-elements-buttons-item {
        display: inline-block
    }
    #group-messages-container .bb-groups-messages-right #whats-new-toolbar #group-messages-new-submit {
        margin-top: 15px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }
    #group-messages-container .bb-groups-messages-right #whats-new-toolbar #group-messages-new-submit .group-messages-type {
        margin-bottom: 10px
    }
    #group-messages-container .bb-groups-messages-right #whats-new-toolbar div.medium-editor-toolbar {
        bottom: 65px
    }
    #group-messages-container .bb-groups-messages-right #whats-new-toolbar div.medium-editor-toolbar.active {
        bottom: 88px
    }
    #group-messages-container .bb-groups-messages-right #whats-new-toolbar.media-off .medium-editor-toolbar {
        bottom: 88px
    }
}

.bb-groups-messages-right {
    flex: 1;
    min-width: 0;
    position: relative
}

.bb-groups-messages-right .medium-editor-element:not(.emojionearea),
.bb-groups-messages-right .medium-editor-placeholder:not(.emojionearea) {
    max-height: 50vh;
    overflow-y: auto;
    overflow-x: hidden;
    margin-bottom: 15px
}

.bb-groups-messages-left {
    display: block;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 360px;
    flex: 0 0 360px;
    min-width: 0
}

@media screen and (max-width:46.8em) {
    .bb-groups-messages-left {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        min-width: 0
    }
}

.bp-vertical-navs .bb-groups-messages-left {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 260px;
    flex: 0 0 260px
}

.bb-panel-head {
    border-bottom: 1px solid #e7e9ec;
    padding: 15px 20px;
    position: relative
}

.bb-panel-subhead {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 7px 0
}

#item-body .total-members-text {
    line-height: 1;
    margin: 0
}

.bp-group-message-wrap {
    margin: 0 0 0 auto;
    line-height: 1
}

.bp-group-message-label {
    font-size: 13px;
    margin: 0
}

#bp-group-message-content p {
    margin-bottom: 1rem
}

.group-messages-members-listing {
    padding: 0 20px 20px
}

#buddypress .group-messages-members-listing ul.item-list {
    margin-bottom: 0
}

.bb-panel-footer {
    display: none;
    border-top: 1px solid #e7e9ec;
    padding: 10px 20px;
    text-align: right
}

.group-messages-members-listing #members-list {
    max-height: 60vh;
    overflow-y: auto;
    overflow-x: hidden;
    margin: 0 -20px;
    padding: 0 20px;
    width: auto
}

#group-messages-container .bb-groups-messages-left .group-messages-search {
    padding: 20px 0
}

#item-body #group-messages-container .bb-groups-messages-left .group-messages-members-listing .item-list li.selected {
    background: #f5f5f5
}

#group-messages-container .bb-groups-messages-right .bp-messages-feedback-hide {
    display: none
}

#send_group_message_form .select2-selection--multiple {
    border-color: transparent;
    padding: 0
}

#send_group_message_form .select2-selection__rendered {
    display: flex;
    align-items: center;
    flex-flow: row wrap;
    padding: 0
}

#send_group_message_form .select2-search.select2-search--inline {
    flex: 1;
    min-width: 0
}

#send_group_message_form .select2-selection__rendered li {
    margin: 0
}

#buddypress #send_group_message_form .select2-search__field {
    background: 0 0;
    border-width: 0;
    min-width: 100%;
    width: 100%!important;
    padding-left: 0;
    height: 30px
}

#buddypress #send_group_message_form li:first-child .select2-search__field {
    height: 40px
}

body.groups.messages .select2-dropdown .select2-results__option {
    border-radius: 3px;
    margin-bottom: 0;
    font-size: 14px;
    padding: 2px 5px
}

body.groups.messages li.select2-results__option.select2-results__message {
    border-radius: 3px;
    margin-bottom: 0;
    font-size: 14px;
    padding: 2px 5px
}

body.groups.messages span.select2-dropdown.select2-dropdown--below {
    background: #fff;
    box-shadow: 0 2px 7px 1px rgba(0, 0, 0, .05), 0 6px 32px 0 rgba(18, 43, 70, .1);
    border-radius: 4px;
    border: 0;
    padding: 5px 10px;
    margin-right: 0;
    max-width: 300px;
    display: none
}

.bb-groups-messages-right-top {
    padding: 20px
}

.bb-groups-messages-right-bottom {
    border-top: 1px solid #e7e9ec;
    height: 100%
}

.bp-select-members-wrap {
    min-height: 45px
}

body.groups.messages #send_group_message_form .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #4d5c6d;
    border-color: #4d5c6d;
    font-size: 14px;
    color: #fff;
    letter-spacing: -.24px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-flow: row-reverse;
    flex-flow: row-reverse;
    padding: 0 8px
}

#send_group_message_form .select2-selection__choice__remove {
    color: #333;
    margin-left: 7px;
    background: #fff;
    height: 16px;
    width: 16px;
    border-radius: 50%;
    line-height: 1;
    display: flex;
    align-items: center;
    font-size: 16px;
    justify-content: center
}

#send_group_message_form .select2-selection--multiple {
    border-color: transparent;
    padding: 0
}

#send_group_message_form .select2-selection__rendered {
    display: flex;
    align-items: center;
    flex-flow: row wrap;
    padding: 0
}

#send_group_message_form .select2-search.select2-search--inline {
    flex: 1;
    min-width: 0
}

#send_group_message_form .select2-selection__rendered li {
    margin: 0
}

#send_group_message_form li.select2-selection__choice {
    margin-right: 10px;
    margin-bottom: 5px;
    margin-top: 5px
}

#send_group_message_form #group-messages-toolbar {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px
}

#send_group_message_form #group-messages-toolbar .post-elements-buttons-item {
    margin-right: 10px;
    position: relative
}

div#bp-group-message-content {
    padding: 20px;
    height: 100%;
    display: flex;
    flex-flow: column
}

#group-messages-container .bb-groups-messages-left .bp-messages-feedback-hide {
    display: none
}

#group-messages-container .item-list li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    padding: 5px 0;
    position: relative;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 0;
    width: 100%
}

#group-messages-container .bb-groups-messages-left .list-title {
    color: #393e41;
    font-size: 15px;
    margin: 0 auto;
    width: 100%
}

#group-messages-container .bb-groups-messages-left .list-title>a {
    font-size: 15px;
    font-weight: 400
}

#group-messages-container .bb-groups-messages-left .action button {
    height: auto;
    min-height: 10px;
    padding: 0;
    min-width: 40px;
    border: 0;
    color: inherit;
    background: 0 0;
    box-shadow: none
}

#group-messages-container .bb-groups-messages-left .last {
    text-align: center;
    float: right
}

#group-messages-container .bb-groups-messages-left .bp-group-messages-filters .button.group-message-button {
    background-color: transparent;
    border: 0;
    padding-left: 5px;
    padding-right: 5px
}

#group-messages-container .bb-groups-messages-left #group-group-messages-container .button.group-message-button {
    min-height: 34px;
    padding: 5px 16px
}

#group-messages-container .bb-groups-messages-left .button.group-message-button {
    min-height: 26px;
    padding: 0;
    background: 0 0;
    border: 0
}

span.icons:before {
    font-family: dashicons
}

#bp-message-thread-list.group-message-thread .bp-single-message-wrap {
    padding-left: 12px;
    padding-right: 12px
}

#bp-message-thread-list.group-message-thread .bp-single-message-wrap.group-messages-highlight {
    background: #fffced;
    padding: 12px 11px;
    border: 1px solid #f9efca;
    border-radius: 5px
}

#group-messages-container .select2-container--default.select2-container--disabled .select2-selection--multiple {
    background-color: transparent!important;
    cursor: default
}

#group-messages-container div#group-messages-new-submit {
    margin-left: auto;
    display: flex
}

#group-messages-container #whats-new-toolbar {
    display: block
}

#group-messages-container #whats-new-toolbar .post-elements-buttons-item {
    display: inline-block;
    margin-right: 6px
}

#group-messages-container #whats-new-toolbar #group-messages-new-submit {
    border-top: 1px solid #ebe9e6;
    padding: 10px 20px 0;
    margin: 10px -20px -10px;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

#group-messages-container #whats-new-toolbar #group-messages-new-submit .group-messages-type {
    width: auto
}

#group-messages-container #whats-new-toolbar .medium-editor-toolbar {
    top: inherit;
    bottom: 45px;
    left: 23px;
    visibility: hidden;
    z-index: 99;
    background-color: #fff;
    opacity: 0;
    transition: all ease .3s;
    height: 0;
    right: 0;
    overflow: hidden;
    border-radius: 0
}

#group-messages-container #whats-new-toolbar .medium-editor-toolbar.active {
    border-radius: 0;
    z-index: 112;
    opacity: 1;
    visibility: visible;
    bottom: 40px;
    height: 40px;
    right: -20px
}

#group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions {
    background-color: transparent;
    height: auto;
    padding: 0
}

#group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button {
    box-shadow: none;
    padding: 10px 10px 10px 0;
    min-width: 30px;
    border: 0;
    background-color: transparent!important;
    color: rgba(18, 43, 70, .4)!important
}

#group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-button-active {
    color: #122b46!important;
    background: none transparent!important
}

#group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-action-close {
    padding-right: 0
}

#group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input {
    width: 220px
}

#group-messages-container #whats-new-toolbar.media-off .medium-editor-toolbar {
    visibility: visible;
    height: 44px;
    left: -15px;
    opacity: 1;
    bottom: 35px
}

#group-messages-container #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-actions {
    opacity: .4
}

#group-messages-container #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-actions li {
    pointer-events: none
}

#group-messages-container #whats-new-toolbar.media-off .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions {
    opacity: 1
}

#group-messages-container #whats-new-toolbar.media-off .medium-editor-toolbar.medium-editor-toolbar-active .medium-editor-toolbar-actions li {
    pointer-events: auto
}

#group-messages-container #whats-new-toolbar.media-off .medium-editor-toolbar .medium-editor-toolbar-form.medium-editor-toolbar-form-active {
    position: absolute;
    box-shadow: none;
    bottom: -6px
}

#group-messages-container select.group-messages-type {
    margin-right: 10px
}

#group-messages-container form#send_group_message_form {
    margin-bottom: 0;
    height: 100%;
    display: flex;
    flex-flow: column
}

#group-messages-container .bb-groups-messages-right>.bp-feedback {
    margin: 20px
}

.bp-single-message-content .bp-message-content-wrap p.joined {
    color: #847d7d;
    font-style: italic;
    font-weight: 500
}

.total-members-text:empty {
    display: none
}

#group-messages-container .group-messages-members-listing .total-members-text {
    color: #939597;
    font-size: 15px;
    font-weight: 400;
    margin-bottom: 10px;
    margin-top: 20px
}

#group-messages-container .load-more .center {
    width: 100%;
    text-align: center
}

.bb-group-message-info {
    font-size: 12px;
    font-style: italic;
    color: #939597;
    letter-spacing: -.21px;
    line-height: 1;
    margin-top: 6px
}

#buddypress .bb-group-message-info a {
    text-decoration: underline
}

#group-messages-container .bp-message-dropdown-options-hide {
    display: none
}

.bp-group-message-switch {
    position: relative;
    display: inline-block;
    width: 38px;
    height: 20px;
    margin: 0
}

.bp-group-message-switch input {
    opacity: 0;
    width: 0;
    height: 0
}

.bp-group-message-slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s
}

.bp-group-message-slider:before {
    position: absolute;
    content: " ";
    height: 14px;
    width: 14px;
    left: 3px;
    bottom: 3px;
    background-color: #fff;
    -webkit-transition: .4s;
    transition: .4s
}

.bb-groups-messages-left-inner input:checked+.bp-group-message-slider {
    background-color: #007cff
}

.bb-groups-messages-left-inner .input:focus+.bp-group-message-slider {
    box-shadow: 0 0 1px #007cff
}

.bb-groups-messages-left-inner input:checked+.bp-group-message-slider:before {
    -webkit-transform: translateX(18px);
    -ms-transform: translateX(18px);
    transform: translateX(18px)
}

.bb-groups-messages-right .bb-title-wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.message-lists .group-thread .thread-avatar {
    position: relative
}

.message-lists .group-thread .thread-avatar:before {
    content: "\f307";
    font-family: dashicons;
    font-style: normal;
    speak: none;
    text-decoration: inherit;
    text-transform: none;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    width: 18px;
    height: 18px;
    font-size: 14px;
    position: absolute;
    background: #fff;
    color: #939597;
    border-radius: 50%;
    border: 1px solid;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
    right: -6px;
    top: 2px
}

.message-lists .thread-avatar {
    position: relative
}

.message-lists .thread-avatar .recipients-count {
    position: absolute;
    top: 2px;
    right: -5px;
    background: #fff;
    color: #939597;
    border-radius: 50%;
    border: 1px solid;
    font-size: 11px;
    line-height: normal;
    min-width: 19px;
    padding: 2px;
    text-align: center
}

.message-lists .thread-item {
    position: relative
}

.message-lists .thread-item .close-conversation {
    color: #939597;
    position: absolute;
    right: 22px;
    bottom: 0;
    opacity: 0;
    visibility: hidden;
    transition: all ease .3s
}

.message-lists .thread-item:hover .close-conversation {
    opacity: 1;
    visibility: visible
}

.bp-group-message-slider.bp-group-message-round {
    border-radius: 34px
}

.bp-group-message-slider.bp-group-message-round:before {
    border-radius: 50%
}

.hr-text {
    line-height: 1;
    position: relative;
    outline: 0;
    border: 0;
    color: #000;
    text-align: center;
    height: 1.5em;
    opacity: .5;
    width: 100%;
    background: 0 0;
    margin: 0
}

.hr-text:before {
    content: "";
    background: #818078;
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 1px
}

.hr-text:after {
    content: attr(data-content);
    position: relative;
    display: inline-block;
    padding: .5em;
    line-height: 1.5;
    color: #818078;
    background-color: #fff
}

#group-messages-container .bb-groups-messages-right .group-messages-compose {
    font-size: 0;
    display: none;
    line-height: 0
}

#group-messages-container .bb-groups-messages-right .group-messages-compose:after {
    content: "\f465";
    font-size: 20px;
    font-family: dashicons;
    vertical-align: top;
    text-align: center;
    transition: color .1s ease-in;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

@media screen and (min-width:1081px) {
    .bb-groups-messages-left {
        border-right: 1px solid #e7e9ec
    }
    .add-more-members {
        display: none
    }
}

@media screen and (max-width:1080px) {
    .bb-groups-messages-left:not(.bb-select-member-view) .bb-panel-head {
        display: none
    }
    .bb-groups-messages-left,
    .bb-groups-messages-right {
        flex: 0 0 100%;
        border-right: 0
    }
    .group-messages-members-listing #members-list {
        max-height: 25vh
    }
    .bb-panel-footer,
    .group-messages-members-listing,
    .group-messages-search {
        display: none
    }
    .bb-groups-messages-left.bb-select-member-view {
        position: fixed;
        background: rgba(0, 0, 0, .69);
        content: "";
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999999;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden
    }
    .bb-groups-messages-left.bb-select-member-view .bb-groups-messages-left-inner {
        background: #fff;
        border-radius: 5px;
        width: 90%;
        max-width: 500px;
        overflow: hidden
    }
    .bb-groups-messages-left.bb-select-member-view .bb-panel-footer,
    .bb-groups-messages-left.bb-select-member-view .group-messages-members-listing,
    .bb-groups-messages-left.bb-select-member-view .group-messages-search {
        display: block
    }
    .bb-groups-messages-left.bb-select-member-view .add-more-members,
    .bb-groups-messages-left.bb-select-member-view select.group-messages-select-members-dropdown {
        display: none
    }
    .bb-groups-messages-left.bb-select-member-view .group-messages-members-listing {
        padding-bottom: 0
    }
    .bb-groups-messages-left.bb-select-member-view .bb-panel-head {
        background: #fbfbfc
    }
    body #buddypress .group-messages-members-listing .bp-list .action {
        flex: 0 0 26px;
        margin-left: auto
    }
    .bb-groups-messages-right .medium-editor-element:not(.emojionearea),
    .bb-groups-messages-right .medium-editor-placeholder:not(.emojionearea) {
        min-height: 180px
    }
}

@media screen and (max-width:767px) {
    #group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button {
        padding: 10px 5px 10px 0
    }
    #group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button.medium-editor-button-first {
        padding-left: 5px!important
    }
}

@media screen and (max-width:560px) {
    #group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions {
        padding: 0 6px
    }
    #group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-actions button {
        padding: 10px 0
    }
    #group-messages-container #whats-new-toolbar .medium-editor-toolbar .medium-editor-toolbar-form .medium-editor-toolbar-input {
        max-width: calc(100% - 90px);
        width: auto
    }
}
</style>
<?php do_action( 'bp_before_members_loop' ); ?>

<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>
	
	<div id="pag-top" class="pagination">

		<div class="pag-count" id="member-dir-count-top">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="member-dir-pag-top">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

	<?php do_action( 'bp_before_directory_members_list' ); ?>

	<ul id="members-list" class="item-list members-list bp-list grid"" role="main">
	
	<?php while ( bp_members() ) : bp_the_member(); ?>

		<li class="item-entry odd is-online is-current-user" data-bp-item-id="2" data-bp-item-component="members">
			<div class="list-wrap footer-buttons-on follow-active ">
			
				<div class="list-wrap-inner">
					<div class="item-avatar">
						<a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar('type=full&width=70&height=70'); ?></a>
					</div>

					<div class="item">

						<div class="item-block">
							<h2 class="list-title member-name">
								<a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
							</h2>

							<p class="item-meta last-activity"><span class="bp-member-type">Member</span></p>						</div>

						<div class="button-wrap member-button-wrap only-list-view">
							
			<div class="followers-wrap"><b>13</b> followers</div>
												   
													</div>

													<div class="flex only-grid-view align-items-center follow-container justify-center">
								
			<div class="followers-wrap"><b>13</b> followers</div>
												   															</div>
											</div><!-- // .item -->

					
					
									</div>

				<div class="bp-members-list-hook">
											<div class="bp-members-list-hook-inner">
													</div>
				</div>
			</div>
		</li>

	<?php endwhile; ?>

	</ul>

	<?php do_action( 'bp_after_directory_members_list' ); ?>

	<?php bp_member_hidden_fields(); ?>

	<div id="pag-bottom" class="pagination">

		<div class="pag-count" id="member-dir-count-bottom">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="member-dir-pag-bottom">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( "Sorry, no members were found.", 'boss' ); ?></p>
	</div>

<?php endif; ?>

<?php do_action( 'bp_after_members_loop' ); ?>
