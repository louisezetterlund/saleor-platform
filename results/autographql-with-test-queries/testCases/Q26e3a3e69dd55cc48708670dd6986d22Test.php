<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q26e3a3e69dd55cc48708670dd6986d22Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($id: ID, $slug: String){\n        product(\n            id: $id,\n            slug: $slug,\n        ) {\n            id\n            name\n            weight {\n                unit\n                value\n            }\n            availableForPurchase\n            isAvailableForPurchase\n            visibleInListings\n        }\n    }\n    ", "variables": {"id": "UHJvZHVjdDo0NjI=", "slug": "test-product-11"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertArrayHasKey('id', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['name']);
        
        $this->assertIsString($responseContent['product']['name']);
        
        $this->assertArrayHasKey('weight', $responseContent['product']);
        
        if ($responseContent['product']['weight']) {
        
        $this->assertArrayHasKey('unit', $responseContent['product']['weight']);
        
        $this->assertNotNull($responseContent['product']['weight']['unit']);
        
        $this->assertContains($responseContent['product']['weight']['unit'], ['KG', 'LB', 'OZ', 'G']);
        
        $this->assertArrayHasKey('value', $responseContent['product']['weight']);
        
        $this->assertNotNull($responseContent['product']['weight']['value']);
        
        $this->assertIsNumeric($responseContent['product']['weight']['value']);
        
        }
        
        $this->assertArrayHasKey('availableForPurchase', $responseContent['product']);
        
        if ($responseContent['product']['availableForPurchase']) {
        
        }
        
        $this->assertArrayHasKey('isAvailableForPurchase', $responseContent['product']);
        
        if ($responseContent['product']['isAvailableForPurchase']) {
        
        $this->assertIsBool($responseContent['product']['isAvailableForPurchase']);
        
        }
        
        $this->assertArrayHasKey('visibleInListings', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['visibleInListings']);
        
        $this->assertIsBool($responseContent['product']['visibleInListings']);
        
        }
        

    }
}