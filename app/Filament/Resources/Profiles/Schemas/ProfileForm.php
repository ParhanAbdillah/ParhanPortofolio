<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('hero_title'),
                TextInput::make('hero_roles'),
                Textarea::make('hero_description')
                    ->columnSpanFull(),
                Textarea::make('about_text')
                    ->columnSpanFull(),
                FileUpload::make('about_image_path')
                    ->image(),
                FileUpload::make('cv_file')
                    ->label('Upload CV (PDF)')
                    ->acceptedFileTypes(['application/pdf']),
                TextInput::make('contact_phone')
                    ->tel(),
                TextInput::make('contact_email')
                    ->email(),
                TextInput::make('contact_address'),
                TextInput::make('social_wa'),
                TextInput::make('social_ig'),
                TextInput::make('social_tiktok'),
                TextInput::make('social_github'),
            ]);
    }
}
