<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qdf67aa43874b5664940febb8f3265557Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($id: ID, $slug: String){\n        category(\n            id: $id,\n            slug: $slug,\n        ) {\n            id\n            name\n            ancestors(first: 20) {\n                edges {\n                    node {\n                        name\n                    }\n                }\n            }\n            children(first: 20) {\n                edges {\n                    node {\n                        name\n                    }\n                }\n            }\n            products(first: 10) {\n                edges {\n                    node {\n                        id\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": {"id": "Q2F0ZWdvcnk6Mjg4"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertArrayHasKey('id', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['name']);
        
        $this->assertIsString($responseContent['category']['name']);
        
        $this->assertArrayHasKey('ancestors', $responseContent['category']);
        
        if ($responseContent['category']['ancestors']) {
        
        $this->assertArrayHasKey('edges', $responseContent['category']['ancestors']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges']);
        
        $this->assertIsArray($responseContent['category']['ancestors']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['ancestors']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['category']['ancestors']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['ancestors']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['category']);
        
        if ($responseContent['category']['children']) {
        
        $this->assertArrayHasKey('edges', $responseContent['category']['children']);
        
        $this->assertNotNull($responseContent['category']['children']['edges']);
        
        $this->assertIsArray($responseContent['category']['children']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['children']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['category']['children']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['children']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('products', $responseContent['category']);
        
        if ($responseContent['category']['products']) {
        
        $this->assertArrayHasKey('edges', $responseContent['category']['products']);
        
        $this->assertNotNull($responseContent['category']['products']['edges']);
        
        $this->assertIsArray($responseContent['category']['products']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['category']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['id']);
        
        }
        
        }
        
        }
        

    }
}