<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7d4561adaa985bee85772bc749c61d79Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        productTypes(first: 20) {\n            totalCount\n            edges {\n                node {\n                    id\n                    name\n                    products(first: 1) {\n                        edges {\n                            node {\n                                id\n                            }\n                        }\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productTypes', $responseContent);
        
        if ($responseContent['productTypes']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['productTypes']);
        
        if ($responseContent['productTypes']['totalCount']) {
        
        $this->assertIsInt($responseContent['productTypes']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['productTypes']);
        
        $this->assertNotNull($responseContent['productTypes']['edges']);
        
        $this->assertIsArray($responseContent['productTypes']['edges']);
        
        for($g = 0; $g < count($responseContent['productTypes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['productTypes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('products', $responseContent['productTypes']['edges'][$g]['node']);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['products']) {
        
        $this->assertArrayHasKey('edges', $responseContent['productTypes']['edges'][$g]['node']['products']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['products']['edges']);
        
        $this->assertIsArray($responseContent['productTypes']['edges'][$g]['node']['products']['edges']);
        
        for($f = 0; $f < count($responseContent['productTypes']['edges'][$g]['node']['products']['edges']); $f++) {
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['products']['edges'][$f]);
        
        $this->assertArrayHasKey('node', $responseContent['productTypes']['edges'][$g]['node']['products']['edges'][$f]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['products']['edges'][$f]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']['products']['edges'][$f]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['products']['edges'][$f]['node']['id']);
        
        }
        
        }
        
        }
        
        }
        

    }
}