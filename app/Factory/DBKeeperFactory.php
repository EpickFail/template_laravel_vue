<?php

namespace App\Factory;

use App\Keep\DBKeeper;

Class DBKEeperFactory implements KeeperFactory
{
    public static function createKeeper()
    {
        return new DBKeeper();
    }
}
