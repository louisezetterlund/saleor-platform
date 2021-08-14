<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3ca957ab127f5bd9a04df5842ed81952Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query pageById($pageId: ID!) {\n        page(id: $pageId) {\n            translation(languageCode: PL) {\n                title\n                language {\n                    code\n                }\n            }\n        }\n    }\n    ", "variables": {"pageId": "UGFnZToy"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('page', $responseContent);
        
        if ($responseContent['page']) {
        
        $this->assertArrayHasKey('translation', $responseContent['page']);
        
        if ($responseContent['page']['translation']) {
        
        $this->assertArrayHasKey('title', $responseContent['page']['translation']);
        
        $this->assertNotNull($responseContent['page']['translation']['title']);
        
        $this->assertIsString($responseContent['page']['translation']['title']);
        
        $this->assertArrayHasKey('language', $responseContent['page']['translation']);
        
        $this->assertNotNull($responseContent['page']['translation']['language']);
        
        $this->assertArrayHasKey('code', $responseContent['page']['translation']['language']);
        
        $this->assertNotNull($responseContent['page']['translation']['language']['code']);
        
        $this->assertContains($responseContent['page']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        }
        
        }
        

    }
}