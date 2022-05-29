<?php
require('admin.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($conn,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($conn,$_GET['operation']);
		$id=get_safe_value($conn,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update user set status='$status' where id='$id'";
		mysqli_query($conn,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($conn,$_GET['id']);
		$delete_sql="delete from user where id='$id'";
		mysqli_query($conn,$delete_sql);
	}
}
$allusers = "select * from user";

$sql="select * from user where role=1 order by id asc";
$res=mysqli_query($conn,$sql);
?>



<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">USER MANAGEMENT </h4>
				   <h4 class="box-link"><a href="manage_user_management.php">ADD USER</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   
							   <th width="2%">ID</th>
							   <th width="10%">Username</th>
                               <th width="10%">firstname</th>
                               <th width="10%">lastname</th>
							   <th width="10%">Password</th>
							   <th width="10%">Email</th>
							   <th width="10%">Mobile</th>
                               <th width="12%">Date Of Birth</th>
							   <th width="6%">Gender</th>
                               <th width="24%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['username']?></td>
							   <td><?php echo $row['firstname']?></td>
							   <td><?php echo $row['lastname']?></td>
							   <td><?php echo $row['password']?></td>
                               <td><?php echo $row['email']?></td>
							   <td><?php echo $row['phone']?></td>
							   <td><?php echo $row['dateofbirth']?></td>
							   <td><?php echo $row['gender']?></td>
							   
							  
							   <td>
								<?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_user_management.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
