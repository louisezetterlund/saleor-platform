<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe265e7c79d3a5133a989fd8384492996Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query OrderFulfillData($orderId: ID!) {\n  order(id: $orderId) {\n    id\n    lines {\n      id\n      isShippingRequired\n      productName\n      quantity\n      allocations {\n        quantity\n        warehouse {\n          id\n          __typename\n        }\n        __typename\n      }\n      quantityFulfilled\n      variant {\n        id\n        name\n        sku\n        attributes {\n          values {\n            id\n            name\n            __typename\n          }\n          __typename\n        }\n        stocks {\n          id\n          warehouse {\n            id\n            __typename\n          }\n          quantity\n          quantityAllocated\n          __typename\n        }\n        trackInventory\n        __typename\n      }\n      thumbnail(size: 64) {\n        url\n        __typename\n      }\n      __typename\n    }\n    number\n    __typename\n  }\n}\n", "variables": {"orderId": "T3JkZXI6MzA="}, "operationName": "OrderFulfillData"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('order', $responseContent);
        
        if ($responseContent['order']) {
        
        $this->assertEquals('Order' , $responseContent['order']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['id']);
        
        $this->assertArrayHasKey('lines', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['lines']);
        
        $this->assertIsArray($responseContent['order']['lines']);
        
        for($g = 0; $g < count($responseContent['order']['lines']); $g++) {
        
        if ($responseContent['order']['lines'][$g]) {
        
        $this->assertEquals('OrderLine' , $responseContent['order']['lines'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']['lines'][$g]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['id']);
        
        $this->assertArrayHasKey('isShippingRequired', $responseContent['order']['lines'][$g]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['isShippingRequired']);
        
        $this->assertIsBool($responseContent['order']['lines'][$g]['isShippingRequired']);
        
        $this->assertArrayHasKey('productName', $responseContent['order']['lines'][$g]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['productName']);
        
        $this->assertIsString($responseContent['order']['lines'][$g]['productName']);
        
        $this->assertArrayHasKey('quantity', $responseContent['order']['lines'][$g]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['quantity']);
        
        $this->assertIsInt($responseContent['order']['lines'][$g]['quantity']);
        
        $this->assertArrayHasKey('allocations', $responseContent['order']['lines'][$g]);
        
        if ($responseContent['order']['lines'][$g]['allocations']) {
        
        $this->assertIsArray($responseContent['order']['lines'][$g]['allocations']);
        
        for($f = 0; $f < count($responseContent['order']['lines'][$g]['allocations']); $f++) {
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['allocations'][$f]);
        
        $this->assertEquals('Allocation' , $responseContent['order']['lines'][$g]['allocations'][$f]['__typename']);
        
        $this->assertArrayHasKey('quantity', $responseContent['order']['lines'][$g]['allocations'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['allocations'][$f]['quantity']);
        
        $this->assertIsInt($responseContent['order']['lines'][$g]['allocations'][$f]['quantity']);
        
        $this->assertArrayHasKey('warehouse', $responseContent['order']['lines'][$g]['allocations'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['allocations'][$f]['warehouse']);
        
        $this->assertEquals('Warehouse' , $responseContent['order']['lines'][$g]['allocations'][$f]['warehouse']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']['lines'][$g]['allocations'][$f]['warehouse']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['allocations'][$f]['warehouse']['id']);
        
        }
        
        }
        
        $this->assertArrayHasKey('quantityFulfilled', $responseContent['order']['lines'][$g]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['quantityFulfilled']);
        
        $this->assertIsInt($responseContent['order']['lines'][$g]['quantityFulfilled']);
        
        $this->assertArrayHasKey('variant', $responseContent['order']['lines'][$g]);
        
        if ($responseContent['order']['lines'][$g]['variant']) {
        
        $this->assertEquals('ProductVariant' , $responseContent['order']['lines'][$g]['variant']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['order']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['name']);
        
        $this->assertIsString($responseContent['order']['lines'][$g]['variant']['name']);
        
        $this->assertArrayHasKey('sku', $responseContent['order']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['sku']);
        
        $this->assertIsString($responseContent['order']['lines'][$g]['variant']['sku']);
        
        $this->assertArrayHasKey('attributes', $responseContent['order']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['attributes']);
        
        $this->assertIsArray($responseContent['order']['lines'][$g]['variant']['attributes']);
        
        for($f = 0; $f < count($responseContent['order']['lines'][$g]['variant']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['attributes'][$f]);
        
        $this->assertEquals('SelectedAttribute' , $responseContent['order']['lines'][$g]['variant']['attributes'][$f]['__typename']);
        
        $this->assertArrayHasKey('values', $responseContent['order']['lines'][$g]['variant']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values'][$e]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['order']['lines'][$g]['variant']['attributes'][$f]['values'][$e]['name']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('stocks', $responseContent['order']['lines'][$g]['variant']);
        
        if ($responseContent['order']['lines'][$g]['variant']['stocks']) {
        
        $this->assertIsArray($responseContent['order']['lines'][$g]['variant']['stocks']);
        
        for($f = 0; $f < count($responseContent['order']['lines'][$g]['variant']['stocks']); $f++) {
        
        if ($responseContent['order']['lines'][$g]['variant']['stocks'][$f]) {
        
        $this->assertEquals('Stock' , $responseContent['order']['lines'][$g]['variant']['stocks'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['id']);
        
        $this->assertArrayHasKey('warehouse', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['warehouse']);
        
        $this->assertEquals('Warehouse' , $responseContent['order']['lines'][$g]['variant']['stocks'][$f]['warehouse']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]['warehouse']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['warehouse']['id']);
        
        $this->assertArrayHasKey('quantity', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['quantity']);
        
        $this->assertIsInt($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['quantity']);
        
        $this->assertArrayHasKey('quantityAllocated', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['quantityAllocated']);
        
        $this->assertIsInt($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['quantityAllocated']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('trackInventory', $responseContent['order']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['trackInventory']);
        
        $this->assertIsBool($responseContent['order']['lines'][$g]['variant']['trackInventory']);
        
        }
        
        $this->assertArrayHasKey('thumbnail', $responseContent['order']['lines'][$g]);
        
        if ($responseContent['order']['lines'][$g]['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['order']['lines'][$g]['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['order']['lines'][$g]['thumbnail']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['thumbnail']['url']);
        
        $this->assertIsString($responseContent['order']['lines'][$g]['thumbnail']['url']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('number', $responseContent['order']);
        
        if ($responseContent['order']['number']) {
        
        $this->assertIsString($responseContent['order']['number']);
        
        }
        
        }
        

    }
}