<?php

namespace App\Http\Controllers;

use Bpjs\Bridging\Vclaim\BridgeVclaim;
use Illuminate\Http\Request;

class VclaimController extends Controller
{
    protected $bridging;

    public function __construct() {
        $this->bridging = new BridgeVclaim;
    }

    public function getDiagnosa($code)
    {
        $endpoint = 'referensi/diagnosa/'. $code;
        return $this->bridging->getRequest($endpoint);
    }

    public function getPoli($code)
    {
        $endpoint = 'referensi/poli/'. $code;
        return $this->bridging->getRequest($endpoint);
    }

    public function getProvinsi()
    {
        $endpoint = 'referensi/propinsi';
        return $this->bridging->getRequest($endpoint);
    }

    public function getKabupaten($code)
    {
        $endpoint = 'referensi/kabupaten/propinsi/'.$code;
        return $this->bridging->getRequest($endpoint);
    }

    public function getPeserta($number)
    {
        $endpoint = 'Peserta/nokartu/'.$number.'/tglSEP/'.date('Y-m-d');
        return $this->bridging->getRequest($endpoint);
    }

    public function getRujukan($number)
    {
        $endpoint = 'Rujukan/Peserta/'.$number;
        $bpjs = json_decode($this->bridging->getRequest($endpoint));
        return $bpjs;
    }
}
