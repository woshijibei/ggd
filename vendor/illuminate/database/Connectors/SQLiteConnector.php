<?php
 
namespace Illuminate\Database\Connectors;

class SQLiteConnector extends Connector implements ConnectorInterface
{
	public function connect(array $config)
	{
		$options = $this->getOptions($config);

		if ($config['database'] == ':memory:') {
			return $this->createConnection('sqlite::memory:', $config, $options);
		}

		$path = realpath($config['database']);

		if ($path === false) {
			throw new \InvalidArgumentException('Database (' . $config['database'] . ') does not exist.');
		}

		return $this->createConnection('sqlite:' . $path, $config, $options);
	}
}

?>
