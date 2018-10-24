<?php

/**
 * This is the model class for table "mpuwilayah".
 *
 * The followings are the available columns in table 'mpuwilayah':
 * @property string $KODEWIL
 * @property string $NAMAWIL
 */
class Mpuwilayah extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mpuwilayah the static model class
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
		return 'mpuwilayah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KODEWIL', 'required'),
			array('KODEWIL', 'length', 'max'=>2),
			array('NAMAWIL', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('KODEWIL, NAMAWIL', 'safe', 'on'=>'search'),
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
			'KODEWIL' => 'Kodewil',
			'NAMAWIL' => 'Namawil',
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

		$criteria->compare('KODEWIL',$this->KODEWIL,true);
		$criteria->compare('NAMAWIL',$this->NAMAWIL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}