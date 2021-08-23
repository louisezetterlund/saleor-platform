<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8dd903892d63523c87c1bd0d7596346fTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery SearchProducts($after: String, $first: Int!, $query: String!) {\n  search: products(after: $after, first: $first, filter: {search: $query}) {\n    edges {\n      node {\n        id\n        name\n        thumbnail {\n          url\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"after": "WyJwaW5lYXBwbGUtanVpY2UiXQ==", "first": 20, "query": ""}, "operationName": "SearchProducts"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('search', $responseContent);
        
        if ($responseContent['search']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['search']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['edges']);
        
        $this->assertIsArray($responseContent['search']['edges']);
        
        for($g = 0; $g < count($responseContent['search']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['search']['edges'][$g]);
        
        $this->assertEquals('ProductCountableEdge' , $responseContent['search']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['search']['edges'][$g]);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']);
        
        $this->assertEquals('Product' , $responseContent['search']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['search']['edges'][$g]['node']);
        
        if ($responseContent['search']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['search']['edges'][$g]['node']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['search']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['thumbnail']['url']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['search']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['search']['pageInfo']);
        
        if ($responseContent['search']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['search']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['search']['pageInfo']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['search']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['search']['pageInfo']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['search']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['search']['pageInfo']);
        
        if ($responseContent['search']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['search']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}