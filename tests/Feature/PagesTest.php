<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function public_pages_return_200()
    {
        $publicRouteNames = [
            'home',
            'about',
            'about.what',
            'about.why',
            'about.how',
            'about.practice',
            'education',
            'business',
            'team',
        ];

        foreach ($publicRouteNames as $name) {
            $this->assertTrue(
                \Route::has($name),
                "Route [{$name}] is not defined."
            );

            $response = $this->get(route($name));
            $response->assertOk();
        }
    }

    /** @test */
    public function root_redirects_correctly()
    {
        $this->get(route('main'))->assertRedirect();
    }

    /** @test */
    public function protected_pages_redirect_guests()
    {
        $protectedRouteNames = [
            'dashboard',
            'profile',
            'session.start',
            'session.startsession',
            'session.stopsession',
            'session.results',
            'tips',
            'export',
            'export.new',
            'result.list',
        ];

        foreach ($protectedRouteNames as $name) {
            $this->assertTrue(
                \Route::has($name),
                "Route [{$name}] is not defined."
            );

            $response = $this->get(route($name));
            $response->assertRedirect(route('login'));
        }
    }

    /** @test */
    public function authenticated_users_can_access_protected_pages()
    {
        $user = User::factory()->create();

        $protectedRouteNames = [
            'dashboard',
            'profile',
            'session.start',
            'session.startsession',
            'session.stopsession',
            'session.results',
            'tips',
            'export',
            'export.new',
            'result.list',
        ];

        foreach ($protectedRouteNames as $name) {
            $this->assertTrue(
                \Route::has($name),
                "Route [{$name}] is not defined."
            );

            $response = $this
                ->actingAs($user)
                ->get(route($name));

            $response->assertSuccessful();
        }
    }

    /** @test */
    public function post_routes_redirect_guests()
    {
        $postRoutes = [
            'session.startsetup',
        ];

        foreach ($postRoutes as $name) {
            $this->assertTrue(
                \Route::has($name),
                "Route [{$name}] is not defined."
            );

            $response = $this->post(route($name));
            $response->assertRedirect(route('login'));
        }
    }

    /** @test */
    public function authenticated_users_can_post_to_protected_routes()
    {
        $user = User::factory()->create();

        // Fake all outbound HTTP calls (fixes cURL error 7)
        Http::fake([
            '*' => Http::response(['success' => true], 200),
        ]);

        $postRoutes = [
            'session.startsetup',
        ];

        foreach ($postRoutes as $name) {
            $this->assertTrue(
                \Route::has($name),
                "Route [{$name}] is not defined."
            );

            $response = $this
                ->actingAs($user)
                ->post(route($name), [
                    // add required payload if controller validates input
                ]);

            // Accept either OK or redirect (controller-dependent)
            $response->assertStatus(
                in_array($response->getStatusCode(), [200, 302])
                    ? $response->getStatusCode()
                    : 200
            );
        }
    }
}
