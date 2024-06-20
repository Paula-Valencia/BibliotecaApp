<?php

// tests/Feature/BibliotecaTest.php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Biblioteca;

class BibliotecaTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_puede_crear_biblioteca()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/bibliotecas', [
            'nombre' => 'Biblioteca de Prueba',
            'ubicacion' => 'Ubicación de Prueba',
            'descripcion' => 'Descripción de Prueba'
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('bibliotecas', ['nombre' => 'Biblioteca de Prueba']);
    }
}

