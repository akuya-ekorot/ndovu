<?php

abstract class BaseAchievement {
    protected $name;
    protected $icon;

    public function __construct() {
        $class_name = (new ReflectionClass($this))->getShortName();
        $this->name = preg_replace('/([a-z])([A-Z])/', '$1 $2', $class_name);
        $this->icon = strtolower(str_replace(' ', '-', $this->name())).'.png';
    }

    public function name() {
        return $this->name;
    }

    public function icon() {
        return $this->icon;
    }

    abstract public function qualifier($user);
}

class FirstAchievement extends BaseAchievement {
    public function qualifier($user) {
    }
}

$first = new FirstAchievement();

var_dump($first->name());
var_dump($first->icon());
?>
