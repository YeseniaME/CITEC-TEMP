<?php

/**
 * This is the model class for table "articulos".
 *
 * The followings are the available columns in table 'articulos':
 * @property integer $id_articulo
 * @property integer $id_participante
 * @property integer $id_evento
 * @property string $titulo
 * @property string $resumen
 * @property string $articulo_pdf
 * @property integer $aceptado
 * @property string $resultado
 *
 * The followings are the available model relations:
 * @property Participantes $idParticipante
 * @property Eventos $idEvento
 */
class Articulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_participante, id_evento', 'required'),
			array('id_participante, id_evento, aceptado', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>500),
			array('articulo_pdf', 'length', 'max'=>250),
			array('resumen, resultado', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_articulo, id_participante, id_evento, titulo, resumen, articulo_pdf, aceptado, resultado', 'safe', 'on'=>'search'),
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
			'idParticipante' => array(self::BELONGS_TO, 'Participantes', 'id_participante'),
			'idEvento' => array(self::BELONGS_TO, 'Eventos', 'id_evento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_articulo' => 'Id Articulo',
			'id_participante' => 'Id Participante',
			'id_evento' => 'Id Evento',
			'titulo' => 'Titulo',
			'resumen' => 'Resumen',
			'articulo_pdf' => 'Articulo Pdf',
			'aceptado' => 'Aceptado',
			'resultado' => 'Resultado',
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

		$criteria->compare('id_articulo',$this->id_articulo);
		$criteria->compare('id_participante',$this->id_participante);
		$criteria->compare('id_evento',$this->id_evento);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('resumen',$this->resumen,true);
		$criteria->compare('articulo_pdf',$this->articulo_pdf,true);
		$criteria->compare('aceptado',$this->aceptado);
		$criteria->compare('resultado',$this->resultado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Articulos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
