<?php

class PdoConnect {

    const HOST ='localhost';
    const DB ='chocowappi';
    const USER ='Nurzhan';
    const PASS ='glampur0987';
	const CHARSET = 'utf8';

	protected static $_instance;

	protected $DSN;
	protected $OPD;
	public $PDO;

	function __construct() {
		
		$this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=" . self::CHARSET;

		$this->OPD = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		);

		$this->PDO = new PDO($this->DSN, self::USER, self::PASS, $this->OPD);
	}

	public static function getInstance() {

		if (self::$_instance === null)
			self::$_instance = new self;

		return self::$_instance;
	}

	private function __clone() {}
	private function __wakeup() {}
}