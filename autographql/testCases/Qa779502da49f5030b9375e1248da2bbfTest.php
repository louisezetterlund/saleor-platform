<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa779502da49f5030b9375e1248da2bbfTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query OrdersQuery {\n        orders(first: 5) {\n            edges {\n                node {\n                    invoices {\n                        status\n                        externalUrl\n                        number\n                    }\n                }\n            }\n        }\n    }\n", "variables": "", "operationName": ""}
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
        
        $this->assertArrayHasKey('invoices', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['invoices']) {
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['invoices']);
        
        for($f = 0; $f < count($responseContent['orders']['edges'][$g]['node']['invoices']); $f++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['invoices'][$f]) {
        
        $this->assertArrayHasKey('status', $responseContent['orders']['edges'][$g]['node']['invoices'][$f]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['invoices'][$f]['status']);
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['invoices'][$f]['status'], ['PENDING', 'SUCCESS', 'FAILED', 'DELETED']);
        
        $this->assertArrayHasKey('externalUrl', $responseContent['orders']['edges'][$g]['node']['invoices'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['invoices'][$f]['externalUrl']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['invoices'][$f]['externalUrl']);
        
        }
        
        $this->assertArrayHasKey('number', $responseContent['orders']['edges'][$g]['node']['invoices'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['invoices'][$f]['number']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['invoices'][$f]['number']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}