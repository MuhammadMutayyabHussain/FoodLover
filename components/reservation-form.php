<?php
include("helper/connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$contactnumber = $_POST['contact_number'];
	$email = $_POST['email'];
	$numberofperson = $_POST['num_person'];
	$bookdate = $_POST['book_date'];
	$yourtime = $_POST['your_time'];
	$message = $_POST['message'];
	$sql = "INSERT INTO `tablereservation` (`name`,`contactnumber`,
	`email`,`numberofperson`,`bookdate`,`yourtime`,`message`) 
	VALUES ('$name','$contactnumber','$email','$numberofperson','$bookdate','$yourtime','$message')";
	$user_query=mysqli_query($conn,$sql);
	if (!$user_query) {
		// Handle the error
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	} else {
		// Data inserted successfully
		echo "Data added successfully!";
	}
}
?>

<section id="reservation" data-background="assets/img/demo/bg/01.jpg" class="parallax-window">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="form-reservation padd-100">
							<span class="section-suptitle">
								Your Table
							</span>
							<h2 class="section-title white-font">
								Reservation Now!
							</h2>
							<form action="index.php" method="post">
								<div class="column">
									<span>
										<input type="text" name="name" placeholder="Name">
									</span>
									<span>
										<input type="text" name="contact_number" placeholder="Contact Number">
									</span>
								</div>
								<div class="column">
									<span>
										<input type="text" name="email" placeholder="Email Adress">
									</span>
									<span>
										<input type="text" name="num_person" placeholder="Number of Person">
									</span>
								</div>
								<div class="column">
									<span>
										<input type="text" name="book_date" placeholder="Booke Date">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</span>
									<span>
										<input type="text" name="your_time" placeholder="Your Time ">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
									</span>
								</div>
								<div class="column">
									<textarea name="message" placeholder="Message of Request"></textarea>
								</div>
								<div class="submit-btn">
									<button type="submit">Book Now</button>
									<input type="hidden" class="num_table" value="">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>