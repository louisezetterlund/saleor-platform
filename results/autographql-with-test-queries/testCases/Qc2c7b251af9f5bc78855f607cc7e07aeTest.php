<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc2c7b251af9f5bc78855f607cc7e07aeTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query productsMeta($id: ID!){\n        product(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "UHJvZHVjdDoxNDM="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['metadata']);
        
        $this->assertIsArray($responseContent['product']['metadata']);
        
        for($g = 0; $g < count($responseContent['product']['metadata']); $g++) {
        
        if ($responseContent['product']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['product']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['product']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['product']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['product']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['product']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['product']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}