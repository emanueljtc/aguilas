<?php
App::uses('AppController', 'Controller');
/**
 * Visitors Controller
 *
 * @property Visitor $Visitor
 * @property PaginatorComponent $Paginator
 */
class VisitorsController extends AppController {

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
		$this->Visitor->recursive = 0;
		$this->Paginator->settings =$this->paginate;
		    $this->set('visitors',$this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Visitor->exists($id)) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		$options = array('conditions' => array('Visitor.' . $this->Visitor->primaryKey => $id));
		$this->set('visitor', $this->Visitor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Visitor->create();
			if ($this->Visitor->save($this->request->data)) {
				$this->Session->setFlash(__('The visitor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visitor could not be saved. Please, try again.'));
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
		if (!$this->Visitor->exists($id)) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Visitor->save($this->request->data)) {
				$this->Session->setFlash(__('The visitor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visitor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Visitor.' . $this->Visitor->primaryKey => $id));
			$this->request->data = $this->Visitor->find('first', $options);
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
		$this->Visitor->id = $id;
		if (!$this->Visitor->exists()) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Visitor->delete()) {
			$this->Session->setFlash(__('The visitor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The visitor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
