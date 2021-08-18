<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q131483d4ca6653a6b2dd65da4456da3eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query User($id: ID!) {\n        user(id: $id) {\n            orders (first: 1) {\n                edges {\n                    node {\n                        id\n                        fulfillments {\n                            status\n                        }\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": {"id": "VXNlcjo1MA=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('user', $responseContent);
        
        if ($responseContent['user']) {
        
        $this->assertArrayHasKey('orders', $responseContent['user']);
        
        if ($responseContent['user']['orders']) {
        
        $this->assertArrayHasKey('edges', $responseContent['user']['orders']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges']);
        
        $this->assertIsArray($responseContent['user']['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['user']['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['user']['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['user']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('fulfillments', $responseContent['user']['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']['fulfillments']);
        
        $this->assertIsArray($responseContent['user']['orders']['edges'][$g]['node']['fulfillments']);
        
        for($f = 0; $f < count($responseContent['user']['orders']['edges'][$g]['node']['fulfillments']); $f++) {
        
        if ($responseContent['user']['orders']['edges'][$g]['node']['fulfillments'][$f]) {
        
        $this->assertArrayHasKey('status', $responseContent['user']['orders']['edges'][$g]['node']['fulfillments'][$f]);
        
        $this->assertNotNull($responseContent['user']['orders']['edges'][$g]['node']['fulfillments'][$f]['status']);
        
        $this->assertContains($responseContent['user']['orders']['edges'][$g]['node']['fulfillments'][$f]['status'], ['FULFILLED', 'CANCELED']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}