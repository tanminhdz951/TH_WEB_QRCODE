<?php
include 'connect.php';
$stmt = $connect->prepare("select * from devvn_xaphuongthitran");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
