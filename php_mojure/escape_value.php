<?php
function escapeValue($postValue) {
    return htmlspecialchars(
        $postValue, 
        ENT_QUOTES | ENT_HTML5, 
        'UTF-8', 
        false
    );
}