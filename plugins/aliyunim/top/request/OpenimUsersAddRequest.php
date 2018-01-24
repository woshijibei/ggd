<?php
 
class OpenimUsersAddRequest
{
	/** 
	 * 用户信息列表
	 **/
	private $userinfos;
	private $apiParas = array();

	public function setUserinfos($userinfos)
	{
		$this->userinfos = $userinfos;
		$this->apiParas['userinfos'] = $userinfos;
	}

	public function getUserinfos()
	{
		return $this->userinfos;
	}

	public function getApiMethodName()
	{
		return 'taobao.openim.users.add';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}

	public function putOtherTextParam($key, $value)
	{
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}


?>
