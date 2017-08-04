
// Because this nav bar is outside the Drupal DOM it needs to have Bootstrap/jQuery/Google Fonts for proper look and functionality 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600');">

// These are all the styles that are not covered by Bootstrap/Google Web Fonts
<style>
	.navbar-brand{font-weight:600; color:#5e5e5e!important; font-family:'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';}
    .navbar-brand:hover{color:#5e5e5e!important;}
	.navbar .navbar-nav > li.active {border:1px #e7e7e7 solid;}
    .navbar .navbar-nav > li:hover {background:#999; outline:none;}
	.navbar .navbar-nav > li a {color:#666; font-size:.75em; text-transform:uppercase; text-shadow:none; font-family:'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';}
    .navbar .navbar-nav > li > a:hover {background:#999; color:#fff; outline:none;}
</style>

<script>
	$(document).ready(function(){

		// This line parses the URL and reads the Subdomain of any site this is embedded on, and then places it into a reuseable vairable
		var subdomain=window.location.href.split("/")[2].split(".")[0];

		// These lines compare the variable "submdomain" against the desired user defined subdomain(s), and if it matches adds the ".active" class to the appropriate list item. 
		// The only time to edit these is to add/remove/re-order, but remember Javascript/jQuery operates in base 0!
 	    if ( subdomain === 'procurecondirect'){$('ul.nav.navbar-nav li').eq(0).addClass('active');}
		if ( subdomain === 'procureconeast'){$('ul.nav.navbar-nav li').eq(1).addClass('active');}
	    if ( subdomain === 'procureconwest'){$('ul.nav.navbar-nav li').eq(2).addClass('active');}
 	    if ( subdomain === 'procureconfacilities'){$('ul.nav.navbar-nav li').eq(3).addClass('active');}
 	    if ( subdomain === 'procureconca'){$('ul.nav.navbar-nav li').eq(4).addClass('active');}
	    if ( subdomain === 'procureconit'){$('ul.nav.navbar-nav li').eq(5).addClass('active');}
	    if ( subdomain === 'procurecontravel'){$('ul.nav.navbar-nav li').eq(6).addClass('active');}
	    if ( subdomain === 'procureconpharma'){$('ul.nav.navbar-nav li').eq(7).addClass('active');}
	    if ( subdomain === 'procurecondm'){$('ul.nav.navbar-nav li').eq(8).addClass('active');}
	    if ( subdomain === 'contingentstaffing'){$('ul.nav.navbar-nav li').eq(9).addClass('active');}

		// This line is the error manager, so if there is no match to the "subdomain" it removes the ".active" class is removed entirely 
	    if ($('ul.nav.navbar-nav li').hasClass("active")) {$("ul.nav.navbar-nav li.active a").removeAttr("href");}
	});
</script>

// This is the mark up, you should pretty much never have to touch this unless you are add/remove/re-ordering an event.
<nav class="navbar navbar-default navbar-static-top hidden-sm hidden-xs">
    <div class="container-fluid">
        <div class="container">
            <div class="navbar-header pull-left"><a class="navbar-brand">ProcureCon Events</a></div>
            <ul class="nav navbar-nav navbar-right">
                <li> <a target="_blank" href="https://procurecondirect.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');">Direct</a></li>
                <li> <a target="_blank" href="https://procureconeast.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');"> East</a></li>
                <li> <a target="_blank" href="https://procureconwest.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');"> West</a></li>
                <li> <a target="_blank" href="https://procureconfacilities.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');">Facilities</a></li>
                <li> <a target="_blank" href="https://procureconca.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');">Canada</a></li>
				<li> <a target="_blank" href="https://procureconit.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');">IT Sourcing</a></li>
                <li> <a target="_blank" href="https://procurecontravel.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');">Travel</a></li>
                <li> <a target="_blank" href="https://procureconpharma.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');">Pharma</a></li>
                <li> <a target="_blank" href="https://procurecondm.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');">Marketing</a></li>
                <li> <a target="_blank" href="https://contingentstaffing.wbresearch.com/" onclick="ga('send', 'event', 'button', 'crossevent', 'pcon');">Staffing</a></li>
            </ul>
        </div>
    </div>
</nav>
