<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript"
src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.2.min.js"></script>

<script>
    function validate(form)
    {
        var valid = true
        var textbox = document.getElementById("codigo");

        var oneDay = 24 * 60 * 60 * 1000;
        var firstDate = new Date();
        var secondDate = new Date(2014, 10, 20);

        var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime()) / (oneDay)));


        if (!textbox.value) {
            valid = confirm("¿Seguro que quieres continuar sin escanear un código?\n" +
                    "En " + diffDays + " días ya no podrán ser procesadas las órdenes sin código de equipo.");
        }
        return valid;
    }
</script>






<script type="text/javascript" src="js/jsqrcode/grid.js"></script>
<script type="text/javascript" src="js/jsqrcode/version.js"></script>
<script type="text/javascript" src="js/jsqrcode/detector.js"></script>
<script type="text/javascript" src="js/jsqrcode/formatinf.js"></script>
<script type="text/javascript" src="js/jsqrcode/errorlevel.js"></script>
<script type="text/javascript" src="js/jsqrcode/bitmat.js"></script>
<script type="text/javascript" src="js/jsqrcode/datablock.js"></script>
<script type="text/javascript" src="js/jsqrcode/bmparser.js"></script>
<script type="text/javascript" src="js/jsqrcode/datamask.js"></script>
<script type="text/javascript" src="js/jsqrcode/rsdecoder.js"></script>
<script type="text/javascript" src="js/jsqrcode/gf256poly.js"></script>
<script type="text/javascript" src="js/jsqrcode/gf256.js"></script>
<script type="text/javascript" src="js/jsqrcode/decoder.js"></script>
<script type="text/javascript" src="js/jsqrcode/qrcode.js"></script>
<script type="text/javascript" src="js/jsqrcode/findpat.js"></script>
<script type="text/javascript" src="js/jsqrcode/alignpat.js"></script>
<script type="text/javascript" src="js/jsqrcode/databr.js"></script>

<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */
$this->breadcrumbs=array(
	'Ordenes de Soportes'=>array('admin'),
	'Escanear codigo de barras',
);
?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar observaciones</h4>
      </div>
      <div class="modal-body">
      	<iframe style="width:100%; height:0px"
      	src="" id="idorden">
			</iframe>
      </div>
    </div>
  </div>
</div>

<div style="text-align: center;">
	<h1>Escanear código de barras</h1>
<?php
	foreach(Yii::app()->user->getFlashes() as $key => $message) {
		echo '<div class="alert alert-warning" role="alert">' . $message . '</div>';
	}
?>
        

<form>
    <input type="file" onchange="previewFile()" /><br/>
    <div style="height:200px">
        <img src="" id="preview" height="200" alt="Preview de imagen" />
    </div>  
</form>

<p>El código debe de verse claramente</p>
<button id="decode" onclick="decode()">Aceptar</button> 
<script>

        function read(a)
        {
            //alert(a);
            $('#codigo').val(a);
            if ((typeof sforce != 'undefined') && (sforce != null)) {
                sforce.one.navigateToSObject(a);
            }
            /*else {
                window.location = "/" + a;
            }*/
        }

        $(document).ready(function() {
            qrcode.callback = read;
        });


        function previewFile() {
            var preview = document.querySelector('#preview');
            var file = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }

        function decode() {
            try
            {
                var preview = document.querySelector('#preview');
                qrcode.decode(preview.src);
            }
            catch (e)
            {
                alert('Error - ' + e);
            }
        }

</script>



<a href="http://zxing.appspot.com/scan" style="zoom: 1.5"> Escanear con App</a>


<?php
if (isset($listaOrdenes)){
?>
<section id="no-more-tables">

<?php
	$vare=$this->createUrl('ObservacionesOrdenSoporte/createPopup');
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'ordenes-soporteenproceso-grid',
		'dataProvider'=>$listaOrdenes,
		//'filter'=>$model,
		'columns'=>array(
			array(
				'name' => 'keySOP',
				'htmlOptions' => array('style' => 'width: 9%; text-align: center;', 'data-title'=>"#"),
			),
			array(
				'name' => 'fecha',
				'htmlOptions' => array('style' => 'width: 9%; text-align: center;', 'data-title'=>"Fecha"),
			),
			array(
				'name' => 'codigo',
				'htmlOptions' => array('style' => 'width: 10%; text-align: center;', 'data-title'=>"Codigo"),
			),
			'observaciones',
		
		
			array(
			'class' => 'editable.EditableColumn',
			'header' => 'Status',
			'name' => 'status',
			'editable' => array(
				'type' => 'select',
				'url' => $this->createUrl('OrdenesSoporte/updateEditable', array('model'=>'OrdenesSoporte', 'field'=>'status')),
				'source'    => Editable::source(array('pending' => 'Pendiente', 'ontransit' => 'En proceso', 'done'=>'Terminada')),
				'placement' => 'left',
			)
		),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{begin}',
			'header' => 'Iniciar',
			'buttons' => array(
				'begin' => array( //the name {reply} must be same
					'label' => 'Iniciar', // text label of the button
					'url' => 'Yii::app()->controller->createUrl("ordenesSoporte/iniciarOrden", array("model"=>"ordenesSoporte", "id"=>"$data->keySOP"))',
					'icon'=>'play',
					'htmlOptions'=>array('href'=>'dfsf'),
				),	
			),
		),
		
		
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template' => '{obser} {view} {update} {delete}	',
				'buttons' => array(
					'obser' => array(
						'label' => 'Agregar',
						'icon'=>'plus',
						'url' => '$data->keySOP', 
						'options' => array(
						  'onclick' => 'js:document.getElementById("idorden").src="'.$vare.'"+"&OrdenSoporteId="+$(this).attr("href");document.getElementById("idorden").style.height="200px";return false;',
						  'data-target'=>'#myModal', 'data-toggle'=>'modal',
						  'type'=>"submit"
						),
					),	
				),
				'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
			),
		),
	));
?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
		'url' =>$this->createUrl('OrdenesSoporte/create', array('model'=>'OrdenesSoporte')),)); ?>
</div>














<br/>
</section>
<?php
}
//echo CHtml::beginForm();
echo CHtml::beginForm(array('OrdenesSoporte/iniciarOrden'),'post', array("onsubmit"=>"return validate(this);"));
echo CHtml::textField('codigo', '',
			array('size'=>12,'maxlength'=>12, 'style'=>'width:60%; zoom:1.5','pattern'=> '0[0-9]{2}-[A-Za-z][0-9]{2}([A-Fa-f|0-9]){4}', 'placeholder'=>'Codigo'
		)); ?>
<br/>
<?php echo CHtml::textField('id', isset($_GET['field'])?$_GET['field']:'',
			array('size'=>12,'maxlength'=>12, 'style'=>'width:60%; zoom:1.5','pattern'=> '[0-9]{1,4}', 'placeholder'=>'Id'
		)); ?>
<br/>
<br/>



<?php
	//echo CHTML::button('Aceptar',  array('submit' => $this->createUrl("OrdenesSoporte/iniciarOrden"), 'style'=>'zoom:1.5',"onClick"=>"return validate(this);"));
	echo CHTML::submitButton('Aceptar',  array('style'=>'zoom:1.5'));
	
	echo CHtml::endForm();
?>	
	
	
	<br/><br/>
	
</div>	
