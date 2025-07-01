<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KontakResource\Pages;
use App\Filament\Resources\KontakResource\RelationManagers;
use App\Models\Kontak;
use App\Models\Sosmed;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KontakResource extends Resource
{
    protected static ?string $model = Sosmed::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Kontak & Sosmed';
    protected static ?string $title = 'Kontak & Sosmed';
    protected static ?string $slug = 'kontak';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('wa')
                    ->tel()
                    ->label('Nomor WhatsApp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('fb')
                    ->label('Nama Profile/Fanspage Facebook')
                    ->maxLength(255),
                Forms\Components\TextInput::make('url_fb')
                    ->label('Link Profile/Fanspage Facebook')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ig')
                    ->label('Username Instagram')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tiktok')
                    ->label('Username Tiktok')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin')
                    ->label('Nama Linkedin')
                    ->maxLength(255),
                Forms\Components\TextInput::make('url_linkedin')
                    ->label('Link Profile Linkedin')
                    ->maxLength(255),
                Forms\Components\TextInput::make('yt')
                    ->label('Nama Chanel Youtube')
                    ->maxLength(255),
                Forms\Components\TextInput::make('url_yt')
                    ->label('Link Chanel Youtube')
                    ->maxLength(255),
                Forms\Components\TextArea::make('alamat')
                    ->label('Alamat Lengkap')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([])
            ->bulkActions([]);
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
            'index' => Pages\ListKontaks::route('/'),
            'edit' => Pages\EditKontak::route('/{record}/edit'),
        ];
    }
}
