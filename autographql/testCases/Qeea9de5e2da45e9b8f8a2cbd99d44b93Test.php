<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qeea9de5e2da45e9b8f8a2cbd99d44b93Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query fetchCollection($id: ID!){\n        collection(id: $id) {\n            name\n            backgroundImage(size: 120) {\n               url\n               alt\n            }\n        }\n    }\n", "variables": {"id": "Q29sbGVjdGlvbjo2NQ=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('collection', $responseContent);
        
        if ($responseContent['collection']) {
        
        $this->assertArrayHasKey('name', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['name']);
        
        $this->assertIsString($responseContent['collection']['name']);
        
        $this->assertArrayHasKey('backgroundImage', $responseContent['collection']);
        
        if ($responseContent['collection']['backgroundImage']) {
        
        $this->assertArrayHasKey('url', $responseContent['collection']['backgroundImage']);
        
        $this->assertNotNull($responseContent['collection']['backgroundImage']['url']);
        
        $this->assertIsString($responseContent['collection']['backgroundImage']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['collection']['backgroundImage']);
        
        if ($responseContent['collection']['backgroundImage']['alt']) {
        
        $this->assertIsString($responseContent['collection']['backgroundImage']['alt']);
        
        }
        
        }
        
        }
        

    }
}