<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Agregar Orden';
$this->breadcrumbs=array(
	'Agregar Orden',
);
?>
<div class="panel panel-primary">
            
                 
                 
                 



<div class="panel-heading"></div>   










<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>true
)); ?>




          <table  class="table table-stripe table-hover" >

              

    
               




       <tr>
              <td width="152" scope="col"><div align="left"><h6>Usuario</h6></div></td>
              <td width="451" scope="col"><label> </label>
                  <div align="left">
                    <input class="form-control input-sm span2" tabindex = "1" placeholder="Usuario Solicitante" id="focusedInput" type="text" name="nombre" value="<?php //echo $_POST['nombre']; ?>"/>
                </div></td>
            
              <td scope="col"><div align="left" ><h6>Entidad</h6></div></td>
              <td scope="col"><div align="left" >

                      <?php
                      $model = new Entidades();
                      echo $form->dropDownList($model, 'codigoEntidad', CHtml::listData(Entidades::model()->findAll(), 'codigoEntidad', 'descripcionEntidad')
                      );
                      ?>  
        
                  
              </div></td>
        </tr>  


















            <tr>
              <td ><div align="left"><h6>Departamento</h6></div></td>
              <td >
                  <div align="left">
                  <small>  
                      <?php
                      $model = new Almacenes();
                      echo $form->dropDownList($model, 'almacen', CHtml::listData(Almacenes::model()->findAll(), 'almacen', 'descripcion')
                      );                     
                      ?>                   
                  

                            </small>
                            </div>
                            </td>
           





<script>

var win = null;
function nueva(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
if(win.window.focus){win.window.focus();}
}

</script>

            

                
                  
              <td ><div  align="left"><small>Tipo Soporte</small><a href="#altaOrden" onClick="nueva('../ventanas/v_tipo_soporte.php?almacen=<?php //echo $_GET['datawarehouse'];?>')">
          <span data-toggle="tooltip" title="Agregar tipos de soporte.." class="glyphicon glyphicon-plus-sign small"></span>
</a></div></td>
              <td >
                <div align="left">
        <?php	/*
        if($_POST['almacenSoporte'] or $_POST['almacenSoporte']=='*'){
          $sqlNombre11 = "Select * From `sis_relacion_soporte_almacenes` 

order by descripcion ASC
        ";    
        }else{
        $sqlNombre11 = "Select * From `sis_relacion_soporte_almacenes` 
where 

    almacen='".$_GET['datawarehouse']."'
order by descripcion ASC
        ";}
        $resultaNombre11=mysql_db_query($basedatos,$sqlNombre11);
*/

        ?>
                    <small>  
                   <select name="keyRSA" tabindex = "4" class="form-control input-sm span2"/>



                    <?php
          //while ($rNombre11=mysql_fetch_array($resultaNombre11)){ 
         // echo mysql_error();?>
                    <option
                           <?php   //if($_POST["keyRSA"]==$rNombre11["keyRSA"]){ echo 'selected=""';}?>
                        value="<?php //echo $rNombre11["keyRSA"];?>"><?php //echo ucfirst(strtolower($rNombre11["descripcion"]));?></option>
                    <?php //} ?>
                    </select>
                    </small>
                </div>
                  
             </td>
            </tr>









            <tr>
              <td scope="col"><div align="left"><h6>Activo Fijo</h6></div></td>
              <td scope="col"><label>

                <div align="left">
                    <?php	/* 		
        $sqlNombre11 = "SELECT * from sis_inventarioEqComputo 
        WHERE
        entidad='".$_POST['entidad']."'
            and
            departamento='".$_POST['almacen']."'
        order by registro ASC
        ";
        $resultaNombre11=mysql_db_query($basedatos,$sqlNombre11);
*/

        ?>
                        <div align="left">
                        
                          <select name="registro" tabindex = "5" class="form-control input-sm span2"/>



                    <?php
          //while ($rNombre11=mysql_fetch_array($resultaNombre11)){ 
          //echo mysql_error();?>
                    <option
                           <?php   //if($_POST["registro"]==$rNombre11["registro"]){ echo 'selected=""';}?>
                        value="<?php //echo $rNombre11["registro"];?>"> <?php //echo $rNombre11["registro"].'  '.$rNombre11["descripcionUbicacion"];?></option>
                    <?php //} ?>
                    </select>
                         
                </div>
              </label></td>
       

              <td scope="col"><div align="left"><h6>Extension</h6></div></td>
              <td scope="col">

                <small>

                    <input class="form-control input-sm span1" tabindex = "6" placeholder="<?php //echo utf8_decode("0000");?>" id="focusedInput" type="text" name="extension" value="<?php //echo $_POST['extension'];?>"></input>

                </small>

              </label></td>
            </tr>



     

            
            
            
      <tr>
          <td width="152" scope="col"><div align="left"><h6>Usuario Ejecutor</h6></div></td>
              <td width="451" scope="col">                  
                  <div align="left">
                    <input class="form-control input-sm span2" tabindex = "7" placeholder="Usuario Ejecutor" id="focusedInput" type="text" name="usuarioAplicacion" value="<?php //echo $_POST['usuarioAplicacion']; ?>"/>
                </div></td>
        
                
              <td width="152" scope="col"><div align="left"><h6>Descripción del Servicio</h6></div></td>
              <td width="451" >
                  <div align="left">
                    <textarea name="observaciones" tabindex = "2" class="form-control input-sm span2" placeholder="Observaciones" cols="200" rows="2"  /><?php //echo $_POST['observaciones']; ?></textarea>
                </div></td>
            </tr> 

     
            
            <tr>
                  <td  >
        <div class="row submit">
        <?php echo CHtml::submitButton('Agregar orden'); ?>
        </div>
                  </td>
                  <td  ></td>
              <td  ></td>
              <td ></td>
            </tr>    

          </table>




<?php $this->endWidget(); ?>
    







                      </div>  