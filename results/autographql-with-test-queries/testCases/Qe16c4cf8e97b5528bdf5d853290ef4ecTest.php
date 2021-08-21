<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qe16c4cf8e97b5528bdf5d853290ef4ecTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n      query ($filter: OrderDraftFilterInput!, ) {\n        draftOrders(first: 5, filter:$filter) {\n          totalCount\n          edges {\n            node {\n              id\n            }\n          }\n        }\n      }\n    ", "variables": {"filter": {"customer": "admin"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('draftOrders', $responseContent);
        
        if ($responseContent['draftOrders']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['draftOrders']);
        
        if ($responseContent['draftOrders']['totalCount']) {
        
        $this->assertIsInt($responseContent['draftOrders']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['draftOrders']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges']);
        
        $this->assertIsArray($responseContent['draftOrders']['edges']);
        
        for($g = 0; $g < count($responseContent['draftOrders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['draftOrders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['id']);
        
        }
        
        }
        

    }
}