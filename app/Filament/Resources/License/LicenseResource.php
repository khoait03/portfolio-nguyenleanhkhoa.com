<?php

namespace App\Filament\Resources\License;

use App\Filament\Resources\License\LicenseResource\Pages;
use App\Models\License;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Actions\Action;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class LicenseResource extends Resource
{
    protected static ?string $model = License::class;

    protected static ?string $modelLabel = 'License';
    protected static ?string $slug = 'licenses';
    protected static ?string $navigationLabel = 'License';
    protected static ?string $navigationGroup = 'License';
    protected static ?string $navigationIcon = 'heroicon-o-key';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Thông tin giấy phép')->schema([

                        TextInput::make('license_key')
                            ->required()
                            ->unique(License::class, 'license_key', ignoreRecord: true)
                            ->maxLength(200)
                            ->label('Mã giấy phép')
                            ->suffixAction(
                                Action::make('randomize')
                                    ->label('Random')
                                    ->icon('heroicon-o-key')
                                    ->action(function (Set $set) {
                                        $set('license_key', Str::upper(Str::random(100))); // Tạo chuỗi ngẫu nhiên 10 ký tự và chuyển thành chữ hoa
                                    })
                            )
                            ->suffixAction(
                                Action::make('copy')
                                    ->label('Copy')
                                    ->icon('heroicon-o-clipboard')
                                    ->action(function (Set $set) {
                                        // Đoạn mã này không thể chạy trực tiếp vì Laravel không thể sao chép vào clipboard
                                        // Chúng ta cần sử dụng JavaScript để thực hiện sao chép
                                    })
                                    ->extraAttributes(['class' => 'copy-button']) // Thêm class cho nút sao chép
                            )
                            ->columnSpanFull(),

                        Select::make('license_category_id')
                            ->label('Danh mục')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('category', 'name')
                            ->columnSpanFull(),

                        TextInput::make('product_name')
                            ->required()
                            ->maxLength(200)
                            ->label('Tên sản phẩm')
                            ->columnSpanFull(),

                        DatePicker::make('register_date')
                            ->label('Ngày đăng ký')
                            ->required()
                            ->default(now())
                            ->displayFormat('d-m-Y'),

                        DatePicker::make('expiry_date')
                            ->label('Ngày hết hạn')
                            ->displayFormat('d-m-Y')
                            ->required(),

                        RichEditor::make('description')
                            ->label('Mô tả')
                            ->nullable()
                            ->columnSpanFull(),

                    ])->columns(2),


                ])->columnSpan(2),

                Group::make()->schema([

                    Section::make('Thông tin & trạng thái')->schema([
                        TextInput::make('customer_phone')
                            ->label('Số điện thoại')
                            ->unique(License::class, 'customer_phone', ignoreRecord: true)
                            ->maxLength(10)
                            ->tel()
                            ->required()
                            ->rules(['regex:/^(0[0-9]{9})$/']) //
                            ->prefix('+84 '),

                        TextInput::make('customer_email')
                            ->label('Email')
                            ->unique(License::class, 'customer_email', ignoreRecord: true)
                            ->maxLength(60)
                            ->email(),
                        Toggle::make('is_active')
                            ->label('Kích hoạt')
                            ->default(true),
                    ]),

                    Section::make()
                        ->schema([
                            Placeholder::make('created_at')
                                ->label('Thời gian tạo')
                                ->content(fn ($record) => $record ? $record->created_at->format('d/m/Y H:i:s') : '-'),

                            Placeholder::make('updated_at')
                                ->label('Thời gian cập nhật mới nhất')
                                ->content(fn ($record) => $record ? $record->updated_at->format('d/m/Y H:i:s') : '-'),
                        ])

                ])->columnSpan(1)

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('id')
                    ->label('#ID')
                    ->sortable()
                    ->searchable(),

                // Cột hiển thị product_name
                Tables\Columns\TextColumn::make('product_name')
                    ->label('Tên sản phẩm')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('customer_email')
                    ->label('Email khách hàng')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('customer_phone')
                    ->label('SDT khách hàng')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListLicenses::route('/'),
            'create' => Pages\CreateLicense::route('/create'),
            'edit' => Pages\EditLicense::route('/{record}/edit'),
        ];
    }
}
