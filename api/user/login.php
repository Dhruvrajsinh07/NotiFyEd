<?php

header("Content-Type: application/json");

require_once "../../includes/init.php";

$Username = $_POST['Username'] ?? null;
$Password = $_POST['Password'] ?? null;

$q = "SELECT * FROM `user` WHERE `Username` = ? and `Password` = ? ";
$param = [$Username,$Password];

$stmt = $conn->prepare($q);
$stmt->execute($param);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user){
    $_SESSION['loggedIn'] = true;
    $_SESSION['user'] = $user['id'];
    $_SESSION['email'] = $user['Email'];
    $_SESSION['role'] = $user['role'];
    echo json_encode(['success' => true, 'user' => $user]);
    exit;
}else{

    $q2 = "SELECT * FROM `user` WHERE `Username` = ?";

    $stmt2= $conn->prepare($q2);
    $stmt2->execute([$Username]);
    $checkusername = $stmt2->fetch(PDO::FETCH_ASSOC);

    if (!$checkusername) {
        echo json_encode(['success' => false, 'reason' => 'Username']);
    } else {
        echo json_encode(['success' => false, 'reason' => 'Password']);
    }
}