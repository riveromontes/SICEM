<?= ini_set('display_errors', 1);?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creyente extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Creyente');

		$this->load->library('CreyenteLib');

		$this->form_validation->set_message('required', 'Debe ingresar campo %s');
		$this->form_validation->set_message('alpha', 'Solo puede ingresar letras en el campo %s');
		$this->form_validation->set_message('numeric', 'Solo puede ingresar números en el campo %s');
		$this->form_validation->set_message('is_natural_no_zero', 'El campo %s no puede ser cero ni tener puntos ni comas');
		$this->form_validation->set_message('min_length', 'El campo %s no puede tener menos de 6 digitos');
		$this->form_validation->set_message('max_length', 'El campo %s no puede tener mas de 2 digitos');
        	$this->form_validation->set_message('valid_email', 'Campo %s no es un Correo Electronico valido');

        	$this->form_validation->set_message('validar_ciudad', 'Debe seleccionar el campo %s');
		$this->form_validation->set_message('validar_nacionalidad', 'Debe seleccionar el campo %s');
		$this->form_validation->set_message('validar_sexo', 'Debe seleccionar el campo %s');
		$this->form_validation->set_message('validar_asiste_celula', 'Debe seleccionar el campo %s');
		$this->form_validation->set_message('validar_es_nuevo_creyente', 'Debe seleccionar el campo %s');
        	$this->form_validation->set_message('validar_estado_civil', 'Debe seleccionar el campo %s');






    	}

	public function index() {
		$data['contenido'] = 'creyente/index';
		$data['titulo'] = 'Creyentes';
		$data['query'] = $this->Model_Creyente->all();
		$this->load->view('template', $data);
	}

	public function search() {
		$data['contenido'] = 'creyente/index';
		$data['titulo'] = 'Creyentes';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Creyente->allFiltered('convertidos.nombres', $value);
		$this->load->view('template', $data);
	}




	public function validar_ciudad() {
		return $this->creyentelib->validar_ciudad($this->input->post());
	}

	public function validar_nacionalidad() {
		return $this->creyentelib->validar_nacionalidad($this->input->post());
	}

	public function validar_sexo() {
		return $this->creyentelib->validar_sexo($this->input->post());
	}

	public function validar_asiste_celula() {
		return $this->creyentelib->validar_asiste_celula($this->input->post());
	}

	public function validar_es_nuevo_creyente() {
		return $this->creyentelib->validar_es_nuevo_creyente($this->input->post());
	}

	public function validar_estado_civil() {
		return $this->creyentelib->validar_estado_civil($this->input->post());
	}











	public function create() {
		$data['contenido'] = 'creyente/create';
		$data['titulo'] = 'Crear Creyente';
		$data['ciudades'] = $this->Model_Creyente->get_ciudades(); /* Lista de las ciudades */
		$this->load->view('template', $data);
	}

	public function insert() {
	$registro = $this->input->post();

	$this->form_validation->set_rules('nacionalidad', 'Nacionalidad', 'required|callback_validar_nacionalidad');
	$this->form_validation->set_rules('cedula', 'Cedula', 'required|is_natural_no_zero|min_length[6]');
	$this->form_validation->set_rules('nombres', 'Nombres', 'required');
	$this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
	$this->form_validation->set_rules('es_nuevo_creyente', 'Es nuevo creyente', 'required|callback_validar_es_nuevo_creyente');
	$this->form_validation->set_rules('asiste_celula', 'Asiste a celula', 'required|callback_validar_asiste_celula');
	$this->form_validation->set_rules('num_hijos', 'N. de hijos', 'required|is_natural|max_length[2]');
	$this->form_validation->set_rules('fecha_conversion', 'Fecha de conversion', 'required');
	//$this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
	$this->form_validation->set_rules('sexo', 'Sexo', 'required|callback_validar_sexo');
	$this->form_validation->set_rules('fecha_nacimiento', 'Fecha nacimiento', 'required');
	$this->form_validation->set_rules('estado_civil', 'Estado Civil', 'required|callback_validar_estado_civil');
	$this->form_validation->set_rules('ciudad', 'Ciudad', 'required|callback_validar_ciudad');
	$this->form_validation->set_rules('direccion', 'Direccion', 'required');
	$this->form_validation->set_rules('telefono_casa', 'Telefono Casa', 'required|is_natural');
	$this->form_validation->set_rules('telefono_celular', 'Telefono Celular', 'required|is_natural');
	$this->form_validation->set_rules('correo_electronico', 'Correo Electronico', 'valid_email');
	$this->form_validation->set_rules('invitado_por', 'Invitado por', 'required');
	$this->form_validation->set_rules('consolidador', 'Nombre Consolidador', 'required');
	$this->form_validation->set_rules('observacion', 'Observacion', 'required');
	//$this->form_validation->set_rules('nombre_consolidador', 'Nombre/Consolidador', 'required');
	//$this->form_validation->set_rules('id_estadocivil', 'Estado Civil', 'required');
	//$this->form_validation->set_rules('correo_electronico', 'Correo-E', 'required');




 	

	


	/*$this->form_validation->set_rules('email', 'eMail', 'required|valid_email');*/
        /*$this->form_validation->set_rules('login', 'Login', 'required|callback_my_validation');*/
        
        	if ($this->form_validation->run() == FALSE) {
            		$this->create();
        	}
        	else {
			/*$registro['password'] = md5($registro['login']); // Por defecto misma login y pwd
			$registro['created'] = date('Y/m/d H:i');
			$registro['updated'] = date('Y/m/d H:i');*/
			$registro['fecha_nacimiento'] = date('Y-m-d', strtotime($registro['fecha_nacimiento']));
			/*$registro['ciudad'] = $registro['ciudad']->id;*/
			$this->Model_Creyente->insert($registro);
			redirect('creyente/index');
        	}
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);

		$data['contenido'] = 'creyente/edit';
		$data['titulo'] = 'Actualizar Creyente';
		$data['registro'] = $this->Model_Creyente->find($id);
		$data['ciudades'] = $this->Model_Creyente->get_ciudades();
		/*$data['perfiles'] = $this->Model_Usuario->get_perfiles();*/ /* Lista de los Perfiles */
		$this->load->view('template', $data);
	}

	public function update() {
	$registro = $this->input->post();

	$this->form_validation->set_rules('nacionalidad', 'Nacionalidad', 'required|callback_validar_nacionalidad');
	$this->form_validation->set_rules('cedula', 'Cedula', 'required|is_natural_no_zero|min_length[6]');
	$this->form_validation->set_rules('nombres', 'Nombres', 'required');
	$this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
	$this->form_validation->set_rules('es_nuevo_creyente', 'Es nuevo creyente', 'required|callback_validar_es_nuevo_creyente');
	$this->form_validation->set_rules('asiste_celula', 'Asiste a celula', 'required|callback_validar_asiste_celula');
	$this->form_validation->set_rules('num_hijos', 'N. de hijos', 'required|is_natural|max_length[2]');
	$this->form_validation->set_rules('fecha_conversion', 'Fecha de conversion', 'required');
	//$this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
	$this->form_validation->set_rules('sexo', 'Sexo', 'required|callback_validar_sexo');
	$this->form_validation->set_rules('fecha_nacimiento', 'Fecha nacimiento', 'required');
	$this->form_validation->set_rules('estado_civil', 'Estado Civil', 'required|callback_validar_estado_civil');
	$this->form_validation->set_rules('ciudad', 'Ciudad', 'required|callback_validar_ciudad');
	$this->form_validation->set_rules('direccion', 'Direccion', 'required');
	$this->form_validation->set_rules('telefono_casa', 'Telefono Casa', 'required|is_natural');
	$this->form_validation->set_rules('telefono_celular', 'Telefono Celular', 'required|is_natural');
	$this->form_validation->set_rules('correo_electronico', 'Correo Electronico', 'valid_email');
	$this->form_validation->set_rules('invitado_por', 'Invitado por', 'required');
	$this->form_validation->set_rules('consolidador', 'Nombre Consolidador', 'required');
	$this->form_validation->set_rules('observacion', 'Observacion', 'required');	
	//$this->form_validation->set_rules('nombre_consolidador', 'Nombre/Consolidador', 'required');
	//$this->form_validation->set_rules('id_estadocivil', 'Estado Civil', 'required');
	//$this->form_validation->set_rules('correo_electronico', 'Correo-E', 'required');



		/*$this->form_validation->set_rules('name', 'Nombre', 'required');
        	$this->form_validation->set_rules('login', 'Login', 'required|callback_my_validation');
        	$this->form_validation->set_rules('email', 'eMail', 'required|valid_email');*/
		if($this->form_validation->run() == FALSE) {
			$this->edit($registro['id']);
		}
		else {
			
			//$registro['updated'] = date('Y/m/d H:i');
			$this->Model_Creyente->update($registro);
			redirect('creyente/index');
		}
	}

	public function delete($id) {
		$this->Model_Creyente->delete($id);
		redirect('creyente/index');
	}

}
