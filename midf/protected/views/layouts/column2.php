<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="col-md-3" role="complementary">
    <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
        <ul class="nav bs-docs-sidenav">
            <li><a href="<?= Yii::app()->getUrlManager()->createUrl('report') ?>"><i class="fa fa-plus fa-left"></i>Nuevo reporte</a></li>
            <li><a href="index.php?r=seguimiento/uno"><i class="fa fa-exchange fa-left"></i>Seguimiento</a></li>
            <li><a href="#"><i class="fa fa-line-chart fa-left"></i>Lo más reportado</a></li>
        </ul>
    </nav>
</div>

<div class="col-md-9" role="main">
    <?php if ('' !== $this->getPageTitle()): ?>
    <h3><?= $this->getPageTitle(); ?></h3>
    <?php endif; ?>

    <?php foreach(Yii::app()->user->getFlashes() as $key => $message): ?>
        <div class="alert alert-<?= $key ?>" role="alert">
            <?= $message ?>
        </div>
    <?php endforeach; ?>

    <?= $content ?>
</div>

<?php $this->endContent(); ?>