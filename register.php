
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
    <?php
        if (isset($_POST['create'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];

            echo $firstname ."". $lastname ."". $phonenumber ."". $password;

        }
    ?>
</div>

<div>
    <form action="register.php" method="post">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <h1>Registration</h1>
                    <p>Fill up the form with correct values.</p>
                    <hr class="mb-3">
                    <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" id="firstname" type="text" name="firstname" required>

                    <label for="lastname"><b>Last Name</b></label>
                    <input class="form-control" id="lastname"  type="text" name="lastname" required>
\
                    <label for="phonenumber"><b>Phone Number</b></label>
                    <input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

                    <label for="password"><b>Password</b></label>
                    <input class="form-control" id="password"  type="password" name="password" required>
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                </div>
            </div>
        </div>
    </form>
</div>

</body>
