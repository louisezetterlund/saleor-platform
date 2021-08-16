<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q77b6f115c3e150f1b136159834b8a525Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query OrdersQuery {\n            orders(first: 1) {\n                edges {\n                    node {\n                        events {\n                            date\n                            type\n                            user {\n                                email\n                            }\n                            message\n                            email\n                            emailType\n                            amount\n                            quantity\n                            composedId\n                            orderNumber\n                            fulfilledItems {\n                                quantity\n                                orderLine {\n                                    productName\n                                    variantName\n                                }\n                            }\n                            paymentId\n                            paymentGateway\n                            warehouse {\n                                name\n                            }\n                        }\n                    }\n                }\n            }\n        }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orders', $responseContent);
        
        if ($responseContent['orders']) {
        
        $this->assertArrayHasKey('edges', $responseContent['orders']);
        
        $this->assertNotNull($responseContent['orders']['edges']);
        
        $this->assertIsArray($responseContent['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('events', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['events']) {
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['events']);
        
        for($f = 0; $f < count($responseContent['orders']['edges'][$g]['node']['events']); $f++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]) {
        
        $this->assertArrayHasKey('date', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['date']) {
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['type']) {
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['events'][$f]['type'], ['DRAFT_CREATED', 'DRAFT_ADDED_PRODUCTS', 'DRAFT_REMOVED_PRODUCTS', 'PLACED', 'PLACED_FROM_DRAFT', 'OVERSOLD_ITEMS', 'CANCELED', 'ORDER_MARKED_AS_PAID', 'ORDER_FULLY_PAID', 'UPDATED_ADDRESS', 'EMAIL_SENT', 'PAYMENT_AUTHORIZED', 'PAYMENT_CAPTURED', 'EXTERNAL_SERVICE_NOTIFICATION', 'PAYMENT_REFUNDED', 'PAYMENT_VOIDED', 'PAYMENT_FAILED', 'INVOICE_REQUESTED', 'INVOICE_GENERATED', 'INVOICE_UPDATED', 'INVOICE_SENT', 'FULFILLMENT_CANCELED', 'FULFILLMENT_RESTOCKED_ITEMS', 'FULFILLMENT_FULFILLED_ITEMS', 'TRACKING_UPDATED', 'NOTE_ADDED', 'OTHER']);
        
        }
        
        $this->assertArrayHasKey('user', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['user']) {
        
        $this->assertArrayHasKey('email', $responseContent['orders']['edges'][$g]['node']['events'][$f]['user']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['events'][$f]['user']['email']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['user']['email']);
        
        }
        
        $this->assertArrayHasKey('message', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['message']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['message']);
        
        }
        
        $this->assertArrayHasKey('email', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['email']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['email']);
        
        }
        
        $this->assertArrayHasKey('emailType', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['emailType']) {
        
        $this->assertContains($responseContent['orders']['edges'][$g]['node']['events'][$f]['emailType'], ['PAYMENT_CONFIRMATION', 'SHIPPING_CONFIRMATION', 'TRACKING_UPDATED', 'ORDER_CONFIRMATION', 'ORDER_CANCEL', 'ORDER_REFUND', 'FULFILLMENT_CONFIRMATION', 'DIGITAL_LINKS']);
        
        }
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['amount']) {
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['events'][$f]['amount']);
        
        }
        
        $this->assertArrayHasKey('quantity', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['quantity']) {
        
        $this->assertIsInt($responseContent['orders']['edges'][$g]['node']['events'][$f]['quantity']);
        
        }
        
        $this->assertArrayHasKey('composedId', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['composedId']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['composedId']);
        
        }
        
        $this->assertArrayHasKey('orderNumber', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['orderNumber']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['orderNumber']);
        
        }
        
        $this->assertArrayHasKey('fulfilledItems', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems']) {
        
        $this->assertIsArray($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems']);
        
        for($e = 0; $e < count($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems']); $e++) {
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]) {
        
        $this->assertArrayHasKey('quantity', $responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['quantity']);
        
        $this->assertIsInt($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['quantity']);
        
        $this->assertArrayHasKey('orderLine', $responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['orderLine']) {
        
        $this->assertArrayHasKey('productName', $responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['orderLine']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['orderLine']['productName']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['orderLine']['productName']);
        
        $this->assertArrayHasKey('variantName', $responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['orderLine']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['orderLine']['variantName']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['fulfilledItems'][$e]['orderLine']['variantName']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('paymentId', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['paymentId']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['paymentId']);
        
        }
        
        $this->assertArrayHasKey('paymentGateway', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['paymentGateway']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['paymentGateway']);
        
        }
        
        $this->assertArrayHasKey('warehouse', $responseContent['orders']['edges'][$g]['node']['events'][$f]);
        
        if ($responseContent['orders']['edges'][$g]['node']['events'][$f]['warehouse']) {
        
        $this->assertArrayHasKey('name', $responseContent['orders']['edges'][$g]['node']['events'][$f]['warehouse']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['events'][$f]['warehouse']['name']);
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['events'][$f]['warehouse']['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}