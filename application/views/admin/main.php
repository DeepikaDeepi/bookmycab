<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bookmycab</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>skin/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>skin/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>skin/css/carousel.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>skin/css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>skin/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>skin/js/core.js" ></script>
	
 	<?php	if(isset($one_column_layout)) { ?>
		 <style>
		.one-column{
			height: auto;
			width: 100% !important;
		}
		.col-main-container{
			width: 100%
		}
		</style>
 <?php }?>
</head>

	<body class="main-body">
			  <div class="wrapper">
					   <?php $this->load->view('frontend/header'); ?>
					   <div class="col-main-container">
					   
					   <?php	if(isset($two_column_rightbar)) { ?>
						    <div class="col-main 2column-with-rightbar" >
					   <?php }else{ ?>
						    <div class="col-main one-column">
					   <?php }?>

							
									<?php 
									if(isset($notEcho)) {
										if(isset($main)) {
											$this->load->view($main);
										}
									}else{
										if(isset($main))  {echo $main;  }
									}
									?>
									
									<?php  $xxx = $this->session->all_userdata();
											echo "<pre>";
												print_r($xxx);
											echo "</pre>";
											
									?>
						</div>	
							<?php	if(isset($two_column_rightbar)) { ?>
								<div class="col-right">
								<?php 
											if(isset($right_col))  {echo $right_col;  }
									?> 
								</div>
							<?php } ?>
						</div>
						<div class="clear"></div>
						 <?php $this->load->view('frontend/footer'); ?>
			 </div>
	</body>
</html>