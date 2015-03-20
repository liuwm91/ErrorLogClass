<?php
	class ErrorLog{
		public $path;

		public function __construct($path=""){
			$this->path = $path;

		}

		public function writeLog($content){
			if(is_array($content)){
				$content = print_r($content,true);
			}
			$content .="\n";
			file_put_contents($this->path, $content,FILE_APPEND);
		}
	}
