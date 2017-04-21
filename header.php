<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laurea SpringFest2017</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" style = "color: #900C3F">Welcome To SpringFest2017</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                       <li>
                        <a style = "color:#900C3F" href="index.php">Home</a>
                    </li>
                    <li>
                        <a style = "color:#900C3F" href="festival.php">Festival</a>
                    </li>
                    <li>
                        <a style = "color:#900C3F" href="contact.php">Contact</a>
                    </li>  
                    <li>
                        <a style ="color:#900C3F" href="map.php">Map</a>
                        </li>
                               <?php 
                                    if (isset($_SESSION['id'])){
                                   echo 
                                   "<li>
                        <a style ='color:#900C3F' href='profile.php'>Profile</a>
                                </li>
                                <li>
                        <a style ='color:#900C3F' href='chat.php'>Chatroom</a>
                                </li>
                                   <li>
                        <a style='color:#900C3F' type='button' href='includes/logout.inc.php'> Log Out </a>
                                    </li>";
                                    } else{
                                       echo 
                    "<li>
                        <a style ='color:#900C3F' href='login.php'>Login</a>
                    </li>
                        <li>
                        <a style ='color:#900C3F' href='signup.php'>Sign Up</a>
                    </li> ";                    
                                    }
                                ?>
                          
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</head>
