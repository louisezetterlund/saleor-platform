<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qec16236ec1ed5f6fa9d7b05c713de218Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query($filter: ExportFileFilterInput!){\n        exportFiles(first: 10, filter: $filter) {\n            edges{\n                node {\n                    id\n                    status\n                    createdAt\n                    updatedAt\n                    url\n                    user{\n                        email\n                    }\n                    app{\n                        name\n                    }\n                }\n            }\n        }\n    }\n", "variables": {"filter": {"createdAt": {"gte": "2019-04-10T00:00:00+00:00"}}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('exportFiles', $responseContent);
        
        if ($responseContent['exportFiles']) {
        
        $this->assertArrayHasKey('edges', $responseContent['exportFiles']);
        
        $this->assertNotNull($responseContent['exportFiles']['edges']);
        
        $this->assertIsArray($responseContent['exportFiles']['edges']);
        
        for($g = 0; $g < count($responseContent['exportFiles']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['exportFiles']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['exportFiles']['edges'][$g]);
        
        $this->assertNotNull($responseContent['exportFiles']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['exportFiles']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['exportFiles']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('status', $responseContent['exportFiles']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['exportFiles']['edges'][$g]['node']['status']);
        
        $this->assertContains($responseContent['exportFiles']['edges'][$g]['node']['status'], ['PENDING', 'SUCCESS', 'FAILED', 'DELETED']);
        
        $this->assertArrayHasKey('createdAt', $responseContent['exportFiles']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['exportFiles']['edges'][$g]['node']['createdAt']);
        
        $this->assertArrayHasKey('updatedAt', $responseContent['exportFiles']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['exportFiles']['edges'][$g]['node']['updatedAt']);
        
        $this->assertArrayHasKey('url', $responseContent['exportFiles']['edges'][$g]['node']);
        
        if ($responseContent['exportFiles']['edges'][$g]['node']['url']) {
        
        $this->assertIsString($responseContent['exportFiles']['edges'][$g]['node']['url']);
        
        }
        
        $this->assertArrayHasKey('user', $responseContent['exportFiles']['edges'][$g]['node']);
        
        if ($responseContent['exportFiles']['edges'][$g]['node']['user']) {
        
        $this->assertArrayHasKey('email', $responseContent['exportFiles']['edges'][$g]['node']['user']);
        
        $this->assertNotNull($responseContent['exportFiles']['edges'][$g]['node']['user']['email']);
        
        $this->assertIsString($responseContent['exportFiles']['edges'][$g]['node']['user']['email']);
        
        }
        
        $this->assertArrayHasKey('app', $responseContent['exportFiles']['edges'][$g]['node']);
        
        if ($responseContent['exportFiles']['edges'][$g]['node']['app']) {
        
        $this->assertArrayHasKey('name', $responseContent['exportFiles']['edges'][$g]['node']['app']);
        
        if ($responseContent['exportFiles']['edges'][$g]['node']['app']['name']) {
        
        $this->assertIsString($responseContent['exportFiles']['edges'][$g]['node']['app']['name']);
        
        }
        
        }
        
        }
        
        }
        

    }
}