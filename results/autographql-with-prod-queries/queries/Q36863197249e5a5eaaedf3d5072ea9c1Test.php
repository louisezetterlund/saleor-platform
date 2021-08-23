<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q36863197249e5a5eaaedf3d5072ea9c1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageFragment on Page {\n  id\n  title\n  slug\n  isPublished\n  __typename\n}\n\nquery PageList($first: Int, $after: String, $last: Int, $before: String, $sort: PageSortingInput) {\n  pages(before: $before, after: $after, first: $first, last: $last, sortBy: $sort) {\n    edges {\n      node {\n        ...PageFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      hasPreviousPage\n      hasNextPage\n      startCursor\n      endCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "sort": {"direction": "DESC", "field": "VISIBILITY"}}, "operationName": "PageList"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('pages', $responseContent);
        
        if ($responseContent['pages']) {
        
        $this->assertEquals('PageCountableConnection' , $responseContent['pages']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['pages']);
        
        $this->assertNotNull($responseContent['pages']['edges']);
        
        $this->assertIsArray($responseContent['pages']['edges']);
        
        for($g = 0; $g < count($responseContent['pages']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]);
        
        $this->assertEquals('PageCountableEdge' , $responseContent['pages']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['pages']['edges'][$g]);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']);
        
        $this->assertEquals('Page' , $responseContent['pages']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('title', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['title']);
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['title']);
        
        $this->assertArrayHasKey('slug', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['slug']);
        
        $this->assertIsString($responseContent['pages']['edges'][$g]['node']['slug']);
        
        $this->assertArrayHasKey('isPublished', $responseContent['pages']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['pages']['edges'][$g]['node']['isPublished']);
        
        $this->assertIsBool($responseContent['pages']['edges'][$g]['node']['isPublished']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['pages']);
        
        $this->assertNotNull($responseContent['pages']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['pages']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['pages']['pageInfo']);
        
        $this->assertNotNull($responseContent['pages']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['pages']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['pages']['pageInfo']);
        
        $this->assertNotNull($responseContent['pages']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['pages']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['pages']['pageInfo']);
        
        if ($responseContent['pages']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['pages']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['pages']['pageInfo']);
        
        if ($responseContent['pages']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['pages']['pageInfo']['endCursor']);
        
        }
        
        }
        

    }
}