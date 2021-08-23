<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q1e3e996df9305c5c913acebd2a18ffb0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment MenuFragment on Menu {\n  id\n  name\n  items {\n    id\n    __typename\n  }\n  __typename\n}\n\nfragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery MenuList($first: Int, $after: String, $last: Int, $before: String, $sort: MenuSortingInput) {\n  menus(first: $first, after: $after, before: $before, last: $last, sortBy: $sort) {\n    edges {\n      node {\n        ...MenuFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "sort": {"direction": "ASC", "field": "ITEMS_COUNT"}}, "operationName": "MenuList"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('menus', $responseContent);
        
        if ($responseContent['menus']) {
        
        $this->assertEquals('MenuCountableConnection' , $responseContent['menus']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['menus']);
        
        $this->assertNotNull($responseContent['menus']['edges']);
        
        $this->assertIsArray($responseContent['menus']['edges']);
        
        for($g = 0; $g < count($responseContent['menus']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]);
        
        $this->assertEquals('MenuCountableEdge' , $responseContent['menus']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['menus']['edges'][$g]);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']);
        
        $this->assertEquals('Menu' , $responseContent['menus']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menus']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['menus']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['menus']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('items', $responseContent['menus']['edges'][$g]['node']);
        
        if ($responseContent['menus']['edges'][$g]['node']['items']) {
        
        $this->assertIsArray($responseContent['menus']['edges'][$g]['node']['items']);
        
        for($f = 0; $f < count($responseContent['menus']['edges'][$g]['node']['items']); $f++) {
        
        if ($responseContent['menus']['edges'][$g]['node']['items'][$f]) {
        
        $this->assertEquals('MenuItem' , $responseContent['menus']['edges'][$g]['node']['items'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['menus']['edges'][$g]['node']['items'][$f]);
        
        $this->assertNotNull($responseContent['menus']['edges'][$g]['node']['items'][$f]['id']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['menus']);
        
        $this->assertNotNull($responseContent['menus']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['menus']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['menus']['pageInfo']);
        
        if ($responseContent['menus']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['menus']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['menus']['pageInfo']);
        
        $this->assertNotNull($responseContent['menus']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['menus']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['menus']['pageInfo']);
        
        $this->assertNotNull($responseContent['menus']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['menus']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['menus']['pageInfo']);
        
        if ($responseContent['menus']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['menus']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}