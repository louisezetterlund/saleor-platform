<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5ed0597b69d1509c9c26064e297a48ccTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query orderMeta($token: UUID!){\n        orderByToken(token: $token){\n            privateMetadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"token": "864beedc-e7d2-4228-b30f-b5a44a5c2cf3"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['privateMetadata']);
        
        $this->assertIsArray($responseContent['orderByToken']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['orderByToken']['privateMetadata']); $g++) {
        
        if ($responseContent['orderByToken']['privateMetadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['orderByToken']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['orderByToken']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['orderByToken']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['orderByToken']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}