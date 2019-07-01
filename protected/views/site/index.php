<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bem vindo ao <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div class="row">
    <div class="col-md-6">
        <b><p>Recent Searches</p></b>

        <?php foreach($pesquisa as $key => $value){
            echo "<li>" . $value['pesquisa'] ."</li>";
        } ?>

    </div>
    <div class="col-md-6">
        <b><p>Trending Now</p></b>

        <ul>
            <?php foreach(array_slice((array)$trending, 0, 5) as $key => $value){
                $value = (array)$value;
                $name = $value['name'];
                echo "<li>" . $name ."</li>";
            } ?>
        </ul>

    </div>
</div>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'index-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

<div class="form">

    <?php echo $form->labelEx($model,'txt'); ?>
    <?php echo $form->textField($model,'txt'); ?>
    <button type="submit" class="btn btn-success">Buscar</button>
    <?php echo $form->error($model,'txt'); ?>
    <?php $this->endWidget(); ?>
</div>

<ul>
    <?php foreach((array)$tweets as $key => $tweet){
        foreach(array_slice((array)$tweet, 0, 5) as $values){

            if(isset($values->user)){
                $img_url = $values->user->profile_image_url;
            }

            if(isset($values->text)){
                $text = $values->text;
                echo '<img src="'.$img_url.'" /> |' .$text.'<br>.';
            }
        }
    } ?>
</ul>