<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qb36385ead6875921a44d2e1fed2adcf0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query OrdersQuery {\n        orders(first: 1) {\n            edges {\n                node {\n                    number\n                    canFinalize\n                    status\n                    statusDisplay\n                    paymentStatus\n                    paymentStatusDisplay\n                    userEmail\n                    isPaid\n                    shippingPrice {\n                        gross {\n                            amount\n                        }\n                    }\n                    lines {\n                        id\n                    }\n                    fulfillments {\n                        fulfillmentOrder\n                    }\n                    payments{\n                        id\n                    }\n                    subtotal {\n                        net {\n                            amount\n                        }\n                    }\n                    total {\n                        net {\n                            amount\n                        }\n                    }\n                    availableShippingMethods {\n                        id\n                        price {\n                            amount\n                        }\n                        minimumOrderPrice {\n                            amount\n                            currency\n                        }\n                        type\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orders', $responseContent);
        
        if ($responseContent['orders']) {
        
        $this->assertArrayHasKey('edges', $responseContent['orders']);
        
        $this->assertNotNull($responseContent['orders']['edges']);
        
        $this->assertIsArray($responseContent['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('number', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['number']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['number']);
        
        }
        
        $this->assertArrayHasKey('canFinalize', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['canFinalize']);
        
        $this->assertIsBool($responseContent['orders']['edges'][$g]['node']['canFinalize']);
        
        $this->assertArrayHasKey('status', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['status']);
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['status'], ['DRAFT', 'UNFULFILLED', 'PARTIALLY_FULFILLED', 'FULFILLED', 'CANCELED']);
        
        $this->assertArrayHasKey('statusDisplay', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['statusDisplay']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['statusDisplay']);
        
        }
        
        $this->assertArrayHasKey('paymentStatus', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['paymentStatus']) {
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['paymentStatus'], ['NOT_CHARGED', 'PENDING', 'PARTIALLY_CHARGED', 'FULLY_CHARGED', 'PARTIALLY_REFUNDED', 'FULLY_REFUNDED', 'REFUSED', 'CANCELLED']);
        
        }
        
        $this->assertArrayHasKey('paymentStatusDisplay', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['paymentStatusDisplay']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['paymentStatusDisplay']);
        
        }
        
        $this->assertArrayHasKey('userEmail', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['userEmail']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['userEmail']);
        
        }
        
        $this->assertArrayHasKey('isPaid', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['isPaid']) {
        
        $this->assertIsBool($responseContent['orders']['edges'][$g]['node']['isPaid']);
        
        }
        
        $this->assertArrayHasKey('shippingPrice', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['shippingPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['orders']['edges'][$g]['node']['shippingPrice']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['shippingPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['shippingPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['shippingPrice']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('lines', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines']);
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['lines']);
        
        for($f = 0; $f < count($responseContent['orders']['edges'][$g]['node']['lines']); $f++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['lines'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['lines'][$f]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['id']);
        
        }
        
        }
        
        $this->assertArrayHasKey('fulfillments', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['fulfillments']);
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['fulfillments']);
        
        for($f = 0; $f < count($responseContent['orders']['edges'][$g]['node']['fulfillments']); $f++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['fulfillments'][$f]) {
        
        $this->assertArrayHasKey('fulfillmentOrder', $responseContent['orders']['edges'][$g]['node']['fulfillments'][$f]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['fulfillments'][$f]['fulfillmentOrder']);
        
        $this->assertIsInt($responseContent['orders']['edges'][$g]['node']['fulfillments'][$f]['fulfillmentOrder']);
        
        }
        
        }
        
        $this->assertArrayHasKey('payments', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['payments']) {
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['payments']);
        
        for($f = 0; $f < count($responseContent['orders']['edges'][$g]['node']['payments']); $f++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['payments'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['payments'][$f]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['payments'][$f]['id']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('subtotal', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['subtotal']) {
        
        $this->assertArrayHasKey('net', $responseContent['orders']['edges'][$g]['node']['subtotal']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['subtotal']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['subtotal']['net']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['subtotal']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['subtotal']['net']['amount']);
        
        }
        
        $this->assertArrayHasKey('total', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['total']) {
        
        $this->assertArrayHasKey('net', $responseContent['orders']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['total']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['total']['net']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['total']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['total']['net']['amount']);
        
        }
        
        $this->assertArrayHasKey('availableShippingMethods', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods']) {
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['availableShippingMethods']);
        
        for($f = 0; $f < count($responseContent['orders']['edges'][$g]['node']['availableShippingMethods']); $f++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['id']);
        
        $this->assertArrayHasKey('price', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['price']) {
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['price']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['price']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['price']['amount']);
        
        }
        
        $this->assertArrayHasKey('minimumOrderPrice', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['minimumOrderPrice']) {
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['minimumOrderPrice']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['minimumOrderPrice']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['minimumOrderPrice']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['minimumOrderPrice']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['minimumOrderPrice']['currency']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['minimumOrderPrice']['currency']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['type']) {
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['type'], ['PRICE', 'WEIGHT']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}