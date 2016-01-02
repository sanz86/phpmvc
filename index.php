<?php 

require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';
// Library
require 'libs/Database.php';
require 'libs/Session.php';

require 'config/paths.php';
require 'config/database.php';

//classes
require 'classes/booking_class.php';
require 'classes/user_class.php';
require 'classes/mailer.php';

$app = new Bootstrap();