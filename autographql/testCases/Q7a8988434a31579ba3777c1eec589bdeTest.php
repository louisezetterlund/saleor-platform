<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7a8988434a31579ba3777c1eec589bdeTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": " {\n        payments(first: 20) {\n            edges {\n                node {\n                    id\n                    gateway\n                    capturedAmount {\n                        amount\n                        currency\n                    }\n                    total {\n                        amount\n                        currency\n                    }\n                    actions\n                    chargeStatus\n                    transactions {\n                        amount {\n                            currency\n                            amount\n                        }\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('payments', $responseContent);
        
        if ($responseContent['payments']) {
        
        $this->assertArrayHasKey('edges', $responseContent['payments']);
        
        $this->assertNotNull($responseContent['payments']['edges']);
        
        $this->assertIsArray($responseContent['payments']['edges']);
        
        for($g = 0; $g < count($responseContent['payments']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['payments']['edges'][$g]);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['payments']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('gateway', $responseContent['payments']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['gateway']);
        
        $this->assertIsString($responseContent['payments']['edges'][$g]['node']['gateway']);
        
        $this->assertArrayHasKey('capturedAmount', $responseContent['payments']['edges'][$g]['node']);
        
        if ($responseContent['payments']['edges'][$g]['node']['capturedAmount']) {
        
        $this->assertArrayHasKey('amount', $responseContent['payments']['edges'][$g]['node']['capturedAmount']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['capturedAmount']['amount']);
        
        $this->assertIsNumeric($responseContent['payments']['edges'][$g]['node']['capturedAmount']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['payments']['edges'][$g]['node']['capturedAmount']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['capturedAmount']['currency']);
        
        $this->assertIsString($responseContent['payments']['edges'][$g]['node']['capturedAmount']['currency']);
        
        }
        
        $this->assertArrayHasKey('total', $responseContent['payments']['edges'][$g]['node']);
        
        if ($responseContent['payments']['edges'][$g]['node']['total']) {
        
        $this->assertArrayHasKey('amount', $responseContent['payments']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['total']['amount']);
        
        $this->assertIsNumeric($responseContent['payments']['edges'][$g]['node']['total']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['payments']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['total']['currency']);
        
        $this->assertIsString($responseContent['payments']['edges'][$g]['node']['total']['currency']);
        
        }
        
        $this->assertArrayHasKey('actions', $responseContent['payments']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['actions']);
        
        $this->assertIsArray($responseContent['payments']['edges'][$g]['node']['actions']);
        
        for($f = 0; $f < count($responseContent['payments']['edges'][$g]['node']['actions']); $f++) {
        
        if ($responseContent['payments']['edges'][$g]['node']['actions'][$f]) {
        
        $this->assertContains($responseContent['payments']['edges'][$g]['node']['actions'][$f], ['CAPTURE', 'MARK_AS_PAID', 'REFUND', 'VOID']);
        
        }
        
        }
        
        $this->assertArrayHasKey('chargeStatus', $responseContent['payments']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['chargeStatus']);
        
        $this->assertContains($responseContent['payments']['edges'][$g]['node']['chargeStatus'], ['NOT_CHARGED', 'PENDING', 'PARTIALLY_CHARGED', 'FULLY_CHARGED', 'PARTIALLY_REFUNDED', 'FULLY_REFUNDED', 'REFUSED', 'CANCELLED']);
        
        $this->assertArrayHasKey('transactions', $responseContent['payments']['edges'][$g]['node']);
        
        if ($responseContent['payments']['edges'][$g]['node']['transactions']) {
        
        $this->assertIsArray($responseContent['payments']['edges'][$g]['node']['transactions']);
        
        for($f = 0; $f < count($responseContent['payments']['edges'][$g]['node']['transactions']); $f++) {
        
        if ($responseContent['payments']['edges'][$g]['node']['transactions'][$f]) {
        
        $this->assertArrayHasKey('amount', $responseContent['payments']['edges'][$g]['node']['transactions'][$f]);
        
        if ($responseContent['payments']['edges'][$g]['node']['transactions'][$f]['amount']) {
        
        $this->assertArrayHasKey('currency', $responseContent['payments']['edges'][$g]['node']['transactions'][$f]['amount']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['transactions'][$f]['amount']['currency']);
        
        $this->assertIsString($responseContent['payments']['edges'][$g]['node']['transactions'][$f]['amount']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['payments']['edges'][$g]['node']['transactions'][$f]['amount']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['transactions'][$f]['amount']['amount']);
        
        $this->assertIsNumeric($responseContent['payments']['edges'][$g]['node']['transactions'][$f]['amount']['amount']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}