<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <?php $this->beginBody() ?>
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="/" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>P</b>S</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Pi</b>Service</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    
                        <span class="sr-only"><?= Yii::t('app','Toggle navigation') ?></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   
                                   <!-- <?php echo Html::img('@web/dist/img/guest.png', ['class' => "user-image"]) ?>-->
                                    <i class="fa fa-sign-in"></i>
                                    <span class="hidden-xs"><?= Yii::t('app','Sign in') ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <?php echo Html::img('@web/dist/img/guest.png', ['class' => "img-circle"]) ?>
                                        <p>
                                            <?= Yii::t('app',"You're not signed in.") ?>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="/register" class="btn btn-default btn-flat"><?= Yii::t('app','Register') ?></a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/login" class="btn btn-default btn-flat"><?= Yii::t('app','Log in') ?></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header"><?= Yii::t('app','MAIN NAVIGATION') ?></li>
                        <li>
                            <a href="/">
                                <i class="fa fa-home"></i> <span><?= Yii::t('app','Home') ?></span> 
                            </a>
                        </li>
                        <li>
                            <a href="/weather">
                                <i class="fa fa-flash"></i> <span><?= Yii::t('app','Weather') ?></span> 
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                <section class="content">
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </section>
            </div>


            <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
