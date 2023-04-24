<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author  Denis Antonenko <ads@lab321.ru>
 */
function post_install()
{
    require_once 'modules/Configurator/Configurator.php';
    $configuratorObj = new Configurator();
    $configuratorObj->loadConfig();
    $configuratorObj->config['erp']['genData']['password'] = '123';
    $configuratorObj->saveConfig();
}
