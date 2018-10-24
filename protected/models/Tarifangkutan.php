<?php

/**
 * This is the model class for table "tarifangkutan".
 *
 * The followings are the available columns in table 'tarifangkutan':
 * @property integer $jnsangkutan_id
 * @property integer $tahun
 * @property string $tarifdasar
 * @property string $tarifbawah
 * @property string $tarifatas
 */
class Tarifangkutan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tarifangkutan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tarifangkutan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jnstrayek_id,tahun,tarifdasar, tarifbawah, tarifatas', 'required'),
			array('jnstrayek_id, tahun', 'numerical', 'integerOnly'=>true),
			array('tarifdasar, tarifbawah, tarifatas', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jnstrayek_id, tahun, tarifdasar, tarifbawah, tarifatas', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jnstrayek_id' => 'Jns Trayek',
			'tahun' => 'Tahun',
			'tarifdasar' => 'Tarif Dasar',
			'tarifbawah' => 'Tarif Bawah',
			'tarifatas' => 'Tarif Atas',
		);
	}

	
	
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
		$criteria->compare('tahun',$this->tahun);
		$criteria->compare('tarifdasar',$this->tarifdasar,true);
		$criteria->compare('tarifbawah',$this->tarifbawah,true);
		$criteria->compare('tarifatas',$this->tarifatas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}