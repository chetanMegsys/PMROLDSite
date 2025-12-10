<?php 
session_start();
include('Crypto.php') ?>
<?php
error_reporting(0);
//print_r($_POST);
$workingKey = '09DC6CA86B2DA22EBDF62336FB1B880B';  //Working Key should be provided here.
$encResponse = $_POST["encResp"];   //This is the response sent by the CCAvenue Server
$rcvdString = decrypt($encResponse, $workingKey);  //Crypto Decryption used as per the specified working key.
$order_status = "";
$order_query = array();
$order_id = "";
$tid = "";
$decryptValues = explode('&', $rcvdString);
//print_r($decryptValues);
//echo $decryptValues['order_status'];
$dataSize = sizeof($decryptValues);
//echo "<center>";

for ($i = 0; $i < $dataSize; $i++) {
    $information = explode('=', $decryptValues[$i]);
    if ($i == 0)
        $order_id = $information[1];
    if ($i == 1)
        $tid = $information[1];
    if ($i == 3)
        $order_status = $information[1];
}


$reciptNo = $order_id;

if ($order_status === "Success") {
    updateOrderDetails($order_status,"S", $tid, $_SESSION['CCAVENUE_TRANS_ID'],$reciptNo);
    $order_query['order_status'] = "Success";
} else if ($order_status === "Aborted") {
    updateOrderDetails($order_status,"A", $tid, $_SESSION['CCAVENUE_TRANS_ID'],$reciptNo);
    $order_query['order_status'] = "Aborted";
} else if ($order_status === "Failure") {
    updateOrderDetails($order_status,"F", $tid, $_SESSION['CCAVENUE_TRANS_ID'],$reciptNo);
    $order_query['order_status'] = "Failure";
} else {
    $order_status = "Security Error";
    updateOrderDetails($order_status,"SE", $tid, $_SESSION['CCAVENUE_TRANS_ID'],$reciptNo);
    $order_query['order_status'] = "Security Error";
}

$query_string = http_build_query($order_query);

header("location: https://www.persistencemarketresearch.com/thanks/checkout?" . $query_string);

echo "<br><br>";

echo "<table cellspacing=4 cellpadding=4>";
for ($i = 0; $i < $dataSize; $i++) {
    $information = explode('=', $decryptValues[$i]);
    echo '<tr><td>' . $information[0] . '</td><td>' . $information[1] . '</td></tr>';
}

echo "</table><br>";
echo "</center>";

function updateOrderDetails($order_status,$transactionCode, $tid, $order_session_id,$reciptNo){

//$servername = "10.0.11.116";
$servername = "tmrproddb.cmeprea1nigk.us-east-1.rds.amazonaws.com";
$username = "pmrprodadmin";
$password = "TmrProd77!!";
$dbname = "pmrprodnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	//die("Connection failed: " . $conn->connect_error);
} 
	
	$sql = "UPDATE order_ccavenue_transaction set transaction_status='$order_status',transaction_code='$transactionCode',receipt_no='$reciptNo' WHERE order_id='$order_session_id'";

	if ($conn->query($sql) === TRUE) {
		unset($_SESSION["CCAVENUE_TRANS_ID"]);
	} else {
		unset($_SESSION["CCAVENUE_TRANS_ID"]);
	} 
	
}
?>
