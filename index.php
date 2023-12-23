<?php
@$name=$__request['name'];
@$password=$__request['password'];
@$email=$__request['e-mail'];
@$phone=$__request['phone'];
if(isset($_POST['send']))
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "web_project";

    $conn = mysqli_connect($host, $user,$password, $db);

    @$insert ="insert into rejistration_form values('$name','$password','$email','$phone',) ";
    mysqli_query($conn,$insert);

    if($conn)
    {
    
        echo("<h1 style='color:green';>your registration is complate</h1>");
    }
    else
    {
        echo("<h1 style='color:red';>your registration is failed!</h1>");
    }



}

?>