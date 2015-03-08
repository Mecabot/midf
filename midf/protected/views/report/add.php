<?php /** @var ReportController $this */ ?>
<?php /** @var Categories $cat1 */ ?>
<?php /** @var Categories $cat2 */ ?>

<ol class="breadcrumb">
    <li><a href="#"><?= $cat1->name ?> </a></li>
    <li class="active"><?= $cat2->name ?> </a></li>
</ol>

<?php $viewFile = 'form/' . strtolower(str_replace(' ', '_', $cat2->name)); ?>
<?php $exists = $this->getViewFile($viewFile); ?>
<?php $this->renderPartial($exists ? $viewFile : 'form/default', ['model' => Denuncias::model()]); ?>