<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
</head>
<body>

<div style="max-width: 500px; margin: 100px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
  <h1 style="text-align: center; margin-bottom: 30px; color: #333;">K-R Event Management</h1>
  <form style="text-align: center;" action="../controller/loginCheck.php" method="post" enctype=""> <!-- Specify action and method for form submission -->
   
    <div style="display: flex; justify-content: space-between; align-items: center;">
      <a href="home.php" style="padding: 10px 20px; background-color: #ccc; color: #333; text-decoration: none; border: none; border-radius: 5px;">Back to Homepage</a>
    
    </div>
  </form>
</div>

<table width="30%" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/signupCheck.php" enctype="">
                    <fieldset>
                        <legend><b>SIGNUP</b></legend>
                        Username:   <input type="text" name="username" value="" /> <br>
                        Email:      <input type="email" name="email" value="" /> <br>
                        Password:  <input type="password" name="password" value="" /> <br>
                                 
            
                        <input type="checkbox" name="check[]" value="" required/>I agree to the <a href="termsAndConditions.php">terms and conditions</a> <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="reset" value="Reset" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="submit" value="Submit" /><br>
                        <p>Already have an account! <a href="login.php">Sign In</a></p>
                    </fieldset>
                </form>
            </td>
        </tr>
</table>
    
    &nbsp;&nbsp;&nbsp;&nbsp;
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

