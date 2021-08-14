<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qb5b67e423a6d526d8d86dc3a555f0a5eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query OrdersQuery {\n            orders(first: 1) {\n                edges {\n                    node {\n                        lines {\n                            id\n                            allocations {\n                                id\n                                quantity\n                                warehouse {\n                                    id\n                                }\n                            }\n                        }\n                    }\n                }\n            }\n        }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orders', $responseContent);
        
        if ($responseContent['orders']) {
        
        $this->assertArrayHasKey('edges', $responseContent['orders']);
        
        $this->assertNotNull($responseContent['orders']['edges']);
        
        $this->assertIsArray($responseContent['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('lines', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines']);
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['lines']);
        
        for($f = 0; $f < count($responseContent['orders']['edges'][$g]['node']['lines']); $f++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['lines'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['lines'][$f]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['id']);
        
        $this->assertArrayHasKey('allocations', $responseContent['orders']['edges'][$g]['node']['lines'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations']) {
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations']);
        
        for($e = 0; $e < count($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations']); $e++) {
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]);
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]['id']);
        
        $this->assertArrayHasKey('quantity', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]['quantity']);
        
        $this->assertIsInt($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]['quantity']);
        
        $this->assertArrayHasKey('warehouse', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]['warehouse']);
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]['warehouse']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['allocations'][$e]['warehouse']['id']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}