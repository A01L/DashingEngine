<?php
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password);

$check_user = mysqli_query($GLOBALS['ectr_connect'], "SELECT * FROM `organization` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $row = mysqli_fetch_assoc($check_user);

        creat_sess('admin', $row['id'], $row['token']);
        ini_set('session.gc_maxlifetime', 172800);
        ini_set('session.cookie_lifetime', 172800);

        redirect('mypanel');

    } else {
        redirect('Login');
    }
?>