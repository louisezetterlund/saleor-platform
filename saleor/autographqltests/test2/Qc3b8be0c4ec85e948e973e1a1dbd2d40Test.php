<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc3b8be0c4ec85e948e973e1a1dbd2d40Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    fragment Address on Address {\n      id\n      firstName\n      lastName\n      companyName\n      streetAddress1\n      streetAddress2\n      city\n      postalCode\n      country {\n        code\n        country\n      }\n      countryArea\n      phone\n      isDefaultBillingAddress\n      isDefaultShippingAddress\n    }\n\n    fragment Price on TaxedMoney {\n      gross {\n        amount\n        currency\n      }\n      net {\n        amount\n        currency\n      }\n    }\n\n        fragment ProductVariant on ProductVariant {\n          id\n          name\n          pricing {\n            onSale\n            priceUndiscounted {\n              ...Price\n            }\n            price {\n              ...Price\n            }\n          }\n          product {\n            id\n            name\n            thumbnail {\n              url\n              alt\n            }\n            thumbnail2x: thumbnail(size: 510) {\n              url\n            }\n          }\n        }\n    \n        fragment OrderDetail on Order {\n          userEmail\n          paymentStatus\n          paymentStatusDisplay\n          status\n          statusDisplay\n          id\n          number\n          shippingAddress {\n            ...Address\n          }\n          lines {\n            productName\n            quantity\n            variant {\n              ...ProductVariant\n            }\n            unitPrice {\n              currency\n              ...Price\n            }\n          }\n          subtotal {\n            ...Price\n          }\n          total {\n            ...Price\n          }\n          shippingPrice {\n            ...Price\n          }\n        }\n    \n            query OrderByToken($token: UUID!) {\n              orderByToken(token: $token) {\n                ...OrderDetail\n              }\n            }\n        ", "variables": {"token": "359740c4-631d-4202-b665-507d76e38719"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertArrayHasKey('userEmail', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['userEmail']) {
        
        $this->assertIsString($responseContent['orderByToken']['userEmail']);
        
        }
        
        $this->assertArrayHasKey('paymentStatus', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['paymentStatus']) {
        
        $this->assertContains($responseContent['orderByToken']['paymentStatus'], ['NOT_CHARGED', 'PENDING', 'PARTIALLY_CHARGED', 'FULLY_CHARGED', 'PARTIALLY_REFUNDED', 'FULLY_REFUNDED', 'REFUSED', 'CANCELLED']);
        
        }
        
        $this->assertArrayHasKey('paymentStatusDisplay', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['paymentStatusDisplay']) {
        
        $this->assertIsString($responseContent['orderByToken']['paymentStatusDisplay']);
        
        }
        
        $this->assertArrayHasKey('status', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['status']);
        
        $this->assertContains($responseContent['orderByToken']['status'], ['DRAFT', 'UNFULFILLED', 'PARTIALLY_FULFILLED', 'FULFILLED', 'CANCELED']);
        
        $this->assertArrayHasKey('statusDisplay', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['statusDisplay']) {
        
        $this->assertIsString($responseContent['orderByToken']['statusDisplay']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['id']);
        
        $this->assertArrayHasKey('number', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['number']) {
        
        $this->assertIsString($responseContent['orderByToken']['number']);
        
        }
        
        $this->assertArrayHasKey('shippingAddress', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['shippingAddress']) {
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['firstName']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['lastName']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['companyName']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['city']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['country']);
        
        $this->assertArrayHasKey('code', $responseContent['orderByToken']['shippingAddress']['country']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['orderByToken']['shippingAddress']['country']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['orderByToken']['shippingAddress']);
        
        if ($responseContent['orderByToken']['shippingAddress']['phone']) {
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['orderByToken']['shippingAddress']);
        
        if ($responseContent['orderByToken']['shippingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['orderByToken']['shippingAddress']['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['orderByToken']['shippingAddress']);
        
        if ($responseContent['orderByToken']['shippingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['orderByToken']['shippingAddress']['isDefaultShippingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('lines', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines']);
        
        $this->assertIsArray($responseContent['orderByToken']['lines']);
        
        for($g = 0; $g < count($responseContent['orderByToken']['lines']); $g++) {
        
        if ($responseContent['orderByToken']['lines'][$g]) {
        
        $this->assertArrayHasKey('productName', $responseContent['orderByToken']['lines'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['productName']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['productName']);
        
        $this->assertArrayHasKey('quantity', $responseContent['orderByToken']['lines'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['quantity']);
        
        $this->assertIsInt($responseContent['orderByToken']['lines'][$g]['quantity']);
        
        $this->assertArrayHasKey('variant', $responseContent['orderByToken']['lines'][$g]);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']) {
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['name']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['name']);
        
        $this->assertArrayHasKey('pricing', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['pricing']) {
        
        $this->assertArrayHasKey('onSale', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']) {
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']) {
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['pricing']['price']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('product', $responseContent['orderByToken']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['name']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['orderByToken']['lines'][$g]['variant']['product']);
        
        if ($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']) {
        
        $this->assertArrayHasKey('url', $responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['variant']['product']['thumbnail2x']['url']);
        
        }
        
        }
        
        $this->assertArrayHasKey('unitPrice', $responseContent['orderByToken']['lines'][$g]);
        
        if ($responseContent['orderByToken']['lines'][$g]['unitPrice']) {
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['unitPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['unitPrice']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['lines'][$g]['unitPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['unitPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['lines'][$g]['unitPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['lines'][$g]['unitPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['lines'][$g]['unitPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['lines'][$g]['unitPrice']['net']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('subtotal', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['subtotal']) {
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['subtotal']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['subtotal']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['subtotal']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['subtotal']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['subtotal']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['subtotal']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['subtotal']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['subtotal']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['subtotal']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['subtotal']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['subtotal']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('total', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['total']) {
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['total']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['total']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['total']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['total']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['total']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['total']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['total']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['total']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['total']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['total']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['total']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('shippingPrice', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['shippingPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['orderByToken']['shippingPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['shippingPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['orderByToken']['shippingPrice']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['orderByToken']['shippingPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orderByToken']['shippingPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orderByToken']['shippingPrice']['net']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingPrice']['net']['currency']);
        
        }
        
        }
        

    }
}