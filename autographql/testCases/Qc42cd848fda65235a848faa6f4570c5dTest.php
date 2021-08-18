<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc42cd848fda65235a848faa6f4570c5dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query userMeta($id: ID!){\n        user(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "VXNlcjo4NTc="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('user', $responseContent);
        
        if ($responseContent['user']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['metadata']);
        
        $this->assertIsArray($responseContent['user']['metadata']);
        
        for($g = 0; $g < count($responseContent['user']['metadata']); $g++) {
        
        if ($responseContent['user']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['user']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['user']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['user']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['user']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['user']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['user']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}