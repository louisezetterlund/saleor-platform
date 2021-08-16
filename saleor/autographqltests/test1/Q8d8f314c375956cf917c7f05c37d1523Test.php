<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8d8f314c375956cf917c7f05c37d1523Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query getProduct($productID: ID!) {\n            product(id: $productID) {\n                collections {\n                    name\n                }\n            }\n        }\n        ", "variables": {"productID": "UHJvZHVjdDo1MTY="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertArrayHasKey('collections', $responseContent['product']);
        
        if ($responseContent['product']['collections']) {
        
        $this->assertIsArray($responseContent['product']['collections']);
        
        for($g = 0; $g < count($responseContent['product']['collections']); $g++) {
        
        if ($responseContent['product']['collections'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['product']['collections'][$g]);
        
        $this->assertNotNull($responseContent['product']['collections'][$g]['name']);
        
        $this->assertIsString($responseContent['product']['collections'][$g]['name']);
        
        }
        
        }
        
        }
        
        }
        

    }
}