





 <main class="content">      

<div class="container-fluid p-0">
<!--Validation Errors starts here -->   
<?php if($errors->any()): ?>
    <div class="alert bg-danger text-light alert-dismissible fade show" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span><?php echo $error; ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ik ik-x"></i>
        </button>
    </div>
    <?php endif; ?>
<hr>
<!--End Validation Errors-->


 <!--Error warning-->
 <?php if(Session::has('warnings')): ?>
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="fa-regular fa-bell"></i>
        <strong>Hello <?php echo e(Auth::guard('Employees')->user()->first_name); ?> !</strong> you have some bad feedbacks, 
       
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
             <?php echo Session::get('warnings'); ?>

    </div>
 <?php endif; ?>
<!--Error warnings ends here-->


<!--Success-->
<?php if(Session::has('success')): ?>
 <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa-regular fa-bell"></i>
        <strong>Hello <?php echo e(Auth::guard('Employees')->user()->first_name); ?> !</strong> you have some good feedbacks, 
       
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
             <?php echo Session::get('success'); ?>

    </div>
 <?php endif; ?>
<!--Sucess ends here-->
<br>






<h1 class="h3 mb-3">Hi <strong><?php echo e(Auth::guard('Employees')->user()->first_name); ?> <?php echo e(Auth::guard('Employees')->user()->last_name); ?> </strong> Welcome to the Agent Dashboard</h1>





<hr>
  <strong>AGENT ID: <?php echo e(Auth::guard('Employees')->user()->employee_id); ?> </strong>
<!--Show Reminders here -->   
 <br><br>
 <center>
			  <button type="button" class="btn btn-primary btn-lg" style="color:white">Unlock A Bonus of K500 if you reach up to 25 Invited and Approved Clients</button>
              <br> 
              </center>
<br><br>
    <style>
        
    
    ul.notes li {
      margin: 10px 40px 50px 0px;
      float: left;
    }
    
    ul.notes li, ul.tag-list li {
      list-style: none;
    }
    
    ul.notes li div small {
      position: absolute;
      top: 5px;
      right: 5px;
      font-size: 10px;
    }
    
    div.rotate-1 {
      -webkit-transform: rotate(-6deg);
      -o-transform: rotate(-6deg);
      -moz-transform: rotate(-6deg);
    }
    
    div.rotate-2 {
      -o-transform: rotate(4deg);
      -webkit-transform: rotate(4deg);
      -moz-transform: rotate(4deg);
      position: relative;
      top: 5px;
    }
    
    .lazur-bg {
      background-color: #23c6c8;
      color: #ffffff;
    }
    
    .red-bg {
      background-color: #ed5565;
      color: #ffffff;
    }
    
    .navy-bg {
      background-color: #1ab394;
      color: #ffffff;
    }
    
    .yellow-bg {
      background-color: #f8ac59;
      color: #ffffff;
    }
    
    ul.notes li div {
      text-decoration: none;
      color: #000;
      display: block;
      height: 160px;
      width: 160px;
      padding: 1em;
      -moz-box-shadow: 5px 5px 7px #212121;
      -webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
      box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
      -moz-transition: -moz-transform 0.15s linear;
      -o-transition: -o-transform 0.15s linear;
      -webkit-transition: -webkit-transform 0.15s linear;
    }
    
    
    </style>
 
    
    


<hr>









<h4>Agent Workspace</h4>
<br>
<?php
$transactions_history = \App\Commisions::where('agent_id',"=",Auth::guard('Employees')->user()->employee_id)->get();
$transactions = \App\Commisions::where('agent_id',"=",Auth::guard('Employees')->user()->employee_id)->where('is_approved',"=",1)->first();
$transactions_sum = \App\Commisions::where('agent_id',"=",Auth::guard('Employees')->user()->employee_id)->where('is_approved',"=",1)->sum('commisions');
$transactions_withdraw = \App\Commisions::where('agent_id',"=",Auth::guard('Employees')->user()->employee_id)->where('is_approved',"=",1)->sum('withdraw');
$commisions = is_null($transactions) ? 0 : $transactions_sum;
$withdraw = is_null($transactions) ? 0 : $transactions_withdraw;
$balance = $commisions - $withdraw;
?>

        
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" >
                                <div class="col mt-0">
                                    <h5 class="card-title">Commission</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                    <i class="fas fa-money-bill-wave-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-1 mb-3" style="font-weight: bold;">
                           
                           <a style="color:black"  href="<?php echo e(route('employees.kyc_personal_details_view')); ?>">Total Earned ZMW: <?php echo e($commisions); ?></a>											
                       
                       
                       </h4>
                           
                            
                           
                        </div>
                    </div>
                    </div>



                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Balance</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                    <i class="fa fa-credit-card"></i>
                                        
                                        </div>
                                </div>
                            </div>
                            <h4 class="mt-1 mb-3" style="font-weight: bold;">
                           
                            <a style="color:black" href="<?php echo e(route('employees.payroll_details_view')); ?>">Balance: ZMW <?php echo e($balance); ?></a>											
                        
                        
                        </h4>
                            <div class="mb-0">
                               <span class="text-muted">withdrawn: ZMW <?php echo e($withdraw); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
</div>



<!--Transactions-->
<br><br>
<h4>Transactions History</h4>
<br>

<div class="row">
               
<table class="table table-striped" id="transactions_table">
  <thead>
    <tr>
    
      <th>Date</th>
      <th>Commision</th>
      <th>Withdrawn</th>
      <th>Status</th>
      
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $transactions_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <tr>
       
        
      <td><?php echo e(\Carbon\Carbon::parse($history->date)->format('d,M Y')); ?></td>
      <td><?php echo e($history->commisions); ?></td>
      <td><?php echo e($history->withdraw); ?></td>
      <td><?php if($history->is_approved == 0): ?> Pending Approval <?php else: ?> Approved <?php endif; ?></td>
      
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>


<script>  
    $(document).ready( function () {
    $('#transactions_table').DataTable();
} );
</script>               
                




               </div>          
        


<!--End Statuses-->


</main>
<hr>



     <?php /**PATH /homepages/22/d934631494/htdocs/PAYROLL2/resources/views/Agents/dashboard.blade.php ENDPATH**/ ?>