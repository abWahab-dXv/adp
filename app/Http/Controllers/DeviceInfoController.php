<?php

namespace App\Http\Controllers;

use App\Models\DeviceInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DeviceInfoController extends Controller
{
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'technology' => 'required',
        //     'operatorShort' => 'required',
        //     'operatorLong' => 'required',
        //     'signalStrength' => 'required',
        //     'networkInfo' => 'required',
        //     'cellInstance' => 'required',
        //     'networkRegistered' => 'required',
        //     'g4Rssp' => 'required',
        //     'g4Rssp' => 'required',
        //     'g4Rssi' => 'required',
        //     'g4Ssnr' => 'required',
        //     'g5Rssp' => 'required',
        //     'g5Rssq' => 'required',
        //     'g5Ssnr' => 'required',
        //     'apn' => 'required',
        //     'dataSessionId' => 'required',
        //     'dataLastCause' => 'required',
        //     'linkproperties' => 'required',
        //     'dataNetworkType' => 'required',
        //     'dataState' => 'required',
        //     'dataTransportType' => 'required',
        //     'cellInfo' => 'required',
        //     'simOperator' => 'required',
        //     'dataActivity' => 'required',
        //     'networkType' => 'required',
        //     'dataStateCurrent' => 'required',
        //     'imei' => 'required',
        //     'deviceSoftware' => 'required',
        //     'iccAuthentication' => 'required',
        //     'phoneNumber' => 'required',
        //     'cid' => 'required',
        //     'networkManual' => 'required',
        //     'networkCountry' => 'required',
        //     'networkOperatorCode' => 'required',
        //     'networkOperatorName' => 'required',
        //     'networkSelection' => 'required',
        //     'serviceState' => 'required',
        //     'simState' => 'required',
        //     'tac' => 'required',
        //     'dataEnabled' => 'required',
        //     'dataConnection' => 'required',
        //     'dataRoamin' => 'dataRoamin',
        //     'dataDownSpeed' => 'required',
        //     'dataUpSpeed' => 'required',
        //     'celllnfowcdma' => 'required',
        //     'apntype' => 'required',
        //     'changereason' => 'required',
        //     'failcause' => 'required',
        // ]);
        // if($validator->fails())
        // {
        //     return $validator->errors();
        // }
        $device = DeviceInfo::create($request->all());
        if($device)
        {
            $message = "Success";
            $status = 200;
        }
        else
        {
            $message = "Something went wrong";
            $status = 403;
        }

        return response(['message' => $message, 'status' => $status], $status);
    }
}
