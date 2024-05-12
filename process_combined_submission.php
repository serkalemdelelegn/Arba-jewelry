<?php
session_start();
include_once('./database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submission-type'])) {
        $submissionType = $_POST['submission-type'];

        if ($submissionType == 'email') {
            // Handle email and name submission
            if (isset($_POST['email']) && isset($_POST['name'])) {
                $email = $_POST['email'];
                $name = $_POST['name'];

                // Insert the email and name into your database
                $sql = "INSERT INTO submissions (email, name) VALUES ('$email', '$name')";
                if (mysqli_query($con, $sql)) {
                    echo "Submitted successfully.";
                    header("location: home.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
            } else {
                echo "Email and Name fields are required.";
              
            }
        } elseif ($submissionType == 'jewelry') {
            // Handle jewelry prescription submission
            if (isset($_POST['jewelry-prescription'])) {
                $jewelryPrescription = $_POST['jewelry-prescription'];

                // Insert the jewelry prescription into your database
                $sql = "INSERT INTO jewelry_submissions (description) VALUES ('$jewelryPrescription')";
                if (mysqli_query($con, $sql)) {
                    echo "Jewelry prescription submitted successfully.";
                    header("location: home.php");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
            } else {
                echo "Jewelry prescription field is required.";
            }
        } else {
            echo "Invalid submission type.";
        }
    } else {
        echo "Submission type is required.";
    }
}
?>
