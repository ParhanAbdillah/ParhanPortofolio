<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Main Information')
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

                Section::make('Project Metadata')
                    ->description('Status, classification, and tech stack details.')
                    ->schema([
                        Grid::make(2)->schema([
                            Select::make('status')
                                ->options([
                                    'Active' => 'Active',
                                    'In Progress' => 'In Progress',
                                    'Completed' => 'Completed',
                                    'Maintenance' => 'Maintenance',
                                ])
                                ->default('Active')
                                ->required(),
                            Select::make('access')
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
                        TagsInput::make('tech_stack')
                            ->placeholder('New tech stack')
                            ->splitKeys(['Tab', ' ', ','])
                            ->columnSpanFull()
                            ->required(),
                    ]),
            ]);
    }
}
