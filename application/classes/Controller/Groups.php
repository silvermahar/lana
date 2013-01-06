<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Groups extends Controller_Main {

	public function action_index()
	{
		$this->content->groups = $this->_orm->find_all();
	}

	public function action_add()
	{
		if($this->request->post('add')){
			$group_data=$this->request->post('group');
			try {
				$this->_orm->save_group($group_data);
				$this->redirect('groups');
			} catch(ORM_Validation_Exception $e) {
				Notify::error("Palun normaalseid andmeid!");
			}
		}
	}
} // End Welcome
