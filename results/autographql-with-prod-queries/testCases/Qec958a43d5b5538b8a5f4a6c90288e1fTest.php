<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qec958a43d5b5538b8a5f4a6c90288e1fTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment CollectionTranslationFragment on Collection {\n  id\n  name\n  descriptionJson\n  seoDescription\n  seoTitle\n  translation(languageCode: $language) {\n    id\n    descriptionJson\n    language {\n      language\n      __typename\n    }\n    name\n    seoDescription\n    seoTitle\n    __typename\n  }\n  __typename\n}\n\nquery CollectionTranslationDetails($id: ID!, $language: LanguageCodeEnum!) {\n  collection(id: $id) {\n    ...CollectionTranslationFragment\n    __typename\n  }\n}\n", "variables": {"id": "Q29sbGVjdGlvbjox", "language": "SV"}, "operationName": "CollectionTranslationDetails"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('collection', $responseContent);
        
        if ($responseContent['collection']) {
        
        $this->assertEquals('Collection' , $responseContent['collection']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['name']);
        
        $this->assertIsString($responseContent['collection']['name']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['collection']);
        
        $this->assertNotNull($responseContent['collection']['descriptionJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['collection']);
        
        if ($responseContent['collection']['seoDescription']) {
        
        $this->assertIsString($responseContent['collection']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['collection']);
        
        if ($responseContent['collection']['seoTitle']) {
        
        $this->assertIsString($responseContent['collection']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['collection']);
        
        if ($responseContent['collection']['translation']) {
        
        $this->assertEquals('CollectionTranslation' , $responseContent['collection']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['collection']['translation']);
        
        $this->assertNotNull($responseContent['collection']['translation']['id']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['collection']['translation']);
        
        $this->assertNotNull($responseContent['collection']['translation']['descriptionJson']);
        
        $this->assertArrayHasKey('language', $responseContent['collection']['translation']);
        
        $this->assertNotNull($responseContent['collection']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['collection']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('language', $responseContent['collection']['translation']['language']);
        
        $this->assertNotNull($responseContent['collection']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['collection']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['collection']['translation']);
        
        $this->assertNotNull($responseContent['collection']['translation']['name']);
        
        $this->assertIsString($responseContent['collection']['translation']['name']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['collection']['translation']);
        
        if ($responseContent['collection']['translation']['seoDescription']) {
        
        $this->assertIsString($responseContent['collection']['translation']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['collection']['translation']);
        
        if ($responseContent['collection']['translation']['seoTitle']) {
        
        $this->assertIsString($responseContent['collection']['translation']['seoTitle']);
        
        }
        
        }
        
        }
        

    }
}