<?php
	include('basefile/menu.php');
	if(!isset($_REQUEST['id'])){
    header("Location: index.php");
	}
?>

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
<div class="container">
    <h1>Order Status</h1>
    <center><h3>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></h3></center>
	<form class="paypal" action="payments.php" method="post" id="paypal_form" target="_blank">
		<input type="hidden" name="cmd" value="_xclick" />
		<input type="hidden" name="no_note" value="1" />
		<input type="hidden" name="lc" value="LKR" />
		<input type="hidden" name="currency_code" value="GBP" />
		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
		<input type="hidden" name="first_name" value="<?php $firstname?>"  />
		<input type="hidden" name="last_name" value="<?php $lastname?>"  />
		<input type="hidden" name="payer_email" value="<?php $email?>"  />
		<input type="hidden" name="item_number" value="<?php $idd?>" / >
		</br>
		<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Pay now! "/>
	</form>

<?php


$firstname = $_SESSION['fname'];
$lastname = $_SESSION['fname'];
$email = $_SESSION['email'];
$order = $_SESSION['total'];
$idd = $_GET['id'];

$_SESSION['idd'] = $_GET['id'];

?>

</div>
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

<?php
	include('basefile/footer.php');
?>