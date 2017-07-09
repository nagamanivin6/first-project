<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Address extends Model
{
    public $aname;
    public $alastname;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['aname','alastname', 'required'],
        ];
    }
}
