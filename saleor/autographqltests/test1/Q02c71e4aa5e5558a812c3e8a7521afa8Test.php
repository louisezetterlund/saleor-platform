<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q02c71e4aa5e5558a812c3e8a7521afa8Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query fetchCategory($id: ID!){\n        category(id: $id) {\n            name\n            backgroundImage(size: 120) {\n            url\n            alt\n            }\n        }\n    }\n    ", "variables": {"id": "Q2F0ZWdvcnk6MzI2"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertArrayHasKey('name', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['name']);
        
        $this->assertIsString($responseContent['category']['name']);
        
        $this->assertArrayHasKey('backgroundImage', $responseContent['category']);
        
        if ($responseContent['category']['backgroundImage']) {
        
        $this->assertArrayHasKey('url', $responseContent['category']['backgroundImage']);
        
        $this->assertNotNull($responseContent['category']['backgroundImage']['url']);
        
        $this->assertIsString($responseContent['category']['backgroundImage']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['category']['backgroundImage']);
        
        if ($responseContent['category']['backgroundImage']['alt']) {
        
        $this->assertIsString($responseContent['category']['backgroundImage']['alt']);
        
        }
        
        }
        
        }
        

    }
}