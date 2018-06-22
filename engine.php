<?php
    require 'engine-class.php';
    $notification = "Enter the domain";
    $domain = $_POST['txt_domain'];
    $get_total_deferd_list = "ssh dan.d@jumpoff1.per01.ds.network '/usr/bin/dsh -c -F 30 -M -g cpanel_production_au -- sudo ls -lah /var/cpanel/email_send_limits | grep max_deferfail | wc -l'";
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
