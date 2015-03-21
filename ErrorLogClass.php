<?php
	class ErrorLog{
		private $path;

		public function __construct(){
			if(!file_exists('log/log.txt')){
                mkdir('log');
			}
			$this->path = "log/log.txt";  

		}

		public function writeLog($log){
			$content = date('Y-m-d H:i:s',time());
			$content .= ":\n";
			$content .= var_export($log,true);
			$content .= "\n";
			file_put_contents($this->path, $content,FILE_APPEND);
			file_put_contents($this->path, "========================================\n",FILE_APPEND);
		}
	}
