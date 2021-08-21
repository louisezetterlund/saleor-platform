<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0c065e946e2d5de69462bb076f1795d5Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query productImageById($imageId: ID!, $productId: ID!) {\n        product(id: $productId) {\n            imageById(id: $imageId) {\n                id\n                url\n            }\n        }\n    }\n    ", "variables": {"productId": "UHJvZHVjdDo1MTU=", "imageId": "UHJvZHVjdEltYWdlOjc="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertArrayHasKey('imageById', $responseContent['product']);
        
        if ($responseContent['product']['imageById']) {
        
        $this->assertArrayHasKey('id', $responseContent['product']['imageById']);
        
        $this->assertNotNull($responseContent['product']['imageById']['id']);
        
        $this->assertArrayHasKey('url', $responseContent['product']['imageById']);
        
        $this->assertNotNull($responseContent['product']['imageById']['url']);
        
        $this->assertIsString($responseContent['product']['imageById']['url']);
        
        }
        
        }
        

    }
}