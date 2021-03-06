# DHL express tracking SOAP PHP client

This project provides a SOAP client for the DHL express tracking service



## Installing

The recommended way to install `goetas-webservices/dhl-express-track-client` is using [Composer](https://getcomposer.org/), just run:

```yaml
composer require goetas-webservices/dhl-express-track-client
```
## Features

- Pure PHP, no dependencies on `ext-soap`
- Complete IDE type hinting support
- PSR-7 HTTP messaging compatible
- Multi HTTP client (guzzle, buzz, curl, react)
- No WSDL/XSD parsing on production
- Extensible (event listeners support)

## Usage

```php
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

```

## Note 

The code in this project is provided under the 
[MIT](https://opensource.org/licenses/MIT) license. 
For professional support 
contact [goetas@gmail.com](mailto:goetas@gmail.com) 
or visit [https://www.goetas.com](https://www.goetas.com)
