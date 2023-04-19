
<body>
<div class="container">
<h2>Üzenetek</h2>

<table>
<caption>Elküldött üzenetek az adatbázisból:<br>TÁBLÁZAT</caption>
    <tr>
        <th>Név</th>
        <th>Dátum</th>
        <th>Üzenet</th>
    </tr>
    <?php
      // Loop through each record and display it in a separate line
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "</tr>";
      }
    ?>
</table>
</div>    
</body>