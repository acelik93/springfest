<?php 
include 'dbh.php';
include 'header.php';
require 'table.php';
$message = '';

if($_SESSION['logged_in'] != 'YES'){
    header("Location: login.php"); 
}
$conn=mysqli_connect("localhost","root","","spring_fest");
$result= mysqli_query($conn,'SELECT * FROM chatroom');
?>

<body class="chat">
<section class="chat">
       <div class="shouts">
                <ul>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['uid'] ?></strong>: <?php echo $row['message'] ?></li>
                <?php endwhile; ?>
                </ul>
            </div>
    <form class="form-horizontal" action="includes/chat.inc.php" method="POST">
    <div class="form-group">
        <label for="message" class="control-label col-xs-4">Message</label>
        <div class="col-xs-5">
             <textarea type="text" class="form-control" rows="5" name="message" placeholder="Message" required></textarea>
             <input type="hidden" name="uid" value="<?php  echo $_SESSION['uid']; ?>" />
        </div>
    <div class="form-group">
        <div class="col-xs-offset-8 col-xs-5">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </div>
    </div>
</form>
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