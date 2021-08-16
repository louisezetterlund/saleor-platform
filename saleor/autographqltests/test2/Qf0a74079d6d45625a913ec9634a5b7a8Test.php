<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf0a74079d6d45625a913ec9634a5b7a8Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query productVariantById($productVariantId: ID!) {\n        productVariant(id: $productVariantId) {\n            translation(languageCode: PL) {\n                name\n                language {\n                    code\n                }\n            }\n        }\n    }\n    ", "variables": {"productVariantId": "UHJvZHVjdFZhcmlhbnQ6MTAxNA=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertArrayHasKey('translation', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['translation']) {
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['translation']);
        
        $this->assertNotNull($responseContent['productVariant']['translation']['name']);
        
        $this->assertIsString($responseContent['productVariant']['translation']['name']);
        
        $this->assertArrayHasKey('language', $responseContent['productVariant']['translation']);
        
        $this->assertNotNull($responseContent['productVariant']['translation']['language']);
        
        $this->assertArrayHasKey('code', $responseContent['productVariant']['translation']['language']);
        
        $this->assertNotNull($responseContent['productVariant']['translation']['language']['code']);
        
        $this->assertContains($responseContent['productVariant']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        }
        
        }
        

    }
}