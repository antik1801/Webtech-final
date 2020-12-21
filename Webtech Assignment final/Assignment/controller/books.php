<?php
    require_once 'database/database.php';
    function all_books() {
       return getResult("select * from books");
    }
?>