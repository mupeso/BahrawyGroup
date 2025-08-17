<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobDetailResource\Pages;
use App\Filament\Resources\JobDetailResource\RelationManagers;
use App\Models\JobDetail;
use App\Models\JobOffer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobDetailResource extends Resource
{
    protected static ?string $model = JobDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('job_id')
                      ->label('job')
                      ->options(JobOffer::all()->pluck('title', 'id'))
                      ->required()
                      ->searchable(),

                
                Forms\Components\TextInput::make('available_positions')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('category')
                    ->maxLength(255),
                Forms\Components\TextInput::make('experience')
                    ->maxLength(255),
                Forms\Components\TextInput::make('studies')
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->maxLength(255),
                Forms\Components\TextInput::make('required_languages')
                    ->maxLength(255),
                Forms\Components\Textarea::make('requirements')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('main_functions')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('JobOffer.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('available_positions')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('studies')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('required_languages')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                 Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobDetails::route('/'),
            'create' => Pages\CreateJobDetail::route('/create'),
            'edit' => Pages\EditJobDetail::route('/{record}/edit'),
        ];
    }    
}
