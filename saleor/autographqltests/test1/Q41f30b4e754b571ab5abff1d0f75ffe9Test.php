<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q41f30b4e754b571ab5abff1d0f75ffe9Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery stock($id: ID!) {\n    stock(id: $id) {\n        warehouse {\n            name\n        }\n        productVariant {\n            product {\n                name\n            }\n        }\n        quantity\n        quantityAllocated\n    }\n}\n", "variables": {"id": "U3RvY2s6ODQ2"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('stock', $responseContent);
        
        if ($responseContent['stock']) {
        
        $this->assertArrayHasKey('warehouse', $responseContent['stock']);
        
        $this->assertNotNull($responseContent['stock']['warehouse']);
        
        $this->assertArrayHasKey('name', $responseContent['stock']['warehouse']);
        
        $this->assertNotNull($responseContent['stock']['warehouse']['name']);
        
        $this->assertIsString($responseContent['stock']['warehouse']['name']);
        
        $this->assertArrayHasKey('productVariant', $responseContent['stock']);
        
        $this->assertNotNull($responseContent['stock']['productVariant']);
        
        $this->assertArrayHasKey('product', $responseContent['stock']['productVariant']);
        
        $this->assertNotNull($responseContent['stock']['productVariant']['product']);
        
        $this->assertArrayHasKey('name', $responseContent['stock']['productVariant']['product']);
        
        $this->assertNotNull($responseContent['stock']['productVariant']['product']['name']);
        
        $this->assertIsString($responseContent['stock']['productVariant']['product']['name']);
        
        $this->assertArrayHasKey('quantity', $responseContent['stock']);
        
        $this->assertNotNull($responseContent['stock']['quantity']);
        
        $this->assertIsInt($responseContent['stock']['quantity']);
        
        $this->assertArrayHasKey('quantityAllocated', $responseContent['stock']);
        
        $this->assertNotNull($responseContent['stock']['quantityAllocated']);
        
        $this->assertIsInt($responseContent['stock']['quantityAllocated']);
        
        }
        

    }
}