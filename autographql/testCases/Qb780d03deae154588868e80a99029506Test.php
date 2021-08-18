<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qb780d03deae154588868e80a99029506Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query TopProducts($period: ReportingPeriod!) {\n        reportProductSales(period: $period, first: 20) {\n            edges {\n                node {\n                    revenue(period: $period) {\n                        gross {\n                            amount\n                        }\n                    }\n                    quantityOrdered\n                    sku\n                }\n            }\n        }\n    }\n    ", "variables": {"period": "TODAY"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('reportProductSales', $responseContent);
        
        if ($responseContent['reportProductSales']) {
        
        $this->assertArrayHasKey('edges', $responseContent['reportProductSales']);
        
        $this->assertNotNull($responseContent['reportProductSales']['edges']);
        
        $this->assertIsArray($responseContent['reportProductSales']['edges']);
        
        for($g = 0; $g < count($responseContent['reportProductSales']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['reportProductSales']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['reportProductSales']['edges'][$g]);
        
        $this->assertNotNull($responseContent['reportProductSales']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('revenue', $responseContent['reportProductSales']['edges'][$g]['node']);
        
        if ($responseContent['reportProductSales']['edges'][$g]['node']['revenue']) {
        
        $this->assertArrayHasKey('gross', $responseContent['reportProductSales']['edges'][$g]['node']['revenue']);
        
        $this->assertNotNull($responseContent['reportProductSales']['edges'][$g]['node']['revenue']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['reportProductSales']['edges'][$g]['node']['revenue']['gross']);
        
        $this->assertNotNull($responseContent['reportProductSales']['edges'][$g]['node']['revenue']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['reportProductSales']['edges'][$g]['node']['revenue']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('quantityOrdered', $responseContent['reportProductSales']['edges'][$g]['node']);
        
        if ($responseContent['reportProductSales']['edges'][$g]['node']['quantityOrdered']) {
        
        $this->assertIsInt($responseContent['reportProductSales']['edges'][$g]['node']['quantityOrdered']);
        
        }
        
        $this->assertArrayHasKey('sku', $responseContent['reportProductSales']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['reportProductSales']['edges'][$g]['node']['sku']);
        
        $this->assertIsString($responseContent['reportProductSales']['edges'][$g]['node']['sku']);
        
        }
        
        }
        

    }
}