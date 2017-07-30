<?php
/**
 * @var $class string
 * @var $form \app\components\ActiveForm
 * @var $items array[]
 */
?>
<ul class="<?= $class ?>">
	<?php foreach($items as $item){ ?>
		<?php if ($item){ ?>
      <li class="list-group-item js-messager-style" data-messager-style="margin-left:-2px;">
				<?php /** @var $item \app\modules\patient\models\Hospitals */ ?>

        <?= \app\components\Helper::eyeInput('RecordForm[hospitals_items_id][]', $item->hospital_id, [
          'checked' => $item->display,
          'label' => $item['name'],
        ]); ?>

			</li>
		<?php } ?>
	<?php } ?>
</ul>
