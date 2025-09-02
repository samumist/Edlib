<?php

namespace App\Http\Middleware;

use App\Lti\Lti;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LtiLocale
{
    public function __construct(private readonly Lti $lti) {}

    /**
     * Set locale based on lti param
     *
     * @param  \Illuminate\Http\Request $request
     */
    public function handle($request, Closure $next)
    {
        $ltiRequest = $this->lti->getRequest($request);
        if ($ltiRequest != null) {
            if ($ltiRequest->getLocale()) {
                // Store the original code, even if we don't have this locale, maybe H5P does
                Session::put('locale', $ltiRequest->getLocale());
            }
        }
        $sessionLocale = Session::get('locale', config('app.fallback_locale'));
        $resolvedLocale = $this->resolveLocale($sessionLocale);
        App::setLocale($resolvedLocale);
        
        Log::info('LtiLocale middleware - Session locale: ' . $sessionLocale . ', Resolved locale: ' . $resolvedLocale . ', App locale: ' . App::getLocale());

        return $next($request);
    }

    /**
     * Check if we have a translation for the code. If that failes, and a code longer than two characters is
     * given, check if we have a translation for the two-code version. Failing that the original code is returned.
     */
    private function resolveLocale(string $locale): string
    {
        // 特殊处理中文语言代码，H5P编辑器期望使用"zh"而不是"chi"
        if (str_starts_with(strtolower($locale), 'zh')) {
            if (file_exists(resource_path('lang/zh-hans'))) {
                return 'zh-hans';
            }
            if (file_exists(resource_path('lang/zh'))) {
                return 'zh';
            }
            if (file_exists(resource_path('lang/zh-cn'))) {
                return 'zh-cn';
            }
        }
        
        if (!file_exists(resource_path('lang/' . $locale)) && strlen($locale) > 2) {
            $lang = \Iso639p3::code2letters($locale);
            if (file_exists(resource_path('lang/' . $lang))) {
                return $lang;
            }
        }

        return $locale;
    }
}
