<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <style>



    </style>

</head>

<body>

    <div class="container">


        <form action="" method="post">

            <label>Name</label>
            <input type="text" name="name"><br><br>

            <label>Email</label>
            <input type="email" name="email"><br><br>

            <label>Password</label>
            <input type="password" name="password"><br><br>

            <label>Address</label>
            <input type="text" name="address"><br><br>

            <label>Phone</label>
            <input type="tel" name="phone"><br><br>

            <input type="submit" name="sub">

        </form>

    </div>


    <?php

    if (isset($_POST['sub'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];



        $connect = mysqli_connect('localhost', 'root', '', 'test');


        $sql = "INSERT INTO `testdata`(`name`, `email`, `password`, `address`, `phone`) VALUES ('$name','$email','$pass','$address ','$phone')";

        mysqli_query($connect, $sql);

    }





    ?>

</body>

</html>