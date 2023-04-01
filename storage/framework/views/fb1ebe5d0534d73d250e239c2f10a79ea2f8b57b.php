<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
 <!-- Favicons -->
  <link href="<?php echo e(asset('landing_assets/img/fav.PNG')); ?>" rel="icon">
  <link href="<?php echo e(asset('landing_assets/img/apple-touch-icon.PNG')); ?>" rel="apple-touch-icon">
  
<!-- Date time picker -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
 <!-- Date time pickerEnds Here -->       
<!--Fontawsome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--End fontawesome-->
  
  
  <!-- Datatables Starts here-->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
 <!-- Datatables Ends here-->

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>E-SYSTEMS::EMPLOYEES DASHBOARD</title>

	<link href="<?php echo e(asset('dashboardassets/css/app.css')); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


  
<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="<?php echo e(('employees_dashboard')); ?>">
          <span class="align-middle">Menu Dashboard</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="<?php echo e(('employees_dashboard')); ?>">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle" style="color:white">Dashboard</span>
            </a>
					</li>
                  
                   <li class="sidebar-item ">
						<a class="sidebar-link" href="<?php echo e(route('employees.kyc_personal_details_view')); ?>">
              <i class="align-middle fa fa-pencil" ></i> <span class="align-middle" style="color:white">Update KYC</span>
            </a>
					</li>

                  
           <li class="sidebar-item ">
						<a class="sidebar-link" href="<?php echo e(route('employees.payroll_details_view')); ?>">
              <i class="align-middle fa fa-dollar" ></i> <span class="align-middle" style="color:white">Payroll</span>
            </a>
					</li>
        
                  
                  
                  

          <li class="sidebar-item ">
						<a class="sidebar-link" href="<?php echo e(route('employees.payslip_details_view')); ?>">
              <i class="align-middle fa fa-credit-card" ></i> <span class="align-middle" style="color:white">Payslips</span>
            </a>
					</li>

         

          <li class="sidebar-item ">
						<a class="sidebar-link" href="<?php echo e(route('employees.leave_details_view')); ?>">
              <i class="align-middle fa fa-calendar-alt" ></i> <span class="align-middle" style="color:white">Leave Days</span>
            </a>
					</li>					

				
					
				
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo e(route('employees.overtime_details_view')); ?>">
              <i class="align-middle fa fa-clock-o" ></i> <span class="align-middle" style="color:white">Overtime</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo e(route('employees.kyc_cashadvance_details_view')); ?>">
              <i class="align-middle fa fa-money-bill" ></i> <span class="align-middle" style="color:white">Salary Advance</span>
            </a>
					</li>
                    
                    
           <li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo e(route('employees.leave_history')); ?>">
              <i class="align-middle fa fa-clock-o" ></i> <span class="align-middle" style="color:white">Leave History</span>
            </a>
					</li>



					<li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo e(route('employees.attendance_history')); ?>">
              <i class="align-middle fa fa-clock-o" ></i> <span class="align-middle" style="color:white">Attendance History</span>
            </a>
					</li>         
                    
                  
                
                
                <li class="sidebar-item">
						<a class="sidebar-link">
              <i class="align-middle fa fa-sign-out" ></i> <span onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="align-middle" style="color:white">Sign Out</span>
            </a>
					</li>         
                    
                    
                    
				</ul>

              
             
              
              
				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Work Description</strong>
						<div class="mb-3 text-sm">
            <?php echo e(Auth::guard('Employees')->user()->remark); ?> at:
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary"><?php echo e(\App\Admin::where('security_number',"=",Auth::guard('Employees')->user()->security_number)->first()->username); ?></a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<!--Main Page-->

		<div class="main">
						<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
		

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						
						<li class="nav-item dropdown">
							
						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
						
							<i id="usericon" class="fas fa-user-shield" style="font-size:26px"></i>
							
</a>
							<div class="dropdown-menu dropdown-menu-end">
								<!--Profile Route-->
                                <a class="dropdown-item" href="<?php echo e(route('employees.employee_profile')); ?>">
              <i class="align-middle fas fa-user" ></i> <span class="align-middle"> Personal Profile</span>
            </a>	
								<!--End profile route-->	



							
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo e(route('employees.change_password_view')); ?>"><i class="align-middle me-1" data-feather="settings"></i> Change password</a>
                                <hr>
								<a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i class="align-middle me-1" data-feather="help-circle"></i> Log out</a>
								<div class="dropdown-divider"></div>
								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			
		




 


<!--Import the blade here-->
<?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/employees/menu_header.blade.php ENDPATH**/ ?>