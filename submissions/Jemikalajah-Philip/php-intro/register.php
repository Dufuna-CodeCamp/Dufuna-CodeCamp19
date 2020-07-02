<?Php
$name = $lastname = $password = $email = $gender =  $phonecode = $phone = $checkbox = " ";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = test_input($_POST['name']);
    $lastname = test_input($_POST['lastname']);
    $password = test_input($_POST['password']);
    $email = test_input($_POST['email']);
    $gender = test_input($_POST['gender']);
    $phonecode = test_input($_POST['phonecode']);
    $phone = test_input($_POST['phone']);
    $checkbox = test_input($_POST['checkbox']);


    if (!empty($name) || !empty($lastname) || !empty($password) || !empty($email) || !empty($gender) || !empty($phonecode) || !empty($phone) || !empty($checkbox)) {
        require "config_register.php";
        try {
            $connection = new PDO($dsn, $dbusername, $dbpassword, $options);
            $newUser = array(
                "name" => $name,
                "lastname" => $lastname,
                "password" => $password,
                "email" => $email,
                "gender" => $gender,
                "phonecode" => $phonecode,
                "phone" => $phone,
                "checkbox" => $checkbox,
            );
            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "users",
                implode(", ", array_keys($newUser)),
                ":" . implode(", :", array_keys($newUser))
            );
            $statement = $connection->prepare($sql);
            $statement->execute($newUser);
            echo "Welcome " . $firstName . " to Up4Naija";
        } catch (PDOException $error) {
            echo $firstName . " account was not created, please try again!" . "<br>" . $error->getMessage();
        }

    } else {
        echo "All fields are required";
        die();
    }
}
