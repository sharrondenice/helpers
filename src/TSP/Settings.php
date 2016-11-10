<?php
/**
 * Helper Classes
 *
 * @package		TheSoftwarePeople.Helpers
 * @filename	Settings.php
 * @version		1.0.2
 * @author		Sharron Denice, The Software People (www.thesoftwarepeople.com)
 * @copyright	Copyright 2016 The Software People (www.thesoftwarepeople.com). All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @brief		Settings used by the TheSoftwarePeople\Helper package
 *
 */	
class TSP_Settings
{
	public static $live            	= false;
	public static $live_payment 	= false;
	public static $debug           	= true;

	public static $admin_email 			= "webmaster@thesoftwarepeople.com";		
	public static $admin_name 			= "The Software People";			
	public static $admin_from_email 	= "no-reply@thesoftwarepeople.com";		
	public static $admin_from_name 		= "The Software People";		
	public static $admin_notify 		= true;

    public static $cookie_prefix 		 = "tsp-";
	public static $cookie_prefix_encoded = "Encoded: ";

	public static $date_format_default     = "m/d/Y";
	public static $date_format_database    = "Y-m-d h:i:s";
	public static $date_format_pretty      = "F d, Y";
	public static $date_format_simple      = "F Y";

	public static $smtp_live    = false;
    public static $smtp_host    = "smtp.mandrillapp.com";
	public static $smtp_port    = 587;
	public static $smtp_user    = null;
	public static $smtp_pass    = null;
	public static $smtp_secure  = 'TLS'; // Choose SSL or TLS

    public static $dir_upload  = "/uploads";
	public static $dir_cache   = "/cache";
	public static $file_debug  = "./log-debug.log";
    public static $file_error  = "./log-error.log";
    public static $file_mail   = "./log-mail.log";

	public static $database_mysql 	= "mysql";
	public static $database_mysqli 	= "mysqli";
	public static $database_mssql 	= "mssql";
	public static $database_mongo 	= "mongo";

	public static $password_salt 	= "aq7#^NMr";

	public static $domain 		= null;
	public static $domain_uri 	= null;

    /* Arrays */
	public static $checksums   	= null; 
	public static $misc   		= null; 

	/*  Array of Objects */
    public static $databases   	= null; // TSP_Database
    public static $users       	= null; // TSP_UserLogin
    public static $apis        	= null; // TSP_APICredentials
    public static $contacts    	= null; // TSP_UserContact
}