<?php

namespace App\Services;

use Exception;

class MegaD
{
    public function getPortsState()
    {
        $result = $this->run(['cmd' => 'all']);

        $results = explode(';', $result);

        foreach ($results as $port => $value)
        {
            $value = explode('/', $value);

            $results[$port] = ($value[0] == 'ON' ? 1 : ($value[0] == 'OFF' ? 0 : $value[0]));
        }

        return $results;
    }

    public function getPortState($port)
    {
        return $this->run(['cmd' => 'get', 'pt' => $port]);
    }

    public function setPortsState($data)
    {
        $parts = [];

        foreach ($data as $port => $state) {
            if (is_numeric($port) && !empty($state)) {
                $parts[] = sprintf('%s:%s', $port, $state);
            } else {
                $parts[] = $port;
            }
        }

        implode(';', $parts);

        return $this->run(['cmd' => $parts]);
    }

    public function setPortState($port, $state)
    {
        return $this->run(['cmd' => sprintf('%s:%s', $port, $state)]);
    }

    public function getTemperatureState()
    {
        return $this->run(['tget' => 1]);
    }

    public function setPortCount($port, $amount = 0)
    {
        return $this->run(['cnt' => $amount, 'pt' => $port]);
    }

    public function process($port, $mode, $temperature, $adc_value, $dir)
    {

    }

    private function run($parameters)
    {
        $parameters = http_build_query($parameters);
        $base_url = config('megad.url');
        $url = sprintf("%s?%s", $base_url, $parameters);

        try
        {
            return file_get_contents($url);
        }
        catch(Exception $e)
        {
            return null;
        }
    }
}