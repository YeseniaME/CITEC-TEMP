<?php

/**
 * This is the model class for table "participantes".
 *
 * The followings are the available columns in table 'participantes':
 * @property integer $id_participante
 * @property string $nombres
 * @property string $apellidos
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Articulos[] $articuloses
 * @property Actividades[] $actividades
 * @property Eventos[] $eventoses
 * @property TiposDeParticipantes[] $tiposDeParticipantes
 */
class Participantes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participantes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, email, contraseña, veri_contraseña', 'required'),//nuevo cosa
			array('nombres, apellidos, email', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_participante, nombres, apellidos, email', 'safe', 'on'=>'search'),
			array('contraseña','safe'),//nuevo cosa
			array('veri_contraseña','safe'),// nueva cosas
			array('email','email'),//validador de email
			array('veri_contraseña','compare','compareAttribute'=>'contraseña','operator'=>'='),//cosa nueva
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
			'articuloses' => array(self::HAS_MANY, 'Articulos', 'id_participante'),
			'actividades' => array(self::MANY_MANY, 'Actividades', 'ponentes_actividades(id_participante, id_actividad)'),
			'eventoses' => array(self::MANY_MANY, 'Eventos', 'participantes_eventos(id_participante, id_evento)'),
			'tiposDeParticipantes' => array(self::MANY_MANY, 'TiposDeParticipantes', 'participantes_tipos(id_participante, id_tipo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_participante' => 'Id Participante',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'email' => 'Email',
			'contraseña' => 'Contraseña', // nueva cosa
			'veri_contraseña' => 'Verificar Contraseña'//nueva cosa
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

		$criteria->compare('id_participante',$this->id_participante);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contraseña',$this->contraseña,true);//cosa nueva
		$criteria->compare('veri_contraseña',$this->veri_contraseña,true); // cosa nueva

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participantes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
