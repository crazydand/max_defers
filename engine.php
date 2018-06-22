<?php
    require 'engine-class.php';
    $notification = "Enter the domain";
    $domain = $_POST['txt_domain'];
    if(isset($_POST['domain_search']))
    {
        $obj = new Domain;
        $obj->TxtDomain($_POST['txt_domain']);
        $notification = $obj->notification;
    }
    if(isset($_POST['remove_defer']))
    {
        echo shell_exec("ssh dan.d@jumpoff1.per01.ds.network 'ls -lah'");
    }
?>