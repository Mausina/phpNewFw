<?php


namespace app\models;


class User extends AppModels
{

    public $attributes = [
        'login' => '',
        'password' => '',
        'email' => '',
        'name' => '',

    ];

    public $rules = [
        'required' =>[
            ['login'],
            ['password'],
            ['email'],
            ['name'],
        ],
        'email' =>[
            ['email']
        ],
        'lengthMin' => [
            ['password', 6]
        ]
    ];

    public function checkUnique(){
        $user = \R::findOne('user','login = ? OR email = ? LIMIT 1',[$this->attributes['login'],$this->attributes['email']]);
        if($user){
            if($user->login === $this->attributes['login']){
                $this->errors['unique'][] = 'Этот логин уже занят';
            }
            if($user->email === $this->attributes['email']){
                $this->errors['unique'][] = 'Этот email уже занят';
            }
            return false;
        }
        return true;
    }
}