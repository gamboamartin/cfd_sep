<?php
namespace models;
use base\orm\modelo;
use PDO;

class cfd_sep_certificado extends modelo{
    public function __construct(PDO $link){
        $tabla = __CLASS__;
        $columnas = array($tabla=>false, 'ac_alumno'=>$tabla, 'cfd_sep_tipo_certificado'=> $tabla);
        $campos_obligatorios = array();

        parent::__construct(link: $link,tabla:  $tabla, campos_obligatorios: $campos_obligatorios,
            columnas: $columnas);
    }
}