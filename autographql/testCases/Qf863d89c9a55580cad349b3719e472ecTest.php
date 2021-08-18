<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf863d89c9a55580cad349b3719e472ecTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query productVariantMeta($id: ID!){\n        productVariant(id: $id){\n            privateMetadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "UHJvZHVjdFZhcmlhbnQ6MjI4"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['privateMetadata']);
        
        $this->assertIsArray($responseContent['productVariant']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['productVariant']['privateMetadata']); $g++) {
        
        if ($responseContent['productVariant']['privateMetadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['productVariant']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['productVariant']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['productVariant']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['productVariant']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}