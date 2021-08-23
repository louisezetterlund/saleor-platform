<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qa2a7b5559ace5df298fb3a93d870ff68Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nfragment ProductTypeFragment on ProductType {\n  id\n  name\n  hasVariants\n  isShippingRequired\n  taxType {\n    description\n    taxCode\n    __typename\n  }\n  __typename\n}\n\nquery ProductTypeList($after: String, $before: String, $first: Int, $last: Int, $filter: ProductTypeFilterInput, $sort: ProductTypeSortingInput) {\n  productTypes(after: $after, before: $before, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...ProductTypeFragment\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 100, "filter": {"search": "m"}, "sort": {"direction": "ASC", "field": "NAME"}}, "operationName": "ProductTypeList"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productTypes', $responseContent);
        
        if ($responseContent['productTypes']) {
        
        $this->assertEquals('ProductTypeCountableConnection' , $responseContent['productTypes']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['productTypes']);
        
        $this->assertNotNull($responseContent['productTypes']['edges']);
        
        $this->assertIsArray($responseContent['productTypes']['edges']);
        
        for($g = 0; $g < count($responseContent['productTypes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]);
        
        $this->assertEquals('ProductTypeCountableEdge' , $responseContent['productTypes']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['productTypes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertEquals('ProductType' , $responseContent['productTypes']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('hasVariants', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['hasVariants']);
        
        $this->assertIsBool($responseContent['productTypes']['edges'][$g]['node']['hasVariants']);
        
        $this->assertArrayHasKey('isShippingRequired', $responseContent['productTypes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productTypes']['edges'][$g]['node']['isShippingRequired']);
        
        $this->assertIsBool($responseContent['productTypes']['edges'][$g]['node']['isShippingRequired']);
        
        $this->assertArrayHasKey('taxType', $responseContent['productTypes']['edges'][$g]['node']);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['taxType']) {
        
        $this->assertEquals('TaxType' , $responseContent['productTypes']['edges'][$g]['node']['taxType']['__typename']);
        
        $this->assertArrayHasKey('description', $responseContent['productTypes']['edges'][$g]['node']['taxType']);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['taxType']['description']) {
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['taxType']['description']);
        
        }
        
        $this->assertArrayHasKey('taxCode', $responseContent['productTypes']['edges'][$g]['node']['taxType']);
        
        if ($responseContent['productTypes']['edges'][$g]['node']['taxType']['taxCode']) {
        
        $this->assertIsString($responseContent['productTypes']['edges'][$g]['node']['taxType']['taxCode']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['productTypes']);
        
        $this->assertNotNull($responseContent['productTypes']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['productTypes']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['productTypes']['pageInfo']);
        
        if ($responseContent['productTypes']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['productTypes']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['productTypes']['pageInfo']);
        
        $this->assertNotNull($responseContent['productTypes']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['productTypes']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['productTypes']['pageInfo']);
        
        $this->assertNotNull($responseContent['productTypes']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['productTypes']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['productTypes']['pageInfo']);
        
        if ($responseContent['productTypes']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['productTypes']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}