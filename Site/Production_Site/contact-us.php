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
<link rel="stylesheet" href="css/form.css">
<!--icon -->
<link rel="shortcut icon" href="css/images/favicon.ico">
<link rel="apple-touch-icon" href="css/images/icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="css/images/icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="css/images/icon-114x114.png">
<script type='text/javascript' src='js/jquery-l.js'></script>
<script type='text/javascript' src='js/respond.min.js'></script>
<script type='text/javascript' src='js/jquery.validate.js'></script>
<script type="text/javascript">
$(document).ready(function(){

	$("ul.subnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled - Adds empty span tag after ul.subnav
	
	$("ul.topnav li span").click(function() { //When trigger is clicked...
		
		//Following events are applied to the subnav itself (moving subnav up and down)
		$(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

		$(this).parent().hover(function() {
		}, function(){	
			$(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});

		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() { 
			$(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});
	//-------Validate---------//
	 $("#form1").validate({
				rules: {
				   name: "required",// simple rule, converted to {required:true}
				   	email: {// compound rule
				   	  required: true
					},
					phone: {
					  required: true
					},
			
		
				},
				messages: {
				  name:"กรุณาระบุชื่อผู้ติดต่อ",
				  email: "กรุณาระบุอีเมลล์",
				  phone: "กระณาระบุหมายเลขโทรศัพท์",
				}
				 });

});
</script>
</head>

<body>
    <div class="container_12">   
         <!--menu -->
       <div id="wrap-header">
           <div id="header" class="grid_6">
                <img src="images/logo_nodesc.png" alt="NOBP Corporation Group">
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
                <ul id="top-nav" class="one-edge-shadow">
                    <li><a href="index.php" id="home"><img src="images/icon-home-w.png"></a></li>
                    <li>
                        <a href="">Label</a>
                        <ul class="noJS">
                            <li><a href="imageWithText.php?id=1&subId=1&group=Label&subGroup=Barcode Label">Barcode Label</a></li>
                             <li><a href="imageWithText.php?id=1&subId=2&group=Label&subGroup=Wiremark Label">Wiremark Label</a></li>
                        <li><a href="imageWithText.php?id=1&subId=3&group=Label&subGroup=Safety Signs Label">Safety Signs Label</a></li>
                        </ul>
                    </li>
                    <li>
                	<a href="#">Printer</a>
                	<ul class="noJS">
                        <li><a href="imageWithText.php?id=2&subId=4&group=Printer&subGroup=Safety Printer">Safety Printer</a></li>
                        <li><a href="imageWithText.php?id=2&subId=5&group=Printer&subGroup=Wiremark Printer">Wiremark Printer</a></li>
                        <li><a href="imageWithText.php?id=2&subId=6&group=Printer&subGroup=Barcode Printer">Barcode Printer</a></li>
                        <li><a href="imageWithText.php?id=2&subId=7&group=Printer&subGroup=Other Printer">Other Printer</a></li>
                    </ul>
                </li>
                <li>
                	<a href="#">Lockout</a>
                	<ul class="noJS">
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
                    <ul class="noJS">
                        <li><a href="imageWithText.php?id=5&subId=15&group=Safety Signs&subGroup=Brady Glo">Brady Glo</a></li>
                        <li><a href="imageWithText.php?id=5&subId=16&group=Safety Signs&subGroup=Pipemarker">Pipemarker</a></li>
                        <li><a href="imageWithText.php?id=5&subId=17&group=Safety Signs&subGroup=Safety Signs">Safety Signs</a></li>
                    </ul>                </li>
                <li><a href="contact-us.php">Contact Us</a></li>
               </ul>    
            </nav>
        </div> 
    </div>
    <div class="container_12" id="wrap-content-notoppic">
    	<div id="content-intro">
            <h4 class="content-title">Contact us</h4>
            <div class="grid_5" id="wrap-contact-form">
            	<form action="send-email.php" id="form1" method="POST">	

				<div>
					<h4 class="bold">ชื่อ <span class="red">*</span></h4>
					<input type="text" id="name" name="name" autofocus />
				</div>
				<div>
					<h4 class="bold">อีเมลล์ <span class="red">*</span></h4>
					<input type="email" id="email"  name="email"/>
				</div>
                <div>
					<h4 class="bold">เบอร์โทรศัพท์ <span class="red">*</span></h4>
					<input type="text" id="phone" name="phone"/>
				</div>
                <div>
					<h4 class="bold">เรื่องที่ติดต่อ</h4>
					<input type="text" id="topic" name="topic"/>
				</div>
                <div>
					<h4 class="bold">รายละเอียด</h4>
					<textarea name="detail" cols="5" rows="5"></textarea>
				</div>
                <div>
				<input type="submit" value="ส่งข้อความ">
                <input type="reset" value="ลบข้อความ" class="btn-black">
				</div>
		</form>
            
            </div>
            <div class="grid_6" id="wrap-address">
            	<div id="address">
                  <h3>NOBP Corporation Group Co.,Ltd.<h3> 
                  <h4 id="add">44/213-214 ซอย รามอินทรา 65 ถ.รามอินทรา แขวงท่าแร้ง เขตบางเขน กรุงเทพฯ 10230</h4>
                  <h5 id="tel">0-2945-7261-2 / Fax. 0-2945-8554</h5>
                </div>
            	<div id="map">
            	<img src="images/map.gif"  alt="Map">
                </div>
            </div>
           
        </div><!--end content-intro -->
    </div><!--end container -->
   <div id="wrap-footer">	
		<div class="container_12" id="footer">
                <div class="grid_4 suffix_1">
                	<h3> Visit us </h3><br/>
                    <div id="footer-info">NOBP Corporation Group Co.,Ltd.
44/213-214 ซอย รามอินทรา 65 ถ.รามอินทรา
แขวงท่าแร้ง เขตบางเขน กรุงเทพฯ 10230</div>
<h6 id="copyright">&copy; NOBPCORP 2013. All rights reserved.</h6>
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
