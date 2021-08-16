<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qdae249c15a735f788b970d8fc75fc6f7Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query getCheckout($token: UUID) {\n        checkout(token: $token) {\n            lines {\n                totalPrice {\n                    gross {\n                        amount\n                    }\n                }\n            }\n            totalPrice {\n                gross {\n                    amount\n                }\n            }\n            subtotalPrice {\n                gross {\n                    amount\n                }\n            }\n        }\n    }\n    ", "variables": {"token": "4c644111-1f03-43b1-832d-9ce6767137a3"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkout', $responseContent);
        
        if ($responseContent['checkout']) {
        
        $this->assertArrayHasKey('lines', $responseContent['checkout']);
        
        if ($responseContent['checkout']['lines']) {
        
        $this->assertIsArray($responseContent['checkout']['lines']);
        
        for($g = 0; $g < count($responseContent['checkout']['lines']); $g++) {
        
        if ($responseContent['checkout']['lines'][$g]) {
        
        $this->assertArrayHasKey('totalPrice', $responseContent['checkout']['lines'][$g]);
        
        if ($responseContent['checkout']['lines'][$g]['totalPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['checkout']['lines'][$g]['totalPrice']);
        
        $this->assertNotNull($responseContent['checkout']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['checkout']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['checkout']['lines'][$g]['totalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['checkout']['lines'][$g]['totalPrice']['gross']['amount']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('totalPrice', $responseContent['checkout']);
        
        if ($responseContent['checkout']['totalPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['checkout']['totalPrice']);
        
        $this->assertNotNull($responseContent['checkout']['totalPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['checkout']['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['checkout']['totalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['checkout']['totalPrice']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('subtotalPrice', $responseContent['checkout']);
        
        if ($responseContent['checkout']['subtotalPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['checkout']['subtotalPrice']);
        
        $this->assertNotNull($responseContent['checkout']['subtotalPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['checkout']['subtotalPrice']['gross']);
        
        $this->assertNotNull($responseContent['checkout']['subtotalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['checkout']['subtotalPrice']['gross']['amount']);
        
        }
        
        }
        

    }
}