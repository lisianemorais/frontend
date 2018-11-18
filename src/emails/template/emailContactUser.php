<?php 
include('contactUser.php'); 

class emailContactUser
{
    private $dados;

    function __construct($dados)
    {
        $this->dados = $dados; 
    }

    public function getTemplateEmail()
    {
        return getEmail($this->dados);
    }
}


