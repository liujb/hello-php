<?php

header("Content-Type:text/html; charset=utf-8");

if ($_POST['submit']) {
    $upFile = new Upload();
    $upFile->upload_file();
}

class Upload
{
    //Code by ALLEN
    public $name;
    public $tmp_name;
    public $final_name;
    public $target_dir;
    public $target_path;
    public $file_type;
    public $allow_file_types;
    public $file_size;
    public $file_max_size;

    /**
     *
     */
    public function __construct()
    {
        $this->name = $_FILES["file"]["name"];
        $this->file_type = $_FILES["file"]["type"];
        $this->tmp_name = $_FILES["file"]["tmp_name"];
        $this->allow_file_types = array('jpeg', 'doc', 'docx', 'dll', 'rar', 'zip', 'wps');
        $this->file_size = $_FILES['file']['size'];
        $this->target_dir = './Upload';
    }

    /**
     * 上传文件的方法
     */
    public function upload_file()
    {
        $file_type = $this->get_file_ext($this->name);

        if (!in_array($file_type, $this->allow_file_types)) {
            exit("不支持此类型，请重新选择.");
        }

        if ($this->file_size > $this->file_max_size) {
            exit("上传文件失败.");
        }

        if (!is_dir($this->target_dir)) {
            mkdir($this->target_dir);
            chmod($this->target_dir, 0777);
        }
        $this->final_name = date("Ymdhis") . rand(0, 100) . '.' . $file_type;
        $this->target_path = $this->target_dir . "/" . $this->final_name;

        if (!move_uploaded_file($this->tmp_name, $this->target_path)) {
            exit('文件上传失败.');
        }

    }


    /**
     * 获取文件扩展名
     * @param String $filename 要获取的文件名的文件
     */
    public function get_file_ext($filename)
    {
        $info = pathinfo($filename);
        return $info["extension"];
    }

}

?>

<form type='multipart/form-data' method='POST' action="">
    <input type='file' name='file'/><input type="submit" name='submit' value='上传'/>
</form>
