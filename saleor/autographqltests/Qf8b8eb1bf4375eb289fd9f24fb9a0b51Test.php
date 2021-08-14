<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf8b8eb1bf4375eb289fd9f24fb9a0b51Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query leveled_categories($level: Int) {\n        categories(level: $level, first: 20) {\n            edges {\n                node {\n                    name\n                    parent {\n                        name\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": {"level": 0}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('categories', $responseContent);
        
        if ($responseContent['categories']) {
        
        $this->assertArrayHasKey('edges', $responseContent['categories']);
        
        $this->assertNotNull($responseContent['categories']['edges']);
        
        $this->assertIsArray($responseContent['categories']['edges']);
        
        for($g = 0; $g < count($responseContent['categories']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['categories']['edges'][$g]);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('parent', $responseContent['categories']['edges'][$g]['node']);
        
        if ($responseContent['categories']['edges'][$g]['node']['parent']) {
        
        $this->assertArrayHasKey('name', $responseContent['categories']['edges'][$g]['node']['parent']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['parent']['name']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['parent']['name']);
        
        }
        
        }
        
        }
        

    }
}