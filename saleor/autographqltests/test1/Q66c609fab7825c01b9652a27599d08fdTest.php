<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q66c609fab7825c01b9652a27599d08fdTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query OrderByToken($token: UUID!) {\n        orderByToken(token: $token) {\n            events {\n                id\n            }\n        }\n    }\n    ", "variables": {"token": "3027d88d-affa-450b-b0c8-df7a1471b66c"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertArrayHasKey('events', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['events']) {
        
        $this->assertIsArray($responseContent['orderByToken']['events']);
        
        for($g = 0; $g < count($responseContent['orderByToken']['events']); $g++) {
        
        if ($responseContent['orderByToken']['events'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['events'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['events'][$g]['id']);
        
        }
        
        }
        
        }
        
        }
        

    }
}