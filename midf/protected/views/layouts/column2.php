<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="col-md-3" role="complementary">
    <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
        <ul class="nav bs-docs-sidenav">
            <li><a href="#">Nuevo reporte</a></li>
            <li><a href="index.php?r=estadisticas">Estadísticas</a></li>
            <li><a href="index.php?r=seguimiento/uno">Seguimiento</a></li>
            <li class="divider"></li>
            <li><a href="#">Lo más reportado</a></li>
        </ul>
    </nav>
</div>

<div class="col-md-9" role="main">
    <?= $content ?>
</div>

<?php $this->endContent(); ?>