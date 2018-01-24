<?php
 
namespace Symfony\Component\Translation;

interface MetadataAwareInterface
{
	public function getMetadata($key = '', $domain = 'messages');

	public function setMetadata($key, $value, $domain = 'messages');

	public function deleteMetadata($key = '', $domain = 'messages');
}


?>
