<?php
    class Venta extends Conectar{


        public function get_venta(){
            $conectar=parent::Conexion();
            parent::set_name();

            $sql = "SELECT * FROM tm_categoria WHERE est=1";
            $sql = $conectar->prepare($sql);
            $sql ->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert_venta($cliNom,$total){
            $conectar=parent::Conexion();
            parent::set_name();

            $sql = "INSERT INTO venta(nombreCliente,total) VALUES(?,?)";
            
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,$cliNom);
            $sql->bindValue(2,$total);
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