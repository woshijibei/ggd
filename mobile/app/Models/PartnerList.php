<?php
 
namespace App\Models;

class PartnerList extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'partner_list';
	protected $primaryKey = 'link_id';
	public $timestamps = false;
	protected $fillable = array('link_name', 'link_url', 'link_logo', 'show_order');
	protected $guarded = array();
}

?>
