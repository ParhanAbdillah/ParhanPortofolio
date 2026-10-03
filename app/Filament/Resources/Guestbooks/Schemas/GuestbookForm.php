<?php

namespace App\Filament\Resources\Guestbooks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GuestbookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('reply')
                    ->columnSpanFull(),
            ]);
    }
}
