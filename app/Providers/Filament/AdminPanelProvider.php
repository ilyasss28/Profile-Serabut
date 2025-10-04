<?php

namespace App\Providers\Filament;

use App\Filament\Resources\FaqResource;
use App\Filament\Resources\GaleryKategoriResource;
use App\Filament\Resources\GaleryResource;
use App\Filament\Resources\KategoriFAQResource;
use App\Filament\Resources\KategoriPublikasiResource;
use App\Filament\Resources\KomoditasResource;
use App\Filament\Resources\PetaWilayahKerjaResource;
use App\Filament\Resources\ProfileImagesResource;
use App\Filament\Resources\ProfileResource;
use App\Filament\Resources\ProgramResource;
use App\Filament\Resources\ProgramSectionResource;
use App\Filament\Resources\PublikasiResource;
use App\Filament\Resources\StatistikResource;
use App\Filament\Resources\TimResource;
use App\Filament\Resources\WilayahKerjaResource;
use App\Models\Faq;
use App\Models\Galery;
use App\Models\GaleryKategori;
use App\Models\KategoriFAQ;
use App\Models\KategoriPublikasi;
use App\Models\Komoditas;
use App\Models\PetaWilayahKerja;
use App\Models\Profile;
use App\Models\ProfileImages;
use App\Models\Program;
use App\Models\ProgramSection;
use App\Models\Publikasi;
use App\Models\Statistik;
use App\Models\Tim;
use App\Models\WilayahKerja;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Facades\Filament as FilamentAsset;
use Filament\Navigation\NavigationItem;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandLogo(asset('assets/img/icon.png'))
            ->brandName('SERABUT')
            ->brandLogoHeight('3rem')
            ->spa()
            ->sidebarCollapsibleOnDesktop()
            ->navigationItems([
                // Tentang Serabut
                NavigationItem::make('Profil Serabut')
                ->url(fn(): string => ProfileResource::getUrl())
                ->icon('heroicon-o-user-circle')
                ->group('Tentang Serabut')
                ->sort(1),

                NavigationItem::make('Gambar Profile')
                ->url(fn(): string => ProfileImagesResource::getUrl())
                ->icon('heroicon-o-photo')
                ->group('Tentang Serabut')
                ->sort(1)
                ->badge(fn (): ?string => (string) ProfileImages::query()->count()),

                NavigationItem::make('Statistik')
                ->url(fn(): string => StatistikResource::getUrl())
                ->icon('heroicon-o-chart-bar')
                ->group('Tentang Serabut')
                ->sort(1),

                NavigationItem::make('Tim')
                ->url(fn(): string => TimResource::getUrl())
                ->icon('heroicon-o-user-group')
                ->group('Tentang Serabut')
                ->sort(1)
                ->badge(fn(): ?string => (string) Tim::query()->count()),

                NavigationItem::make('Komoditas')
                ->url(fn(): string => KomoditasResource::getUrl())
                ->icon('heroicon-o-cube')
                ->group('Tentang Serabut')
                ->sort(1)
                ->badge(fn(): ?string => (string) Komoditas::query()->count()),

                NavigationItem::make('Daftar Wilayah Kerja')
                ->url(fn(): string => WilayahKerjaResource::getUrl())
                ->icon('heroicon-o-map-pin')
                ->group('Tentang Serabut')
                ->sort(1)
                ->badge(fn(): ?string => (string) WilayahKerja::query()->count()),

                NavigationItem::make('Peta Wilayah Kerja')
                ->url(fn(): string => PetaWilayahKerjaResource::getUrl())
                ->icon('heroicon-o-map')
                ->group('Tentang Serabut')
                ->sort(1),

                // Content Management
                NavigationItem::make('Program')
                ->url(fn (): string => ProgramResource::getUrl())
                ->icon('heroicon-o-square-3-stack-3d')
                ->group('Content Management')
                ->sort(3)
                ->badge(fn (): ?string => (string) Program::query()->count()),
                NavigationItem::make('Program Detail')
                ->url(fn (): string => ProgramSectionResource::getUrl())
                ->icon('heroicon-o-squares-2x2')
                ->group('Content Management')
                ->sort(3)
                ->badge(fn (): ?string => (string) ProgramSection::query()->count()),

                NavigationItem::make('Kategori Artikel Publikasi')
                ->url(fn (): string => KategoriPublikasiResource::getUrl())
                ->icon('heroicon-o-tag')
                ->group('Content Management')
                ->sort(3)
                ->badge(fn (): ?string => (string) KategoriPublikasi::query()->count()),

                NavigationItem::make('Artikel Publikasi')
                ->url(fn (): string => PublikasiResource::getUrl())
                ->icon('heroicon-o-newspaper')
                ->group('Content Management')
                ->sort(3)
                ->badge(fn (): ?string => (string) Publikasi::query()->count()),

                NavigationItem::make('Kategori Galery')
                ->url(fn (): string => GaleryKategoriResource::getUrl())
                ->icon('heroicon-o-tag')
                ->group('Content Management')
                ->sort(3)
                ->badge(fn (): ?string => (string) GaleryKategori::query()->count()),

                NavigationItem::make('Galery')
                ->url(fn (): string => GaleryResource::getUrl())
                ->icon('heroicon-o-camera')
                ->group('Content Management')
                ->sort(3)
                ->badge(fn (): ?string => (string) Galery::query()->count()),

                // Management FAQ
                NavigationItem::make('FAQ')
                ->url(fn (): string => FaqResource::getUrl())
                ->icon('heroicon-o-question-mark-circle')
                ->group('FAQ Management')
                ->sort(3)
                ->badge(fn (): ?string => (string) Faq::query()->count()),
                NavigationItem::make('Kategori FAQ')
                ->url(fn (): string => KategoriFAQResource::getUrl())
                ->icon('heroicon-o-tag')
                ->group('FAQ Management')
                ->sort(3)
                ->badge(fn (): ?string => (string) KategoriFAQ::count()),
            ])
            ->colors([
                'primary' => Color::Orange,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

}
