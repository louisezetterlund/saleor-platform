<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q1a2e6b2ae9a655079308f5892bc8c762Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        stocks(first:100) {\n            totalCount\n            edges {\n                node {\n                    id\n                    warehouse {\n                        name\n                        id\n                    }\n                    productVariant {\n                        name\n                        id\n                    }\n                    quantity\n                    quantityAllocated\n                }\n            }\n        }\n    }\n", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('stocks', $responseContent);
        
        if ($responseContent['stocks']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['stocks']);
        
        if ($responseContent['stocks']['totalCount']) {
        
        $this->assertIsInt($responseContent['stocks']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['stocks']);
        
        $this->assertNotNull($responseContent['stocks']['edges']);
        
        $this->assertIsArray($responseContent['stocks']['edges']);
        
        for($g = 0; $g < count($responseContent['stocks']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['stocks']['edges'][$g]);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['stocks']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('warehouse', $responseContent['stocks']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['warehouse']);
        
        $this->assertArrayHasKey('name', $responseContent['stocks']['edges'][$g]['node']['warehouse']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['warehouse']['name']);
        
        $this->assertIsString($responseContent['stocks']['edges'][$g]['node']['warehouse']['name']);
        
        $this->assertArrayHasKey('id', $responseContent['stocks']['edges'][$g]['node']['warehouse']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['warehouse']['id']);
        
        $this->assertArrayHasKey('productVariant', $responseContent['stocks']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['productVariant']);
        
        $this->assertArrayHasKey('name', $responseContent['stocks']['edges'][$g]['node']['productVariant']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['productVariant']['name']);
        
        $this->assertIsString($responseContent['stocks']['edges'][$g]['node']['productVariant']['name']);
        
        $this->assertArrayHasKey('id', $responseContent['stocks']['edges'][$g]['node']['productVariant']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['productVariant']['id']);
        
        $this->assertArrayHasKey('quantity', $responseContent['stocks']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['quantity']);
        
        $this->assertIsInt($responseContent['stocks']['edges'][$g]['node']['quantity']);
        
        $this->assertArrayHasKey('quantityAllocated', $responseContent['stocks']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['quantityAllocated']);
        
        $this->assertIsInt($responseContent['stocks']['edges'][$g]['node']['quantityAllocated']);
        
        }
        
        }
        

    }
}