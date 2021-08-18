<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q28ffb541f5b95e2198f698723ef31d88Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query menuitem($id: ID!) {\n        menuItem(id: $id) {\n            name\n            url\n            category {\n                id\n            }\n            page {\n                id\n            }\n        }\n    }\n    ", "variables": {"id": "TWVudUl0ZW06Mjc="}, "operationName": ""}
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
        
        $this->assertArrayHasKey('url', $responseContent['menuItem']);
        
        if ($responseContent['menuItem']['url']) {
        
        $this->assertIsString($responseContent['menuItem']['url']);
        
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
        
        }
        

    }
}