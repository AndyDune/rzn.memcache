<?
/**
 * ----------------------------------------------------
 * | Автор: Андрей Рыжов (Dune) <info@rznw.ru>         |
 * | Сайт: www.rznw.ru                                 |
 * | Телефон: +7 (4912) 51-10-23                       |
 * ----------------------------------------------------
 */
//$zendPrefix = '';
use Bitrix\Main\Loader;
use Bitrix\Main\EventManager;
CModule::AddAutoloadClasses(
    "rzn.memcache",
    []
);
