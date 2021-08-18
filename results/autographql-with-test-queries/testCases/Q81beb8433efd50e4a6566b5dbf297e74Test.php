<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q81beb8433efd50e4a6566b5dbf297e74Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query checkoutMeta($token: UUID!){\n        checkout(token: $token){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"token": "d9b3e2df-4afd-4e45-97a4-2c1c49064af5"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkout', $responseContent);
        
        if ($responseContent['checkout']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['checkout']);
        
        $this->assertNotNull($responseContent['checkout']['metadata']);
        
        $this->assertIsArray($responseContent['checkout']['metadata']);
        
        for($g = 0; $g < count($responseContent['checkout']['metadata']); $g++) {
        
        if ($responseContent['checkout']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['checkout']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['checkout']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['checkout']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['checkout']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}