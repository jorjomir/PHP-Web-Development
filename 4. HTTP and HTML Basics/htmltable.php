<DOCTYPE html>
    <html>
    <head>
        <title>HTML Table</title>
    </head>
    <body>
    <?php
if (isset($_GET['name']) && isset($_GET['phone']) && isset($_GET['age']) && isset($_GET['address'])) {
    $name=$_GET['name'];
    $phone=$_GET['phone'];
    $age=$_GET['age'];
    $address=$_GET['address'];
    echo '<table border="2" style="background-color: orange">';
    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Phone number</td><td>$phone</td></tr>";
    echo "<tr><td>Age</td><td>$age</td></tr>";
    echo "<tr><td>Address</td><td>$address</td></tr>";
    echo "</table>";
    //echo $html;

}
    ?>
    <form>
    <input name="name"></input><br>
    <input name="phone"></input><br>
    <input name="age"></input><br>
    <input name="address"></input><br>
    <input type="submit" value="table">
</form>
    </body>
    </html>