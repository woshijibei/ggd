<?php
 
namespace App\Models;

class PayCard extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'pay_card';
	public $timestamps = false;
	protected $fillable = array('card_number', 'card_psd', 'user_id', 'used_time', 'status', 'c_id');
	protected $guarded = array();
}

?>
