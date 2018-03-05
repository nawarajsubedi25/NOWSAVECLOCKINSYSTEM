
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="http://rdfs.org/sioc/ns#"
  xmlns:sioct="http://rdfs.org/sioc/types#"
  xmlns:skos="http://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
  <title>Student Timesheets | Student Timeclock System</title>
  <style type="text/css" media="all">@import url("https://webservices.ulm.edu/timeclock/modules/system/system.base.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/modules/system/system.menus.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/modules/system/system.messages.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/modules/system/system.theme.css?ozdhl4");</style>
<style type="text/css" media="all">@import url("https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.core.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.theme.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.button.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.resizable.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.dialog.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.datepicker.css?ozdhl4");</style>
<link type="text/css" rel="stylesheet" href="https://webservices.ulm.edu/timeclock/sites/all/modules/date/date_popup/themes/jquery.timeentry.css?ozdhl4" media="all" />
<style type="text/css" media="all">@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/modules/ldap/ldap_user/ldap_user.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/all/modules/calendar/css/calendar_multiday.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/modules/comment/comment.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/all/modules/date/date_api/date.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/all/modules/date/date_popup/themes/datepicker.1.7.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/modules/field/theme/field.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/modules/node/node.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/modules/search/search.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/modules/user/user.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/all/modules/views/css/views.css?ozdhl4");</style>
<style type="text/css" media="all">@import url("https://webservices.ulm.edu/timeclock/sites/all/modules/ctools/css/ctools.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/modules/ldap/ldap_servers/ldap_servers.admin.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/all/modules/page_throbber/assets/page_throbber.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/all/modules/ulm_functions/style/ulm_functions.css?ozdhl4");</style>
<style type="text/css" media="all">@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/html-reset.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/wireframes.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/layout-fixed.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/page-backgrounds.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/tabs.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/pages.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/blocks.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/navigation.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/views-styles.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/nodes.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/comments.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/forms.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/fields.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/0_custom.css?ozdhl4");
@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/custom_css/custom_css.css?ozdhl4");</style>
<style type="text/css" media="print">@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/print.css?ozdhl4");</style>

<!--[if lte IE 7]>
<style type="text/css" media="all">@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/ie7.css?ozdhl4");</style>
<![endif]-->

<!--[if lte IE 6]>
<style type="text/css" media="all">@import url("https://webservices.ulm.edu/timeclock/sites/timeclock/themes/ulmcms1/css/ie6.css?ozdhl4");</style>
<![endif]-->
  <script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/jquery.js?v=1.4.4"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/jquery.once.js?v=1.2"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/drupal.js?ozdhl4"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.core.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.widget.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.button.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.mouse.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.draggable.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.position.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.resizable.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.dialog.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/sites/all/modules/views/js/jquery.ui.dialog.patch.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ui/jquery.ui.datepicker.min.js?v=1.8.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/sites/all/modules/date/date_popup/jquery.timeentry.pack.js?v=1.4.7"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/form.js?v=7.12"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/ajax.js?v=7.12"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/sites/all/modules/admin_menu/admin_devel/admin_devel.js?ozdhl4"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/progress.js?v=7.12"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/sites/timeclock/modules/autologout/autologout.js?ozdhl4"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/sites/all/modules/page_throbber/assets/page_throbber.js?ozdhl4"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/sites/all/modules/page_throbber/assets/spin.min.js?ozdhl4"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/sites/timeclock/modules/timeclock/timeclock.js?ozdhl4"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/sites/all/modules/date/date_popup/date_popup.js?ozdhl4"></script>
