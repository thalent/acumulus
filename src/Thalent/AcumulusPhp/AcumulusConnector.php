<?php
/**
 * Created by PhpStorm.
 * User: sieger
 * Date: 2-7-14
 * Time: 23:06
 */

namespace Thalent\AcumulusPhp;

use GuzzleHttp;
use Thalent\AcumulusPhp\Exceptions\NoConfigSuppliedException;
use Thalent\AcumulusPhp\Exceptions\NoXmlPayloadSuppliedException;

/**
 * @property GuzzleHttp\Client client
 */
abstract class AcumulusConnector
{
    /**
     * @var string
     */
    protected $apiUrl = 'https://api.sielsystems.nl/acumulus/stable/';
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;
    /**
     * @var XmlBuilder
     */
    protected $xml;

    /**
     * @var
     */
    protected $apiCall;
    /**
     * @var
     */
    protected $xmlPayload;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->client = new GuzzleHttp\Client(['base_uri' => $this->apiUrl]);
        $this->xml = new XmlBuilder;
        $this->config = $config;
    }

    /**
     * @param  bool                          $returnApiCall
     * @return array|mixed|null
     * @throws ConfigNotAnArrayException
     * @throws NoConfigSuppliedException
     * @throws NoXmlPayloadSuppliedException
     */
    public function sendRequest($returnApiCall = false)
    {
        // Some functions need to return the URL instead of send the request.
        if (preg_match('/invoice_get_pdf/', $this->apiCall)) {
            return $this->apiUrl . $this->apiCall;
        }

        if (empty($this->config)) {
            throw new NoConfigSuppliedException("There is no config supplied.");
        }

        if (empty($this->xmlPayload) and !is_null($this->xmlPayload)) {
            throw new NoXmlPayloadSuppliedException("There is no payload.");
        }

        $request = $this->client->post(
            $this->apiCall,
            [
                'form_params' => [
                    'xmlstring' => $this->xml->buildXML($this->xmlPayload, $this->config)
                ]
            ]);

        return $this->parseResponse($request);
    }

    /**
     * @param $response
     * @return array|mixed|null
     * @throws AcumulusException
     */
    private function parseResponse($response)
    {
        $parser = new ResponseParser($response);

        return $parser->parse();
    }
}
