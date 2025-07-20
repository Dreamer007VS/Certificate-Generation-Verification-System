<?php
    $fName=$_POST['fName'];
    $contactEmail=$_POST['contactEmail'];
    $contactPhone=$_POST['contactPhone'];
    $contactMessage=$_POST['contactMessage'];

    $conn = mysqli_connect('localhost','root','','cgv');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(name, email_id, phone, response)
            values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$fName, $contactEmail, $contactMessage, $contactPhone);
        $stmt->execute();
        echo "Your message has been sent. Thank you!";
        $stmt->close();
        $conn->close();
    }

?>