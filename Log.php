<?php
	class Log
	{
		public $filename; 

		public function logMessage($logLevel, $message)
		{
		    $handle = fopen($this->filename, 'a+');
		    fwrite($handle, PHP_EOL.date("Y-m-d H:i:s") . " [$logLevel] $message");
		    fclose($handle);
		}

		public function logInfo($message)
		{
			$this->logMessage("INFO", $message);
		}

		public function logError($message)
		{
			$this->logMessage("ERROR", $message);
		}
	}
?>