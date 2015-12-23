<?php
/**
 * ----------------------------------------------------
 * | Автор: Андрей Рыжов (Dune) <info@rznw.ru>         |
 * | Сайт: www.rznw.ru                                 |
 * | Телефон: +7 (4912) 51-10-23                       |
 * | Дата: 01.11.14
 * ----------------------------------------------------
 *
 */

return array(

    'service_manager' => [
        'invokables' => [
            'rzn_memcache' => [
                'name' => 'Rzn\Memcache\Service',
                'shared' => true,
                'injector' => [
                    'injectHost' => [
                        'handler' => 'setter',
                        'options' => [
                            'set' => 'params',
                            'param' => '127.0.0.1',
                            'method' => 'setHost'
                        ]
                    ],
                    'injectPort' => [
                        'handler' => 'setter',
                        'options' => [
                            'set' => 'params',
                            'param' => null,
                            'method' => 'setPort'
                        ]
                    ],

                ],

            ]
        ]
    ],

);
