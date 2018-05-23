<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
/* @var $this CatalogController */

$this->breadcrumbs=array(
	'Catalog'=>array('/catalog'),
	'Catalog',
);
?>


<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'season-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    ));

    ?>

   <div class="row">
        <?php echo CHtml::label('Введите кол-во','countRate');?>
        <?php echo CHtml::textField('countRate','');?>
    </div>

    <div class="row buttons">
        <button type="button" id="spec">Поиск 1</button>
        <button type="button" id="usual">Поиск 2</button>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
<div id="table"></div>
<script>

    $('#spec').on('click',function (){
        var data = $('#countRate').val();
        $.ajax({
            type:'POST',
            url:'',
            data:{'data':data,'type':'spec'},
            cache:false,
            success:function (responce) {
                $('#table').html(responce);
            }
        });
    });

    $('#usual').on('click',function (){
        var data = $('#countRate').val();
        $.ajax({
            type:'POST',
            url:'',
            data:{'data':data,'type':'usual'},
            cache:false,
            success:function (responce) {
                console.log(responce);
                $('#table').html(responce);
            }
        });
    });
</script>