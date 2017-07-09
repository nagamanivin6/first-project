<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class User extends Model
{
    public $username;
    public $firstname;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username','firstname', 'required'],
        ];
    }
}
