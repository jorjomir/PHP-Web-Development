<DOCTYPE html>
    <html>
    <head>
        <title>Get Form Data</title>
    </head>
    <body>
    <?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name=$_GET['name'];
    $age=$_GET['age'];
    $gender=$_GET['gender'];
    echo "My name is $name. I am $age years old. I am $gender.";

}
    ?>
    <form>
    <input name="name"></input><br>
    <input name="age"></input><br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="submit" value="Submit">
</form>
    </body>
    </html>