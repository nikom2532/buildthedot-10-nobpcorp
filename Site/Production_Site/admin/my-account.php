<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NOBP Corporation Group Co.,Ltd.</title>
<!--css -->
<link rel="stylesheet" href="css/admin/base.css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/admin/960.css">
<link href="css/admin/adminStyle.css" rel="stylesheet" type="text/css">
<!--icon -->
<link rel="shortcut icon" href="css/images/favicon.ico">
<link rel="apple-touch-icon" href="css/images/icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="css/images/icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="css/images/icon-114x114.png">

<script src="js/prefix.js"jquery-l.js></script>
<script src="js/jquery-1.7.1.min.js"jquery-l.js></script>
<script type="text/javascript">
/*jQuery time*/
$(document).ready(function(){
	$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})
</script>
</head>

<body>
	<div id="wrap-header">
        <div class="container_16">
        	<div id="wrap-logo" class="grid_3">
               <img src="images/logo_nodesc.png">
           </div>
           <div class="grid_7 prefix_5" id="wrap-setting">
               <ul class="right">
                    <li>Fone Wc</li>
                    <li class="btn btn-blue"><a href="#">My Account</a></li>
                   <li class="btn btn-grey"><a href="#">Sign out</a></li>
               </ul>
               
           </div>
    	</div><!--end container_16 -->
    </div><!--end wrap-header -->
     <div>
    	<div class="container_16" id="wrap-box">
            <div id="accordian" class="grid_2">
                <ul>
                    <li class="active">
                        <h3><span class="icon-dashboard"></span>Label</h3>
                        <ul>
                            <li><a href="">Barcode Label</a></li>
                            <li><a href="">Wiremark Label</a></li>
                            <li><a href="">Safety Signs Label</a></li>
                        </ul>
                    </li>
                    <!-- we will keep this LI open by default -->
                    <li>
                        <h3><span class="icon-tasks"></span>Printer</h3>
                        <ul>
                            <li><a href="">Safety Printer</a></li>
                            <li><a href="">Wiremark Printer</a></li>
                            <li><a href="">Barcode Printer</a></li>
                            <li><a href="">Other Printer</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3><span class="icon-calendar"></span>Lockout</h3>
                        <ul>
                             <li><a href="">Electrical Lockout</a></li>
                             <li><a href="">Valve Lockout</a></li>
                             <li><a href="">Log out Station</a></li>
                             <li><a href="">Tags/Group Lock Bock</a></li>
                             <li><a href="">Padlock/hasps</a></li>
                             <li><a href="">Others</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3><span class="icon-heart"></span>Electrical</h3>
                        <ul>
                             <li><a href="">Brady Glo</a></li>
                             <li><a href="">Pipemarker</a></li>
                             <li><a href="">Safety Signs</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--end accordian-->
            <div class="grid_13" id="wrap-title">
            	<ul>
                	<li class="active">My account</li>
            	</ul>
            </div><!--end wrap-title -->
            <div class="grid_13" id="wrap-content">
            	<h4 class="head-form">My account</h4>
            	<div class="grid_2 title-form">Name</div>
                <div class="grid_8">
                	<p>Fone WC</p>
                </div>
                <br class="clear"/>
              <div class="grid_2 title-form">Email</div>
                <div class="grid_8">
                	<p>voravan@buildthedot.com</p>
                </div>
                <br class="clear"/>
              <div class="grid_2 title-form">Username</div>
                <div class="grid_8">
                	<p>fonewc</p>
                </div>
                <br class="clear"/>
                <div class="grid_2 title-form">Password</div>
              	<div class="grid_8" id="edit-pass">
                    <a href="edit-password.html">Edit password</a>
                </div>
                <!--button -->
                 <div class="grid_8 prefix_2 edit-link">
                	<a href="edit-my-account.html" class="btn-blue">Edit Account</a>
                </div>
        </div><!--end container -->
    </div><!--end wrap-box -->
<!--js -->

</body>
</html>
