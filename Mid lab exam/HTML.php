<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <title>Registration Form</title>
</head>
<body>
    <main>
        <form action="process_registration.php" method="post">
            <h1>Sign Up</h1>
            <div>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>
            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>
            <div>
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" id="dob" required>
            </div>
            <div>
                <label>Gender:</label>
                <input type="radio" name="gender" value="male" id="male" required>
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Female</label>
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </main>
</body>
</html>
