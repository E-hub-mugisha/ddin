<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;
    protected $fillable = [
        'names',
        'nid',
        'gender',
        'phone',
        'email',
        'status',
        'education',
        'nextKinNames',
        'nextKinPhone',
        'province',
        'district',
        'sector',
        'cell',
        'village',
        'isibo',
        'businessNames',
        'tinNumber',
        'businessCategory',
        'services',
        'userImg',
        'id_doc',
        'rdb_certificate',
        'certificateOfResidence',
        'CriminalRecordCertificate',
        'terms',
        'acceptance'
    ];
}
