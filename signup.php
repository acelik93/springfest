<?php 
include 'header.php';
require 'db.php';
include 'table.php';
?>
<body class="loginregister">

<!-- Register form -->
    <section id="festival">


        <?php 
            if (isset($_SESSION['id'])){
                echo $_SESSION['id'];
            } else{
                echo "";
            }
        ?>
        <br><br>

        <div class="form">
                <h1> Sign Up </h1>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="firstname" placeholder="Firstname" required><br>
            <input type="text" name="lastname" placeholder="Lastname" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="text" name="uid" placeholder="Username" required><br>
            <input type="password" name="pwd" placeholder="Password" required><br>
            <button type="submit" class="btn">Sign Up</button>
        </form>
    </section>
        </div>

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

</html>