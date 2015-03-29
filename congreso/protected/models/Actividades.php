<?php

/**
 * This is the model class for table "actividades".
 *
 * The followings are the available columns in table 'actividades':
 * @property integer $id_actividad
 * @property integer $id_tipo
 * @property integer $id_evento
 * @property string $nombre
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $lugar
 *
 * The followings are the available model relations:
 * @property Eventos $idEvento
 * @property TipoDeActividades $idTipo
 * @property Participantes[] $participantes
 * @property Participantes[] $participantes1
 */
class Actividades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'actividades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo, id_evento', 'required'),
			array('id_tipo, id_evento', 'numerical', 'integerOnly'=>true),
			array('nombre, lugar', 'length', 'max'=>250),
			array('fecha_inicio, fecha_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_actividad, id_tipo, id_evento, nombre, fecha_inicio, fecha_fin, lugar', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idEvento' => array(self::BELONGS_TO, 'Eventos', 'id_evento'),
			'idTipo' => array(self::BELONGS_TO, 'TipoDeActividades', 'id_tipo'),
			'participantes' => array(self::MANY_MANY, 'Participantes', 'participantes_actividades(id_actividad, id_participante)'),
			'participantes1' => array(self::MANY_MANY, 'Participantes', 'ponentes_actividades(id_actividad, id_participante)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_actividad' => 'Id Actividad',
			'id_tipo' => 'Id Tipo',
			'id_evento' => 'Id Evento',
			'nombre' => 'Nombre',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'lugar' => 'Lugar',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_actividad',$this->id_actividad);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('id_evento',$this->id_evento);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('lugar',$this->lugar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actividades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
