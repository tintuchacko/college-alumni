<?php 
include_once 'includes/header.php';
include_once 'lib/Login.php';
include_once 'lib/Query.php';
$home = "active";
$about = "";
$student = "";
$tutorials = "";
$contact = "";
?>
<body>
	<div class="container">
		<?php include_once 'includes/nav-bar.php'; ?>
        
        <div class="panel panel-default" style="width : 600px;">
        	<div class="panel-heading">Sign up</div>
        	<div class="panel-body">
        		<form action="sign-up-process.php" method="post">
		            <div class="form-group break-tp-sm">
		                <label for="email" class="col-md-3 control-label">Email</label>
		                <div class="col-md-9">
		                    <input type="text" class="form-control" name="email" placeholder="Email Address">
		                </div>
		            </div>
		            
		            <div class="form-group break-tp-sm">
		                <label for="username" class="col-md-3 control-label">Username</label>
		                <div class="col-md-9">
		                    <input type="text" class="form-control" name="username" placeholder="Username">
		                </div>
		            </div>
		            <div class="form-group break-tp-sm">
		                <label for="password" class="col-md-3 control-label">Password</label>
		                <div class="col-md-9">
		                    <input type="password" class="form-control" name="password" placeholder="Password">
		                </div>
		            </div>
		            <div class="form-group break-tp-sm">
		                <label for="submit" class="col-md-3 control-label"></label>
		                <div class="col-md-9">
		                    <input type="submit" class="btn btn-default" >
		                </div>
		            </div>
	            </form>
            </div><!--./panel-body-->    
		</div> <!-- ./panel-->
	</div> <!-- ./container-->

</body>

<?php include_once 'includes/footer.php'; ?>