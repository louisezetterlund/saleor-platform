<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q89a41d27dd4350a5a93fbe3c7308ec93Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        attributes(first: 1) {\n            edges {\n                node {\n                    translation(languageCode: PL) {\n                        name\n                        language {\n                            code\n                        }\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('attributes', $responseContent);
        
        if ($responseContent['attributes']) {
        
        $this->assertArrayHasKey('edges', $responseContent['attributes']);
        
        $this->assertNotNull($responseContent['attributes']['edges']);
        
        $this->assertIsArray($responseContent['attributes']['edges']);
        
        for($g = 0; $g < count($responseContent['attributes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['attributes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('translation', $responseContent['attributes']['edges'][$g]['node']);
        
        if ($responseContent['attributes']['edges'][$g]['node']['translation']) {
        
        $this->assertArrayHasKey('name', $responseContent['attributes']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['translation']['name']);
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['translation']['name']);
        
        $this->assertArrayHasKey('language', $responseContent['attributes']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['translation']['language']);
        
        $this->assertArrayHasKey('code', $responseContent['attributes']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['translation']['language']['code']);
        
        $this->assertContains($responseContent['attributes']['edges'][$g]['node']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        }
        
        }
        
        }
        

    }
}