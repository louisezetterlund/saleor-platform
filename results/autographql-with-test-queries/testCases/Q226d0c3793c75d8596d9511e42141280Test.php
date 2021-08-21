<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q226d0c3793c75d8596d9511e42141280Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    {\n      plugins(first:1){\n        edges{\n          node{\n            name\n            description\n            active\n            id\n            configuration{\n              name\n              type\n              value\n              helpText\n              label\n            }\n          }\n        }\n      }\n    }\n", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('plugins', $responseContent);
        
        if ($responseContent['plugins']) {
        
        $this->assertArrayHasKey('edges', $responseContent['plugins']);
        
        $this->assertNotNull($responseContent['plugins']['edges']);
        
        $this->assertIsArray($responseContent['plugins']['edges']);
        
        for($g = 0; $g < count($responseContent['plugins']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['plugins']['edges'][$g]);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['plugins']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('description', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['description']);
        
        $this->assertIsString($responseContent['plugins']['edges'][$g]['node']['description']);
        
        $this->assertArrayHasKey('active', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['active']);
        
        $this->assertIsBool($responseContent['plugins']['edges'][$g]['node']['active']);
        
        $this->assertArrayHasKey('id', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('configuration', $responseContent['plugins']['edges'][$g]['node']);
        
        if ($responseContent['plugins']['edges'][$g]['node']['configuration']) {
        
        $this->assertIsArray($responseContent['plugins']['edges'][$g]['node']['configuration']);
        
        for($f = 0; $f < count($responseContent['plugins']['edges'][$g]['node']['configuration']); $f++) {
        
        if ($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]) {
        
        $this->assertArrayHasKey('name', $responseContent['plugins']['edges'][$g]['node']['configuration'][$f]);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['name']);
        
        $this->assertIsString($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['name']);
        
        $this->assertArrayHasKey('type', $responseContent['plugins']['edges'][$g]['node']['configuration'][$f]);
        
        if ($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['type']) {
        
        $this->assertContains($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['type'], ['STRING', 'BOOLEAN', 'SECRET', 'PASSWORD']);
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['plugins']['edges'][$g]['node']['configuration'][$f]);
        
        if ($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['value']) {
        
        $this->assertIsString($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['value']);
        
        }
        
        $this->assertArrayHasKey('helpText', $responseContent['plugins']['edges'][$g]['node']['configuration'][$f]);
        
        if ($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['helpText']) {
        
        $this->assertIsString($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['helpText']);
        
        }
        
        $this->assertArrayHasKey('label', $responseContent['plugins']['edges'][$g]['node']['configuration'][$f]);
        
        if ($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['label']) {
        
        $this->assertIsString($responseContent['plugins']['edges'][$g]['node']['configuration'][$f]['label']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}