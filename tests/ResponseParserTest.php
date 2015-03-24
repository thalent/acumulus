<?php

class ResponseParserTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    /** @test */
    public function it_returns_a_string_when_string_is_input()
    {
        $mock = Mockery::mock('GuzzleHttp\Message\Response')
            ->shouldReceive('json')
            ->once()
            ->andReturn('this is a string')
            ->getMock();

        $parser = new \Siegerhansma\AcumulusPhp\ResponseParser($mock);

        $this->assertEquals('this is a string', $parser->parse());
    }

    /**
     * @test
     *
     * @expectedException  Siegerhansma\AcumulusPhp\Exceptions\AcumulusException
     */
    public function it_throws_an_exception_when_error_from_acumulus()
    {
        $response = '{
    "errors": {
        "count_errors": "0"
    },
    "warnings": {
        "warning": {
            "code": "502",
            "codetag": "EMPTYG5FG",
            "message": "Warning - No data - We tried but based on you request we could not find any available contact data."
        },
        "count_warnings": "1"
    },
    "status": "2"
}';

        $mock = Mockery::mock('GuzzleHttp\Message\Response')
            ->shouldReceive('json')
            ->once()
            ->andReturn(json_decode($response, true))
            ->getMock();
        $parser = new \Siegerhansma\AcumulusPhp\ResponseParser($mock);
        $parser->parse();
    }

    /** @test */
    public function it_should_pick_the_right_model()
    {
        $response = array(
            'contacts' => array(
                'contact' => array(
                    'contactid' => 'value'
                ),
                'contact' => array(
                    'contactid' => 'another value'
                )
            ),
            'status' => 0
        );
        $mock = Mockery::mock('GuzzleHttp\Message\Response')
            ->shouldReceive('json')
            ->once()
            ->andReturn($response)
            ->getMock();

        $parser = new \Siegerhansma\AcumulusPhp\ResponseParser($mock);
        $parseClass = $parser->parse();

        $this->assertInstanceOf('Siegerhansma\AcumulusPhp\Models\Contact', $parseClass);
    }

    /** @test */
    public function it_should_return_an_array_of_contacts()
    {
        $response = file_get_contents(__DIR__ . '/stubs/contacts.txt');

        $mock = Mockery::mock('GuzzleHttp\Message\Response')
            ->shouldReceive('json')
            ->once()
            ->andReturn(json_decode($response, true))
            ->getMock();

        $parser = new \Siegerhansma\AcumulusPhp\ResponseParser($mock);
        $parsedArray = $parser->parse();

        $this->assertCount(3, $parsedArray);
    }

    /** @test */
    public function it_should_return_a_single_contact()
    {
        $response = file_get_contents(__DIR__ . '/stubs/contact.txt');

        $mock = Mockery::mock('GuzzleHttp\Message\Response')
            ->shouldReceive('json')
            ->once()
            ->andReturn(json_decode($response, true))
            ->getMock();

        $parser = new \Siegerhansma\AcumulusPhp\ResponseParser($mock);
        $parsedArray = $parser->parse();

        $this->assertInstanceOf('Siegerhansma\AcumulusPhp\Models\Contact', $parsedArray);
        $this->assertEquals("123456", $parsedArray->getContactid());
        $this->assertEquals("joe@example.com", $parsedArray->getContactemail());
        $this->assertEquals("Address 1", $parsedArray->getContactaddress1());
    }

    /** @test */
    public function it_should_return_null_when_there_is_no_contact()
    {
        // TODO
    }

}
