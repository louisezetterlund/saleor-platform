<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa1db8ac4f08f5e2a94b095e28014e850Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery address($id: ID!) {\n    address(id: $id) {\n        postalCode\n        lastName\n        firstName\n        city\n        country {\n          code\n        }\n    }\n}\n", "variables": {"id": "QWRkcmVzczoyMjU="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('address', $responseContent);
        
        if ($responseContent['address']) {
        
        $this->assertArrayHasKey('postalCode', $responseContent['address']);
        
        $this->assertNotNull($responseContent['address']['postalCode']);
        
        $this->assertIsString($responseContent['address']['postalCode']);
        
        $this->assertArrayHasKey('lastName', $responseContent['address']);
        
        $this->assertNotNull($responseContent['address']['lastName']);
        
        $this->assertIsString($responseContent['address']['lastName']);
        
        $this->assertArrayHasKey('firstName', $responseContent['address']);
        
        $this->assertNotNull($responseContent['address']['firstName']);
        
        $this->assertIsString($responseContent['address']['firstName']);
        
        $this->assertArrayHasKey('city', $responseContent['address']);
        
        $this->assertNotNull($responseContent['address']['city']);
        
        $this->assertIsString($responseContent['address']['city']);
        
        $this->assertArrayHasKey('country', $responseContent['address']);
        
        $this->assertNotNull($responseContent['address']['country']);
        
        $this->assertArrayHasKey('code', $responseContent['address']['country']);
        
        $this->assertNotNull($responseContent['address']['country']['code']);
        
        $this->assertIsString($responseContent['address']['country']['code']);
        
        }
        

    }
}