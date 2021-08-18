<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q003ce9f7a64e5a9886756534d6b24534Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($filter: VoucherFilterInput!, ) {\n      vouchers(first:5, filter: $filter){\n        edges{\n          node{\n            id\n            name\n            startDate\n          }\n        }\n      }\n    }\n    ", "variables": {"filter": {"timesUsed": {"lte": 3}}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('vouchers', $responseContent);
        
        if ($responseContent['vouchers']) {
        
        $this->assertArrayHasKey('edges', $responseContent['vouchers']);
        
        $this->assertNotNull($responseContent['vouchers']['edges']);
        
        $this->assertIsArray($responseContent['vouchers']['edges']);
        
        for($g = 0; $g < count($responseContent['vouchers']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['vouchers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('startDate', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['startDate']);
        
        }
        
        }
        

    }
}