<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q367febafdabf5d7488264491c2cffb58Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        {\n            shop {\n                staffNotificationRecipients {\n                    active\n                    email\n                    user {\n                        firstName\n                        lastName\n                        email\n                    }\n                }\n            }\n        }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('staffNotificationRecipients', $responseContent['shop']);
        
        if ($responseContent['shop']['staffNotificationRecipients']) {
        
        $this->assertIsArray($responseContent['shop']['staffNotificationRecipients']);
        
        for($g = 0; $g < count($responseContent['shop']['staffNotificationRecipients']); $g++) {
        
        if ($responseContent['shop']['staffNotificationRecipients'][$g]) {
        
        $this->assertArrayHasKey('active', $responseContent['shop']['staffNotificationRecipients'][$g]);
        
        if ($responseContent['shop']['staffNotificationRecipients'][$g]['active']) {
        
        $this->assertIsBool($responseContent['shop']['staffNotificationRecipients'][$g]['active']);
        
        }
        
        $this->assertArrayHasKey('email', $responseContent['shop']['staffNotificationRecipients'][$g]);
        
        if ($responseContent['shop']['staffNotificationRecipients'][$g]['email']) {
        
        $this->assertIsString($responseContent['shop']['staffNotificationRecipients'][$g]['email']);
        
        }
        
        $this->assertArrayHasKey('user', $responseContent['shop']['staffNotificationRecipients'][$g]);
        
        if ($responseContent['shop']['staffNotificationRecipients'][$g]['user']) {
        
        $this->assertArrayHasKey('firstName', $responseContent['shop']['staffNotificationRecipients'][$g]['user']);
        
        $this->assertNotNull($responseContent['shop']['staffNotificationRecipients'][$g]['user']['firstName']);
        
        $this->assertIsString($responseContent['shop']['staffNotificationRecipients'][$g]['user']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['shop']['staffNotificationRecipients'][$g]['user']);
        
        $this->assertNotNull($responseContent['shop']['staffNotificationRecipients'][$g]['user']['lastName']);
        
        $this->assertIsString($responseContent['shop']['staffNotificationRecipients'][$g]['user']['lastName']);
        
        $this->assertArrayHasKey('email', $responseContent['shop']['staffNotificationRecipients'][$g]['user']);
        
        $this->assertNotNull($responseContent['shop']['staffNotificationRecipients'][$g]['user']['email']);
        
        $this->assertIsString($responseContent['shop']['staffNotificationRecipients'][$g]['user']['email']);
        
        }
        
        }
        
        }
        
        }
        

    }
}