<?php
  require 'connect.php';

  echo "<section>
    <div class='container' style='margin-top: 50px;'>
      <table class='w3-table-all w3-hoverable'>
        <tr>
          <th>Id-ul comenzii</th>
          <th>Clientul</th>
          <th>Denumirea produsului</th>
          <th>Descrierea produsului</th>
          <th>Cantitatea</th>
        </tr>";
  $result = mysqli_query($conn, "SELECT o.ID, c.Name AS cName, p.Name AS pName, p.Description, oi.quantity FROM orderdata o INNER JOIN customer c ON o.customer_id = c.ID INNER JOIN orderitem oi ON oi.order_id = o.ID INNER JOIN product p ON oi.product_id = p.ID;");
  while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['cName'] . "</td>";
    echo "<td>" . $row['pName'] . "</td>";
    echo "<td>" . $row['Description'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "</tr>";
  }

  echo "</table></div></section>";
  mysqli_close($conn);
?>
