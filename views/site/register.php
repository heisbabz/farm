<?php

use yii\base\Model;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;

echo Html::tag('h1', 'Register', ['class' => 'card-box-title']);
$form = ActiveForm::begin([
    'id' => 'register-form',
    'options' => ['class' => 'form', 'autocomplete' => 'off'],
    'action' => 'register-user',
]);

echo $form->field($model, 'first_name');
echo $form->field($model, 'last_name');
echo $form->field($model, 'company');
echo $form->field($model, 'specialization')->dropDownList([], ['prompt' => 'Please choose one']);
echo $form->field($model, 'email')->textInput($isAdmin ? ['disabled' => 'true', 'value' => $email] : []);
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'confirm_password')->passwordInput();
echo $form->field($model, 'terms_and_conditions')->checkbox()
    ->label(
        'I agree with the ' . Html::a('Terms & Conditions', Url::toRoute('#'))
    );
echo Html::submitButton('Register', ['class' => 'btn btn-primary btn-block']);
ActiveForm::end();