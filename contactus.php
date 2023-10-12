<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodVilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
 form {
            border: 2px solid black;
            border-style: double;
            
            height: fit-content;
            width: fit-content;
            margin: auto;
            padding: 15px;
            margin-top: 70px;
            background-color: rgb(255, 216, 202);

        }
        h3 {
            color: black;
            text-align: center;
            text-decoration: underline;
            /* text-decoration: dotted; */
            text-shadow: 2px 2px 5px crimson;
        }
        button {
            background-color: crimson;
            color: white;
            font: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
          
        }
        body {
            background-image: url(backgroung\ image.jpg);
            background-repeat: no-repeat;
            background-repeat: no-repeat;
            background-size: 1700px 900px;

        }
        input, select{
            float: right;
           
        }

        sup {
            color: red;
        }
/* h3{
    text-decoration: underline;
    text-shadow: 2px 2px 5px crimson;
} */
.button{
    background-color: crimson;
   font-weight: bold;
   font-size: large;
}
.button:hover{
    opacity: 0.7;
}

    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">FoodVilla</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservation.php">Reservation</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "foodvilla";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
      die("connection unsuccessful: " . mysqli_connect_error());
    } else {
      // echo "successfully connected.";
      $sql = "INSERT INTO `contact us` ( `name`, `phone`, `email`, `message`, `time`) VALUES ('$name', '$phone', '$email', '$message', current_timestamp())";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your entry message been submitted succesfully.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
      } else {
        echo "Your message is not submitted successfully because of this error-->" . mysqli_error($conn);
      }
    }
  }

  ?>

<form action="/FoodVilla/contactus.php" method="POST">
        <h3>Contact Us</h3>
        <div>Name<sup>*</sup><input type="text" name="name" placeholder="Your Name"></div><br>
        <div>Phone number<sup>*</sup><input type="text" name="phone" placeholder="Phone number"></div><br>
        <div>Email ID <input type="email" name="email" id="" placeholder="Email ID"></div><br>
        <div>Message<sup>*</sup>
  <textarea name="message" id="" cols="20" rows="3" placeholder="Your Message..."></textarea ><br><br>
       
        <button class="but" type="reset">Reset</button>&nbsp;
        <button class="but" type="submit">Submit</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>