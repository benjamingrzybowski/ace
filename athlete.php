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
    $race = $_POST['race'];
    $msg = $_POST['msg'];

    $raceEncoded = json_encode($race);

    include '../inc/local-dbconnection.php';

    try {
        $sql = 'INSERT INTO athlete SET
        name = :name,
        email = :email,
        phone = :phone,
        race = :raceEncoded,
        msg = :msg';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':phone', $_POST['phone']);
        $s->bindValue(':race', $_POST['race']);
        $s->bindValue(':msg', $_POST['msg']);

        $s->execute();


        include "success.html.php";
    }

    catch (PDOException $e) {
            $error = 'Error adding submitted author.';
            include 'error.php';
        }

