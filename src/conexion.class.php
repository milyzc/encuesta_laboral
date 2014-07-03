<?php

/*
 * Clase que permite realizar consultas a la base de datos.
 * @author Parisi Germán
 * @version 1.0
 */

class Conexion {

    public static $servidor = "localhost";
    public static $usuario = "root";
    public static $clave = "";
    public static $nombre_bd = "isfd";
    public $conexion = null;
    private $_ultimo_id;

    function __construct() {
        $this->_ultimo_id = -1;
    }

    private function abrir_conexion() {
        $this->conexion = mysqli_connect(self::$servidor, self::$usuario, self::$clave, self::$nombre_bd);
    }

    private function cerrar_conexion() {
        mysqli_close($this->conexion);
    }

    public function ejecutar_consulta($consulta) {
        $this->abrir_conexion();
        $resultado = mysqli_query($this->conexion, $consulta);
        $fila = array();
        $filas = array();
        if ($resultado) {
            while ($fila = mysqli_fetch_array($resultado)) {
                $filas[] = $fila;
            }
        }
        $this->cerrar_conexion();
        return $filas;
    }

    public function ejecutar_insercion($insercion) {
        $this->abrir_conexion();
        if (!mysqli_query($this->conexion, $insercion)) {
            return false;
        }
        $this->_ultimo_id = mysqli_insert_id($this->conexion);
        $this->cerrar_conexion();
        return true;
    }

    public function ejecutar_insercion_por_datos($tabla, $datos) {
        $this->abrir_conexion();
        $campos = "";
        $valores = "";
        foreach ($datos as $campo => $valor) {
            if (is_null($valor) || (is_string($valor) && $valor === '') || (is_int($valor) && $valor === -1)) {
                //$valores .= ' NULL,';
            } else {
                $campos .="{$campo},";
                if (is_numeric($valor)) {
                    $valores .= "{$valor},";
                } else {
                    $valores .="'" . $valor . "',";
                }
            }
        }
        $sql_insert = "INSERT INTO {$tabla} "
                . "(" . rtrim($campos, ',') . ") "
                . "VALUES (" . rtrim($valores, ',') . ")";
        if (!mysqli_query($this->conexion, $sql_insert)) {
            echo 'ERROR EN LA FNCION!</br>' . $sql_insert;
            return false;
        }
        $this->_ultimo_id = mysqli_insert_id($this->conexion);
        $this->cerrar_conexion();
        return true;
    }

    public function ejecutar_actualizacion($actualizacion) {
        $this->abrir_conexion();
        if (!mysqli_query($this->conexion, $actualizacion)) {
            echo "NO";
        }
        $this->cerrar_conexion();
    }

    public function ejecutar_borrado($borrar) {
        $this->abrir_conexion();
        if (!mysqli_query($this->conexion, $borrar)) {
            echo "NO";
        }
        $this->cerrar_conexion();
    }

    public function get_ultimo_id() {
        return $this->_ultimo_id;
    }

}
