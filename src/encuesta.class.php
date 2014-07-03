<?php

/**
 * Representa una encuesta específica
 *
 * @author Diego Barrionuevo
 * @version 1.0
 */
class encuesta {

    private $_nro_encuesta;
    private $_cantidad_empresas;
    private $_cantidad_ingresada_empresas;
    private $_cantidad_empleados_dedicados;
    private $_horas_mensuales;
    private $_cantidad_empleados_fulltime;
    private $_cantidad_veces_viaja;
    private $_cantidad_ingresada_veces_viaja;
    private $_gasto_viaticos;
    private $_horas_insumidas;
    private $_tiempo_incluido_en_horas_mensuales;
    private $_tipo_impresora;
    private $_frecuancia_cambio_cartuchos;
    private $_frecuancia_cambio_toner;
    private $_uso_impresora;
    private $_porcentaje_uso_impresora;
    private $_opcion_cantidad_resmas;
    private $_cantidad_hojas;
    private $_cantidad_resmas;
    private $_usa_fotocopias;
    private $_cantidad_fotocopias;
    private $_cantidad_carpetas;
    private $_cantidad_ingresada_carpetas;
    private $_cantidad_nepacos;
    private $_cantidad_ingresada_nepacos;
    private $_cantidad_caratulas;
    private $_cantidad_ingresada_caratulas;
    private $_cantidad_reimpresion;
    private $_costo_archivado;
    private $_costo_riesgos_laborales;
    private $_tiempo_promedio_revision;
    private $_costo_estimado_riesgos;
    private $_inconvenientes;
    private $_tiene_conexion_internet;
    private $_costo_conexion_internet;

    function __construct() {
        $this->_nro_encuesta = '';
        $this->_cantidad_empresas = '';
        $this->_cantidad_ingresada_empresas = '';
        $this->_cantidad_empleados_dedicados = '';
        $this->_horas_mensuales = '';
        $this->_cantidad_empleados_fulltime = '';
        $this->_cantidad_veces_viaja = '';
        $this->_cantidad_ingresada_veces_viaja = '';
        $this->_gasto_viaticos = '';
        $this->_horas_insumidas = '';
        $this->_tiempo_incluido_en_horas_mensuales = '';
        $this->_tipo_impresora = '';
        $this->_frecuancia_cambio_cartuchos = '';
        $this->_frecuancia_cambio_toner = '';
        $this->_uso_impresora = '';
        $this->_porcentaje_uso_impresora = '';
        $this->_opcion_cantidad_resmas = '';
        $this->_cantidad_hojas = '';
        $this->_cantidad_resmas = '';
        $this->_usa_fotocopias = '';
        $this->_cantidad_fotocopias = '';
        $this->_cantidad_carpetas = '';
        $this->_cantidad_ingresada_carpetas = '';
        $this->_cantidad_nepacos = '';
        $this->_cantidad_ingresada_nepacos = '';
        $this->_cantidad_caratulas = '';
        $this->_cantidad_ingresada_caratulas = '';
        $this->_cantidad_reimpresion = '';
        $this->_costo_archivado = '';
        $this->_costo_riesgos_laborales = '';
        $this->_tiempo_promedio_revision = '';
        $this->_costo_estimado_riesgos = '';
        $this->_inconvenientes = '';
        $this->_tiene_conexion_internet = '';
        $this->_costo_conexion_internet = '';
    }

    public function set_nro_encuesta($_nro_encuesta) {
        $this->_nro_encuesta = $_nro_encuesta;
    }

    public function set_cantidad_empresas($_cantidad_empresas) {
        $this->_cantidad_empresas = $_cantidad_empresas;
    }

    public function set_cantidad_ingresada_empresas($_cantidad_ingresada_empresas) {
        $this->_cantidad_ingresada_empresas = $_cantidad_ingresada_empresas;
    }

    public function set_cantidad_empleados_dedicados($_cantidad_empleados_dedicados) {
        $this->_cantidad_empleados_dedicados = $_cantidad_empleados_dedicados;
    }

    public function set_horas_mensuales($_horas_mensuales) {
        $this->_horas_mensuales = $_horas_mensuales;
    }

    public function set_cantidad_empleados_fulltime($_cantidad_empleados_fulltime) {
        $this->_cantidad_empleados_fulltime = $_cantidad_empleados_fulltime;
    }

    public function set_cantidad_veces_viaja($_cantidad_veces_viaja) {
        $this->_cantidad_veces_viaja = $_cantidad_veces_viaja;
    }

