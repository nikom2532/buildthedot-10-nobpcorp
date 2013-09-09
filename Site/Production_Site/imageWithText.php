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
        
<?php
	
		$id    = $_GET["id"];
		$subId = $_GET["subId"];
 
 		$group = $_GET["group"];
		$subGroup = $_GET["subGroup"];
        // connect to the database
        include('connect-db.php');
 
        // get results from database
        //$result = mysql_query("SELECT * FROM buildthedot_nobp_item WHERE subgroup_id = ".$subId) or die(mysql_error());  
		
		$result = mysql_query("
	
		SELECT *
		FROM  buildthedot_nobp_item_group AS a 
		INNER JOIN buildthedot_nobp_item_subgroup AS b 
    		ON a.id = b.group_id 
		INNER JOIN buildthedot_nobp_item AS c 
    		ON b.id = c.subgroup_id
		WHERE c.subgroup_id = ".$subId
		
		) or die(mysql_error());  
		
		if ($subGroup == "") {
			?>
			<h3 class="content-title"><?php echo $group;?></h3>
			<?php
		} else {
			?>
           <div class="nav-title">
			<ul>
			<li><?php echo $group;?></li>
            <li><span class="active-title"><?php echo $subGroup;?></span></li>
            </ul>
            </div>
            <br class="clear"/>
			<?php
		}
?>
            <div id="mainwrapper">                  
<?php
 
        // loop through results of database query
        while($row = mysql_fetch_array( $result )) {
				
				echo "<div class='grid_3'>";
                echo    "<div id='box' class='box'>";				
                echo            "<img src='images/product/".$row['image_path']."' width='177' height='163' alt=".$row['item_name'].">";
				
				/*
				if ($row['item_name'] == "") {
					echo     		"<span>";
				} else {
					echo     		"<span class='caption simple-caption'>";
				}
				
				if ($row['pdf_link_status'] == "F") {
					echo        		'<h3>'.$row['item_name'].'</h3>';
				} else {
					echo				'<h3><a href="download.php?id='.$row['id'].'">'.$row['item_name'].'</a></h3>';
				}
				*/
				
                echo    "</div>";
					echo	"<div id=product-name>";
					if ($row['pdf_link_status'] == "F") {
						echo        		'<h5>'.$row['item_name'].'</h5>';
					} else {
						echo				'<h5><a href="download.php?id='.$row['id'].'">'.$row['item_name'].'<br/><img src="images/icon_pdf_2.gif"></a></h5>';
					}
					echo "</div>";
                echo "</div>";
        }
		
?>
            </div><!--end mainwrapper -->
            <br class="clear"/>
           
        </div><!--end content -->
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
