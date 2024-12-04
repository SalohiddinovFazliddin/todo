<?php
function view($view, $data = [])
{
    extract($data);  
    include 'views/' . $view . '.php';  
}

function redirect(string $url){
    header("Location: $url");
}





