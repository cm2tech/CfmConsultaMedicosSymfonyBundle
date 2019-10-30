<?php

namespace Cfm\SoapSymfonyBundle\Request;

interface CfmSoapClientInterface
{
    public function getWsdl(): string;

    public function getClient();

    public function createClient();
}
