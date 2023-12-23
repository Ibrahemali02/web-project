<?php
@$name=$__request['name'];
@$address_in_details=$__request['address'];
@$email=$__request['e-mail'];
@$phone=$__request['phone'];
if(isset($_POST['complate']))
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "web_project";

    $conn = mysqli_connect($host, $user,$password, $db);

    @$insert ="insert into complate order values('$name','$address_in_details','$email','$phone',) ";
    mysqli_query($conn,$insert);

    if($conn)
    {
    
        echo("<h1 style='color:green';>your reqouist is complate</h1>");
    }
    else
    {
        echo("<h1 style='color:red';>your reqouist is failed!</h1>");
    }



}

?>