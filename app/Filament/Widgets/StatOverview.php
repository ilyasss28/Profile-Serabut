<?php
namespace App\Filament\Widgets;

use App\Models\Faq;
use App\Models\Galery;
use App\Models\Komoditas;
use App\Models\Program;
use App\Models\Publikasi;
use App\Models\Tim;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatOverview extends BaseWidget
{
    protected static ?int $sort = 1; // urutan tampil

    protected function getStats(): array
    {
        return [
            Stat::make('Program', Program::count())
                ->description('Total Program yang dikelola')
                ->color('primary')
                ->icon('heroicon-o-clipboard-document')
                ->extraAttributes(['class' => 'h-32']),

            Stat::make('Publikasi', Publikasi::count())
                ->description('Jumlah publikasi terbit')
                ->color('warning')
                ->icon('heroicon-o-book-open')
                ->extraAttributes(['class' => 'h-32']),

            Stat::make('Komoditas', Komoditas::count())
                ->description('Jenis komoditas aktif')
                ->color('success')
                ->icon('heroicon-o-cube')
                ->extraAttributes(['class' => 'h-32']),

            Stat::make('Tim', Tim::count())
                ->description('Jumlah anggota tim')
                ->color('info')
                ->icon('heroicon-o-users')
                ->extraAttributes(['class' => 'h-32']),

            Stat::make('Galeri', Galery::count())
                ->description('Dokumentasi kegiatan')
                ->color('danger')
                ->icon('heroicon-o-photo')
                ->extraAttributes(['class' => 'h-32']),
            Stat::make('FAQ', Faq::count())
                ->description('Daftar pertanyaan')
                ->color('secondary')
                ->icon('heroicon-o-question-mark-circle')
                ->extraAttributes(['class' => 'h-32']),
        ];
    }

    protected int|array $columns = [
        'default' => 1,
        'md'      => 2,
        'lg'      => 3, // biar 6 kotak rapih dalam 2 baris (3+3)
    ];
}
