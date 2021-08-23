<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q73ec8c9bb9f85070aad95ff85d60b26fTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageTranslationFragment on Page {\n  id\n  contentJson\n  seoDescription\n  seoTitle\n  title\n  translation(languageCode: $language) {\n    id\n    contentJson\n    seoDescription\n    seoTitle\n    title\n    language {\n      code\n      language\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nquery PageTranslationDetails($id: ID!, $language: LanguageCodeEnum!) {\n  page(id: $id) {\n    ...PageTranslationFragment\n    __typename\n  }\n}\n", "variables": {"id": "UGFnZTox", "language": "SV"}, "operationName": "PageTranslationDetails"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('page', $responseContent);
        
        if ($responseContent['page']) {
        
        $this->assertEquals('Page' , $responseContent['page']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['id']);
        
        $this->assertArrayHasKey('contentJson', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['contentJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['page']);
        
        if ($responseContent['page']['seoDescription']) {
        
        $this->assertIsString($responseContent['page']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['page']);
        
        if ($responseContent['page']['seoTitle']) {
        
        $this->assertIsString($responseContent['page']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('title', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['title']);
        
        $this->assertIsString($responseContent['page']['title']);
        
        $this->assertArrayHasKey('translation', $responseContent['page']);
        
        if ($responseContent['page']['translation']) {
        
        $this->assertEquals('PageTranslation' , $responseContent['page']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['page']['translation']);
        
        $this->assertNotNull($responseContent['page']['translation']['id']);
        
        $this->assertArrayHasKey('contentJson', $responseContent['page']['translation']);
        
        $this->assertNotNull($responseContent['page']['translation']['contentJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['page']['translation']);
        
        if ($responseContent['page']['translation']['seoDescription']) {
        
        $this->assertIsString($responseContent['page']['translation']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['page']['translation']);
        
        if ($responseContent['page']['translation']['seoTitle']) {
        
        $this->assertIsString($responseContent['page']['translation']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('title', $responseContent['page']['translation']);
        
        $this->assertNotNull($responseContent['page']['translation']['title']);
        
        $this->assertIsString($responseContent['page']['translation']['title']);
        
        $this->assertArrayHasKey('language', $responseContent['page']['translation']);
        
        $this->assertNotNull($responseContent['page']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['page']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('code', $responseContent['page']['translation']['language']);
        
        $this->assertNotNull($responseContent['page']['translation']['language']['code']);
        
        $this->assertContains($responseContent['page']['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        $this->assertArrayHasKey('language', $responseContent['page']['translation']['language']);
        
        $this->assertNotNull($responseContent['page']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['page']['translation']['language']['language']);
        
        }
        
        }
        

    }
}