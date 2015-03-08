<?php
/** @var ReportController $this */
$this->setPageTitle('Resultado de solicitud');
Yii::app()->user->setFlash('success', "<p>¡Solicitud recibida correctamente!</p><p>Folio <strong>$folio</strong></p>");
?>
