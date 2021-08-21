<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q169b48863bdd5eb98bc60739f034dcedTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query digitalContentMeta($id: ID!){\n        digitalContent(id: $id){\n            privateMetadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "RGlnaXRhbENvbnRlbnQ6MTI="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('digitalContent', $responseContent);
        
        if ($responseContent['digitalContent']) {
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['digitalContent']);
        
        $this->assertNotNull($responseContent['digitalContent']['privateMetadata']);
        
        $this->assertIsArray($responseContent['digitalContent']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['digitalContent']['privateMetadata']); $g++) {
        
        if ($responseContent['digitalContent']['privateMetadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['digitalContent']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['digitalContent']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['digitalContent']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['digitalContent']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['digitalContent']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['digitalContent']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}