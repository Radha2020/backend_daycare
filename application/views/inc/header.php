<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Navil Admin Panel" />
	<meta name="author" content="Navil" />

	<title>Playback Theatre | <?php echo $pageTitle; ?></title>


	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/purple.css">
   
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/multiselect_bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pickList.css">
      
     
	 <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js"></script> 
	<!--  <script src="<?php echo base_url();?>assets/js/multiselect_jquery.min.js"></script>-->
	<script src="<?php echo base_url();?>assets/js/pickList.js"></script>
	

	<!--[if lt IE 9]><script src="<?php echo base_url();?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

	<div class="sidebar-menu">


		<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img src="<?php echo base_url(); ?>assets/images/logo.png" width="120" alt="" />
				</a>
			</div>

						<!-- logo collapse icon -->

			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>



			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>

		</header>

		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<!-- <li id="search">
				<form method="get" action="">
					<input type="text" name="q" class="search-input" placeholder="Search something..."/>
					<button type="submit">
						<i class="entypo-search"></i>
					</button>
				</form>
			</li> -->
			
			<li><a href="<?php echo base_url('dashboard/viewDashboard');?>" <i class="entypo-gauge"></i>
					<span>Dash Board</span></a></li>
			
            <li class="has-sub">
				<a href="#"><i class="entypo-user"></i>
					<span>Master</span>
				</a>
				<ul>
            		<li><a href="<?php echo base_url('occupation/viewOccupationDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Occupation Master</span></a></li>

            		<li><a href="<?php echo base_url('trainer/viewTrainerDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Trainer Master</span></a></li>
					
					<li><a href="<?php echo base_url('org/viewOrgDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Organization Master</span></a></li>	

		      		<!-- <li><a href="<?php echo base_url('batch/viewBatchDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Batch Master</span></a></li> -->

		      		<li><a href="<?php echo base_url('client/viewClientDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Client Master</span></a></li>
				</ul>
			</li> 

            <li class="has-sub">
				<a href="#"><i class="entypo-book"></i>
					<span>Playback School</span>
				</a>
				<ul>
					<li><a href="<?php echo base_url('student/viewStudentDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Student Registration</span></a><li>

					<li><a href="<?php echo base_url('studentbatch/viewStudentBatchDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Student Batch</span></a><li>

             		<li><a href="<?php echo base_url('workshop/Introworkshop');?>"> <i class="entypo-newspaper"></i>
					<span>Intro Workshop </span></a></li>
    					
             		<li><a href="<?php echo base_url('interworkshop/IntermediateWorkshop');?>"> <i class="entypo-newspaper"></i>
					<span>Intermediate Workshop </span></a></li>
    		 
					<li><a href="<?php echo base_url('levelworkshop/LevelthreeWorkshop');?>"> <i class="entypo-newspaper"></i>
					<span>Levelthree Workshop </span></a></li>
    		
    				<li><a href="<?php echo base_url('splworkshop/SpecialWorkshop');?>"> <i class="entypo-newspaper"></i>
					<span>Special Workshop </span></a></li>
					
				    <li><a href="<?php echo base_url('trainer/approveTrainer');?>"> <i class="entypo-newspaper"></i>
					<span>Approval of Trainers</span></a></li>
					
				</ul>
			</li>
			

            <li class="has-sub">
				<a href="#"><i class="entypo-location"></i>
					<span>Playback Company</span>
				</a>
				<ul>
              		<li><a href="<?php echo base_url('member/viewMemberDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Member Registration </span></a></li>						

				   <li><a href="<?php echo base_url('performance/practicePerformance');?>"> <i class="entypo-newspaper"></i>
					<span>Performance and Practice</span></a></li>
											
				   <li><a href="<?php echo base_url('performancedetails/viewPerformanceDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Performance</span></a></li>						
				   <li><a href="<?php echo base_url('practicedetails/viewPracticeDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Practice</span></a></li>						
					
				</ul>
			</li>

            <li class="has-sub">
				<a href="#"><i class="entypo-user-add"></i>
					<span>Guest</span>
				</a>
				<ul>
	              <li><a href="<?php echo base_url('guest/viewGuestDetails');?>"> <i class="entypo-newspaper"></i>
					<span>Registration </span></a></li>					
				</ul>
			</li>
			

            <li class="has-sub">
				<a href="#"><i class="entypo-book"></i>
					<span>Report</span>
				</a>
				<ul>
				   <li><a href="<?php echo base_url('report/viewSSPTReport');?>"> <i class="entypo-newspaper"></i>
					<span>SSPT Reports</span></a></li>						

				   <li><a href="<?php echo base_url('report/viewBatchReport');?>"> <i class="entypo-newspaper"></i>
					<span>Batch Report</span></a></li>						
					
				   <li><a href="<?php echo base_url('report/viewTrainerReport');?>"> <i class="entypo-newspaper"></i>
					<span>Trainer Report</span></a></li>

				   <li><a href="<?php echo base_url('report/viewStudentReport');?>"> <i class="entypo-newspaper"></i>
					<span>Student Report</span></a></li>

            <li class="has-sub">
				<a href="#"><i class="entypo-newspaper"></i>
					<span>Performance Report</span>
				</a>
					<ul>
					<li><a href="<?php echo base_url('report/viewWorkshopPerformanceReport');?>"> <i class="entypo-newspaper"></i>
					<span>Workshop Performance</span></a></li>
					
<!-- 						<li><a href="<?php echo base_url('report/viewOutsidePerformanceReport');?>"> <i class="entypo-newspaper"></i>
				<span>Outside Performance</span></a></li>
	 -->				
					<li><a href="<?php echo base_url('report/viewPerformanceDetailsReport');?>"> <i class="entypo-newspaper"></i>
					<span>Performance Details</span></a></li>
					
					</ul>
					
					<li><a href="<?php echo base_url('report/viewPracticeReport');?>"> <i class="entypo-newspaper"></i>
					<span>Practice Report</span></a></li>
					
					
				</ul>
			</li>						
              
			<?php 
                     $username=$_SESSION['userName'];
                    if(strcmp($username,'admin')==0)
                    {
                     ?>
					<li><a href="<?php echo base_url('users/viewUsers');?>"> <i class="entypo-newspaper"></i>
					<span>User Details</span></a></li>		
					<?php }?>
					
			
			
			</ul>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/gsap/main-gsap.js"></script> 
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-api.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.min.js"></script>	
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-switch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-demo.js"></script>
	

<script type="text/javascript">
		jQuery(document).ready(function($)
		{
		$(".dataTables_wrapper select").select2({

		});
	});
</script>