<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q296689387fbf53bd996cbfc7564cb957Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($filter: MenuFilterInput) {\n        menus(first: 5, filter:$filter) {\n            totalCount\n            edges {\n                node {\n                    id\n                    name\n                    slug\n                }\n            }\n        }\n    }\n", "variables": {"filter": {"search": "Menu1"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menus', $responseContent);
        
        if ($responseContent['menus']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['menus']);
        
        if ($responseContent['menus']['totalCount']) {
        
        $this->assertIsInt($responseContent['menus']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['menus']);
        
        $this->assertNotNull($responseContent['menus']['edges']);
        
        $this->assertIsArray($responseContent['menus']['edges']);
        
        for($g = 0; $g < count($responseContent['menus']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['menus']['edges'][$g]);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['menus']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menus']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['menus']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('slug', $responseContent['menus']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']['slug']);
        
        $this->assertIsString($responseContent['menus']['edges'][$g]['node']['slug']);
        
        }
        
        }
        

    }
}