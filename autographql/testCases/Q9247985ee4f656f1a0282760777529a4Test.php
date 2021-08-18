<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9247985ee4f656f1a0282760777529a4Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($id: ID, $name: String, $slug: String){\n        menu(\n            id: $id,\n            name: $name,\n            slug: $slug\n        ) {\n            id\n            name\n            slug\n        }\n    }\n    ", "variables": {"id": "TWVudToxMQ==", "name": "test-navbar"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menu', $responseContent);
        
        if ($responseContent['menu']) {
        
        $this->assertArrayHasKey('id', $responseContent['menu']);
        
        $this->assertNotNull($responseContent['menu']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menu']);
        
        $this->assertNotNull($responseContent['menu']['name']);
        
        $this->assertIsString($responseContent['menu']['name']);
        
        $this->assertArrayHasKey('slug', $responseContent['menu']);
        
        $this->assertNotNull($responseContent['menu']['slug']);
        
        $this->assertIsString($responseContent['menu']['slug']);
        
        }
        

    }
}