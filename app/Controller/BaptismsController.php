<?php
App::uses('AppController', 'Controller');
/**
 * Baptisms Controller
 *
 * @property Baptism $Baptism
 * @property PaginatorComponent $Paginator
 */
class BaptismsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $helpers = array('Html','Form','Time','Js');
	public $components = array('Paginator', 'Session','RequestHandler');
	public $paginate = array (
			'limit' => 4,
			'order' => array('Member.name' => 'asc')
			);


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Baptism->recursive = 0;
		$this->Paginator->settings =$this->paginate;
		    $this->set('baptisms',$this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Baptism->exists($id)) {
			throw new NotFoundException(__('Bautismo Invalido'));
		}
		$options = array('conditions' => array('Baptism.' . $this->Baptism->primaryKey => $id));
		$this->set('baptism', $this->Baptism->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Baptism->create();
			if ($this->Baptism->save($this->request->data)) {
				$this->Session->setFlash(__('Bautismo Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Bautismo no Guardado. Por favor, Intente de Nuevo.'));
			}
		}
		$members = $this->Baptism->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Baptism->exists($id)) {
			throw new NotFoundException(__('Bautismo Invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Baptism->save($this->request->data)) {
				$this->Session->setFlash(__('Bautismo Actualizado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Bautismo no Actualizado. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Baptism.' . $this->Baptism->primaryKey => $id));
			$this->request->data = $this->Baptism->find('first', $options);
		}
		$members = $this->Baptism->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Baptism->id = $id;
		if (!$this->Baptism->exists()) {
			throw new NotFoundException(__('Bautismo Invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Baptism->delete()) {
			$this->Session->setFlash(__('Bautismo Eliminado.'));
		} else {
			$this->Session->setFlash(__('Bautismo no Eliminado. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
