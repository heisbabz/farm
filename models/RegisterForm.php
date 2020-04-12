<?php

namespace app\models;

use yii\base\Model;

/**
 * Class RegisterForm
 * @package app\models
 * @author Oladejo Babatunde <tundeoladejo@outlook.com>
 */
class RegisterForm extends Model
{
    const SESSION_KEY_REGISTER_FORM = 'register_form';

    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $company;
    public $confirm_password;
    public $terms_and_conditions;
    public $specialization;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                ['first_name', 'last_name', 'company', 'specialization', 'email', 'password', 'confirmPassword',
                    'terms_and_conditions'], 'required'],
            ['email', 'email'],
            [
                'terms_and_conditions',
                'required', 'requiredValue' => 1,
                'message' => 'You need to agree with our Term & Conditions'
            ],
            ['confirm_password', 'compare', 'compareAttribute' => 'password']
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Password',
            'email' => 'Email Address',
            'company' => 'Name of Company/Farm/Organization',
            'specialization' => 'Specialization'
        ];
    }
}