<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8e33dd6d2de05724bd80b263b5fd9e31Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery variants($filter: ProductVariantFilterInput){\n    productVariants(first:10, filter: $filter){\n        edges{\n            node{\n                name\n                sku\n            }\n        }\n    }\n}\n", "variables": {"filter": {"search": "Product3"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariants', $responseContent);
        
        if ($responseContent['productVariants']) {
        
        $this->assertArrayHasKey('edges', $responseContent['productVariants']);
        
        $this->assertNotNull($responseContent['productVariants']['edges']);
        
        $this->assertIsArray($responseContent['productVariants']['edges']);
        
        for($g = 0; $g < count($responseContent['productVariants']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['productVariants']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('sku', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['sku']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['sku']);
        
        }
        
        }
        

    }
}