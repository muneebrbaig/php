<?php
class Database
{
	private static $dbHost = 'localhost' ;
	private static $dbName = 'sales' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = '';

	private static $cont  = null;
	/**
	 * This is the constructor of class Database.
	 * Since it is a static class, initialization of this class is not allowed.
	 * To prevent misuse of the class, we use a "die" function to remind users.
	 */
	public function __construct() {
		die('Init function is not allowed');
	}


	/**
	 * This is the main function of this class. It uses singleton pattern to make sure
	 * only one PDO connection exist across the whole application. Since it is a static method.
	 * We use Database::connect() to create a connection.
	 * @return null|PDO
	 */
	public static function connect()
	{
		// One connection through whole application
		if ( null == self::$cont )
		{
			try
			{
				self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
			}
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
		return self::$cont;
	}
	/**
	 * Disconnect from database.
	 * It simply sets connection to NULL.
	 * We need to call this function to close connection.
	 */
	public static function disconnect()
	{
		self::$cont = null;
	}
}
?>