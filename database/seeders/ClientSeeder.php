<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientsDir = public_path('clients');

        if (! File::exists($clientsDir)) {
            return;
        }

        $files = File::files($clientsDir);

        foreach ($files as $file) {
            $filename = $file->getFilename();
            $extension = strtolower($file->getExtension());

            if (in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                Client::updateOrCreate(
                    ['image' => 'clients/'.$filename],
                    ['is_active' => true]
                );
            }
        }
    }
}
