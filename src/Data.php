<?php
namespace Dream\Helpers;

abstract class DataAbstract
{
    abstract function __call($name, $args);
}
