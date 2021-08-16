<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf2eb236a8bfc58718ba1c04aa9684eebTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery getCheckout($token: UUID!) {\n  checkout(token: $token) {\n    token\n    giftCards {\n      displayCode\n      currentBalance {\n        amount\n      }\n    }\n  }\n}\n", "variables": {"token": "5b8b42e6-d645-41a4-9f72-c46b561f1407"}, "operationName": ""}
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
        
        $this->assertArrayHasKey('giftCards', $responseContent['checkout']);
        
        if ($responseContent['checkout']['giftCards']) {
        
        $this->assertIsArray($responseContent['checkout']['giftCards']);
        
        for($g = 0; $g < count($responseContent['checkout']['giftCards']); $g++) {
        
        if ($responseContent['checkout']['giftCards'][$g]) {
        
        $this->assertArrayHasKey('displayCode', $responseContent['checkout']['giftCards'][$g]);
        
        if ($responseContent['checkout']['giftCards'][$g]['displayCode']) {
        
        $this->assertIsString($responseContent['checkout']['giftCards'][$g]['displayCode']);
        
        }
        
        $this->assertArrayHasKey('currentBalance', $responseContent['checkout']['giftCards'][$g]);
        
        if ($responseContent['checkout']['giftCards'][$g]['currentBalance']) {
        
        $this->assertArrayHasKey('amount', $responseContent['checkout']['giftCards'][$g]['currentBalance']);
        
        $this->assertNotNull($responseContent['checkout']['giftCards'][$g]['currentBalance']['amount']);
        
        $this->assertIsNumeric($responseContent['checkout']['giftCards'][$g]['currentBalance']['amount']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}