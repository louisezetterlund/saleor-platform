<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4d0ddbfd95f45fb08145c045f9542804Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query Article($slug: String!) {\n  page(slug: $slug) {\n    contentJson\n    id\n    seoDescription\n    seoTitle\n    slug\n    title\n    __typename\n  }\n  shop {\n    homepageCollection {\n      id\n      backgroundImage {\n        url\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"slug": "meeting"}, "operationName": "Article"}
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
        
        $this->assertArrayHasKey('contentJson', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['contentJson']);
        
        $this->assertArrayHasKey('id', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['id']);
        
        $this->assertArrayHasKey('seoDescription', $responseContent['page']);
        
        if ($responseContent['page']['seoDescription']) {
        
        $this->assertIsString($responseContent['page']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['page']);
        
        if ($responseContent['page']['seoTitle']) {
        
        $this->assertIsString($responseContent['page']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['slug']);
        
        $this->assertIsString($responseContent['page']['slug']);
        
        $this->assertArrayHasKey('title', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['title']);
        
        $this->assertIsString($responseContent['page']['title']);
        
        }
        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertEquals('Shop' , $responseContent['shop']['__typename']);
        

    }
}