<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4f5786c7fbc2584692e9d05b174e17f8Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query giftCards{\n        giftCards(first: 10) {\n            edges {\n                node {\n                    id\n                    displayCode\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('giftCards', $responseContent);
        
        if ($responseContent['giftCards']) {
        
        $this->assertArrayHasKey('edges', $responseContent['giftCards']);
        
        $this->assertNotNull($responseContent['giftCards']['edges']);
        
        $this->assertIsArray($responseContent['giftCards']['edges']);
        
        for($g = 0; $g < count($responseContent['giftCards']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['giftCards']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['giftCards']['edges'][$g]);
        
        $this->assertNotNull($responseContent['giftCards']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['giftCards']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['giftCards']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('displayCode', $responseContent['giftCards']['edges'][$g]['node']);
        
        if ($responseContent['giftCards']['edges'][$g]['node']['displayCode']) {
        
        $this->assertIsString($responseContent['giftCards']['edges'][$g]['node']['displayCode']);
        
        }
        
        }
        
        }
        

    }
}