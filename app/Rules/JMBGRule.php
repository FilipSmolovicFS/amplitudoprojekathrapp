<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class JMBGRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^\d{13}$/', $value)) {
            $fail('The :attribute must be exactly 13 digits.');
            return;
        }

        $day = (int) substr($value, 0, 2);
        $month = (int) substr($value, 2, 2);
        $year = (int) substr($value, 4, 3);
        $region = (int) substr($value, 7, 2);

        // Determine the full year based on the first digit of the year part
        if ($year >= 0 && $year <= 999) {
            $fullYear = ($year >= 900) ? (1000 + $year) : (2000 + $year);
        } else {
            $fail('The :attribute has an invalid year format.');
            return;
        }

        if (!checkdate($month, $day, $fullYear)) {
            $fail('The :attribute contains an invalid date.');
            return;
        }

        if ($region < 20 || $region > 29){
            $fail('The :attribute contains an invalid region code.');
            return;
        }

        if (!$this->isValidControlDigit($value)) {
            $fail('The :attribute has an invalid control digit.');
            return;
        }

    }


    private function isValidControlDigit(string $jmbg)
    {
        $digits = array_map('intval', str_split($jmbg));

        $sum =
            7 * ($digits[0] + $digits[6]) +
            6 * ($digits[1] + $digits[7]) +
            5 * ($digits[2] + $digits[8]) +
            4 * ($digits[3] + $digits[9]) +
            3 * ($digits[4] + $digits[10]) +
            2 * ($digits[5] + $digits[11]);

        $mod = $sum % 11;
        $control = ($mod <= 1) ? 0 : (11 - $mod);

        if (11 - $mod == 10) {
            return false;
        }

        return $control === $digits[12];
    }
}
