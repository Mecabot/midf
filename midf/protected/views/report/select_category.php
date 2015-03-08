<?php /** @var ReportController $this */ ?>
<?php /** @var Categories[]     $categories*/ ?>

<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Selecciona una categoría<span class="caret"></span></button>
    <input type="hidden" id="cat1-value" />
    <ul class="dropdown-menu" role="menu">
        <?php foreach ($this->getCat1() as $cat1): ?>
            <li role="presentation">
                <a class="cat1" role="menuitem" data-val="<?= $cat1->id ?>"><?= $cat1->name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="btn-group" style="display:none" id="btn-group-cat2">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Selecciona una subcategoría<span class="caret"></span></button>
    <input type="hidden" id="cat2-value" />
    <ul class="dropdown-menu" role="menu">
    </ul>
</div>

<script>
    $( document.body ).on( 'click', '.dropdown-menu li a', function( event ) {

        var $target = $( event.currentTarget );

        $target.closest( '.btn-group' )
            .find('[data-toggle="dropdown"]').text( $target.text() )
            .end()
            .children( '.dropdown-toggle' ).dropdown( 'toggle' );


        if ($target.hasClass("cat1")) {
            $('#btn-group-cat2').slideUp();
            $.get('<?= Yii::app()->getUrlManager()->createUrl('data/categories');?>&id=' + this.dataset.val, function (data) {
                $('#btn-group-cat2 > ul').children().remove();
                for (var i in data) {
                    $('#btn-group-cat2 > ul').append('<li><a data-val="' + data[i].id + '">' + data[i].name + '</a></li>');
                }
                $('#btn-group-cat2').slideDown();
            }, 'json');
        } else {
            window.location.replace("<?= Yii::app()->getUrlManager()->createUrl('report/add')?>&cat=" + this.dataset.val);
        }

        return false;
    });

</script>