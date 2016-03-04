<?php
    $class_menu_item_selected="menu_item_selected";
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Brand Equity</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <!--PANEL-->
	<div id="holder">
  	    <header>
    		<div id="header_left">
   	    	    <img src="images/icons/logo.png" width="200" height="60"  alt=""/> 
            </div>
            <div id="header_right">
                <div class="menu_item menu_item_first <?php if ($page=="home") {echo $class_menu_item_selected;} ?>"><a href="index.php">HOME</a></div>
                <div class="menu_item <?php if ($page=="about") {echo $class_menu_item_selected;} ?>"><a href="about.php">ABOUT</a></div>
                <div class="menu_item <?php if ($page=="brands") {echo $class_menu_item_selected;} ?>"><a href="brands.php">BRANDS</a></div>
                <div class="menu_item <?php if ($page=="contact") {echo $class_menu_item_selected;} ?>"><a href="contact.php">CONTACT</a></div>
            </div>
        </header>

        <div id="body">
            <div class="whiteline"></div>
        </div>
  
        <footer>
            <div id="footer_left"><p>© 2014 Brand Equity | All Rights Reserved</p></div>	
            <div id="footer_right"><p>15th Floor, Shui Ki Industrial Building 18 Wong Chuk Hang Road, Hong Kong | T: +852 6171 9882 | E: <a href="mailto:info@brandequityap.com">info@brandequityap.com</p></div>
        </footer>
    </div>
</body>
</html>
