<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qec586d57797352ec8e462d0b49e3ed92Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query variantAvailability($id: ID!) {\n        productVariant(id: $id) {\n            quantityAvailable\n        }\n    }\n    ", "variables": {"id": "UHJvZHVjdFZhcmlhbnQ6ODQx"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertArrayHasKey('quantityAvailable', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['quantityAvailable']);
        
        $this->assertIsInt($responseContent['productVariant']['quantityAvailable']);
        
        }
        

    }
}