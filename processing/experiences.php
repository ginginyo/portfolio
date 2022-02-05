<?php
    try {
        $host = 'db'; //Nom donné dans le docker-compose.yml
        $user = 'user'; // user et pwd du docker compose
        $password = 'pass';
        $db = 'website_db';

        $conn = new PDO("mysql:host=".$host.";dbname=".$db, $user, $password);

        $sth = $conn->prepare('SELECT * FROM experience');
        $sth->execute();
        $experiences = $sth->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($experiences);

        $sth = $conn->prepare('SELECT * FROM mission');
        $sth->execute();
        $missions = $sth->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($missions);

        // add an array of missions for each experience
        foreach($experiences as $key => $experience) {
            $missionsList = [];
            foreach($missions as $mission) {
                if($experience["id"] == $mission["fk_experience_id"]) {
                    array_push($missionsList, $mission["description"]);
                }
            }
            $experiences[$key]["missions"] = $missionsList;
        }

        $json = json_encode($experiences);
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