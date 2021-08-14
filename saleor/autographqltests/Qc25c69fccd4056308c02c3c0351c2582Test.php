<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc25c69fccd4056308c02c3c0351c2582Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query Me {\n        me {\n            orders (first: 1) {\n                edges {\n                    node {\n                        id\n                        fulfillments {\n                            status\n                        }\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        if ($responseContent['me']) {
        
        $this->assertArrayHasKey('orders', $responseContent['me']);
        
        if ($responseContent['me']['orders']) {
        
        $this->assertArrayHasKey('edges', $responseContent['me']['orders']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges']);
        
        $this->assertIsArray($responseContent['me']['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['me']['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['me']['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('fulfillments', $responseContent['me']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['fulfillments']);
        
        $this->assertIsArray($responseContent['me']['orders']['edges'][$g]['node']['fulfillments']);
        
        for($f = 0; $f < count($responseContent['me']['orders']['edges'][$g]['node']['fulfillments']); $f++) {
        
        if ($responseContent['me']['orders']['edges'][$g]['node']['fulfillments'][$f]) {
        
        $this->assertArrayHasKey('status', $responseContent['me']['orders']['edges'][$g]['node']['fulfillments'][$f]);
        
        $this->assertNotNull($responseContent['me']['orders']['edges'][$g]['node']['fulfillments'][$f]['status']);
        
        $this->assertContains($responseContent['me']['orders']['edges'][$g]['node']['fulfillments'][$f]['status'], ['FULFILLED', 'CANCELED']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}