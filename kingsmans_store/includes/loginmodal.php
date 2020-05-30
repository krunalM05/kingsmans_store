<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome |  Kingsman's Laptop Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal" style="color: red;font-size: 25px;">x</button>
          <h2 style="color:orange;" class="color">
              <center><span class="glyphicon glyphicon-lock"></span> Login</h2></center>
        </div>
        <div class="modal-body">
           <p>Don't have an account? <a href="./signup.php">Register</a></p>
          <form role="form" action="login_submit.php" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-envelope"></span> E-Mail</label>
              <input type="email" class="form-control"  name="e-mail" placeholder="Enter your Resistered E-Mail" required="true"  >
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" placeholder="Enter password" name="password" required>
            </div>
            
            <br>
            <div class="checkbox form-group">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-default btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
              <button type="submit" class="btn btn-default btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>  
          </form>
        </div>
        <div class="modal-footer">
          
          <p><a href="forgotpass.php">Forgot Password?</a></p>
        </div>
      </div>
    </div>
</div> 
    </body></html>