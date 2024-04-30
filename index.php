<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Sets the font for the page */
            background-color: #f4f4f4; /* Light grey background */
            display: flex;
            justify-content: center; /* Centers the form horizontally */
            align-items: center; /* Centers the form vertically */
            height: 100vh; /* Full height of the viewport */
            margin: 0; /* Removes default margin */
        }
        form {
            background-color: #fff; /* White background for the form */
            padding: 20px; /* Adds space inside the form */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Subtle shadow around the form */
            width: 300px; /* Sets a specific width for the form */
        }
        label {
            font-weight: bold; /* Makes labels bold */
            display: block; /* Ensures each label is on a new line */
            margin-bottom: 5px; /* Adds space below each label */
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px); /* Full width minus padding */
            padding: 10px; /* Makes text input taller and easier to interact with */
            margin-bottom: 20px; /* Adds space below each input */
            border: 1px solid #ddd; /* Light grey border */
            border-radius: 4px; /* Slightly rounded corners for inputs */
        }
        button {
            background-color: #0056b3; /* Blue background */
            color: white; /* White text */
            border: none; /* No border */
            padding: 10px 20px; /* Padding around the text */
            text-transform: uppercase; /* Uppercase text */
            border-radius: 4px; /* Rounded corners for the button */
            cursor: pointer; /* Pointer cursor on hover */
            width: 100%; /* Full width */
        }
        button:hover {
            background-color: #004494; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" name="login">Login</button>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </form>
</body>
</html>







