<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa3a902405cae5ffca0e1779b4c0fa6d1Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment WarehouseFragment on Warehouse {\n  id\n  name\n  __typename\n}\n\nfragment WarehouseWithShippingFragment on Warehouse {\n  ...WarehouseFragment\n  shippingZones(first: 100) {\n    edges {\n      node {\n        id\n        name\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery WarehouseList($first: Int, $after: String, $last: Int, $before: String, $filter: WarehouseFilterInput, $sort: WarehouseSortingInput) {\n  warehouses(before: $before, after: $after, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...WarehouseWithShippingFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 100, "filter": {"search": "d"}, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "WarehouseList"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('warehouses', $responseContent);
        
        if ($responseContent['warehouses']) {
        
        $this->assertEquals('WarehouseCountableConnection' , $responseContent['warehouses']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['warehouses']);
        
        $this->assertNotNull($responseContent['warehouses']['edges']);
        
        $this->assertIsArray($responseContent['warehouses']['edges']);
        
        for($g = 0; $g < count($responseContent['warehouses']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]);
        
        $this->assertEquals('WarehouseCountableEdge' , $responseContent['warehouses']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['warehouses']['edges'][$g]);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertEquals('Warehouse' , $responseContent['warehouses']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('shippingZones', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']);
        
        $this->assertEquals('ShippingZoneCountableConnection' , $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges']);
        
        $this->assertIsArray($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges']);
        
        for($f = 0; $f < count($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges']); $f++) {
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]);
        
        $this->assertEquals('ShippingZoneCountableEdge' , $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']);
        
        $this->assertEquals('ShippingZone' , $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['name']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['warehouses']);
        
        $this->assertNotNull($responseContent['warehouses']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['warehouses']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['warehouses']['pageInfo']);
        
        if ($responseContent['warehouses']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['warehouses']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['warehouses']['pageInfo']);
        
        $this->assertNotNull($responseContent['warehouses']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['warehouses']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['warehouses']['pageInfo']);
        
        $this->assertNotNull($responseContent['warehouses']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['warehouses']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['warehouses']['pageInfo']);
        
        if ($responseContent['warehouses']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['warehouses']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}