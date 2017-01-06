<?php
namespace App\Http\Utilities;
/**
 * Created by PhpStorm.
 * User: Talmon
 * Date: 23/2/2016
 * Time: 12:36 AM
 */
class Category{
    protected static $categories = ['public','private'];
    public static function all(){
        return  static::$categories;
    }
}