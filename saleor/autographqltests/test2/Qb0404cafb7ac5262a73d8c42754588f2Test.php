<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qb0404cafb7ac5262a73d8c42754588f2Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query getCheckout($token: UUID!) {\n        checkout(token: $token) {\n            availableShippingMethods {\n                name\n                price {\n                    amount\n                }\n            }\n        }\n    }\n    ", "variables": {"token": "5fc5d977-6cc5-4be4-87fa-c74c02c766a3"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkout', $responseContent);
        
        if ($responseContent['checkout']) {
        
        $this->assertArrayHasKey('availableShippingMethods', $responseContent['checkout']);
        
        $this->assertNotNull($responseContent['checkout']['availableShippingMethods']);
        
        $this->assertIsArray($responseContent['checkout']['availableShippingMethods']);
        
        for($g = 0; $g < count($responseContent['checkout']['availableShippingMethods']); $g++) {
        
        if ($responseContent['checkout']['availableShippingMethods'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['checkout']['availableShippingMethods'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['availableShippingMethods'][$g]['name']);
        
        $this->assertIsString($responseContent['checkout']['availableShippingMethods'][$g]['name']);
        
        $this->assertArrayHasKey('price', $responseContent['checkout']['availableShippingMethods'][$g]);
        
        if ($responseContent['checkout']['availableShippingMethods'][$g]['price']) {
        
        $this->assertArrayHasKey('amount', $responseContent['checkout']['availableShippingMethods'][$g]['price']);
        
        $this->assertNotNull($responseContent['checkout']['availableShippingMethods'][$g]['price']['amount']);
        
        $this->assertIsNumeric($responseContent['checkout']['availableShippingMethods'][$g]['price']['amount']);
        
        }
        
        }
        
        }
        
        }
        

    }
}