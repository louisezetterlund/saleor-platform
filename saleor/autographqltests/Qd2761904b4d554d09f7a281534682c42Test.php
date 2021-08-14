<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd2761904b4d554d09f7a281534682c42Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query getValidator(\n        $country_code: CountryCode!, $country_area: String, $city_area: String) {\n        addressValidationRules(\n                countryCode: $country_code,\n                countryArea: $country_area,\n                cityArea: $city_area) {\n            countryCode\n            countryName\n            addressFormat\n            addressLatinFormat\n            postalCodeMatchers\n        }\n    }\n    ", "variables": {"country_code": "PL", "country_area": null, "city_area": null}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('addressValidationRules', $responseContent);
        
        if ($responseContent['addressValidationRules']) {
        
        $this->assertArrayHasKey('countryCode', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['countryCode']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['countryCode']);
        
        }
        
        $this->assertArrayHasKey('countryName', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['countryName']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['countryName']);
        
        }
        
        $this->assertArrayHasKey('addressFormat', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['addressFormat']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['addressFormat']);
        
        }
        
        $this->assertArrayHasKey('addressLatinFormat', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['addressLatinFormat']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['addressLatinFormat']);
        
        }
        
        $this->assertArrayHasKey('postalCodeMatchers', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['postalCodeMatchers']) {
        
        $this->assertIsArray($responseContent['addressValidationRules']['postalCodeMatchers']);
        
        for($g = 0; $g < count($responseContent['addressValidationRules']['postalCodeMatchers']); $g++) {
        
        if ($responseContent['addressValidationRules']['postalCodeMatchers'][$g]) {
        
        $this->assertIsString($responseContent['addressValidationRules']['postalCodeMatchers'][$g]);
        
        }
        
        }
        
        }
        
        }
        

    }
}