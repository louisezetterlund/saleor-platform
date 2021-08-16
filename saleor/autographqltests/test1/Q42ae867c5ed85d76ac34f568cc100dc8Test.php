<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q42ae867c5ed85d76ac34f568cc100dc8Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query($id: ID!) {\n        attribute(id: $id) {\n            id\n            slug\n        }\n    }\n    ", "variables": {"id": "QXR0cmlidXRlOjQ5OQ=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('attribute', $responseContent);
        
        if ($responseContent['attribute']) {
        
        $this->assertArrayHasKey('id', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['id']);
        
        $this->assertArrayHasKey('slug', $responseContent['attribute']);
        
        if ($responseContent['attribute']['slug']) {
        
        $this->assertIsString($responseContent['attribute']['slug']);
        
        }
        
        }
        

    }
}