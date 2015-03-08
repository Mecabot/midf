<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li><a href="#">Nuevo reporte</a></li>
        <li><a href="#">Estadísticas</a></li>
        <li><a href="#">Seguimiento</a></li>
        <li class="divider"></li>
        <li><a href="#">Lo más reportado</a></li>
    </ul>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Dashboard</h1>
  <?php echo $content; ?>
</div>

<?php $this->endContent(); ?>