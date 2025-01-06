<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(21, 182, 0);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, rgb(51, 92, 5), rgb(91, 248, 0));
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }

        /* Form container */
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Labels */
        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 1.1em;
            font-weight: bold;
        }

        /* Inputs */
        input[type="text"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        /* Focus states */
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="date"]:focus {
            border-color: #0072ff;
            outline: none;
        }

        /* Radio buttons styling */
        .radio-group {
            display: flex;
            flex-direction: column; /* Stack the options vertically */
            gap: 10px; /* Add spacing between options */
            margin-bottom: 15px;
        }

        .radio-group label {
            display: flex;
            align-items: center;
            font-size: 1em;
            font-weight: normal;
            cursor: pointer;
        }

        .radio-group input[type="radio"] {
            appearance: none; /* Remove default styling */
            width: 16px;
            height: 16px;
            border: 2px solid green ; 
            border-radius: 50%; /* Make it circular */
            outline: none;
            margin-right: 10px; /* Space between radio and label */
            cursor: pointer;
            transition: background-color 0.2s, border-color 0.2s;
        }

        /* Style for selected radio button */
        .radio-group input[type="radio"]:checked {
            background-color:rgb(94, 255, 0); /* Blue fill for selected */
            border-color:rgb(94, 255, 0); /* Darker border for selected */
        }

        /* Add hover effect */
        .radio-group input[type="radio"]:hover {
            border-color: #0056b3; /* Darker blue on hover */
        }

        /* Submit button */
        input[type="submit"] {
            background-color: rgb(39, 194, 0);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: rgb(117, 243, 0);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Register Form</h1>
        <form action="save.php" method="POST">
            <div class="form-field">
                <label for="sex">Sex</label>
                <div class="radio-group">
                    <label>
                        <input type="radio" id="female" name="sex" value="female">
                        Female
                    </label>
                    <label>
                        <input type="radio" id="male" name="sex" value="male"> 
                        Male
                    </label>
                </div>
            </div>

            <div class="form-field">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname">
            </div>

            <div class="form-field">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname">
            </div>

            <div class="form-field">
                <label for="birthday">Birthday</label>
                <input type="date" name="birthday">
            </div>

            <div class="form-field">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>

            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
