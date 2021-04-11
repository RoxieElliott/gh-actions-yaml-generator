<?php

namespace App\Traits\Form;

trait CodeQuality
{
    public $stepExecutePhpunit; //true
    public $stepExecuteCodeSniffer; //false
    public $stepDirCodeSniffer; // app
    public $stepInstallCodeSniffer; //true
    public $stepExecuteStaticAnalysis; // false
    public $stepDirStaticAnalysis; // app
    public $stepInstallStaticAnalysis; //true
    public $stepDusk; // false

    public function loadDefaultsCodeQuality()
    {
        $this->stepExecutePhpunit = true;
        $this->stepExecuteCodeSniffer = false;
        $this->stepDirCodeSniffer = "app";
        $this->stepInstallCodeSniffer = true;
        $this->stepExecuteStaticAnalysis = false;
        $this->stepDirStaticAnalysis = "app";
        $this->stepInstallStaticAnalysis = true;
        $this->stepDusk = false;
    }

    public function loadCodeQualityFromJson($j)
    {
        data_fill($j, "stepDirCodeSniffer", "app");
        data_fill($j, "stepInstallCodeSniffer", true);
        data_fill($j, "stepDirStaticAnalysis", "app");
        data_fill($j, "stepInstallStaticAnalysis", true);
        $this->stepExecutePhpunit = $j->stepExecutePhpunit;
        $this->stepExecuteCodeSniffer = $j->stepExecuteCodeSniffer;
        $this->stepDirCodeSniffer = $j->stepDirCodeSniffer;
        $this->stepInstallCodeSniffer = $j->stepInstallCodeSniffer;
        $this->stepExecuteStaticAnalysis = $j->stepExecuteStaticAnalysis;
        $this->stepDirStaticAnalysis = $j->stepDirStaticAnalysis;
        $this->stepInstallStaticAnalysis = $j->stepInstallStaticAnalysis;
        $this->stepDusk = $j->stepDusk;
    }

    public function setDataCodeQuality($data)
    {
        $data["stepExecutePhpunit"] = $this->stepExecutePhpunit;
        $data["stepExecuteCodeSniffer"] = $this->stepExecuteCodeSniffer;
        $data["stepDirCodeSniffer"] = $this->stepDirCodeSniffer;
        $data["stepInstallCodeSniffer"] = $this->stepInstallCodeSniffer;
        $data["stepExecuteStaticAnalysis"] = $this->stepExecuteStaticAnalysis;
        $data["stepDirStaticAnalysis"] = $this->stepDirStaticAnalysis;
        $data["stepInstallStaticAnalysis"] = $this->stepInstallStaticAnalysis;
        $data["stepDusk"] = $this->stepDusk;

        return $data;
    }
}
