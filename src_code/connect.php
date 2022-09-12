
<?php


$conn= mysqli_connect("localhost","root","","petsi",3306);

if(!$conn)
{
    echo"connection not established";
}

else
{
    echo"connection  established";
}
/*if(isset($_POST['login_btn'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    

    $log_query = "SELECT * FROM users WHERE email= '$email' LIMIT 1";

    $log_query_run = mysqli_query($con, $log_query);

    if(mysqli_num_rows($log_query_run) > 0) {
        foreach($log_query_run as $row) {
            $user_id =$row['id'];
            $user_name =$row['name'];
            $user_email =$row['email'];
            $user_phone = $row['phone_no'];
            $user_password = $row['password'];
        }  

        if(password_verify($password, $user_password)){

            session_start();

            $_SESSION['auth']= 1;

            echo $user_email;

            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_email'] = $user_email;
            $_SESSION['user_phone'] = $user_phone;
        
            $_SESSION['auth_user'] = [
                'user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'user_phone' =>$user_phone
            ]; 

            $_SESSION['status']= "Logged In Successfully";
            echo '<script>alert("Logged In Successfully")</script>';
            header('location: ../index.php');
        }
        else {
            echo '<script>alert("Invalid Email or Password")</script>';
            header('location: index.php');
        }
       
    }
    else {
        echo '<script>alert("Invalid Email or Password")</script>';
        header('location: index.php');
    }
}*/


