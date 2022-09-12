<?php include('config.php') ?>


<!-- Signin Form Backend -->

<?php

    if(isset($_POST['reg_user']))
    {
        $email = $_POST['email'];
        $password =  $_POST['password_1'];
        $cnf_password = $_POST['password_2'];

        if($password == $cnf_password)
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO user (email, password) VALUES('$email', '$hash')";

            $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if($sql)
            {
                header("location: index.php?msg=registered");
            }
            else
            {
                header("location: index.php?msg=error");
            }
        }
        else{
            echo "Password & Confirm Password does not match!";
        }
            
    }
?>


<!-- COntact Form -->

<?php

    if(isset($_POST['c_submit']))
    {
        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $ph_no = $_POST['ph_no'];
            $message = $_POST['message'];

            $query = "INSERT INTO contact (name, email, phone_no, message) VALUES('$name', '$email', '$ph_no', '$message')";

            $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if($sql)
            {
                header("location: index.php?msg=itworks");
            }
            else
            {
                header("location: index.php?msg=doesnotwork");
            }
        }
       
?>

<!-- Login Form backend -->

<?php

if(isset($_POST['login_user'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM user WHERE email= '$email' LIMIT 1";

    $log_query_run = mysqli_query($conn, $log_query);

    if(mysqli_num_rows($log_query_run) > 0) {
        foreach($log_query_run as $row) {
            $user_id =$row['uid'];
            $user_email =$row['email'];
            $user_password = $row['password'];
        } 

        // echo($password);
        // echo($user_password);

        if(password_verify($password, $user_password)) {

            session_start();

            $_SESSION['auth']= 1;

            echo $user_email;

            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_email'] = $user_email;
        
            $_SESSION['auth_user'] = [
                'user_id'=>$user_id,
                'user_email'=>$user_email,
            ]; 

            $_SESSION['status']= "Logged In Successfully";
            echo '<script>alert("Logged In Successfully")</script>';
            ('location: index.php');
            header('location: index.php?login_successful');
        }
        else {
            echo '<script>alert("Invalid Email or Password")</script>';
            header('location: login.php?incorrect_password');
        }
       
    }
    else {
        echo '<script>alert("Invalid Email or Password")</script>';
        header('location: login.php?wrong_emailid');
    }
}
?>


<!-- Appointment backend -->

<?php

    if(isset($_POST['request']))
    {
       
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact_no = $_POST['number'];
            $message = $_POST['message'];
            $chk_mode = $_POST['mode_cnt'];
            $chk_day = $_POST['day'];
            $chk_time = $_POST['time'];

            $chk_d="";
            $chk_t="";

            foreach($chk_day as $chk1)  
            {  
                 $chk_d .= $chk1.",";  
            } 

            foreach($chk_time as $chk2)  
            {  
                 $chk_t .= $chk2.",";  
            } 


            $query = "INSERT INTO appointment (name, email, contact_no, message, mode_cnt, day, time) VALUES('$name', '$email', '$contact_no', '$message', '$chk_mode', '$chk_d', '$chk_t')";

            $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if($sql)
            {
                header("location: index.php?msg=itworks");
            }
            else
            {
                header("location: appointment.php?msg=doesnotwork");
            }
    }

?>

<?php

    if(isset($_POST['checkout']))
    {
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $addr = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];


        $query = "INSERT INTO i_order (name, email, addr, city, state, zip) VALUES('$name', '$email', '$addr', '$city', '$state', '$zip')";

        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($sql)
        {
            header("location: index.php?msg=itworks");
        }
        else
        {
            header("location: cout.html?msg=doesnotwork");
        }
    }

?>

