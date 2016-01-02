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
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/stylish-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/bootstrap-datetimepicker.min.css" />

    <!-- Custom Fonts -->
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="public/http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="public/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="public/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="public/#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="public/#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >MCC</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#Booking" onclick = $("#menu-close").click(); >Booking</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Melbourne Cheapest Cab</h1>
            <h3><b>Taxi Booking, Cab Booking</b></h3>
            <br>
            <a href="public/#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>A Few Words About Us</h2>
                    <div align="center">
                        <img src="public/img/about_car.png" alt="" class="img-responsive">
                    </div>
                    <p class="lead">We are not "just another taxi company"!!!!! </p>
                    <p class="lead">Maxi Taxi Melbourne Airport is a taxi company specialized in Airport transfers. we provide maxi taxi to and from Tullamarine Airport or Avalon Airport. We understands business and corporate client needs and make sure they get to airport on time keeping in mind about their comfort.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-contact">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1" >
                    <h2>Our Services</h2>
                    <hr class="small" style="color: #000">
                    <br />
                    <div class="col-lg-10 col-lg-offset-2">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <img src="public/img/economy.jpg" alt="" class="img-responsive img-circle">
                                <h4>
                                    <strong>Economy Cab Service</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="public/#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <img src="public/img/standard.jpg" alt="" class="img-responsive img-circle">
                            
                                <h4>
                                    <strong>Standard Cab Service</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="public/#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <img src="public/img/lux.jpg" alt="" class="img-responsive img-circle">
                           
                                <h4>
                                    <strong>Lux Cab Service</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="public/#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
   <section id="Booking" class="portfolio">
        <div class="container">
            <div class="row">
            <?php include 'views/booking.php';?>
            </div>
            </div>
            </section>

    <!-- Portfolio -->
    <section id="Booking" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Booking</h2>
                    <hr class="small">
                    <form class="form-horizontal" method="post" action="booking/add">
                    <fieldset>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Enter Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                            <div class="col-md-8">
                                <div class="input-group date form_datetime" data-date="2015-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="datetime">
                                    <input class="form-control" size="16" name="datetime" type="text" value="" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                </div>
                                <input type="hidden" id="datetime"  value="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <select class="form-control" name="numberofperson">
                                    <option  value="0">Select Number of Person</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>

                                </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-taxi bigicon"></i></span>
                            <div class="col-md-8" align="left">
                               <label class="radio-inline">
                                  <input id="h1" type="radio" name="cabtype" value="Cheap" >Cheap
                                </label>
                                <label class="radio-inline">
                                  <input id="h2" type="radio" name="cabtype" value="Standard" >Standard
                                </label>
                                <label class="radio-inline">
                                  <input id="h3" type="radio" name="cabtype" value="Lux" >Lux
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                    <!-- /.row (nested) -->
                    <a href="booking" class="btn btn-dark">View Your Bookings</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <hr />

    <!-- Map -->
    <section id="contact" class="services bg-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Contact Us</h2>
                <form class="form-horizontal" method="post" action="comment/add">
                    <fieldset>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Enter Name" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
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
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Melbourne Cheapest Cab</strong>
                    </h4>
                    <p>Melbourne </p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> +61412512565</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="public/mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="public/#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="public/#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="public/#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
