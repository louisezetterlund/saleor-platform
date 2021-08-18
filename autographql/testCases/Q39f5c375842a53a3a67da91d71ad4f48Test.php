<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q39f5c375842a53a3a67da91d71ad4f48Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query giftCard($id: ID!) {\n        giftCard(id: $id){\n            id\n            displayCode\n            code\n            user{\n                email\n            }\n        }\n    }\n    ", "variables": {"id": "R2lmdENhcmQ6MzU="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('giftCard', $responseContent);
        
        if ($responseContent['giftCard']) {
        
        $this->assertArrayHasKey('id', $responseContent['giftCard']);
        
        $this->assertNotNull($responseContent['giftCard']['id']);
        
        $this->assertArrayHasKey('displayCode', $responseContent['giftCard']);
        
        if ($responseContent['giftCard']['displayCode']) {
        
        $this->assertIsString($responseContent['giftCard']['displayCode']);
        
        }
        
        $this->assertArrayHasKey('code', $responseContent['giftCard']);
        
        if ($responseContent['giftCard']['code']) {
        
        $this->assertIsString($responseContent['giftCard']['code']);
        
        }
        
        $this->assertArrayHasKey('user', $responseContent['giftCard']);
        
        if ($responseContent['giftCard']['user']) {
        
        $this->assertArrayHasKey('email', $responseContent['giftCard']['user']);
        
        $this->assertNotNull($responseContent['giftCard']['user']['email']);
        
        $this->assertIsString($responseContent['giftCard']['user']['email']);
        
        }
        
        }
        

    }
}