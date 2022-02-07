<?php

include 'connection/connection.php';

$sql = "SELECT * from message  WHERE date = CURDATE()";

echo "<table> <tr>
<th>Name</th>
<th>Phone number</th>
<th>Email</th>
<th>Message</th>
<th>Date</th>

</tr>";
$result = mysqli_query($con, $sql)
		Or die("<p>Unable to execute the query.</p>"
		. "<p>Error code ". mysqli_error($con)) . "</p>";
        $NumRows = mysqli_num_rows($result);
        $NumFields = mysqli_num_fields($result);
        if ($NumRows != 0 && $NumFields != 0)
		echo "<h1>Your messages for today:</h1>";
        if ($result){


            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                      <td>". $row["name"]. "</td>
                      <td>". $row["pnum"]. "</td>
                      <td>". $row["email"]. "</td>
                      <td>". $row["description"]. "</td>
                      <td>". $row["date"]. "</td>";
            }
          }
          
          echo "</table>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          $sql2 = "SELECT * from pickup WHERE date > NOW()";

echo "<table><tr>
<th>Name</th>
<th>Phone number</th>
<th>Email</th>
<th>Address</th>
<th>Date</th>
<th>Time</th>
<th>Extra Information</th>
</tr>";
$result2 = mysqli_query($con, $sql2)
		Or die("<p>Unable to execute the query.</p>"
		. "<p>Error code ". mysqli_error($con)) . "</p>";
        $NumRows2 = mysqli_num_rows($result2);
        $NumFields2 = mysqli_num_fields($result2);
        if ($NumRows2 != 0 && $NumFields2 != 0)
		echo "<h1>Up coming schduale for pickups</h1>";
        if ($result2){


            // output data of each row
            while($row2 = mysqli_fetch_assoc($result2)) {
                echo "<tr>
                      <td>". $row2["name"]. "</td>
                      <td>". $row2["pnum"]. "</td>
                      <td>". $row2["email"]. "</td>
                      <td>". $row2["address"]. "</td>
                      <td>". $row2["date"]. "</td>
                      <td>". $row2["time"]. "</td>
                      <td>". $row2["description"]. "</td>";
            }
          }
          
          echo "</table>";
          mysqli_close($con);
?>
<style>
    table{
        padding:auto;
        margin:auto;
        width: 80%;
        border-collapse: collapse;
        background-color: silver;
    }
    table, td, tr,th{
        border: 2px solid black;
    }
    h1{
        width:25%;
        color: black; 
        font-family: 'Trocchi', serif;  
        font-weight: normal; 
        line-height: 48px; 
        margin-bottom:20px;
        background-color:silver;
        box-shadow: 3px 1px 1px black;
    }
</style>