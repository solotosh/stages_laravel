<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class RecoverPdfPassword implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function handle()
    {
        // Define a list of possible passwords (dictionary or brute-force)
        $passwords = $this->generatePasswordList();

        // Attempt to decrypt the PDF
        $outputFile = storage_path('app/' . $this->filePath . '_decrypted.pdf');
        $decrypted = false;
        $foundPassword = null;

        foreach ($passwords as $password) {
            $password = trim($password); // Remove extra spaces
            $command = "qpdf --password=$password --decrypt " . storage_path('app/' . $this->filePath) . " $outputFile 2>&1";
            exec($command, $output, $returnVar);

            if ($returnVar === 0) {
                $decrypted = true;
                $foundPassword = $password;
                break;
            }
        }

        // Save the result
        if ($decrypted) {
            Storage::put('recovery_results.txt', "Password found: $foundPassword");
        } else {
            Storage::put('recovery_results.txt', "No matching password found.");
        }

        // Clean up the uploaded file
        Storage::delete($this->filePath);
    }

    // Generate a list of possible passwords (brute-force or dictionary)
    private function generatePasswordList()
    {
        // Example: A simple dictionary of possible passwords
        $dictionary = [
            'password',
            '123456',
            'qwerty',
            'letmein',
            'admin',
            '12345678',
            '1234',
            'test',
            'temp',
            '12345',
        ];

        // Add numeric passwords (e.g., 0000 to 9999)
        for ($i = 0; $i < 10000; $i++) {
            $dictionary[] = str_pad($i, 4, '0', STR_PAD_LEFT);
        }

        return $dictionary;
    }
}