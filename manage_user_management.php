<?php
require('admin.php');
isAdmin();
$username='';
$password='';
$firstname='';
$lastname='';
$email='';
$mobile='';
$dateofbirth='';
$gender='';

$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($conn,$_GET['id']);
	$res=mysqli_query($conn,"select * from user where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$username=$row['username'];
		$email=$row['email'];
		$mobile=$row['phone'];
		$password=$row['password'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $gender = $row['gender'];
        $dateofbirth = $row['dateofbirth'];
	}else{
		header('location:user_management.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$username=get_safe_value($conn,$_POST['username']);
	$email=get_safe_value($conn,$_POST['email']);
	$mobile=get_safe_value($conn,$_POST['mobile']);
	$password=get_safe_value($conn,$_POST['password']);
    $firstname=get_safe_value($conn,$_POST['firstname']);
	$lastname=get_safe_value($conn,$_POST['lastname']);
	$gender=get_safe_value($conn,$_POST['gender']);
	$dateofbirth=get_safe_value($conn,$_POST['dateofbirth']);
	
	$res=mysqli_query($conn,"select * from user where username='$username'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Username already exist";
			}
		}else{
			$msg="Username already exist";
		}
	}
	
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update user set username='$username',password='$password',email='$email',phone='$mobile' ,firstname='$firstname',lastname='$lastname',gender='$gender',dateofbirth='$dateofbirth' where id='$id'";
			mysqli_query($conn,$update_sql);
		}else{
			mysqli_query($conn,"insert into user (username,password,email,phone,role,status,firstname,lastname,gender,dateofbirth) values('$username','$password','$email','$mobile',1,1,'$firstname','$lastname','$gender','$dateofbirth')");
		}
		header('location:user_management.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>USER MANAGEMENT FORM</strong><small> </small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="username" class=" form-control-label">Username</label>
									<input type="text" name="username" placeholder="Enter username" class="form-control" required value="<?php echo $username?>">
								</div>
                                <div class="form-group">
									<label for="firstname" class=" form-control-label">Firstname</label>
									<input type="text" name="firstname" placeholder="Enter firstname" class="form-control" required value="<?php echo $firstname?>">
								</div>
                                <div class="form-group">
									<label for="lastname" class=" form-control-label">Lastname</label>
									<input type="text" name="lastname" placeholder="Enter lastname" class="form-control" required value="<?php echo $lastname?>">
								</div>
                                <div class="form-group">
									<label for="gender" class=" form-control-label">Gender</label>
									<input type="text" name="gender" placeholder="Enter Gender" class="form-control" required value="<?php echo $gender?>">
								</div>
                                <div class="form-group">
									<label for="dateofbirth" class=" form-control-label">Date Of Birth</label>
									<input type="Date" name="dateofbirth" placeholder="Enter Date Of Birth" class="form-control" required value="<?php echo $dateofbirth?>">
								</div>
								<div class="form-group">
									<label for="password" class=" form-control-label">Password</label>
									<input type="text" name="password" placeholder="Enter password" class="form-control" required value="<?php echo $password?>">
								</div>
								
								<div class="form-group">
									<label for="password" class=" form-control-label">Email</label>
									<input type="email" name="email" placeholder="Enter email" class="form-control" required value="<?php echo $email?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Mobile</label>
									<input type="text" name="mobile" placeholder="Enter mobile" class="form-control" required value="<?php echo $mobile?>">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">SUBMIT</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
         
