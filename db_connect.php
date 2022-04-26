<?php
    $connect = mysqli_connect("localhost","root","","cnt_khabar_koi");

    if( isset($_POST['send'])){
        $name = $_POST['name'];
        $food_name = $_POST['food_name'];
        $quan = $_POST['quantity'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        $additional = $_POST['additional_food'];
        $date = $_POST['date'];
        $feed = $_POST['feedback'];

        $query = "INSERT INTO order_data(user_name,food_name,quantity,address,number,additiona_food_name,date,feedback)
        values('$name','$food_name','$quan','$address','$number','$additional','$date','$feed')";

        mysqli_query($connect,$query);

    }
?>