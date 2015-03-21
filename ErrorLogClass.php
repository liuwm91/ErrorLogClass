<?php
	class ErrorLog{
		private static $path;

		// public function __construct(){
		// 	if(!file_exists('log/log.txt')){
  //               mkdir('log');
		// 	}
		// 	$this->path = "log/log.txt";  

		// }

		private function setPath(){
			if(!file_exists('log/log.txt')){
                mkdir('log');
			}
			self::$path = "log/log.txt";  			
		}

		public static function writeLog($log){
			if(empty(self::$path)){
				self::setPath();				
			}
			$content = date('Y-m-d H:i:s',time());
			$content .= ":\n";
			$content .= var_export($log,true);
			$content .= "\n";
			file_put_contents(self::$path, $content,FILE_APPEND);
			file_put_contents(self::$path, "========================================\n",FILE_APPEND);
		}
	}
