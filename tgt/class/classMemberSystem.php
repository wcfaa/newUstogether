<!-- Copyright (c) 2013 Wu chi fung

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
 -->

<?php
/**
* This class a standand tools for using in member access and mamagement
*/
class classMemberSystem 
{
	public $host	="localhost";
    public $username="usttrcom_users";
    public $password="dtttcct24mg";
    public $dbname	="usttrcom_main";
	
	function __construct()
	{		
		echo "The function start";

	}

	public function ConnectDB()
	{
		$mysql_server 	= host;
		$mysql_user 	= username;
		$mysql_password = password;
		$mysql_db 		= dbname;
		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
		try 
	    {        
	        $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
	    } 
	    catch(PDOException $ex) 
	    { 
	        die("Failed to connect to the database: " . $ex->getMessage()); 
	    }
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

		if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) 
	    { 
	        function undo_magic_quotes_gpc(&$array) 
	        { 
	            foreach($array as &$value) 
	            { 
	                if(is_array($value)) 
	                { 
	                    undo_magic_quotes_gpc($value); 
	                } 
	                else 
	                { 
	                    $value = stripslashes($value); 
	                } 
	            } 
	        } 
	     
        undo_magic_quotes_gpc($_POST); 
        undo_magic_quotes_gpc($_GET); 
        undo_magic_quotes_gpc($_COOKIE); 
        header('Content-Type: text/html; charset=utf-8'); 
        //start the seesion and input the Member date to session var
        session_start(); 
        $user = $_GET['user'];
    	$username = htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');
    	} 
				
	}

	public function Login($value='')
	{
		# code...
	}
}

?> 