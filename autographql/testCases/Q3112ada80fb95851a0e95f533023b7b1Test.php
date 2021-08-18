<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3112ada80fb95851a0e95f533023b7b1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query orderMeta($id: ID!){\n        order(id: $id){\n            privateMetadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "T3JkZXI6MTA1"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('order', $responseContent);
        
        if ($responseContent['order']) {
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['order']);
        
        $this->assertNotNull($responseContent['order']['privateMetadata']);
        
        $this->assertIsArray($responseContent['order']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['order']['privateMetadata']); $g++) {
        
        if ($responseContent['order']['privateMetadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['order']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['order']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['order']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['order']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['order']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['order']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}