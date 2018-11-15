<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\DHLExpressTrack\SoapContainer;
use GoetasWebservices\Client\DHLExpressTrack\SoapStubs\GblDHLExpressTrack;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();

// use this when cloning this repository and keeping the directory, comment it when including goetas-webservices/dhl-express-track-client via composer
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();

// uncomment this when including goetas-webservices/dhl-express-track-client via composer
// $serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container, null, __DIR__ . '/vendor/goetas-webservices/dhl-express-track-client')->build();

$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client GblDHLExpressTrack
 */
$client = $factory->getClient('https://wsb.dhl.com/gbl/glDHLExpressTrack?WSDL','gblDHLExpressTrack', 'gblDHLExpressTrack');


$result = $client->trackShipmentRequest(/* put here your params */);

var_dump($result);
