<?php

require $_SERVER['DOCUMENT_ROOT'] . '/spil.controller/LikeControllerImpl.php';

session_start();

if(isset($_SESSION['usuario'])){
    $idSeguidor = $_SESSION['usuario'];
    
    $notificationIde = $_POST['spilId'];
    
    $controller = new LikeControllerImpl();
    
    $resp = ['resp' => $controller->borrarLikeGesture($notificationIde, $idSeguidor)];
    
    echo json_encode($resp);
} else {
    $resp = ['resp' => FALSE];
    
    echo json_encode($resp);
}