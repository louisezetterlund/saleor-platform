<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5ca993a22aa5597a8c2d5681fe4c2a49Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ProductVariantDetails($variantId: ID!) {\n        productVariant(id: $variantId) {\n            id\n            product {\n                id\n            }\n        }\n    }\n    ", "variables": {"variantId": "UHJvZHVjdFZhcmlhbnQ6NzYx"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['id']);
        
        $this->assertArrayHasKey('product', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['product']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['product']);
        
        $this->assertNotNull($responseContent['productVariant']['product']['id']);
        
        }
        

    }
}