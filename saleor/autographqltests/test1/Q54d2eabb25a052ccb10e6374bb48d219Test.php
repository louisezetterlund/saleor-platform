<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q54d2eabb25a052ccb10e6374bb48d219Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery getCheckoutPayments($token: UUID!) {\n    checkout(token: $token) {\n        availablePaymentGateways {\n            id\n            name\n            config {\n                field\n                value\n            }\n            currencies\n        }\n    }\n}\n", "variables": {"token": "be659b51-bb80-4751-aaae-d270a72d90f7"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkout', $responseContent);
        
        if ($responseContent['checkout']) {
        
        $this->assertArrayHasKey('availablePaymentGateways', $responseContent['checkout']);
        
        $this->assertNotNull($responseContent['checkout']['availablePaymentGateways']);
        
        $this->assertIsArray($responseContent['checkout']['availablePaymentGateways']);
        
        for($g = 0; $g < count($responseContent['checkout']['availablePaymentGateways']); $g++) {
        
        $this->assertNotNull($responseContent['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['availablePaymentGateways'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['availablePaymentGateways'][$g]['name']);
        
        $this->assertIsString($responseContent['checkout']['availablePaymentGateways'][$g]['name']);
        
        $this->assertArrayHasKey('config', $responseContent['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['availablePaymentGateways'][$g]['config']);
        
        $this->assertIsArray($responseContent['checkout']['availablePaymentGateways'][$g]['config']);
        
        for($f = 0; $f < count($responseContent['checkout']['availablePaymentGateways'][$g]['config']); $f++) {
        
        $this->assertNotNull($responseContent['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        $this->assertArrayHasKey('field', $responseContent['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        $this->assertNotNull($responseContent['checkout']['availablePaymentGateways'][$g]['config'][$f]['field']);
        
        $this->assertIsString($responseContent['checkout']['availablePaymentGateways'][$g]['config'][$f]['field']);
        
        $this->assertArrayHasKey('value', $responseContent['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        if ($responseContent['checkout']['availablePaymentGateways'][$g]['config'][$f]['value']) {
        
        $this->assertIsString($responseContent['checkout']['availablePaymentGateways'][$g]['config'][$f]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('currencies', $responseContent['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['availablePaymentGateways'][$g]['currencies']);
        
        $this->assertIsArray($responseContent['checkout']['availablePaymentGateways'][$g]['currencies']);
        
        for($f = 0; $f < count($responseContent['checkout']['availablePaymentGateways'][$g]['currencies']); $f++) {
        
        if ($responseContent['checkout']['availablePaymentGateways'][$g]['currencies'][$f]) {
        
        $this->assertIsString($responseContent['checkout']['availablePaymentGateways'][$g]['currencies'][$f]);
        
        }
        
        }
        
        }
        
        }
        

    }
}