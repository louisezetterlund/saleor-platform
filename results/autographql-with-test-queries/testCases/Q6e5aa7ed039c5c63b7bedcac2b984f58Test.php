<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6e5aa7ed039c5c63b7bedcac2b984f58Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query productVariantMeta($id: ID!){\n        productVariant(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "UHJvZHVjdFZhcmlhbnQ6MTkw"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['metadata']);
        
        $this->assertIsArray($responseContent['productVariant']['metadata']);
        
        for($g = 0; $g < count($responseContent['productVariant']['metadata']); $g++) {
        
        if ($responseContent['productVariant']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['productVariant']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['productVariant']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['productVariant']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['productVariant']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}