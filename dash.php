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

            <h5 class="truncate center">MyQuest Screens</h5>

          </div>
      </div><!--close col-->

    </div><!--close row-->



    <div class="row">



        <div class="col col-md-4 col-lg-4 cardTop">


                      <div class="card ">

                        <div class="card-content cardBgColor1 text-center">

                        <i class="material-icons">place</i>
                        <br><br>
                        <h7 class="card-title">MyQuest Screens</h7>
                        <br><br>


                        <div><?= Html::a('Add', ['/screen/create'], ['class'=>'btn btn-primary btn-sm']) ?><?= Html::a('Edit', ['/screen'], ['class'=>'btn btn-primary btn-sm']) ?></div>
                        <div></div>

                        <br>



                        </div><!--close card content-->



                        <div class="cardBottom1"></div>
                        <div class="cardBottom2"></div>

                    </div>


                  </div><!--close col-->







                  <div class="col col-md-4 col-lg-4 cardTop">


                                <div class="card ">

                                  <div class="card-content cardBgColor1 text-center">

                                  <i class="material-icons">text_fields</i>
                                  <br><br>
                                  <h7 class="card-title">MyQuest Text</h7>
                                  <br><br>


                                  <div><?= Html::a('Add', ['/text/create'], ['class'=>'btn btn-primary btn-sm']) ?><?= Html::a('Edit', ['/text'], ['class'=>'btn btn-primary btn-sm']) ?></div>
                                  <div></div>

                                  <br>



                                  </div><!--close card content-->



                                  <div class="cardBottom1"></div>
                                  <div class="cardBottom2"></div>

                              </div>


                            </div><!--close col-->



                            <div class="col col-md-4 col-lg-4 cardTop">


                                          <div class="card ">

                                            <div class="card-content cardBgColor1 text-center">

                                            <i class="material-icons">image</i>
                                            <br><br>
                                            <h7 class="card-title">MyQuest Images</h7>
                                            <br><br>


                                            <div><?= Html::a('Add', ['/images/create'], ['class'=>'btn btn-primary btn-sm']) ?><?= Html::a('Edit', ['/images'], ['class'=>'btn btn-primary btn-sm']) ?></div>
                                            <div></div>

                                            <br>



                                            </div><!--close card content-->



                                            <div class="cardBottom1"></div>
                                            <div class="cardBottom2"></div>

                                        </div>


                                      </div><!--close col-->



</div><!--close row-->









</div>

</div>
