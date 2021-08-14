<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q05bde9af707758e0b5ecf6542b9ef867Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query ($filter: PluginFilterInput) {\n            plugins(first: 5, filter:$filter) {\n                totalCount\n                edges {\n                    node {\n                        id\n                    }\n                }\n            }\n        }\n    ", "variables": {"filter": {"active": "False", "search": "Plugin"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('plugins', $responseContent);
        
        if ($responseContent['plugins']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['plugins']);
        
        if ($responseContent['plugins']['totalCount']) {
        
        $this->assertIsInt($responseContent['plugins']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['plugins']);
        
        $this->assertNotNull($responseContent['plugins']['edges']);
        
        $this->assertIsArray($responseContent['plugins']['edges']);
        
        for($g = 0; $g < count($responseContent['plugins']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['plugins']['edges'][$g]);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['id']);
        
        }
        
        }
        

    }
}