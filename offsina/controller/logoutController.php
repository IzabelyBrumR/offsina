<?php
if ($_REQUEST) {
    echo 'sosos';
    @session_start();
    @session_destroy();
    @session_abort();
    header('location:../index.php?cod=172');
}