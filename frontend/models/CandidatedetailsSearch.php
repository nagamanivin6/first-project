<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Candidatedetails;

/**
 * CandidatedetailsSearch represents the model behind the search form about `app\models\Candidatedetails`.
 */
class CandidatedetailsSearch extends Candidatedetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidateId', 'status', 'created_at', 'updated_at'], 'integer'],
            [['candidateName', 'experience','juniorDeveloper','seniorDeveloper','budget'], 'safe'],
            [['expectedSalary'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Candidatedetails::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination'=>false,
			'sort'=>false
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'candidateId' => $this->candidateId,
            'expectedSalary' => $this->expectedSalary,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);
		
		$query->andFilterWhere(['<','experience',$this->juniorDeveloper
		]
		);
        $query->andFilterWhere(['like', 'candidateName', $this->candidateName])
            ->andFilterWhere(['like', 'experience', $this->experience]);
			$limit = 10;
			$searchLimit = 0;
			if(is_numeric($this->seniorDeveloper)){
				$searchLimit = $this->seniorDeveloper;
			}
			if(is_numeric($this->juniorDeveloper)){
				$searchLimit += $this->juniorDeveloper;
			}
			if(is_numeric($this->budget)){
				
					
			}
			
			$limit = ($searchLimit > 0) ? $searchLimit : $limit;
		    $query->limit($limit);
        return $dataProvider;
    }
}
