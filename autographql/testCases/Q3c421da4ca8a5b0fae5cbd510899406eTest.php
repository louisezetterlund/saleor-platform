<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3c421da4ca8a5b0fae5cbd510899406eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($productId: ID!) {\n        product(id: $productId) {\n            name,\n            isPublished\n        }\n    }\n    ", "variables": {"productId": "UHJvZHVjdDo1MTg="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertArrayHasKey('name', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['name']);
        
        $this->assertIsString($responseContent['product']['name']);
        
        $this->assertArrayHasKey('isPublished', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['isPublished']);
        
        $this->assertIsBool($responseContent['product']['isPublished']);
        
        }
        

    }
}