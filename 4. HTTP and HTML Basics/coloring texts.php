<DOCTYPE html>
    <html>
    <head>
        <title>Coloring Texts</title>
    </head>
    <body>
    <?php
if (isset($_GET['input'])) {
    $input = $_GET['input'];
    $input=explode(" ", $input);
    $html = "";
    for($i=0; $i<count($input); $i++) {
        $currword=$input[$i];
        for($j=0; $j<strlen($currword); $j++) {
            if(ord($currword[$j])%2==0) {
            $html .='<span style="color:red">' . $currword[$j] . ' </span>';
            } else {
                $html .='<span style="color:blue">' . $currword[$j] . ' </span>';
            }
        }
    }
echo $html;
}
    ?>
    <form>
    <textarea rows="10" name="input"></textarea><br>
    <input type="submit" value="Color text">
</form>
    </body>
    </html>