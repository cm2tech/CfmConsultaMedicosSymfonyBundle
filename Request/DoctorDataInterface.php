<?php

namespace Cfm\SoapSymfonyBundle\Request;

interface DoctorDataInterface
{
    public function getUf(): string;

    public function getCrm(): int;
}
