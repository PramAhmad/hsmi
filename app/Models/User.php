<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Jeffgreco13\FilamentBreezy\Traits\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements  HasAvatar, MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, TwoFactorAuthenticatable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_url',
        'social_media',
        'bio',
        'position',
        'fun_fact',
        'hobby',
        'phone',
        'nim',
        'semester',
        'angkatan',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'social_media' => 'array',
        ];
        
    }

    // public function getFilamentAvatarUrl(): ?string
    // {
    //     return asset($this->avatar_url);
    // }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->avatar_url 
            ? Storage::url($this->avatar_url)
            : "https://ui-avatars.com/api/?name=" . urlencode($this->name) . "&background=0ea5e9&color=ffffff";
    }

    // Helper methods untuk social media
    public function getSocialMediaByPlatform($platform)
    {
        if (!$this->social_media) return null;
        
        $socialMedia = collect($this->social_media)->firstWhere('platform', $platform);
        return $socialMedia['url'] ?? null;
    }
public function getFormattedSocialMedia()
{
    if (!$this->social_media) return collect([]);
    
    return collect($this->social_media)->map(function ($item) {
        return [
            'platform' => $item['platform'],
            'url' => $item['url'],
            'icon' => $this->getSocialIcon($item['platform'])
        ];
    });
}

    private function getSocialIcon($platform)
    {
        $icons = [
            'instagram' => 'fa-brands fa-instagram',
            'linkedin' => 'fa-brands fa-linkedin',
            'github' => 'fa-brands fa-github',
            'twitter' => 'fa-brands fa-twitter',
            'youtube' => 'fa-brands fa-youtube',
            'tiktok' => 'fa-brands fa-tiktok',
            'behance' => 'fa-brands fa-behance',
            'facebook' => 'fa-brands fa-facebook',
            'whatsapp' => 'fa-brands fa-whatsapp',
        ];

        return $icons[$platform] ?? 'fa-solid fa-link';
    }

    // Helper untuk role display
    public function getRoleDisplayName()
    {
        $roleMap = [
            'ketua' => ['name' => 'Ketua HMSI', 'emoji' => '👑'],
            'wakil_ketua' => ['name' => 'Wakil Ketua', 'emoji' => '👸'],
            'sekretaris' => ['name' => 'Sekretaris', 'emoji' => '📝'],
            'bendahara' => ['name' => 'Bendahara', 'emoji' => '💰'],
            'koordinator_acara' => ['name' => 'Koordinator Acara', 'emoji' => '🎪'],
            'koordinator_humas' => ['name' => 'Koordinator Humas', 'emoji' => '📢'],
            'koordinator_it' => ['name' => 'Koordinator IT', 'emoji' => '💻'],
            'koordinator_kreatif' => ['name' => 'Koordinator Kreatif', 'emoji' => '🎨'],
            'pengurus' => ['name' => 'Pengurus', 'emoji' => '⭐'],
        ];

        $primaryRole = $this->roles->first();
        if ($primaryRole && isset($roleMap[$primaryRole->name])) {
            return $roleMap[$primaryRole->name];
        }

        return ['name' => 'Tim HMSI', 'emoji' => '⭐'];
    }
}
