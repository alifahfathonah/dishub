<?php

/**
 * This is the model class for table "gruptrayek".
 *
 * The followings are the available columns in table 'gruptrayek':
 * @property string $id
 * @property string $nama
 * @property integer $jnstrayek_id
 * @property integer $kab_id
 */
class Gruptrayek extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Gruptrayek the static model class
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
		return 'gruptrayek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, nama', 'required'),
			array('jnstrayek_id, kab_id', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>12),
			array('nama', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, jnstrayek_id, kab_id', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'jnstrayek_id' => 'Jnstrayek',
			'kab_id' => 'Kab',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
		$criteria->compare('kab_id',$this->kab_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
public function search01()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
        $criteria->addSearchCondition('jnstrayek_id',1,false);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>20                 
			    ),
		));
	}
	
	public function search02()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
        $criteria->addSearchCondition('jnstrayek_id',2,false);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                  'pageSize'=>20                 
			    ),
		));
	}
}