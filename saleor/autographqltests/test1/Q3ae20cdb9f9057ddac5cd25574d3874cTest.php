<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3ae20cdb9f9057ddac5cd25574d3874cTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query fulfillmentMeta($token: UUID!){\n        orderByToken(token: $token){\n            fulfillments{\n                metadata{\n                    key\n                    value\n                }\n          }\n        }\n    }\n", "variables": {"token": "5b38c313-2127-4179-8245-6d8dc0c386cc"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertArrayHasKey('fulfillments', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['fulfillments']);
        
        $this->assertIsArray($responseContent['orderByToken']['fulfillments']);
        
        for($g = 0; $g < count($responseContent['orderByToken']['fulfillments']); $g++) {
        
        if ($responseContent['orderByToken']['fulfillments'][$g]) {
        
        $this->assertArrayHasKey('metadata', $responseContent['orderByToken']['fulfillments'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['fulfillments'][$g]['metadata']);
        
        $this->assertIsArray($responseContent['orderByToken']['fulfillments'][$g]['metadata']);
        
        for($f = 0; $f < count($responseContent['orderByToken']['fulfillments'][$g]['metadata']); $f++) {
        
        if ($responseContent['orderByToken']['fulfillments'][$g]['metadata'][$f]) {
        
        $this->assertArrayHasKey('key', $responseContent['orderByToken']['fulfillments'][$g]['metadata'][$f]);
        
        $this->assertNotNull($responseContent['orderByToken']['fulfillments'][$g]['metadata'][$f]['key']);
        
        $this->assertIsString($responseContent['orderByToken']['fulfillments'][$g]['metadata'][$f]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['orderByToken']['fulfillments'][$g]['metadata'][$f]);
        
        $this->assertNotNull($responseContent['orderByToken']['fulfillments'][$g]['metadata'][$f]['value']);
        
        $this->assertIsString($responseContent['orderByToken']['fulfillments'][$g]['metadata'][$f]['value']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}