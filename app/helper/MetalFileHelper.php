<?php namespace App\Helper;

use File;
use Request;

class MetalFileHelper extends File{
	
	public static function saveFileFromInput($input, $folder){
		if (Request::hasFile($input)) {
			File::makeDirectory($folder);
			$files = Request::file($input);
            foreach ($files as $file){ 
				$file->move($folder , $file->getClientOriginalName());   
			}        
		}
	}
	
	public static function deleteFilesWithFolder($directory){
		if(File::isWritable($directory)){
			$files = File::allFiles($directory);
			foreach($files as $file){
				File::delete($file);
			}
			File::deleteDirectory($directory);
		}
	}
}
?>