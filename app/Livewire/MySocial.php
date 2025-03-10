<?php
namespace App\Livewire;
use Jeffgreco13\FilamentBreezy\Livewire\MyProfileComponent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class MySocial extends MyProfileComponent
{
    public array $only = ['social_media'];
    
    // Add direct properties for each social media
    public $facebook_username = '';
    public $facebook_url = '';
    public $instagram_username = '';
    public $instagram_url = '';
    public $twitter_username = '';
    public $twitter_url = '';
    
    protected string $view = 'livewire.my-social';
    
    // Define rules for validation
    protected function rules()
    {
        return [
            'facebook_username' => ['nullable', 'string', 'max:255'],
            'facebook_url' => ['nullable', 'url', 'max:255'],
            'instagram_username' => ['nullable', 'string', 'max:255'],
            'instagram_url' => ['nullable', 'url', 'max:255'],
            'twitter_username' => ['nullable', 'string', 'max:255'],
            'twitter_url' => ['nullable', 'url', 'max:255'],
        ];
    }
    
    public function mount(): void
    {
        // Get the user's existing social media data
        $user = Auth::user();
        $socialMedia = $user->social_media ?? [];
        
        // Fill properties from the database
        foreach ((array)$socialMedia as $item) {
            if (is_array($item) && isset($item['platform'])) {
                $platform = $item['platform'];
                if ($platform === 'facebook') {
                    $this->facebook_username = $item['username'] ?? '';
                    $this->facebook_url = $item['url'] ?? '';
                } elseif ($platform === 'instagram') {
                    $this->instagram_username = $item['username'] ?? '';
                    $this->instagram_url = $item['url'] ?? '';
                } elseif ($platform === 'twitter') {
                    $this->twitter_username = $item['username'] ?? '';
                    $this->twitter_url = $item['url'] ?? '';
                }
            }
        }
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Social Media')
                    ->description('Tambahkan akun media sosial Anda')
                    ->schema([
                        // Facebook
                        Forms\Components\TextInput::make('facebook_username')
                            ->label('Facebook Username')
                            ->placeholder('Username Facebook Anda'),
                        Forms\Components\TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->url()
                            ->placeholder('https://facebook.com/username'),
                        
                        // Instagram
                        Forms\Components\TextInput::make('instagram_username')
                            ->label('Instagram Username')
                            ->placeholder('Username Instagram Anda'),
                        Forms\Components\TextInput::make('instagram_url')
                            ->label('Instagram URL')
                            ->url()
                            ->placeholder('https://instagram.com/username'),
                        
                        // Twitter/X
                        Forms\Components\TextInput::make('twitter_username')
                            ->label('Twitter/X Username')
                            ->placeholder('Username Twitter Anda'),
                        Forms\Components\TextInput::make('twitter_url')
                            ->label('Twitter/X URL')
                            ->url()
                            ->placeholder('https://twitter.com/username'),
                    ])
            ]);
    }
    
    public function submit()
    {
        // Validate the data
        $this->validate();
        
        // Format social media data for storage
        $socialMedia = [];
        
        // Add Facebook if username is provided
        if (!empty($this->facebook_username)) {
            $socialMedia[] = [
                'platform' => 'facebook',
                'username' => $this->facebook_username,
                'url' => $this->facebook_url ?? '',
            ];
        }
        
        // Add Instagram if username is provided
        if (!empty($this->instagram_username)) {
            $socialMedia[] = [
                'platform' => 'instagram',
                'username' => $this->instagram_username,
                'url' => $this->instagram_url ?? '',
            ];
        }
        
        // Add Twitter if username is provided
        if (!empty($this->twitter_username)) {
            $socialMedia[] = [
                'platform' => 'twitter',
                'username' => $this->twitter_username,
                'url' => $this->twitter_url ?? '',
            ];
        }
        
        try {
            // Update user
            Auth::user()->update([
                'social_media' => $socialMedia,
            ]);
            

            // Notify user
            Notification::make()
            ->title('Profile updated successfully')
            ->success()
            ->send();

        } catch (\Exception $e) {
           dd($e);
            // Notify user
        }
    }
}