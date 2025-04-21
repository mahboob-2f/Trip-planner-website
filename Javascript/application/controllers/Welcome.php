<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public $db; 
	 public $session; 

	public function index()
	{
		$this->load->view('index');
	}

	public function result()
	{
		$this->load->view('result');
	}
	public function order()
	{
		$this->load->view('order');
	}

	public function book()
	{
		$this->load->view('book');
	}
	public function hotelFind()
	{
		$inputData = json_decode(file_get_contents('php://input'), true);
		$hotelID = $inputData['hotelID'];
		
		$query = "SELECT * FROM hotels WHERE id = ?";
		$result = $this->db->query($query , array($hotelID))->result_array();

		if ($result) {
			echo json_encode([$result]);
		} else {
			echo json_encode(["status"=> "error", "message" => "No hotels found for then given id"]);
		}
		
	}
	public function bookRoom()
	{
		$inputData = json_decode(file_get_contents('php://input'), true);
		$hotelID = $inputData['hotelID'];
		$hotelName = $inputData['hotelName'];
		$startDate = $inputData['startDate'];
		$endDate = $inputData['endDate'];
		$userID = $inputData['userID'];
		$price = $inputData['price'];
		$pepoleValue = $inputData['pepoleValue'];
		$discount = $inputData['discount'];
		$bookingName = $inputData['bookingName'];
		$bookingEmail = $inputData['bookingEmail'];
		$bookingPhone = $inputData['bookingPhone'];
		$nights = $inputData['nights'];

		$query = "INSERT INTO book( hotelID, hotelName, startDate, endDate, userID, price, pepoleValue, nights, discount, bookingName, bookingEmail, bookingPhone) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
		$result = $this->db->query($query , [
			$hotelID,
			$hotelName,
			$startDate,
			$endDate,
			$userID,
			$price,
			$pepoleValue,
			$nights,
			$discount,
			$bookingName,
			$bookingEmail,
			$bookingPhone,
			
		]);

		if ($result) {
			echo json_encode(["status"=> "error", "message" => "Booking successful"]);
		} else {
			echo json_encode(["status"=> "error", "message" => "Booking failed"]);
		}
		
	}



	public function hotelBooking()
	{
		$inputData = json_decode(file_get_contents('php://input'), true);
		$id = $inputData['id'];
		
		$query = "SELECT b.* , h.* FROM `book` as b INNER JOIN hotels as h ON b.hotelID = h.id WHERE b.userID = ? ORDER BY b.id DESC";
		$result = $this->db->query($query , array($id))->result_array();

		if ($result) {
			echo json_encode([$result]);
		} else {
			echo json_encode(["status"=> "error", "message" => "No booking found"]);
		}
		
	}



	

	public function hotelAmenities()
	{
		$inputData = json_decode(file_get_contents('php://input'), true);
		$city = $inputData['city'];
		
		$query = "SELECT services FROM hotels WHERE city = ?";
		$result = $this->db->query($query , array($city))->result_array();

		if ($result) {
			echo json_encode([$result]);
		} else {
			echo json_encode(["status"=> "error", "message" => "No amenities found for then given city"]);
		}
		
	}

	public function hotels()
	{
		$inputData = json_decode(file_get_contents('php://input'), true);
		// echo json_encode($inputData);

		if (empty($inputData['city'])) {
			echo json_encode(["status" => "error" , "message" => "city is required"]);
		}
		
		$amenities = isset($inputData['amenities']) ? $inputData['amenities'] : [];
		$price = isset($inputData['price']) ? $inputData['price'] : [];
		$rate = isset($inputData['rating']) ? $inputData['rating'] : [];
		$city = $inputData['city'];


		// Start Query 
		$query = "SELECT * FROM hotels WHERE city = ?";
		$queryPramas = [$city];

		// Add Amenities 
		if (!empty($amenities)) {
			$likeConditions = [];

			foreach($amenities as $aminty) {
				$likeConditions[] = "services LIKE ?";
				$queryPramas[] = '%'. $aminty .'%';
			}

			$query .= " AND (" . implode(" AND " , $likeConditions) . ")";

		}

		// ADD Price

		if (!empty($price)) {
			$query .= " AND mrp <= ?";
			$queryPramas[] = $price;
		}


		// ADD Rate

		if (!empty($rate)) {
			$query .= " AND rate <= ?";
			$queryPramas[] = $rate;
		}


		$result = $this->db->query($query , $queryPramas)->result_array();

		if ($result) {
			echo json_encode([$result]);
		} else {
			echo json_encode(["status" => "error" , "message" => "Data not found"]);
		}

	}
	
}
