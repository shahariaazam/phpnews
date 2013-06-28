<?php
class Controller{
    public $load;
    public $model;
    function __construct()
    {
        $this->load=new Load();
        $this->model=new Model();
    }
    public function view($data = null)
    {
        $this->load->view('View/viewfile.php',$data);
    }
}