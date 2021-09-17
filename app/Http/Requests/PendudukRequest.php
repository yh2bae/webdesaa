<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendudukRequest extends FormRequest
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
        $rules = [
            'nik'                               => ['required','digits:16'],
            'kk'                                => ['required','digits:16'],
            'nama'                              => ['required','string','max:64'],
            'jenis_kelamin'                     => ['required','numeric'],
            'tempat_lahir'                      => ['required','string','max:32'],
            'tanggal_lahir'                     => ['required','date','before:now'],
            'agama_id'                          => ['required','numeric'],
            'pendidikan_id'                     => ['nullable','numeric'],
            'pekerjaan_id'                      => ['nullable','numeric'],
            'darah_id'                          => ['nullable','numeric'],
            'status_perkawinan_id'              => ['required','numeric'],
            'status_hubungan_dalam_keluarga_id' => ['required','numeric'],
            'kewarganegaraan'                   => ['required','numeric'],
            'nomor_paspor'                      => ['nullable','numeric'],
            'nomor_kitas_atau_kitap'            => ['nullable','numeric'],
            'nik_ayah'                          => ['nullable','digits:16'],
            'nik_ibu'                           => ['nullable','digits:16'],
            'nama_ayah'                         => ['nullable','string','max:64'],
            'nama_ibu'                          => ['nullable','string','max:64'],
            'alamat'                            => ['nullable','string','max:191'],
        ];

        if ($this->dusun) {
            $rules['detail_dusun_id'] = ['required'];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'nik.required' => 'NIK wajib diisi',
            'nik.digits' =>  'NIK harus 16 digit',
            'kk.required' => 'KK wajib diisi',
            'kk.digits' =>  'KK harus 16 digit',
            'nama.required' => 'Nama wajib diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
            'kewarganegaraan.required' => 'Kewarganegaraan wajib diisi',
            'agama_id.required' => 'Agama wajib diisi',
            'detail_dusun_id.required' => 'RT/RW wajib diisi',
            'status_perkawinan_id.required' => 'Status perkawinan wajib diisi',
            'status_hubungan_dalam_keluarga_id.required' => 'Status hubungan dalam keluarga wajib diisi',
        ];
    }
}
