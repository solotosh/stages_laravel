<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Jobs\RecoverPdfPassword;
class PdfDecryptController extends Controller
{

    public function showForm()
    {
        return view('upload');
    }

    public function recoverPassword(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:2048', // Max 2MB file
        ]);
    
        // Save the uploaded file
        $uploadedFile = $request->file('pdf_file');
        $filePath = $uploadedFile->store('uploads');
    
        // Dispatch the job
        RecoverPdfPassword::dispatch($filePath);
    
        // Return a response
        return response()->json([
            'success' => true,
            'message' => 'Password recovery process started. Check back later for results.',
        ]);
    }


    public function decrypt(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:2048', // Max 2MB file
            'passwords' => 'required|string', // Comma-separated passwords
        ]);

        // Save the uploaded file
        $uploadedFile = $request->file('pdf_file');
        $filePath = $uploadedFile->store('uploads');

        // Get the list of passwords
        $passwords = explode(',', $request->input('passwords'));

        // Attempt to decrypt the PDF
        $outputFile = storage_path('app/' . $filePath . '_decrypted.pdf');
        $decrypted = false;
        $foundPassword = null;

        foreach ($passwords as $password) {
            $password = trim($password); // Remove extra spaces
            $command = "qpdf --password=$password --decrypt " . storage_path('app/' . $filePath) . " $outputFile 2>&1";
            exec($command, $output, $returnVar);

            if ($returnVar === 0) {
                $decrypted = true;
                $foundPassword = $password;
                break;
            }
        }

        // Return the result
        if ($decrypted) {
            return response()->json([
                'success' => true,
                'message' => 'PDF decrypted successfully!',
                'password' => $foundPassword,
                'decrypted_file' => basename($outputFile),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to decrypt PDF. No matching password found.',
            ], 400);
        }
    }







}
