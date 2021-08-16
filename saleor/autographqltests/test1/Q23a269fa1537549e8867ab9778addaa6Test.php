<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q23a269fa1537549e8867ab9778addaa6Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query appMeta($id: ID!){\n        app(id: $id){\n            privateMetadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "QXBwOjE3NA=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('app', $responseContent);
        
        if ($responseContent['app']) {
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['app']);
        
        $this->assertNotNull($responseContent['app']['privateMetadata']);
        
        $this->assertIsArray($responseContent['app']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['app']['privateMetadata']); $g++) {
        
        if ($responseContent['app']['privateMetadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['app']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['app']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['app']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['app']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['app']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['app']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}