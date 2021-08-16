<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9dca005acfdf5b16b130f80aa0719df3Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query orderMeta($token: UUID!){\n        orderByToken(token: $token){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"token": "7a63dab4-79eb-4331-b88d-10d230de9659"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['metadata']);
        
        $this->assertIsArray($responseContent['orderByToken']['metadata']);
        
        for($g = 0; $g < count($responseContent['orderByToken']['metadata']); $g++) {
        
        if ($responseContent['orderByToken']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['orderByToken']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['orderByToken']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['orderByToken']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['orderByToken']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}