<?php
	class Database
	{
		private $_con;
  		public function __construct() {
			include("$_SERVER[DOCUMENT_ROOT]/config.php");
			$this->_con=mysql_connect($DB_SERVER,$DB_USER,$DB_PASSWORD);
			mysql_select_db($DB_NAME,$this->_con);
		}

		public function query($query) {
			$reply=mysql_query($query);
			if(mysql_num_rows($reply)==0)		
				return 0;			
			else
    				return $reply;
		}

	public function close()
		{
			mysql_close($this->_con);  // detatches the connection 
		}
	};
?>


