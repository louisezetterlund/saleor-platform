<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2dcd02d2ab5a582b99278cc633d402a7Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query checkoutMeta($token: UUID!){\n        checkout(token: $token){\n            privateMetadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"token": "b72479a6-91bf-46df-8f1c-63d955cbf52e"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkout', $responseContent);
        
        if ($responseContent['checkout']) {
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['checkout']);
        
        $this->assertNotNull($responseContent['checkout']['privateMetadata']);
        
        $this->assertIsArray($responseContent['checkout']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['checkout']['privateMetadata']); $g++) {
        
        if ($responseContent['checkout']['privateMetadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['checkout']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['checkout']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['checkout']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['checkout']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}