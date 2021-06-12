<?php

  /*$fname=  $_POST['fname'];
  $lname=  $_POST['lname'];
  $email=  $_POST['email'];
  $pass1=  $_POST['pass1'];
  $pass2=  $_POST['pass2'];
  $day=  $_POST['day'];
  $month=  $_POST['month'];
  $year=  $_POST['year'];
  $gender=  $_POST['gender'];

  if (!empty($fname) || !empty($lname) || !empty($email) || !empty($pass1) || !empty($pass2) || !empty($day)
  || !empty($month) || !empty($year) || !empty($gender)){
       
    $host = "localhost";
    $dbUsername = "root";
    $dbpassword = "";
    $dbname = "youtube1";

    //creating connection
    $conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error(' . mysqli_connect_errno().')' . mysqli_connect_error());
    }else{
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (fname, lname, email, pass1, pass2, day, month, year, gender) values(?,?,?,?,?,?,?,?,?)";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssssi", $fname, $lname, $email, $pass1, $pass2, $day, $month, $year, $gender );
            $stmt->execute();
            echo "You are registered successfully";
        }else{
            echo "You are already registered";
        }
        $stmt->close();
        $conn->close();
    }

  }else{
      echo "All field are required";
      die();
  }*/
?>