<script type="text/javascript" src="https://webservices.ulm.edu/timeclock/misc/collapse.js?v=7.12"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/timeclock\/","pathPrefix":"","ajaxPageState":{"theme":"ulmcms1","theme_token":"AJbGdBIZJIIhUNXeAZ6havu4G8CA-axt--2dsCxMiPI","js":{"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/ui\/jquery.ui.core.min.js":1,"misc\/ui\/jquery.ui.widget.min.js":1,"misc\/ui\/jquery.ui.button.min.js":1,"misc\/ui\/jquery.ui.mouse.min.js":1,"misc\/ui\/jquery.ui.draggable.min.js":1,"misc\/ui\/jquery.ui.position.min.js":1,"misc\/ui\/jquery.ui.resizable.min.js":1,"misc\/ui\/jquery.ui.dialog.min.js":1,"sites\/all\/modules\/views\/js\/jquery.ui.dialog.patch.js":1,"misc\/ui\/jquery.ui.datepicker.min.js":1,"sites\/all\/modules\/date\/date_popup\/jquery.timeentry.pack.js":1,"misc\/form.js":1,"misc\/ajax.js":1,"sites\/all\/modules\/admin_menu\/admin_devel\/admin_devel.js":1,"misc\/progress.js":1,"sites\/timeclock\/modules\/autologout\/autologout.js":1,"sites\/all\/modules\/page_throbber\/assets\/page_throbber.js":1,"sites\/all\/modules\/page_throbber\/assets\/spin.min.js":1,"sites\/timeclock\/modules\/timeclock\/timeclock.js":1,"sites\/all\/modules\/date\/date_popup\/date_popup.js":1,"misc\/collapse.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.button.css":1,"misc\/ui\/jquery.ui.resizable.css":1,"misc\/ui\/jquery.ui.dialog.css":1,"misc\/ui\/jquery.ui.datepicker.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/jquery.timeentry.css":1,"sites\/timeclock\/modules\/ldap\/ldap_user\/ldap_user.css":1,"sites\/all\/modules\/calendar\/css\/calendar_multiday.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/timeclock\/modules\/ldap\/ldap_servers\/ldap_servers.admin.css":1,"sites\/all\/modules\/page_throbber\/assets\/page_throbber.css":1,"sites\/all\/modules\/ulm_functions\/style\/ulm_functions.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/html-reset.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/wireframes.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/layout-fixed.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/page-backgrounds.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/tabs.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/pages.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/blocks.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/navigation.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/views-styles.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/nodes.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/comments.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/forms.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/fields.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/0_custom.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/custom_css\/custom_css.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/print.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/ie7.css":1,"sites\/timeclock\/themes\/ulmcms1\/css\/ie6.css":1}},"autologout":{"timeout":300000,"timeout_padding":30000,"message":"Your session is about to expire. Do you want to reset it?","redirect_url":"\/timeclock\/node\/128?destination=student-timesheets\/9375\/30070201\u0026autologout_timeout=1","title":"Student Timeclock System Alert","refresh_only":false,"no_dialog":0},"page_throbber":{"pages":{"page_throbber_page_row_1":{"page_throbber_page_message_1":"Saving \u0022Clock In\u0022 time.\r\nPlease wait...","page_throbber_page_vis_1":"0","page_throbber_page_path_1":"","page_throbber_page_buttons_1":"#timeclock-clock-in-out-form #edit-clock-in"},"page_throbber_page_row_2":{"page_throbber_page_message_2":"Saving \u0022Clock Out\u0022 time.\r\nPlease wait...","page_throbber_page_vis_2":"0","page_throbber_page_path_2":"","page_throbber_page_buttons_2":"#timeclock-clock-in-out-form #edit-clock-out"}},"buttons":[{"id":"#timeclock-clock-in-out-form #edit-clock-in","key":"page_throbber_page_buttons_1"},{"id":"#timeclock-clock-in-out-form #edit-clock-out","key":"page_throbber_page_buttons_2"}],"close":0},"datePopup":{"edit-from-date-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"firstDay":0,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","dateFormat":"mm\/dd\/yy","yearRange":"-6:+0","fromTo":false,"defaultDate":"0y"}},"edit-to-date-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"firstDay":0,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","dateFormat":"mm\/dd\/yy","yearRange":"-6:+0","fromTo":false,"defaultDate":"0y"}}}});
//--><!]]>
</script>
</head>
<body class="html not-front logged-in no-sidebars page-student-timesheets page-student-timesheets-% page-student-timesheets-9375 page-student-timesheets-% page-student-timesheets-30070201 section-student-timesheets" >
  <div id="skip-link">
    <a href="#main-menu" class="element-invisible element-focusable">Jump to Navigation</a>
  </div>
    
