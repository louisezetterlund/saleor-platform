<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf55ec376ebfc5d2c8db1141f420a15eeTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CheckExportFileStatus($id: ID!) {\n  exportFile(id: $id) {\n    id\n    status\n    __typename\n  }\n}\n", "variables": {"id": "RXhwb3J0RmlsZToy"}, "operationName": "CheckExportFileStatus"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('exportFile', $responseContent);
        
        if ($responseContent['exportFile']) {
        
        $this->assertEquals('ExportFile' , $responseContent['exportFile']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['exportFile']);
        
        $this->assertNotNull($responseContent['exportFile']['id']);
        
        $this->assertArrayHasKey('status', $responseContent['exportFile']);
        
        $this->assertNotNull($responseContent['exportFile']['status']);
        
        $this->assertContains($responseContent['exportFile']['status'], ['PENDING', 'SUCCESS', 'FAILED', 'DELETED']);
        
        }
        

    }
}