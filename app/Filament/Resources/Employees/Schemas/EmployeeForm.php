<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Select::make('status_id')
                    ->relationship('status', 'name')
                    ->required(),
                Select::make('position_id')
                    ->relationship('position', 'name')
                    ->required(),
                Group::make()
                    ->relationship('salary')
                    ->schema([
                        TextInput::make('current_amount')
                        ->label('Salary')
                            ->numeric()
                            ->prefix('$')
                            ->required(),
                    ]),
                DatePicker::make('started_at')
                    ->required(),
                Repeater::make('contract')
                ->relationship()->schema([
                        Select::make('contract_type_id')
                            ->label('Contract Type')
                            ->relationship('contractType', 'name')
                            ->required(),

                        DatePicker::make('started_at')
                            ->required(),

                        DatePicker::make('ended_at'),
                    ])->minItems(1)->defaultItems(1)->required()
            ]);
    }
}
