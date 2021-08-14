<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q63a368e7ddf15179aa73d4e135bc2109Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query productTypeMeta($id: ID!){\n        productType(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "UHJvZHVjdFR5cGU6MTY5"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productType', $responseContent);
        
        if ($responseContent['productType']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['productType']);
        
        $this->assertNotNull($responseContent['productType']['metadata']);
        
        $this->assertIsArray($responseContent['productType']['metadata']);
        
        for($g = 0; $g < count($responseContent['productType']['metadata']); $g++) {
        
        if ($responseContent['productType']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['productType']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['productType']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['productType']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['productType']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['productType']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['productType']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}