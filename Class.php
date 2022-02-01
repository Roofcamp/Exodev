<?php
class UploadedFile {
    public $file;

    public function __construct($fichier)
    {
        $this->file=$fichier;

    }

    public function save ()
    {
        $target = "uploads/".$this->file["name"];

        if(is_uploaded_file($this->file["tmp_name"])) {
            move_uploaded_file($this->file["tmp_name"], $target);
    }

    }
    }
?>
