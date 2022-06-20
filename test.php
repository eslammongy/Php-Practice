<?php

declare(strict_types=1);
class Tournament
{
    private array $scores;
    private array $output;
    private const COLUMN_TITLES = [
        'MP',
        'W',
        'D',
        'L',
        'P',
    ];
    private const LINE_SEPARATOR = "\n";
    public function tally(string $input): string
    {
        $this->parseInputs($input);
        $this->output[] = $this->formatInputs('Team', self::COLUMN_TITLES);
        if (isset($this->scores)) {
            /* Sort alphabetically by team name (key of array) */
            ksort($this->scores);
            /* Sort by total points (column P) */
            uasort($this->scores, static fn ($a, $b) => $b['P'] - $a['P']);
            foreach ($this->scores as $team => $values) {
                $this->output[] = $this->formatInputs($team, $values);
            }
        }
        return implode(self::LINE_SEPARATOR, $this->output);
    }

    private function formatInputs(string $firstColumn, array $otherColumns): string
    {
        $output = [
            str_pad($firstColumn, 31),
        ];
        $lastIndex = array_key_last($otherColumns);
        foreach ($otherColumns as $index => $text) {
            $text = str_pad((string) $text, 3, ' ', STR_PAD_LEFT);
            if ($index !== $lastIndex) {
                $text = str_pad($text, 4, ' ', STR_PAD_BOTH);
            }
            $output[] = $text;
        }
        return implode('|', $output);
    }
    private function parseInputs(string $input): void
    {
        $lines = explode(self::LINE_SEPARATOR, $input);
        foreach ($lines as $line) {
            $this->process($line);
        }
    }
    private function process(string $input): void
    {
        if (empty($input)) {
            return;
        }
        [$home, $away, $result] = explode(';', $input);
        foreach ([$home, $away] as $name) {
            if (!isset($this->scores[$name])) {
                $this->scores[$name] = array_fill_keys(self::COLUMN_TITLES, 0);
            }
        }
        $this->scores[$home]['MP'] += 1;
        $this->scores[$away]['MP'] += 1;
        switch ($result) {
            case 'win':
                $this->scores[$home]['W'] += 1;
                $this->scores[$home]['P'] += 3;
                $this->scores[$away]['L'] += 1;
                break;
            case 'loss':
                $this->scores[$home]['L'] += 1;
                $this->scores[$away]['W'] += 1;
                $this->scores[$away]['P'] += 3;
                break;
            case 'draw':
                $this->scores[$home]['D'] += 1;
                $this->scores[$away]['D'] += 1;
                $this->scores[$home]['P'] += 1;
                $this->scores[$away]['P'] += 1;
                break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
list-unstyled

<body>
    <h1 style="margin-top: -10px;">Prices for Services for East Central Florida</h1>
    <h3>Meet-N-Greet - FREE</h3>
    <p>This is where your pet sitter will get the chance to meet with you and your pet which allows everyone to get
        acquainted.</p>
    <h3><br />Dog Boarding - Cage Free and In Our Home</h3>
    <ul class="list-unstyled uk-list-striped">
        <li>$50 - $55 night</li>
        <li>$30 for the 2nd dog in the same family</li>
        <li>Discount pricing for pocket dogs and extended stays</li>
    </ul>
    <h3><br />Dog Daycare - Cage Free and In Our Home</h3>
    <ul class="list-unstyled uk-list-striped">
        <li>$33 day</li>
        <li>$28 day for the 2nd dog in the same family</li>
        <li>$25 1/2 day - up to 4 hours</li>
        <li>Pre-paid discount packages available (non refundable)</li>
    </ul>
    <h3><br />Dog Walking</h3>
    <ul class="list-unstyled uk-list-striped">
        <li>Starting at $23 per visit</li>
        <li>Extended walks / visits are available</li>
        <li>Pre-paid discount packages available (non refundable)</li>
    </ul>
    <h3><br />Pet Visits - Dogs, Cats and Other Pets</h3>
    <ul class="list-unstyled uk-list-striped">
        <li>Starting at $23 per visit</li>
        <li>Extended visits are available</li>
        <li>Other Pets: price based upon service needed and type of pet</li>
    </ul>
    <h3><br />Pet Sitting by the Hour</h3>
    <ul class="list-unstyled uk-list-striped">
        <li>$30 per hour - minimum 4 consecutive hours</li>
        <li>Discount available over 4 hours</li>
    </ul>
    <h3><br />Overnight Pet Sitting In Your Home</h3>
    <ul class="list-unstyled uk-list-striped">
        <li>Starting at $85 per night which includes a mid-day visit</li>
        <li>Customized packages are available</li>
    </ul>
    <h3><br />Private First Class Pet Transportation</h3>
    <ul class="list-unstyled uk-list-striped">
        <li>Please call for rates</li>
    </ul>
    <h3><br />Holiday Rates</h3>
    <p>Holidays: New Year's Eve, New Year's Day, Easter, Mother's Day, Memorial Day, Father's Day, July 4th, Labor Day,
        Thanksgiving Day, Christmas Eve, Christmas Day. Deposit required for Holiday boarding.</p>
    <ul class="list-unstyled uk-list-striped">
        <li>$10 per visit added for all holidays listed above for pet visits in your home ($25 Max)</li>
        <li>$25 flat rate added to all holidays listed above for overnight pet sitting in your home</li>
    </ul>
    <ul>
        <li><span style="font-weight: bold;">REMEMBER</span> - Wag Watchers® is all inclusive which means - we DO NOT
            charge extra for playtime, potty breaks, treats, walks, administering medication or pampering your pet(s).
            You can check in and check out 7 days a week.</li>
        <li>Call or Text: 321-594-6214 or Toll Free: 866-749-1551 to schedule your <span
                style="color: #b60521;"><strong>FREE</strong></span> meet-n-greet.</li>
    </ul>
    <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-container-center"><span
            style="font-weight: bold;">TERMS:</span>
        <div style="font-size: 90%;">
            <p>You may want to schedule a day of daycare or 1 sleepover in advance of a lengthy trip to get your pet
                better acquainted with your pet host family.<br /><br />To qualify for the multiple dog rate, all dogs
                must permanently reside at the same residence.<br /><br />Payment is due in full prior to start of
                service. We accept Venmo, Zelle and MC/Visa.</p>
        </div>
    </div>
    <div style="float: right; color: #9f9f9f;"><small> *Prices are subject to change</small></div>

</body>

</html>