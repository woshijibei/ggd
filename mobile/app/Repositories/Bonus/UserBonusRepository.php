<?php
 
namespace App\Repositories\Bonus;

class UserBonusRepository implements \App\Contracts\Repository\Bonus\UserBonusRepositoryInterface
{
	public function getUserBonusCount($userId)
	{
		return \App\Models\UserBonus::where('user_id', $userId)->count();
	}
}

?>
