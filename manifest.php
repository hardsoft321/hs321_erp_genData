<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author  Denis Antonenko <ads@lab321.ru>
 */

$manifest = array(
    'name' => 'hs321_erp_genData',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'ads',
    'description' => 'Генерация ЕРП данных',
    'is_uninstallable' => true,
    'published_date' => '2023-04-25',
    'type' => 'module',
    'version' => '0.1.3',
    'dependencies' => array(
       array(
        'id_name' => 'hs321_erp',
        'version' => '0.10',
      ),
    ),
);
$installdefs = array(
    'id' => 'hs321_erp_genData',
    'beans' => array (
        array (
            'module' => 'GenerationERPData',
            'class' => 'GenerationERPData',
            'path' => 'modules/GenerationERPData/GenerationERPData.php',
        ),
    ),

    'language' => array(
        array(
            'from' => '<basepath>/SugarModules/language/Administration/en_us.lang.php',
            'to_module' => 'Administration',
            'language' => 'en_us'
        ),
        array(
            'from' => '<basepath>/SugarModules/language/Administration/ru_ru.lang.php',
            'to_module' => 'Administration',
            'language' => 'ru_ru'
        ),
    ),
    'administration' => array(
        array(
           'from' => '<basepath>/SugarModules/Administration/menu/other_group_admin.php'
        )
    ),
    'copy' => array(
        array(
            'from' => '<basepath>/SugarModules/modules',
            'to' => 'modules'
        ),
    ),
);
