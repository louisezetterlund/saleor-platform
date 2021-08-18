<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4945bba4964656bd99f42a161262e157Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query OrderByToken($token: UUID!) {\n        orderByToken(token: $token) {\n            user {\n                id\n            }\n        }\n    }\n    ", "variables": {"token": "d7a886d9-725f-4fd9-aad1-fb0194a1d9b8"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertArrayHasKey('user', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['user']) {
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['user']);
        
        $this->assertNotNull($responseContent['orderByToken']['user']['id']);
        
        }
        
        }
        

    }
}