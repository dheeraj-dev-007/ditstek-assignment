<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class CsvImportRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'csv_file' => ['required', 'file', 'mimetypes:text/plain']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}