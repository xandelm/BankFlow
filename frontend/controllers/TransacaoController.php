<?php

namespace frontend\controllers;

use common\models\Transacao;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransacaoController implements the CRUD actions for Transacao model.
 */
class TransacaoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'], // Allow only logged-in users
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Transacao models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Transacao::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'ID_Transacao' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Transacao model.
     * @param int $ID_Transacao Id Transacao
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID_Transacao)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_Transacao),
        ]);
    }

    /**
     * Creates a new Transacao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Transacao();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ID_Transacao' => $model->ID_Transacao]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Transacao model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID_Transacao Id Transacao
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID_Transacao)
    {
        $model = $this->findModel($ID_Transacao);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_Transacao' => $model->ID_Transacao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Transacao model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID_Transacao Id Transacao
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID_Transacao)
    {
        $this->findModel($ID_Transacao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Transacao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID_Transacao Id Transacao
     * @return Transacao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_Transacao)
    {
        if (($model = Transacao::findOne(['ID_Transacao' => $ID_Transacao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
