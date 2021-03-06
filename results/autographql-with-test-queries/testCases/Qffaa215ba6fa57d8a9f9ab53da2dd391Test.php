<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qffaa215ba6fa57d8a9f9ab53da2dd391Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery GridAttributes($first: Int!, $after: String, $ids: [ID!]!) {\n  availableInGrid: attributes(first: $first, after: $after, filter: {availableInGrid: true, isVariantOnly: false}) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    totalCount\n    __typename\n  }\n  grid: attributes(first: 25, filter: {ids: $ids}) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 6, "ids": ["QXR0cmlidXRlOjE0"], "after": "WyIwIiwgInNpemUiXQ=="}, "operationName": "GridAttributes"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('availableInGrid', $responseContent);
        
        if ($responseContent['availableInGrid']) {
        
        $this->assertEquals('AttributeCountableConnection' , $responseContent['availableInGrid']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['availableInGrid']);
        
        $this->assertNotNull($responseContent['availableInGrid']['edges']);
        
        $this->assertIsArray($responseContent['availableInGrid']['edges']);
        
        for($g = 0; $g < count($responseContent['availableInGrid']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['availableInGrid']['edges'][$g]);
        
        $this->assertEquals('AttributeCountableEdge' , $responseContent['availableInGrid']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['availableInGrid']['edges'][$g]);
        
        $this->assertNotNull($responseContent['availableInGrid']['edges'][$g]['node']);
        
        $this->assertEquals('Attribute' , $responseContent['availableInGrid']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['availableInGrid']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['availableInGrid']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['availableInGrid']['edges'][$g]['node']);
        
        if ($responseContent['availableInGrid']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['availableInGrid']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['availableInGrid']);
        
        $this->assertNotNull($responseContent['availableInGrid']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['availableInGrid']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['availableInGrid']['pageInfo']);
        
        if ($responseContent['availableInGrid']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['availableInGrid']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['availableInGrid']['pageInfo']);
        
        $this->assertNotNull($responseContent['availableInGrid']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['availableInGrid']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['availableInGrid']['pageInfo']);
        
        $this->assertNotNull($responseContent['availableInGrid']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['availableInGrid']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['availableInGrid']['pageInfo']);
        
        if ($responseContent['availableInGrid']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['availableInGrid']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('totalCount', $responseContent['availableInGrid']);
        
        if ($responseContent['availableInGrid']['totalCount']) {
        
        $this->assertIsInt($responseContent['availableInGrid']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('grid', $responseContent);
        
        if ($responseContent['grid']) {
        
        $this->assertEquals('AttributeCountableConnection' , $responseContent['grid']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['grid']);
        
        $this->assertNotNull($responseContent['grid']['edges']);
        
        $this->assertIsArray($responseContent['grid']['edges']);
        
        for($g = 0; $g < count($responseContent['grid']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['grid']['edges'][$g]);
        
        $this->assertEquals('AttributeCountableEdge' , $responseContent['grid']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['grid']['edges'][$g]);
        
        $this->assertNotNull($responseContent['grid']['edges'][$g]['node']);
        
        $this->assertEquals('Attribute' , $responseContent['grid']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['grid']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['grid']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['grid']['edges'][$g]['node']);
        
        if ($responseContent['grid']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['grid']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        }
        

    }
}