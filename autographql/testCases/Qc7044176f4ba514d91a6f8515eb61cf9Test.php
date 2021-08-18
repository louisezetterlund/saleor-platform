<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc7044176f4ba514d91a6f8515eb61cf9Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query ($filter: PageFilterInput) {\n            pages(first: 5, filter:$filter) {\n                totalCount\n                edges {\n                    node {\n                        id\n                    }\n                }\n            }\n        }\n    ", "variables": {"filter": {"search": "test"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('pages', $responseContent);
        
        if ($responseContent['pages']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['pages']);
        
        if ($responseContent['pages']['totalCount']) {
        
        $this->assertIsInt($responseContent['pages']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['pages']);
        
        $this->assertNotNull($responseContent['pages']['edges']);
        
        $this->assertIsArray($responseContent['pages']['edges']);
        
        for($g = 0; $g < count($responseContent['pages']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['pages']['edges'][$g]);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['id']);
        
        }
        
        }
        

    }
}