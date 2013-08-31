	<div id="wrap-header">
        <div class="container_16">
        	<div id="wrap-logo" class="grid_3">
               <a href="<?php echo $rootpath; ?>"><img src="images/logo_nodesc.png"></a>
           </div>
           <div class="grid_7 prefix_5" id="wrap-setting">
               <ul class="right">
                    <li>
<?php 
                    	$SQL= "select `name` from `buildthedot_nobp_account` where `username`=\"".$_SESSION["username"]."\" ;";
						$db->query($SQL);
						if($rs=$db->fetchAssoc()){
							echo $rs[""];
						}
?>
                    </li>
                    <li class="btn btn-blue"
                    ><a href="#">My Account</a></li>
                   <li class="btn btn-grey"><a href="<?php echo $rootpath; ?>assets/html/logout_process.php">Sign out</a></li>
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
                            <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=1">Barcode Label</a></li>
                            <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=2">Wiremark Label</a></li>
                            <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=3">Safety Signs Label</a></li>
                        </ul>
                    </li>
                    <!-- we will keep this LI open by default -->
                    <li>
                        <h3><span class="icon-tasks"></span>Printer</h3>
                        <ul>
                            <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=4">Safety Printer</a></li>
                            <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=5">Wiremark Printer</a></li>
                            <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=6">Barcode Printer</a></li>
                            <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=7">Other Printer</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3><span class="icon-calendar"></span>Lockout</h3>
                        <ul>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=8">Electrical Lockout</a></li>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=9">Valve Lockout</a></li>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=10">Log out Station</a></li>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=11">Tags/Group Lock Bock</a></li>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=12">Padlock/hasps</a></li>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=13">Others</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3><span class="icon-heart"></span>Electrical</h3>
                        <ul>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=14">Electrical</a></li>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=15">Brady Glo</a></li>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=16">Pipemarker</a></li>
                             <li><a href="<?php echo $rootpath; ?>admin-preview.php?sgid=17">Safety Signs</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--end accordian-->