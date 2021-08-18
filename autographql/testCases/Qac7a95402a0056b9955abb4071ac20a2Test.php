<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qac7a95402a0056b9955abb4071ac20a2Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query OrderByToken($token: UUID!) {\n        orderByToken(token: $token) {\n            invoices {\n                id\n                number\n                externalUrl\n            }\n        }\n    }\n    ", "variables": {"token": "e2d88a1c-8a2b-46d7-a8ea-acf14eea432b"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertArrayHasKey('invoices', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['invoices']) {
        
        $this->assertIsArray($responseContent['orderByToken']['invoices']);
        
        for($g = 0; $g < count($responseContent['orderByToken']['invoices']); $g++) {
        
        if ($responseContent['orderByToken']['invoices'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']['invoices'][$g]);
        
        $this->assertNotNull($responseContent['orderByToken']['invoices'][$g]['id']);
        
        $this->assertArrayHasKey('number', $responseContent['orderByToken']['invoices'][$g]);
        
        if ($responseContent['orderByToken']['invoices'][$g]['number']) {
        
        $this->assertIsString($responseContent['orderByToken']['invoices'][$g]['number']);
        
        }
        
        $this->assertArrayHasKey('externalUrl', $responseContent['orderByToken']['invoices'][$g]);
        
        if ($responseContent['orderByToken']['invoices'][$g]['externalUrl']) {
        
        $this->assertIsString($responseContent['orderByToken']['invoices'][$g]['externalUrl']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}