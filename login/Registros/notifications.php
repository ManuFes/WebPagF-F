<?php
session_start();

if (isset($_SESSION['register_success'])) {
    echo "<div class='notification success'>" . $_SESSION['register_success'] . "</div>";
    unset($_SESSION['register_success']);
}

if (isset($_SESSION['register_error'])) {
    echo "<div class='notification error'>" . $_SESSION['register_error'] . "</div>";
    unset($_SESSION['register_error']);
}

if (isset($_SESSION['login_error'])) {
    echo "<div class='notification error'>" . $_SESSION['login_error'] . "</div>";
    unset($_SESSION['login_error']);
}

if (isset($_SESSION['login_success'])) {
    echo "<div class='notification success'>" . $_SESSION['login_success'] . "</div>";
    unset($_SESSION['login_success']);
}
?>
