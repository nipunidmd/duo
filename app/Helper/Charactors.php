<?php
namespace App\Helper;
/**
 *
 */
class Charactors
{

    public static function jsonable($string)
    {
      return str_replace("?", " ", mb_convert_encoding($string, 'UTF-8', 'UTF-8'));
    }

}
