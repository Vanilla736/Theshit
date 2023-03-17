<!DOCTYPE html>
<html>
<head>
	<title>Gym Management System - Register</title>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		.container {
			max-width: 500px;
			margin: auto;
			padding: 20px;
			background-color: #ffffff;
			border-radius: 10px;
			box-shadow: 0 0 10px #ccc;
		}
		h1 {
			font-size: 32px;
			margin-top: 0;
			margin-bottom: 20px;
			font-weight: bold;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			color: #1e1e1e;
			text-align: center;
		}
		form {
			display: flex;
			flex-direction: column;
		}
		label {
			font-size: 20px;
			margin-bottom: 10px;
			color: #1e1e1e;
		}
		input {
			font-size: 18px;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		button {
			font-size: 20px;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: #ffffff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		button:hover {
			background-color: #1e1e1e;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Create an Account</h1>
		<form action="register.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<label for="confirm-password">Confirm Password:</label>
			<input type="password" id="confirm-password" name="confirm-password" required>

			<button type="submit">Register</button>
		</form>
	</div>

    <script>
		function validateForm() {
            var firstName = document.forms["registerForm"]["firstName"].value;
            var lastName = document.forms["registerForm"]["lastName"].value;
            var email = document.forms["registerForm"]["email"].value;
            var password = document.forms["registerForm"]["password"].value;
            var confirmPassword = document.forms["registerForm"]["confirmPassword"].value;
            var emailPattern = /^\S+@\S+\.\S+$/;

            if (firstName == "" || lastName == "" || email == "" || password == "" || confirmPassword == "") {
                alert("All fields must be filled out");
                return false;
            } else if (password != confirmPassword) {
                alert("Passwords do not match");
                return false;
            } else if (!emailPattern.test(email)) {
                alert("Invalid email format");
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>
</html>
