<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qb3d21f3fe8265187b2bc5b492dae7714Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query orderMeta($id: ID!){\n        order(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "T3JkZXI6ODI="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('order', $responseContent);
        
        if ($responseContent['order']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['metadata']);
        
        $this->assertIsArray($responseContent['order']['metadata']);
        
        for($g = 0; $g < count($responseContent['order']['metadata']); $g++) {
        
        if ($responseContent['order']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['order']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['order']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['order']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['order']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['order']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['order']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}