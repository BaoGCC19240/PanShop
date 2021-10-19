<?php
   $Connect = pg_connect("postgres://rjomnyfarzimda:dac4f698ee9371ce1a7f78bac394062a2f4138ef16a4971c0661029ac7006708@ec2-3-222-24-200.compute-1.amazonaws.com:5432/dct24likocdc2j");
    if (!$Connect) {
        die("Connection failed");
?>
