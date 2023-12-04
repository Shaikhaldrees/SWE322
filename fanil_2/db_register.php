<?php
include_once("db_config.php");

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_result = mysqli_query($connect, "SELECT email FROM user WHERE email='$email'");
    $user_matched = mysqli_num_rows($email_result);

    if ($user_matched > 0) {
        $error_message = "User already exists with the provided email.";
    } else {
        $result = mysqli_query($connect, "INSERT INTO user(username, email, password) VALUES('$name','$email','$password')");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style-final.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* Your existing CSS styles here */
        /* ... */

        /* Add these styles for the form */
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #333;
        }

        .form-container form {
            margin-top: 20px;
        }

        .form-container table {
            width: 100%;
        }

        .form-container table tr {
            margin-bottom: 20px;
        }

        .form-container table td {
            padding: 10px;
        }

        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        .form-container input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #555;
        }

        .form-container .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .form-container p {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="bar">
			<nav>
				<label class="logo">TERRA</label>
			</nav>
		<nav>
			<ul>
                <li><i class="material-icons">menu</i></li>
                <li><a href="final%20project%20CIS201.html">HOME</a></li>
                <li><a href="WOMEN.html">WOMEN</a></li>
                <li><a href="MEN.html">MEN</a></li>
                <li><a href="EXCLUSIVE.html">EXCLUSIVE</a></li>
                <li><a href="ABOUT.html">ABOUT</a></li>
                <li><a href="db_login.php">login</a></li>
            </ul>
			<img src="imgs.fanil/dark mood.JPG" id="mood">
			<img src="imgs.fanil/emty cart.PNG" id="cart">
			<span id='item_counter'> 0 </span>
		</nav>
		</div>

    <div class="form-container">
        <h2>Register</h2>

        <form action="db_register.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="register" value="Register"></td>
                </tr>
            </table>
        </form>

        <?php
        if (!empty($error_message)) {
            echo "<p class='error'>$error_message</p>";
        } else {
            echo "<p>Already have an account? <a href='db_login.php'>Login</a></p>";
        }
        ?>
    </div>

    <script>
        // Your existing JavaScript code here
        // ...
    </script>
</body>
</html>
