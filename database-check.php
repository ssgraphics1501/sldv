<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$connect = mysqli_connect('fdb25.awardspace.net', '2980236_pramod', 'seema.pihu1971', '2980236_pramod');

$query = "select * from user";

$result = mysqli_query($connect, $query);
echo '<table border="1px black solid"';
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['user_id'];
    echo "</td><td>";
    echo $row['password'];
    echo "</td><td>";
    echo $row['headquarter'];
    echo "</td></tr>";

}

echo "</table>";

?>
</body>
</html>