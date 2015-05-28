<?php
App::uses('AppController', 'Controller');
/**
 * Members Controller
 *
 * @property Member $Member
 * @property PaginatorComponent $Paginator
 */
class MembersController extends AppController {

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
		$this->Member->recursive = 0;
		$this->Paginator->settings =$this->paginate;
		    $this->set('members',$this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Member->exists($id)) {
			throw new NotFoundException(__('Miembro Invalido'));
		}
		$options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
		$this->set('member', $this->Member->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Member->create();
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('Miembro Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Miembro no Guardado. Por favor, Intente de Nuevo.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Member->exists($id)) {
			throw new NotFoundException(__('Invalid member'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('Miembro Actualizado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Miembro no Actualizado. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
			$this->request->data = $this->Member->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Member->id = $id;
		if (!$this->Member->exists()) {
			throw new NotFoundException(__('Miembro Invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Member->delete()) {
			$this->Session->setFlash(__('Miembro Eliminado.'));
		} else {
			$this->Session->setFlash(__('Miembro no Eliminado. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
