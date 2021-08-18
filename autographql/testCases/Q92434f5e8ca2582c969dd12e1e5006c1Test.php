<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q92434f5e8ca2582c969dd12e1e5006c1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query getProduct($ids: [ID!]) {\n            productVariants(ids: $ids, first: 1) {\n                edges {\n                    node {\n                        id\n                    }\n                }\n            }\n        }\n    ", "variables": {"ids": ["UHJvZHVjdFZhcmlhbnQ6Nzcy"]}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariants', $responseContent);
        
        if ($responseContent['productVariants']) {
        
        $this->assertArrayHasKey('edges', $responseContent['productVariants']);
        
        $this->assertNotNull($responseContent['productVariants']['edges']);
        
        $this->assertIsArray($responseContent['productVariants']['edges']);
        
        for($g = 0; $g < count($responseContent['productVariants']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['productVariants']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['id']);
        
        }
        
        }
        

    }
}