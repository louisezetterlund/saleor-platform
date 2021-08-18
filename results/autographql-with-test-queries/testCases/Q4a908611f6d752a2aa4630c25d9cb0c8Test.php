<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4a908611f6d752a2aa4630c25d9cb0c8Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($id: ID!){\n        productType(\n            id: $id,\n        ) {\n            id\n            name\n            weight {\n                unit\n                value\n            }\n        }\n    }\n    ", "variables": {"id": "UHJvZHVjdFR5cGU6NDIx"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productType', $responseContent);
        
        if ($responseContent['productType']) {
        
        $this->assertArrayHasKey('id', $responseContent['productType']);
        
        $this->assertNotNull($responseContent['productType']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']);
        
        $this->assertNotNull($responseContent['productType']['name']);
        
        $this->assertIsString($responseContent['productType']['name']);
        
        $this->assertArrayHasKey('weight', $responseContent['productType']);
        
        if ($responseContent['productType']['weight']) {
        
        $this->assertArrayHasKey('unit', $responseContent['productType']['weight']);
        
        $this->assertNotNull($responseContent['productType']['weight']['unit']);
        
        $this->assertContains($responseContent['productType']['weight']['unit'], ['KG', 'LB', 'OZ', 'G']);
        
        $this->assertArrayHasKey('value', $responseContent['productType']['weight']);
        
        $this->assertNotNull($responseContent['productType']['weight']['value']);
        
        $this->assertIsNumeric($responseContent['productType']['weight']['value']);
        
        }
        
        }
        

    }
}