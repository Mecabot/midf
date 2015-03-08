<?php /** @var ReportController $this */ ?>
<?php /** @var Denuncias $model       */ ?>
<?php echo CHtml::beginForm(Yii::app()->getUrlManager()->createUrl('report/add'), null, ['class' => 'form-horizontal']); ?>
    <input type="hidden" class="form-control" name="fk_cat1" value="<?= $cat1 ?>"/>
    <input type="hidden" class="form-control" name="fk_cat2" value="<?= $cat2->id ?>"/>
    <input type="hidden" class="form-control" name="denuncia" value="<?= $cat2->name ?>"/>

    <div class="form-group">
        <label for="inputCP" class="col-sm-2 control-label">Código Postal</label>
        <div class="col-sm-10">
            <input id="inputCP" type="text" class="form-control" placeholder="CP" name="CP"/>
        </div>
    </div>

    <div class="form-group">
        <label for="calle" class="col-sm-2 control-label">Calle</label>
        <div class="col-sm-10">
            <input id="calle" type="text" class="form-control" placeholder="Calle principal" name="calle"/>
        </div>
    </div>

    <div class="form-group">
        <label for="entre_calle" class="col-sm-2 control-label">Entre</label>
        <div class="col-sm-10">
            <input id="entre_calle" type="text" class="form-control" placeholder="Nombre de la calle" name="entre_calle"/>
        </div>
    </div>

    <div class="form-group">
        <label for="y_calle" class="col-sm-2 control-label">Y Calle</label>
        <div class="col-sm-10">
            <input id="y_calle" type="text" class="form-control" placeholder="Nombre de la calle" name="y_calle"/>
        </div>
    </div>

    <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
        <div class="col-sm-10">
            <textarea id="descripcion" type="text" class="form-control" placeholder="CP" rows="5" name="descripcion">
            </textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="images" class="col-sm-2 control-label">Imágenes</label>
        <div class="col-sm-10">
            <img data-src="holder.js/264x119" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
    </div>
<?php echo CHtml::endForm(); ?>
