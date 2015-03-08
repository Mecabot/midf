<?php $this->setPageTitle('Seguimiento'); ?>

<p>Ingresa el numero de Folio que deseas consultar: </p>

<form action="<?= Yii::app()->getUrlManager()->createUrl('seguimiento/dos'); ?>" method="post">
    <p>
        <label>* Folio <input name="folio" type="text" id="folio" required="" /></label>
    </p>
    <p>
        <img src="images/reCAPTCHA.png" />
    </p>
    <input type="submit" value="Consultar" class="btn btn-primary">
</form>
<br><br>
<p align="center">Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
