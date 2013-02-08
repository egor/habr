<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $id_post
 * @property string $header
 * @property string $text
 * @property string $tegs
 * @property integer $date
 * @property integer $user_id
 * @property integer $type
 * @property integer $plus
 * @property integer $minus
 * @property integer $favorites
 * @property integer $category_id
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('header, text, tegs, date, user_id, type, plus, minus, favorites, category_id, approved, visibility', 'required'),
			array('date, user_id, type, plus, minus, favorites, category_id, approved, visibility', 'numerical', 'integerOnly'=>true),
			array('header, tegs', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_post, header, text, tegs, date, user_id, type, plus, minus, favorites, category_id, approved, visibility', 'safe', 'on'=>'search'),
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
			'id_post' => 'Id Post',
			'header' => 'Заголовок',
			'text' => 'Текст',
			'tegs' => 'Теги',
			'date' => 'Date',
			'user_id' => 'User',
			'type' => 'Type',
			'plus' => 'Plus',
			'minus' => 'Minus',
			'favorites' => 'Favorites',
			'category_id' => 'Категория',
                        'approved' => 'Одобрено администрацией', 
                        'visibility' => 'Выводить'
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

		$criteria->compare('id_post',$this->id_post);
		$criteria->compare('header',$this->header,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('tegs',$this->tegs,true);
		$criteria->compare('date',$this->date);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('plus',$this->plus);
		$criteria->compare('minus',$this->minus);
		$criteria->compare('favorites',$this->favorites);
		$criteria->compare('category_id',$this->category_id);
                $criteria->compare('visibility',$this->visibility);
                $criteria->compare('approved',$this->approved);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}