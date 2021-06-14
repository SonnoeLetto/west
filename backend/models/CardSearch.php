<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Card;

/**
 * CardSearch represents the model behind the search form of `common\models\Card`.
 */
class CardSearch extends Card
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'wi_fi_icon', 'phone_icon', 'vols_icon', 'vlan_icon'], 'integer'],
            [['text_ru', 'text_uk', 'text_preview_ru', 'text_preview_ru'], 'safe'],
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
        $query = Card::find();

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
            'wi_fi_icon' => $this->wi_fi_icon,
            'phone_icon' => $this->phone_icon,
            'vols_icon' => $this->vols_icon,
            'vlan_icon' => $this->vlan_icon,
        ]);

        $query->andFilterWhere(['like', 'text_ru', $this->text_ru])
            ->andFilterWhere(['like', 'text_uk', $this->text_uk]);

        return $dataProvider;
    }
}
