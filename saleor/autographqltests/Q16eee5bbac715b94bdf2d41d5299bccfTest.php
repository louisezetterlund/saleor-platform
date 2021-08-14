<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q16eee5bbac715b94bdf2d41d5299bccfTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    {\n        homepageEvents(first: 20) {\n            edges {\n                node {\n                    date\n                    type\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('homepageEvents', $responseContent);
        
        if ($responseContent['homepageEvents']) {
        
        $this->assertArrayHasKey('edges', $responseContent['homepageEvents']);
        
        $this->assertNotNull($responseContent['homepageEvents']['edges']);
        
        $this->assertIsArray($responseContent['homepageEvents']['edges']);
        
        for($g = 0; $g < count($responseContent['homepageEvents']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['homepageEvents']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['homepageEvents']['edges'][$g]);
        
        $this->assertNotNull($responseContent['homepageEvents']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('date', $responseContent['homepageEvents']['edges'][$g]['node']);
        
        if ($responseContent['homepageEvents']['edges'][$g]['node']['date']) {
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['homepageEvents']['edges'][$g]['node']);
        
        if ($responseContent['homepageEvents']['edges'][$g]['node']['type']) {
        
        $this->assertContains($responseContent['homepageEvents']['edges'][$g]['node']['type'], ['DRAFT_CREATED', 'DRAFT_ADDED_PRODUCTS', 'DRAFT_REMOVED_PRODUCTS', 'PLACED', 'PLACED_FROM_DRAFT', 'OVERSOLD_ITEMS', 'CANCELED', 'ORDER_MARKED_AS_PAID', 'ORDER_FULLY_PAID', 'UPDATED_ADDRESS', 'EMAIL_SENT', 'PAYMENT_AUTHORIZED', 'PAYMENT_CAPTURED', 'EXTERNAL_SERVICE_NOTIFICATION', 'PAYMENT_REFUNDED', 'PAYMENT_VOIDED', 'PAYMENT_FAILED', 'INVOICE_REQUESTED', 'INVOICE_GENERATED', 'INVOICE_UPDATED', 'INVOICE_SENT', 'FULFILLMENT_CANCELED', 'FULFILLMENT_RESTOCKED_ITEMS', 'FULFILLMENT_FULFILLED_ITEMS', 'TRACKING_UPDATED', 'NOTE_ADDED', 'OTHER']);
        
        }
        
        }
        
        }
        

    }
}