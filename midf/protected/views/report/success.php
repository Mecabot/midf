<?php
/** @var ReportController $this */
$this->setPageTitle('Resultado de solicitud');

if (isset($status) && 'error' === $status) {
    Yii::app()->user->setFlash('danger', "<p>¡Por el momento no hay integración con alguna dependencia que pueda atender tu denuncia!</p><p>Folio <strong>$folio</strong></p>");
} else {
    Yii::app()->user->setFlash('success', "<p>¡Solicitud recibida correctamente!</p><p>Folio <strong>$folio</strong></p>");
}
?>
