<?php
    try {
        $host = 'db'; //Nom donné dans le docker-compose.yml
        $user = 'user'; // user et pwd du docker compose
        $password = 'pass';
        $db = 'website_db';

        $conn = new PDO("mysql:host=".$host.";dbname=".$db, $user, $password);

        // request to get formations
        $sth = $conn->prepare('SELECT * FROM formation');
        $sth->execute();
        $formations = $sth->fetchAll(PDO::FETCH_ASSOC);

        // add an array of missions for each experience (recent to old)
        $formations = array_reverse($formations);

        // send response
        $json = json_encode($formations);
        header("Content-type: application/json");
        echo $json;

        $sth = null;
        $dbh = null;
    } catch (PDOException $e) {
        header("Content-type: application/json");
        echo json_encode("Erreur !: " . $e->getMessage() . "<br/>");
        die();
    }
?>