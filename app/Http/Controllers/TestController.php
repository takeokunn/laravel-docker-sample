<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\{ Request, RedirectResponse };

use App\Http\Controllers\Controller;

final class TestController extends Controller
{
    /**
     * Get test.
     *
     * @return View
     */
    public function test(): View
    {
        return view('test');
    }
}
