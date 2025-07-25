<?php 
function sanitize(string $value){
    return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
}

?>