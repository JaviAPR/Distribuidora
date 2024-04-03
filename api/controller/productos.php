<?php

    header('Content-Type: application/json');


    require_once("../config/conexiones.php");
    require_once("../models/Productos.php");

    $producto = new Producto();

    $body = json_decode(file_get_contents("php://input"),true);

    switch($_GET["op"]){
        case "GetNeg":
            $datos = $producto->get_productos_negocio();
            echo json_encode($datos);
        break;

        case "GetCli":
            $datos = $producto->get_productos_cliente();
            echo json_encode($datos);
        break;

        case "GetId":
            $datos = $categoria->get_categoria_x_id($body["cat_id"]);
            echo json_encode($datos);

        break;


        case "insert":
            $datos = $categoria->insert_categoria($body["cat_nom"],$body["cat_obs"]);
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