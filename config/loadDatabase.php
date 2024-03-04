<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->initDatabaseMapFromDumps(array (
  'default' => 
  array (
    'tablesByName' => 
    array (
      'products' => '\\App\\Model\\Map\\ProductsTableMap',
    ),
    'tablesByPhpName' => 
    array (
      '\\Products' => '\\App\\Model\\Map\\ProductsTableMap',
    ),
  ),
));
