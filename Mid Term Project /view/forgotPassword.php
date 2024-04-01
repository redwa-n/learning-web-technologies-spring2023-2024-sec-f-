<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
</head>
<body>
    
    <table style="width:30%;" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/otpsend.php" enctype="">
                <fieldset>
                    <legend>Forgot Password</legend>
                    Email:<input type="email" name="email" placeholder="i.e. anything@example.com" value="" ><br>
                    <hr>
                    <input type="submit" name="submit" value="Send OTP" /> <br>
                </fieldset>
            </td>
        </tr>
    </table>
</body>
</html>



<!-- <?php
                        // if (isset($_POST["submit"])){
                        //     $email = $_POST["email"];
                        //     if (empty($email)){
                        //         echo "Cannot be empty";
                        //     }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        //         echo "Invalid email address formate!";
                        //     }else{
                        //         $email;
                        //     }
                        // }
                    ?>                     -->