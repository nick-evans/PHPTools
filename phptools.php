<?php
function say($str) {
    echo $str;
    return $str;
}
function filecontents($file) {
    return file_get_contents($file);
}
function error($str) {
    trigger_error($str);
    return true;
}
function randomnumber() {
   $characters = '0123456789';
   $charactersLength = strlen($characters);
   return $characters[rand(0, $charactersLength - 1)];
}
