<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
</head>
<body>

<div style="max-width: 500px; margin: 100px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
  <h1 style="text-align: center; margin-bottom: 30px; color: #333;">K-R Event Management</h1>
  <form style="text-align: center;" action="../controller/loginCheck.php" method="post" enctype=""> <!-- Specify action and method for form submission -->
    <div style="margin-bottom: 20px;">
      <label for="username" style="display: block; margin-bottom: 5px; color: #555;text-align: left;">Username</label>
      <input type="text" id="email" name="username" placeholder="Enter your username" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div style="margin-bottom: 20px;">
      <label for="password" style="display: block; margin-bottom: 5px; color: #555; text-align: left;">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div style="display: flex; justify-content: space-between; align-items: center;">
      <a href="home.php" style="padding: 10px 20px; background-color: #ccc; color: #333; text-decoration: none; border: none; border-radius: 5px;">Back to Homepage</a>
      <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Login</button>
    </div>
  </form>
  <p style="margin-top: 20px; font-size: 14px; color: #888;">Don't have an account? <a href="signup.php" style="color: #007bff; text-decoration: none;">Sign up</a></p>
  <a href="forgotpassword.php" style="color: #007bff; text-decoration: none;">Forget Password</a>
</div>

<div style="background-color: black; color: white; text-align: center; padding: 10px;">
©️ Kazi_Redwan_46069@2024

<div style="display: flex; justify-content: space-between; padding: 20px;">
  <div style="width: 23%;">
    <h3 style="color: white; border-bottom: 1px solid red;">Coverage District</h3>
    <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
      <li>Dhaka</li>
      <li>Chittagong</li>
      <li>Rajshahi</li>
      <li>Sylhet</li>
      <li>Khulna</li>
      <li>Barisal</li>
      <li>Rangpur</li>
    </ul>
    <hr style="border-color: red;">
  </div>

  <div style="width: 23%;">
    <h3 style="color: white; border-bottom: 1px solid red;">Career</h3>
    <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
      <li>Event Manager</li>
      <li>Marketing Executive</li>
      <li>Event Coordinator</li>
      <li>Graphic Designer</li>
      <li>Logistics Manager</li>
      <li>PR Manager</li>
      <li>Finance Manager</li>
    </ul>
    <hr style="border-color: red;">
  </div>

  <div style="width: 23%;">
    <h3 style="color: white; border-bottom: 1px solid red;">Event & Exhibition Logistic</h3>
    <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;  ">
      <li>Aluminium German Hanger</li>
      <li>Event Tent/Canopy Rental</li>
      <li>Octanorm Stall Rent</li>
      <li>Event / Exhibition Furniture</li>
      <li>LED Wall on Rent</li>
      <li>Digital Signage KIOSK Display</li>
      <li>LED Plasma TV</li>
      <li>All Rental Items</li>
    </ul>
    <hr style="border-color: red;">
  </div>

  <div style="width: 23%;">
    <h3 style="color: white; border-bottom: 1px solid red;">CONTACT INFO</h3>
    <p style="color: white;">Dhaka Office: Kuril, Dhaka-1229, Bangladesh</p>
    <p style="color: white;">Mobile: +880 18**********</p>
    <p style="color: white;">Mobile: +880 16**********</p>
    <hr style="border-color: red;">
  </div>
</div>

</div>

</body>
</html>
