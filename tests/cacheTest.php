<?php
/**
 * ----------------------------------------------------
 * | Автор: Андрей Рыжов (Dune) <info@rznw.ru>         |
 * | Сайт: www.rznw.ru                                 |
 * | Телефон: +7 (4912) 51-10-23                       |
 * | Дата: 23.12.2015                                     |
 * ----------------------------------------------------
 *
 */


namespace Rzn\Memcache\Test;
use Rzn\Library\Registry;
use PHPUnit_Framework_TestCase;


class CacheTest extends PHPUnit_Framework_TestCase
{
    public function testWork()
    {
        $sm = Registry::getServiceManager();
        /** @var \Rzn\Memcache\Service $memcache */
        $memcache = $sm->get('rzn_memcache');
        $memcache->setPort('11211');

        $this->assertTrue(false != $memcache->getConnection());

        $test = 'test';
        $memcache->set('test', $test);
        $this->assertEquals($test, $memcache->get('test'));
    }
}