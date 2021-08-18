<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q186cab4b97c7588f8a9dd86a98714714Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($sort_by: OrderSortingInput!) {\n        draftOrders(first:5, sortBy: $sort_by) {\n            edges{\n                node{\n                    number\n                }\n            }\n        }\n    }\n", "variables": {"sort_by": {"field": "TOTAL", "direction": "ASC"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('draftOrders', $responseContent);
        
        if ($responseContent['draftOrders']) {
        
        $this->assertArrayHasKey('edges', $responseContent['draftOrders']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges']);
        
        $this->assertIsArray($responseContent['draftOrders']['edges']);
        
        for($g = 0; $g < count($responseContent['draftOrders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['draftOrders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('number', $responseContent['draftOrders']['edges'][$g]['node']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['number']) {
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['number']);
        
        }
        
        }
        
        }
        

    }
}