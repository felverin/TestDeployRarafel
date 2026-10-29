<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_home_about_and_contact_pages_are_available(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Hello, I’m')
            ->assertSee('Projects');

        $this->get(route('about'))
            ->assertRedirect(route('projects'));

        $this->get(route('projects'))
            ->assertOk()
            ->assertSee('Project title')
            ->assertSee('Project code')
            ->assertSee('Course')
            ->assertSee('Calculator')
            ->assertSee('PRJ-001')
            ->assertSee('Programming')
            ->assertSee('Pet Shop')
            ->assertDontSee('Lorem ipsum');

        $this->get(route('contact'))
            ->assertOk()
            ->assertSee('Let’s connect.');
    }

    public function test_frame_component_renders_its_blade_props_and_slot(): void
    {
        $this->withViewErrors([]);

        $html = Blade::render(
            '<x-frame title="Project record" maintitle="My projects" tagline="Learning journey"><p>Frame content</p></x-frame>'
        );

        $this->assertStringContainsString('<title>Project record ·', $html);
        $this->assertStringContainsString('<h1>My projects</h1>', $html);
        $this->assertStringContainsString('<h2>Learning journey</h2>', $html);
        $this->assertStringContainsString('<p>Frame content</p>', $html);
        $this->assertStringNotContainsString('@yield', $html);
    }

    public function test_project_page_shows_each_project_field(): void
    {
        $this->get(route('projects'))
            ->assertOk()
            ->assertSee('Student Management')
            ->assertSee('PRJ-003')
            ->assertSee('Information Systems')
            ->assertSee('POS Restaurant')
            ->assertSee('PRJ-004')
            ->assertSee('Software Development');
    }
}
