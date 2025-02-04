<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Classic PHP Calculator</title>

    <style>

        body {

            font-family: Arial, sans-serif;

        }

        form {

            width: 250px;

            margin: 40px auto;

            padding: 20px;

            border: 1px solid #ccc;

            border-radius: 10px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        input[type="number"] {

            width: 100%;

            height: 30px;

            margin-bottom: 10px;

            padding: 10px;

            border: 1px solid #ccc;

        }

        select {

            width: 100%;

            height: 30px;

            margin-bottom: 10px;

            padding: 10px;

            border: 1px solid #ccc;

        }

        button[type="submit"] {

            width: 100%;

            height: 30px;

            background-color: #4CAF50;

            color: #fff;

            padding: 10px;

            border: none;

            border-radius: 10px;

            cursor: pointer;

        }

        button[type="submit"]:hover {

            background-color: #3e8e41;

        }

        #result {

            font-size: 24px;

            font-weight: bold;

            color: #00698f;

        }

    </style>

</head>

<body>

    <h2>Classic PHP Calculator</h2>

    <form method="POST">

        <input type="number" name="num1" placeholder="First Number" required>

        <select name="operation">

            <option value="add">+</option>

            <option value="subtract">-</option>

            <option value="multiply">*</option>

            <option value="divide">/</option>

            <option value="exponentiation">^</option>

            <option value="square_root">√</option>

            <option value="logarithm">log</option>

            <option value="percentage">%</option>

        </select>

        <input type="number" name="num2" placeholder="Second Number" required>

        <button type="submit" name="calculate">Calculate</button>

    </form>

    <?php

    if (isset($_POST['calculate'])) {

        // Retrieve form data

        $num1 = $_POST['num1'];

        $num2 = $_POST['num2'];

        $operation = $_POST['operation'];



        // Perform the calculation based on the selected operation

        switch ($operation) {

            case 'add':

                $result = $num1 + $num2;

                break;

            case 'subtract':

                $result = $num1 - $num2;

                break;

            case 'multiply':

                $result = $num1 * $num2;

                break;

            case 'divide':

                if ($num2 != 0) {

                    $result = $num1 / $num2;

                } else {

                    $result = "Cannot divide by zero!";

                }

                break;

            case 'exponentiation':

                $result = pow($num1, $num2);

                break;

            case 'square_root':

                if ($num1 >= 0) {

                    $result = sqrt($num1);

                } else {

                    $result = "Cannot calculate square root of a negative number!";

                }

                break;

            case 'logarithm':

                if ($num1 > 0) {

                    $result = log($num1);

                } else {

                    $result = "Cannot calculate logarithm of a non-positive number!";

                }

                break;

            case 'percentage':

                $result = ($num1 / 100) * $num2;

                break;

            default:

                $result = "Invalid operation";

                break;

        }



        // Display the result

        echo "<p id='result'>Result: $result</p>";

    }

    ?>

</body>

</html>