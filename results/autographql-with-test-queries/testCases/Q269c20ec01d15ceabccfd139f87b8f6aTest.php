<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q269c20ec01d15ceabccfd139f87b8f6aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n{\n  webhookEvents{\n    eventType\n    name\n  }\n}\n", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('webhookEvents', $responseContent);
        
        if ($responseContent['webhookEvents']) {
        
        $this->assertIsArray($responseContent['webhookEvents']);
        
        for($g = 0; $g < count($responseContent['webhookEvents']); $g++) {
        
        if ($responseContent['webhookEvents'][$g]) {
        
        $this->assertArrayHasKey('eventType', $responseContent['webhookEvents'][$g]);
        
        $this->assertNotNull($responseContent['webhookEvents'][$g]['eventType']);
        
        $this->assertContains($responseContent['webhookEvents'][$g]['eventType'], ['ANY_EVENTS', 'ORDER_CREATED', 'ORDER_FULLY_PAID', 'ORDER_UPDATED', 'ORDER_CANCELLED', 'ORDER_FULFILLED', 'INVOICE_REQUESTED', 'INVOICE_DELETED', 'INVOICE_SENT', 'CUSTOMER_CREATED', 'PRODUCT_CREATED', 'PRODUCT_UPDATED', 'CHECKOUT_QUANTITY_CHANGED', 'CHECKOUT_CREATED', 'CHECKOUT_UPDATED', 'FULFILLMENT_CREATED']);
        
        $this->assertArrayHasKey('name', $responseContent['webhookEvents'][$g]);
        
        $this->assertNotNull($responseContent['webhookEvents'][$g]['name']);
        
        $this->assertIsString($responseContent['webhookEvents'][$g]['name']);
        
        }
        
        }
        
        }
        

    }
}