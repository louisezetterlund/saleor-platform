<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qbb7bbb4b9ddc55fb859cd4da1de9892cTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageFragment on Page {\n  id\n  title\n  slug\n  isPublished\n  __typename\n}\n\nfragment MetadataItem on MetadataItem {\n  key\n  value\n  __typename\n}\n\nfragment MetadataFragment on ObjectWithMetadata {\n  metadata {\n    ...MetadataItem\n    __typename\n  }\n  privateMetadata {\n    ...MetadataItem\n    __typename\n  }\n  __typename\n}\n\nfragment PageDetailsFragment on Page {\n  ...PageFragment\n  ...MetadataFragment\n  contentJson\n  seoTitle\n  seoDescription\n  publicationDate\n  __typename\n}\n\nquery PageDetails($id: ID!) {\n  page(id: $id) {\n    ...PageDetailsFragment\n    __typename\n  }\n}\n", "variables": {"id": "UGFnZToz"}, "operationName": "PageDetails"}
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
        
        $this->assertArrayHasKey('title', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['title']);
        
        $this->assertIsString($responseContent['page']['title']);
        
        $this->assertArrayHasKey('slug', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['slug']);
        
        $this->assertIsString($responseContent['page']['slug']);
        
        $this->assertArrayHasKey('isPublished', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['isPublished']);
        
        $this->assertIsBool($responseContent['page']['isPublished']);
        
        $this->assertArrayHasKey('metadata', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['metadata']);
        
        $this->assertIsArray($responseContent['page']['metadata']);
        
        for($g = 0; $g < count($responseContent['page']['metadata']); $g++) {
        
        if ($responseContent['page']['metadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['page']['metadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['page']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['page']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['page']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['page']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['page']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['page']['metadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('privateMetadata', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['privateMetadata']);
        
        $this->assertIsArray($responseContent['page']['privateMetadata']);
        
        for($g = 0; $g < count($responseContent['page']['privateMetadata']); $g++) {
        
        if ($responseContent['page']['privateMetadata'][$g]) {
        
        $this->assertEquals('MetadataItem' , $responseContent['page']['privateMetadata'][$g]['__typename']);
        
        $this->assertArrayHasKey('key', $responseContent['page']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['page']['privateMetadata'][$g]['key']);
        
        $this->assertIsString($responseContent['page']['privateMetadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['page']['privateMetadata'][$g]);
        
        $this->assertNotNull($responseContent['page']['privateMetadata'][$g]['value']);
        
        $this->assertIsString($responseContent['page']['privateMetadata'][$g]['value']);
        
        }
        
        }
        
        $this->assertArrayHasKey('contentJson', $responseContent['page']);
        
        $this->assertNotNull($responseContent['page']['contentJson']);
        
        $this->assertArrayHasKey('seoTitle', $responseContent['page']);
        
        if ($responseContent['page']['seoTitle']) {
        
        $this->assertIsString($responseContent['page']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('seoDescription', $responseContent['page']);
        
        if ($responseContent['page']['seoDescription']) {
        
        $this->assertIsString($responseContent['page']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('publicationDate', $responseContent['page']);
        
        if ($responseContent['page']['publicationDate']) {
        
        }
        
        }
        

    }
}