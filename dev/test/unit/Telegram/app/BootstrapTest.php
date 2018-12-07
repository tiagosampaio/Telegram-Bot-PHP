<?php

declare(strict_types = 1);

namespace TelegramTest\app;

use TelegramTest\TestCase;

/**
 * Class Bootstrap
 *
 * @package TelegramTest\app
 */
class BootstrapTest extends TestCase
{
    protected function setUp()
    {
        require_once __DIR__ . '/../../../../../src/app/bootstrap.php';
    }
    
    /**
     * @test
     */
    public function definitions()
    {
        $this->assertEquals(true, defined('TELEGRAM_DIR_ROOT'));
        $this->assertEquals(true, defined('TELEGRAM_DIR_SOURCE'));
        $this->assertEquals(true, defined('TELEGRAM_DIR_DI_CONFIG'));
    }
}
