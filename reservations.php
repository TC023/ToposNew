<?php
require 'database.php';
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch reservations with 'pendiente' status
$pendienteSql = "SELECT reto_horas.fechas_seleccionadas, reto_horas.id_reserva FROM reto_horas JOIN reto_reservaciones ON reto_horas.id_reserva = reto_reservaciones.id_reserva WHERE reto_reservaciones.estado = 1 ORDER BY id_reserva";
$pendienteResult = $pdo->query($pendienteSql);
$pendingReservations = [];
foreach ($pendienteResult as $row) {
    $pendingReservations[] = [$row["fechas_seleccionadas"], $row["id_reserva"]];
}

// Fetch reservations with 'ocupado' status
$ocupadoSql = "SELECT reto_horas.fechas_seleccionadas, reto_horas.id_reserva FROM reto_horas JOIN reto_reservaciones ON reto_horas.id_reserva = reto_reservaciones.id_reserva WHERE reto_reservaciones.estado = 2 ORDER BY id_reserva";
$ocupadoResult = $pdo->query($ocupadoSql);
$ocupadoReservations = [];
foreach ($ocupadoResult as $row) {
    $ocupadoReservations[] = [$row["fechas_seleccionadas"], $row["id_reserva"]];
}

Database::disconnect();

// Prepare the reservations array
$reservations = [
    'pendiente' => $pendingReservations,
    'ocupado' => $ocupadoReservations
];

// Set the header to application/json
header('Content-Type: application/json');
// Echo the reservations as JSON
echo json_encode($reservations);
?>
