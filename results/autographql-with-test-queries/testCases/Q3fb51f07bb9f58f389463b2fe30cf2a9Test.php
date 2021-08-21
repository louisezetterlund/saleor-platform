<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3fb51f07bb9f58f389463b2fe30cf2a9Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query ($filter: MenuItemFilterInput) {\n            menuItems(first: 5, filter:$filter) {\n                totalCount\n                edges {\n                    node {\n                        id\n                        name\n                    }\n                }\n            }\n        }\n    ", "variables": {"filter": {"search": "MenuItem"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menuItems', $responseContent);
        
        if ($responseContent['menuItems']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['menuItems']);
        
        if ($responseContent['menuItems']['totalCount']) {
        
        $this->assertIsInt($responseContent['menuItems']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['menuItems']);
        
        $this->assertNotNull($responseContent['menuItems']['edges']);
        
        $this->assertIsArray($responseContent['menuItems']['edges']);
        
        for($g = 0; $g < count($responseContent['menuItems']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['menuItems']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['menuItems']['edges'][$g]);
        
        $this->assertNotNull($responseContent['menuItems']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['menuItems']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menuItems']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menuItems']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menuItems']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['menuItems']['edges'][$g]['node']['name']);
        
        }
        
        }
        

    }
}