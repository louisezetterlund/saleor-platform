<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0925e1aeec5d52a0b389f3e7065b56beTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($sort_by: MenuItemSortingInput!) {\n        menuItems(first:5, sortBy: $sort_by) {\n            edges{\n                node{\n                    name\n                }\n            }\n        }\n    }\n", "variables": {"sort_by": {"field": "NAME", "direction": "DESC"}}, "operationName": ""}
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
        
        }
        

    }
}