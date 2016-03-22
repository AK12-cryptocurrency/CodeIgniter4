<?php namespace Config;

/**
 * Database Configuration
 *
 * @package Config
 */
class Database extends \CodeIgniter\Database\Config
{
	/**
	 * Lets you choose which connection group to
	 * use if no other is specified.
	 *
	 * @var string
	 */
	public $defaultGroup = 'default';

	/**
	 * The default database connection.
	 *
	 * @var array
	 */
	public $default = [
		'dsn'          => '',
		'hostname'     => 'localhost',
		'username'     => '',
		'password'     => '',
		'database'     => '',
		'dbdriver'     => 'MySQLi',
		'dbprefix'     => '',
		'pconnect'     => false,
		'db_debug'     => (ENVIRONMENT !== 'production'),
		'cache_on'     => false,
		'cachedir'     => '',
		'char_set'     => 'utf8',
		'dbcollat'     => 'utf8_general_ci',
		'swap_pre'     => '',
		'encrypt'      => false,
		'compress'     => false,
		'stricton'     => false,
		'failover'     => [],
		'save_queries' => true,
	];

	//--------------------------------------------------------------------

}
