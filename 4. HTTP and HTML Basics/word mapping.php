<DOCTYPE html>
    <html>
    <head>
        <title>Word mapping</title>
    </head>
    <body>
    <?php
 
 
if (isset($_GET['input'])) {
    $input = strtolower($_GET['input']);
    $pattern = "/[^a-zA-Z]+/";
 
    $input = preg_split($pattern, $input, -1, PREG_SPLIT_NO_EMPTY);
 
 
 
    $out = [];
 
    foreach ($input as $item) {
        if (array_key_exists($item, $out)) {
            $out[$item]++;
        } else {
            $out[$item] = 1;
        }
    }
}
 
$html = "<table border='2'>";
 
foreach ($out as $key => $value){
    $html .= "<tr><td>$key</td><td>$value</td></tr>";
}
 
$html .= "</table>";
 
 
 
echo $html;
    ?>
    <form>
    <textarea rows="10" name="input"></textarea><br>
    <input type="submit" value="Count words">
</form>
    </body>
    </html>