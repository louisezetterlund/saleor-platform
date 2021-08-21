<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6b1c2dc648da598d8e4d71be736eb1efTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        shop {\n            countries {\n                code\n                vat {\n                    standardRate\n                    reducedRates {\n                        rate\n                        rateType\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('countries', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['countries']);
        
        $this->assertIsArray($responseContent['shop']['countries']);
        
        for($g = 0; $g < count($responseContent['shop']['countries']); $g++) {
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]);
        
        $this->assertArrayHasKey('code', $responseContent['shop']['countries'][$g]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['code']);
        
        $this->assertIsString($responseContent['shop']['countries'][$g]['code']);
        
        $this->assertArrayHasKey('vat', $responseContent['shop']['countries'][$g]);
        
        if ($responseContent['shop']['countries'][$g]['vat']) {
        
        $this->assertArrayHasKey('standardRate', $responseContent['shop']['countries'][$g]['vat']);
        
        if ($responseContent['shop']['countries'][$g]['vat']['standardRate']) {
        
        $this->assertIsNumeric($responseContent['shop']['countries'][$g]['vat']['standardRate']);
        
        }
        
        $this->assertArrayHasKey('reducedRates', $responseContent['shop']['countries'][$g]['vat']);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['vat']['reducedRates']);
        
        $this->assertIsArray($responseContent['shop']['countries'][$g]['vat']['reducedRates']);
        
        for($f = 0; $f < count($responseContent['shop']['countries'][$g]['vat']['reducedRates']); $f++) {
        
        if ($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]) {
        
        $this->assertArrayHasKey('rate', $responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['rate']);
        
        $this->assertIsNumeric($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['rate']);
        
        $this->assertArrayHasKey('rateType', $responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]);
        
        $this->assertNotNull($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['rateType']);
        
        $this->assertContains($responseContent['shop']['countries'][$g]['vat']['reducedRates'][$f]['rateType'], ['ACCOMMODATION', 'ADMISSION_TO_CULTURAL_EVENTS', 'ADMISSION_TO_ENTERTAINMENT_EVENTS', 'ADMISSION_TO_SPORTING_EVENTS', 'ADVERTISING', 'AGRICULTURAL_SUPPLIES', 'BABY_FOODSTUFFS', 'BIKES', 'BOOKS', 'CHILDRENS_CLOTHING', 'DOMESTIC_FUEL', 'DOMESTIC_SERVICES', 'E_BOOKS', 'FOODSTUFFS', 'HOTELS', 'MEDICAL', 'NEWSPAPERS', 'PASSENGER_TRANSPORT', 'PHARMACEUTICALS', 'PROPERTY_RENOVATIONS', 'RESTAURANTS', 'SOCIAL_HOUSING', 'STANDARD', 'WATER', 'WINE']);
        
        }
        
        }
        
        }
        
        }
        

    }
}