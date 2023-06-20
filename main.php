class Main {
  public function handle()
  {

      $text = '20 5 19 20+4 15 13 5';

      $this->info($this->numbersToLetters($text));

  }

  private function numbersToLetters(string $encodedText): string
  {
      return array_reduce(
          $this->splitWords($encodedText),
          fn (string $carry, string $encodedWord) => $carry .= $this->decodeWord($encodedWord)." ",
          ''
      );
  }

  private function decodeWord(string $encodedWord): string {
      return array_reduce(
          $this->splitLetters($encodedWord),
          fn (string $carry, string $number) => $carry .= $this->matchLetter($number),
          ''
      );
  }

  private function splitWords(string $encodedText): array {
      return explode('+', $encodedText);
  }

  private function splitLetters(string $encodedWord): array
  {
      return explode(' ', $encodedWord);
  }

  private function matchLetter(string $number): string
  {
    return match ($number) {
        '1' => 'A',
        '2' => 'B',
        '3' => 'C',
        '4' => 'D',
        '5' => 'E',
        '6' => 'F',
        '7' => 'G',
        '8' => 'H',
        '9' => 'I',
        '10' => 'J',
        '11' => 'K',
        '12' => 'L',
        '13' => 'M',
        '14' => 'N',
        '15' => 'O',
        '16' => 'P',
        '17' => 'Q',
        '18' => 'R',
        '19' => 'S',
        '20' => 'T',
        '21' => 'U',
        '22' => 'V',
        '23' => 'W',
        '24' => 'X',
        '25' => 'Y',
        '26' => 'Z',
    };
}
