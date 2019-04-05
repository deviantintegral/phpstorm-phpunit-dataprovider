<?php

namespace Deviantintegral\Tests\PhpStormPhpUnitDataProvider;

use Deviantintegral\PhpStormPhpUnitDataProvider\ReturnsTrue;
use PHPUnit\Framework\TestCase;

class ReturnsTrueTest extends TestCase {

  /**
   * @dataProvider provider
   */
  public function testF(bool $data) {
    $r = new ReturnsTrue();
    $this->assertEquals($data, $r->f());
  }

  public function provider() {
    return [
      [true],
      [false],
    ];
  }

}
