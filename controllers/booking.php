<?php
class Booking extends Controller {
	function __constructor() {
		//;
		Session::init();
	}
	
	function index() {
		$this->view->renderWithSection('booking/index','booking');
	}
	
	function add() {
		
		
		$this->booking = new Booking_Class();
		$this->booking->booking_id =  'BK'.date("ymdHis");
		$this->booking->name = $_POST['name'];
		$this->booking->email = $_POST['email'];
		$this->booking->phone_number = $_POST['phone'];
		$this->booking->source_point = $_POST['source'];
		$this->booking->destination_point = $_POST['destination'];
		$this->booking->time_of_travel = $_POST['time'];
		$this->booking->date_of_travel = $_POST['date'];
		$this->booking->number_of_adult_passenger =  $_POST['adults'];
		$this->booking->number_of_child_passenger =  $_POST['children'];
		$this->booking->message = $_POST['message'];
		
		if ($this->model->saveBooking($this->booking))
		{	
			$from_email = "sanjibdas86@gmail.com";
			$mail = new Mail();
			$mail->to = $this->booking->email;
			$mail->subject = 'Booking Successfull';
			$mail->message = 'Booking with '.$this->booking->booking_id.' is successful';
			$mail->headers = "From: Sanjib <$from_email>\r\n";
			
			Mailer::sendMail($mail);
			
			$this->view->msg = 'BS';
			$this->view->booking = $this->booking;
		}
		else 
			$this->view->msg = 'Booking Unsuccessfull!!';
		header('location: '.URL.'booking/getbooking/'.$this->booking->booking_id);
		
	}
	
	function all() {
		
		$booking = $this->model->getBookingAll();
		
		$this->view->booking = $booking;
		$this->view->render('booking/index');
	}
	
	function cancelled() {
	
		$booking = $this->model->getBookingCancelled();
	
		$this->view->booking = $booking;
		$this->view->cancel = true;
		$this->view->render('booking/index');
	}
	
	function cancel($bookingId) {
	
		$this->model->CancelBooking($bookingId);
		$this->view->render('booking/index');
	}
	
	function getbooking($bookingId) {
		
		$booking = $this->model->getBookingById($bookingId);
		
		$this->view->booking = $booking;
		$this->view->render('booking/index');
	}
	
	function id() {
		
		$bookingId = isset($_POST['id'])?$_POST['id']:null;
	
		$booking = $this->model->getBookingById($bookingId);
	
		$this->view->booking = $booking;
		$this->view->render('booking/index');
	}
}