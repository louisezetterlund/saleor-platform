<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qfdf9db64f36c530489352d37f26a8a24Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: WarehouseSortingInput, $filter: WarehouseFilterInput\n    ){\n        warehouses(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            edges {\n                node {\n                    name\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 2, "after": null, "filter": {"ids": ["V2FyZWhvdXNlOmMwYmJiNDJjLWVlZDAtNDk3Ny1hNDZmLWU0ZjJkMjk2NzgxYQ==", "V2FyZWhvdXNlOjI3Mzg1OTEyLWE0ZDEtNGU1Yi1hOTFkLTViNTQ1OWM4YjFkMA==", "V2FyZWhvdXNlOjUyNzM4YWZlLTI2ZjktNGRkMS05NDlhLWIwNjdlMTI5ZjhjZA==", "V2FyZWhvdXNlOmZlNmViNWYyLTM0MWUtNDIyMC04MWExLTJhMTEyMjQ4MjE3NQ==", "V2FyZWhvdXNlOjFkZWMwYWU4LWRkZGUtNGU3Zi1hYjU5LTI1Njc4MWMyZTEyYQ=="]}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('warehouses', $responseContent);
        
        if ($responseContent['warehouses']) {
        
        $this->assertArrayHasKey('edges', $responseContent['warehouses']);
        
        $this->assertNotNull($responseContent['warehouses']['edges']);
        
        $this->assertIsArray($responseContent['warehouses']['edges']);
        
        for($g = 0; $g < count($responseContent['warehouses']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['warehouses']['edges'][$g]);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['warehouses']);
        
        $this->assertNotNull($responseContent['warehouses']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['warehouses']['pageInfo']);
        
        if ($responseContent['warehouses']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['warehouses']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['warehouses']['pageInfo']);
        
        if ($responseContent['warehouses']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['warehouses']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['warehouses']['pageInfo']);
        
        $this->assertNotNull($responseContent['warehouses']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['warehouses']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['warehouses']['pageInfo']);
        
        $this->assertNotNull($responseContent['warehouses']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['warehouses']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}