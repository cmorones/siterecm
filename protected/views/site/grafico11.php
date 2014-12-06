<?
$baseUrl2 = YiiBase::getPathOfAlias("webroot");

$menus= $baseUrl2.'/static/grafico_ap1ind1.json';

//echo $menus;
				$datos = file_get_contents($menus);
				//$model = json_decode($datos, true);
		/*$url = "http://localhost/recm/index.php/api2/ap1Ind1";
        //$url = $baseUrl;
        $data = file_get_contents($url);
        $model= CJSON::decode($data);*/
 $id2=10;
 ?>
 <div class="customContent">
 <div class="row">       
<div class="col-md-2 apartado">
Produccion
</div>
<div class="col-md-10">
<div>
<?php
$resultado = Menus::model()->findAll((array(
    'condition'=>"parent_id=$id2",
    'order'=>'id'
  )));
echo CHtml::tag('ul',array('id'=>'my-list'));
foreach ($resultado as $key => $row) {

                    
                    echo CHtml::tag('li');
                    echo CHtml::link($row->label, $row->id);
                    echo CHtml::closeTag('li');
}
echo CHtml::closeTag('ul');
?>
</div>
</div>
</div>
<div class="row">       
<div class="col-md-4">
<div align="center">
	 <?php
                  $this->widget('zii.widgets.jui.CJuiButton', array(
                        'buttonType'=>'link',
                        'name'=>'Inicio',
                        'caption'=>'Inicio',
                        'value'=>'Inicio',
                        'htmlOptions'=>array('class'=>'btn btn-warning','style'=>'padding: 0px;'),


                        'url' => array('site/index'),
                        //'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
                  ));
            ?>
</div>
</div>
<div class="col-md-4">
<div align="center">
	 <?php
                  $this->widget('zii.widgets.jui.CJuiButton', array(
                        'buttonType'=>'link',
                        'name'=>'Grafico'.$registro['periodo'].'',
                        'caption'=>'Regresar al indicador',
                        'value'=>'Grafico',
                        'htmlOptions'=>array('class'=>'btn btn-warning','style'=>'padding: 0px;'),


                        'url' => array('site/main/'.$id.''),
                        //'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
                  ));
            ?>
</div>
</div>
<div class="col-md-4">
<div align="center">
	 <?php
                  $this->widget('zii.widgets.jui.CJuiButton', array(
                        'buttonType'=>'link',
                        'name'=>'Produccion',
                        'caption'=>'Regresar a Producción',
                        'value'=>'Produccion',
                        'htmlOptions'=>array('class'=>'btn btn-warning','style'=>'padding: 0px;'),


                        'url' => array('site/main/10'),
                        //'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
                  ));
            ?>
</div>
</div>
</div>

</p>
		        
		       <script type="text/javascript">
		$(document).ready(function() {

		var options = {
		credits: false,
	    chart: {
	        renderTo: 'valor_censal',
	        type: 'column'
	    },
	    title: {
	    	text: ''
		},
		xAxis: {
			title: {
                text: 'Delegación'
            },
            labels: {
                rotation: -25,
                y: 10
            },
		    categories: [	'Milpa Alta',
							'Tlahuac',
							'Magdalena Contreras',
							'Xochimilco',
							'Iztacalco',
							'Gustavo A. Madero',
							'Venustiano Carranza',
							'Iztapalapa',
							'Coyoacán',
							'Cuajimalpa de Morelos',
							'Tlalpan',
							'Azcapotzalco',
							'Alvaro Obregón',
							'Benito Juárez',
							'Cuauhtémoc',
							'Miguel Hidalgo']
		},
		yAxis: {
            title: 'Porcentaje',
            tickInterval: 10000000,
            gridLineWidth: 1
        },
        scrollbar: {
	    	height: 15
	    },
	    
	    rangeSelector: {
	    	selected: 1
	    },

	    series: [{
				       name: 'Valor Censal Bruto',
				       color: '#0A64A4',
				       allowPointSelect: true,
				       data: [429646,2619633,2803504,14099934,15729610,21356387,31126900,31703038,35333865,42745952,51309966,84259698,120794330,133136835,230580346,239283038]
					}]
				
	}

			/*$.getJSON(<?=$menus?>, function(json) {
				options.series[0].data = json;
	        	chart = new Highcharts.Chart(options);
	        });*/
	       	 chart = new Highcharts.Chart(options);   
	        	
	        });
	        /*
	        
	    chart = new Highcharts.Chart(options);    
	        
      	}); */ 
         
		</script>


   <div class="option_1">
		        	<div id="valor_censal">
		        
		        	</div>
		        	<div class="table_explanation">
		        		<p class="table_exp_title">Nota: Milpa Alta aparece con un valor de 429,646.</p>
				        <p class="table_exp_source"><span>Fuente: </span>Elaboración con base en datos de INEGI, Censo Económico 2009</p>
		        	</div>
		        </div> 
</div>