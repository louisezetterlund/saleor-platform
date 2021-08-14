<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q73670f467270508f9dc4f98a5a9cef44Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: AppSortingInput, $filter: AppFilterInput\n    ){\n        apps(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            edges{\n                node{\n                    name\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 2, "after": null, "filter": {"search": "accountaccount"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('apps', $responseContent);
        
        if ($responseContent['apps']) {
        
        $this->assertArrayHasKey('edges', $responseContent['apps']);
        
        $this->assertNotNull($responseContent['apps']['edges']);
        
        $this->assertIsArray($responseContent['apps']['edges']);
        
        for($g = 0; $g < count($responseContent['apps']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['apps']['edges'][$g]);
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['apps']);
        
        $this->assertNotNull($responseContent['apps']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['apps']['pageInfo']);
        
        if ($responseContent['apps']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['apps']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['apps']['pageInfo']);
        
        if ($responseContent['apps']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['apps']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['apps']['pageInfo']);
        
        $this->assertNotNull($responseContent['apps']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['apps']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['apps']['pageInfo']);
        
        $this->assertNotNull($responseContent['apps']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['apps']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}