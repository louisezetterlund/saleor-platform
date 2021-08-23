<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8289e952abd956d1a565684d9b4ca097Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PluginFragment on Plugin {\n  id\n  name\n  description\n  active\n  __typename\n}\n\nquery Plugins($first: Int, $after: String, $last: Int, $before: String, $filter: PluginFilterInput, $sort: PluginSortingInput) {\n  plugins(before: $before, after: $after, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...PluginFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      hasPreviousPage\n      hasNextPage\n      startCursor\n      endCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {"search": "gif"}, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "Plugins"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('plugins', $responseContent);
        
        if ($responseContent['plugins']) {
        
        $this->assertEquals('PluginCountableConnection' , $responseContent['plugins']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['plugins']);
        
        $this->assertNotNull($responseContent['plugins']['edges']);
        
        $this->assertIsArray($responseContent['plugins']['edges']);
        
        for($g = 0; $g < count($responseContent['plugins']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]);
        
        $this->assertEquals('PluginCountableEdge' , $responseContent['plugins']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['plugins']['edges'][$g]);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertEquals('Plugin' , $responseContent['plugins']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['plugins']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('description', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['description']);
        
        $this->assertIsString($responseContent['plugins']['edges'][$g]['node']['description']);
        
        $this->assertArrayHasKey('active', $responseContent['plugins']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['plugins']['edges'][$g]['node']['active']);
        
        $this->assertIsBool($responseContent['plugins']['edges'][$g]['node']['active']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['plugins']);
        
        $this->assertNotNull($responseContent['plugins']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['plugins']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['plugins']['pageInfo']);
        
        $this->assertNotNull($responseContent['plugins']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['plugins']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['plugins']['pageInfo']);
        
        $this->assertNotNull($responseContent['plugins']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['plugins']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['plugins']['pageInfo']);
        
        if ($responseContent['plugins']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['plugins']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['plugins']['pageInfo']);
        
        if ($responseContent['plugins']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['plugins']['pageInfo']['endCursor']);
        
        }
        
        }
        

    }
}