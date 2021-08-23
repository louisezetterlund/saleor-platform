<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q60d4a289f8a653a8951e21219bdf7fbeTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment SaleTranslationFragment on Sale {\n  id\n  name\n  translation(languageCode: $language) {\n    id\n    language {\n      code\n      language\n      __typename\n    }\n    name\n    __typename\n  }\n  __typename\n}\n\nquery SaleTranslationDetails($id: ID!, $language: LanguageCodeEnum!) {\n  sale(id: $id) {\n    ...SaleTranslationFragment\n    __typename\n  }\n}\n", "variables": {"id": "U2FsZTox", "language": "SV"}, "operationName": "SaleTranslationDetails"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('sale', $responseContent);
        
        if ($responseContent['sale']) {
        
        $this->assertEquals('Sale' , $responseContent['sale']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['sale']);
        
        $this->assertNotNull($responseContent['sale']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['sale']);
        
        $this->assertNotNull($responseContent['sale']['name']);
        
        $this->assertIsString($responseContent['sale']['name']);
        
        $this->assertArrayHasKey('translation', $responseContent['sale']);
        
        if ($responseContent['sale']['translation']) {
        
        $this->assertEquals('SaleTranslation' , $responseContent['sale']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['sale']['translation']);
        
        $this->assertNotNull($responseContent['sale']['translation']['id']);
        
        $this->assertArrayHasKey('language', $responseContent['sale']['translation']);
        
        $this->assertNotNull($responseContent['sale']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['sale']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['sale']['translation']['language']);
        
        $this->assertNotNull($responseContent['sale']['translation']['language']['code']);
        
        $this->assertContains($responseContent['sale']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        $this->assertArrayHasKey('language', $responseContent['sale']['translation']['language']);
        
        $this->assertNotNull($responseContent['sale']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['sale']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['sale']['translation']);
        
        if ($responseContent['sale']['translation']['name']) {
        
        $this->assertIsString($responseContent['sale']['translation']['name']);
        
        }
        
        }
        
        }
        

    }
}