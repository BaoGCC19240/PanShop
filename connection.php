<?php
    $Connect = pg_connect("host=ec2-44-195-240-222.compute-1.amazonaws.com port=5432 dbname=d7ht733vfk2d0p user=
perrguastfkmhh password=6f5304c59a0e10aadff5c6b1105a7227c24153d357b861a46a71049c833722d9");
    if (!$Connect) {
        die("Connection failed");
?>