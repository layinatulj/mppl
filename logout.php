<?php 
session_start(); //untuk memulai session
unset($_SESSION['username']); // menghapus session username yang telah di buat
echo "<script>window.open('login.php','_self')</script>"; //membuka file login.php
?>