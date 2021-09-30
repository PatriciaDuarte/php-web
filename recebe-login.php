<?php
    $email = $_POST['email']; //vem do campo email e senha do login.php
    $senha = $_POST['senha'];

    echo "<p>O seu e-mail é $email e sua senha é $senha</p>";
    var_dump($_POST);