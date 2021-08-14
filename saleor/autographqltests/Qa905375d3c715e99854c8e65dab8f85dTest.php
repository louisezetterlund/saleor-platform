<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa905375d3c715e99854c8e65dab8f85dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query stocks($filter: StockFilterInput!) {\n        stocks(first: 100, filter: $filter) {\n            totalCount\n            edges {\n                node {\n                    id\n                }\n            }\n        }\n    }\n", "variables": {"filter": {"search": "Test product"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('stocks', $responseContent);
        
        if ($responseContent['stocks']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['stocks']);
        
        if ($responseContent['stocks']['totalCount']) {
        
        $this->assertIsInt($responseContent['stocks']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['stocks']);
        
        $this->assertNotNull($responseContent['stocks']['edges']);
        
        $this->assertIsArray($responseContent['stocks']['edges']);
        
        for($g = 0; $g < count($responseContent['stocks']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['stocks']['edges'][$g]);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['stocks']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['stocks']['edges'][$g]['node']['id']);
        
        }
        
        }
        

    }
}