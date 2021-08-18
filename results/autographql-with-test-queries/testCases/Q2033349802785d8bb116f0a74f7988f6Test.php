<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2033349802785d8bb116f0a74f7988f6Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        fragment Price on TaxedMoney {\n          gross {\n            amount\n            currency\n          }\n          net {\n            amount\n            currency\n          }\n        }\n\n        fragment ProductVariant on ProductVariant {\n          id\n          name\n          pricing {\n            onSale\n            priceUndiscounted {\n              ...Price\n            }\n            price {\n              ...Price\n            }\n          }\n          product {\n            id\n            name\n            thumbnail {\n              url\n              alt\n            }\n            thumbnail2x: thumbnail(size: 510) {\n              url\n            }\n          }\n        }\n\n        fragment CheckoutLine on CheckoutLine {\n          id\n          quantity\n          totalPrice {\n            ...Price\n          }\n          variant {\n            stockQuantity\n            ...ProductVariant\n          }\n          quantity\n        }\n\n        fragment Address on Address {\n          id\n          firstName\n          lastName\n          companyName\n          streetAddress1\n          streetAddress2\n          city\n          postalCode\n          country {\n            code\n            country\n          }\n          countryArea\n          phone\n          isDefaultBillingAddress\n          isDefaultShippingAddress\n        }\n\n        fragment ShippingMethod on ShippingMethod {\n          id\n          name\n          price {\n            currency\n            amount\n          }\n        }\n\n        fragment Checkout on Checkout {\n          availablePaymentGateways {\n            id\n            name\n            config {\n              field\n              value\n            }\n          }\n          token\n          id\n          totalPrice {\n            ...Price\n          }\n          subtotalPrice {\n            ...Price\n          }\n          billingAddress {\n            ...Address\n          }\n          shippingAddress {\n            ...Address\n          }\n          email\n          availableShippingMethods {\n            ...ShippingMethod\n          }\n          shippingMethod {\n            ...ShippingMethod\n          }\n          shippingPrice {\n            ...Price\n          }\n          lines {\n            ...CheckoutLine\n          }\n          isShippingRequired\n          discount {\n            currency\n            amount\n          }\n          discountName\n          translatedDiscountName\n          voucherCode\n        }\n\n        query UserCheckoutDetails {\n          me {\n            id\n            checkout {\n              ...Checkout\n            }\n          }\n        }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        if ($responseContent['me']) {
        
        $this->assertArrayHasKey('id', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['id']);
        
        $this->assertArrayHasKey('checkout', $responseContent['me']);
        
        if ($responseContent['me']['checkout']) {
        
        $this->assertArrayHasKey('availablePaymentGateways', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways']);
        
        $this->assertIsArray($responseContent['me']['checkout']['availablePaymentGateways']);
        
        for($g = 0; $g < count($responseContent['me']['checkout']['availablePaymentGateways']); $g++) {
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['availablePaymentGateways'][$g]['name']);
        
        $this->assertArrayHasKey('config', $responseContent['me']['checkout']['availablePaymentGateways'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config']);
        
        $this->assertIsArray($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config']);
        
        for($f = 0; $f < count($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config']); $f++) {
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        $this->assertArrayHasKey('field', $responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['field']);
        
        $this->assertIsString($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['field']);
        
        $this->assertArrayHasKey('value', $responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]);
        
        if ($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['value']) {
        
        $this->assertIsString($responseContent['me']['checkout']['availablePaymentGateways'][$g]['config'][$f]['value']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('token', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['token']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['id']);
        
        $this->assertArrayHasKey('totalPrice', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['totalPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['totalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['totalPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['totalPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['totalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['totalPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['totalPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['totalPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('subtotalPrice', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['subtotalPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['subtotalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['subtotalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['subtotalPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['subtotalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['subtotalPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['subtotalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['subtotalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['subtotalPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['subtotalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['subtotalPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['subtotalPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('billingAddress', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['billingAddress']) {
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['firstName']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['lastName']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['companyName']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['city']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['country']);
        
        $this->assertArrayHasKey('code', $responseContent['me']['checkout']['billingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['checkout']['billingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['me']['checkout']['billingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['billingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['me']['checkout']['billingAddress']);
        
        if ($responseContent['me']['checkout']['billingAddress']['phone']) {
        
        $this->assertIsString($responseContent['me']['checkout']['billingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['me']['checkout']['billingAddress']);
        
        if ($responseContent['me']['checkout']['billingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['billingAddress']['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['me']['checkout']['billingAddress']);
        
        if ($responseContent['me']['checkout']['billingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['billingAddress']['isDefaultShippingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('shippingAddress', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['shippingAddress']) {
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['id']);
        
        $this->assertArrayHasKey('firstName', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['firstName']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['lastName']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['companyName']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['city']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['city']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['postalCode']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['country']);
        
        $this->assertArrayHasKey('code', $responseContent['me']['checkout']['shippingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['country']['code']);
        
        $this->assertArrayHasKey('country', $responseContent['me']['checkout']['shippingAddress']['country']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['country']['country']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['country']['country']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['me']['checkout']['shippingAddress']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['me']['checkout']['shippingAddress']);
        
        if ($responseContent['me']['checkout']['shippingAddress']['phone']) {
        
        $this->assertIsString($responseContent['me']['checkout']['shippingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['me']['checkout']['shippingAddress']);
        
        if ($responseContent['me']['checkout']['shippingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['shippingAddress']['isDefaultBillingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['me']['checkout']['shippingAddress']);
        
        if ($responseContent['me']['checkout']['shippingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['shippingAddress']['isDefaultShippingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('email', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['email']);
        
        $this->assertIsString($responseContent['me']['checkout']['email']);
        
        $this->assertArrayHasKey('availableShippingMethods', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods']);
        
        $this->assertIsArray($responseContent['me']['checkout']['availableShippingMethods']);
        
        for($g = 0; $g < count($responseContent['me']['checkout']['availableShippingMethods']); $g++) {
        
        if ($responseContent['me']['checkout']['availableShippingMethods'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['availableShippingMethods'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['availableShippingMethods'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods'][$g]['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['availableShippingMethods'][$g]['name']);
        
        $this->assertArrayHasKey('price', $responseContent['me']['checkout']['availableShippingMethods'][$g]);
        
        if ($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']) {
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['availableShippingMethods'][$g]['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['availableShippingMethods'][$g]['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['availableShippingMethods'][$g]['price']['amount']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('shippingMethod', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['shippingMethod']) {
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['shippingMethod']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingMethod']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['shippingMethod']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingMethod']['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingMethod']['name']);
        
        $this->assertArrayHasKey('price', $responseContent['me']['checkout']['shippingMethod']);
        
        if ($responseContent['me']['checkout']['shippingMethod']['price']) {
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['shippingMethod']['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingMethod']['price']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingMethod']['price']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['shippingMethod']['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingMethod']['price']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['shippingMethod']['price']['amount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('shippingPrice', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['shippingPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['shippingPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['shippingPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['shippingPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['shippingPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['shippingPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['shippingPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['shippingPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['shippingPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['shippingPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('lines', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['lines']) {
        
        $this->assertIsArray($responseContent['me']['checkout']['lines']);
        
        for($g = 0; $g < count($responseContent['me']['checkout']['lines']); $g++) {
        
        if ($responseContent['me']['checkout']['lines'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['id']);
        
        $this->assertArrayHasKey('quantity', $responseContent['me']['checkout']['lines'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['quantity']);
        
        $this->assertIsInt($responseContent['me']['checkout']['lines'][$g]['quantity']);
        
        $this->assertArrayHasKey('totalPrice', $responseContent['me']['checkout']['lines'][$g]);
        
        if ($responseContent['me']['checkout']['lines'][$g]['totalPrice']) {
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['lines'][$g]['totalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['totalPrice']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['lines'][$g]['totalPrice']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['totalPrice']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('variant', $responseContent['me']['checkout']['lines'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['name']);
        
        $this->assertArrayHasKey('pricing', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']) {
        
        $this->assertArrayHasKey('onSale', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']) {
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['priceUndiscounted']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']) {
        
        $this->assertArrayHasKey('gross', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['pricing']['price']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('product', $responseContent['me']['checkout']['lines'][$g]['variant']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertArrayHasKey('id', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['name']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['me']['checkout']['lines'][$g]['variant']['product']);
        
        if ($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']) {
        
        $this->assertArrayHasKey('url', $responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['me']['checkout']['lines'][$g]['variant']['product']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('quantity', $responseContent['me']['checkout']['lines'][$g]);
        
        $this->assertNotNull($responseContent['me']['checkout']['lines'][$g]['quantity']);
        
        $this->assertIsInt($responseContent['me']['checkout']['lines'][$g]['quantity']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('isShippingRequired', $responseContent['me']['checkout']);
        
        $this->assertNotNull($responseContent['me']['checkout']['isShippingRequired']);
        
        $this->assertIsBool($responseContent['me']['checkout']['isShippingRequired']);
        
        $this->assertArrayHasKey('discount', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['discount']) {
        
        $this->assertArrayHasKey('currency', $responseContent['me']['checkout']['discount']);
        
        $this->assertNotNull($responseContent['me']['checkout']['discount']['currency']);
        
        $this->assertIsString($responseContent['me']['checkout']['discount']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['me']['checkout']['discount']);
        
        $this->assertNotNull($responseContent['me']['checkout']['discount']['amount']);
        
        $this->assertIsNumeric($responseContent['me']['checkout']['discount']['amount']);
        
        }
        
        $this->assertArrayHasKey('discountName', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['discountName']) {
        
        $this->assertIsString($responseContent['me']['checkout']['discountName']);
        
        }
        
        $this->assertArrayHasKey('translatedDiscountName', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['translatedDiscountName']) {
        
        $this->assertIsString($responseContent['me']['checkout']['translatedDiscountName']);
        
        }
        
        $this->assertArrayHasKey('voucherCode', $responseContent['me']['checkout']);
        
        if ($responseContent['me']['checkout']['voucherCode']) {
        
        $this->assertIsString($responseContent['me']['checkout']['voucherCode']);
        
        }
        
        }
        
        }
        

    }
}