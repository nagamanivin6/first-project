<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use beastbytes\wizard\WizardBehavior;


/**
 * Site controller
 */
class PracticeController extends Controller
{
    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        $config = [];
//		echo $action->id; die;
        switch ($action->id) {
            case 'registration':
                $config = [
                    'steps' => ['user', 'address', 'phoneNumber', 'user'],
					'autoAdvance'=>false,
                    'events' => [
                        WizardBehavior::EVENT_WIZARD_STEP => [$this, $action->id.'WizardStep'],
                        WizardBehavior::EVENT_AFTER_WIZARD => [$this, $action->id.'AfterWizard'],
                        WizardBehavior::EVENT_INVALID_STEP => [$this, 'invalidStep']
                    ]
                ];
                break;
            case 'resume':
                $config = ['steps' => []]; // force attachment of WizardBehavior
            default:
                break;
        }

        if (!empty($config)) {
            $config['class'] = WizardBehavior::className();
            $this->attachBehavior('wizard', $config);
        }

        return parent::beforeAction($action);
    }
	
	    public function actionRegistration($step = null)
    {
        //if ($step===null) $this->resetWizard();
        return $this->step($step);
    }

   public function registrationWizardStep($event)
    {
		
        if (empty($event->stepData)) {
       //     $modelName = 'backend\\models\\wizard\\registration\\'.ucfirst($event->step);
	        $modelName = 'frontend\\models\\wizard\\registration\\'.ucfirst($event->step);
            $model = new $modelName();
        } else {
            $model = $event->stepData;
        }
		


        $post = Yii::$app->request->post();
        if (isset($post['cancel'])) {
            $event->continue = false;
        } elseif (isset($post['prev'])) {
            $event->nextStep = WizardBehavior::DIRECTION_BACKWARD;
            $event->handled  = true;
        } elseif ($model->load($post) && $model->validate()) {
            $event->data    = $model;
            $event->handled = true;
		if($event->step=="phoneNumber")
		{
			print_r(WizardBehavior::read("user")); die;
		//	print_r($event->branches);
			$event->nextStep ="phoneNumber";//WizardBehavior::BRANCH_DESELECT;
			//die;address
			
		}
            if (isset($post['pause'])) {
                $event->continue = false;
            } elseif ($event->n < 2 && isset($post['add'])) {
                $event->nextStep = WizardBehavior::DIRECTION_REPEAT;
            }
        } else {
            $event->data = $this->render('registration\\'.$event->step, compact('event', 'model'));
        }
    }
    public function registrationAfterWizard($event)
    {
		echo "<pre>";
		print_r($event->stepData); die;
		
        if (is_string($event->step)) {
            $uuid = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0x0fff) | 0x4000,
                mt_rand(0, 0x3fff) | 0x8000,
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
            );

            $registrationDir = Yii::getAlias('@runtime/registration');
            $registrationDirReady = true;
            if (!file_exists($registrationDir)) {
                if (!mkdir($registrationDir) || !chmod($registrationDir, 0775)) {
                    $registrationDirReady = false;
                }
            }
            if ($registrationDirReady && file_put_contents(
                $registrationDir.DIRECTORY_SEPARATOR.$uuid,
                $event->sender->pauseWizard()
            )) {
                $event->data = $this->render('registration\\paused', compact('uuid'));
            } else {
                $event->data = $this->render('registration\\notPaused');
            }
        } elseif ($event->step === null) {
            $event->data = $this->render('registration\\cancelled');
        } elseif ($event->step) {
            $event->data = $this->render('registration\\complete', [
                'data' => $event->stepData
            ]);
        } else {
            $event->data = $this->render('registration\\notStarted');
        }
    }

    /**
    * @param WizardEvent The event
    */
    public function invalidStep($event)
    {
        $event->data = $this->render('invalidStep', compact('event'));
        $event->continue = false;
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


}
