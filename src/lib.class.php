<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/isfd/src/classes/util/image.class.php');

/**
 * Esta clase es testeada por lib.test.php.
 * @author Barrionuevo Diego & Parisi Germán
 * @version 1.0
 */
class Lib {

    /**
     * Valida un id.
     * NOTA: En un entorno de 32 bits el id máximo es 2147483647 mientras que
     * en uno de 64 bits el id máximo es 9223372036854775807. Esto se debe a la
     * función is_int().
     * 
     * @param mixed $id es el id a comprobar.
     * @return boolean es true si el parámetro corresponde al formato de un id,
     * false en caso contrario.
     */
    public static function is_id($id) {
        if (is_float($id)) {
            return false;
        }
        $id = (int) $id;
        return isset($id) && is_int($id) && $id > 0;
    }

    /**
     * Valida un int teniendo en cuenta un intervalo de validación, dentro del 
     * intervalo se considera que el número es válido.
     * 
     * NOTA: Si llega el parámetro es un string con formato de número entero (
     * como ser '1') devuelve true, pero si es un string con formato de número 
     * decimal (como ser '1.5') devuelve false.
     * 
     * @param mixed $int es el número entero a validar
     * @param int $minimo número entero que representa el extremo inferior del 
     * intervalo de validación.
     * @param int $maximo número entero que representa el extremo superior del 
     * intervalo de validación.
     * @return boolean true si es posible validar el entero, false en caso 
     * contrario
     */
    public static function is_int($int, $minimo = -1, $maximo = -1) {
        if (is_null($int) || is_float($int) || (is_string($int) && strpos($int, '.') !== false)) {
            return false;
        }
        $int = (int) $int;
        $maximo = ($maximo === -1) ? PHP_INT_MAX : $maximo;
        if ($int < $minimo || $int > $maximo) {
            return false;
        }
        return true;
    }

    /**
     * Valida que el parámetro sea un valor double (float), es decir un número 
     * decimal.
     * 
     * NOTA: Si recibe un string como parámetro lo pasa a double pero tener en 
     * cuenta: si el string posee un punto decimal (como ser '1.0') entonces lo valida 
     * correctamente y devuelve true, si el string no posee un punto decimal 
     * pero sí es número (como ser un entero '1') no lo valida u devuele false.
     * 
     * @param mixed $double
     * @return boolean es true si lo validado es un número decimal, false en 
     * caso contrario
     */
    public static function is_double($double) {
        if (is_int($double) || (is_string($double) && strpos($double, '.') === false)) {
            return false;
        }
        $double = (double) $double;
        return isset($double) && is_float($double);
    }

    /**
     * Valida si una variable es un string. Se puede pasar la cantidad de
     * caracteres mínima y máxima que debe contener ese string.
     * 
     * Si la cantidad de caracteres mínima es -1 entonces no hay límite mínimo,
     * por lo tanto se aceptan cadenas vacías. Sería lo mismo que poner cero.
     * 
     * Si la cantidad de caracteres máxima es -1 entonces no hay límite máximo,
     * por lo tanto se aceptan cadena de cualquier longitud máxima.
     * 
     * Por defecto, ambos límites son establecidos en -1, por lo tanto, cadenas
     * de cualquier longitud son válidas.
     * 
     * @param mixed $cadena es la variable a validar.
     * @param int $minimo es la cantidad de caracteres mínimo que debe tener la
     * cadena.
     * @param int $maximo es la cantidad de caracteres máximo que debe tener la
     * cadena.
     * @return boolean
     */
    public static function is_string($cadena, $minimo = -1, $maximo = -1) {
        if (is_null($cadena) || !is_string($cadena)) {
            return false;
        }
        $min = ($minimo == -1) ? 0 : $minimo;
        $max = ($maximo == -1) ? PHP_INT_MAX : $maximo;
        if (strlen($cadena) < $min || strlen($cadena) > $max) {
            return false;
        }
        return true;
    }

    /**
     * Retorna el archivo abierto en formato binario a partir del
     * <input type="file" />.
     * 
     * Este método es muy útil para insertar un archivo en un campo de datos
     * BLOB en la base de datos.
     * 
     * Retorna null en caso que el usuario no haya seleccionado nada.
     * 
     * @param string $input_file es el nombre del <input type="file" /> que contiene el
     * archivo.
     * @return blob es el archivo en formato binario. Puede retornar null en
     * caso que el archivo no exista.
     */
    public static function get_blob($input_file) {
        $img = new Image($input_file);
        return $img;
    }

}
