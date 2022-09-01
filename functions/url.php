<?php
function url_redirect($values = []) {
    $buildQueryString = http_build_query($values);
    header('Location: http://localhost:8888/php-app?' . $buildQueryString);
    exit;
}

?>