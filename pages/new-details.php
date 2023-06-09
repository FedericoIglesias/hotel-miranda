<?php

    if (isset($_POST['sendForm'])) {
        $name =  $_POST['name'];
        $mail =  $_POST['mail'];
        $phone =  $_POST['phone'];
        $subject =  $_POST['subject'];

        $db = new DataBase();

        $db->query("INSERT INTO contacts (name, email, phone, subject) VALUES ( '$name', '$mail', '$phone', '$subject')");
        echo 'send';
    }

echo $blade->run("new-details");