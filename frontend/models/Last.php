<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Last extends Model
{
    public $aname;
    public $alastname;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['lname','llastname', 'required'],
        ];
    }
}
