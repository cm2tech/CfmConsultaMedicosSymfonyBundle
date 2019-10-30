# Cfm Soap Symfony Bundle

## Installation

    $ composer require cm2tech/cfm-soap-symfony-bundle

## Available Routes

- https://ws.cfm.org.br:8080/WebServiceConsultaMedicos/ServicoConsultaMedicos?wsdl

## Usage

    use Cfm\SoapSymfonyBundle\Service\DoctorDataRequest;
    use Cfm\SoapSymfonyBundle\Request\DoctorData;

    $doctorData = new DoctorData(
        'uf', // string
        'crm' // integer
    );

    $data = DoctorDataRequest::Consultar($doctorData, 'CFM_KEY_HERE');
