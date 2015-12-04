<?php
/**
 * OmmuTags (ommu-tags)
 * @var $this GlobaltagController
 * @var $model OmmuTags
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2012 Ommu Platform (ommu.co)
 * @link https://github.com/oMMu/Ommu-Core
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Ommu Tags'=>array('manage'),
		$model->tag_id=>array('view','id'=>$model->tag_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('/global_tag/_form', array(
	'model'=>$model,
)); ?>
	