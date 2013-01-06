<?
class Model_User extends Model_Auth_User {
	protected $_has_many = ['groups'=>['through'=>'groups_users','model'=>'Group', 'far_key'=>'group_id']
	];
}