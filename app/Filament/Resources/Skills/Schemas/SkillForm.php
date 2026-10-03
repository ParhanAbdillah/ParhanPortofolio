<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->helperText('Name of the skill (e.g. Python, HTML, Cisco). Icon will be generated automatically.'),
                \Filament\Forms\Components\Select::make('category')
                    ->required()
                    ->options([
                        'Web Development' => 'Web Development',
                        'Networking & Infrastructure' => 'Networking & Infrastructure',
                        'Productivity & Others' => 'Productivity & Others',
                    ])
                    ->default('Web Development'),
            ]);
    }
}
