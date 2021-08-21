<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q73f929f8b181541c91f911158310981fTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: MenuSortingInput, $filter: MenuFilterInput\n    ){\n        menus(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            edges {\n                node {\n                    name\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 3, "after": null, "sortBy": {"field": "NAME", "direction": "ASC"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menus', $responseContent);
        
        if ($responseContent['menus']) {
        
        $this->assertArrayHasKey('edges', $responseContent['menus']);
        
        $this->assertNotNull($responseContent['menus']['edges']);
        
        $this->assertIsArray($responseContent['menus']['edges']);
        
        for($g = 0; $g < count($responseContent['menus']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['menus']['edges'][$g]);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['menus']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['menus']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['menus']);
        
        $this->assertNotNull($responseContent['menus']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['menus']['pageInfo']);
        
        if ($responseContent['menus']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['menus']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['menus']['pageInfo']);
        
        if ($responseContent['menus']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['menus']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['menus']['pageInfo']);
        
        $this->assertNotNull($responseContent['menus']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['menus']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['menus']['pageInfo']);
        
        $this->assertNotNull($responseContent['menus']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['menus']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}