<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0eab597e3ff95f4e9f37abca0239e474Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery {\n    warehouses(first:100) {\n        totalCount\n        edges {\n            node {\n                id\n                name\n                companyName\n                email\n                shippingZones(first:100) {\n                    edges {\n                        node {\n                            name\n                            countries {\n                                country\n                            }\n                        }\n                    }\n                }\n                address {\n                    city\n                    postalCode\n                    country {\n                        country\n                    }\n                    phone\n                }\n            }\n        }\n    }\n}\n", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('warehouses', $responseContent);
        
        if ($responseContent['warehouses']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['warehouses']);
        
        if ($responseContent['warehouses']['totalCount']) {
        
        $this->assertIsInt($responseContent['warehouses']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['warehouses']);
        
        $this->assertNotNull($responseContent['warehouses']['edges']);
        
        $this->assertIsArray($responseContent['warehouses']['edges']);
        
        for($g = 0; $g < count($responseContent['warehouses']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['warehouses']['edges'][$g]);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('companyName', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['companyName']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['companyName']);
        
        $this->assertArrayHasKey('email', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['email']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['email']);
        
        $this->assertArrayHasKey('shippingZones', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']);
        
        $this->assertArrayHasKey('edges', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges']);
        
        $this->assertIsArray($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges']);
        
        for($f = 0; $f < count($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges']); $f++) {
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]);
        
        $this->assertArrayHasKey('node', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['name']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['name']);
        
        $this->assertArrayHasKey('countries', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']);
        
        if ($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['countries']) {
        
        $this->assertIsArray($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['countries']);
        
        for($e = 0; $e < count($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['countries']); $e++) {
        
        if ($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['countries'][$e]) {
        
        $this->assertArrayHasKey('country', $responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['countries'][$e]);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['countries'][$e]['country']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['shippingZones']['edges'][$f]['node']['countries'][$e]['country']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['warehouses']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['address']);
        
        $this->assertArrayHasKey('city', $responseContent['warehouses']['edges'][$g]['node']['address']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['address']['city']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['address']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['warehouses']['edges'][$g]['node']['address']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['address']['postalCode']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['address']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['warehouses']['edges'][$g]['node']['address']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['address']['country']);
        
        $this->assertArrayHasKey('country', $responseContent['warehouses']['edges'][$g]['node']['address']['country']);
        
        $this->assertNotNull($responseContent['warehouses']['edges'][$g]['node']['address']['country']['country']);
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['address']['country']['country']);
        
        $this->assertArrayHasKey('phone', $responseContent['warehouses']['edges'][$g]['node']['address']);
        
        if ($responseContent['warehouses']['edges'][$g]['node']['address']['phone']) {
        
        $this->assertIsString($responseContent['warehouses']['edges'][$g]['node']['address']['phone']);
        
        }
        
        }
        
        }
        

    }
}