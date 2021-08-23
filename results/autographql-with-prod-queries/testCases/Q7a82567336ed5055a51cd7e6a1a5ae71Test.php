<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7a82567336ed5055a51cd7e6a1a5ae71Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment CategoryTranslationFragment on Category {\n  id\n  name\n  descriptionJson\n  seoDescription\n  seoTitle\n  translation(languageCode: $language) {\n    id\n    descriptionJson\n    language {\n      language\n      __typename\n    }\n    name\n    seoDescription\n    seoTitle\n    __typename\n  }\n  __typename\n}\n\nquery CategoryTranslations($language: LanguageCodeEnum!, $first: Int, $after: String, $last: Int, $before: String, $filter: CategoryFilterInput) {\n  categories(before: $before, after: $after, first: $first, last: $last, filter: $filter) {\n    edges {\n      node {\n        ...CategoryTranslationFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "language": "IT"}, "operationName": "CategoryTranslations"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('categories', $responseContent);
        
        if ($responseContent['categories']) {
        
        $this->assertEquals('CategoryCountableConnection' , $responseContent['categories']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['categories']);
        
        $this->assertNotNull($responseContent['categories']['edges']);
        
        $this->assertIsArray($responseContent['categories']['edges']);
        
        for($g = 0; $g < count($responseContent['categories']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]);
        
        $this->assertEquals('CategoryCountableEdge' , $responseContent['categories']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['categories']['edges'][$g]);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']);
        
        $this->assertEquals('Category' , $responseContent['categories']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['descriptionJson']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['categories']['edges'][$g]['node']);
        
        if ($responseContent['categories']['edges'][$g]['node']['seoDescription']) {
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['categories']['edges'][$g]['node']);
        
        if ($responseContent['categories']['edges'][$g]['node']['seoTitle']) {
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['categories']['edges'][$g]['node']);
        
        if ($responseContent['categories']['edges'][$g]['node']['translation']) {
        
        $this->assertEquals('CategoryTranslation' , $responseContent['categories']['edges'][$g]['node']['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['categories']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['translation']['id']);
        
        $this->assertArrayHasKey('descriptionJson', $responseContent['categories']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['translation']['descriptionJson']);
        
        $this->assertArrayHasKey('language', $responseContent['categories']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['translation']['language']);
        
        $this->assertEquals('LanguageDisplay' , $responseContent['categories']['edges'][$g]['node']['translation']['language']['__typename']);
        
        $this->assertArrayHasKey('language', $responseContent['categories']['edges'][$g]['node']['translation']['language']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['translation']['language']['language']);
        
        $this->assertArrayHasKey('name', $responseContent['categories']['edges'][$g]['node']['translation']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['translation']['name']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['translation']['name']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['categories']['edges'][$g]['node']['translation']);
        
        if ($responseContent['categories']['edges'][$g]['node']['translation']['seoDescription']) {
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['translation']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['categories']['edges'][$g]['node']['translation']);
        
        if ($responseContent['categories']['edges'][$g]['node']['translation']['seoTitle']) {
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['translation']['seoTitle']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['categories']);
        
        $this->assertNotNull($responseContent['categories']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['categories']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['categories']['pageInfo']);
        
        if ($responseContent['categories']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['categories']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['categories']['pageInfo']);
        
        $this->assertNotNull($responseContent['categories']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['categories']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['categories']['pageInfo']);
        
        $this->assertNotNull($responseContent['categories']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['categories']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['categories']['pageInfo']);
        
        if ($responseContent['categories']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['categories']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}