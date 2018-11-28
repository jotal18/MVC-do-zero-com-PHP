<?php 

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController {

	public function index() {

	}

	public function show($request) {

		// $cursos = new app\models\portal\Cursos;
		// $cursoEncontrado = $cursos->find('slug', $request->parameter);

		$this->view([
			'tittle' => 'Curso',
			// 'curso' => $cursoEncontrado,
		], 'portal.curso');

	}

	public function create() {

	}

	public function store() {

	}

	public function edit($id) {

	}

	public function update($id) {

	}

	public function destroy($id) {

	}
	
}