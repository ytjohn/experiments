<?php

include_once "markdown.php";
$my_text = file_get_contents('dingus.text');
$my_html = Markdown($my_text);

print $my_html;
?>

