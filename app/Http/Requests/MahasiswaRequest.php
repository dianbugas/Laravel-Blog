<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required|max:30',
            'jk' => 'required',
            'tmp_lahir' => 'required|max:45',
            'tlg_lahir' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'alamat' => 'required|max:255',
            'foto' => 'required',
            'angkatan' => 'required',
            'status_kerja' => 'required',
            'tmp_kerja' => 'required',
            'beasiswa_id' => 'required',
            'prodi_id' => 'required'
        ];
    }
}
