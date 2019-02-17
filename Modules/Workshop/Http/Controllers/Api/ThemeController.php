<?php

namespace Modules\Workshop\Http\Controllers\Api;

use FloatingPoint\Stylist\Theme\Theme;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use InvalidArgumentException;
use Modules\Workshop\Manager\ThemeManager;
use Modules\Workshop\Transformers\ThemeTransformer;

class ThemeController extends Controller
{

    public function publishAssets(Theme $theme)
    {
        try {
            Artisan::call('stylist:publish', ['theme' => $theme->getName()]);
        } catch (InvalidArgumentException $e) {
        }
    }

    public function index(ThemeManager $themeManager)
    {
        return ThemeTransformer::collection(collect($themeManager->all()));
    }
}
