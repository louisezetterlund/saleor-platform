<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf7f0d8af283c59f896860db88d455776Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query PaymentSources($id: ID!) {\n            user(id: $id) {\n                storedPaymentSources {\n                    creditCardInfo {\n                        firstDigits\n                    }\n                }\n            }\n        }\n    ", "variables": {"id": "VXNlcjo4NTk="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('user', $responseContent);
        
        if ($responseContent['user']) {
        
        $this->assertArrayHasKey('storedPaymentSources', $responseContent['user']);
        
        if ($responseContent['user']['storedPaymentSources']) {
        
        $this->assertIsArray($responseContent['user']['storedPaymentSources']);
        
        for($g = 0; $g < count($responseContent['user']['storedPaymentSources']); $g++) {
        
        if ($responseContent['user']['storedPaymentSources'][$g]) {
        
        $this->assertArrayHasKey('creditCardInfo', $responseContent['user']['storedPaymentSources'][$g]);
        
        if ($responseContent['user']['storedPaymentSources'][$g]['creditCardInfo']) {
        
        $this->assertArrayHasKey('firstDigits', $responseContent['user']['storedPaymentSources'][$g]['creditCardInfo']);
        
        if ($responseContent['user']['storedPaymentSources'][$g]['creditCardInfo']['firstDigits']) {
        
        $this->assertIsString($responseContent['user']['storedPaymentSources'][$g]['creditCardInfo']['firstDigits']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}