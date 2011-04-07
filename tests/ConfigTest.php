<?php
/**
 * @package wsdl2phpTest
 */

/**
 * Include needed files
 */
require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__).'/../src/Config.php';

/**
 * Test class for Config.
 * Generated by PHPUnit on 2009-11-26 at 08:22:42.
 *
 * @package wsdl2phpTest
 */
class ConfigTest extends PHPUnit_Framework_TestCase
{
  /**
   * @var Wsdl2PhpConfig
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Config('inputFile.xml', '/tmp/output', false, true, true, true, 'myNamespace', array('SOAP_SINGLE_ELEMENT_ARRAYS'), 'WSDL_CACHE_BOTH', 'SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP', 'test,test2, test3', 'prefix', 'suffix');
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
  }

  /**
   * Test the getter
   */
  public function testGetNamespaceName()
  {
    $this->assertEquals('myNamespace', $this->object->getNamespaceName());
  }


  /**
   * Test the getter
   */
  public function testGetOneFile()
  {
    $this->assertTrue($this->object->getOneFile());
  }

  /**
   * Test the getter
   */
  public function testGetClassExists()
  {
    $this->assertTrue($this->object->getClassExists());
  }

  /**
   * Test the getter
   */
  public function testGetOutputDir()
  {
    $this->assertNotEquals('/tmp/output', $this->object->getOutputDir());
    $this->assertEquals('/tmp/output/', $this->object->getOutputDir());
  }

  /**
   * Test the getter
   */
  public function testGetInputFile()
  {
    $this->assertEquals('inputFile.xml', $this->object->getInputFile());
  }

  /**
   * Test the getter
   */
  public function testGetOptionFeatures()
  {
    $options = $this->object->getOptionFeatures();

    $this->assertContains('SOAP_SINGLE_ELEMENT_ARRAYS', $options);
    $this->assertNotContains('', $options);
    $this->assertNotContains('test', $options);
    $this->assertNotContains('SOAP_WAIT_ONE_WAY_CALLS', $options);
  }

  /**
   * Test the getter
   */
  public function testGetWsdlCache()
  {
    $this->assertNotEquals('', $this->object->getWsdlCache());
    $this->assertEquals('WSDL_CACHE_BOTH', $this->object->getWsdlCache());
  }

  /**
   * Test the getter
   */
  public function testGetCompression()
  {
    $this->assertEquals('SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP', $this->object->getCompression());
  }

  /**
   * Test the getter
   */
  public function testGetClassNames()
  {
    $this->assertNotEquals('', $this->object->getClassNames());
    $this->assertEquals('test,test2, test3', $this->object->getClassNames());
  }

  /**
   * Test the getter
   */
  public function testGetClassNamesArray()
  {
    $this->assertContains('test', $this->object->getClassNamesArray());
    $this->assertContains('test2', $this->object->getClassNamesArray());
    $this->assertContains('test3', $this->object->getClassNamesArray());

    $this->object = new Config('', '');
    $this->assertEquals(0, count($this->object->getClassNamesArray()));

    $this->object = new Config('inputFile.xml', '/tmp/output', false, true, true, true, 'myNamespace', array('SOAP_SINGLE_ELEMENT_ARRAYS'), 'WSDL_CACHE_BOTH', 'SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP', 'test');
    $this->assertContains('test', $this->object->getClassNamesArray());
  }

  /**
   * Test the getter
   */
  public function testGetNoTypeConstructor()
  {
    $this->assertTrue($this->object->getNoTypeConstructor());
  }

  /**
   * Test the getter
   */
  public function testGetVerbose()
  {
    $this->assertFalse($this->object->getVerbose());
  }

  /**
   * Test the getter
   */
  public function testGetPrefix()
  {
    $this->assertEquals('prefix', $this->object->getPrefix());
  }

  /**
   * Test the getter
   */
  public function testGetSuffix()
  {
    $this->assertEquals('suffix', $this->object->getSuffix());
  }
}
?>

