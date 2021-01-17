<h2><?= $patient->name . ' ' . $patient->family ?></h2>
<?= \busrabaysa\hospital\widgets\ActionForm::widget(['pjax' => $pjax, 'model' => $model, 'patient' => $patient]); ?>
