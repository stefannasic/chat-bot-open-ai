<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

class PreferencesController extends Controller
{
    public function savePreferences(Request $request)
{
    $maxTokens = $request->input('maxTokens');
    $temperature = $request->input('temperature');
    
    $user = auth()->user();
    $preferences = $user->preferences ?? new Preference();
    $preferences->max_tokens = $maxTokens;
    $preferences->temperature = $temperature;
    $user->preferences()->save($preferences);

    return redirect()->back()->with('success', 'Preferences saved successfully.');
}
}
