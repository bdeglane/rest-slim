<?php

namespace App\Tool;


use Doctrine\ORM\EntityManager;

/**
 * Class Database
 * This class contains the Doctrine EntityManger class in a static
 * variable to retrieve it in any part of Monsieur
 *
 * @package App\Tool
 */
class Database
{
    /**
     * @type EntityManager
     */
    private static $em;

    /**
     * @param $em EntityManager
     */
    public static function setEntityManager($em)
    {
        if (!(self::$em instanceof EntityManager)) {
            self::$em = $em;
        }
    }

    /**
     * @return EntityManager
     */
    public static function getEntityManager()
    {
        return self::$em;
    }
}