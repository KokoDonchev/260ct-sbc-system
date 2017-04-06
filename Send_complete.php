<?php

//Provides link back to dashboard
echo '<a href="dashboard">Back to dashboard</a>

';

//These variables are created to access the database booking_systems
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking_system";

//The database booking_systems is then accessed using the variables defined above
$conn = new mysqli($servername, $username, $password, $database);

//The variables firstname, lastname, email and enquiry that were passed from the HTML form are used
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$enquiry=$_POST['enquiry'];

//These values are then inserted into the table responses and the variables are added to the corresponding row
$sql="INSERT INTO responses (Firstname,Surname,Email,Enquiry)
				VALUES('$firstname','$lastname','$email','$enquiry')";

//An if statement is then used where $conn is the database accessed and adding the information to the database
//If both are successful the user will be informed and if it isn't the user will be asked to fill in the form again
if ($conn->query($sql) === TRUE) {
    echo "Your enquiry has been sent successfully. We aim to be respond as fast as possible.";
} else {
    echo "There has been an error with the form submitted. Please try again." . $conn->error;
}

//It is then closed to finish
$conn->close();
?>