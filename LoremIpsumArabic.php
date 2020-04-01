<?php

/**
 * Lorem Ipsum Arabic Generator
 *
 * PHP version 5.3+
 *
 * Licensed under The MIT License.
 * Redistribution of these files must retain the above copyright notice.
 *
 * @author    Josh Sherman <hello@joshtronic.com>
 * @copyright Copyright 2014, 2015, 2016, 2017, 2018, 2019, 2020 Josh Sherman
 * @license   http://www.opensource.org/licenses/mit-license.html
 */

namespace utkarsh;

class LoremIpsumArabic
{
    /**
     * First
     *
     * Whether or not we should be starting the string with "Lorem ipsum..."
     *
     * @access private
     * @var    boolean
     */
    private $first = true;

    /**
     * Words
     *
     * A lorem ipsum vocabulary of sorts. Not a complete list as I'm unsure if
     * a complete list exists and if so, where to get it.
     *
     * @access private
     * @var    array
     */
    public $words = array (
		    'حدى', 'كانت', 'وبحلول', 'إستعمل', 'ما', 'واُسدل', 'لإنعدام', 'لم', 'بلا', 'من', 'بقسوة', 'مهمّات', 'بالحرب', 'حتى', 'انه', 'و', 'يذكر', 'أساسي', 'شموليةً', 'أكثر', 'وبالرغم', 'بـ', 'جُل', 'ان', 'وزارة', 'السبب', 'دول', 'لها', 'و', 'بقيادة', 'بولندا،', 'من', 'دون', 'وبدون', 'العاصمة', 'اليابان،', 'و', 'الوراء', 'الواقعة', 'مما', '٣٠', 'خلاف', 'لغات', 'العالم،', 'عدم', 'بـ', 'خطّة', 'لأداء', 'ذات', 'قادة', 'والتي', 'ما', 'بحق', 'حين', 'وبعض', 'التاريخ،', 'الإكتفاء', 'كل', 'خطّة', 'شرسة', 'الذود', 'مع', 'لها', 'ان', 'وبدون', 'بالمطالبة', 'حول', 'حول', 'هو', 'التي', 'الدول', 'بريطانيا،', 'أسر', 'قد', 'شعار', 'دأبوا', 'اقتصادية', 'أن', 'فرنسا', 'الشتوية', 'غير', 'مساعدة', 'السادس', 'مع', 'دنو', 'مما', 'حلّت', 'المجتمع', 'والمعدات', 'كل', 'لمّ', 'و', 'الشطر', 'الفترة', 'بالعمل', 'عن', 'يكن', 'تسمّى', 'المارق', 'الهادي', 'إذ', 'مكن', 'احداث', 'والكوري', 'جهة', '٣٠', 'ليركز', 'إستيلاء', 'ومن', 'وهولندا،', 'باستخدام', 'كل', 'الجو', 'مواقعها', 'الخارجية', 'ذات', 'ثم', 'جهة', 'من', 'وجزر', 'فمرّ', 'للسيطرة', 'أم', 'دارت', 'وحرمان', 'الواقعة', 'يتم', 'ساعة', 'ديسمبر', 'إستيلاء', 'تم', 'يبق', 'على', 'البرية', 'الخاصّة', 'ايطاليا،', 'ما', 'أضف', 'من', 'كانتا', 'حادثة', 'لمّ', 'لم', 'وقبل', 'وبداية', 'شدّت', 'ليبين', 'الإحتفاظ', 'كل', 'ضرب', 'هو', 'خلاف', 'الجنرال', 'لان', 'هو', 'مئات', 'الأحمر', 'جديداً', 'دون', 'على', 'بسبب', 'قُدُماً', 'التحالف', 'عن', 'مع', 'وتم', 'سنغافورة', 'بالولايات', 'تحت', 'من', 'أمّا', 'الصفحة', 'حين', 'قبضتهم', 'فاتّبع', 'لبولندا،', 'عل', 'مع', 'حلّت', 'لتقليعة', 'تحت', 'تحت', 'تحرير', 'المحيط', 'أي', 'في', 'جهة', 'الشطر', 'إتفاقية', 'الإقتصادي', 'هذا', 'وبعد', 'مئات', 'بـ', 'الأجل', 'القادة', 'مدن', 'قد', 'شدّت', 'لفشل', 'مع', 'الى', 'أم', 'أضف', 'مساعدة', 'واقتصار', 'مع', 'قِبل', 'جزيرتي', 'تحت', 'كما', 'عن', 'ونتج', 'الربيع،', 'أم', 'يتبقّ', 'شواطيء', 'المتساقطة،', 'عدم', 'هو', 'أخرى', 'مكثّفة', 'مما', 'بين', 'كل', 'أسابيع', 'وبغطاء', 'حدى', 'الإنزال', 'والنفيس', 'الأوروبية', 'و', 'دنو', 'بل', 'بقسوة', 'اعتداء', 'علاقة', 'إنطلاق', 'هذا', 'و', 'ماذا', 'تسمّى', 'المحيط', 'من', 'حدى', 'أما', 'مكّن', 'الأمريكي', 'و', 'ذلك', 'عن', 'بأضرار', 'والإتحاد', 'لم', 'يبق', 'الشتاء', 'المبرمة', 'وصافرات', 'استراليا،', 'أخذ', 'بل', 'وحتّى', 'وإقامة', 'الخطّة', 'بحق', 'مع', 'من', 'اوروبا', 'الصفحات', 'الأمريكية', 'أخذ', 'وبعد', 'ماذا', 'دنو', 'أي', 'الذود', 'لليابان', 'بالسيطرة', 'لان', 'تم', 'وبعد', 'عرفها', 'معارضة', 'في', 'تعد', 'مرمى', 'يذكر', 'ثم', 'أسر', 'كل', 'تصفح', 'اللا', 'التخطيط', 'كان', 'تحت', 'من', 'أطراف', 'قبضتهم', 'الشتوية', 'بعد', 'و', 'بقعة', 'هنا؟', 'بوابة', 'يبق', 'الشتوية', 'الإتفاقية', 'أم', 'تم', 'وترك', 'وعُرفت', 'الإتحاد', 'كلا', 'ما', 'وبدأت', 'انتصارهم', 'وفي', 'بها', 'و', 'ساعة', 'تحرير', 'وانتهاءً', 'قد', 'عرفها', 'للسيطرة', 'حدى', 'ممثّلة', 'المنتصر', 'بالمطالبة', 'في', 'مكن', 'حادثة', 'إتفاقية', 'الى', 'في', 'أي', 'اتّجة', 'وبغطاء', 'جُل', 'وحتى', 'الدّفاع', 'ويكيبيديا', 'هذا', 'قد', 'دول', 'مع', 'اللا', 'وبعدما', 'سبتمبر', 'مع', 'عدم', 'الشطر', 'بالمطالبة', 'تكاليف', 'الأرواح', 'تم', 'حيث', 'مع', 'يرتبط', 'الحدود', 'والنفيس', 'بال', 'وترك', 'تسبب', 'ان', 'مكن', 'أفاق', 'علاقة', 'ارتكبها', 'عدم', '٣٠', 'هذه', 'كل', 'ثمّة', 'تكبّد', 'إحتار', 'في', 'تونس', 'حقول', 'أواخر', 'ومن', 'دار', 'عل', 'نقطة', 'سقوط', 'السيطرة', 'هو', 'إيو', 'لعدم', 'إحكام', 'وايرلندا', 'وصل', 'هو', 'لدحر', 'عليها', 'الصعداء', 'مع', 'حين', 'بداية', 'يتبقّ', 'لم', 'مما', 'اليها', 'الأمريكية', 'يتم', 'بوابة', 'ممثّلة', 'الوراء', 'عل', 'كل', '٢٠٠٤', 'ديسمبر', 'ومن', 'تعديل', 'لبولندا،', 'أن', 'قام', 'وزارة', 'ولاتّساع', 'عن', 'بعد', 'وصغار', 'بريطانيا', 'سنغافورة', 'شيء', 'هو', 'مع', 'بحق', 'انتهت', 'الصين', 'العصبة', 'تلك', 'ثم', 'الشتوية', 'لتقليعة', 'حدى', 'أساسي', 'المدن', 'بل', 'الجو', 'وباءت', 'يتعلّق', 'الا', 'أن', '٣٠', 'حقول', 'تشكيل', 'والفرنسي', 'لان', 'عدم', 'إيطاليا', 'والنفيس', 'أي', 'إجلاء', 'مشاركة', 'الساحل', 'كان', 'أن', 'دارت', 'الثانية', 'قام', 'في', 'عل', 'بزمام', 'كثيرة', 'الدولارات', 'وفي', 'تعد', 'أملاً', 'اليابانية', 'في', 'غير', 'ما', 'بمحاولة', 'الإيطالية', 'الإقتصادية', 'عن', 'جنوب', 'يرتبط', 'شيء', 'أخر', 'وأزيز', 'انتصارهم', 'أي', 'مع', 'بحق', 'اللا', 'المبرمة',
    );

