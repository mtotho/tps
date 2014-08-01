
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//return blob with specific file_id
//ensure user is authenticated
class Download extends CI_Controller{

	
	
	public function index(){
	
	}
	
	public function file($file_id){
		$this->load->model("file_model");

		$file = $this->file_model->download_file($file_id);
	//s	$file_data = base64_decode($file->base64);
     	/*
        $file_path="/tmp/".$file->name;

		file_put_contents($file_path, base64_decode($file->base64));
   		//header("Content-type:$file->type");
		//header("Content-Length: $file->filesize");
		header("Content-Disposition: attachment; filename=$file->name");
		header("Pragma: public");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	
		set_time_limit(0);
		$filehandle = @fopen($file_path,"rb");
		while(!feof($filehandle))
		{
			print(@fread($filehandle, 1024*8));
			ob_flush();
			flush();
		}
		//echo base64_decode($file->base64);
		//die ;*/
		while (@ob_end_clean());
	 	$filename = $file->name;
        $mimetype = $file->type;
        $filedata = $file->data;
        $size     = $file->size;
       // error_log(print_r($file,true));
       // header ("Cache-Control: must-revalidate, spost-check=0, pre-check=0");
       	header("Content-length: ".$size);
       	header("Content-type: ".$mimetype);
        //header("Content-type: application/octet-stream");
        header("Content-disposition: attachment; filename=\"$filename\""); //disposition of download forces a download
        echo $filedata;

        exit;
        //readfile($filedata); 
	}

	
	
	
}
?>