<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NOBP Corporation Group Co.,Ltd.</title>
<!--css -->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/960.css">
<link rel="stylesheet" href="css/style.css">
<!--icon -->
<link rel="shortcut icon" href="css/images/favicon.ico">
<link rel="apple-touch-icon" href="css/images/icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="css/images/icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="css/images/icon-114x114.png">
<script src="js/jquery-l.js"jquery-l.js></script>
<script type="text/javascript">
$(document).ready(function(){

	$("ul.subnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled - Adds empty span tag after ul.subnav
	
	$("ul.topnav li span").click(function() { //When trigger is clicked...
		$(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

		$(this).parent().hover(function() {
		}, function(){	
			$(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});
		}).hover(function() { 
			$(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});

});
</script>
</head>

<body>
    <div class="container_12">   
         <!--menu -->
       <div id="wrap-header">
           <div id="header" class="grid_6">
                <img src="images/logo.png" alt="NOBP Corporation Group">
           </div>
           <div class="grid_4 right" id="header-tel">
               <ul>
                    <li id="tel">0-2945-7261-2,</li>
                    <li>Fax. 0-2945-8554</li>
               </ul>
           </div>
       </div><!--end wrap-header -->      
    </div><!--end container_12 --> 
    <div id="wrap-nav">
    	<div class="container_12">
            <nav>
                <ul class="topnav one-edge-shadow">	
                <li>
               		<a href="index.php" class="active" id="home"><img src="images/icon-home.png"></a></li>								
                    <li><a href="#">About</a></li>
                    <li>
                    <a href="">Label</a>
                    <ul class="subnav">
                        <li><a href="imageWithText.php?id=1&subId=1&group=Label&subGroup=Barcode Label">Barcode Label</a></li>
                        <li><a href="imageWithText.php?id=1&subId=2&group=Label&subGroup=Wiremark Label">Wiremark Label</a></li>
                        <li><a href="imageWithText.php?id=1&subId=3&group=Label&subGroup=Safety Signs Label">Safety Signs Label</a></li>
                    </ul>
            	</li>
				<li>
                	<a href="#">Printer</a>
                	<ul class="subnav">
                        <li><a href="imageWithText.php?id=2&subId=4&group=Printer&subGroup=Safety Printer">Safety Printer</a></li>
                        <li><a href="imageWithText.php?id=2&subId=5&group=Printer&subGroup=Wiremark Printer">Wiremark Printer</a></li>
                        <li><a href="imageWithText.php?id=2&subId=6&group=Printer&subGroup=Barcode Printer">Barcode Printer</a></li>
                        <li><a href="imageWithText.php?id=2&subId=7&group=Printer&subGroup=Other Printer">Other Printer</a></li>
                    </ul>
                </li>
                <li>
                	<a href="#">Lockout</a>
                	<ul class="subnav">
                        <li><a href="imageWithText.php?id=3&subId=8&group=Lockout&subGroup=Electrical Lockout">Electrical Lockout</a></li>
                        <li><a href="imageWithText.php?id=3&subId=9&group=Lockout&subGroup=Valve Lockout">Valve Lockout</a></li>
                        <li><a href="imageWithText.php?id=3&subId=10&group=Lockout&subGroup=Log out Station">Log out Station</a></li>
                        <li><a href="imageWithText.php?id=3&subId=11&group=Lockout&subGroup=Tags/Group Lock Bock">Tags/Group Lock Bock</a></li>
                       <li><a href="imageWithText.php?id=3&subId=12&group=Lockout&subGroup=Padlock/hasps">Padlock/hasps</a></li>
                        <li><a href="imageWithText.php?id=3&subId=13&group=Lockout&subGroup=Others">Others</a></li>
                    </ul>
                </li>
                <li><a href="imageWithText.php?id=4&subId=14&group=Electrical">Electrical</a></li>
                <li>
                	<a href="#">Safety Signs</a>
                    <ul class="subnav">
                        <li><a href="imageWithText.php?id=5&subId=15&group=Safety Signs&subGroup=Brady Glo">Brady Glo</a></li>
                        <li><a href="imageWithText.php?id=5&subId=16&group=Safety Signs&subGroup=Pipemarker">Pipemarker</a></li>
                        <li><a href="imageWithText.php?id=5&subId=17&group=Safety Signs&subGroup=Safety Signs">Safety Signs</a></li>
                    </ul>                </li>
                <li><a href="#">News & Event</a></li>
                <li><a href="#">Contact Us</a></li>
               </ul>    
            </nav>
        </div>
    </div>
     <div class="container_12" id="wrap-pic">
     	 <img src="images/all-products.jpg" width="960" height="380" alt="All Products">
                <h4 class="btn-product" id="safetysigns">
                        <a class="btn-product btn-blue" href="#">
                            <span class="btn-product-title">Safety Signs</span>
                        </a>
			  	</h4>
                <h4 class="btn-product" id="label">
                        <a class="btn-product btn-blue" href="#">
                            <span class="btn-product-title">Label</span>
                        </a>
			  	</h4>
                <h4 class="btn-product" id="lockout">
                        <a class="btn-product btn-blue" href="#">
                            <span class="btn-product-title">Lockout</span>
                        </a>
			  	</h4>
                <h4 class="btn-product" id="electrical">
                        <a class="btn-product btn-blue" href="#">
                            <span class="btn-product-title">Electrical</span>
                        </a>
			  	</h4>
     </div>
    <div class="container_12" id="wrap-content">
    	<div id="content-intro">
        	<h1 class="home-title">Welcome to nobpcorp.com</h1>
            <p>
            NOBP ให้บริการผลิตภัณฑ์ด้านการวางระบบไฟฟ้า,อิเล็คทรอนิคส์ และสินค้า Safety signs ที่ใช้ในโรงงานอุตสาหกรรมภายใต้ Brand "Brady, Ferraz, Federial signal,Panduit, A.T.X." NOBP เกิดจากการรวมกลุ่มของผู้เชี่ยวชาญด้านการออกแบบ และจำหน่ายผลิตภัณฑ์ Label หลากหลายชนิด เพื่อตอบสนองทุกความต้องการของลูกค้า  
            </p>
            <h1 class="title">Our Product</h1>
            <div id="mainwrapper">
                <div class="grid_3 indent">
                    <div id="box" class="box grid_6">					
                            <img src="images/icon-tag.png" width="177" height="163" alt="Label Product">
                     <span class="caption simple-caption">
                        <h3>Label</h3>
                    </span>
                    </div>
                </div>
                <div class="grid_3 indent">
                    <div id="box" class="box grid_6">					
                       	<img src="images/icon-electrical.png">
                     <span class="caption simple-caption">
                        <h3>Electrical</h3>
                    </span>
                    </div>
                </div>
                <div class="grid_3 indent">
                    <div id="box" class="box grid_6">					
                        <img src="images/icon-saftysign.png">
                     <span class="caption simple-caption">
                        <h3>Safety Signs</h3>
                    </span>
                    </div>
                </div>
                <div class="grid_3 indent">
                    <div id="box" class="box grid_6">					
                        <img src="images/icon-log.png">
                     <span class="caption simple-caption">
                        <h3>Log Out</h3>
                    </span>
                    </div>
                </div>
            </div><!--end mainwrapper -->
        </div><!--end content -->
    </div><!--end container -->
   <div id="wrap-footer">	
		<div class="container_12" id="footer">
                <div class="grid_4 suffix_1">
                	<h3> Visit us </h3><br/>
                    <div id="footer-info">NOBP Corporation Group Co.,Ltd.
44/213-214 ซอย รามอินทรา 65 ถ.รามอินทรา
แขวงท่าแร้ง เขตบางเขน กรุงเทพฯ 10230</div>
          		</div>
                <div class="grid_3">
                	<h3>Call us </h3><br/>
                    <div id="footer-info">0-2945-7261-2</div>
                </div>
                <div class="grid_3">
                	<h3>Fax us </h3><br/>
                    <div id="footer-info">0-2945-8554</div>
                </div>
        </div>
    </div><!--end wrap-footer  --> 

<!--js -->
<!--<script src="js/jquery.js"></script>-->

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>  
</body>
</html>