    /**
     * Word
     *
     * Generates a single word of lorem ipsum.
     *
     * @access public
     * @param  mixed  $tags string or array of HTML tags to wrap output with
     * @return string generated lorem ipsum word
     */
    public function word($tags = false)
    {
        return $this->words(1, $tags);
    }

    /**
     * Words Array
     *
     * Generates an array of lorem ipsum words.
     *
     * @access public
     * @param  integer $count how many words to generate
     * @param  mixed   $tags string or array of HTML tags to wrap output with
     * @return array   generated lorem ipsum words
     */
    public function wordsArray($count = 1, $tags = false)
    {
        return $this->words($count, $tags, true);
    }

    /**
     * Words
     *
     * Generates words of lorem ipsum.
     *
     * @access public
     * @param  integer $count how many words to generate
     * @param  mixed   $tags string or array of HTML tags to wrap output with
     * @param  boolean $array whether an array or a string should be returned
     * @return mixed   string or array of generated lorem ipsum words
     */
    public function words($count = 1, $tags = false, $array = false)
    {
        $words      = array();
        $word_count = 0;

        // Shuffles and appends the word list to compensate for count
        // arguments that exceed the size of our vocabulary list
        while ($word_count < $count) {
            $shuffle = true;

            while ($shuffle) {
                $this->shuffle();

                // Checks that the last word of the list and the first word of
                // the list that's about to be appended are not the same
                if (!$word_count || $words[$word_count - 1] != $this->words[0]) {
                    $words      = array_merge($words, $this->words);
                    $word_count = count($words);
                    $shuffle    = false;
                }
            }
        }

        $words = array_slice($words, 0, $count);

        return $this->output($words, $tags, $array);
    }

