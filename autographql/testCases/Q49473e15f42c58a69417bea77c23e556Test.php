<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q49473e15f42c58a69417bea77c23e556Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CheckIfOrderExists($id: ID!) {\n  order(id: $id) {\n    id\n    status\n    __typename\n  }\n}\n", "variables": {"id": "T3JkZXI6MjI="}, "operationName": "CheckIfOrderExists"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('order', $responseContent);
        
        if ($responseContent['order']) {
        
        $this->assertEquals('Order' , $responseContent['order']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['id']);
        
        $this->assertArrayHasKey('status', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['status']);
        
        $this->assertContains($responseContent['order']['status'], ['DRAFT', 'UNFULFILLED', 'PARTIALLY_FULFILLED', 'FULFILLED', 'CANCELED']);
        
        }
        

    }
}