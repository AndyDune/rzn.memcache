<?
/**
 * ----------------------------------------------------
 * | Автор: Андрей Рыжов (Dune) <info@rznw.ru>         |
 * | Сайт: www.rznw.ru                                 |
 * | Телефон: +7 (4912) 51-10-23                       |
 * | Дата: 23.12.2015                                  |
 * ----------------------------------------------------
 *
 */
namespace Rzn\Memcache;
use Memcache;

class Service
{
    protected $memCacheReady = true;

    protected $connection = null;

    protected $host = '127.0.0.1';

    protected $port = null;

    public function __construct()
    {
        if (!class_exists('Memcache')) {
            $this->memCacheReady = false;
        }
    }

    public function getConnection()
    {
        if (!$this->memCacheReady) {
            return false;
        }
        if ($this->connection !== null) {
            return $this->connection;
        }
        $this->connection = new Memcache();
        $this->memCacheReady = $this->connection->connect($this->host, $this->port);
        if (!$this->memCacheReady) {
            return false;
        }
        return $this->connection;
    }

    public function set($key, $value)
    {
        $connection = $this->getConnection();
        if(!$connection) {
            return false;
        }
        return $connection->set($key, $value);
    }

    public function get($key)
    {
        $connection = $this->getConnection();
        if(!$connection) {
            return false;
        }

        return $connection->get($key);
    }


    public function setHost($value)
    {
        $this->host = $value;
    }

    public function setPort($value)
    {
        $this->port = $value;
    }

}