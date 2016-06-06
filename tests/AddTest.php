<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/add')
             ->type('Belajar Laravel', 'judul')
             ->attach($absolutePathToFile, 'gambar')
             ->type('Cara Membuat CRUD di Laravel 5.2', 'isi')
             ->press('Submit')
             ->seePageIs('/');
    }
}
