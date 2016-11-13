<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proyecto".
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_cierre
 * @property string $estado
 * @property string $username
 * @property string $rol
 */
class Proyecto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proyecto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'fecha_inicio', 'fecha_cierre', 'estado', 'username', 'rol','tipo'], 'required'],
            [['fecha_inicio', 'fecha_cierre'], 'safe'],
            [['nombre', 'descripcion', 'estado', 'username', 'rol','tipo'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_cierre' => 'Fecha Cierre',
            'estado' => 'Estado',
            'username' => 'Username',
            'rol' => 'Rol',
            'tipo' => 'Tipo'
        ];
    }
}
