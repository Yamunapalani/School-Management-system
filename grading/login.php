
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>ICON School Management System</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <style>
      body{
        display: flex;
        height: calc(100%);
        width: calc(100%);
        justify-content: center;
        align-items: center;
      }
      .login-form {
  display: block;
  border-radius: 20px;
  padding: 30px;
  width: 500px;
  background:linear-gradient (45deg,#66ffff 0%, #ffccff 100%);
  box-shadow:1px 1px 7px 1px black;
 } 
 .erlert{
  display:block;
  border-radius:5px;
  background-color:rgba(230, 103, 42, 0.37);
  padding: 5px;
}
.btn{
  background-color:#FFBD35;
  border:none;
  color:black;
  font-weight:bolder;
  box-shadow:2px 2px 10px rgba(0,0,0,0.8);
}
.btn:hover{
  background:#fff;
  color:#FFBD35;
  font-weight:bolder;
}
h1{
  font-size:24px;
  font-weight:bold;
  color:#0a8faf;
  text-shadow:2px 2px 5px rgba(111,111,111,0.8);
  margin-bottom;20px;
}
label{
  font-size:18px;
  font-weight:bold;
  color:white;
  text-shadow:1px 1px 5px 1px rgba(0,0,0,0.5);
  margin-bottom:10px;
}
.input-group{
   width:60%;
   margin-left:2vw;
   box-shadow:1px 1px 10px 1px rgba(0,0,0,0.5);
   border-radius:8px;
 }
.form-control{
  background-color:#ffffff55;
}
    </style>
  </head>
<body style="background: radial-gradient(#66ffff 0%, #ffccff 100%);">
  

<div class="container-fluid">
<img src="https://github.com/broharigunda/HOsting_SEarchedUpdates/blob/master/Icon-Logo6.png?raw=true" style="display:block;margin:auto; margin-bottom:50px;width:300px;height:300px;">
  <div class="login-form" id="login_modal" role="dialog" 
<center><h1>ICON School Management System</h1></center>

  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user">User:</label>
      <div class="col-md-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" id="user" name="user" placeholder="Enter User" autocomplete="off">
      </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-md-10">
      <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
      </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-offset-9  col-md-12">
      <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create New</button>-->
        <button type="hidden"  class="btn btn-warning">Login</button>
       
      </div>
    </div>
  </form>
   <?php
  include 'connect.php';
  ?>
   </div>          
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
</html>
