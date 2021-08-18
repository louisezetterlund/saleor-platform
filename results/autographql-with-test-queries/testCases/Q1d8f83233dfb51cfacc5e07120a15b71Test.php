<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q1d8f83233dfb51cfacc5e07120a15b71Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    {\n        checkouts(first: 20) {\n            edges {\n                node {\n                    token\n                }\n            }\n        }\n    }\n    ", "variables": {}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkouts', $responseContent);
        
        if ($responseContent['checkouts']) {
        
        $this->assertArrayHasKey('edges', $responseContent['checkouts']);
        
        $this->assertNotNull($responseContent['checkouts']['edges']);
        
        $this->assertIsArray($responseContent['checkouts']['edges']);
        
        for($g = 0; $g < count($responseContent['checkouts']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['checkouts']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['checkouts']['edges'][$g]);
        
        $this->assertNotNull($responseContent['checkouts']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('token', $responseContent['checkouts']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['checkouts']['edges'][$g]['node']['token']);
        
        }
        
        }
        

    }
}