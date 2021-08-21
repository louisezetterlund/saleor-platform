<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q62fc86a7fa8b5b2aa5e72440796148e1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query getCheckout($token: UUID!) {\n        checkout(token: $token) {\n           token,\n           lines {\n                variant {\n                    product {\n                        name\n                    }\n                }\n           }\n        }\n    }\n    ", "variables": {"token": "994359a8-b3cc-450b-bdb4-3c7ed544cab6"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkout', $responseContent);
        
        if ($responseContent['checkout']) {
        
        $this->assertArrayHasKey('token', $responseContent['checkout']);
        
        $this->assertNotNull($responseContent['checkout']['token']);
        
        $this->assertArrayHasKey('lines', $responseContent['checkout']);
        
        if ($responseContent['checkout']['lines']) {
        
        $this->assertIsArray($responseContent['checkout']['lines']);
        
        for($g = 0; $g < count($responseContent['checkout']['lines']); $g++) {
        
        if ($responseContent['checkout']['lines'][$g]) {
        
        $this->assertArrayHasKey('variant', $responseContent['checkout']['lines'][$g]);
        
        $this->assertNotNull($responseContent['checkout']['lines'][$g]['variant']);
        
        $this->assertArrayHasKey('product', $responseContent['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertArrayHasKey('name', $responseContent['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['checkout']['lines'][$g]['variant']['product']['name']);
        
        $this->assertIsString($responseContent['checkout']['lines'][$g]['variant']['product']['name']);
        
        }
        
        }
        
        }
        
        }
        

    }
}