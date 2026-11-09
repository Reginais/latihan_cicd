<?php

namespace Tests\Feature;

use Tests\TestCase;

class HalamanTest extends TestCase
{
    public function test_halaman_utama_bisa_diakses(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_halaman_about_menampilkan_teks_yang_benar(): void
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('Demo CI/CD Laravel');
    }
}