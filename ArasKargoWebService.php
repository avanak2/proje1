<?php

abstract class ArasKargoWebService
{
    protected $url;
    protected $testUrl;  
    protected $client;  
    protected $mode; # test/production
    protected $error;
    protected $response;
    protected $parameters;
    
	protected $webServiceUsername 		= '';
    protected $webServicePassword 		= '';
   	protected $testWebServiceUsername 	= 'testuser';
    protected $testWebServicePassword 	= '123456';
    
	
	public function getWebServiceUsername() { return $this->webServiceUsername; }
    public function setWebServiceUsername($webServiceUsername){ $this->webServiceUsername = $webServiceUsername; }
    public function getTestWebServiceUsername() { return $this->testWebServiceUsername; }
    public function setTestWebServiceUsername($testWebServiceUsername){ $this->testWebServiceUsername = $testWebServiceUsername; }
    public function getWebServicePassword() { return $this->webServicePassword; }
    public function setWebServicePassword($webServicePassword){ $this->webServicePassword = $webServicePassword; }
    public function getTestWebServicePassword() { return $this->testWebServicePassword; }
    public function setTestWebServicePassword($testWebServicePassword){ $this->testWebServicePassword = $testWebServicePassword; }
    public function getMode() { return $this->mode; }
    public function setMode($mode){ $this->mode = $mode; }
    public function getClient() { return $this->client; }
    public function setClient($client){ $this->client = $client; }
    public function getUrl() { return $this->url; }
    public function setUrl($url){ $this->url = $url; }    
    public function getTestUrl() { return $this->testUrl; }
    public function setTestUrl($testUrl){ $this->testUrl = $testUrl; }
    public function getError() { return $this->error; }
    public function setError($error){ $this->error = $error; }
    public function getParameters() { return $this->parameters; }
    public function setParameters($parameters){ $this->parameters = $parameters; }
    public function getResponse() { return $this->response; }
    public function setResponse($response){ $this->response = $response; }
    
    public function isError()
    {
        return (null !== $this->getError() || '' != $this->getError());
    }
    
    public function getFunctions()
    {
        return $this->getClient()->__getFunctions();     
    }
    
}
