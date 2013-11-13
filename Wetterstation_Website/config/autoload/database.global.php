<?php

return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'mysql:host=localhost;dbname=db_wetterstation',
        'driver_options' => array(
       PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
        ),
    ),
    
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);
?>
