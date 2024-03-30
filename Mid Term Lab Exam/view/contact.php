<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
</head>
<body>
    <h1>Contact Me</h1>
    <form action="submit_contact_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
    <table>
        <tr>
            <td><a href="home.php">About Me</a></td>
            <td><a href="portfolio.php">Project Portfolio</a></td>
            <td><a href="photo.php">Photo Album</a></td>
        </tr>
    </table>
</body>
</html>
