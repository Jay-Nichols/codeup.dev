<?php

require_once 'Log.php';


$log = new Log();
$log->logMessage('Something', "User $userName is logged in."); 
$log->info('Anything'); 
$log->error('Error'); 

$log1 = new Log();
$log1->logMessage('Something', "User $userName failed to log in!");
$log1->info('Anything');
$log1->error('Error');




// function logMessage($logLevel, $message)
// {

// 	$fileName = 'log-' . date('Y-m-d') . '.log';
// 	$handle = fopen($fileName, 'a');
// 	$formattedMessage = date('Y-m-d H:i:s') . "[$logLevel] $message";
// 	fwrite($handle, $formattedMessage);
	
//     // todo - complete this function
// }

// function logInfo() {
// 	logMessage('INFO', $message);

// }

// function logError() {
// 	logMessage('ERROR', $message);

// }

// logInfo("INFO", "This is an info message.");
// logError("ERROR", "This is an info message.");