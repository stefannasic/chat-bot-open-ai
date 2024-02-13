<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

class OpenAIController extends Controller
{
    public function sendMessage(Request $request) {
        $userMessage = $request->input('message');
        $apiKey = env('OPEN_AI_API_KEY');
        
        $user = auth()->user();
        $preferences = $user->preferences ?? new Preference();
        $maxTokens = $preferences->max_tokens ?? 2048;
        $temperature = $preferences->temperature ?? 1.0;

        $parameters = [
            'model' => 'gpt-3.5-turbo',
            'max_tokens' => $maxTokens,
            'temperature' => $temperature,
            'messages' => [['role' => 'system', 'content' => $userMessage]],
        ];
    
        $url = 'https://api.openai.com/v1/chat/completions';
    
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ];
    
        $data = json_encode($parameters);
    
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
        $response = curl_exec($ch);
    
        curl_close($ch);
    
        //\Log::info('Response from OpenAI API', ['response' => $response]);
        
        $responseData = json_decode($response);
        $reply = isset($responseData->choices[0]->message->content) ? $responseData->choices[0]->message->content : 'No response';
        
        return response()->json(['response' => $reply]);
    }
}
