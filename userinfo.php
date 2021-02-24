<html>
<head>
    <title></title>
    </head>
<body>

<div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-heading">
                           
                        </div>

                        

                        <br />
						<h4> Thanks For Your Enquiry, Our Customer Care Executive will contact you soon.</h4> 

                        
                    </div>
<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "not connected";
}

mysqli_select_db($con, 'userinfo');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comment'];

$query = " insert into userinfodata (username, email, mobile, comments) 
values ('$user','$email','$mobile','$comments') ";



mysqli_query($con, $query); 

header('location:contact.php');
?>


</body>
</html>