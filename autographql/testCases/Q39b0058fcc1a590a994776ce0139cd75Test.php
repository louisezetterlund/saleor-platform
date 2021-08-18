<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q39b0058fcc1a590a994776ce0139cd75Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n            query($id: ID!) {\n              product(id: $id) {\n                attributes {\n                  attribute {\n                    id\n                  }\n                }\n              }\n            }\n        ", "variables": {"id": "UHJvZHVjdDozNDA="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertArrayHasKey('attributes', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['attributes']);
        
        $this->assertIsArray($responseContent['product']['attributes']);
        
        for($g = 0; $g < count($responseContent['product']['attributes']); $g++) {
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]);
        
        $this->assertArrayHasKey('attribute', $responseContent['product']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['product']['attributes'][$g]['attribute']['id']);
        
        }
        
        }
        

    }
}