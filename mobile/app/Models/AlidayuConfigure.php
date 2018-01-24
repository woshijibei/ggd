<?php
 
namespace App\Models;

class AlidayuConfigure extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'alidayu_configure';
	public $timestamps = false;
	protected $fillable = array('temp_id', 'temp_content', 'add_time', 'set_sign', 'send_time', 'signature');
	protected $guarded = array();
}

?>
