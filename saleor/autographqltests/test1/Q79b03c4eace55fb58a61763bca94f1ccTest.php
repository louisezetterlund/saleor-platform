<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q79b03c4eace55fb58a61763bca94f1ccTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery warehouse($id: ID!){\n    warehouse(id: $id) {\n        id\n        name\n        companyName\n        email\n        shippingZones(first: 100) {\n            edges {\n                node {\n                    name\n                    countries {\n                        country\n                    }\n                }\n            }\n        }\n        address {\n            streetAddress1\n            streetAddress2\n            postalCode\n            city\n            phone\n        }\n    }\n}\n", "variables": {"id": "V2FyZWhvdXNlOjgxZWZmYWZhLTJjMDEtNDRhOS1iZTVkLTBkNGU3ZGEyMDRiNw=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('warehouse', $responseContent);
        
        if ($responseContent['warehouse']) {
        
        $this->assertArrayHasKey('id', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['name']);
        
        $this->assertIsString($responseContent['warehouse']['name']);
        
        $this->assertArrayHasKey('companyName', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['companyName']);
        
        $this->assertIsString($responseContent['warehouse']['companyName']);
        
        $this->assertArrayHasKey('email', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['email']);
        
        $this->assertIsString($responseContent['warehouse']['email']);
        
        $this->assertArrayHasKey('shippingZones', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']);
        
        $this->assertArrayHasKey('edges', $responseContent['warehouse']['shippingZones']);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges']);
        
        $this->assertIsArray($responseContent['warehouse']['shippingZones']['edges']);
        
        for($g = 0; $g < count($responseContent['warehouse']['shippingZones']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['warehouse']['shippingZones']['edges'][$g]);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['warehouse']['shippingZones']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('countries', $responseContent['warehouse']['shippingZones']['edges'][$g]['node']);
        
        if ($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['countries']) {
        
        $this->assertIsArray($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['countries']);
        
        for($f = 0; $f < count($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['countries']); $f++) {
        
        if ($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['countries'][$f]) {
        
        $this->assertArrayHasKey('country', $responseContent['warehouse']['shippingZones']['edges'][$g]['node']['countries'][$f]);
        
        $this->assertNotNull($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['countries'][$f]['country']);
        
        $this->assertIsString($responseContent['warehouse']['shippingZones']['edges'][$g]['node']['countries'][$f]['country']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('address', $responseContent['warehouse']);
        
        $this->assertNotNull($responseContent['warehouse']['address']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['streetAddress1']);
        
        $this->assertIsString($responseContent['warehouse']['address']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['streetAddress2']);
        
        $this->assertIsString($responseContent['warehouse']['address']['streetAddress2']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['postalCode']);
        
        $this->assertIsString($responseContent['warehouse']['address']['postalCode']);
        
        $this->assertArrayHasKey('city', $responseContent['warehouse']['address']);
        
        $this->assertNotNull($responseContent['warehouse']['address']['city']);
        
        $this->assertIsString($responseContent['warehouse']['address']['city']);
        
        $this->assertArrayHasKey('phone', $responseContent['warehouse']['address']);
        
        if ($responseContent['warehouse']['address']['phone']) {
        
        $this->assertIsString($responseContent['warehouse']['address']['phone']);
        
        }
        
        }
        

    }
}