<?php
 
namespace App\Models;

class SourceIp extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'source_ip';
	protected $primaryKey = 'ipid';
	public $timestamps = false;
	protected $fillable = array('storeid', 'ipdata', 'iptime');
	protected $guarded = array();
}

?>