<div id="page-wrapper"><div id="page">

  <div id="header"><div class="section clearfix">

          <a href="/timeclock/" title="Home" rel="home" id="logo">
  
    <style>      
      
      #generated-logo-html-491442df5f88c6aa018e86dac21d3606 {
        position: relative;
        display: inline-block;
        width: 960px;
      }
    
      #bgen-banner-content-491442df5f88c6aa018e86dac21d3606 {
      	
      	height: 80px;
      	width: 960px;
      	background-image: url('https://webservices.ulm.edu/_config/templates/banner_generator/webserv-banner_bg.png');
      	line-height: 14px;
      	
      }
      
      #bgen-main-text-491442df5f88c6aa018e86dac21d3606 {
      	
      	color: #fff;
      	text-align:right;
      	font-family:Verdana, Helvetica, Arial, sans serif;
      	font-size:22px;
      	padding: 6px 8px 0 0;
      }

      
      #bgen-optional-text-491442df5f88c6aa018e86dac21d3606 {
      	
      	color: #fff;      	
      	text-align: right;
      	font-family: Verdana, Helvetica, Arial, sans serif;
      	font-size: 17px;
      	padding: 32px 8px 3px 0;
      	
      }
      	      
      
      
      #bgen-logo-491442df5f88c6aa018e86dac21d3606 {
      	position:absolute;
      	margin:4px 0 0 5px;      	
      }
      
      #bgen-logo-491442df5f88c6aa018e86dac21d3606 img {
      	height: 72px;
    		width: auto;
      }
      
  </style>
  
    
  <div class='generated-logo-html' id='generated-logo-html-491442df5f88c6aa018e86dac21d3606'>
  
    <div class='bgen-logo' id='bgen-logo-491442df5f88c6aa018e86dac21d3606'>
      <img src='https://webservices.ulm.edu/_config/templates/banner_generator/ulm-logo.png' />
    </div>
    
    <div class='bgen-banner-content' id='bgen-banner-content-491442df5f88c6aa018e86dac21d3606'>
      <div class='bgen-optional-text' id='bgen-optional-text-491442df5f88c6aa018e86dac21d3606'>&nbsp; &nbsp;</div>
      <div class='bgen-main-text' id='bgen-main-text-491442df5f88c6aa018e86dac21d3606'>Student Timeclock</div>
    </div>
  
  </div>
  
  
  </a>
    
    
    
    
  </div></div><!-- /.section, /#header -->

  <div id="main-wrapper"><div id="main" class="clearfix with-navigation">

    <div id="content" class="column"><div class="section">
        <div class="region region-highlighted">
    <div id="block-ulm-functions-welcome-horizontal" class="block block-ulm-functions first last odd">

      
  <div class="content">
    <div class='ulm-welcome-line'>
                          <span class='ulm-welcome-welcome'>
                            Welcome
                              <span class='ulm-welcome-name'>thapab1 (30070201)</span>!
                          </span>
                          <span class='ulm-welcome-logout'>
                            <a href="/timeclock/user/logout">Log out?</a>
                          </span>
                        </div>  </div>

</div><!-- /.block -->
  </div><!-- /.region -->
      <div class="breadcrumb"><h2 class="element-invisible">You are here</h2><a href="/timeclock/">Home</a> › </div>      <a id="main-content"></a>
                    <h1 class="title" id="page-title">Student Timesheets</h1>
                                            <div class="region region-content">
    <div id="block-system-main" class="block block-system first last odd">

      
  <div class="content">
    <form target="_blank" action="/timeclock/student-timesheets/9375/30070201" method="post" id="timeclock-display-student-timesheets-select-month-form" accept-charset="UTF-8"><div><p style='padding: 10px 0 10px 0;'><a href="/timeclock/student-jobs">&laquo; Back to My Job(s)</a></p><p><font size='2'><b>Please select a pay period below to generate a timesheet for <font size='3'> CAES Lab</font> position.</b></font>
	             <br>
	             <div style='font-size: 0.8em;'>
	             <u>Please be aware this timesheet generator is provided as a courtesy to you, and may not be fully accurate.<br>
	             It is the responsibility of the student to check their clock in/out records for correctness before printing  
	             the timesheet and submitting to payroll.</u></p>
	
							(Timesheet loads in a new tab/window)</div> <hr><fieldset class="collapsible collapsed form-wrapper" id="edit-fieldset-timesheet"><legend><span class="fieldset-legend">Generate Custom Timesheet</span></legend><div class="fieldset-wrapper"><div  class="container-inline-date"><div class="form-item form-type-date-popup form-item-from-date">
  <label for="edit-from-date">From: <span class="form-required" title="This field is required.">*</span></label>
 <div id="edit-from-date"  class="date-padding"><div class="form-item form-type-textfield form-item-from-date-date">
  <label for="edit-from-date-datepicker-popup-0">Date </label>
 <input type="text" id="edit-from-date-datepicker-popup-0" name="from_date[date]" value="" size="20" maxlength="30" class="form-text" />
