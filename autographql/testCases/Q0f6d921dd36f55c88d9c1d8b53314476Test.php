<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0f6d921dd36f55c88d9c1d8b53314476Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query digitalContentMeta($id: ID!){\n        digitalContent(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "RGlnaXRhbENvbnRlbnQ6OA=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('digitalContent', $responseContent);
        
        if ($responseContent['digitalContent']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['digitalContent']);
        
        $this->assertNotNull($responseContent['digitalContent']['metadata']);
        
        $this->assertIsArray($responseContent['digitalContent']['metadata']);
        
        for($g = 0; $g < count($responseContent['digitalContent']['metadata']); $g++) {
        
        if ($responseContent['digitalContent']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['digitalContent']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['digitalContent']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['digitalContent']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['digitalContent']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['digitalContent']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['digitalContent']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}