<?php

abstract class ArasKargoWebServiceResponse
{
    protected $response;
    
    public function __construct($response)
    {
        $this->setResponse($response);
    }
    
    public function getResponse() 
    { 
        return $this->response; 
    }
    
    public function setResponse($response)
    { 
        $this->response = $response; 
    }
}
