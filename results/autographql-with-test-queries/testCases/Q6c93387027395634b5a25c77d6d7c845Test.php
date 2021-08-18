<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6c93387027395634b5a25c77d6d7c845Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query OrderQuery($id: ID!) {\n        order(id: $id) {\n            giftCards {\n                displayCode\n                currentBalance {\n                    amount\n                }\n            }\n        }\n    }\n    ", "variables": {"id": "T3JkZXI6MTQ4"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('order', $responseContent);
        
        if ($responseContent['order']) {
        
        $this->assertArrayHasKey('giftCards', $responseContent['order']);
        
        if ($responseContent['order']['giftCards']) {
        
        $this->assertIsArray($responseContent['order']['giftCards']);
        
        for($g = 0; $g < count($responseContent['order']['giftCards']); $g++) {
        
        if ($responseContent['order']['giftCards'][$g]) {
        
        $this->assertArrayHasKey('displayCode', $responseContent['order']['giftCards'][$g]);
        
        if ($responseContent['order']['giftCards'][$g]['displayCode']) {
        
        $this->assertIsString($responseContent['order']['giftCards'][$g]['displayCode']);
        
        }
        
        $this->assertArrayHasKey('currentBalance', $responseContent['order']['giftCards'][$g]);
        
        if ($responseContent['order']['giftCards'][$g]['currentBalance']) {
        
        $this->assertArrayHasKey('amount', $responseContent['order']['giftCards'][$g]['currentBalance']);
        
        $this->assertNotNull($responseContent['order']['giftCards'][$g]['currentBalance']['amount']);
        
        $this->assertIsNumeric($responseContent['order']['giftCards'][$g]['currentBalance']['amount']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}