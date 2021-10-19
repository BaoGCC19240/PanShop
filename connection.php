<?php
    $Connect = pg_connect("postgres://perrguastfkmhh:6f5304c59a0e10aadff5c6b1105a7227c24153d357b861a46a71049c833722d9@ec2-44-195-240-222.compute-1.amazonaws.com:5432/d7ht733vfk2d0p");
    if (!$Connect) {
        die("Connection failed");
?>