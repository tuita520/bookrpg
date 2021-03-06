<?php
namespace bookrpg\route;

class RouteFactory
{
    /**
     * @param string $impl
     * @param null $config
     * @return RouteBase
     */
    public static function getInstance($impl = 'Default', $config = null)
    {
        $className = __NAMESPACE__ . "\\impl\\" . ucfirst($impl) . 'Route';
        return new $className($config);
    }
}
