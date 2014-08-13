<h3>Observaciones</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'observaciones-orden-soporte-grid',
	'dataProvider'=>$model->search(),
	'hideHeader'=>true,
	'htmlOptions'=>array('style'=>'padding:0'),
	'template'=>'{items}{summary}{pager}',
	'columns'=>array(
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('ObservacionesOrdenSoporte/updateEditable', array('model'=>'ObservacionesOrdenSoporte', 'field'=>'descripcion')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'usuario',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('ObservacionesOrdenSoporte/updateEditable', array('model'=>'ObservacionesOrdenSoporte', 'field'=>'usuario')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fecha',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('ObservacionesOrdenSoporte/updateEditable', array('model'=>'ObservacionesOrdenSoporte', 'field'=>'fecha')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'hora',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('ObservacionesOrdenSoporte/updateEditable', array('model'=>'ObservacionesOrdenSoporte', 'field'=>'hora')),
				'placement' => 'left',
			)
		),
		/*array(
			'class' => 'editable.EditableColumn',
			'name' => 'entidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('ObservacionesOrdenSoporte/updateEditable', array('model'=>'ObservacionesOrdenSoporte', 'field'=>'entidad')),
				'placement' => 'left',
			)
		),		

		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyS',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('ObservacionesOrdenSoporte/updateEditable', array('model'=>'ObservacionesOrdenSoporte', 'field'=>'keyS')),
				'placement' => 'left',
			)
		),		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view}{update}{delete}',
			'buttons' => array(
				'view' => array( //the name {reply} must be same
					'url' => 'Yii::app()->controller->createUrl("ObservacionesOrdenSoporte/view", array("id"=>"$data->keyS", "OrdenSoporteId"=>"'.$_GET['id'].'"))',
				),
				'update' => array( //the name {reply} must be same
					'url' => 'Yii::app()->controller->createUrl("ObservacionesOrdenSoporte/update", array("id"=>"$data->keyS", "OrdenSoporteId"=>"'.$_GET['id'].'"))',
				),
				'delete' => array( //the name {reply} must be same
					'url' => 'Yii::app()->controller->createUrl("ObservacionesOrdenSoporte/delete", array("id"=>"$data->keyS"))',
				),	
			),
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('ObservacionesOrdenSoporte/create', array('model'=>'ObservacionesOrdenSoporte', 'OrdenSoporteId'=>$_GET["id"])),)); ?>
</div>

