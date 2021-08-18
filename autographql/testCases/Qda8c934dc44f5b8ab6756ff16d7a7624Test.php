<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qda8c934dc44f5b8ab6756ff16d7a7624Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: SaleSortingInput, $filter: SaleFilterInput\n    ){\n        sales(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            edges {\n                node {\n                    name\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 3, "after": null, "sortBy": {"field": "TYPE", "direction": "ASC"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('sales', $responseContent);
        
        if ($responseContent['sales']) {
        
        $this->assertArrayHasKey('edges', $responseContent['sales']);
        
        $this->assertNotNull($responseContent['sales']['edges']);
        
        $this->assertIsArray($responseContent['sales']['edges']);
        
        for($g = 0; $g < count($responseContent['sales']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['sales']['edges'][$g]);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['sales']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['sales']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['sales']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['sales']);
        
        $this->assertNotNull($responseContent['sales']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['sales']['pageInfo']);
        
        if ($responseContent['sales']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['sales']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['sales']['pageInfo']);
        
        if ($responseContent['sales']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['sales']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['sales']['pageInfo']);
        
        $this->assertNotNull($responseContent['sales']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['sales']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['sales']['pageInfo']);
        
        $this->assertNotNull($responseContent['sales']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['sales']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}