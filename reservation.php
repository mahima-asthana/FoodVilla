<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FoodVilla</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    form {
      border: 2px solid black;
      border-style: double;
      padding: 40px;
      margin-top: 60px !important;
      width: 50%;
      margin: auto;
      background-color: rgb(255, 216, 202);
    }


    h3 {
      color: black;
      text-align: center;
      text-decoration: underline;
      /* text-decoration: dotted; */
      text-shadow: 2px 2px 5px crimson;
    }

    sup {
      color: red;
    }

    button {
      background-color: crimson;
      color: white;
      font: bold;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }

    input {
      float: right;

    }
    body {
            background-image: url(reservation.jpeg);
            background-repeat: no-repeat;
            background-repeat: no-repeat;
            background-size: 2000px 1000px;

        }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">FoodVilla</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
    $guest = $_POST['guest'];
    $date = $_POST['date'];
    $time = $_POST['time'];

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
      $sql = "INSERT INTO `reservation` ( `name`, `phone`, `guest`, `date`, `time`) VALUES ('$name', '$phone', '$guest', '$date', '$time')";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your seat is reserved.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
      } else {
        echo "Your seat is not reserved because of this error-->" . mysqli_error($conn);
      }
    }
  }

  ?>

  <form action="/FoodVilla/reservation.php" method="POST">
    <div class="mb-3">
      <h3>RESERVATION</h3>
      <label for="exampleInputPassword1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Phone Number</label>
      <input type="number" name="phone" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Number of guests</label>
      <input type="number" name="guest" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Date</label>
      <input type="date" name="date" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Time</label>
      <input type="time" name="time" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>