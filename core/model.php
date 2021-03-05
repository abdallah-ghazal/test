<?php
namespace app\core;

abstract class model
{
    public const RULE_REQUIRED='required';
    public const RULE_MIN='min';
    public const RULE_MAX='max';
    public const RULE_MATCH='match';
    public const RULE_EMAIL='email';

    public function loadData($data)
    {

        foreach($data as $key=>$value):
            if(property_exists($this,$key)):
                $this->$key = $value;
            endif;
        endforeach;
    }

    abstract function rules();

    public function validate()
    {

    }
}