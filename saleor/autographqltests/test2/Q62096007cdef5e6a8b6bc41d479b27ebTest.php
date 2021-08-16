<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q62096007cdef5e6a8b6bc41d479b27ebTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery OrderFulfillData($id: ID!) {\n    order(id: $id) {\n        id\n        lines {\n            variant {\n                stocks {\n                    warehouse {\n                        id\n                    }\n                    quantity\n                    quantityAllocated\n                }\n            }\n        }\n    }\n}\n", "variables": {"id": "T3JkZXI6MTQx"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('order', $responseContent);
        
        if ($responseContent['order']) {
        
        $this->assertArrayHasKey('id', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['id']);
        
        $this->assertArrayHasKey('lines', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['lines']);
        
        $this->assertIsArray($responseContent['order']['lines']);
        
        for($g = 0; $g < count($responseContent['order']['lines']); $g++) {
        
        if ($responseContent['order']['lines'][$g]) {
        
        $this->assertArrayHasKey('variant', $responseContent['order']['lines'][$g]);
        
        if ($responseContent['order']['lines'][$g]['variant']) {
        
        $this->assertArrayHasKey('stocks', $responseContent['order']['lines'][$g]['variant']);
        
        if ($responseContent['order']['lines'][$g]['variant']['stocks']) {
        
        $this->assertIsArray($responseContent['order']['lines'][$g]['variant']['stocks']);
        
        for($f = 0; $f < count($responseContent['order']['lines'][$g]['variant']['stocks']); $f++) {
        
        if ($responseContent['order']['lines'][$g]['variant']['stocks'][$f]) {
        
        $this->assertArrayHasKey('warehouse', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['warehouse']);
        
        $this->assertArrayHasKey('id', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]['warehouse']);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['warehouse']['id']);
        
        $this->assertArrayHasKey('quantity', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['quantity']);
        
        $this->assertIsInt($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['quantity']);
        
        $this->assertArrayHasKey('quantityAllocated', $responseContent['order']['lines'][$g]['variant']['stocks'][$f]);
        
        $this->assertNotNull($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['quantityAllocated']);
        
        $this->assertIsInt($responseContent['order']['lines'][$g]['variant']['stocks'][$f]['quantityAllocated']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}