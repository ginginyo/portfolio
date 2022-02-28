<?php
    try {	
		if (file_exists(__DIR__ . '/../.env')) {
			require(__DIR__ . '/../vendor/autoload.php');
			$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
			$dotenv->load();
		}

        $host = $_ENV['DATABASE_HOST'];
        $user = $_ENV['DATABASE_USER'];
        $password = $_ENV['DATABASE_PASSWORD'];
        $db = $_ENV['DATABASE_SCHEMA'];
	
        $conn = new PDO("mysql:host=" . $host . ";port=3306;dbname=" . $db . ";charset=utf8", $user, $password);

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