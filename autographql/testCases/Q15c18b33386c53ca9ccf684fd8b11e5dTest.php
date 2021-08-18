<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q15c18b33386c53ca9ccf684fd8b11e5dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: PermissionGroupSortingInput, $filter: PermissionGroupFilterInput\n    ){\n        permissionGroups (\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            edges {\n                node {\n                    name\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 3, "after": null, "sortBy": {"field": "NAME", "direction": "ASC"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('permissionGroups', $responseContent);
        
        if ($responseContent['permissionGroups']) {
        
        $this->assertArrayHasKey('edges', $responseContent['permissionGroups']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges']);
        
        $this->assertIsArray($responseContent['permissionGroups']['edges']);
        
        for($g = 0; $g < count($responseContent['permissionGroups']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['permissionGroups']['edges'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['permissionGroups']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['permissionGroups']);
        
        $this->assertNotNull($responseContent['permissionGroups']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['permissionGroups']['pageInfo']);
        
        if ($responseContent['permissionGroups']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['permissionGroups']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['permissionGroups']['pageInfo']);
        
        if ($responseContent['permissionGroups']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['permissionGroups']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['permissionGroups']['pageInfo']);
        
        $this->assertNotNull($responseContent['permissionGroups']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['permissionGroups']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['permissionGroups']['pageInfo']);
        
        $this->assertNotNull($responseContent['permissionGroups']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['permissionGroups']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}