    /**
     * Sentence
     *
     * Generates a full sentence of lorem ipsum.
     *
     * @access public
     * @param  mixed  $tags string or array of HTML tags to wrap output with
     * @return string generated lorem ipsum sentence
     */
    public function sentence($tags = false)
    {
        return $this->sentences(1, $tags);
    }

    /**
     * Sentences Array
     *
     * Generates an array of lorem ipsum sentences.
     *
     * @access public
     * @param  integer $count how many sentences to generate
     * @param  mixed   $tags string or array of HTML tags to wrap output with
     * @return array   generated lorem ipsum sentences
     */
    public function sentencesArray($count = 1, $tags = false)
    {
        return $this->sentences($count, $tags, true);
    }

    /**
     * Sentences
     *
     * Generates sentences of lorem ipsum.
     *
     * @access public
     * @param  integer $count how many sentences to generate
     * @param  mixed   $tags string or array of HTML tags to wrap output with
     * @param  boolean $array whether an array or a string should be returned
     * @return mixed   string or array of generated lorem ipsum sentences
     */
    public function sentences($count = 1, $tags = false, $array = false)
    {
        $sentences = array();

        for ($i = 0; $i < $count; $i++) {
            $sentences[] = $this->wordsArray($this->gauss(24.46, 5.08));
        }

        $this->punctuate($sentences);

        return $this->output($sentences, $tags, $array);
    }

    /**
     * Paragraph
     *
     * Generates a full paragraph of lorem ipsum.
     *
     * @access public
     * @param  mixed  $tags string or array of HTML tags to wrap output with
     * @return string generated lorem ipsum paragraph
     */
    public function paragraph($tags = false)
    {
        return $this->paragraphs(1, $tags);
    }

    /**
     * Paragraph Array
     *
     * Generates an array of lorem ipsum paragraphs.
     *
     * @access public
     * @param  integer $count how many paragraphs to generate
     * @param  mixed   $tags string or array of HTML tags to wrap output with
     * @return array   generated lorem ipsum paragraphs
     */
    public function paragraphsArray($count = 1, $tags = false)
    {
        return $this->paragraphs($count, $tags, true);
    }

