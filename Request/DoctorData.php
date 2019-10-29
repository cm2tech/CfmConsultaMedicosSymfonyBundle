<?php

namespace Cfm\SoapSymfonyBundle\Request;

class DoctorData implements DoctorDataInterface
{
    private $uf;
    private $crm;

    public function __construct(
        string $uf,
        int    $crm
    ) {
        $this->uf  = $uf;
        $this->crm = $crm;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function getCrm(): int
    {
        return $this->crm;
    }
}
