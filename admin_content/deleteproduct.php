<?php include("connect.php");	
?>
<?php 
session_start(); 


	
	if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

	
	if(isset($_GET['delete_pro'])){
	
	$delete_id = $_GET['delete_pro'];
	
	$delete_pro = "delete from products_books where product_id='$delete_id'"; 
	
	$run_delete = mysqli_query($conn, $delete_pro); 
	
	if($run_delete){
	
	echo "<script>alert('A product has been deleted!')</script>";
	echo "<script>window.open('index.php?view_products','_self')</script>";
	}
	
	

}
}



?>