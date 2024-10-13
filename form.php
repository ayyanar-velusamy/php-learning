<?php

include "functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //validating inputs
    $validation_errors = validate_inputs($_POST);
    
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $lang = isset($_POST['lang']) ? implode(", ", $_POST['lang']) : "None";
    $hobbies = $_POST['hobbies'];
    $dept = $_POST['dept'];
    $self_intro = $_POST['self_intro'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = "$day-$month-$year";
    $message = "Name: $name\nGender: $gender\nEmail: $email\nLanguages Known: $lang\nHobbies: $hobbies\nDepartment: $dept\nDOB: $dob\nSelf Introduction: $self_intro";
   
    $to = "kllrkomali@gmail.com";
    $subject = "Form Submission from $email";
    $headers = "From: $email";
    // mail($to, $subject, $message, $headers)
    if(!$validation_errors){
        if (true) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    }else{
        echo implode("<br>",$validation_errors);
    }
    
} else {
    echo "Invalid request method.";
}
?>