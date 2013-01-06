<?php
class Model_Group extends ORM
{
	protected $_has_many = ['members'=>['through'=>'groups_users','model'=>'User', 'far_key'=>'user_id']
	];

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