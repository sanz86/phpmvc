<?php include 'views/head.php';?>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="<?php echo URL; ?>"  onclick = $("#menu-close").click(); >Home</a>
            </li>
  
            
        </ul>
    </nav>

    <!-- Header -->
    
     <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Melbourne Cheapest Cab</h1>
            <h3><b>Taxi Booking, Cab Booking</b></h3>
            <h3><b>Sorry!!! This page is not Available</b></h3>
            <br>
            <a href="<?php echo URL; ?>" class="btn btn-dark btn-lg">Go to Site</a>
        </div>
    </header>

    <?php include 'views/foot.php';?>