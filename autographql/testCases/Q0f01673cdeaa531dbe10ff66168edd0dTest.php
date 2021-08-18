<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0f01673cdeaa531dbe10ff66168edd0dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query plugin($id: ID!){\n      plugin(id:$id){\n        id\n        name\n        description\n        active\n        configuration{\n          name\n          value\n          type\n          helpText\n          label\n        }\n      }\n    }\n", "variables": {"id": "fake-name"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('plugin', $responseContent);
        
        if ($responseContent['plugin']) {
        
        $this->assertArrayHasKey('id', $responseContent['plugin']);
        
        $this->assertNotNull($responseContent['plugin']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['plugin']);
        
        $this->assertNotNull($responseContent['plugin']['name']);
        
        $this->assertIsString($responseContent['plugin']['name']);
        
        $this->assertArrayHasKey('description', $responseContent['plugin']);
        
        $this->assertNotNull($responseContent['plugin']['description']);
        
        $this->assertIsString($responseContent['plugin']['description']);
        
        $this->assertArrayHasKey('active', $responseContent['plugin']);
        
        $this->assertNotNull($responseContent['plugin']['active']);
        
        $this->assertIsBool($responseContent['plugin']['active']);
        
        $this->assertArrayHasKey('configuration', $responseContent['plugin']);
        
        if ($responseContent['plugin']['configuration']) {
        
        $this->assertIsArray($responseContent['plugin']['configuration']);
        
        for($g = 0; $g < count($responseContent['plugin']['configuration']); $g++) {
        
        if ($responseContent['plugin']['configuration'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['plugin']['configuration'][$g]);
        
        $this->assertNotNull($responseContent['plugin']['configuration'][$g]['name']);
        
        $this->assertIsString($responseContent['plugin']['configuration'][$g]['name']);
        
        $this->assertArrayHasKey('value', $responseContent['plugin']['configuration'][$g]);
        
        if ($responseContent['plugin']['configuration'][$g]['value']) {
        
        $this->assertIsString($responseContent['plugin']['configuration'][$g]['value']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['plugin']['configuration'][$g]);
        
        if ($responseContent['plugin']['configuration'][$g]['type']) {
        
        $this->assertContains($responseContent['plugin']['configuration'][$g]['type'], ['STRING', 'BOOLEAN', 'SECRET', 'PASSWORD']);
        
        }
        
        $this->assertArrayHasKey('helpText', $responseContent['plugin']['configuration'][$g]);
        
        if ($responseContent['plugin']['configuration'][$g]['helpText']) {
        
        $this->assertIsString($responseContent['plugin']['configuration'][$g]['helpText']);
        
        }
        
        $this->assertArrayHasKey('label', $responseContent['plugin']['configuration'][$g]);
        
        if ($responseContent['plugin']['configuration'][$g]['label']) {
        
        $this->assertIsString($responseContent['plugin']['configuration'][$g]['label']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}