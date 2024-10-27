<?php

namespace App\Filament\Resources\Product;

use App\Filament\Resources\Product\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Set;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $modelLabel = 'Sản phẩm';
    protected static ?string $slug = 'products';
    protected static ?string $navigationLabel = 'Sản phẩm';
    protected static ?string $navigationGroup = 'Sản phẩm';
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Thông tin sản phẩm')->schema([

                        TextInput::make('name')
                            ->required()
                            ->maxLength(200)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation
                            === 'create' ? $set('slug', Str::slug($state)) : null)
                            ->label('Tên sản phẩm'),

                        TextInput::make('slug')
                            ->required()
                            ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true)
                            ->maxLength(200)
                            ->label('Slug (Đường dẫn)'),

                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),

                    ])->columns(2),

                    Section::make('Hình ảnh mô tả sản phẩm')->schema([
                        FileUpload::make('images')
                            ->multiple()
                            ->directory('product-description')
                            ->label('Chọn ảnh định dạng PNG, JPG')
                            ->maxFiles(5)
                            ->reorderable()
                            ->preserveFilenames()
//                            ->getUploadedFileNameForStorageUsing(
//                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
//                                    ->prepend('san-pham-'),
//                            )
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, $set): string {
                                // Nếu là form mới thì đặt giá trị mặc định cho slug
                                $slug = $record->slug ?? Str::slug($set('name', 'san-pham'));

                                // Đổi tên file với tiền tố slug và chuỗi ngẫu nhiên
                                return $slug . '-' . Str::random(5) . '.' . $file->getClientOriginalExtension();
                            })
                            //Xóa ảnh sau khi xóa sản phẩm
                            ->deleteUploadedFileUsing(function ($file) {
                                if ($file instanceof TemporaryUploadedFile) {
                                    // Nếu là một TemporaryUploadedFile, lấy đường dẫn từ getPathname
                                    Storage::disk('public')->delete($file->getPathname());
                                } elseif (is_string($file)) {
                                    // Nếu là một string, xóa trực tiếp từ đường dẫn
                                    Storage::disk('public')->delete($file);
                                }
                            })
                            ->columnSpan(2),
                    ])->columns(2),

                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Giá sản phẩm')->schema([
                        TextInput::make('price')->label('Giá tiền')
                            ->required()
                            ->numeric()
                            ->suffix('VNĐ')->columnSpanFull(),
                    ]),

                    Section::make('Thông tin sản phẩm')->schema([
                        Select::make('category_id')->label('Danh mục sản phẩm')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('category', 'name'),
                    ]),

                    Section::make('Hình ảnh')->schema([
                        FileUpload::make('main_image')
                            ->directory('product-main')
                            ->label('Chọn ảnh định dạng PNG, JPG')
                            ->reorderable()
                            ->preserveFilenames()
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, $record, $set): string {
                                // Nếu là form mới thì đặt giá trị mặc định cho slug
                                $slug = $record->slug ?? Str::slug($set('name', 'san-pham'));

                                // Đổi tên file với tiền tố slug và chuỗi ngẫu nhiên
                                return $slug . '-main-' . Str::random(5) . '.' . $file->getClientOriginalExtension();
                            })
                            //Xóa ảnh sau khi xóa sản phẩm
                            ->deleteUploadedFileUsing(function ($file) {
                                if ($file instanceof TemporaryUploadedFile) {
                                    // Nếu là một TemporaryUploadedFile, lấy đường dẫn từ getPathname
                                    Storage::disk('public')->delete($file->getPathname());
                                } elseif (is_string($file)) {
                                    // Nếu là một string, xóa trực tiếp từ đường dẫn
                                    Storage::disk('public')->delete($file);
                                }
                            }),
                    ]),

                    Section::make('Trạng thái')->schema([
                        Toggle::make('status')->label('Hiển thị'),
                    ]),




                ])->columnSpan(1)

            ])->columns(3);
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
            ->actions([
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
