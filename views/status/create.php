<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\models\Status;
?>
<?php $form = ActiveForm::begin()?>
    <?= $form->field($status,'text')->textarea(['row'=>'4'])->label('Status Update')?>
    <?= $form->field($status,'permissions')->dropDownList($status->getPermissions(),['prompt'=>'选择']) ?>
    <div class="form-group">
        <?= Html::submitButton('Submit',['class' =>'btn btn-primary'])?>
    </div>
<?php ActiveForm::end();?>
