<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc68f9383fbc256aab5d17c98e0cbe7e5Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query saleById($saleId: ID!) {\n        sale(id: $saleId) {\n            translation(languageCode: PL) {\n                name\n                language {\n                    code\n                }\n            }\n        }\n    }\n    ", "variables": {"saleId": "U2FsZToxNTk="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('sale', $responseContent);
        
        if ($responseContent['sale']) {
        
        $this->assertArrayHasKey('translation', $responseContent['sale']);
        
        if ($responseContent['sale']['translation']) {
        
        $this->assertArrayHasKey('name', $responseContent['sale']['translation']);
        
        if ($responseContent['sale']['translation']['name']) {
        
        $this->assertIsString($responseContent['sale']['translation']['name']);
        
        }
        
        $this->assertArrayHasKey('language', $responseContent['sale']['translation']);
        
        $this->assertNotNull($responseContent['sale']['translation']['language']);
        
        $this->assertArrayHasKey('code', $responseContent['sale']['translation']['language']);
        
        $this->assertNotNull($responseContent['sale']['translation']['language']['code']);
        
        $this->assertContains($responseContent['sale']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        }
        
        }
        

    }
}