<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q655bc86174e259658e2ee085cf50ff0bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query($filters: ProductTypeFilterInput) {\n      productTypes(first: 10, filter: $filters) {\n        edges {\n          node {\n            name\n          }\n        }\n      }\n    }\n", "variables": {"filters": {"search": "best"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productTypes', $responseContent);
        
        if ($responseContent['productTypes']) {
        
        $this->assertArrayHasKey('edges', $responseContent['productTypes']);
        
        $this->assertNotNull($responseContent['productTypes']['edges']);
        
        $this->assertIsArray($responseContent['productTypes']['edges']);
        
        for($g = 0; $g < count($responseContent['productTypes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['productTypes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['name']);
        
        }
        
        }
        

    }
}