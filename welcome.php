<?php

/* @var $this yii\web\View */

//added helper
use yii\helpers\Html;

$this->title = 'MyQuest Test CMS';
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="site-index">


    <div class="body-content">

      <div class="row ">

      <div class="col col-md-12 col-lg-12">

          <div class="dashLabelbg text-center">

            <h5 class="truncate center">MyQuest CMS</h5>

            <div class="card ">

              <div class="card-content cardBgColor1 text-center">

              <i class="material-icons">place</i>
              <br><br>
              <h7 class="card-title">Instructions</h7>
              <br><br>
              <p class="card-text">Welcome to MyQuest CMS - Please ensure you follow all instructions on the next screen.</p>

   <div><?= Html::a('Access MyQuest CMS', ['/site/dash'], ['class'=>'btn btn-primary btn-sm']) ?></div>


              <div></div>

              <br>



              </div><!--close card content-->



              <div class="cardBottom1"></div>
              <div class="cardBottom2"></div>

          </div>

          </div>
      </div><!--close col-->

    </div><!--close row-->



</div>

</div>
