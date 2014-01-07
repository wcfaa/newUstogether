<?php
$UploadDirectory	= '../images/uploads/groupphoto/'; //Upload Directory, ends with slash & make sure folder exist

// replace with your mysql database details

$MySql_username 	= "usttrcom_users"; //mysql username
$MySql_password 	= "dtttcct24mg"; //mysql password
$MySql_hostname 	= "localhost"; //hostname
$MySql_databasename = 'usttrcom_main'; //databasename


if (!@file_exists($UploadDirectory)) {
	//destination folder does not exist
	die("Make sure Upload directory exist!");
}

if($_POST)
{	
	if(!isset($_POST['group_name']) || strlen($_POST['group_name'])<1)
	{
		//required variables are empty
		die("group_name is empty!");
	}
	
		if(!isset($_POST['group_description']) || strlen($_POST['group_description'])<1)
	{
		//required variables are empty
		die("group_description is empty!");
	}
	
	
			if(!isset($_POST['group_type']) || strlen($_POST['group_type'])<1)
	{
		//required variables are empty
		die("group_type is empty!");
	}
	
	if(!isset($_FILES['mFile']))
	{
		//required variables are empty
		die("File is empty!");
	}

	
	if($_FILES['mFile']['error'])
	{
		//File upload error encountered
		die(upload_errors($_FILES['mFile']['error']));
	}

	$FileName			= strtolower($_FILES['mFile']['name']); //uploaded file name
	$group_name			= $_POST['group_name'];
	$group_description	= $_POST['group_description'];
	$group_type			= $_POST['group_type'];
	//$group_name			= $_POST['group_name']; // file title
	$ImageExt			= substr($FileName, strrpos($FileName, '.')); //file extension
	$FileType			= $_FILES['mFile']['type']; //file type
	$FileSize			= $_FILES['mFile']["size"]; //file size
	$RandNumber   		= rand(0, 9999999999); //Random number to make each filename unique.
	$uploaded_date		= date("Y-m-d H:i:s");
	
	switch(strtolower($FileType))
	{
		//allowed file types
		case 'image/png': //png file
		case 'image/gif': //gif file 
		case 'image/jpeg': //jpeg file
		case 'application/pdf': //PDF file
		case 'application/msword': //ms word file
		case 'application/vnd.ms-excel': //ms excel file
		case 'application/x-zip-compressed': //zip file
		case 'text/plain': //text file
		case 'text/html': //html file
			break;
		default:
			die('Unsupported File!'); //output error
	}

  
	//File Title will be used as new File name
//	$NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($FileTitle));
	$NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;
   //Rename and save uploded file to destination folder.
   if(move_uploaded_file($_FILES['mFile']["tmp_name"], $UploadDirectory . $NewFileName ))
   {
		//connect & insert file record in database
		$dbconn = mysql_connect($MySql_hostname, $MySql_username, $MySql_password)or die("Unable to connect to MySQL");
		mysql_select_db($MySql_databasename,$dbconn);
		
		
		
		
	@mysql_query("INSERT INTO together_group_records
(
group_id,
group_name,
group_type,
group_admin,
group_description,
group_member,
group_create_date,
group_about,
group_meeting_count,
file_name,

file_size,
uploaded_date,
group_admin_tel,
group_admin_email)
VALUES
(
'$group_id',
'$group_name',
'$group_type',
'$group_admin',
'$group_description',
'$group_member',
'$group_create_date',
'$group_about',
'$group_meeting_count',
'$NewFileName',

'$FileSize',
'$uploaded_date',
'$group_admin_tel',
'$group_admin_email'
)");
		
		

		
		
		
		//@mysql_query("INSERT INTO file_records (file_name, file_title, file_size, uploaded_date) VALUES ('$NewFileName', '$FileTitle',$FileSize,'$uploaded_date')");
		mysql_close($dbconn);
		
		die('Success! File Uploaded.');
       http_redirect("index.php");
		
   }else{
   		die('error uploading File!');
   }
}

//function outputs upload error messages, http://www.php.net/manual/en/features.file-upload.errors.php#90522
function upload_errors($err_code) {
	switch ($err_code) { 
        case UPLOAD_ERR_INI_SIZE: 
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini'; 
        case UPLOAD_ERR_FORM_SIZE: 
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form'; 
        case UPLOAD_ERR_PARTIAL: 
            return 'The uploaded file was only partially uploaded'; 
        case UPLOAD_ERR_NO_FILE: 
            return 'No file was uploaded'; 
        case UPLOAD_ERR_NO_TMP_DIR: 
            return 'Missing a temporary folder'; 
        case UPLOAD_ERR_CANT_WRITE: 
            return 'Failed to write file to disk'; 
        case UPLOAD_ERR_EXTENSION: 
            return 'File upload stopped by extension'; 
        default: 
            return 'Unknown upload error'; 
    } 
} 
?>