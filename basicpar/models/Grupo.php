<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property string $username
 * @property string $email
 * @property string $rol
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'rol'], 'required'],
            [['username', 'email', 'rol'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Nombre de usuario',
            'email' => 'Email',
            'rol' => 'Rol',
        ];
    }
}
