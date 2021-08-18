<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q50de8c5e6fb75466a548f5e128f57fc0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: MenuItemSortingInput, $filter: MenuItemFilterInput\n    ){\n        menuItems(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            edges {\n                node {\n                    name\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 2, "after": null, "filter": {"search": "Item1"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menuItems', $responseContent);
        
        if ($responseContent['menuItems']) {
        
        $this->assertArrayHasKey('edges', $responseContent['menuItems']);
        
        $this->assertNotNull($responseContent['menuItems']['edges']);
        
        $this->assertIsArray($responseContent['menuItems']['edges']);
        
        for($g = 0; $g < count($responseContent['menuItems']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['menuItems']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['menuItems']['edges'][$g]);
        
        $this->assertNotNull($responseContent['menuItems']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['menuItems']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menuItems']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['menuItems']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['menuItems']);
        
        $this->assertNotNull($responseContent['menuItems']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['menuItems']['pageInfo']);
        
        if ($responseContent['menuItems']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['menuItems']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['menuItems']['pageInfo']);
        
        if ($responseContent['menuItems']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['menuItems']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['menuItems']['pageInfo']);
        
        $this->assertNotNull($responseContent['menuItems']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['menuItems']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['menuItems']['pageInfo']);
        
        $this->assertNotNull($responseContent['menuItems']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['menuItems']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}