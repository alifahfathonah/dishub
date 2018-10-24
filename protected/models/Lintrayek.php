<?php

/**
 * This is the model class for table "lintrayek".
 *
 * The followings are the available columns in table 'lintrayek':
 * @property integer $id
 * @property string $trayek_id
 * @property integer $jnstrayek_id
 * @property string $terminal_id
 * @property integer $linter_id
 * @property integer $nourut
 */
class Lintrayek extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lintrayek the static model class
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
		return 'lintrayek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trayek_id, terminal_id, linter_id', 'required'),
			array('jnstrayek_id, linter_id, nourut', 'numerical', 'integerOnly'=>true),
			array('trayek_id', 'length', 'max'=>12),
			array('terminal_id', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, trayek_id, jnstrayek_id, terminal_id, linter_id, nourut', 'safe', 'on'=>'search'),
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
			'trayek_id' => 'Trayek',
			'jnstrayek_id' => 'Jns Trayek',
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
		$criteria->compare('trayek_id',$this->trayek_id,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
		$criteria->compare('terminal_id',$this->terminal_id,true);
		$criteria->compare('linter_id',$this->linter_id);
		$criteria->compare('nourut',$this->nourut);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function search01()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('trayek_id',$this->trayek_id,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
		$criteria->compare('terminal_id',$this->terminal_id,true);
		$criteria->compare('linter_id',$this->linter_id);
		$criteria->compare('nourut',$this->nourut);

		$criteria->addSearchCondition('jnstrayek_id',1,false);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>20                 
			    ),
		));
	}
}