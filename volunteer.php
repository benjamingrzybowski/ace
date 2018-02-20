<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/29/17
 * Time: 11:03 AM
 */


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];


    include '../inc/dbconnection.php';

    try {
        $sql = 'INSERT INTO volunteer SET
        name = :name,
        email = :email,
        phone = :phone,
        msg = :msg';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':phone', $_POST['phone']);
        $s->bindValue(':msg', $_POST['msg']);
        $s->execute();

        include "success.html.php";
    }

    catch
        (PDOException $e) {
            $error = 'Error adding submitted author.';
            include 'error.php';
        }


