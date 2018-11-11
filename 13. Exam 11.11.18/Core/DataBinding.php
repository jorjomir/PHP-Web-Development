<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 10:42 AM
 */

namespace Core;


class DataBinding
{
    public function bind(array $data, string $class_name) {
        $class_data= new \ReflectionClass($class_name);
        $class=new $class_name();
        foreach ($class_data->getProperties() as $property){
            $name=$property->getName();
            if(isset($data[$name])) {
                $t=explode('_',$name);
                $setter='set'. implode('',array_map(function ($n) {return ucfirst($n);}, $t ));
                ucfirst($name);
                $class->$setter($data[$name]);
            }
        }
        return $class;
    }
}