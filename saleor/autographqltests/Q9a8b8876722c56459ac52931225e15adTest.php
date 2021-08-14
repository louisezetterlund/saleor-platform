<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q9a8b8876722c56459ac52931225e15adTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query getValidator(\n        $country_code: CountryCode!) {\n        addressValidationRules(countryCode: $country_code) {\n            requiredFields\n            allowedFields\n        }\n    }\n    ", "variables": {"country_code": "PL"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('addressValidationRules', $responseContent);
        
        if ($responseContent['addressValidationRules']) {
        
        $this->assertArrayHasKey('requiredFields', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['requiredFields']) {
        
        $this->assertIsArray($responseContent['addressValidationRules']['requiredFields']);
        
        for($g = 0; $g < count($responseContent['addressValidationRules']['requiredFields']); $g++) {
        
        if ($responseContent['addressValidationRules']['requiredFields'][$g]) {
        
        $this->assertIsString($responseContent['addressValidationRules']['requiredFields'][$g]);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('allowedFields', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['allowedFields']) {
        
        $this->assertIsArray($responseContent['addressValidationRules']['allowedFields']);
        
        for($g = 0; $g < count($responseContent['addressValidationRules']['allowedFields']); $g++) {
        
        if ($responseContent['addressValidationRules']['allowedFields'][$g]) {
        
        $this->assertIsString($responseContent['addressValidationRules']['allowedFields'][$g]);
        
        }
        
        }
        
        }
        
        }
        

    }
}