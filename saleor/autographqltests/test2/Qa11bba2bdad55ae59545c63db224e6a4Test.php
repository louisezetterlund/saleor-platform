<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa11bba2bdad55ae59545c63db224e6a4Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n            query($id: ID!) {\n              productVariant(id: $id) {\n                attributes {\n                  attribute {\n                    id\n                  }\n                }\n              }\n            }\n        ", "variables": {"id": "UHJvZHVjdFZhcmlhbnQ6NDk0"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertArrayHasKey('attributes', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['attributes']);
        
        $this->assertIsArray($responseContent['productVariant']['attributes']);
        
        for($g = 0; $g < count($responseContent['productVariant']['attributes']); $g++) {
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]);
        
        $this->assertArrayHasKey('attribute', $responseContent['productVariant']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']['id']);
        
        }
        
        }
        

    }
}