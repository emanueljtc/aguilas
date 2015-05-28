<?php
App::uses('AppController', 'Controller');
/**
 * Views Controller
 *
 * @property View $View
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ViewsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->View->recursive = 0;
		$this->set('views', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->View->exists($id)) {
			throw new NotFoundException(__('Invalid view'));
		}
		$options = array('conditions' => array('View.' . $this->View->primaryKey => $id));
		$this->set('view', $this->View->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->View->create();
			if ($this->View->save($this->request->data)) {
				$this->Session->setFlash(__('The view has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The view could not be saved. Please, try again.'));
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
		if (!$this->View->exists($id)) {
			throw new NotFoundException(__('Invalid view'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->View->save($this->request->data)) {
				$this->Session->setFlash(__('The view has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The view could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('View.' . $this->View->primaryKey => $id));
			$this->request->data = $this->View->find('first', $options);
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
		$this->View->id = $id;
		if (!$this->View->exists()) {
			throw new NotFoundException(__('Invalid view'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->View->delete()) {
			$this->Session->setFlash(__('The view has been deleted.'));
		} else {
			$this->Session->setFlash(__('The view could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
