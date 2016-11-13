<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asociacion".
 *
 * @property integer $username
 * @property integer $proyecto
 * @property integer $rol
 *
 * @property User $username0
 * @property Proyecto $proyecto0
 * @property Rol $rol0
 */
class Asociacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asociacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'proyecto', 'rol'], 'required'],
            [['username', 'proyecto', 'rol'], 'integer'],
            [['username'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['username' => 'id']],
            [['proyecto'], 'exist', 'skipOnError' => true, 'targetClass' => Proyecto::className(), 'targetAttribute' => ['proyecto' => 'id_proyecto']],
            [['rol'], 'exist', 'skipOnError' => true, 'targetClass' => Rol::className(), 'targetAttribute' => ['rol' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'proyecto' => 'Proyecto',
            'rol' => 'Rol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsername0()
    {
        return $this->hasOne(User::className(), ['id' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyecto0()
    {
        return $this->hasOne(Proyecto::className(), ['id_proyecto' => 'proyecto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRol0()
    {
        return $this->hasOne(Rol::className(), ['id' => 'rol']);
    }
}
