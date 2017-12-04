<?php

class Model
{
    public static function db()
    {
        return new SQLite3('./database/shop.sqlite');
    }
}
