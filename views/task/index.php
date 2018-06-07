<?php
/** @var array $tasks */
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!--<form method="post">
    --><?/*=
    \yii\jui\DatePicker::widget([
        'value'  => date('Y-m-d') ,
        'language' => 'ru-Ru',
        'dateFormat' => 'dd-MM-yyyy',
        'clientOptions' => [
            'changeMonth' => 'true',
            'changeYear' => 'true',
        ],
        'options'=>['class'=>'form-control',],
    ]);
    */?>

<table class="table table-bordered">
    <tr>
        <td>Дата</td>
        <td>Событие</td>
    </tr>
    <?php foreach ($calendar as $day => $events): ?>
        <tr>
            <td class="td-date"><span class="label label-success"><?= $day; ?></span></td>
            <td>
                <? if (count($events) > 0) {
                    foreach ($events as $event){
                        echo '<a href="?r=task/view&id=' . $event->id . '"><p>' . $event->name . '</p><p class="small">'. $event->description .'</p></a>';}
                } else echo '-'; ?>

            </td>
        </tr>
    <?php endforeach; ?>
</table>