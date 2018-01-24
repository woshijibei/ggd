<?php
 
namespace App\Models;

class VoteOption extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'vote_option';
	protected $primaryKey = 'option_id';
	public $timestamps = false;
	protected $fillable = array('vote_id', 'option_name', 'option_count', 'option_order');
	protected $guarded = array();
}

?>
