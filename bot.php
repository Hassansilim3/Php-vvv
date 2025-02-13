<?php
require __DIR__ . '/vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('7808063505:AAHGPDUiq4NFcJtH3zWerSQzSzLuNZR5LjU');

// معالجة أمر /start
$telegram->onCommand('start', function ($message) use ($telegram) {
    $chatId = $message->getChat()->getId();
    
    // إنشاء الأزرار
    $keyboard = [
        'inline_keyboard' => [
            [
                [
                    'text' => 'فتح التطبيق 🚀',
                    'web_app' => ['url' => 'https://your-mini-app-url.com']
                ],
                [
                    'text' => 'انضم للقناة 📢',
                    'url' => 'https://t.me/your_channel'
                ]
            ]
        ]
    ];
    
    // إرسال الرسالة
    $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'مرحباً! اضغط على أحد الأزرار أدناه:',
        'reply_markup' => json_encode($keyboard)
    ]);
});

$telegram->commandsHandler(true);
?>
