<?php
    
    // Error messages
    $nameEmptyErr = "";
    $emailEmptyErr = "";
    $educationEmptyErr = "";
    $studyEmptyErr = "";
    $yopEmptyErr = "";
    $genderEmptyErr = "";
    $hobyEmptyErr = "";
    $addressEmptyErr = "";
    $experienceEmptyErr = "";
    $coursesEmptyErr = "";
    $resumeEmptyErr = "";
    $commentEmptyErr = ""; 
    $nameErr = "";
    $emailErr = "";

    if(isset($_POST["submit"])) {
        // Set form variables
        $name           = checkInput($_POST["name"]);
        $email          = checkInput($_POST["email"]);

        if (!empty($_POST["education"])) {
            $education      = checkInput($_POST["education"]);
        }
        if (!empty($_POST["study"])) {
            $study      = checkInput($_POST["study"]);
        }
        if (!empty($_POST["yop"])) {
            $yop     = checkInput($_POST["yop"]);
        }
        if (!empty($_POST["gender"])) {
            $gender         = checkInput($_POST["gender"]);
        }
        if (!empty($_POST["hoby"])) {
            $hoby           = $_POST["hoby"];
        }
        $address        = checkInput($_POST["address"]);
        if (!empty($_POST["experience"])) {
            $experience         = $_POST["experience"];
        }
        if (!empty($_POST["courses"])) {
            $courses          = $_POST["courses"];
        }
        if (!empty($_POST["resume"])) {
            $resume          = $_POST["resume"];
        }
        $comment        = checkInput($_POST["comment"]);

        // Name validation
        if(empty($name)){
            $nameEmptyErr = '<div class="error">Name can not be left blank.</div>';
        } // Allow letters and white space 
        else if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = '<div class="error">Only letters and white space allowed.</div>';
        } else {
            echo $name . '<br>';
        }

        // Email validation
        if(empty($email)){
            $emailEmptyErr = '<div class="error">Email can not be left blank.</div>';

        } // E-mail format validation
        else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
            $emailErr = '<div class="error">Email format is not valid.</div>';
        } else {
            echo $email . '<br>';
        }

        # code...
        // Select option validation
        if(empty($education)){
            $educationEmptyErr = '<div class="error">Tell us about your education.</div>';
        } else {
            echo $education . '<br>';
        }
        if(empty($study)){
            $studyEmptyErr = '<div class="error">Tell us about your study</div>';
        } else {
            echo $study . '<br>';
        }
        if(empty($yop)){
            $yopEmptyErr = '<div class="error">Year of Passing</div>';
        } else {
            echo $study . '<br>';
        }


        // Radio button validation
        if(empty($gender)){
            $genderEmptyErr = '<div class="error">Specify your gender.</div>';
        } else {
            echo $gender . '<br>';
        }


        // Checkbox validation
        if(!empty($hoby)){                
            foreach($_POST['hoby'] as $val){
                echo $val . '<br>';
            }
        } else {
            $hobyEmptyErr = '<div class="error">What are your hobbies.</div>';
        }
         // Text-area validation
        if(empty($address)){
            $addressEmptyErr = '<div class="error">This field is required.</div>';
        } else {
                echo $address . '<br>';
        }
        }  
         // Checkbox validation
         if(!empty($experience)){                
            foreach($_POST['experience'] as $val){
                echo $val . '<br>';
            }
        } else {
            $experienceEmptyErr = '<div class="error">What are your Experience.</div>';
        }
        
        // Radio button validation
        if(empty($courses)){
            $coursesEmptyErr = '<div class="error">Specify your Course</div>';
        } else {
            echo $courses . '<br>';
        }
       // Text-area validation
       if(empty($resume)){
        $resumeEmptyErr = '<div class="error">This field is required.</div>';
    } else {
        echo $resume . '<br>';
    }
        // Text-area validation
        if(empty($comment)){
            $commentEmptyErr = '<div class="error">This field is required.</div>';
        } else {
            echo $comment . '<br>';
        }
      

    function checkInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;

    }    
?>