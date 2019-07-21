<?php include_once "./include/header.php"; ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Product sans, Helvetica, sans-serif;
  
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("headerimage.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
   
    <img src="images/headerimage.png" alt="Smiley face" width="1323" height="337">
   
    
  
  </div>
</div>
<h3>HousePlan is national website for affordable housing for Kenyan citizens.
    You'll find a wide range of house varieties from small to large</h3>
<p> 
    
 <ul>
  <li>Affordable Rent Homes</li>
  <li>Social and Council Homes</li>
  <li>Shared Ownership and starter homes</li>
  <li>Retirement,Sheltered and Assisted Living Homes</li>

 </ul> 

</p>

</body>
</html>
    

<?php include_once "./include/footer.php"; ?>
