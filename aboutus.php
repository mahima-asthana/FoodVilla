<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodVilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>

h3{
    text-decoration: underline;
    text-shadow: 2px 2px 5px crimson;
}
.button{
    background-color: crimson;
   font-weight: bold;
   font-size: large;
}
.button:hover{
    opacity: 0.7;
}
.about{
            /* border: 2px solid black; */
            margin: auto;
            margin-top: 50px;
            width: 700px;
            height: 800px;
            padding: 30px;
            background-color: rgb(255, 216, 202);
            border-style: double;
            

        }
        h1{
            text-align: center;
            text-shadow: 2px 2px 5px crimson;
            text-decoration: underline;
        }
        h3{
            text-shadow: 2px 2px 5px crimson;
            text-decoration: dotted black;
        }
        
body{
    background-color: rgb(231, 156, 129);
    /* opacity: 0.3; */
    background-image: url(backgroung\ image.jpg);
    background-repeat: no-repeat;
    background-size: 1600px 1300px;
    /* border-image: space; */
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

<div class="about">
        <h1>About us</h1>
        <h3>Overview</h3>
        <p>
        <p> Welcome to FoodVilla, your new dining destination. Adorned with an interior that has the right
            touch of panache. The tables here are comfortable. Here you relish the taste that melts in your mouth.</p>

        <p>We offer a variety of food to appease your taste buds. Indian, Tandoori, Naan, Raita, Paratha, Roti, Paneer,
            Rice – you name it. What’s more, we also have a special Indian section serving best home made food like
            taste made by our adroit chefs. Come and Experience it. Apart from the above menu, we provide a variety of
            salads, a wide array of starters, Only pure Veg main course and Indian desserts.</p>

        <p>Your safety is our priority. Our kitchen maintains the highest standard of hygiene. We use purified water and
            all the food is cooked in refined oil. We make sure that our food is wholesome in terms of quality and
            hygiene.</p>
        </p>
        <img style="padding: 10px; height: 300px; width: 630px" src="about.jpeg" alt="">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>