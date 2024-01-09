<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{

    public function run(): void
    {
        $suppliers = [

            [
                'name' => 'Abdul Karim',
                'company_name' => 'ABC',
                'email' => 'karim@abccompany.com',
                'phone' => '01792079657',
                'address' => 'Gulshan, Avenue - 01',
            ],
            [
                'name' => 'Azad',
                'company_name' => 'Azad Enterprise',
                'email' => 'azad@enterprise.com',
                'phone' => '01712546769',
                'address' => 'Motijeel',
            ],
        ];

        // Supplier::insert($suppliers);

    }
}
