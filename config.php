<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];


    //connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "zd#qDtgR";
    $database = "formuser";

    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    $password = $_POST['password'];

    $number = preg_match('@[0-9]@', $password);


    if (strlen($password) < 6 || !$number) {
        echo "Password must be at least 6 characters in length and must contain at least one number.";
    } else {
        echo "Your password is strong.";

        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `phonenumber`, `password`) VALUES ('$firstname', '$lastname', '$phonenumber', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        } else {
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
    }}

?>
