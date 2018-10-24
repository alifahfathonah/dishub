<?php

/**
 * This is the model class for table "lintrayekdaftar".
 *
 * The followings are the available columns in table 'lintrayekdaftar':
 * @property integer $id
 * @property string $trayek_id
 * @property string $trayek
 * @property string $jns_trayek
 * @property integer $jnstrayek_id
 * @property string $terminal
 * @property string $linter
 * @property integer $nourut
 */
class Lintrayekdaftar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lintrayekdaftar the static model class
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
		return 'lintrayekdaftar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trayek_id', 'required'),
			array('id, jnstrayek_id, nourut', 'numerical', 'integerOnly'=>true),
			array('trayek_id', 'length', 'max'=>12),
			array('trayek', 'length', 'max'=>200),
			array('jns_trayek, linter', 'length', 'max'=>20),
			array('terminal', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, trayek_id, trayek, jns_trayek, jnstrayek_id, terminal, linter, nourut', 'safe', 'on'=>'search'),
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
			'trayek' => 'Trayek',
			'jns_trayek' => 'Jns Trayek',
			'jnstrayek_id' => 'Jnstrayek',
			'terminal' => 'Terminal',
			'linter' => 'Linter',
			'nourut' => 'Nourut',
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
		$criteria->compare('trayek',$this->trayek,true);
		$criteria->compare('jns_trayek',$this->jns_trayek,true);
		$criteria->compare('jnstrayek_id',$this->jnstrayek_id);
		$criteria->compare('terminal',$this->terminal,true);
		$criteria->compare('linter',$this->linter,true);
		$criteria->compare('nourut',$this->nourut);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}