<?php 
namespace app\models;
use app\core\model;

class RegisterModel extends model
{
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $passwordConfirm;

    public function rules()
    {
        return [
            'firstname'=>[self::RULE_REQUIRED],
            'lastname'=>[self::RULE_REQUIRED],
            'email'=>[self::RULE_REQUIRED,self::RULE_EMAIL],
            'password'=>[self::RULE_REQUIRED,[self::RULE_MIN =>8]],
            'passwordConfirm'=>[self::RULE_REQUIRED,[self::RULE_MATCH,'matchAttribute']],
        ];
    }
    public function validate()
    {
        foreach($this->rules() as $attr=>$rules):
            $value = $this->{$attr};
            if(is_array($rules)):
                foreach($rules as $rule){
                    $ruleName = $rule[0];
                }
            else:
                $ruleName = $rules;
            endif;

            if($rule===self::RULE_REQUIRED){
                return $value=!'';
            }
        endforeach;
    }
}