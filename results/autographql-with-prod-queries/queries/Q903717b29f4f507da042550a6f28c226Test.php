<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q903717b29f4f507da042550a6f28c226Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query AppsInstallations {\n  appsInstallations {\n    status\n    message\n    appName\n    manifestUrl\n    id\n    __typename\n  }\n}\n", "variables": {}, "operationName": "AppsInstallations"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('appsInstallations', $responseContent);
        
        $this->assertNotNull($responseContent['appsInstallations']);
        
        $this->assertIsArray($responseContent['appsInstallations']);
        
        for($g = 0; $g < count($responseContent['appsInstallations']); $g++) {
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]);
        
        $this->assertEquals('AppInstallation' , $responseContent['appsInstallations'][$g]['__typename']);
        
        $this->assertArrayHasKey('status', $responseContent['appsInstallations'][$g]);
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]['status']);
        
        $this->assertContains($responseContent['appsInstallations'][$g]['status'], ['PENDING', 'SUCCESS', 'FAILED', 'DELETED']);
        
        $this->assertArrayHasKey('message', $responseContent['appsInstallations'][$g]);
        
        if ($responseContent['appsInstallations'][$g]['message']) {
        
        $this->assertIsString($responseContent['appsInstallations'][$g]['message']);
        
        }
        
        $this->assertArrayHasKey('appName', $responseContent['appsInstallations'][$g]);
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]['appName']);
        
        $this->assertIsString($responseContent['appsInstallations'][$g]['appName']);
        
        $this->assertArrayHasKey('manifestUrl', $responseContent['appsInstallations'][$g]);
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]['manifestUrl']);
        
        $this->assertIsString($responseContent['appsInstallations'][$g]['manifestUrl']);
        
        $this->assertArrayHasKey('id', $responseContent['appsInstallations'][$g]);
        
        $this->assertNotNull($responseContent['appsInstallations'][$g]['id']);
        
        }
        

    }
}