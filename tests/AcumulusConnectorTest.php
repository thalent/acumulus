<?php

class AcumulusConnectorTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    /**
     * @test
     * @expectedException  Siegerhansma\AcumulusPhp\Exceptions\AcumulusException
     */
    public function it_should_fail_when_credentials_are_wrong()
    {
        $config = [
            'contractcode' => 123456,
            'username' => 'xxxxxxxxxxxxxxxxxxxx',
            'password' => 'xxxxxxxxxxxxxxxxxxxxxx'
        ];

        $contact = new \Siegerhansma\AcumulusPhp\Providers\ContactsProvider($config);
        $contact->getAvailableContacts([])->sendRequest();
    }

    /** @test
     *  @expectedException Siegerhansma\AcumulusPhp\Exceptions\NoConfigSuppliedException
     */
    public function it_should_fail_when_there_is_no_config()
    {
        $contact = new \Siegerhansma\AcumulusPhp\Providers\ContactsProvider([]);
        $contact->getAvailableContacts([])->sendRequest();
    }

    /**
     * @test
     * @expectedException Siegerhansma\AcumulusPhp\Exceptions\NoXmlPayloadSuppliedException
     */
    public function it_should_fail_when_there_is_no_payload()
    {
        $config = [
            'contractcode' => 123456,
            'username' => 'xxxxxxxxxxxxxxxxxxxx',
            'password' => 'xxxxxxxxxxxxxxxxxxxxxx'
        ];

        $invoice = '';

        $invoices = new \Siegerhansma\AcumulusPhp\Providers\InvoicesProvider($config);
        $invoices->addInvoice($invoice)->sendRequest();

    }

}
