<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q472c6e7a352d53f694c0adcdda605567Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: UserSortingInput, $filter: StaffUserInput\n    ){\n        staffUsers(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            edges {\n                node {\n                    firstName\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 2, "after": null, "filter": {"status": "ACTIVE"}}, "operationName": ""}
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
        
        $this->assertArrayHasKey('pageInfo', $responseContent['staffUsers']);
        
        $this->assertNotNull($responseContent['staffUsers']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['staffUsers']['pageInfo']);
        
        if ($responseContent['staffUsers']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['staffUsers']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['staffUsers']['pageInfo']);
        
        if ($responseContent['staffUsers']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['staffUsers']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['staffUsers']['pageInfo']);
        
        $this->assertNotNull($responseContent['staffUsers']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['staffUsers']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['staffUsers']['pageInfo']);
        
        $this->assertNotNull($responseContent['staffUsers']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['staffUsers']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}