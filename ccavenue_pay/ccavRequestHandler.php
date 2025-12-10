<?php session_start(); ?>
<html>
<head>
<title>Iframe</title>
</head>
<body>
<center>
<?php include('Crypto.php');?>
<?php 

	error_reporting(1);

	$working_key='09DC6CA86B2DA22EBDF62336FB1B880B';//Shared by CCAVENUES
	$access_code='AVBA67DK93BS08ABSB';//Shared by CCAVENUES
	$merchant_data=''; 
	
	foreach ($_REQUEST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}


/*
	$servername = "10.0.11.116";
	$username = "pmrprodadmin";
	$password = "TmrProd77!!";
	$dbname = "pmrproddb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO order_ccavenue_transaction (transaction_number, InvoicNumber, transaction_status, report_id, order_amount,recipt_no)  
	VALUES ('".$_REQUEST['tid']."','".$_REQUEST['order_id']."','pending','12','".$_REQUEST['amount']."','')";

	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		//echo "New record created successfully. Last inserted ID is: " . $last_id;
		$_SESSION["lastInsertOrderId"] = $last_id;
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}
*/
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
	
	//echo $production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
	
//header("location:".$production_url);
//exit;
?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

