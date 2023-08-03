<?php


$servername="sql210.epizy.com";
$username="epiz_33389813";
$password="46dlS3Hl2koI";
$dbname="epiz_33389813_payment";

$conn = new mysqli($servername,$username,$password,$dbname);

if(isset($_POST["submit"]))

{

    $name=$_POST['namee'];

    $pType=$_POST['pTypee'];
	
	$cardNumber=$_POST['cardNumberr'];
	
	$expirationDate=$_POST['expirationDatee'];

    $cardCvc=$_POST['cardCvcc'];
	
	$amount=$_POST['amountt'];

    $email=$_POST['emaill'];


$sql="INSERT INTO payment(name,pType,cardNumber,expirationDate,cardCvc,amount,email) VALUES('$name','$pType','$cardNumber','$expirationDate','$cardCvc','$amount','$email')";

if(mysqli_query($conn,$sql))

{

    echo "Your donation details have been successfully submitted. Thank you for your donation! ";

}

else{

    echo "error:".$sql."".msqli_error($conn);

}

mysqli_close($conn);

}

?>