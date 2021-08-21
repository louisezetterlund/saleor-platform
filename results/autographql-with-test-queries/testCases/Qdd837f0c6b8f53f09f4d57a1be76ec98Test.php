<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qdd837f0c6b8f53f09f4d57a1be76ec98Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query($id: ID!){\n        exportFile(id: $id){\n            id\n            status\n            createdAt\n            updatedAt\n            url\n            user{\n                email\n            }\n            app{\n                name\n            }\n            events{\n                date\n                type\n                user{\n                    email\n                }\n                message\n                app{\n                    name\n                }\n            }\n        }\n    }\n", "variables": {"id": "RXhwb3J0RmlsZToxNQ=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('exportFile', $responseContent);
        
        if ($responseContent['exportFile']) {
        
        $this->assertArrayHasKey('id', $responseContent['exportFile']);
        
        $this->assertNotNull($responseContent['exportFile']['id']);
        
        $this->assertArrayHasKey('status', $responseContent['exportFile']);
        
        $this->assertNotNull($responseContent['exportFile']['status']);
        
        $this->assertContains($responseContent['exportFile']['status'], ['PENDING', 'SUCCESS', 'FAILED', 'DELETED']);
        
        $this->assertArrayHasKey('createdAt', $responseContent['exportFile']);
        
        $this->assertNotNull($responseContent['exportFile']['createdAt']);
        
        $this->assertArrayHasKey('updatedAt', $responseContent['exportFile']);
        
        $this->assertNotNull($responseContent['exportFile']['updatedAt']);
        
        $this->assertArrayHasKey('url', $responseContent['exportFile']);
        
        if ($responseContent['exportFile']['url']) {
        
        $this->assertIsString($responseContent['exportFile']['url']);
        
        }
        
        $this->assertArrayHasKey('user', $responseContent['exportFile']);
        
        if ($responseContent['exportFile']['user']) {
        
        $this->assertArrayHasKey('email', $responseContent['exportFile']['user']);
        
        $this->assertNotNull($responseContent['exportFile']['user']['email']);
        
        $this->assertIsString($responseContent['exportFile']['user']['email']);
        
        }
        
        $this->assertArrayHasKey('app', $responseContent['exportFile']);
        
        if ($responseContent['exportFile']['app']) {
        
        $this->assertArrayHasKey('name', $responseContent['exportFile']['app']);
        
        if ($responseContent['exportFile']['app']['name']) {
        
        $this->assertIsString($responseContent['exportFile']['app']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('events', $responseContent['exportFile']);
        
        if ($responseContent['exportFile']['events']) {
        
        $this->assertIsArray($responseContent['exportFile']['events']);
        
        for($g = 0; $g < count($responseContent['exportFile']['events']); $g++) {
        
        $this->assertNotNull($responseContent['exportFile']['events'][$g]);
        
        $this->assertArrayHasKey('date', $responseContent['exportFile']['events'][$g]);
        
        $this->assertNotNull($responseContent['exportFile']['events'][$g]['date']);
        
        $this->assertArrayHasKey('type', $responseContent['exportFile']['events'][$g]);
        
        $this->assertNotNull($responseContent['exportFile']['events'][$g]['type']);
        
        $this->assertContains($responseContent['exportFile']['events'][$g]['type'], ['EXPORT_PENDING', 'EXPORT_SUCCESS', 'EXPORT_FAILED', 'EXPORT_DELETED', 'EXPORTED_FILE_SENT', 'EXPORT_FAILED_INFO_SENT']);
        
        $this->assertArrayHasKey('user', $responseContent['exportFile']['events'][$g]);
        
        if ($responseContent['exportFile']['events'][$g]['user']) {
        
        $this->assertArrayHasKey('email', $responseContent['exportFile']['events'][$g]['user']);
        
        $this->assertNotNull($responseContent['exportFile']['events'][$g]['user']['email']);
        
        $this->assertIsString($responseContent['exportFile']['events'][$g]['user']['email']);
        
        }
        
        $this->assertArrayHasKey('message', $responseContent['exportFile']['events'][$g]);
        
        $this->assertNotNull($responseContent['exportFile']['events'][$g]['message']);
        
        $this->assertIsString($responseContent['exportFile']['events'][$g]['message']);
        
        $this->assertArrayHasKey('app', $responseContent['exportFile']['events'][$g]);
        
        if ($responseContent['exportFile']['events'][$g]['app']) {
        
        $this->assertArrayHasKey('name', $responseContent['exportFile']['events'][$g]['app']);
        
        if ($responseContent['exportFile']['events'][$g]['app']['name']) {
        
        $this->assertIsString($responseContent['exportFile']['events'][$g]['app']['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}