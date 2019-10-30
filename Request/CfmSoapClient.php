<?php

namespace Cfm\SoapSymfonyBundle\Request;

class CfmSoapClient implements CfmSoapClientInterface
{
    const WSDL_PATH = 'https://ws.cfm.org.br:8080/WebServiceConsultaMedicos/ServicoConsultaMedicos?wsdl';

    private $client;

    public function __construct() {
        $this->createClient();
    }

    public function getWsdl(): string
    {
        return self::WSDL_PATH;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function createClient()
    {
        $client = new \nusoap_client(self::WSDL_PATH, 'wsdl');

        $this->client = $client;
    }
}
