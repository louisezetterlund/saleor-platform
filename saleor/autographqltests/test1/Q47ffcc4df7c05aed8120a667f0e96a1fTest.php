<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q47ffcc4df7c05aed8120a667f0e96a1fTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query menuitem($id: ID!) {\n        menuItem(id: $id) {\n            name\n            children {\n                name\n            }\n            collection {\n                name\n            }\n            category {\n                id\n            }\n            page {\n                id\n            }\n            url\n        }\n    }\n    ", "variables": {"id": "TWVudUl0ZW06MTc="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menuItem', $responseContent);
        
        if ($responseContent['menuItem']) {
        
        $this->assertArrayHasKey('name', $responseContent['menuItem']);
        
        $this->assertNotNull($responseContent['menuItem']['name']);
        
        $this->assertIsString($responseContent['menuItem']['name']);
        
        $this->assertArrayHasKey('children', $responseContent['menuItem']);
        
        if ($responseContent['menuItem']['children']) {
        
        $this->assertIsArray($responseContent['menuItem']['children']);
        
        for($g = 0; $g < count($responseContent['menuItem']['children']); $g++) {
        
        if ($responseContent['menuItem']['children'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['menuItem']['children'][$g]);
        
        $this->assertNotNull($responseContent['menuItem']['children'][$g]['name']);
        
        $this->assertIsString($responseContent['menuItem']['children'][$g]['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('collection', $responseContent['menuItem']);
        
        if ($responseContent['menuItem']['collection']) {
        
        $this->assertArrayHasKey('name', $responseContent['menuItem']['collection']);
        
        $this->assertNotNull($responseContent['menuItem']['collection']['name']);
        
        $this->assertIsString($responseContent['menuItem']['collection']['name']);
        
        }
        
        $this->assertArrayHasKey('category', $responseContent['menuItem']);
        
        if ($responseContent['menuItem']['category']) {
        
        $this->assertArrayHasKey('id', $responseContent['menuItem']['category']);
        
        $this->assertNotNull($responseContent['menuItem']['category']['id']);
        
        }
        
        $this->assertArrayHasKey('page', $responseContent['menuItem']);
        
        if ($responseContent['menuItem']['page']) {
        
        $this->assertArrayHasKey('id', $responseContent['menuItem']['page']);
        
        $this->assertNotNull($responseContent['menuItem']['page']['id']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['menuItem']);
        
        if ($responseContent['menuItem']['url']) {
        
        $this->assertIsString($responseContent['menuItem']['url']);
        
        }
        
        }
        

    }
}