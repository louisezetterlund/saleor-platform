<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q204bb960a2a15441adc72c5a283b98b0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query OrderByToken($token: UUID!) {\n        orderByToken(token: $token) {\n            id\n            shippingAddress {\n                firstName\n                lastName\n                streetAddress1\n                streetAddress2\n                phone\n            }\n            billingAddress {\n                firstName\n                lastName\n                streetAddress1\n                streetAddress2\n                phone\n            }\n            userEmail\n        }\n    }\n    ", "variables": {"token": "c4a04279-f8d5-43dc-8d14-4de4a422f9d9"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orderByToken', $responseContent);
        
        if ($responseContent['orderByToken']) {
        
        $this->assertArrayHasKey('id', $responseContent['orderByToken']);
        
        $this->assertNotNull($responseContent['orderByToken']['id']);
        
        $this->assertArrayHasKey('shippingAddress', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['shippingAddress']) {
        
        $this->assertArrayHasKey('firstName', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['firstName']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['lastName']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['lastName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['orderByToken']['shippingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['shippingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('phone', $responseContent['orderByToken']['shippingAddress']);
        
        if ($responseContent['orderByToken']['shippingAddress']['phone']) {
        
        $this->assertIsString($responseContent['orderByToken']['shippingAddress']['phone']);
        
        }
        
        }
        
        $this->assertArrayHasKey('billingAddress', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['billingAddress']) {
        
        $this->assertArrayHasKey('firstName', $responseContent['orderByToken']['billingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['billingAddress']['firstName']);
        
        $this->assertIsString($responseContent['orderByToken']['billingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['orderByToken']['billingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['billingAddress']['lastName']);
        
        $this->assertIsString($responseContent['orderByToken']['billingAddress']['lastName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['orderByToken']['billingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['billingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['orderByToken']['billingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['orderByToken']['billingAddress']);
        
        $this->assertNotNull($responseContent['orderByToken']['billingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['orderByToken']['billingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('phone', $responseContent['orderByToken']['billingAddress']);
        
        if ($responseContent['orderByToken']['billingAddress']['phone']) {
        
        $this->assertIsString($responseContent['orderByToken']['billingAddress']['phone']);
        
        }
        
        }
        
        $this->assertArrayHasKey('userEmail', $responseContent['orderByToken']);
        
        if ($responseContent['orderByToken']['userEmail']) {
        
        $this->assertIsString($responseContent['orderByToken']['userEmail']);
        
        }
        
        }
        

    }
}