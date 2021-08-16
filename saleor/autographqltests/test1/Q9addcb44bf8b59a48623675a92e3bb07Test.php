<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9addcb44bf8b59a48623675a92e3bb07Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($sort_by: MenuSortingInput!) {\n        menus(first:5, sortBy: $sort_by) {\n            edges{\n                node{\n                    name\n                }\n            }\n        }\n    }\n", "variables": {"sort_by": {"field": "ITEMS_COUNT", "direction": "DESC"}}, "operationName": ""}
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
        
        }
        

    }
}