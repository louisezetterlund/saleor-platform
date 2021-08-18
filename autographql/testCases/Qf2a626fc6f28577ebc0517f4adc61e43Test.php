<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf2a626fc6f28577ebc0517f4adc61e43Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query OrdersQuery {\n        orders(first: 1) {\n            edges {\n                node {\n                    availableShippingMethods {\n                        id\n                        price {\n                            amount\n                        }\n                        type\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
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
        
        $this->assertArrayHasKey('availableShippingMethods', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods']) {
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['availableShippingMethods']);
        
        for($f = 0; $f < count($responseContent['orders']['edges'][$g]['node']['availableShippingMethods']); $f++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['id']);
        
        $this->assertArrayHasKey('price', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['price']) {
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['price']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['price']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['price']['amount']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['type']) {
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['availableShippingMethods'][$f]['type'], ['PRICE', 'WEIGHT']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}