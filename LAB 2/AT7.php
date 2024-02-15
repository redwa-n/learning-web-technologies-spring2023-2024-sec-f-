<html>

<head>
    <title>Task 7</title>
</head>

<body>
    <table>
        <tr>
            <th>Stars</th>
            <th>Numbers</th>
            <th>Letters</th>
        </tr>
        <tr>
            <td>
                <?php
               
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j <= $i; $j++) {
                        print("*");
                    }
                    print("<br>");
                }
                ?>
            </td>
            <td>
                <?php
           
                for ($i = 3; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        print($j . " ");
                    }
                    print("<br>");
                }
                ?>
            </td>
            <td>
                <?php
               
                $word = 'A';
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j <= $i; $j++) {
                        print($word++ . " ");
                    }
                    print("<br>");
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>