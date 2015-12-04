<?php
/**
 * OmmuPages (ommu-pages)
 * @var $this OmmuPagesController
 * @var $dataProvider CActiveDataProvider
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2012 Ommu Platform (ommu.co)
 * @link https://github.com/oMMu/Ommu-Core
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Ommu Pages',
	);
?>

<?php $this->widget('application.components.system.FListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'pager' => array(
        'header' => '',
    ), 
    'summaryText' => '',
    'itemsCssClass' => 'items clearfix',
    'pagerCssClass'=>'pager clearfix',
)); ?>