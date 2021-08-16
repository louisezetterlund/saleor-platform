<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf744400e4abf50acb30d24fc26b8f9e4Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    {\n        checkoutLines(first: 20) {\n            edges {\n                node {\n                    id\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('checkoutLines', $responseContent);
        
        if ($responseContent['checkoutLines']) {
        
        $this->assertArrayHasKey('edges', $responseContent['checkoutLines']);
        
        $this->assertNotNull($responseContent['checkoutLines']['edges']);
        
        $this->assertIsArray($responseContent['checkoutLines']['edges']);
        
        for($g = 0; $g < count($responseContent['checkoutLines']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['checkoutLines']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['checkoutLines']['edges'][$g]);
        
        $this->assertNotNull($responseContent['checkoutLines']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['checkoutLines']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['checkoutLines']['edges'][$g]['node']['id']);
        
        }
        
        }
        

    }
}