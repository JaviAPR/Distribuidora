<?php
    class Producto extends Conectar{

        //OBTENER LOS PRODUCTOS DE LA TABLA QUE SE CREA EN LA BASE DE DATOS para negocio
        public function get_productos_negocio(){
            $conectar=parent::Conexion();
            parent::set_name();

            $sql = "SELECT nombre,precio FROM productos";
            $sql = $conectar->prepare($sql);
            $sql ->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //OBTENER LOS PRODUCTOS DE LA TABLA CLIENTES
        public function get_productos_cliente(){
            $conectar=parent::Conexion();
            parent::set_name();

            $sql = "SELECT nombre,precio FROM productosCliente";
            $sql = $conectar->prepare($sql);
            $sql ->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }




        public function insert_($cat_nom,$cat_obs){
            $conectar=parent::Conexion();
            parent::set_name();

            $sql = "INSERT INTO tm_categoria(cat_id,cat_nom,cat_obs,est) VALUES(NULL,?,?,'1')";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$cat_nom);
            $sql->bindValue(2,$cat_obs);
            $sql ->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function update_categoria($cat_nom,$cat_obs,$cat_id){
            $conectar=parent::Conexion();
            parent::set_name();

            $sql = "UPDATE tm_categoria SET cat_nom = ?, cat_obs = ? where cat_id = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$cat_nom);
            $sql->bindValue(2,$cat_obs);
            $sql->bindValue(3,$cat_id);
            $sql ->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function delete_categoria($cat_id){
            $conectar=parent::Conexion();
            parent::set_name();

            $sql = "DELETE FROM tm_categoria WHERE cat_id =?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$cat_id);
            $sql ->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }


?>