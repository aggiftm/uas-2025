<?php

namespace Database\Seeders;

use App\Models\Summary;
use Illuminate\Database\Seeder;

class SummarySeeder extends Seeder
{
    public function run(): void
    {
        Summary::updateOrCreate(
            ['api_token' => 'summary123'],
            [
                'projects_ongoing'   => 5,
                'projects_completed' => 12,
                'projects_pending'   => 3,
                'revenue_total'      => 350000000,
                'revenue_this_month' => 75000000,
                'clients_total'      => 20,
                'clients_new_month'  => 3,
            ]
        );
    }
}