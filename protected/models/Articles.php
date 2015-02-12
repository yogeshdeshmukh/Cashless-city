<?php

/**
 * This is the model class for table "{{articles}}".
 *
 * The followings are the available columns in table '{{articles}}':
 * @property integer $article_id
 * @property integer $id
 * @property string $article_name
 * @property string $article_content
 * @property string $author_name
 * @property integer $article_active
 *
 * The followings are the available model relations:
 * @property Users $id0
 * @property PostedArticles[] $postedArticles
 */
class Articles extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{articles}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, article_name, article_content, author_name,article_active,article_posted', 'required'),
            array('id, article_active', 'numerical', 'integerOnly' => true),
            array('article_name, author_name', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('article_id, id, article_name, article_content, author_name, article_active,article_posted', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'id0' => array(self::BELONGS_TO, 'Users', 'id'),
            'postedArticles' => array(self::HAS_MANY, 'PostedArticles', 'article_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'article_id' => 'Article',
            'id' => 'ID',
            'article_name' => 'Article Name',
            'article_content' => 'Article Content',
            'author_name' => 'Author Name',
            'article_active' => 'Article Status',
            'article_posted' => 'Post Article',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        //$criteria->compare('article_id', $this->article_id);
        $criteria->compare('id', $this->id);
        // $criteria->addCondition('id', $this->id = Yii::app()->user->id,'WHERE');
        // $criteria->compare('article_name', $this->article_name, true);
        //$criteria->compare('author_name', $this->author_name, true);
        //$criteria->compare('article_active', $this->article_active);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Articles the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function itemAlias($type, $code = NULL) {

        $_items = array(
            'ArticleStatus' => array(
                '0' => 'Not Active',
                '1' => 'Active'
            ),
            'ArticlePosted' => array(
                '0' => 'No',
                '1' => 'Yes'
            )
        );
        if (isset($code))
            return isset($_items[$type][$code]) ? $_items[$type][$code] : false;
        else
            return isset($_items[$type]) ? $_items[$type] : false;
    }

    
    

}
