<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa9aa0581cd42557cbec78912efab360fTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query collectionMeta($id: ID!){\n        collection(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "Q29sbGVjdGlvbjoyMQ=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('collection', $responseContent);
        
        if ($responseContent['collection']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['metadata']);
        
        $this->assertIsArray($responseContent['collection']['metadata']);
        
        for($g = 0; $g < count($responseContent['collection']['metadata']); $g++) {
        
        if ($responseContent['collection']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['collection']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['collection']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['collection']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['collection']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['collection']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['collection']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}