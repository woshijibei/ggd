<?php
 
namespace App\Models;

class CollectStore extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'collect_store';
	protected $primaryKey = 'rec_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'ru_id', 'add_time', 'is_attention');
	protected $guarded = array();
}

?>
