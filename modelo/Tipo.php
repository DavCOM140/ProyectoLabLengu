<?php
    class Tipo {
        var $id;
        var $descripcion;
        var $formato;

    function __construct($id, $descripcion, $formato) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->formato = $formato;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setDescripcion($Descripcion) {
        $this->descripcion = $descripcion;
    }

    function getFormato() {
        return $this->formato;
    }

    function setFormato($formato) {
        $this->formato = $formato;
    }
}

?>