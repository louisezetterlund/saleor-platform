<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5028675ae7fe5ad39499eef02bce3784Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        shop {\n            defaultCountry {\n                code\n                vat {\n                    standardRate\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('defaultCountry', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultCountry']) {
        
        $this->assertArrayHasKey('code', $responseContent['shop']['defaultCountry']);
        
        $this->assertNotNull($responseContent['shop']['defaultCountry']['code']);
        
        $this->assertIsString($responseContent['shop']['defaultCountry']['code']);
        
        $this->assertArrayHasKey('vat', $responseContent['shop']['defaultCountry']);
        
        if ($responseContent['shop']['defaultCountry']['vat']) {
        
        $this->assertArrayHasKey('standardRate', $responseContent['shop']['defaultCountry']['vat']);
        
        if ($responseContent['shop']['defaultCountry']['vat']['standardRate']) {
        
        $this->assertIsNumeric($responseContent['shop']['defaultCountry']['vat']['standardRate']);
        
        }
        
        }
        
        }
        

    }
}