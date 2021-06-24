<?php
//http: //localhost:8080/hardware?api=f81f0f64d57585474fac84497fc843e9ff4f734d&key=1c6a9a6fc2c0e40fa54cbc9f06ef6196&temp=32&hum=96
namespace App\Controllers;

class Data extends BaseController {
    public function save() {
        $data = $this->request->getVar();
        if (!isset($data['temp']) && !isset($data['hum']) && !isset($data['api']) && !isset($data['key'])) {
            $datajson = [
                'message' => 'error',
            ];
            echo(json_encode($datajson));
            return;
        }

        $result = $this->apiModel->apiHandler($data['api'], $data['key']);
        if (!$result == false) {
            $datajson = [
                'message' => 'success',
                'api' => $data['api'],
                'key' => $data['key'],
                'data' => [
                    'temperature' => $data['temp'],
                    'humidity' => $data['hum'],
                ],
            ];
            $this->dataModel->save([
                'device' => $result,
                'suhu' => $data['temp'],
                'kelembaban' => $data['hum'],
            ]);
            echo(json_encode($datajson));
            return;
        }
        $datajson = [
            'message' => 'error',
            'api' => $data['api'],
            'key' => $data['key'],
            'data' => [
                'temperature' => $data['temp'],
                'humidity' => $data['hum'],
            ],
        ];
        echo(json_encode($datajson));
        return;
    }

}
