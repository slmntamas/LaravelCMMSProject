<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HQResource\Pages;
use App\Filament\Resources\HQResource\RelationManagers;
use App\Models\HQ;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HQResource extends Resource
{
    protected static ?string $model = HQ::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralModelLabel = 'HQ';
    protected static ?string $modelLabel = 'HQ';
    protected static ?string $navigationLabel = 'HQ';
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nev')->required(),
                Forms\Components\TextInput::make('kapcsolattarto_nev')->required(),
                Forms\Components\TextInput::make('kapcsolattarto_telefon'),
                Forms\Components\TextInput::make('cim')->required(),

            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('nev')
                ->label('Név')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('kapcsolattarto_nev')
                ->label('Kapcsolattartó')
                ->searchable(),

            Tables\Columns\TextColumn::make('kapcsolattarto_telefon')
                ->label('Telefon'),

            Tables\Columns\TextColumn::make('cim')
                ->label('Cím')
                ->limit(50),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Létrehozva')
                ->dateTime()
                ->sortable(),
                ])
                ->filters([
                    
                ])
                ->actions([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                ])
                ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                        Tables\Actions\DeleteBulkAction::make(),
                    ]),
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
            'index' => Pages\ListHQS::route('/'),
            'create' => Pages\CreateHQ::route('/create'),
            'edit' => Pages\EditHQ::route('/{record}/edit'),
        ];
    }
}
