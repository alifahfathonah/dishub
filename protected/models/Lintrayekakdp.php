<?php

/**
 * This is the model class for table "lintrayekakdp".
 *
 * The followings are the available columns in table 'lintrayekakdp':
 * @property integer $id
 * @property string $trayekakdp_id
 * @property string $terminal_id
 * @property integer $linter_id
 * @property integer $nourut
 */
class Lintrayekakdp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lintrayekakdp the static model class
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
		return 'lintrayekakdp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trayekakdp_id, terminal_id, linter_id', 'required'),
			array('linter_id, nourut', 'numerical', 'integerOnly'=>true),
			array('trayekakdp_id', 'length', 'max'=>8),
			array('terminal_id', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, trayekakdp_id, terminal_id, linter_id, nourut', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'trayekakdp_id' => 'Trayek AKDP',
			'terminal_id' => 'Terminal',
			'linter_id' => 'Linter',
			'nourut' => 'No Urut',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('trayekakdp_id',$this->trayekakdp_id,true);
		$criteria->compare('terminal_id',$this->terminal_id,true);
		$criteria->compare('linter_id',$this->linter_id);
		$criteria->compare('nourut',$this->nourut);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}