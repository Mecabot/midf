<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

    <link href="<?= Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="data:text/css;charset=utf-8," data-href="<?= Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
    <link href="<?= Yii::app()->request->baseUrl; ?>/css/docs.min.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="<?= Yii::app()->request->baseUrl; ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= Yii::app()->request->baseUrl; ?>/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <?php $categories = Categories::model()->findAllByAttributes(['parent_category' => null]); ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MiDF</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php foreach ($categories as $cat1): ?>
                    <?php $cat2 = Categories::model()->findAllByAttributes(['parent_category' => $cat1->id]); ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $cat1->name ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                        <?php foreach ($cat2 as $cat): ?>
                            <li><a href="<?= "category/{$cat1->id}"?>"><?= $cat->name ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Escribe tu duda">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Ayuda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acerca de<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">¿Quiénes somos?</a></li>
                            <li><a href="#">¿Por qué este proyecto?</a></li>
                            <li class="divider"></li>
                            <li><a href="#">¡Contáctanos!</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        <div class="row">
            <?php echo $content; ?>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?= Yii::app()->request->baseUrl; ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
