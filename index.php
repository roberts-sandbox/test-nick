<?php
//sets the section
$section = 'default';
//sets the page title
$page_title = 'San Francisco Communication Design : Nick Cottrell : Communication Designer';
//sets the keywords
$keywords = 'san francisco graphic design, san francisco communication design, Communication Designer, brands, web, identity, print, fonts, photos, nick cottrell, cottrell';
//also includes the header
include ('includes/header.php');
?>



<!--FULL 3 COLUMN LAYOUT-->
<div class="container">
<!--//-->

<!--LEFT COLUMN-->
<div class="sidebar1">
<!--//-->
	
    <div class="fixedcontent">
    
<?php
include ('includes/nav1.php');
?>
        
	<br class="clearfloat" />
    
    </div>

<!--//-->
</div>
<!--END LEFT COLUMN-->

<!--MIDDLE COLUMN-->
<div class="content">
<!--//-->

	<div id="slideShow"><img src="" alt="0" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("monoslideshow.swf", "slideshow", "100%", "455", "8", "#FFFFFF");
	so.write("slideShow");
	// ]]>
	</script>
	
	<br class="clearfloat" />
    

<!--//-->
</div>
<!--END MIDDLE COLUMN-->

<!--RIGHT COLUMN-->
<div class="sidebar2">
<!--//-->
	
    <div class="fixedcontent">

        
        </div>
    <br class="clearfloat" />
	</div>
    
<!--//-->
</div>   
<!--END RIGHT COLUMN-->

<!--//-->
</div>
<!--END FULL 3 COLUMN LAYOUT-->
</body>
</html>
