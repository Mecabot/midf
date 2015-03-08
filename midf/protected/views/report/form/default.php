<?php /** @var ReportController $this */ ?>
<?php /** @var Denuncias $model       */ ?>
<?php echo CHtml::beginForm(Yii::app()->getUrlManager()->createUrl('report/add'), null, ['class' => 'form-horizontal']); ?>
    <div class="form-group">
        <label for="inputCP" class="col-sm-2 control-label">Código Postal</label>
        <div class="col-sm-10">
            <input id="inputCP" type="text" class="form-control" placeholder="CP" />
        </div>
    </div>
    <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
        <div class="col-sm-10">
            <textarea id="descripcion" type="text" class="form-control" placeholder="CP" rows="5">
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
