<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qbbd3bb36a6c25b72a4f1fbccf6be13bdTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery customerEvents($customerId: ID!) {\n  user(id: $customerId) {\n    id\n    events {\n      id\n      type\n      user {\n        id\n      }\n      message\n      count\n      order {\n        id\n      }\n      orderLine {\n        id\n      }\n    }\n  }\n}\n", "variables": {"customerId": "VXNlcjoyNjM="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('user', $responseContent);
        
        if ($responseContent['user']) {
        
        $this->assertArrayHasKey('id', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['id']);
        
        $this->assertArrayHasKey('events', $responseContent['user']);
        
        if ($responseContent['user']['events']) {
        
        $this->assertIsArray($responseContent['user']['events']);
        
        for($g = 0; $g < count($responseContent['user']['events']); $g++) {
        
        if ($responseContent['user']['events'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['user']['events'][$g]);
        
        $this->assertNotNull($responseContent['user']['events'][$g]['id']);
        
        $this->assertArrayHasKey('type', $responseContent['user']['events'][$g]);
        
        if ($responseContent['user']['events'][$g]['type']) {
        
        $this->assertContains($responseContent['user']['events'][$g]['type'], ['ACCOUNT_CREATED', 'PASSWORD_RESET_LINK_SENT', 'PASSWORD_RESET', 'EMAIL_CHANGED_REQUEST', 'PASSWORD_CHANGED', 'EMAIL_CHANGED', 'PLACED_ORDER', 'NOTE_ADDED_TO_ORDER', 'DIGITAL_LINK_DOWNLOADED', 'CUSTOMER_DELETED', 'NAME_ASSIGNED', 'EMAIL_ASSIGNED', 'NOTE_ADDED']);
        
        }
        
        $this->assertArrayHasKey('user', $responseContent['user']['events'][$g]);
        
        if ($responseContent['user']['events'][$g]['user']) {
        
        $this->assertArrayHasKey('id', $responseContent['user']['events'][$g]['user']);
        
        $this->assertNotNull($responseContent['user']['events'][$g]['user']['id']);
        
        }
        
        $this->assertArrayHasKey('message', $responseContent['user']['events'][$g]);
        
        if ($responseContent['user']['events'][$g]['message']) {
        
        $this->assertIsString($responseContent['user']['events'][$g]['message']);
        
        }
        
        $this->assertArrayHasKey('count', $responseContent['user']['events'][$g]);
        
        if ($responseContent['user']['events'][$g]['count']) {
        
        $this->assertIsInt($responseContent['user']['events'][$g]['count']);
        
        }
        
        $this->assertArrayHasKey('order', $responseContent['user']['events'][$g]);
        
        if ($responseContent['user']['events'][$g]['order']) {
        
        $this->assertArrayHasKey('id', $responseContent['user']['events'][$g]['order']);
        
        $this->assertNotNull($responseContent['user']['events'][$g]['order']['id']);
        
        }
        
        $this->assertArrayHasKey('orderLine', $responseContent['user']['events'][$g]);
        
        if ($responseContent['user']['events'][$g]['orderLine']) {
        
        $this->assertArrayHasKey('id', $responseContent['user']['events'][$g]['orderLine']);
        
        $this->assertNotNull($responseContent['user']['events'][$g]['orderLine']['id']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}