<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Register extends Model
{
    public $rname;
    public $rlastname;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['rname','rlastname', 'required'],
        ];
    }
}
