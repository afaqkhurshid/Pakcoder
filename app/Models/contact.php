<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'service',
        'phone',
        'message',
        'ip_address'
    ];

    // Service options
    const SERVICES = [
        'web-development' => 'Web Development (Laravel/PHP)',
        'wordpress' => 'WordPress Development',
        'shopify' => 'Shopify/eCommerce',
        'ui-ux' => 'UI/UX Design',
        'digital-marketing' => 'Digital Marketing'
    ];

    public function getServiceNameAttribute()
    {
        return self::SERVICES[$this->service] ?? $this->service;
    }
}