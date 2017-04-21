<?php 
include 'dbh.php';
include 'header.php';
$message = '';

if($_SESSION['logged_in'] != 'YES'){
    header("Location: login.php"); 
}

if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    }

    // Here's a welcome message function
function welcomeMessage() {
           echo "<a href=#>Welcome, $_SESSION[uid] here you can update your information.</a>";
         }
?>

<body class="profile">
<section class="profile">
<h3 style="text-align:center">Update Profile</h3><br>
<form class="form-horizontal" action="includes/update.inc.php" method="POST">
     <div class="form-group">
    <div class="form-group">
                <!-- Calling the welcomeMessage function -->
           <center> <?php welcomeMessage(); ?> </center>
        <label for="inputEmail" class="control-label col-xs-4">Username</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="uid" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-4">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="pwd" placeholder="Password">
        </div>
    </div>
        <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-4">Confirm Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="confirm_pwd" placeholder="Password">
        </div>
        <input type="hidden" name="id" value="<?php  echo $_SESSION['id']; ?>" />
         <input type="hidden" name="uid_original" value="<?php  echo $_SESSION['uid']; ?>" />
         <input type="hidden" name="pwd_original" value="<?php  echo $_SESSION['pwd']; ?>" />
    </div>
    <div class="form-group">
        <div class="col-xs-offset-8 col-xs-5">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
<p style="text-align:center"><?php echo $message; ?></p><br>

<div class="delete">
<h3 style="text-align:center">Changed your mind?</h3><br>
<h4 style="text-align:center"> Delete your account </h4><br>
<form class="form-horizontal" action="includes/delete.inc.php" method="POST">
<input type="hidden" name="id" value="<?php  echo $_SESSION['id']; ?>" />
<div class="form-group">
    <div class="col-xs-offset-5 col-xs-4">
<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Delete your account</button>
</div>
    </div>
</form>
</div>
</section>

            <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>