<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="array3.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movie = array(
            array('Si Bolang',2000,9.0),
            array('Dudung',2017,7.9),
            array('Satria Bima X',2019,9.3),
            array('Doraemon',2000,9.8)
        );

        echo "<tr>"; 
            echo "<td>". $movie[0][0] ."</td>";
            echo "<td>". $movie[0][1] ."</td>";
            echo "<td>". $movie[0][2] ."</td>";
        echo "</tr>";
        echo "<tr>"; 
            echo "<td>". $movie[1][0] ."</td>";
            echo "<td>". $movie[1][1] ."</td>";
            echo "<td>". $movie[1][2] ."</td>";
        echo "</tr>";
        echo "<tr>"; 
            echo "<td>". $movie[2][0] ."</td>";
            echo "<td>". $movie[2][1] ."</td>";
            echo "<td>". $movie[2][2] ."</td>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>