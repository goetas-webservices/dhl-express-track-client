<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\DHLExpressTrack\SoapContainer;
use GoetasWebservices\Client\DHLExpressTrack\SoapStubs\CheckVatPortType;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();
$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client CheckVatPortType
 */
$client = $factory->getClient('https://wsb.dhl.com/gbl/glDHLExpressTrack?WSDL','gblDHLExpressTrack', 'gblDHLExpressTrack');


$result = $client->trackShipmentRequest(/* put here your params */);

var_dump($result);