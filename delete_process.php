<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'database.php';
	$pdo = Database::connect();
    $torneo = $_POST['torneo'];

    $sql = "DELETE FROM reto_torneo WHERE id_torneo = ".$torneo.";";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
}
?>
