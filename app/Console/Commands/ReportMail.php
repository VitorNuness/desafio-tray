<?php

namespace App\Console\Commands;

use App\Services\Reports\SalesReportMailSenderService;
use Illuminate\Console\Command;

class ReportMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:report-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send report mails at 11PM daily';

    /**
     * Execute the console command.
     */
    public function handle(SalesReportMailSenderService $sendMail)
    {
        $sendMail->sendMail();
    }
}
