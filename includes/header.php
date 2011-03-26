<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!--WELCOME TO NICKCOTTRELL.INFO-->
<title><?php echo "$page_title"; ?></title>

<!--META INFO-->
<link rel="shortcut icon" href="http://nickcottrell.info/images/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Hi. I'm Nick Cottrell. I provide clients and partners with the full gamut of communication options. Web, print, you name it. It's your message, let's put it out there." />
<meta name="keywords" content="<?php echo "$keywords"; ?>" />
<meta name="author" content="nick cottrell, communication designer" />
<!--END META INFO-->

<!--SCRIPT AND STYLE LINKS-->
<script id="script1" type="text/javascript" src="js/swfobject.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/nc_screen.css" />
<!--<link rel="stylesheet" type="text/css" media="print" href="" />-->
<!--[if IE]>
<link rel="stylesheet" type="text/css" media="screen" href="" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="screen" href="" />
<![endif]-->
<!--END SCRIPT AND STYLE LINKS-->

<!--J QUERY SHIT-->
<link type="text/css" href="css/custom-theme/jquery-ui-1.8.9.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.9.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				// Accordion
	
				// Tabs
				$('#tabs').tabs();
	

				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() { 
							$(this).dialog("close"); 
						}, 
						"Cancel": function() { 
							$(this).dialog("close"); 
						} 
					}
				});
				
				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				
				// Slider
				$('#slider').slider({
					range: true,
					values: [17, 67]
				});
				
				// Progressbar
				$("#progressbar").progressbar({
					value: 20 
				});
				
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			});
		</script>
<!--END JQUERY SHIT-->


<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
</head>


<body>