<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    const NAME = 'name';
    const BRANCH = 'branch';
    const YEAR_OF_PASSING = 'year_of_passing';
    const SKILLS = 'skills';
    const CERTIFICATIONS = 'certification';
    const TRAININGS = 'training';
    const INTERESTS = 'interests';




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
            self::NAME=>'required',
            self::BRANCH=>'required',
            self::YEAR_OF_PASSING=>'digits:4',
            self::SKILLS=>'',
            self::CERTIFICATIONS=>'',
            self::TRAININGS=>'',
            self::INTERESTS=>'',
        ];
    }
}
