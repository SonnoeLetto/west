<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tariffs;

/**
 * TariffsSearch represents the model behind the search form of `common\models\Tariffs`.
 */
class TariffsSearch extends Tariffs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'group_id', 'speed', 'price', 'price_ip', 'status', 'is_hot', 'for_new'], 'integer'],
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
        $query = Tariffs::find();

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
            'group_id' => $this->group_id,
            'speed' => $this->speed,
            'price' => $this->price,
            'price_ip' => $this->price_ip,
            'status' => $this->status,
            'is_hot' => $this->is_hot,
            'for_new' => $this->for_new,
        ]);

        return $dataProvider;
    }
}
