<?php

class TableTest extends TestCase {

  public function testUserTable()
  {
    $this->assertTrue(Schema::hasTable('user'));
  }

  public function testPrivateMessageTable()
  {
    $this->assertTrue(Schema::hasTable('privateMessage'));
  }

  public function testProfileTable()
  {
    $this->assertTrue(Schema::hasTable('profile'));
  }

  public function testBetaRequestTable()
  {
    $this->assertTrue(Schema::hasTable('betaRequest'));

  }

}
