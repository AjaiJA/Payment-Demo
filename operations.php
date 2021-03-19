<?php
    if(isset($_POST['buy-now'])){
        include "./connection.php";
        $method=mysqli_real_escape_string($conn,$_POST['payment-method']);
        $cardName=mysqli_real_escape_string($conn,$_POST['card-name']);
        $cardNumber=mysqli_real_escape_string($conn,$_POST['card-number']);
        $expiryDate=mysqli_real_escape_string($conn,$_POST['expiry-date']);
        $cvvCode=mysqli_real_escape_string($conn,$_POST['cvvcode']);
        $amount=mysqli_real_escape_string($conn,$_POST['amount']);
        $sql1="SELECT * from add_details WHERE card_number='$cardNumber';";
        $query1=mysqli_query($conn,$sql1);
        $num1=mysqli_num_rows($query1);
        if($num1>0){
            $sql2="INSERT INTO transactions(`id`,`payment_method`,`card_name`,`card_number`,`expiry_date`,`cvv_code`,`Amount`) VALUES(NOT NULL,'$method','$cardName','$cardNumber','$expiryDate','$cvvCode','$amount');";
            $query2=mysqli_query($conn,$sql2);
            if($query2==true){
                header("Location:./index.php?result=Transaction Successfull");
            }
        }
        else{
            header("Location:./index.php?result=Card Details Not Found");
            exit();
        }
    }

?>