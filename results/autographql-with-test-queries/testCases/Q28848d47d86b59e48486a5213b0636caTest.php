<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q28848d47d86b59e48486a5213b0636caTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query MultipleShippings {\n        shippingZones(first: 100) {\n            edges {\n              node {\n                id\n                name\n                warehouses {\n                  id\n                  name\n                }\n              }\n            }\n            totalCount\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shippingZones', $responseContent);
        
        if ($responseContent['shippingZones']) {
        
        $this->assertArrayHasKey('edges', $responseContent['shippingZones']);
        
        $this->assertNotNull($responseContent['shippingZones']['edges']);
        
        $this->assertIsArray($responseContent['shippingZones']['edges']);
        
        for($g = 0; $g < count($responseContent['shippingZones']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['shippingZones']['edges'][$g]);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['shippingZones']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['shippingZones']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['shippingZones']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('warehouses', $responseContent['shippingZones']['edges'][$g]['node']);
        
        if ($responseContent['shippingZones']['edges'][$g]['node']['warehouses']) {
        
        $this->assertIsArray($responseContent['shippingZones']['edges'][$g]['node']['warehouses']);
        
        for($f = 0; $f < count($responseContent['shippingZones']['edges'][$g]['node']['warehouses']); $f++) {
        
        if ($responseContent['shippingZones']['edges'][$g]['node']['warehouses'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['shippingZones']['edges'][$g]['node']['warehouses'][$f]);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']['warehouses'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['shippingZones']['edges'][$g]['node']['warehouses'][$f]);
        
        $this->assertNotNull($responseContent['shippingZones']['edges'][$g]['node']['warehouses'][$f]['name']);
        
        $this->assertIsString($responseContent['shippingZones']['edges'][$g]['node']['warehouses'][$f]['name']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('totalCount', $responseContent['shippingZones']);
        
        if ($responseContent['shippingZones']['totalCount']) {
        
        $this->assertIsInt($responseContent['shippingZones']['totalCount']);
        
        }
        
        }
        

    }
}