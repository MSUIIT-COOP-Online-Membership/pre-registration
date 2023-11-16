<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $fillable = [
        'lname',
        'mname',
        'fname',
        'suffix',
        'sex',
        'civil_status',
        'dob',
        'age',
        'tel_no',
        'mobile_no',
        'religion',
        'email',
        'place_birth',
        'present_address',
        'duration_residency',
        'living_parents',
        'house',
        'house_month',
        'lot',
        'lot_month',
        'tin',
        'educational_attainment',
        'img',
        'emp_stat',
        'emp_type',
        'profession',
        'emp_others',
        'business_type',
        'asset_size',
        'employer_name',
        'service_length',
        'employer_status',
        'employer_address',
        'employer_contact',
        'monthly_salary',
        'business_name',
        'business_tin',
        'business_address',
        'business_contact',
        'op_duration_year',
        'op_duration_month',
        'no_workers',
        'yearly_income',
        'source_income',
        'monthly_income',
        'father_fname',
        'father_mname',
        'father_lname',
        'father_suffix',
        'father_dob',
        'father_age',
        'father_contact',
        'father_occu',
        'mother_fname',
        'mother_mname',
        'mother_lname',
        'mother_suffix',
        'mother_dob',
        'mother_age',
        'mother_contact',
        'mother_occu',
        'spouse_fname',
        'spouse_mname',
        'spouse_lname',
        'spouse_suffix',
        'spouse_dob',
        'spouse_age',
        'spouse_contact',
        'spouse_occu',
        'spouse_emp_name',
        'spouse_emp_stat',
        'spouse_monthly_income',
        'no_child',
        'no_child_contrib',
        'total_monthly_contrib',
        'no_child_work',
        'no_child_study',
        'no_child_notstudy',
        'house_yearly_income',
        'emer_name',
        'emer_contact',
        'emer_address',
        'e_signature',
        'app_date',
    ];
}
