<?php

namespace Webkul\Support\Traits;

use BezhanSalleh\LanguageSwitch\LanguageSwitch;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;

trait HasRtlSupport
{
    protected static array $rtlLocales = ['ar', 'he', 'fa', 'ur'];

    protected function registerLanguageSwitch(): void
    {
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['en', 'ar'])
                ->labels([
                    'en' => 'English',
                    'ar' => 'العربية',
                ])
                ->flags([
                    'en' => asset('flags/en.svg'),
                    'ar' => asset('flags/ar.svg'),
                ])
                ->circular();
        });
    }

    protected function registerRtlSupport(): void
    {
        view()->composer('*', function ($view) {
            $locale = app()->getLocale();

            $isRtl = in_array($locale, static::$rtlLocales);

            $direction = $isRtl ? 'rtl' : 'ltr';

            $view->with([
                'isRtl'         => $isRtl,
                'direction'     => $direction,
                'currentLocale' => $locale,
            ]);
        });

        Blade::if('rtl', function () {
            return in_array(app()->getLocale(), static::$rtlLocales);
        });

        Blade::directive('direction', function () {
            $locales = json_encode(static::$rtlLocales);

            return "<?php echo in_array(app()->getLocale(), {$locales}) ? 'rtl' : 'ltr'; ?>";
        });

        FilamentView::registerRenderHook(
            PanelsRenderHook::BODY_START,
            fn () => view('support::rtl.script', ['rtlLocales' => static::$rtlLocales])->render(),
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn () => view('support::rtl.styles', ['rtlLocales' => static::$rtlLocales])->render(),
        );
    }

    public static function isRtl(): bool
    {
        return in_array(app()->getLocale(), static::$rtlLocales);
    }
}
