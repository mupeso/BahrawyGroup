<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobOfferResource\Pages;
use App\Filament\Resources\JobOfferResource\RelationManagers;
use App\Models\JobOffer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobOfferResource extends Resource
{
    protected static ?string $model = JobOffer::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                  
                     
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                

                Forms\Components\Select::make('status')
                  ->options([
                      'open' => 'open',
                      'closed' => 'closed',
                    ])->required()
              
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\SelectColumn::make('status')
                  ->options([
                      'open' => 'open',
                      'closed' => 'closed',
                    ])
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
            'index' => Pages\ListJobOffers::route('/'),
            'create' => Pages\CreateJobOffer::route('/create'),
            'edit' => Pages\EditJobOffer::route('/{record}/edit'),
        ];
    }    
}
