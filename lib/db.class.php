<?php
#数据库类
class DB{
	protected $dbName;//数据库名
	private $host;
	private $user;
	private $passwd;
	public $objMysqli;
	private $lastSql;
	private $charset;

	public function __construct($db, $charset='utf8'){
		$this->dbLink = false;
		$this->dbName = $db;
		$this->charset = $charset;
		$confType = ['module'=>'db', 'item'=> $this->dbName];
		$dbConf = Common::loadConf($confType);
		$this->host = $dbConf['host'];
		$this->user = $dbConf['user'];
		$this->passwd = $dbConf['passwd'];
		$this->objMysqli = new mysqli($this->host, $this->user, $this->passwd, $this->dbName);
		if($this->objMysqli->connect_errno){
			throw new Exception("db connect error. pls check config." . $this->objMysqli->connect_error);
		}
		$charsetSql = "set names {$this->charset};";
		$this->objMysqli->query($charsetSql);
	}

	#获取结果集
	public function getAssocResult($sql){
		$result = $this->queryRaw($sql);
		if(!$result){
			return [];
		}
		$rows = [];
		while($row = $result->fetch_array(MYSQLI_ASSOC))
		{
			$rows[] = $row;
		}
		return $rows;
	}

	#查询语句
	public function queryRaw($sql){
		$result = $this->objMysqli->query($sql);
		$this->lastSql = $sql;
		return $result;

	}

	public function getLastSql(){
		return $this->lastSql;
	}
	
}
