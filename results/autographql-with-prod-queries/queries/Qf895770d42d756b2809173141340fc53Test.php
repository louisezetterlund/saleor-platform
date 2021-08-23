<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf895770d42d756b2809173141340fc53Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment ProductTranslationFragment on Product {\n  id\n  name\n  descriptionJson\n  seoDescription\n  seoTitle\n  translation(languageCode: $language) {\n    id\n    descriptionJson\n    language {\n      code\n      language\n      __typename\n    }\n    name\n    seoDescription\n    seoTitle\n    __typename\n  }\n  __typename\n}\n\nquery ProductTranslationDetails($id: ID!, $language: LanguageCodeEnum!) {\n  product(id: $id) {\n    ...ProductTranslationFragment\n    __typename\n  }\n}\n", "variables": {"id": "UHJvZHVjdDoxMjE=", "language": "CS"}, "operationName": "ProductTranslationDetails"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertEquals('Product' , $responseContent['product']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['name']);
        
        $this->assertIsString($responseContent['product']['name']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['descriptionJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['product']);
        
        if ($responseContent['product']['seoDescription']) {
        
        $this->assertIsString($responseContent['product']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['product']);
        
        if ($responseContent['product']['seoTitle']) {
        
        $this->assertIsString($responseContent['product']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['product']);
        
        if ($responseContent['product']['translation']) {
        
        $this->assertEquals('ProductTranslation' , $responseContent['product']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['translation']);
        
        $this->assertNotNull($responseContent['product']['translation']['id']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['product']['translation']);
        
        $this->assertNotNull($responseContent['product']['translation']['descriptionJson']);
        
        $this->assertArrayHasKey('language', $responseContent['product']['translation']);
        
        $this->assertNotNull($responseContent['product']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['product']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['product']['translation']['language']);
        
        $this->assertNotNull($responseContent['product']['translation']['language']['code']);
        
        $this->assertContains($responseContent['product']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        $this->assertArrayHasKey('language', $responseContent['product']['translation']['language']);
        
        $this->assertNotNull($responseContent['product']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['product']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['translation']);
        
        $this->assertNotNull($responseContent['product']['translation']['name']);
        
        $this->assertIsString($responseContent['product']['translation']['name']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['product']['translation']);
        
        if ($responseContent['product']['translation']['seoDescription']) {
        
        $this->assertIsString($responseContent['product']['translation']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['product']['translation']);
        
        if ($responseContent['product']['translation']['seoTitle']) {
        
        $this->assertIsString($responseContent['product']['translation']['seoTitle']);
        
        }
        
        }
        
        }
        

    }
}