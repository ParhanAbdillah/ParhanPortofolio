<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Main Information')
                    ->description('Primary details and preview image of the project.')
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        Textarea::make('description')
                            ->columnSpanFull(),
                        FileUpload::make('image_path')
                            ->image()
                            ->disk('public')
                            ->columnSpanFull(),
                    ])->columns(1),

                \Filament\Schemas\Components\Section::make('Project Metadata')
                    ->description('Status, classification, and tech stack details.')
                    ->schema([
                        \Filament\Schemas\Components\Grid::make(2)->schema([
                            \Filament\Forms\Components\Select::make('status')
                                ->options([
                                    'Active' => 'Active',
                                    'In Progress' => 'In Progress',
                                    'Completed' => 'Completed',
                                    'Maintenance' => 'Maintenance',
                                ])
                                ->default('Active')
                                ->required(),
                            \Filament\Forms\Components\Select::make('access')
                                ->options([
                                    'Private Repo' => 'Private Repo',
                                    'Public Repo' => 'Public Repo',
                                    'Live Application' => 'Live Application',
                                ])
                                ->default('Private Repo')
                                ->required(),
                            TextInput::make('type')
                                ->placeholder('e.g. Web App, Company Profile')
                                ->required(),
                            TextInput::make('year')
                                ->placeholder('e.g. 2026')
                                ->numeric()
                                ->required(),
                        ]),
                        \Filament\Forms\Components\TagsInput::make('tech_stack')
                            ->placeholder('New tech stack')
                            ->splitKeys(['Tab', ' ', ','])
                            ->columnSpanFull()
                            ->required(),
                    ]),
            ]);
    }
}
