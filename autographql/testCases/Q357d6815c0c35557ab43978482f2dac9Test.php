<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q357d6815c0c35557ab43978482f2dac9Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    {\n        me{\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        if ($responseContent['me']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['metadata']);
        
        $this->assertIsArray($responseContent['me']['metadata']);
        
        for($g = 0; $g < count($responseContent['me']['metadata']); $g++) {
        
        if ($responseContent['me']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['me']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['me']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['me']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['me']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['me']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['me']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}