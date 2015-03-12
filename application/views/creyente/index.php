<div class="page-header">
	<h1> Creyentes <small> mantenimiento de registros </small> </h1>
</div>

<?= form_open('creyente/search', array('class'=>'form-search')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por nombre...', 'class'=>'input-medium search-query')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn')); ?>
	<?= anchor('creyente/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>

<table class="table table-condensed table-bordered">
	<thead>
		<tr>
			<th> Id </th>
			<th> Fecha/acept&oacute; </th>
			<th> Nombres </th>
			<th> Apellidos </th>
			<th> Edad </th>
			<th> Fecha/Nac. </th>
			<th> Consolidador </th>

		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td> <?= anchor('creyente/edit/'.$registro->id, $registro->id); ?> </td>
			<td> <?= date("d-m-Y", strtotime($registro->fecha_conversion))?> </td>
			<td> <?= $registro->nombres ?> </td>
			<td> <?= $registro->apellidos ?> </td>

				<?php
				$fecha = date('Y/m/d') - $registro->fecha_nacimiento;
				list($ano,$mes,$dia) = explode("-",$registro->fecha_nacimiento);
				if($mes>date('m')) $fecha--;
				if($mes==date('m')) 
					if($dia>date('d')) $fecha--;
				?>

			<td> <?= $fecha ?> </td>
			<td> <?= date("d-m-Y", strtotime($registro->fecha_nacimiento)) ?> </td>
			<td> <?= $registro->consolidador ?> </td>


		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
