<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3be1c8386d8c5d94adc3eaac3cda4057Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        shop {\n            automaticFulfillmentDigitalProducts\n            defaultDigitalMaxDownloads\n            defaultDigitalUrlValidDays\n        }\n    }", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('automaticFulfillmentDigitalProducts', $responseContent['shop']);
        
        if ($responseContent['shop']['automaticFulfillmentDigitalProducts']) {
        
        $this->assertIsBool($responseContent['shop']['automaticFulfillmentDigitalProducts']);
        
        }
        
        $this->assertArrayHasKey('defaultDigitalMaxDownloads', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultDigitalMaxDownloads']) {
        
        $this->assertIsInt($responseContent['shop']['defaultDigitalMaxDownloads']);
        
        }
        
        $this->assertArrayHasKey('defaultDigitalUrlValidDays', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultDigitalUrlValidDays']) {
        
        $this->assertIsInt($responseContent['shop']['defaultDigitalUrlValidDays']);
        
        }
        

    }
}