<div class="description"> E.g., 03/04/2018</div>
</div>
</div>
</div>
</div><div  class="container-inline-date"><div class="form-item form-type-date-popup form-item-to-date">
  <label for="edit-to-date">To: <span class="form-required" title="This field is required.">*</span></label>
 <div id="edit-to-date"  class="date-padding"><div class="form-item form-type-textfield form-item-to-date-date">
  <label for="edit-to-date-datepicker-popup-0">Date </label>
 <input type="text" id="edit-to-date-datepicker-popup-0" name="to_date[date]" value="" size="20" maxlength="30" class="form-text" />
<div class="description"> E.g., 03/04/2018</div>
</div>
</div>
</div>
</div><input type="submit" id="edit-submit" name="op" value="Generate Timesheet" class="form-submit" /></div></fieldset>
<input type="hidden" name="cwid" value="30070201" />
<input type="hidden" name="job_nid" value="9375" />
<hr><fieldset class="collapsible collapsed form-wrapper" id="edit-fieldset-monthly"><legend><span class="fieldset-legend">Monthly Timesheet</span></legend><div class="fieldset-wrapper"><fieldset class="collapsible collapsed form-wrapper" id="edit-fieldset-2016"><legend><span class="fieldset-legend">2016</span></legend><div class="fieldset-wrapper"><table class='timesheet-table'>
						 <tr><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/47949%2C48280//1470027600//monthly" target="_blank">August</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/48581%2C48782%2C49076%2C49466%2C49762%2C50177%2C50485%2C50675%2C51121%2C51174%2C51375%2C51382//1472706000//monthly" target="_blank">September</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/51583%2C51892%2C51920%2C52275%2C52583%2C52769%2C52959%2C53160%2C53425%2C53615%2C53718%2C53998//1475298000//monthly" target="_blank">October</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/54105%2C54177%2C54297%2C54399%2C54778%2C54972%2C54973%2C55084%2C55479%2C55691%2C55799%2C56188%2C56369%2C56560%2C56751//1477976400//monthly" target="_blank">November</a></td></tr><tr><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/57166%2C57308//1480572000//monthly" target="_blank">December</a></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table></div></fieldset>
<fieldset class="collapsible collapsed form-wrapper" id="edit-fieldset-2017"><legend><span class="fieldset-legend">2017</span></legend><div class="fieldset-wrapper"><table class='timesheet-table'>
						 <tr><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/57868%2C58487%2C58749%2C58858//1483250400//monthly" target="_blank">January</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/59267%2C59546%2C59701%2C60061%2C60339%2C60468%2C60842%2C61120%2C61286%2C61625%2C61928//1485928800//monthly" target="_blank">February</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/62200%2C62354%2C62703%2C63005%2C63154%2C63485%2C63772%2C63921%2C64268%2C64553%2C64693%2C65042%2C65330//1488348000//monthly" target="_blank">March</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/65479%2C65812%2C66126%2C66276%2C66630%2C66922%2C67030%2C67402%2C67686//1491022800//monthly" target="_blank">April</a></td></tr><tr><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/67836%2C68172%2C68461%2C68584%2C68769//1493614800//monthly" target="_blank">May</a></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table></div></fieldset>
