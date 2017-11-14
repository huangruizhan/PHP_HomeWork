<!DOCTYPE html>
<html>
<body>
  <?php
    echo '<table border = "1">';
    for($i = 1; $i <= 9 ; $i++)
    {
      echo "<tr>";
        for($j = 1; $j <= $i; $j++)
        {
          echo"<td>" . $j . "*" . $i . "=" . $i * $j . "</td>";


        }
      echo "</tr>";

    }

    echo '</table>';




  ?>
</body>
</html>
