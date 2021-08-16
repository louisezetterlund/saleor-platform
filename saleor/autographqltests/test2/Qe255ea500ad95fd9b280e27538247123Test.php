<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe255ea500ad95fd9b280e27538247123Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n            query customerEvents($customerId: ID!) {\n              user(id: $customerId) {\n                id\n                events {\n                  orderLine {\n                    id\n                  }\n                }\n              }\n            }\n            ", "variables": {"customerId": "VXNlcjoyNjI="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('user', $responseContent);
        
        if ($responseContent['user']) {
        
        $this->assertArrayHasKey('id', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['id']);
        
        $this->assertArrayHasKey('events', $responseContent['user']);
        
        if ($responseContent['user']['events']) {
        
        $this->assertIsArray($responseContent['user']['events']);
        
        for($g = 0; $g < count($responseContent['user']['events']); $g++) {
        
        if ($responseContent['user']['events'][$g]) {
        
        $this->assertArrayHasKey('orderLine', $responseContent['user']['events'][$g]);
        
        if ($responseContent['user']['events'][$g]['orderLine']) {
        
        $this->assertArrayHasKey('id', $responseContent['user']['events'][$g]['orderLine']);
        
        $this->assertNotNull($responseContent['user']['events'][$g]['orderLine']['id']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}