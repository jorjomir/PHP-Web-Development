<DOCTYPE html>
    <html>
    <head>
        <title>Navigation</title>
    </head>
    <body>
    <?php
if (isset($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months'])) {
    $categories=explode(", ", $_GET['categories']);
    $tags=explode(", ", $_GET['tags']);
    $months=explode(", ", $_GET['months']);
    echo '<h2>Categories</h2>' . "\n";
    echo '<ul>';
    foreach($categories as $key) {
        echo '<li>' . $key . '</li>';
    }
    echo '</ul>';
    echo '<h2>Tags</h2>' . "\n";
    echo'<ul>';
    foreach($tags as $key) {
        echo '<li>' . $key . '</li>';
    }
    echo '</ul>';
    echo '<h2>Months</h2>' . "\n";
    echo '<ul>';
    foreach($months as $key) {
        echo '<li>' . $key . '</li>';
    }
    echo '</ul>';

}
    ?>
    <form>
    <input name="categories"></input><br>
    <input name="tags"></input><br>
    <input name="months"></input><br>
    <input type="submit" value="Color text">
</form>
    </body>
    </html>