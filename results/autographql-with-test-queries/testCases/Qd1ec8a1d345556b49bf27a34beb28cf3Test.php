<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd1ec8a1d345556b49bf27a34beb28cf3Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        shop {\n            domain {\n                host\n                sslEnabled\n                url\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('domain', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['domain']);
        
        $this->assertArrayHasKey('host', $responseContent['shop']['domain']);
        
        $this->assertNotNull($responseContent['shop']['domain']['host']);
        
        $this->assertIsString($responseContent['shop']['domain']['host']);
        
        $this->assertArrayHasKey('sslEnabled', $responseContent['shop']['domain']);
        
        $this->assertNotNull($responseContent['shop']['domain']['sslEnabled']);
        
        $this->assertIsBool($responseContent['shop']['domain']['sslEnabled']);
        
        $this->assertArrayHasKey('url', $responseContent['shop']['domain']);
        
        $this->assertNotNull($responseContent['shop']['domain']['url']);
        
        $this->assertIsString($responseContent['shop']['domain']['url']);
        

    }
}