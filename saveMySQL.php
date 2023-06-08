<?php 
require('db.php');
            $name =  $_POST['name'];
            $mail =  $_POST['mail'];
            $phone =  $_POST['phone'];
            $subject =  $_POST['subject'];
            // $description =  $_POST['description'];
        

        $db = new DataBase();

        $db -> query("INSERT INTO contacts (name, email, phone, subject) VALUES ( '$name', '$mail', '$phone', '$subject')");
        
        ?>
