<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q71c97647e8b0592da456f122d11ca6bcTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query webhook($id: ID!){\n      webhook(id: $id){\n        id\n        isActive\n        events{\n          eventType\n        }\n      }\n    }\n", "variables": {"id": "V2ViaG9vazo4NQ=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('webhook', $responseContent);
        
        if ($responseContent['webhook']) {
        
        $this->assertArrayHasKey('id', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['id']);
        
        $this->assertArrayHasKey('isActive', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['isActive']);
        
        $this->assertIsBool($responseContent['webhook']['isActive']);
        
        $this->assertArrayHasKey('events', $responseContent['webhook']);
        
        $this->assertNotNull($responseContent['webhook']['events']);
        
        $this->assertIsArray($responseContent['webhook']['events']);
        
        for($g = 0; $g < count($responseContent['webhook']['events']); $g++) {
        
        $this->assertNotNull($responseContent['webhook']['events'][$g]);
        
        $this->assertArrayHasKey('eventType', $responseContent['webhook']['events'][$g]);
        
        $this->assertNotNull($responseContent['webhook']['events'][$g]['eventType']);
        
        $this->assertContains($responseContent['webhook']['events'][$g]['eventType'], ['ANY_EVENTS', 'ORDER_CREATED', 'ORDER_FULLY_PAID', 'ORDER_UPDATED', 'ORDER_CANCELLED', 'ORDER_FULFILLED', 'INVOICE_REQUESTED', 'INVOICE_DELETED', 'INVOICE_SENT', 'CUSTOMER_CREATED', 'PRODUCT_CREATED', 'PRODUCT_UPDATED', 'CHECKOUT_QUANTITY_CHANGED', 'CHECKOUT_CREATED', 'CHECKOUT_UPDATED', 'FULFILLMENT_CREATED']);
        
        }
        
        }
        

    }
}