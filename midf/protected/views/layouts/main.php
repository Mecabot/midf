<?php /** @var Controller $this */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="df, reportes">

    <title>
        Reportes ciudadanos
    </title>

    <link rel="icon" href="<?= Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon">
    <link href="<?= Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="data:text/css;charset=utf-8," data-href="<?= Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
    <link href="<?= Yii::app()->request->baseUrl; ?>/css/docs.min.css" rel="stylesheet">
    <link href="<?= Yii::app()->request->baseUrl; ?>/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />

    <!--[if lt IE 9]><script src="<?= Yii::app()->request->baseUrl; ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= Yii::app()->request->baseUrl; ?>/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-146052-10', 'getbootstrap.com');
        ga('send', 'pageview');
    </script>
</head>
<body>

    <header class="navbar-static-top navbar-default" id="top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?= Yii::app()->request->baseUrl ?>" class="navbar-brand" style="padding:0">
                    <img src="images/logo.png" />
                </a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse">
                <ul class="nav navbar-nav">
                <?php foreach ($this->getCat1() as $cat1): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?= $cat1->name ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php foreach ($this->getCat2($cat1->id) as $cat): ?>
                                <li><a href="<?= Yii::app()->getUrlManager()->createUrl("estadisticas&cat={$cat->id}") ?>"><?= $cat->name ?></a></li>
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
                    <li><a href="index.php?r=acercade/ayuda"><i class="fa fa-question-circle"></i> Ayuda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-group"></i> Acerca de<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.php?r=acercade/quienes_somos">¿Quiénes somos?</a></li>
                            <li><a href="index.php?r=acercade/proyecto">¿Por qué este proyecto?</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php?r=acercade/contacto">¡Contáctanos!</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <div class="bs-docs-header" id="content">
        <div class="container">
            <h1>Reportes ciudadanos</h1>
            <p>Reporta, mide y mejora</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?= Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?= Yii::app()->request->baseUrl; ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>

    <script>
        window.twttr = (function (d,s,id) {
            var t, js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return; js=d.createElement(s); js.id=id; js.async=1;
            js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
            return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
        }(document, "script", "twitter-wjs"));
    </script>

    <script>
        var _gauges = _gauges || [];
        (function() {
            var t   = document.createElement('script');
            t.async = true;
            t.id    = 'gauges-tracker';
            t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
            t.src = '//secure.gaug.es/track.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(t, s);
        })();
    </script>

    <div class="container bs-docs-container">
        <div class="row">
            <?= $content ?>
        </div>
    </div>

</body>
</html>
