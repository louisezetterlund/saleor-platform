<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4da0c46ea528502cb4d8f15136176cecTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery fulfillment($id: ID!){\n    order(id: $id){\n        fulfillments{\n            id\n            fulfillmentOrder\n            status\n            trackingNumber\n            warehouse{\n                id\n            }\n            lines{\n                orderLine{\n                    id\n                }\n                quantity\n            }\n        }\n    }\n}\n", "variables": {"id": "T3JkZXI6MTM5"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('order', $responseContent);
        
        if ($responseContent['order']) {
        
        $this->assertArrayHasKey('fulfillments', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['fulfillments']);
        
        $this->assertIsArray($responseContent['order']['fulfillments']);
        
        for($g = 0; $g < count($responseContent['order']['fulfillments']); $g++) {
        
        if ($responseContent['order']['fulfillments'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['order']['fulfillments'][$g]);
        
        $this->assertNotNull($responseContent['order']['fulfillments'][$g]['id']);
        
        $this->assertArrayHasKey('fulfillmentOrder', $responseContent['order']['fulfillments'][$g]);
        
        $this->assertNotNull($responseContent['order']['fulfillments'][$g]['fulfillmentOrder']);
        
        $this->assertIsInt($responseContent['order']['fulfillments'][$g]['fulfillmentOrder']);
        
        $this->assertArrayHasKey('status', $responseContent['order']['fulfillments'][$g]);
        
        $this->assertNotNull($responseContent['order']['fulfillments'][$g]['status']);
        
        $this->assertContains($responseContent['order']['fulfillments'][$g]['status'], ['FULFILLED', 'CANCELED']);
        
        $this->assertArrayHasKey('trackingNumber', $responseContent['order']['fulfillments'][$g]);
        
        $this->assertNotNull($responseContent['order']['fulfillments'][$g]['trackingNumber']);
        
        $this->assertIsString($responseContent['order']['fulfillments'][$g]['trackingNumber']);
        
        $this->assertArrayHasKey('warehouse', $responseContent['order']['fulfillments'][$g]);
        
        if ($responseContent['order']['fulfillments'][$g]['warehouse']) {
        
        $this->assertArrayHasKey('id', $responseContent['order']['fulfillments'][$g]['warehouse']);
        
        $this->assertNotNull($responseContent['order']['fulfillments'][$g]['warehouse']['id']);
        
        }
        
        $this->assertArrayHasKey('lines', $responseContent['order']['fulfillments'][$g]);
        
        if ($responseContent['order']['fulfillments'][$g]['lines']) {
        
        $this->assertIsArray($responseContent['order']['fulfillments'][$g]['lines']);
        
        for($f = 0; $f < count($responseContent['order']['fulfillments'][$g]['lines']); $f++) {
        
        if ($responseContent['order']['fulfillments'][$g]['lines'][$f]) {
        
        $this->assertArrayHasKey('orderLine', $responseContent['order']['fulfillments'][$g]['lines'][$f]);
        
        if ($responseContent['order']['fulfillments'][$g]['lines'][$f]['orderLine']) {
        
        $this->assertArrayHasKey('id', $responseContent['order']['fulfillments'][$g]['lines'][$f]['orderLine']);
        
        $this->assertNotNull($responseContent['order']['fulfillments'][$g]['lines'][$f]['orderLine']['id']);
        
        }
        
        $this->assertArrayHasKey('quantity', $responseContent['order']['fulfillments'][$g]['lines'][$f]);
        
        $this->assertNotNull($responseContent['order']['fulfillments'][$g]['lines'][$f]['quantity']);
        
        $this->assertIsInt($responseContent['order']['fulfillments'][$g]['lines'][$f]['quantity']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}