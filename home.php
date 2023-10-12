<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodVilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>

/* .poster{
    border: 4px solid black;
    text-align: center;
    font-weight: bold;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-color: crimson;
    color: white;
    height: 45px;
    margin: 10px;
    padding: 10px;
    margin-top: 40px;
} */
body{
  background-image: url(background\ restro.jpeg);
  background-repeat: no-repeat;
  background-size: 100% 600px;
  background-color:  rgb(255, 216, 202);

}
#content{
   /* justify-content: center; */
   /* margin: auto; */
    border: 2px solid black;
    margin: auto;
    margin-top: 600px;
text-align: center;
width: 700px;
height: 300px;
padding: 20px;
background-color: rgb(248, 184, 184);


}
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

<!-- <div class="poster">
        Restaurant timings - 8:00 AM - 11:00 PM
    </div> -->

    <div id="content">
        <h3>Welcome to FoodVilla</h3>
        FoodVilla is one of the family Restaurant in Bareilly with a specious arrangement. Food items found in national cuisines across the UP, Punjab, Mumbai, Delhi are available. FoodVilla showcases inventive Indian cuisine by complementing the flavours and traditions of India with global ingredients and techniques.
        <br><br>
        <button class="button"><a href="menu.php"> Check our Menu</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>