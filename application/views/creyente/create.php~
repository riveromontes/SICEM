<?= form_open('creyente/insert', array('class'=>'form-horizontal')); ?>
    <legend> Crear Registro </legend>

    <?= my_validation_errors(validation_errors()); ?>



    <div class="control-group">
        <?= form_label('Nacionalidad', 'nacionalidad', array('class'=>'control-label')); ?>
	<?= form_dropdown('nacionalidad', array('Se'=>'Seleccionar', 'V'=>'Venezolano', 'E'=>'Extranjero')); ?>
    </div>

    <div class="control-group">
        <?= form_label('Cédula', 'cedula', array('class'=>'control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'cedula', 'id'=>'cedula', 'value'=>set_value('cedula'))); ?>
    </div>

    <div class="control-group">
       <?= form_label('Nombres', 'nombres', array('class'=>'control-label')); ?>
       <?= form_input(array('type'=>'text', 'name'=>'nombres', 'id'=>'nombres', 'value'=>set_value('nombres'))); ?>
    </div>

    <div class="control-group">
       <?= form_label('Apellidos', 'apellidos', array('class'=>'control-label')); ?>
       <?= form_input(array('type'=>'text', 'name'=>'apellidos', 'id'=>'apellidos', 'value'=>set_value('apellidos'))); ?>
    </div>

    <div class="control-group">
        <?= form_label('Es nuevo creyente', 'es_nuevo_creyente', array('class'=>'control-label')); ?>
	<?= form_dropdown('es_nuevo_creyente', array('Se'=>'Seleccionar', 'S'=>'Si', 'N'=>'No')); ?>
    </div>

    <div class="control-group">
        <?= form_label('Asiste a célula', 'asiste_celula', array('class'=>'control-label')); ?>
	<?= form_dropdown('asiste_celula', array('Se'=>'Seleccionar', 'S'=>'Si', 'N'=>'No')); ?>
    </div>

    <div class="control-group">
        <?= form_label('N. de Hijos', 'num_hijos', array('class'=>'control-label')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'num_hijos', 'id'=>'num_hijos', 'value'=>set_value('num_hijos'))); ?>
    </div>


    <div class="control-group">
	<?= form_label('Fecha de conversión', 'fecha_conversion', array('class'=>'control-label')); ?>
	<?= form_input(array('type'=>'date', 'name'=>'fecha_conversion', 'id'=>'fecha_conversion', 'value'=>set_value('fecha_conversion'))); ?>	
    </div>

    <div class="control-group">
       <?= form_label('Sexo', 'sexo', array('class'=>'control-label')); ?>
       <?= form_dropdown('sexo', array('Se'=>'Seleccionar', 'M'=>'Masculino', 'F'=>'Femenino')); ?>
    </div>


    <div class="control-group">
	<?= form_label('Fecha nacimiento', 'fecha_nacimiento', array('class'=>'control-label')); ?>
	<?= form_input(array('type'=>'date', 'name'=>'fecha_nacimiento', 'id'=>'fecha_nacimiento', 'value'=>set_value('fecha_nacimiento'))); ?>	
    </div>

    <div class="control-group">
       <?= form_label('Estado Civil', 'estado_civil', array('class'=>'control-label')); ?>
       <?= form_dropdown('estado_civil', array('Se'=>'Seleccionar', 'SOL'=>'Soltero(a)', 'CAS'=>'Casado(a)','DIV'=>'Divorciado(a)', 'VIU'=>'Viudo(a)','CON'=>'Concubinato')); ?>
    </div>

    <div class="control-group">
        <?= form_label('Ciudad', 'ciudad', array('class'=>'control-label')); ?>
        <?= form_dropdown('ciudad', $ciudades); ?>
    </div>


    <div class="control-group">
       <?= form_label('Dirección', 'direccion', array('class'=>'control-label')); ?>
       <?= form_textarea(array('type'=>'text', 'name'=>'direccion', 'rows'=>'3', 'id'=>'direccion', 'value'=>set_value('direccion'))); ?>
    </div>

    <div class="control-group">
        <?= form_label('Teléfono Casa', 'telefono_casa', array('class'=>'control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'telefono_casa', 'id'=>'telefono_casa', 'value'=>set_value('telefono_casa'))); ?>
    </div>

    <div class="control-group">
        <?= form_label('Teléfono Celular', 'telefono_celular', array('class'=>'control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'telefono_celular', 'id'=>'telefono_celular', 'value'=>set_value('telefono_celular'))); ?>
    </div>


    <div class="control-group">
       <?= form_label('Correo Electrónico', 'correo_electronico', array('class'=>'control-label')); ?>
       <?= form_input(array('type'=>'text', 'name'=>'correo_electronico', 'id'=>'correo_electronico', 'value'=>set_value('correo_electronico'))); ?>
    </div>


    <div class="control-group">
       <?= form_label('Invitado por', 'invitado_por', array('class'=>'control-label')); ?>
       <?= form_input(array('type'=>'text', 'name'=>'invitado_por', 'id'=>'invitado_por', 'value'=>set_value('invitado_por'))); ?>
    </div>

    <div class="control-group">
       <?= form_label('Nombre del Consolidador', 'consolidador', array('class'=>'control-label')); ?>
       <?= form_input(array('type'=>'text', 'name'=>'consolidador', 'id'=>'consolidador', 'value'=>set_value('consolidador'))); ?>
    </div>


    <div class="control-group">
       <?= form_label('Observación', 'observacion', array('class'=>'control-label')); ?>
       <?= form_textarea(array('type'=>'text', 'name'=>'observacion', 'rows'=>'5', 'id'=>'observacion', 'value'=>set_value('observacion'))); ?>
    </div>



    <div class="form-actions">
        <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
        <?= anchor('creyente/index', 'Cancelar', array('class'=>'btn')); ?>
    </div>
<?= form_close(); ?>

