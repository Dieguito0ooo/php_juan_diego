<?php
namespace App\Models\SQLModels;

class SqlContacto{
    public static function selectAll(){
        $sql = "select * from contactos";
        return $sql;
    }

    public static function selectByID($data){
        $sql = "select * from contactos id =?";
    }

    public static function insertInto(){
        $sql = "insert into contactos (nombre, telefono, email) values";
        $sql .= "(?,?,?)";
        return $sql;
    }

    public static function update($data){
        $sql = "update contactos set";
        $sql .= "nombre=?,";
        $sql .= "telefono=?,";
        $sql .= "email=? where id=?";
        return $sql;
    }

    public static function delete($data){
        $sql = "delete from contactos where id=?";
        return $sql;
    }
}