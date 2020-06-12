<?php

namespace App\Factory;

use App\Keep\DBKeeper;

Class DBKeeperFactory implements KeeperFactory
{
    public static function createKeeper()
    {
        return new DBKeeper();
    }
}
