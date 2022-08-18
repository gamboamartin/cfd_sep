<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace gamboamartin\cfd_sep\controllers;


use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use gamboamartin\template_1\html;
use html\cfd_sep_certificado_html;
use html\cfd_sep_tipo_certificado_html;
use models\cfd_sep_certificado;
use models\cfd_sep_tipo_certificado;
use PDO;
use stdClass;

class controlador_cfd_sep_certificado extends system {

    public function __construct(PDO $link, html $html = new \gamboamartin\template_1\html(),
                                stdClass $paths_conf = new stdClass()){

        $modelo = new cfd_sep_certificado(link: $link);
        $html_ = new cfd_sep_certificado_html($html);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html_, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Certificado';
    }


}
