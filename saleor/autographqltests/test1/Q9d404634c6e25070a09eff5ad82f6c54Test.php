<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9d404634c6e25070a09eff5ad82f6c54Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query getCheckout($token: UUID!) {\n        checkout(token: $token) {\n           user {\n               id\n           }\n        }\n    }\n    ", "variables": {"token": "6e341fa0-701f-4fdd-ad6a-d47eaad95f5d"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkout', $responseContent);
        
        if ($responseContent['checkout']) {
        
        $this->assertArrayHasKey('user', $responseContent['checkout']);
        
        if ($responseContent['checkout']['user']) {
        
        $this->assertArrayHasKey('id', $responseContent['checkout']['user']);
        
        $this->assertNotNull($responseContent['checkout']['user']['id']);
        
        }
        
        }
        

    }
}