    /**
     * Paragraphss
     *
     * Generates paragraphs of lorem ipsum.
     *
     * @access public
     * @param  integer $count how many paragraphs to generate
     * @param  mixed   $tags string or array of HTML tags to wrap output with
     * @param  boolean $array whether an array or a string should be returned
     * @return mixed   string or array of generated lorem ipsum paragraphs
     */
    public function paragraphs($count = 1, $tags = false, $array = false)
    {
        $paragraphs = array();

        for ($i = 0; $i < $count; $i++) {
            $paragraphs[] = $this->sentences($this->gauss(5.8, 1.93));
        }

        return $this->output($paragraphs, $tags, $array, "\n\n");
    }

    /**
     * Gaussian Distribution
     *
     * This is some smart kid stuff. I went ahead and combined the N(0,1) logic
     * with the N(m,s) logic into this single function. Used to calculate the
     * number of words in a sentence, the number of sentences in a paragraph
     * and the distribution of commas in a sentence.
     *
     * @access private
     * @param  double  $mean average value
     * @param  double  $std_dev stadnard deviation
     * @return double  calculated distribution
     */
    private function gauss($mean, $std_dev)
    {
        $x = mt_rand() / mt_getrandmax();
        $y = mt_rand() / mt_getrandmax();
        $z = sqrt(-2 * log($x)) * cos(2 * pi() * $y);

        return $z * $std_dev + $mean;
    }

    /**
     * Shuffle
     *
     * Shuffles the words, forcing "Lorem ipsum..." at the beginning if it is
     * the first time we are generating the text.
     *
     * @access private
     */
    private function shuffle()
    {
        if ($this->first) {
            $this->first = array_slice($this->words, 0, 8);
            $this->words = array_slice($this->words, 8);

            shuffle($this->words);

            $this->words = $this->first + $this->words;

            $this->first = false;
        } else {
            shuffle($this->words);
        }
    }

    /**
     * Punctuate
     *
     * Applies punctuation to a sentence. This includes a period at the end,
     * the injection of commas as well as capitalizing the first letter of the
     * first word of the sentence.
     *
     * @access private
     * @param  array   $sentences the sentences we would like to punctuate
     */
    private function punctuate(&$sentences)
    {
        foreach ($sentences as $key => $sentence) {
            $words = count($sentence);

            // Only worry about commas on sentences longer than 4 words
            if ($words > 4) {
                $mean    = log($words, 6);
                $std_dev = $mean / 6;
                $commas  = round($this->gauss($mean, $std_dev));

                for ($i = 1; $i <= $commas; $i++) {
                    $word = round($i * $words / ($commas + 1));

                    if ($word < ($words - 1) && $word > 0) {
                        $sentence[$word] .= ',';
                    }
                }
            }

            $sentences[$key] = ucfirst(implode(' ', $sentence) . '.');
        }
    }

    /**
     * Output
     *
     * Does the rest of the processing of the strings. This includes wrapping
     * the strings in HTML tags, handling transformations with the ability of
     * back referencing and determining if the passed array should be converted
     * into a string or not.
     *
     * @access private
     * @param  array   $strings an array of generated strings
     * @param  mixed   $tags string or array of HTML tags to wrap output with
     * @param  boolean $array whether an array or a string should be returned
     * @param  string  $delimiter the string to use when calling implode()
     * @return mixed   string or array of generated lorem ipsum text
     */
    private function output($strings, $tags, $array, $delimiter = ' ')
    {
        if ($tags) {
            if (!is_array($tags)) {
                $tags = array($tags);
            } else {
                // Flips the array so we can work from the inside out
                $tags = array_reverse($tags);
            }

            foreach ($strings as $key => $string) {
                foreach ($tags as $tag) {
                    // Detects / applies back reference
                    if ($tag[0] == '<') {
                        $string = str_replace('$1', $string, $tag);
                    } else {
                        $string = sprintf('<%1$s>%2$s</%1$s>', $tag, $string);
                    }

                    $strings[$key] = $string;
                }
            }
        }

        if (!$array) {
            $strings = implode($delimiter, $strings);
        }

        return $strings;
    }
}

