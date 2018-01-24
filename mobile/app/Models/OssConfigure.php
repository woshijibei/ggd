<?php
 
namespace App\Models;

class OssConfigure extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'oss_configure';
	public $timestamps = false;
	protected $fillable = array('bucket', 'keyid', 'keysecret', 'is_cname', 'endpoint', 'regional', 'is_use');
	protected $guarded = array();
}

?>
