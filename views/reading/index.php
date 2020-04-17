<?php

use arteam\helpers\Html;
use arteam\settings\assets\SettingsAsset;
use arteam\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model arteam\models\Setting */
/* @var $form arteam\widgets\ActiveForm */

$this->title = Yii::t('arteam/settings', 'Reading Settings');
$this->params['breadcrumbs'][] = $this->title;

SettingsAsset::register($this);
?>
<div class="setting-index">

    <div class="row">
        <div class="col-lg-8"><h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3></div>
        <div class="col-lg-4"></div>
    </div>

    <div class="setting-form">
        <?php
        $form = ActiveForm::begin([
            'id' => 'setting-form',
            'validateOnBlur' => false,
            'fieldConfig' => [
                'template' => "<div class=\"settings-group\"><div class=\"settings-label\">{label}</div>\n<div class=\"settings-field\">{input}\n{hint}\n{error}</div></div>"
            ],
        ])
        ?>

        <?= $form->field($model, 'page_size')->textInput(['maxlength' => true])->hint($model->getDescription('page_size')) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('arteam', 'Save'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>


