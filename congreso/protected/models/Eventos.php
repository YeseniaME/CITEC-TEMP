<?php

/**
 * This is the model class for table "eventos".
 *
 * The followings are the available columns in table 'eventos':
 * @property integer $id_evento
 * @property string $nombre
 * @property string $logotipo
 * @property string $convocatoria
 * @property string $costo
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $lugar
 * @property string $mas_informacion
 *
 * The followings are the available model relations:
 * @property Actividades[] $actividades
 * @property Articulos[] $articuloses
 * @property Participantes[] $participantes
 */
class Eventos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eventos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, logotipo, convocatoria, lugar', 'length', 'max'=>250),
			array('costo, fecha_inicio, fecha_fin, mas_informacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_evento, nombre, logotipo, convocatoria, costo, fecha_inicio, fecha_fin, lugar, mas_informacion', 'safe', 'on'=>'search'),
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
			'actividades' => array(self::HAS_MANY, 'Actividades', 'id_evento'),
			'articuloses' => array(self::HAS_MANY, 'Articulos', 'id_evento'),
			'participantes' => array(self::MANY_MANY, 'Participantes', 'participantes_eventos(id_evento, id_participante)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_evento' => 'Id Evento',
			'nombre' => 'Nombre',
			'logotipo' => 'Logotipo',
			'convocatoria' => 'Convocatoria',
			'costo' => 'Costo',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'lugar' => 'Lugar',
			'mas_informacion' => 'Mas Informacion',
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

		$criteria->compare('id_evento',$this->id_evento);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('logotipo',$this->logotipo,true);
		$criteria->compare('convocatoria',$this->convocatoria,true);
		$criteria->compare('costo',$this->costo,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('mas_informacion',$this->mas_informacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Eventos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
