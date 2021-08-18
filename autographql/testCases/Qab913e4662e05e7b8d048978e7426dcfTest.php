<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qab913e4662e05e7b8d048978e7426dcfTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query getCheckout($token: UUID!) {\n        checkout(token: $token) {\n            availableShippingMethods {\n                name\n            }\n        }\n    }\n    ", "variables": {"token": "d8f5ef90-f3aa-43b3-be93-89096891e455"}, "operationName": ""}
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
        
        }
        
        }
        
        }
        

    }
}