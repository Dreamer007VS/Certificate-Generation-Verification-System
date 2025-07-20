<?php
    $fName=$_POST['fName'];
    $contactEmail=$_POST['contactEmail'];
    $contactPhone=$_POST['contactPhone'];
    $rating=$_POST['inlineRadioOptions'];
    $contactMessage=$_POST['contactMessage'];

    $conn = mysqli_connect('localhost','root','','cgv');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into feedback(name, email_id, phone, rating, feedback)
            values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$fName, $contactEmail,$contactMessage, $rating, $contactPhone);
        $stmt->execute();
        echo "Your feedback has been sent. Thank you!";
        $stmt->close();
        $conn->close();
    }

?>