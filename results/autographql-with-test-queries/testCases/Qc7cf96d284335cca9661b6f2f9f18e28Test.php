<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc7cf96d284335cca9661b6f2f9f18e28Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query giftCards{\n        me {\n            giftCards(first: 10) {\n                edges {\n                    node {\n                        id\n                        displayCode\n                        code\n                    }\n                }\n                totalCount\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        if ($responseContent['me']) {
        
        $this->assertArrayHasKey('giftCards', $responseContent['me']);
        
        if ($responseContent['me']['giftCards']) {
        
        $this->assertArrayHasKey('edges', $responseContent['me']['giftCards']);
        
        $this->assertNotNull($responseContent['me']['giftCards']['edges']);
        
        $this->assertIsArray($responseContent['me']['giftCards']['edges']);
        
        for($g = 0; $g < count($responseContent['me']['giftCards']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['me']['giftCards']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['me']['giftCards']['edges'][$g]);
        
        $this->assertNotNull($responseContent['me']['giftCards']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['giftCards']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['me']['giftCards']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('displayCode', $responseContent['me']['giftCards']['edges'][$g]['node']);
        
        if ($responseContent['me']['giftCards']['edges'][$g]['node']['displayCode']) {
        
        $this->assertIsString($responseContent['me']['giftCards']['edges'][$g]['node']['displayCode']);
        
        }
        
        $this->assertArrayHasKey('code', $responseContent['me']['giftCards']['edges'][$g]['node']);
        
        if ($responseContent['me']['giftCards']['edges'][$g]['node']['code']) {
        
        $this->assertIsString($responseContent['me']['giftCards']['edges'][$g]['node']['code']);
        
        }
        
        }
        
        $this->assertArrayHasKey('totalCount', $responseContent['me']['giftCards']);
        
        if ($responseContent['me']['giftCards']['totalCount']) {
        
        $this->assertIsInt($responseContent['me']['giftCards']['totalCount']);
        
        }
        
        }
        
        }
        

    }
}