public function actionIndex()
    {
        return $this->render('welcome');
    }



public function actionDash()

    {

      $model = new LoginForm();
      if ($model->load(Yii::$app->request->post()) && $model->login()) {
        return $this->render('dash');
      }

      return $this->render('login', [
          'model' => $model,
      ]);

    }
