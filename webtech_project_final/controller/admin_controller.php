<?php
    require_once 'models/database.php';
    function all_admins() {
       return getResult("select * from admin_register");
    }
?>