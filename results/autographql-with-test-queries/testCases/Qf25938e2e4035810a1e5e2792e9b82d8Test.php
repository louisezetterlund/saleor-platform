<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf25938e2e4035810a1e5e2792e9b82d8Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query menuItemById($menuItemId: ID!) {\n        menuItem(id: $menuItemId) {\n            translation(languageCode: PL) {\n                name\n                language {\n                    code\n                }\n            }\n        }\n    }\n    ", "variables": {"menuItemId": "TWVudUl0ZW06Nzk="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menuItem', $responseContent);
        
        if ($responseContent['menuItem']) {
        
        $this->assertArrayHasKey('translation', $responseContent['menuItem']);
        
        if ($responseContent['menuItem']['translation']) {
        
        $this->assertArrayHasKey('name', $responseContent['menuItem']['translation']);
        
        $this->assertNotNull($responseContent['menuItem']['translation']['name']);
        
        $this->assertIsString($responseContent['menuItem']['translation']['name']);
        
        $this->assertArrayHasKey('language', $responseContent['menuItem']['translation']);
        
        $this->assertNotNull($responseContent['menuItem']['translation']['language']);
        
        $this->assertArrayHasKey('code', $responseContent['menuItem']['translation']['language']);
        
        $this->assertNotNull($responseContent['menuItem']['translation']['language']['code']);
        
        $this->assertContains($responseContent['menuItem']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        }
        
        }
        

    }
}