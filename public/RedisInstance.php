<?php

class RedisInstance
{
    /**
     * 类对象实例数组,共有静态变量
     * @var null
     */
    private static $_instance;

    /**
     * 数据库连接资源句柄
     * @var
     */
    private static $_connectSource;

    /**
     * 私有化构造函数，防止类外实例化
     * RedisConnect constructor.
     */
    private function __construct()
    {

    }

    /**
     *  单例方法,用于访问实例的公共的静态方法
     * @return \Redis
     * @static
     */
    public static function getInstance()
    {
        if (!(static::$_instance instanceof \Redis)) {
            static::$_instance = new \Redis();
            self::getInstance()->connect('127.0.0.1','6379');
            self::getInstance()->auth('****');
        }
        return static::$_instance;
    }

    /**
     * Redis数据库是否连接成功
     * @return bool|string
     */
    public static function connect()
    {
        // 如果连接资源不存在，则进行资源连接
        if (!self::$_connectSource)
        {
            //@return bool TRUE on success, FALSE on error.
            self::$_connectSource = self::getInstance()->connect('127.0.0.1','6379');
            // 没有资源返回
            if (!self::$_connectSource)
            {
                return 'Redis Server Connection Fail';
            }
        }
        return self::$_connectSource;
    }

    /**
     * 私有化克隆函数，防止类外克隆对象
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

}

?>
