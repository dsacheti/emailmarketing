<?php
/**
 * configurações locais
 * para produção colocar .global
 */

return [
  'doctrine' => [
      'connection '=> [
          'orm_default' => [
              'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
              'params' => [
                  'host' => 'localhost',
                  'port' => '3306',
                  'user' => 'homestead',
                  'password' => 'Ds9989',
                  'dbname' => 'ze_mkt',
                  'driverOptions' => [
                      \PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES `UTF8`"
                  ]
              ]
          ]
      ],
      'driver' => [
          'EMKT_driver' => [
              'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
              'cache' => 'array',
              'paths' => [__DIR__ . '/../../src/EMKT/Entity']
          ],
          'orm_default' => [
              'drivers'=> [
                  'EMKT\Entity' => 'EMKT_driver'
              ]

          ]
      ]
  ]
];