<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4c33f77ba6735ec3b7301ca05437ee06Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        digitalContents(first:1){\n            edges{\n                node{\n                    id\n                    contentFile\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('digitalContents', $responseContent);
        
        if ($responseContent['digitalContents']) {
        
        $this->assertArrayHasKey('edges', $responseContent['digitalContents']);
        
        $this->assertNotNull($responseContent['digitalContents']['edges']);
        
        $this->assertIsArray($responseContent['digitalContents']['edges']);
        
        for($g = 0; $g < count($responseContent['digitalContents']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['digitalContents']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['digitalContents']['edges'][$g]);
        
        $this->assertNotNull($responseContent['digitalContents']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['digitalContents']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['digitalContents']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('contentFile', $responseContent['digitalContents']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['digitalContents']['edges'][$g]['node']['contentFile']);
        
        $this->assertIsString($responseContent['digitalContents']['edges'][$g]['node']['contentFile']);
        
        }
        
        }
        

    }
}