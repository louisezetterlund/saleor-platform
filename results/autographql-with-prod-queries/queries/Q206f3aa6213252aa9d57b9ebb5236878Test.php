<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q206f3aa6213252aa9d57b9ebb5236878Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CoverEmAll {\n  productVariants(first: 10) {\n    edges {\n      node {\n        id\n        name\n      }\n    }\n  }\n}\n\nquery CoverEmAll2 {\n  productVariant(id: \"UHJvZHVjdFZhcmlhbnQ6MzE0\") {\n    id\n    name\n    product {\n      name\n    }\n  }\n}\n\nquery CoverEmAll3 {\n  payments(first: 10) {\n    edges {\n      node {\n        id\n        capturedAmount {\n          amount\n          currency\n        }\n      }\n    }\n  }\n}\n", "variables": {}, "operationName": "CoverEmAll3"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('payments', $responseContent);
        
        if ($responseContent['payments']) {
        
        $this->assertArrayHasKey('edges', $responseContent['payments']);
        
        $this->assertNotNull($responseContent['payments']['edges']);
        
        $this->assertIsArray($responseContent['payments']['edges']);
        
        for($g = 0; $g < count($responseContent['payments']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['payments']['edges'][$g]);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['payments']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('capturedAmount', $responseContent['payments']['edges'][$g]['node']);
        
        if ($responseContent['payments']['edges'][$g]['node']['capturedAmount']) {
        
        $this->assertArrayHasKey('amount', $responseContent['payments']['edges'][$g]['node']['capturedAmount']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['capturedAmount']['amount']);
        
        $this->assertIsNumeric($responseContent['payments']['edges'][$g]['node']['capturedAmount']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['payments']['edges'][$g]['node']['capturedAmount']);
        
        $this->assertNotNull($responseContent['payments']['edges'][$g]['node']['capturedAmount']['currency']);
        
        $this->assertIsString($responseContent['payments']['edges'][$g]['node']['capturedAmount']['currency']);
        
        }
        
        }
        
        }
        

    }
}