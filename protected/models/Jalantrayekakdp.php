<?php

/**
 * This is the model class for table "jalantrayekakdp".
 *
 * The followings are the available columns in table 'jalantrayekakdp':
 * @property string $trayekakdp_id
 * @property string $jalan_id
 * @property integer $nourut
 */
class Jalantrayekakdp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jalantrayekakdp the static model class
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
		return 'jalantrayekakdp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trayekakdp_id, jalan_id, nourut', 'required'),
			array('nourut', 'numerical', 'integerOnly'=>true),
			array('trayekakdp_id, jalan_id', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('trayekakdp_id, jalan_id, nourut', 'safe', 'on'=>'search'),
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
			'trayekakdp_id' => 'Trayek AKDP',
			'jalan_id' => 'Jalan',
			'nourut' => 'No. Urut',
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

		$criteria->compare('trayekakdp_id',$this->trayekakdp_id,true);
		$criteria->compare('jalan_id',$this->jalan_id,true);
		$criteria->compare('nourut',$this->nourut);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}