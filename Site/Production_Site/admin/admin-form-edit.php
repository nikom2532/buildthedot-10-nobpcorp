<?php
	$rootpath="./";
	include("assets/html/header.php");
?>
		<?php include($rootpath."assets/html/header2.php"); ?>
            <div class="grid_13" id="wrap-title">
            	<ul>
                	<li><a href="#">Label</a></li>
                    <li>></li>
                    <li><a href="#" class="active">Barcode label</a></li>
            	</ul>
            </div><!--end wrap-title -->
            <div class="grid_13" id="wrap-content">
            	<h4 class="head-form">Edit photo</h4>
                <div id="wrap-imageinfo" class="grid_5">
                    <div id="mainwrapper">
                        <div id="box" class="box">					
                                 <img src="images/icon-tag.png" alt="Label Product"><br/>
                        </div>
                    </div><!--end mainwrapper -->
                    <div id="text-info">
                       <ul class="wordwrap">
                       		<li class="title-name">Filename:  <span class="text-filename">0011_01_BMP21.jpg</span></li>
                       		<li class="title-name">Update date:  <span class="text-filename">Sep 29, 2013</span></li>
                            <li class="title-name">Update by:  <span class="text-filename">Fone WC</span></li>
                       </ul>
                    </div>  
                </div><!--end wrap-imageinfo -->
                <div class="grid_6">
                		<div>
                            <h5>Name</h5>
                            <input name="title" type="text" size="80">
                        </div>
                        <div>
                            <h5>Alt Text</h5>
                            <input name="alt" type="text" size="80">
                        </div>
                        <div>
                            <h5>Link URL</h5>
                            <input name="linkURL" type="text" size="80">
                        </div>
                         <div>
                			<input type="submit" value="Save">
                            <input type="button" value="Delete" class="button">   
                		</div>
                        
                </div>
          </div><!--end wrap-title -->
        </div><!--end container -->
    </div><!--end wrap-box -->
<!--js -->

<?php include($rootpath."assets/html/footer.php"); ?>