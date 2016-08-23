<?php

class Log
{
	private $fileName;
	private $handle;

	public function __construct($prefix = 'log') {
		$this->fileName = $prefix . date('Y-m-d') . '.log';
		$this->handle = fopen($this->fileName, 'a');
	}

	public function setFileName($fileName) {
		$this->fileName = is_string($fileName);
	}

	

	public function logMessage($logLevel, $message) {
		$formattedMessage = date('Y-m-d H:i:s') . "[$logLevel] $message";
		fwrite($this->handle, $formattedMessage);
	}
	public function info($message) {
		$this->logMessage('INFO', $message);
	} 
	public function error($message) {
		$this->logMessage('ERROR', $message);

	}
	public function __destruct() {
			fclose($this->handle);
	}
}

