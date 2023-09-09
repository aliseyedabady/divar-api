<?php

namespace  App\Lib\Sms;

use App\Models\User;
use Carbon\Carbon;
use Morilog\Jalali\Jalalian;
use SmartRaya\IPPanelLaravel\Errors\Error;
use SmartRaya\IPPanelLaravel\Errors\HttpException;
use SmartRaya\IPPanelLaravel\Facades\IPPanel;

class SendSms
{
    public static function convert_time()
    {
        $date = Jalalian::forge('today')->format('%A');
        $jDate = Jalalian::fromCarbon(Carbon::now())->format('Y/m/d');
        $jDateTime = Jalalian::fromCarbon(Carbon::now())->format('Y/m/d H:s');
        return ['dayName' => $date, 'Date' => $jDate, 'dateTime' => $jDateTime];
    }
    static function forget_pass_otp(string $code, string $mobile)
    {
        try {
            $bulkID = IPPanel::sendPattern(
                "y5vpawg6kik6emy",
                "+983000505",
                $mobile,
                [
                    "code" => $code,
                ]
            );
            return $bulkID;
        } catch (Error $e) {
            return $e;
        } catch (HttpException $e) {
            return $e;
        }
    }
}
