<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qb52d89a7ef5e59ad8fe55dbc95e30d06Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment CategoryFragment on Category {\n  id\n  name\n  children {\n    totalCount\n    __typename\n  }\n  products {\n    totalCount\n    __typename\n  }\n  __typename\n}\n\nfragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery RootCategories($first: Int, $after: String, $last: Int, $before: String, $filter: CategoryFilterInput, $sort: CategorySortingInput) {\n  categories(level: 0, first: $first, after: $after, last: $last, before: $before, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...CategoryFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {}, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "RootCategories"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
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
        
        $this->assertArrayHasKey('children', $responseContent['categories']['edges'][$g]['node']);
        
        if ($responseContent['categories']['edges'][$g]['node']['children']) {
        
        $this->assertEquals('CategoryCountableConnection' , $responseContent['categories']['edges'][$g]['node']['children']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['categories']['edges'][$g]['node']['children']);
        
        if ($responseContent['categories']['edges'][$g]['node']['children']['totalCount']) {
        
        $this->assertIsInt($responseContent['categories']['edges'][$g]['node']['children']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('products', $responseContent['categories']['edges'][$g]['node']);
        
        if ($responseContent['categories']['edges'][$g]['node']['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['categories']['edges'][$g]['node']['products']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['categories']['edges'][$g]['node']['products']);
        
        if ($responseContent['categories']['edges'][$g]['node']['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['categories']['edges'][$g]['node']['products']['totalCount']);
        
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