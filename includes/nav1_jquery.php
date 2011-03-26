   
   
   
   <a href="index.php"><img border="0" src="images/nav1_logo.png" alt="nickcottrell.info" /></a>
    <div id="nav1content">
      <!-- Accordion -->
	<script>
	$(function() {
		$("#accordion").accordion({
		header: ".acc_header",
        <?php if ($section == 'default') { echo 'active:-1,'; } ?>
		<?php if ($section == 'visual') { echo 'active:0,'; } ?>
        <?php if ($section == 'uiux') { echo 'active:1,'; } ?>
        <?php if ($section == 'thisandthat') { echo 'active:2,'; } ?>
        <?php if ($section == 'experience') { echo 'active:3,'; } ?>
		autoHeight: false,
        collapsible: true
		
		});
	
	});

	</script>


<div style="width:125px; margin-bottom:15px; margin-top:15px">
		<div id="accordion">
			<div>
				<h3 class="acc_header"><a href="##">Visual</a></h3>
				<div>
                	<a href="brands.php">Branding</a><br /><br />
                    <a href="brands_twp.php">Print</a><br /><br />
                    <a href="identity.php">Identity</a>
                </div>
			</div>
			<div>
				<h3 class="acc_header"><li><a href="##">UI/UX</a></li></h3>
				<div>
                    <a href="web.php">Web</a><br /><br />
                    <a href="software.php">Software</a><br /><br />
                    <a href="apps">Apps</a>
                </div>
            </div>
            <div>
				<h3 class="acc_header"><a href="##">This &amp; That</a></h3>
				<div>
                    <a href="thisandthat.php">Stuff</a><br /><br />
                    <a href="photos.php">Photos</a><br /><br />
                    <a href="fonts.php">Fonts</a>
                </div>
			</div>
            <div>
				<h3 class="acc_header"><a href="##">Experience</a></h3>
				<div>
                <div>
					<a href="experience.php">Intro</a><br /><br />
                    <a href="experience2.php">Skills</a><br /><br />
                    <a href="http://www.nickcottrell.info/downloads/resume/nick_cottrell_info.pdf" target="_blank">Resume</a>
                </div>
                </div>
			</div>
            <div>
				<h3 class="acc_header"><a href="skills" targt="_blank">Contact</a></h3>
				<div>
					<a href="http://www.nickcottrell.info/linkedin" target="_blank">linkedin</a><br /><br />
                    <a href="http://www.nickcottrell.info/blog" target="_blank">blog</a><br /><br />
                    <a href="mailto:nick.a.cottrell@gmail.com" target="_blank">email</a>
                </div>
			</div>
		</div>
        
</div><!--end temp style-->

    </div>
		
    
    <img src="images/nav1_phone.png" alt="415 867 6673" />
    
    <div id="nav1links">
    <ul>
    <br />
    <li><a href="http://www.nickcottrell.info/linkedin">Nick Cottrell Linkedin</a></li>
    <li><a href="http://www.nickcottrell.info/facebook">Nick Cottrell Facebook</a></li>
    <li><a href="http://www.nickcottrell.info/twitter">Nick Cottrell Twitter</a></li>
    <li><a href="http://www.nickcottrell.info/charity">Nick Cottrell Charity</a></li>
    <li><a href="http://www.nickcottrell.info/book">Nick Cottrell Book</a></li>
    <li><a href="http://www.nickcottrell.info/music">Nick Cottrell Music</a></li>
	</ul>
    </div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/nav1_nclinks.swf", "navs", "126", "28", "8", "#FFFFFF");
	so.write("nav1links");
	// ]]>
	</script>