    public function set_cantidad_ingresada_veces_viaja($_cantidad_ingresada_veces_viaja) {
        $this->_cantidad_ingresada_veces_viaja = $_cantidad_ingresada_veces_viaja;
    }

    public function set_gasto_viaticos($_gasto_viaticos) {
        $this->_gasto_viaticos = $_gasto_viaticos;
    }

    public function set_horas_insumidas($_horas_insumidas) {
        $this->_horas_insumidas = $_horas_insumidas;
    }

    public function set_tiempo_incluido_en_horas_mensuales($_tiempo_incluido_en_horas_mensuales) {
        $this->_tiempo_incluido_en_horas_mensuales = $_tiempo_incluido_en_horas_mensuales;
    }

    public function set_tipo_impresora($_tipo_impresora) {
        $this->_tipo_impresora = $_tipo_impresora;
    }

    public function set_frecuancia_cambio_cartuchos($_frecuancia_cambio_cartuchos) {
        $this->_frecuancia_cambio_cartuchos = $_frecuancia_cambio_cartuchos;
    }

    public function set_frecuancia_cambio_toner($_frecuancia_cambio_toner) {
        $this->_frecuancia_cambio_toner = $_frecuancia_cambio_toner;
    }

    public function set_uso_impresora($_uso_impresora) {
        $this->_uso_impresora = $_uso_impresora;
    }

    public function set_porcentaje_uso_impresora($_procentaje_uso_impresora) {
        $this->_porcentaje_uso_impresora = $_procentaje_uso_impresora;
    }

    public function set_opcion_cantidad_resmas($_opcion_cantidad_resmas) {
        $this->_opcion_cantidad_resmas = $_opcion_cantidad_resmas;
    }

    public function set_cantidad_hojas($_cantidad_hojas) {
        $this->_cantidad_hojas = $_cantidad_hojas;
    }

    public function set_cantidad_resmas($_cantidad_resmas) {
        $this->_cantidad_resmas = $_cantidad_resmas;
    }

    public function set_usa_fotocopias($_usa_fotocopias) {
        $this->_usa_fotocopias = $_usa_fotocopias;
    }

    public function set_cantidad_fotocopias($_cantidad_fotocopias) {
        $this->_cantidad_fotocopias = $_cantidad_fotocopias;
    }

    public function set_cantidad_carpetas($_cantidad_carpetas) {
        $this->_cantidad_carpetas = $_cantidad_carpetas;
    }

    public function set_cantidad_ingresada_carpetas($_cantidad_ingresada_carpetas) {
        $this->_cantidad_ingresada_carpetas = $_cantidad_ingresada_carpetas;
    }

    public function set_cantidad_nepacos($_cantidad_nepacos) {
        $this->_cantidad_nepacos = $_cantidad_nepacos;
    }

    public function set_cantidad_ingresada_nepacos($_cantidad_ingresada_nepacos) {
        $this->_cantidad_ingresada_nepacos = $_cantidad_ingresada_nepacos;
    }

    public function set_cantidad_caratulas($_cantidad_caratulas) {
        $this->_cantidad_caratulas = $_cantidad_caratulas;
    }

    public function set_cantidad_ingresada_caratulas($_cantidad_ingresada_caratulas) {
        $this->_cantidad_ingresada_caratulas = $_cantidad_ingresada_caratulas;
    }

    public function set_cantidad_reimpresion($_cantidad_reimpresion) {
        $this->_cantidad_reimpresion = $_cantidad_reimpresion;
    }

    public function set_costo_archivado($_costo_archivado) {
        $this->_costo_archivado = $_costo_archivado;
    }

    public function set_costo_riesgos_laborales($_costo_riesgos_laborales) {
        $this->_costo_riesgos_laborales = $_costo_riesgos_laborales;
    }

    public function set_tiempo_promedio_revision($_tiempo_promedio_revision) {
        $this->_tiempo_promedio_revision = $_tiempo_promedio_revision;
    }

    public function set_costo_estimado_riesgos($_costo_estimado_riesgos) {
        $this->_costo_estimado_riesgos = $_costo_estimado_riesgos;
    }

    public function set_inconvenientes($_inconvenientes) {
        $this->_inconvenientes = $_inconvenientes;
    }

    public function set_tiene_conexion_internet($_tiene_conexion_internet) {
        $this->_tiene_conexion_internet = $_tiene_conexion_internet;
    }

    public function set_costo_conexion_internet($_costo_conexion_internet) {
        $this->_costo_conexion_internet = $_costo_conexion_internet;
    }

}
