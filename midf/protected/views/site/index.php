<?php /** @var SiteController $this */ ?>
<?php $this->setPageTitle('Estadísticas del día de hoy'); ?>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-line-chart fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right mini">
                        <div class="huge">102</div>
                        <div>Nuevos reportes</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-check-square-o fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right mini">
                        <div class="huge">12</div>
                        <div>Soluciones</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-spinner fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right mini">
                        <div class="huge">124</div>
                        <div>En proceso</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-remove fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right mini">
                        <div class="huge">13</div>
                        <div>Sin resolver</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a data-toggle="modal" href="#status-map">
        <img src="<?= Yii::app()->request->baseUrl; ?>/images/mapa.png" class="img-responsive" alt="Daily status">
    </a>
    <div class="modal" id="status-map">
        <div class="modal-dialog">
            <div class="modal-content">
                <img src="<?= Yii::app()->request->baseUrl; ?>/images/mapa.png" class="img-responsive" alt="Daily status">
            </div>
        </div>
    </div>
</div>

<hr/>
<div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Últimos reportes
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="title">
                        Baches: Miguel Hidalgo
                    </div>
                    <div class="content">
                        Desde hace una semana este bache no se ha solucionado
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>