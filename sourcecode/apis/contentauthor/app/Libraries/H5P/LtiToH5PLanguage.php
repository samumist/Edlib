<?php

declare(strict_types=1);

namespace App\Libraries\H5P;

class LtiToH5PLanguage
{
    public static function convert(?string $ltiLanguage = 'en-gb', ?string $defaultLanguage = 'en-gb'): string
    {
        // 特殊处理中文语言代码，保持完整的zh-hans格式
        if ($ltiLanguage && str_starts_with(strtolower($ltiLanguage), 'zh')) {
            return 'zh-hans';
        }
        
        return self::extractCode($ltiLanguage) ?: self::extractCode($defaultLanguage) ?: 'en';
    }

    private static function extractCode(?string $language): ?string
    {
        if ($language !== null) {
            $code = str_replace('_', '-', strtolower($language));

            if (strlen($code) === 2 && !strpos($code, '-')) {
                return $code;
            }

            if (strlen($code) > 2 && strpos($code, '-')) {
                $pieces = explode('-', $code);
                return strlen($pieces[0]) === 2 ? $pieces[0] : null;
            }
        }

        return null;
    }
}
