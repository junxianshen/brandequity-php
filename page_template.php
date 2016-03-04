<?php
    $class_menu_item_selected="menu_item_selected";
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Brand Equity</title>
<script src="scripts/jquery-latest.min.js"></script>
<script src="scripts/jquery.event.move.js"></script>
<script src="scripts/jquery.event.swipe.js"></script>
<script src="scripts/unslider.js"></script>
<script type="text/javascript" src="scripts/jquery.leanModal.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel='stylesheet' media='screen and (max-height: 800px) and (min-width: 1200px)' href='css/widescreen.css' />

</head>

<body>
    <?php if(isset($about_content)){ echo $about_content;}?>
    <? if ($page=="brands"){
        echo $product_info_list;
        echo "<div id=\"product_info\"></div>";?>
        <div id="all-brands"><a href="all-brands.php">ALL BRANDS</a></div>
    <?
    }
    ?>
    
    <? if($page == "all-brands"){ echo $brand_info_list;}?>
    
	<div id="holder">
  	    <header>
    		<div id="header_left">
   	    	    <img src="images/icons/logo.png" width="200" height="60"  alt=""/> 
            </div>
            <div id="header_right">
                <div class="menu_item menu_item_first <?php if ($page=="home") {echo $class_menu_item_selected;} ?>"><a href="index.php">HOME</a></div>
                <div class="menu_item <?php if ($page=="about") {echo $class_menu_item_selected;} ?>"><a href="about.php">ABOUT</a></div>
                <div class="menu_item <?php if ($page=="brands" or $page=="all-brands") {echo $class_menu_item_selected;} ?>"><a href="brands.php">BRANDS</a></div>
                <div class="menu_item <?php if ($page=="contact") {echo $class_menu_item_selected;} ?>"><a href="contact.php">CONTACT</a></div>
            </div>
        </header>

        <div id="body">
            <div class="whiteline"></div>
            <?php if($page != "contact" and $page !="all-brands"){?>
                <?php if($page == "brands"){ 
                    echo $product_image_list;
                }else{
                    
                ?>
                <div class="static_banner" >
                    <ul>
                        <li style="background-image: url('<?=$slide_image?>');"> </li>
                    </ul>
                </div>
                <?}?>
                <?php if($page =="home" or $page=="brands"){?>
                    <div class="slide_content">
                        <div id="sc_left"><img src="images/icons/icons.png" width="750"  alt=""/></div>
                    </div>
                <?}?>
            <?php }else{?>
                <? if($page == "contact"){?>
                <div class="slide_content">
                    <div class="center">
                    <div class="address address1">
                        <img src="images/maps/shanghai-map.jpg" width="100%" alt=""/>
                         <p class="light-gray" style="font-size: 15px; padding-bottom: 10px;">Shanghai Office</p>
                        <p>Loft E, N. 2453, Wanhangdu Road</p>
                        <p>Changning District, Shanghai P.R. China</p>
                        <p><span class="light-gray">T:</span> +86(139)1851 6646</p>
                        <p><span class="light-gray">E:</span> info@brandequityap.com</p>
                    </div>
                    <div class="space">&nbsp;</div>
                    <div class="address">
                        <img src="images/maps/hk-map.jpg" width="100%" alt=""/>
                        <p class="light-gray" style="font-size: 15px; padding-bottom: 10px;">Hong Kong Office</p>
                        <p>1st Floor, Kwai Bo Industrial Building</p>
                        <p>40 Wong Chuk Hang Road, Hong Kong</p>
                        <p><span class="light-gray">T:</span> +852 6188 4482</p>
                        <p><span class="light-gray">E:</span> info@brandequityap.com</p>
                    </div>
                    
                    </div>
                </div>
                <?}else{?>
                       
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('albed',0); return false;">
                               <img src="images/logos/unified/albed.png"/>
                           </a>
                       </div>
                       
                       <div class="logo_box">
                           <a id="a_axil" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('axil',1); return false;">
                               <img src="images/logos/unified/axil.png"/>
                           </a>
                       </div>
                       
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('bernini', 2); return false;">
                               <img src="images/logos/unified/bernini.png"/>
                           </a>
                       </div>
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('busnelli', 3); return false;">
                               <img src="images/logos/unified/busnelli.png"/>
                           </a>
                       </div>
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('cesar', 4); return false;">
                               <img src="images/logos/unified/cesar.png"/>
                           </a>
                       </div>

                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('cinova', 5); return false;">
                               <img src="images/logos/unified/cinova.png"/>
                           </a>
                       </div>
                       
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('coro',6); return false;">
                               <img src="images/logos/unified/coro.png"/>
                           </a>
                       </div>
                       

                       
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('fasem',7); return false;">
                               <img src="images/logos/unified/fasem.png"/>
                           </a>
                       </div>

                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('ivanoredaelli',8); return false;">
                               <img src="images/logos/unified/ivanoredaelli.png"/>
                           </a>
                       </div>
                       
                       
                       
                       
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('mobileffe',9); return false;">
                               <img src="images/logos/unified/mobileffe.png"/>
                           </a>
                       </div>
                       
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('rifra',10); return false;">
                               <img src="images/logos/unified/rifra.png"/>
                           </a>
                       </div>
                       
                       <div class="logo_box">
                           <a id="go" rel="leanModal" name="test" href="#brand_info" onClick="update_brand_info('brandequity',11); return false;">
                               <img src="images/logos/unified/brandequity.png"/>
                           </a>
                       </div>
                       
                   

                       
                     
                
                <?}?>
            <?php }?>
        </div>
        <span></span>
        <footer>
            <div id="footer_left"><p>© 2014 Brand Equity | All Rights Reserved</p></div>	
            <div id="footer_right"><p>1st Floor, Kwai Bo Industrial Building No.40 Wong Chuk Hang Road, Hong Kong | T: +852 6188 4482 | E: <a href="mailto:info@brandequityap.com">info@brandequityap.com</p></div>
        </footer>
    </div>
    
    
    <div id="brand_info"></div>
    
    <script>
    
    
    if(window.chrome){
        $('.banner li').css('background-size', '100% 100%');
    }
		
    if(window.chrome){
        $('.static_banner li').css('background-size', '100% 100%');
    }
	
    
        
    
    
     <?php if($page == "brands"){?>
    $('.banner').unslider({
        fluid: true,
    	dots: true,
    	speed: 800,
        delay: 4000,
    });
    <?}else{?>
    $('.static_banner').unslider({
        fluid: true,
        dots: true,
        speed: 800,
        delay: 4000,
    });
    
   
    <?}?>
    
    var height = 900;
    var width = 1300;
    
    if($(window).height() > height){
        height = $(window).height();
    }
    
    if($(window).width() > width){
        width = $(window).width();
    }
    
    var sep = 260;
    
    if(height>=1100){
        sep = 400;
    }
    
    var logo_cell_height = (height - sep)/3;
    var logo_cell_width = width/4;
    var padding_top = (logo_cell_height-125)/2;
    $('.logo_box').css('min-height', logo_cell_height);
    $('.logo_box').css('height', logo_cell_height);
    $('.logo_box').css('padding-top', padding_top);
    
    $(function() {
      $('a[rel*=leanModal]').leanModal({ top : 200, closeButton: ".modal_close" });	
    });
    
    var brand_info_modal_x = 0;
    var brand_info_modal_y = 0;
    
    var pageX = 0;
    var pageY = 0
    
    $(".logo_box" ).mousemove(function( event ) {
        pageX = event.pageX
        pageY = event.pageY
      //var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";
      //var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";
      //$( "span:first" ).text( "( event.pageX, event.pageY ) : " + pageCoords );
      //console.log("( " + event.pageX + ", " + event.pageY + " )");
  });
    
	function update_brand_info(brand_info_id, pos) {
    
        
        
		var info_div = document.getElementById("brand_info_"+brand_info_id);
        document.getElementById("brand_info").innerHTML = info_div.innerHTML;
        
        offset_y  = -($("#brand_info").height()/2);
        console.log(offset_y);
            
        brand_info_modal_y = 118;
        
        var row = Math.floor(pos /4);
        var col = pos %4;
        
        switch (row)
        {
            case 0:
                brand_info_modal_y+=pageY-100;
                break;
            case 1:
                brand_info_modal_y+=pageY - 100 + offset_y;
                break;
            case 2:
                brand_info_modal_y+=pageY - $("#brand_info").height() - 200;
                break;
        }
        
        var w = $(window).width()/5;
        
        brand_info_modal_x=pageX - 100;
        
     

	}
    </script>
</body>
</html>
