<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa22e297424825e09998f75249bdeeccfTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query productTypeMeta($id: ID!){\n        productType(id: $id){\n            privateMetadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "UHJvZHVjdFR5cGU6MTkz"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productType', $responseContent);
        
        if ($responseContent['productType']) {
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['productType']);
        
        $this->assertNotNull($responseContent['productType']['privateMetadata']);
        
        $this->assertIsArray($responseContent['productType']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['productType']['privateMetadata']); $g++) {
        
        if ($responseContent['productType']['privateMetadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['productType']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['productType']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['productType']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['productType']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['productType']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['productType']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}