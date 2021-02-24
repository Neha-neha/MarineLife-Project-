<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php  include 'menu.php'; ?>

<div class="jumbotron">
    <div class="py-1">
        <h2 class="text-center display-4">Contact Us</h2>
    </div>

</div>

<section class="my-5">
    
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user"  autocomplete="off" class="form-control">
            </div>  
            <div class="form-group">
                <label>Email Id</label>
                <input type="text" name="email"  autocomplete="off" class="form-control">
            </div>  
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile"  autocomplete="off" class="form-control">
            </div>  
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comment" >
                </textarea>
            </div> 
          
            <button type="submit" class="btn btn-primary">Submit</button> 
            
        </form>
    </div>

</section>

<footer>
<p class="p-3 bg-dark text-white text-center"> <a href="#" class="text-white">DESIGNED AND DEVELOPED BY NEHA</a></p>
</footer>

</body>
</html>