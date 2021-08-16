<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc1b8083e2fb355de9caeab7070a31aa1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query categoryMeta($id: ID!){\n        category(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "Q2F0ZWdvcnk6MTI2"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['metadata']);
        
        $this->assertIsArray($responseContent['category']['metadata']);
        
        for($g = 0; $g < count($responseContent['category']['metadata']); $g++) {
        
        if ($responseContent['category']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['category']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['category']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['category']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['category']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['category']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['category']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}