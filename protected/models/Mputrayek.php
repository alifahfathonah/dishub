<?php

/**
 * This is the model class for table "mputrayek".
 *
 * The followings are the available columns in table 'mputrayek':
 * @property string $KODETRA
 * @property string $NAMATRA
 * @property string $KODEWIL
 */
class Mputrayek extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mputrayek the static model class
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
		return 'mputrayek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KODETRA', 'required'),
			array('KODETRA', 'length', 'max'=>6),
			array('NAMATRA', 'length', 'max'=>100),
			array('KODEWIL', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('KODETRA, NAMATRA, KODEWIL', 'safe', 'on'=>'search'),
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
			'KODETRA' => 'Kodetra',
			'NAMATRA' => 'Namatra',
			'KODEWIL' => 'Kodewil',
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

		$criteria->compare('KODETRA',$this->KODETRA,true);
		$criteria->compare('NAMATRA',$this->NAMATRA,true);
		$criteria->compare('KODEWIL',$this->KODEWIL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


}
