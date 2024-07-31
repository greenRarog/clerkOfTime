<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Timeschema;

class TimeschemaTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function can_get_all_timeschema()
    {
        $timeschema = Timeschema::factory()->create();
        $response = $this->getJson(route("api.timeschema.index"));
        $response->assertOk();
        $response->assertJson([
            "data" => [
                "id"        => $timeschema->id,
                "date"      => $timeschema->date,
                "start"     => $timeschema->start,
                "end"       => $timeschema->end,
                "value"     => $timeschema->value,
                "separator" => $timeschema->separator,
            ]
        ]);
    }
}
