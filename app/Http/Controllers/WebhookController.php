<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Order;
use App\Models\Trip;
use App\Models\User;
use App\Models\Webhook;
use App\Services\TelegramService;
use App\Services\RahmatTestService;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        Webhook::create([
            'request' => json_encode($data),
        ]);

        if (isset($data['message'])) {
            $text = $data['message']['text'] ?? null;
            if ($text == "/start") {
                $this->start_command($data);
                return true;
            } else {
                $user = User::where('chat_id', (string)$data['message']['chat']['id'])->first();
                if (empty($user)) {
                    return true;
                } else if ($user->step == 1) {
                    $this->enter_phone($data, $user);
                }
            }
        } else if (isset($data['callback_query'])) {
            $d = $data['callback_query']['data'];
            if ($d == "trips") {

            } else {
                $explode = explode(" ", $d);
                if ($explode[0] == "trip_bron") {

                } else if ($explode[0] == "date_bron") {

                }
            }
        }

    }

    public function start_command($data)
    {
        $user = User::where('chat_id', (string)$data['message']['chat']['id'])->first();
        /*if ($user->step != 0){}*/
        if (!empty($user)) {
            TelegramService::sendMessage($data['message']['chat']['id'], "<b>ONLINE EDUCATION</b>, OSON VA QULAY", json_encode($this->main_key), 'HTML');
        } else {
            try {
                User::create([
                    'chat_id' => (string)$data['message']['from']['id'],
                    'first_name' => $data['message']['chat']['first_name'] ?? '',
                    'last_name' => $data['message']['chat']['last_name'] ?? '',
                    'username' => $data['message']['chat']['username'] ?? '',
                    'step' => 1,
                ]);
                TelegramService::sendMessage($data['message']['chat']['id'], "Ro'yhatdan o'tish uchun telefon nomeringizni yuboring!", json_encode($this->contact), null);
            } catch (\Exception $e) {
                return true;
            }
        }
        return true;
    }

    public function enter_phone($data, $user)
    {
        if (!isset($data['message']['contact']['phone_number']) or empty($data['message']['contact']['phone_number'])) {
            TelegramService::sendMessage($data['message']['chat']['id'], "TELEFON NOMERNI YUBOTISH kinopkani bosing", null, null);
            return true;
        }
        $user->update([
            'phone' => $data['message']['contact']['phone_number'],
            'step' => 0,
        ]);

        TelegramService::sendMessage($data['message']['chat']['id'], "<b>MUVAFFAQTIYALI RO'YHATDAN O'TDINGIZ!</b>", json_encode($this->hide_key), 'HTML');
        TelegramService::sendMessage($data['message']['chat']['id'], "<b>ONLINE EDUCATION</b>, OSON VA QULAY", json_encode($this->main_key), 'HTML');
        return true;
    }

    public $contact = [
        'keyboard' => [
            [
                [
                    'text' => "📞 TELEFON NOMERNI YUBORISH!",
                    'request_contact' => true
                ]
            ]
        ],
        'resize_keyboard' => true,
        'one_time_keyboard' => true
    ];

    public $main_key = [
        "inline_keyboard" => [
            [
                [
                    "text" => "✅ Cource",
                    "callback_data" => "cource"
                ],
            ],
            [
                [
                    "text" => "😎 Today",
                    "callback_data" => "today"
                ],
            ],
            [
                [
                    "text" => "📊 Result",
                    "callback_data" => "result"
                ],
            ],
            [
                [
                    "text" => "ℹ️ BIZ HAQIMIZDA",
                    "callback_data" => "info"
                ],
            ],
            [
                [
                    "text" => "✋ YORDAM",
                    "url" => "https://t.me/ShukrulloDev"
                ],
            ],
            [
                [
                    "text" => "👤 Profile",
                    "callback_data" => "profile",
                ],
            ],
        ],
    ];

    public $hide_key = [
        'hide_keyboard' => true,
    ];
}
