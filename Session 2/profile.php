<?php
session_start();
?>
<h1>Your major is <?= $_SESSION["user"]["major"] ?></h1>