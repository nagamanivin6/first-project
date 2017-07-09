<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidatedetails".
 *
 * @property integer $candidateId
 * @property string $candidateName
 * @property string $experience
 * @property double $expectedSalary
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Candidatedetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
	 public $juniorDeveloper;
	 public $seniorDeveloper;
	 public $budget;
    public static function tableName()
    {
        return 'candidatedetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidateName', 'experience', 'expectedSalary'], 'required'],
			['candidateName','unique'],
            [['expectedSalary'], 'number'],
           // [['experience'], 'number',['max'=>10]],
            [['candidateName'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'juniorDeveloper'=>'Junior Developer',
			'seniorDeveloper'=>'Senior Developer',
			'budget'=>'Budget',
            'candidateId' => 'Candidate ID',
            'candidateName' => 'Candidate Name',
            'experience' => 'Experience',
            'expectedSalary' => 'Expected Salary',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
	
	public function saveMultipleCandidateDetails()
	{
		
		for($i=1;$i<=5000;$i++){
			
			$experience = rand(1,10);
			if($experience < 3){
				$salary = rand(100000,400000);
			}else{
				$salary = rand(400000,1200000);
			}
			$candidates[] = ['candidateName_'.$i,$experience,$salary];
		}
		Yii::$app->db->createCommand()->batchInsert('candidateDetails',
		['candidateName','experience','expectedSalary'], 
											$candidates
										)->execute();
										
										

	}
}
