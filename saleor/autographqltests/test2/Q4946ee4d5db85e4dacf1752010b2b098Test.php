<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4946ee4d5db85e4dacf1752010b2b098Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query Orders($period: ReportingPeriod) {\n        ordersTotal(period: $period) {\n            gross {\n                amount\n                currency\n            }\n            net {\n                currency\n                amount\n            }\n        }\n    }\n    ", "variables": {"period": "TODAY"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('ordersTotal', $responseContent);
        
        if ($responseContent['ordersTotal']) {
        
        $this->assertArrayHasKey('gross', $responseContent['ordersTotal']);
        
        $this->assertNotNull($responseContent['ordersTotal']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['ordersTotal']['gross']);
        
        $this->assertNotNull($responseContent['ordersTotal']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['ordersTotal']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['ordersTotal']['gross']);
        
        $this->assertNotNull($responseContent['ordersTotal']['gross']['currency']);
        
        $this->assertIsString($responseContent['ordersTotal']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['ordersTotal']);
        
        $this->assertNotNull($responseContent['ordersTotal']['net']);
        
        $this->assertArrayHasKey('currency', $responseContent['ordersTotal']['net']);
        
        $this->assertNotNull($responseContent['ordersTotal']['net']['currency']);
        
        $this->assertIsString($responseContent['ordersTotal']['net']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['ordersTotal']['net']);
        
        $this->assertNotNull($responseContent['ordersTotal']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['ordersTotal']['net']['amount']);
        
        }
        

    }
}