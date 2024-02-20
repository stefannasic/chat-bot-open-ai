<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

class PreferencesController extends Controller
{
    public function savePreferences(Request $request) {
        $request->validate([
            'maxTokens' => 'required|integer|min:50|max:2048',
            'temperature' => 'required|numeric|min:0.1|max:1',
        ]);
    
        $maxTokens = $request->input('maxTokens');
        $temperature = $request->input('temperature');
        
        $user = auth()->user();
        $preferences = $user->preferences ?? new Preference();
    
        if(($maxTokens >= env('MIN_TOKENS_VALUE') && $maxTokens <= env('MAX_TOKENS_VALUE')) && ($temperature >= env('MIN_TEMPERATURE_VALUE') && $temperature <= env('MAX_TEMPERATURE_VALUE'))) {
            $preferences->max_tokens = $maxTokens;
            $preferences->temperature = $temperature;
            $user->preferences()->save($preferences);
            return redirect()->back()->with('success', 'Preferences saved successfully.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid preferences.']);
        }
    }
}
