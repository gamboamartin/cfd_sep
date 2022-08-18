<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use gamboamartin\template\directivas;
use models\cfd_sep_tipo_certificado;
use PDO;
use stdClass;


class cfd_sep_tipo_certificado_html extends html_controler {

    public function select_cfd_sep_tipo_certificado__id(int $cols, bool $con_registros, int $id_selected, PDO $link): array|string
    {
        $valida = (new directivas(html:$this->html_base))->valida_cols(cols:$cols);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al validar cols', data: $valida);
        }

        $modelo = new cfd_sep_tipo_certificado($link);

        $select = $this->select_catalogo(cols:$cols,con_registros:$con_registros,id_selected:$id_selected,
            modelo: $modelo, label: 'Tipo Certificado');
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }

}
