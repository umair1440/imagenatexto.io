<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class AjaxController extends Controller
{
    public function rephrase(Request $request)
    {
        $str = $request->text;
        $mode = $request->mode;
        $baseLang = 'es';
        // $strData
        $strData = $this->breakStringIntoChunks($str, 200);
        $result = '';

        // ko, zh-cn, pt, hr, de, fr, es, en, sv

        foreach ($strData as $key => $str) {

            if ($mode == 1) {
                $trans = GoogleTranslate::trans($str, 'ru', $baseLang);
                $trans = GoogleTranslate::trans($trans, 'hr', 'ru');
                $trans = GoogleTranslate::trans($trans, 'zh-cn', 'hr');
                $result .= GoogleTranslate::trans($trans, $baseLang, 'zh-cn');
            }


            if ($mode == 2) {
                $trans = GoogleTranslate::trans($str, 'mr', $baseLang);
                $trans = GoogleTranslate::trans($str, 'ar', 'mr');
                $result .= GoogleTranslate::trans($trans, $baseLang, 'ar');
                // $trans = GoogleTranslate::trans($str, 'zh-cn', $baseLang);
                // $trans = GoogleTranslate::trans($trans, 'pt', 'zh-cn');
                // $result .= GoogleTranslate::trans($trans, $baseLang, 'pt');
            }
        }

        return $this->boldNewWords($str, $result);
    }


    function boldNewWords($p1, $p2)
    {
        $inputWords = explode(" ", $p1);
        $outputWords = explode(" ", $p2);
        $result = "";
        foreach ($outputWords as $word) {
            if (!in_array($word, $inputWords) && $word != '<br>') {
                $result .= "<span>" . $word . "</span> ";
            } else {
                $result .= $word . " ";
            }
        }
        return trim(preg_replace("/<br \/>/", ' ', $result));
    }

    public function breakStringIntoChunks($text, $chunkSize = 100)
    {
        // Split the text into sentences
        $sentences = preg_split('/(?<=[.?!])\s+(?=[a-zA-Z])/u', $text, -1, PREG_SPLIT_NO_EMPTY);

        $chunks = [];
        $currentChunk = '';

        foreach ($sentences as $sentence) {
            $wordsInSentence = str_word_count($sentence);

            // Check if adding the current sentence to the current chunk would exceed the chunk size
            if (str_word_count($currentChunk) + $wordsInSentence <= $chunkSize) {
                // Add space if the current chunk is not empty
                if (!empty($currentChunk)) {
                    $currentChunk .= ' ';
                }
                $currentChunk .= $sentence;
            } else {
                // If adding the sentence exceeds the chunk size, start a new chunk
                $chunks[] = $currentChunk;
                $currentChunk = $sentence;
            }
        }

        // Add the last chunk
        if (!empty($currentChunk)) {
            $chunks[] = $currentChunk;
        }
        return $chunks;
    }
}
