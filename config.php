<?php

/**
 * Configuration for webgrind
 * @author Jacob Oettinger
 * @author Joakim Nygård
 */
class Webgrind_Config extends Webgrind_MasterConfig {

	/**
	* Automatically check if a newer version of webgrind is available for download
	*/
	static $checkVersion = true;
	static $hideWebgrindProfiles = true;
	
	/**
	* Writable dir for information storage.
	* If empty, will use system tmp folder or xdebug tmp
	*/
	static $storageDir = '';
	static $profilerDir = '/tmp';
	
	/**
	* Suffix for preprocessed files
	*/
	static $preprocessedSuffix = '.webgrind';
	
	static $defaultTimezone = 'Europe/Copenhagen';
	static $dateFormat = 'Y-m-d H:i:s';
	static $defaultCostformat = 'percent'; // 'percent', 'usec' or 'msec'
	static $defaultFunctionPercentage = 90;
	static $defaultHideInternalFunctions = false;

	/**
	* Path to python executable
	*/ 
	static $pythonExecutable = '/usr/bin/python';
	
	/**
	* Path to graphviz dot executable
	*/	
	static $dotExecutable = '/usr/local/bin/dot';
		
	/**
	* sprintf compatible format for generating links to source files. 
	* %1$s will be replaced by the full path name of the file
	* %2$d will be replaced by the linenumber
	*/
	static $fileUrlFormat = 'index.php?op=fileviewer&file=%1$s#line%2$d'; // Built in fileviewer
	//static $fileUrlFormat = 'txmt://open/?url=file://%1$s&line=%2$d'; // Textmate
	//static $fileUrlFormat = 'file://%1$s'; // ?

    /**
    * format of the trace drop down list                                                                                                                                                      
    * default is: invokeurl (tracefile_name) [tracefile_size]
    * the following options will be replaced:
    *   %i - invoked url
    *   %f - trace file name
    *   %s - size of trace file
    *   %m - modified time of file name (in dateFormat specified above)
    */
    static $traceFileListFormat = '%i (%f) [%s]';
}
