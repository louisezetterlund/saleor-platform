<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q737d2a622d8f5cb19d1e902f8eecd60aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    {\n        me {\n            storedPaymentSources {\n                gateway\n                creditCardInfo {\n                    lastDigits\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        if ($responseContent['me']) {
        
        $this->assertArrayHasKey('storedPaymentSources', $responseContent['me']);
        
        if ($responseContent['me']['storedPaymentSources']) {
        
        $this->assertIsArray($responseContent['me']['storedPaymentSources']);
        
        for($g = 0; $g < count($responseContent['me']['storedPaymentSources']); $g++) {
        
        if ($responseContent['me']['storedPaymentSources'][$g]) {
        
        $this->assertArrayHasKey('gateway', $responseContent['me']['storedPaymentSources'][$g]);
        
        $this->assertNotNull($responseContent['me']['storedPaymentSources'][$g]['gateway']);
        
        $this->assertIsString($responseContent['me']['storedPaymentSources'][$g]['gateway']);
        
        $this->assertArrayHasKey('creditCardInfo', $responseContent['me']['storedPaymentSources'][$g]);
        
        if ($responseContent['me']['storedPaymentSources'][$g]['creditCardInfo']) {
        
        $this->assertArrayHasKey('lastDigits', $responseContent['me']['storedPaymentSources'][$g]['creditCardInfo']);
        
        $this->assertNotNull($responseContent['me']['storedPaymentSources'][$g]['creditCardInfo']['lastDigits']);
        
        $this->assertIsString($responseContent['me']['storedPaymentSources'][$g]['creditCardInfo']['lastDigits']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}