<?php

$customer_session = $_SESSION['email'];

$get_customer = "select * from customers where email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$name = $row_customer['name'];

$email = $row_customer['email'];

$city = $row_customer['city'];

$contact = $row_customer['contact'];


?>

<h1 align="center" > Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Name: </label>

<input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Email: </label>

<input type="text" name="email" class="form-control" required value="<?php echo $email; ?>">


</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label> Customer City: </label>

<input type="text" name="city" class="form-control" required value="<?php echo $city; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Contact: </label>

<input type="text" name="contact" class="form-control" required value="<?php echo $contact; ?>">


</div><!-- form-group Ends -->



<div class="text-center" ><!-- text-center Starts -->

<button name="update" class="btn btn-primary" >

<i class="fa fa-user-md" ></i> Update Now

</button>


</div><!-- text-center Ends -->


</form><!--- form Ends -->

<?php

if(isset($_POST['update'])){

$update_id = $customer_id;

$name = $_POST['name'];

$email = $_POST['email'];

$city = $_POST['city'];

$contact = $_POST['contact'];


$update_customer = "update customers set name='$name',email='$email',city='$city',contact='$contact' where customer_id='$update_id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){

echo "<script>alert('Your account has been updated please login again')</script>";

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>