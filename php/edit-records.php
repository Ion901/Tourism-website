<?php
session_start();
include ("connection.php");
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * from `info` WHERE id=$id");
while ($row=mysqli_fetch_row($sql)) {
    echo "<form action=\"update-records.php\" method=\"post\">\n";
    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\">\n<br>";
    echo "<label>City:</label>\n";
    echo "<input type=\"text\" name=\"city\" value=\"$row[1]\">\n<br>";
    echo "<label>Country:</label>\n";
    echo "<input type=\"text\" name=\"country\" value=$row[2]>\n<br>";
    echo "<label>Price:</label>\n";
    echo "<input type=\"text\" name=\"price\" value=$row[3]>\n<br>";
    echo "<label>Durata:</label>\n";
    echo "<input type=\"text\" name=\"durata\" value=$row[4]>\n<br>";
    echo "<label>Detalii:</label>\n";
    echo "<textarea name=\"detalii\" cols=\"90\" rows=\"30\">$row[5]</textarea>";

    echo  "<button type=\"sumbit\">Modifica</button>\n\n";
    echo  "<a href=\"../admindashboard.php?id=$id\"><button type=\"button\">Cancel</button></a>\n\n";
    echo "</form>\n";
}

?>