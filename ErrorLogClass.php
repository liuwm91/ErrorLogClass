<?php
	class ErrorLog{
		private $path;

		public function __construct(){
			if(file_exists('log/log.txt')){
				$this->path = "log/log.txt";
			}else{
                            mkdir('log');
			}
			
			$this->path = "log/log.txt";  

		}

		public function writeLog($content){
			if(is_array($content)){
				$content = print_r($content,true);
			}
			$content .="\n";
			file_put_contents($this->path, $content,FILE_APPEND);
		}
	}
