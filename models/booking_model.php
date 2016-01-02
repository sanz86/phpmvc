<?php

class Booking_Model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	
	public function saveBooking($booking)
	{
		

		$sth = $this->db->prepare("INSERT into booking 
			(booking_id, phone_number, email, name,source_point,destination_point, number_of_adult_passenger,number_of_child_passenger
				, time_of_travel, date_of_travel,message, create_date, status)	
				values		
		(:booking_id, :phone_number, :email, :name,:source_point,:destination_point, :number_of_adult_passenger, :number_of_child_passenger,:time_of_travel, :date_of_travel,:message, :create_date, 'Y')");
		
		
		$sth->execute(array(
				':booking_id' => $booking->booking_id,
				':phone_number' => $booking->phone_number,
				':email' => $booking->email,
				':name' => $booking->name,
				':source_point' => $booking->source_point,
				':destination_point' => $booking->destination_point,
				':number_of_adult_passenger' => $booking->number_of_adult_passenger,
				':number_of_child_passenger' => $booking->number_of_child_passenger,
				':time_of_travel' => $booking->time_of_travel,
				':date_of_travel' => $booking->date_of_travel,
				':message' => $booking->message,
				':create_date' => date('Y-m-d H:i:s')
		));
	
		
		//$data = $sth->fetchAll();
	
		$count =  $sth->rowCount();
		if ($count > 0) {
		return true;
		} else {
			return false;
		}
	
	}
	
	public function CancelBooking($bookingId)
	{
	
		$query = $this->db->prepare("UPDATE booking set status ='N' where booking_id = '".$bookingId."'");
	
		$query->execute();
			
		return  true;
	
	}
	
	public function getBookingById($bookingId)
	{
		
		$query = $this->db->query("SELECT * from booking where booking_id = '".$bookingId."'");
		
		$query->setFetchMode(PDO::FETCH_CLASS,'Booking_Class');
		
		$r = $query->fetchAll();
			
		return  $r;
	
	}
	
	public function getBookingAll()
	{
	
		$query = $this->db->query("SELECT * from booking WHERE status = 'Y' order by id DESC");
	
		$query->setFetchMode(PDO::FETCH_CLASS,'Booking_Class');
	
		$r = $query->fetchAll();

		return  $r;
	
	}
	
	public function getBookingCancelled()
	{
	
		$query = $this->db->query("SELECT * from booking WHERE status = 'N' order by id DESC");
	
		$query->setFetchMode(PDO::FETCH_CLASS,'Booking_Class');
	
		$r = $query->fetchAll();
	
		return  $r;
	
	}
}