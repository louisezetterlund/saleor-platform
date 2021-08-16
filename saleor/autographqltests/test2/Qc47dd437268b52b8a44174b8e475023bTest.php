<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc47dd437268b52b8a44174b8e475023bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query($productTypeId:ID!, $filters: AttributeFilterInput) {\n      productType(id: $productTypeId) {\n        availableAttributes(first: 10, filter: $filters) {\n          edges {\n            node {\n              id\n              slug\n            }\n          }\n        }\n      }\n    }\n", "variables": {"productTypeId": "UHJvZHVjdFR5cGU6Mzc2"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productType', $responseContent);
        
        if ($responseContent['productType']) {
        
        $this->assertArrayHasKey('availableAttributes', $responseContent['productType']);
        
        if ($responseContent['productType']['availableAttributes']) {
        
        $this->assertArrayHasKey('edges', $responseContent['productType']['availableAttributes']);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['edges']);
        
        $this->assertIsArray($responseContent['productType']['availableAttributes']['edges']);
        
        for($g = 0; $g < count($responseContent['productType']['availableAttributes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['productType']['availableAttributes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['availableAttributes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productType']['availableAttributes']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('slug', $responseContent['productType']['availableAttributes']['edges'][$g]['node']);
        
        if ($responseContent['productType']['availableAttributes']['edges'][$g]['node']['slug']) {
        
        $this->assertIsString($responseContent['productType']['availableAttributes']['edges'][$g]['node']['slug']);
        
        }
        
        }
        
        }
        
        }
        

    }
}