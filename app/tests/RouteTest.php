<?php

class RouteTest extends TestCase {

  /**
  * A basic functional test example.
  *
  * @return void
  */
  public function testGetHomePage()
  {
    $crawler = $this->client->request('GET', '/');
    $this->assertTrue($this->client->getResponse()->isOk());
  }

  public function testGetUserPages()
  {
    $crawler = $this->client->request('GET', '/user');
    $crawler1 = $this->client->request('GET', '/user/1');
    $this->assertTrue($this->client->getResponse()->isOk());
  }

  public function testGetSettingsPage()
  {
    $crawler = $this->client->request('GET', '/settings');
    $this->assertTrue($this->client->getResponse()->isOk());
  }

}
