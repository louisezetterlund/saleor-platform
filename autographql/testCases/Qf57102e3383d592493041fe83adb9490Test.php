<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf57102e3383d592493041fe83adb9490Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query SearchResults($query: String!) {\n  products(filter: {search: $query}, first: 20) {\n    edges {\n      node {\n        id\n        name\n        thumbnail {\n          url\n          alt\n          __typename\n        }\n        thumbnail2x: thumbnail(size: 510) {\n          url\n          __typename\n        }\n        category {\n          id\n          name\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      endCursor\n      hasNextPage\n      hasPreviousPage\n      startCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"query": "milk"}, "operationName": "SearchResults"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('products', $responseContent);
        
        if ($responseContent['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['products']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['edges']);
        
        $this->assertIsArray($responseContent['products']['edges']);
        
        for($g = 0; $g < count($responseContent['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]);
        
        $this->assertEquals('ProductCountableEdge' , $responseContent['products']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']);
        
        $this->assertEquals('Product' , $responseContent['products']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['products']['edges'][$g]['node']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['products']['edges'][$g]['node']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('category', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['category']) {
        
        $this->assertEquals('Category' , $responseContent['products']['edges'][$g]['node']['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['products']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}