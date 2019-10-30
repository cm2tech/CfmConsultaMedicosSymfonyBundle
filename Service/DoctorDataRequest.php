<?php

namespace Cfm\SoapSymfonyBundle\Service;

use Cfm\SoapSymfonyBundle\Request\DoctorData;
use Cfm\SoapSymfonyBundle\Request\CfmSoapClient;

class DoctorDataRequest
{
    public static function Consultar(DoctorData $doctorData, String $key): Array
    {
        $cfmSoap = new CfmSoapClient();
        $cfmSoap->createClient();

        $client = $cfmSoap->getClient();
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = FALSE;

        $jsonData = [
            'uf'    => $doctorData->getUf(),
            'crm'   => $doctorData->getCrm(),
            'chave' => $key
        ];

        $response = $client->call('Consultar', $jsonData);

        return $response;
    }
}
