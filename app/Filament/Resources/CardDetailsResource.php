<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CardDetailsResource\Pages;
use App\Filament\Resources\CardDetailsResource\RelationManagers;
use App\Models\Card_info;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Ysfkaya\FilamentPhoneInput\PhoneInput;
use Ysfkaya\FilamentPhoneInput\PhoneInputNumberType;

class CardDetailsResource extends Resource
{
    protected static ?string $model = Card_info::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->minLength(2)->maxLength(255)->disableAutocomplete()->required(),
                TextInput::make('email')->email()->minLength(2)->maxLength(255)->disableAutocomplete()->required(),
                PhoneInput::make('phone')->displayNumberFormat(PhoneInputNumberType::E164)->required(),
                SpatieMediaLibraryFileUpload::make('Worker_ID')->collection('worker_id')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable(),
                SpatieMediaLibraryImageColumn::make('Worker_ID')->collection('worker_id')->conversion('thumb'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCardDetails::route('/'),
            'create' => Pages\CreateCardDetails::route('/create'),
            'edit' => Pages\EditCardDetails::route('/{record}/edit'),
        ];
    }    
}
