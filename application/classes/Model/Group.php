<?php
class Model_Group extends ORM
{
	public function save_group(array $group_data)
	{
		$this->values($group_data, ['name']);
		$this->save();
	}

	public function rules()
	{
		return ['name' => [['not_empty']]];
	}

}