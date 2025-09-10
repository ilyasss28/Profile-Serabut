<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatOverview extends BaseWidget
{
    protected static ?int $sort = 1; // urutan tampil

    protected function getStats(): array
    {
         return [
            Stat::make('Anggota', 120)
                ->description('Total Anggota')
                ->color('success')
                ->extraAttributes(['class' => 'h-32']), // bikin kotaknya kecil

            Stat::make('Proyek', 15)
                ->description('Proyek Aktif')
                ->color('primary')
                ->extraAttributes(['class' => 'h-32']),

            Stat::make('Cerita', 34)
                ->description('Cerita Dipublikasikan')
                ->color('warning')
                ->extraAttributes(['class' => 'h-32']),

            Stat::make('Publikasi', 27)
                ->description('Jumlah Publikasi')
                ->color('primary')
                ->extraAttributes(['class' => 'h-32']),

            Stat::make('Kontak Masuk', 8)
                ->description('Belum Dibalas')
                ->color('danger')
                ->extraAttributes(['class' => 'h-32']),
        ];
    }
     protected int | array $columns = [
        'default' => 1,
        'md' => 2,
        'lg' => 5, // di layar besar jadi 5 sejajar
    ];
}
