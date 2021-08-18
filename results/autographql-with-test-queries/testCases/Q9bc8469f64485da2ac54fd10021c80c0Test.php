<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9bc8469f64485da2ac54fd10021c80c0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($sort_by: UserSortingInput!) {\n        staffUsers(first:5, sortBy: $sort_by) {\n                edges{\n                    node{\n                        firstName\n                    }\n                }\n            }\n        }\n", "variables": {"sort_by": {"field": "FIRST_NAME", "direction": "DESC"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('staffUsers', $responseContent);
        
        if ($responseContent['staffUsers']) {
        
        $this->assertArrayHasKey('edges', $responseContent['staffUsers']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges']);
        
        $this->assertIsArray($responseContent['staffUsers']['edges']);
        
        for($g = 0; $g < count($responseContent['staffUsers']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['staffUsers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('firstName', $responseContent['staffUsers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']['firstName']);
        
        $this->assertIsString($responseContent['staffUsers']['edges'][$g]['node']['firstName']);
        
        }
        
        }
        

    }
}