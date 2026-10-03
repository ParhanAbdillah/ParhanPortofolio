<?php

namespace App\Filament\Resources\Certificates\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CertificateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('type')
                    ->options([
                        'Certificate' => 'Certificate',
                        'SK' => 'SK Pekerjaan',
                        'Field' => 'Peran Lapangan',
                        'Archive' => 'Arsip PDF',
                    ])
                    ->required()
                    ->default('Certificate'),
                TextInput::make('code')
                    ->placeholder('e.g. CERT-01'),
                TextInput::make('category')
                    ->placeholder('e.g. MAGANG'),
                TextInput::make('name')
                    ->required()
                    ->placeholder('e.g. Sertifikat Magang Kominfo'),
                TextInput::make('issuer')
                    ->placeholder('e.g. Diskominfo Kalimantan Barat'),
                FileUpload::make('image_path')
                    ->image()
                    ->disk('public'),
                FileUpload::make('file_path')
                    ->acceptedFileTypes(['application/pdf'])
                    ->disk('public'),
            ]);
    }
}
