<?php

namespace Sajjadgol\PersianDatePicker\Commands;

use Illuminate\Console\Command;

class PersianDatePickerCommand extends Command
{
    public $signature = 'date-picker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
