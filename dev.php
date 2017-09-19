<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600');">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	.navbar-brand{font-weight:600; color:#5e5e5e!important; font-family:'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';}
    .navbar-brand:hover{color:#5e5e5e!important;}
	.navbar .navbar-nav > li.active {border:1px #e7e7e7 solid;}
    .navbar .navbar-nav > li:hover {background:#999; outline:none;}
	.navbar .navbar-nav > li a {color:#666; font-size:.75em; text-transform:uppercase; text-shadow:none; font-family:'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';}
    .navbar .navbar-nav > li > a:hover {background:#999; color:#fff; outline:none;}
</style>
<nav class="navbar navbar-default navbar-static-top hidden-sm hidden-xs">
    <div class="container-fluid">
        <div class="container">
            <div class="navbar-header pull-left"><a class="navbar-brand">ProcureCon Events</a></div>
            	<ul class="nav navbar-nav navbar-right element"></ul>
	   		</div>
   		</div>
	</div>
</nav>
<script type="text/javascript">
$(document).ready(function() {
	var subdomain = window.location.href.split("/")[2].split(".")[0];
	var pconUsObject = {
		"procurecondirect": "Direct",
		"procureconeast": "East",
		"procureconwest": "West",
		"procureconfacilities": "Facilities",
		"procureconca": "Canada",
		"procureconit": "IT Sourcing",
		"procurecontravel": "Travel",
		"procureconpharma": "Pharma",
		"procurecondm": "Marketing",
		"contingentstaffing": "Staffing"
	};
	$.each(pconUsObject, function(eventURl, eventDisplayName) {
		$(".element").append("<li><a href='http://" + eventURl + ".wbresearch.com/' target='_blank'>" + eventDisplayName + "</li>");
	});
	$("ul.nav.navbar-nav a[href*=" + subdomain + "]").parent().addClass('active');
});
</script>
