<?php

  $servername = "sql107.byethost9.com";
  $username = "b9_26678201";
  $password = "12345678";
  $dbname = "b9_26678201_RMDATABASE";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

  if (isset($_POST["Submit"])) {
    $search = mysqli_real_escape_string($connection,$_POST["Search"]);

    $query = "SELECT * FROM Players INNER JOIN Positions ON Players.Jersey_id=Positions.Jersey_id INNER JOIN Location ON Players.Last_Name=Location.Last_Name WHERE First_Name LIKE '%".$_POST["Search"]."%'
              OR Last_Name LIKE '%".$_POST["Search"]."%' OR Jersey_id LIKE '%".$_POST["Search"]."%' OR Country LIKE '%".$_POST["Search"]."%'";

    $result = mysqli_query($connection, $query);

    if ($result) {

      while ($row = mysqlI_fetch_assoc($result)) {
        echo "Matched search results.","<br>";
        echo "<tr>";
        echo "Jersey_id: ","<td>" .$row["Jersey_id"]."</td>"," ";
        echo "Name: ","<td>" .$row["First_Name"]." " .$row["Last_Name"]."</td>"," ";
        echo "Agents Email: ","<td>" .$row["Email"]."</td>"," ";
        echo "Weekly wage: ","<td>".$row["Weekly_wage"]."</td>"," ";
        echo "Country :","<td>".$row["Country"]."</td>","<br>";
        echo "</tr>";
      }
    }
    if (mysqlI_num_rows($_result) == 0) {
      echo "No such entry found";
    }
  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>REAL MADRID PLAYER DATABASE</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="POST">
      <label>Search</label>
      <input type = "text" placeholder="Search here" name="Search" required>
      <input type = "Submit" name="Submit" value="Search">
    </form>
    <table>
      <tr>
        <th>Jersey Number</th>
        <th>Player Name</th>
        <th>Agents Email</th>
        <th>Weekly salary</th>
        <th>Country</th>
      </tr>

      <?php

        $servername = "sql107.byethost9.com";
        $username = "b9_26678201";
        $password = "12345678";
        $dbname = "b9_26678201_RMDATABASE";

        $connection = mysqli_connect($servername, $username, $password, $dbname);

        if (!$connection) {
          echo "Cannot connect to database";
        } else {
          echo "Hala Madrid <br>";
        }

        $sql = "SELECT * FROM Players INNER JOIN Positions ON Players.Jersey_id=Positions.Jersey_id
                  INNER JOIN Location ON Players.Last_Name=Location.Last_Name";
        $result = mysqli_query($connection, $sql);

        if ($result) {
          echo "Record fetched.<br>";
          while ($row = mysqlI_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row["Jersey_id"]."</td>";
            echo "<td>".$row["First_Name"]." ".$row["Last_Name"]."</td>";
            echo "<td>".$row["Email"]."</td>";
            echo "<td>".$row["Weekly_wage"]."</td>";
            echo "<td>".$row["Country"]."</td>";
            echo "</tr>";
          }
        } else {
          echo "Error:".$sql."<br>".mysqli_error($connection);
        }

        mysqli_close($connection);
       ?>
    </table>
  </body>
 </html>
