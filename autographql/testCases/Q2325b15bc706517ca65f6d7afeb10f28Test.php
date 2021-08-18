<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2325b15bc706517ca65f6d7afeb10f28Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($filter: CustomerFilterInput!, ) {\n        customers(first: 5, filter: $filter) {\n            totalCount\n            edges {\n                node {\n                    id\n                    lastName\n                    firstName\n                }\n            }\n        }\n    }\n    ", "variables": {"filter": {"placedOrders": {"gte": "2012-01-14"}}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('customers', $responseContent);
        
        if ($responseContent['customers']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['customers']);
        
        if ($responseContent['customers']['totalCount']) {
        
        $this->assertIsInt($responseContent['customers']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['customers']);
        
        $this->assertNotNull($responseContent['customers']['edges']);
        
        $this->assertIsArray($responseContent['customers']['edges']);
        
        for($g = 0; $g < count($responseContent['customers']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['customers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['customers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('lastName', $responseContent['customers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']['lastName']);
        
        $this->assertIsString($responseContent['customers']['edges'][$g]['node']['lastName']);
        
        $this->assertArrayHasKey('firstName', $responseContent['customers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']['firstName']);
        
        $this->assertIsString($responseContent['customers']['edges'][$g]['node']['firstName']);
        
        }
        
        }
        

    }
}