</div></fieldset>
<hr><fieldset class="collapsible form-wrapper" id="edit-fieldset-biweekly"><legend><span class="fieldset-legend">Bi-weekly Timesheet</span></legend><div class="fieldset-wrapper"><fieldset class="collapsible collapsed form-wrapper" id="edit-fieldset-2017--2"><legend><span class="fieldset-legend">2017</span></legend><div class="fieldset-wrapper"><table class='timesheet-table'>
						 <tr><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/70880%2C70962%2C71042//1502514000/1503637200/biweekly" target="_blank">Aug 12 - Aug 25</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/71272%2C71370%2C71469%2C71690%2C71788//1503723600/1504846800/biweekly" target="_blank">Aug 26 - Sep 08</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/72045%2C72142%2C72235%2C72483%2C72584%2C72675//1504933200/1506056400/biweekly" target="_blank">Sep 09 - Sep 22</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/72931%2C73035%2C73471//1506142800/1507266000/biweekly" target="_blank">Sep 23 - Oct 06</a></td></tr><tr><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/73811%2C73908%2C74254%2C74354//1507352400/1508475600/biweekly" target="_blank">Oct 07 - Oct 20</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/74575%2C74676%2C75009%2C75109//1508562000/1509685200/biweekly" target="_blank">Oct 21 - Nov 03</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/75455%2C75558%2C75902%2C76106//1509771600/1510898400/biweekly" target="_blank">Nov 04 - Nov 17</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/76372%2C76474%2C76636%2C76740//1510984800/1512108000/biweekly" target="_blank">Nov 18 - Dec 01</a></td></tr><tr><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/77089//1512194400/1513317600/biweekly" target="_blank">Dec 02 - Dec 15</a></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table></div></fieldset>
<fieldset class="collapsible form-wrapper" id="edit-fieldset-2018"><legend><span class="fieldset-legend">2018</span></legend><div class="fieldset-wrapper"><table class='timesheet-table'>
						 <tr><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/78065%2C78283//1515823200/1516946400/biweekly" target="_blank">Jan 13 - Jan 26</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/78496%2C78723%2C79102%2C79103//1517032800/1518156000/biweekly" target="_blank">Jan 27 - Feb 09</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/79390%2C79638%2C79860//1518242400/1519365600/biweekly" target="_blank">Feb 10 - Feb 23</a></td><td width='25%' style='font-size: 1.2em;'><a href="/timeclock/generate-timesheet/9375/30070201/80082%2C80315//1519452000/1520575200/biweekly" target="_blank">Feb 24 - Mar 09</a></td></tr></table></div></fieldset>
</div></fieldset>

	         <hr>
	           <div style='font-size: 0.9em;'>
	           
	           <b>For best printing results...</b>
	           <ul>
	             <li>In your browser, access your printing options
	                 <br>&nbsp; &nbsp; &nbsp; &nbsp; Chrome: Configure -> Print
	                 <br>&nbsp; &nbsp; &nbsp; &nbsp; Firefox: File -> Page Setup
	                 <br>&nbsp; &nbsp; &nbsp; &nbsp; Internet Explorer: Tools -> Print -> Page Setup	                 
	             <li>Select to print "Background colors and images"</li>
	             <li>Adjust your print margins to be 0 to 0.5 inches</li>	             
	           </ul>
	           
	           </div><input type="hidden" name="form_build_id" value="form-JSYHyPVXyxr3csze2EdhroBa7dtOVjVD456t12lMSWo" />
<input type="hidden" name="form_token" value="pwJis1lmXOBN6UzFlV6MTU0ma9ZJVRG1itHHEQrS38Y" />
<input type="hidden" name="form_id" value="timeclock_display_student_timesheets_select_month_form" />
</div></form>  </div>

</div><!-- /.block -->
  </div><!-- /.region -->
          </div></div><!-- /.section, /#content -->

          <div id="navigation"><div class="section clearfix">

        <h2 class="element-invisible">Main menu</h2><ul id="main-menu" class="links inline clearfix"><li class="menu-782 first last"><a href="/timeclock/student-jobs" title="">My Jobs</a></li>
</ul>
        
      </div></div><!-- /.section, /#navigation -->
    
    
    
  </div></div><!-- /#main, /#main-wrapper -->

  
</div></div><!-- /#page, /#page-wrapper -->

    <div class="region region-page-bottom">
    <form id="autologout-cache-check"><input type="hidden" id="autologout-cache-check-bit" value="0" /></form>  </div><!-- /.region -->
</body>
</html>
