<?php

namespace app\modelo;

/**
 * @author GOLA BARRIA, Vanina
 * @author AGUERO, Emiliano
 * @author MARQUEZ, Emanuel
 */
class AutoCargador {

    public static function cargarModulos() {

        spl_autoload_register(function($clase) {
            if (version_compare(phpversion(), '7.1.31', '<')) {
                $ruta = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . "{$clase}.php";
            } else {
                $ruta = dirname(__FILE__, 3) . DIRECTORY_SEPARATOR . "{$clase}.php";
            }
            if (file_exists($ruta)) {
                require_once $ruta;
            }
        });
    }

}
