<?php

namespace App\Services;

use Stichoza\GoogleTranslate\GoogleTranslate; // Or any translation package you're using

class TranslationService
{
    protected $translator;

    public function __construct()
    {
        $this->translator = new GoogleTranslate(); // Initialize the translator
    }

    public function translate($text, $targetLang = 'ar')
    {
        try {
            return $this->translator->setTarget($targetLang)->translate($text);
        } catch (\Exception $e) {
            return $text; // Return original text if translation fails
        }
    }
}
