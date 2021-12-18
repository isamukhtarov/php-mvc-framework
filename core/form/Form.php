<?php

namespace app\core\form;

use app\core\Model;

class Form
{
    public static function begin(string $action, string $method): Form
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end(): string
    {
        return '</form>';
    }

    public function field(Model $model, string $attribute): InputField
    {
        return new InputField($model, $attribute);
    }
}
