<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3afbd483663c5e11ab97baafbfb32c36Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query Me {\n        me {\n            id\n            email\n            checkout {\n                token\n            }\n        }\n    }\n", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        if ($responseContent['me']) {
        
        $this->assertArrayHasKey('id', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['id']);
        
        $this->assertArrayHasKey('email', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['email']);
        
        $this->assertIsString($responseContent['me']['email']);
        
        $this->assertArrayHasKey('checkout', $responseContent['me']);
        
        if ($responseContent['me']['checkout']) {
        
        $this->assertArrayHasKey('token', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['token']);
        
        }
        
        }
        

    }
}