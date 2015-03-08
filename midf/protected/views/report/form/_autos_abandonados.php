<?php /** @var ReportController $this */ ?>
<?php /** @var Denuncias $model       */ ?>

<form class="form-horizontal">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Calle:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Calle principal">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Número:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Número interior + número exterior">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Entre calles:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Calles principales que delimitan">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Código Postal</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="CP">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
    </div>
</form>