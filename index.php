<?php

$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "students";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".'Name_students:'."</p>";
    echo "<p>".$i['Name']."</p>";
    echo "<p>".'ID_students:'."</p>";
    echo "<p>".$i['ID']."</p>";
    echo "<p>".'CGPA_students:'."</p>";
    echo "<p>".$i['CGPA']."</p>";
    echo "<p>".'Age_students:'."</p>";
    echo "<p>".$i['Age']."</p>";
    echo "<hr>";
}