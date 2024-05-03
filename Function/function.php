<?php 
function loadView($viewPages, $data = []) {
    extract($data);
    require_once 'Pages/' . $viewPages . '.php';
}
?>