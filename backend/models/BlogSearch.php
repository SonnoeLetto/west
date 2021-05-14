<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Blog;

/**
 * BlogSearch represents the model behind the search form of `common\models\Blog`.
 */
class BlogSearch extends Blog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'status'], 'integer'],
            [['slug', 'name_ru', 'name_uk', 'text_ru', 'text_uk', 'meta_title_ru', 'meta_title_uk', 'meta_description_ru', 'meta_description_uk', 'meta_keywords_ru', 'meta_keywords_uk', 'img_big', 'img_middle', 'img_small'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Blog::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_uk', $this->name_uk])
            ->andFilterWhere(['like', 'text_ru', $this->text_ru])
            ->andFilterWhere(['like', 'text_uk', $this->text_uk])
            ->andFilterWhere(['like', 'meta_title_ru', $this->meta_title_ru])
            ->andFilterWhere(['like', 'meta_title_uk', $this->meta_title_uk])
            ->andFilterWhere(['like', 'meta_description_ru', $this->meta_description_ru])
            ->andFilterWhere(['like', 'meta_description_uk', $this->meta_description_uk])
            ->andFilterWhere(['like', 'meta_keywords_ru', $this->meta_keywords_ru])
            ->andFilterWhere(['like', 'meta_keywords_uk', $this->meta_keywords_uk])
            ->andFilterWhere(['like', 'img_big', $this->img_big])
            ->andFilterWhere(['like', 'img_middle', $this->img_middle])
            ->andFilterWhere(['like', 'img_small', $this->img_small]);

        return $dataProvider;
    }
}
