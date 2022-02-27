<?php
    try {
        $host = $_ENV['DATABASE_HOST'];
        $user = $_ENV['DATABASE_USER'];
        $password = $_ENV['DATABASE_PASSWORD'];
        $db = $_ENV['DATABASE_SCHEMA'];

        $conn = new PDO("mysql:host=".$host.";dbname=".$db, $user, $password);

        // request to get experiences
        $sth = $conn->prepare('SELECT * FROM experience');
        $sth->execute();
        $experiences = $sth->fetchAll(PDO::FETCH_ASSOC);
        // request for missions done in internship
        $sth = $conn->prepare('SELECT * FROM mission');
        $sth->execute();
        $missions = $sth->fetchAll(PDO::FETCH_ASSOC);

        // add an array of missions for each experience (recent to old)
        $experiences = array_reverse($experiences);
        foreach($experiences as $key => $experience) {
            $missionsList = [];
            foreach($missions as $mission) {
                if($experience["id"] == $mission["fk_experience_id"]) {
                    array_push($missionsList, $mission["description"]);
                }
            }
            $experiences[$key]["missions"] = $missionsList;
        }

        // send response
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