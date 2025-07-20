<?php
    $user_ip = getenv('REMOTE_ADDR');
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $country = $geo["geoplugin_countryName"];
    $city = $geo["geoplugin_city"];
    $contactEmail=$_POST['contactEmailN'];

    $conn = mysqli_connect('localhost','root','','cgv');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into newsletter(contactemail, country, city, ip)
            values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$contactEmail, $country, $city, $user_ip);
        $stmt->execute();
        echo "Your successfully subscribed. Thank you!";
        $stmt->close();
        $conn->close();
    }

?>