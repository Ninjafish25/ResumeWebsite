<?php
	class Database {
	protected static $db = null;
	
	public static function connect($assignment, $epiz_33389813, $46dlS3Hl2koI) {
		if(!empty(Database::$assignment)) return;
		
		$dsn = "mysql:host=sql210.epizy.com;assignment=$database";
		
		try {
			Database::$db = new PDO($dsn, $uid, $pwd);
			} catch(PDOException $e){
			echo $e->getMessage();
			}
			}
			
			public function get($field) {
			if(isset($this->{$field}))
			return $this->{$field};
			return null;
			}
			}
			?>
			
			