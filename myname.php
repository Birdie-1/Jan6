<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4caf50, #81c784);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container */
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        /* Form Heading */
        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            color: #4caf50;
        }

        /* Labels */
        label {
            font-size: 1.1em;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        /* Inputs */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        input[type="text"]:focus {
            border-color: #4caf50;
            outline: none;
        }

        /* Submit Button */
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>PHP Form</h1>
        <form action="save.php" method="POST" name="form1">
            <label for="fname">First Name</label>
            <input type="text" name="fname" placeholder="Enter your first name">

            <label for="lname">Last Name</label>
            <input type="text" name="lname" placeholder="Enter your last name">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
