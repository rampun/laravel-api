<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest; // removed because we need the same validation

// class UpdateTaskRequest extends FormRequest // removed because we need the same validation
class UpdateTaskRequest extends StoreTaskRequest
{
}
