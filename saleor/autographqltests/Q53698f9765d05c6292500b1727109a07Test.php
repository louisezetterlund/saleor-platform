<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q53698f9765d05c6292500b1727109a07Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($sort_by: PageSortingInput!) {\n        pages(first:5, sortBy: $sort_by) {\n            edges{\n                node{\n                    title\n                }\n            }\n        }\n    }\n", "variables": {"sort_by": {"field": "CREATION_DATE", "direction": "ASC"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('pages', $responseContent);
        
        if ($responseContent['pages']) {
        
        $this->assertArrayHasKey('edges', $responseContent['pages']);
        
        $this->assertNotNull($responseContent['pages']['edges']);
        
        $this->assertIsArray($responseContent['pages']['edges']);
        
        for($g = 0; $g < count($responseContent['pages']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['pages']['edges'][$g]);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('title', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['title']);
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['title']);
        
        }
        
        }
        

    }
}