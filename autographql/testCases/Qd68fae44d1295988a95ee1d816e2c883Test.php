<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd68fae44d1295988a95ee1d816e2c883Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($filter: CategoryFilterInput!, ) {\n          categories(first:5, filter: $filter) {\n            totalCount\n            edges{\n              node{\n                id\n                name\n              }\n            }\n          }\n        }\n        ", "variables": {"filter": {"search": "Category1"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('categories', $responseContent);
        
        if ($responseContent['categories']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['categories']);
        
        if ($responseContent['categories']['totalCount']) {
        
        $this->assertIsInt($responseContent['categories']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['categories']);
        
        $this->assertNotNull($responseContent['categories']['edges']);
        
        $this->assertIsArray($responseContent['categories']['edges']);
        
        for($g = 0; $g < count($responseContent['categories']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['categories']['edges'][$g]);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['name']);
        
        }
        
        }
        

    }
}