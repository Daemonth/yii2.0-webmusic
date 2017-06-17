<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\MusicForm;
use frontend\models\ContactForm;
use common\models\ChannelModel;
use yii\web\UploadedFile;
use common\models\UploadForm;
use common\models\Trends;
use common\models\MusicModel;
use common\models\Umtable;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use common\models\MP3File;
use common\models\Addtion;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
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
        if (!Yii::$app->user->isGuest) {

            $ul = Yii::$app->homeUrl;

            $music = MusicModel::getMusicByT();
            $hotmusic = MusicModel::getMusicByS();
            $Mhotmusic = MusicModel::getMusicByM();

            return $this->render('index', [
                'music' => $music,
                'hotmusic' => $hotmusic,
                'Mhotmusic' => $Mhotmusic,
                'ul' => $ul,
            ]);
        } else {
            return $this->render('login');
        }

    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }







    // 展示频道

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionChannel($id)
    {


        $curPage = Yii::$app->request->get('page', 1);  //获取当前页
        $pageSize = 2;                 //设置每页显示条数
        $pid = ['pid' => $id];
        $count = ChannelModel::find()->where($pid)->count();
        $pages = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);

        $data1 = ChannelModel::findfpd($id);
        $channel = $data1->offset($pages->offset)->limit($pages->limit)->all();

        // $channel=ChannelModel::getchannels();
        $hotchannel = ChannelModel::findHotC();
        $zchannel = ChannelModel::findzpd();
        //$music=MusicModel::getAllmusics();
        //$hotmusic=MusicModel::gethotm();
        return $this->render('channel', ['channel' => $channel, 'pages' => $pages, 'hotchannel' => $hotchannel, 'zchannel' => $zchannel]);
    }

    //上传作品
    public function actionUpload()
    {

        $model = new MusicForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->soundFile = UploadedFile::getInstance($model, 'soundFile');
            $model->img = $model->imageFile;
            $model->sound = $model->soundFile;
            $musicSrc = "./sounds/$model->soundFile";


            if ($model->upload()) {
                //计算音频长度
                $mp3 = new MP3File($musicSrc);
                $a = $mp3->getDurationEstimate();
                $b = $mp3->getDuration();
                $duration = $mp3::formatTime($b);
                $time = $duration['minutes'] . ':' . $duration['seconds'];
                $model->duration = $time;

                if ($model->load(Yii::$app->request->post()) && $model->validate()) {

                    if ($model->addmusic()) {


                        return $this->render('upload', ['model' => $model]);
                    }
                }
            }
        }

        return $this->render('upload', ['model' => $model]);

    }

    /**
     * var_dump();
     * 好友圈
     *
     * @return mixed
     */
    public function actionCommunity()
    {

        $id = Yii::$app->user->identity->id;
        $ul = Yii::$app->homeUrl;
        $curPage = Yii::$app->request->get('page', 1);  //获取当前页
        $pageSize = 3;
        $useid = ['useid' => $id];

        $count1 = Trends::find()->joinwith('musicModel')->joinwith('auser')->where($useid)->count();
        $count2 = Trends::find()->asArray()->joinwith('musicModel')->join('LEFT JOIN', 'addtion', 'addtion.auseid= trends.useid')->where(['addtion.useid' => $useid])->orderBy('trends.time DESC')->count();
        $count = $count1 + $count2;
        $pages = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);


        $data = Trends::find()->asArray()->joinwith('musicModel')->joinwith('auser')->where($useid)->orderBy('time DESC');
        $trend1 = $data->offset($pages->offset)->limit($pages->limit)->all();

        //关注动态
        $data1 = Trends::find()->asArray()->joinwith('musicModel')->joinwith('user')->joinwith('addtion')->where(['addtion.useid' => $useid])->orderBy('trends.time DESC');

        $trend2 = $data1->offset($pages->offset)->limit($pages->limit)->all();

        $trend = array_merge($trend1, $trend2);
        $len = count($trend);
        for ($k = 1; $k < $len; $k++) {
            for ($j = 0; $j < $len - $k; $j++) {
                if ($trend[$j]['time'] < $trend[$j + 1]['time']) {
                    $temp = $trend[$j + 1];
                    $trend[$j + 1] = $trend[$j];
                    $trend[$j] = $temp;
                }
            }
        }


        $count3 = Addtion::getByAdd($id);
        $count4 = Addtion::getByAID($id);
        $count5 = Trends::getCUseid($id);
        return $this->render('community', ['trend' => $trend, 'ul' => $ul, 'id' => $id, 'pages' => $pages, 'count3' => $count3, 'count4' => $count4, 'count5' => $count5]);
    }

    /**
     * 冒泡排序
     *
     * @return mixed
     */
    public function actionPaixu()
    {
        $id = Yii::$app->user->identity->id;
        $amusic = MusicModel::getMusicByLT($id);
        $smusic = MusicModel::getMusicBySdT($id);
        $test = array_merge($amusic, $smusic);
        $len = count($test);
        for ($k = 1; $k < $len; $k++) {
            for ($j = 0; $j < $len - $k; $j++) {
                if ($test[$j]['time'] < $test[$j + 1]['time']) {
                    $temp = $test[$j + 1];
                    $test[$j + 1] = $test[$j];
                    $test[$j] = $temp;
                }
            }
        }

        return $this->render('community', ['test' => $test]);
    }


}
