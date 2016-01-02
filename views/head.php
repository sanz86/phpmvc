<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Melbourne Cheapest Cab, Taxi Booking, Cab Booking</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL; ?>public/css/stylish-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap-datetimepicker.min.css" />

    <!-- Custom Fonts -->
    <link href="<?php echo URL; ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL; ?>public/http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo URL; ?>public/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="<?php echo URL; ?>public/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo URL; ?>">MCC</a>
		</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#top">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#Booking">Booking</a></li>
        <li><a href="#contact">Contact</a></li>

       </ul>
       <ul class="nav navbar-nav navbar-right">
         <?php 
                Session::init();
                if(Session::get('loggedIn')) {
                	?>
                	<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo Session::get('username'); ?><span class="caret">	</span></a>
			          <ul class="dropdown-menu">
			            <li><a  data-toggle="modal" data-target="#mycpModal">Change Password</a></li>
			            <li><a href="<?php echo URL;?>logout">Logout</a></li>
			          </ul>
			        </li>
			        <?php }  else { ?>
                 	<li class="dropdown">
			          <a  data-toggle="modal" data-target="#myModal">Sign In</a>
			        </li>
              <?php  }?>
                	
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Please Login Here</h4>
		      </div>
		      <div class="modal-body">
		       <form class="form-horizontal" method="post" action="<?php echo URL; ?>login">
                    <fieldset>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="Enter Name" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
		      </div>
		    </div>
		  </div>
		</div>
        </div>
        
        <!-- Modal -->
		<div class="modal fade" id="mycpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
		      </div>
		      <div class="modal-body">
		       <form class="form-horizontal" method="post" action="<?php echo URL; ?>login/cp">
                    <fieldset>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="pass1" name="pass1" type="text" placeholder="Enter New Password" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="Re Enter New Password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
		      </div>
		    </div>
		  </div>
		</div>
