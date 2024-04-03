<?php

    header('Content-Type: application/json');


    require_once("../config/conexiones.php");
    require_once("../models/Ventas.php");

    $venta = new Venta();

    $body = json_decode(file_get_contents("php://input"),true);

    switch($_GET["op"]){
        
        case "insert":
            $datos = $venta->insert_venta($body["cliNom"],$body["total"]);
            echo json_encode("Insertado correctamente");

        break;

        case "update":
            $datos = $categoria->update_categoria($body["cat_nom"],$body["cat_obs"],$body["cat_id"]);
            echo json_encode("Actualizado Correctamente");

        break;

        case "delete":
            $datos = $categoria->delete_categoria($body["cat_id"]);
            echo json_encode("Elmininado Correctamente");

        break;
    }



?>