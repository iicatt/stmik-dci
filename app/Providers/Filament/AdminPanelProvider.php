<?php

namespace App\Providers\Filament;

use App\Filament\Resources\Banners\BannerResource;
use Filament\Enums\ThemeMode; // <-- Tambahan import untuk Mode Terang
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            
            // --- MULAI CUSTOM BRANDING ALA DONEZO & STMIK DCI ---
            ->brandName('STMIK DCI')
            ->brandLogo(asset('images/logo.png')) // Memanggil logo kampus
            ->brandLogoHeight('2.5rem')
            ->favicon(asset('images/logo.png')) // Favicon kampus
            ->font('Inter') // Font modern yang dipakai di desain Donezo
            ->defaultThemeMode(ThemeMode::Light) // Memaksa mode terang (putih)
            ->sidebarCollapsibleOnDesktop() // Sidebar bisa dikecilkan seperti desain
            ->colors([
                'primary' => Color::Blue, // Hijau ala Donezo
                'gray' => Color::Slate, // Warna abu-abu yang lebih lembut
            ])
            // --- AKHIR CUSTOM BRANDING ---

            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->resources([
                BannerResource::class, // <-- Paksaan BannerResource tetap aman di sini
            ])
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
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