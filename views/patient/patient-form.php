<h2><?= \yii\helpers\Html::encode($model->isNewRecord ? yii::t('hospital', 'New Patient') : yii::t('hospital', 'Update Patient')) ?></h2>
<?=\busrabaysa\hospital\widgets\PatientForm::widget(['pjax' => $pjax, 'model' => $model]); ?>
