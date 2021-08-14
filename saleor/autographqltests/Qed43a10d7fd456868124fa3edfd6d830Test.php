<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qed43a10d7fd456868124fa3edfd6d830Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query getShop {\n          shop {\n            defaultCountry {\n              code\n              country\n            }\n            countries {\n              country\n              code\n            }\n            geolocalization {\n              country {\n                code\n                country\n              }\n            }\n          }\n        }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('defaultCountry', $responseContent['shop']);
        
        if ($responseContent['shop']['defaultCountry']) {
        
        $this->assertArrayHasKey('code', $responseContent['shop']['defaultCountry']);
        
        $this->assertNotNull($responseContent['shop']['defaultCountry']['code']);
        
        $this->assertIsString($responseContent['shop']['defaultCountry']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['shop']['defaultCountry']);
        
        $this->assertNotNull($responseContent['shop']['defaultCountry']['country']);
        
        $this->assertIsString($responseContent['shop']['defaultCountry']['country']);
        
        }
        
        $this->assertArrayHasKey('countries', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['countries']);
        
        $this->assertIsArray($responseContent['shop']['countries']);
        
        for($g = 0; $g < count($responseContent['shop']['countries']); $g++) {
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]);
        
        $this->assertArrayHasKey('country', $responseContent['shop']['countries'][$g]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['country']);
        
        $this->assertIsString($responseContent['shop']['countries'][$g]['country']);
        
        $this->assertArrayHasKey('code', $responseContent['shop']['countries'][$g]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['code']);
        
        $this->assertIsString($responseContent['shop']['countries'][$g]['code']);
        
        }
        
        $this->assertArrayHasKey('geolocalization', $responseContent['shop']);
        
        if ($responseContent['shop']['geolocalization']) {
        
        $this->assertArrayHasKey('country', $responseContent['shop']['geolocalization']);
        
        if ($responseContent['shop']['geolocalization']['country']) {
        
        $this->assertArrayHasKey('code', $responseContent['shop']['geolocalization']['country']);
        
        $this->assertNotNull($responseContent['shop']['geolocalization']['country']['code']);
        
        $this->assertIsString($responseContent['shop']['geolocalization']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['shop']['geolocalization']['country']);
        
        $this->assertNotNull($responseContent['shop']['geolocalization']['country']['country']);
        
        $this->assertIsString($responseContent['shop']['geolocalization']['country']['country']);
        
        }
        
        }
        

    }
}