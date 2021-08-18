<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8ca1c897c2055a4bacfd9561e6d44e99Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query Shop($currency: String){\n        shop {\n            availablePaymentGateways(currency: $currency) {\n                id\n                name\n            }\n        }\n    }\n", "variables": {"currency": "USD"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('availablePaymentGateways', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['availablePaymentGateways']);
        
        $this->assertIsArray($responseContent['shop']['availablePaymentGateways']);
        
        for($g = 0; $g < count($responseContent['shop']['availablePaymentGateways']); $g++) {
        
        $this->assertNotNull($responseContent['shop']['availablePaymentGateways'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['shop']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['shop']['availablePaymentGateways'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['shop']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['shop']['availablePaymentGateways'][$g]['name']);
        
        $this->assertIsString($responseContent['shop']['availablePaymentGateways'][$g]['name']);
        
        }
        

    }
}