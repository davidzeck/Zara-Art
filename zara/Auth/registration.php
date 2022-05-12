
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div clas="reg-box">
            <div class="row">
                <div class="col-md-6">
                <h2>Register</h2>
                    <form method="post" action="../back-ends/registeration.inc.php">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" name="fName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" name="lName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Send to:</label>
                            <input type="text" name="sendTo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Drop off</label>
                            <input type="text" name="dropOff" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Telephone Number</label>
                            <input type="tel" name="tNumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div><div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm-password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        <a href="login.php">Proceed to login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    require("../back-ends/registeration.inc.php");
}
?>