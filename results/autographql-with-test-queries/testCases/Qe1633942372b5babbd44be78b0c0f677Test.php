<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe1633942372b5babbd44be78b0c0f677Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query OrdersQuery {\n            orders(first: 1) {\n                edges {\n                    node {\n                        lines {\n                            thumbnail(size: 540) {\n                                url\n                            }\n                            variant {\n                                id\n                            }\n                            quantity\n                            allocations {\n                                id\n                                quantity\n                                warehouse {\n                                    id\n                                }\n                            }\n                            unitPrice {\n                                currency\n                                gross {\n                                    amount\n                                }\n                            }\n                            totalPrice {\n                                currency\n                                gross {\n                                    amount\n                                }\n                            }\n                        }\n                    }\n                }\n            }\n        }\n    ", "variables": "", "operationName": ""}
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
        
        $this->assertArrayHasKey('thumbnail', $responseContent['orders']['edges'][$g]['node']['lines'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']['url']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['lines'][$f]['thumbnail']['url']);
        
        }
        
        $this->assertArrayHasKey('variant', $responseContent['orders']['edges'][$g]['node']['lines'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['lines'][$f]['variant']) {
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['variant']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['variant']['id']);
        
        }
        
        $this->assertArrayHasKey('quantity', $responseContent['orders']['edges'][$g]['node']['lines'][$f]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['quantity']);
        
        $this->assertIsInt($responseContent['orders']['edges'][$g]['node']['lines'][$f]['quantity']);
        
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
        
        $this->assertArrayHasKey('unitPrice', $responseContent['orders']['edges'][$g]['node']['lines'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']) {
        
        $this->assertArrayHasKey('currency', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']['currency']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']['gross']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['lines'][$f]['unitPrice']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('totalPrice', $responseContent['orders']['edges'][$g]['node']['lines'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']) {
        
        $this->assertArrayHasKey('currency', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']['currency']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['lines'][$f]['totalPrice']['gross']['amount']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}