<!DOCTYPE html>
<head>
    <title>Registration Form - Output</title>
    <style>
        body {
            background-color: skyblue;
        }
        .output {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="output">
        <?php
        if  {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $gender = $_POST["gender"];
            $academic_year = $_POST["academic_year"];
            $email = $_POST["email"];
            $phone_number = $_POST["phone_number"];

            echo "First Name: $first_name<br>";
            echo "Last Name: $last_name<br>";
            echo "Username: $username<br>";
            echo "Password: $password<br>";
            echo "Gender: $gender<br>";
            echo "Academic Year: $academic_year<br>";
            echo "Email: $email<br>";
            echo "Phone Number: $phone_number<br>";
        }
        ?>
    </div>
</body>
</html>
