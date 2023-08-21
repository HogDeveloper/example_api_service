<?php

    namespace App\engine\helpers;

    use App\engine\Cli;
    use App\engine\helpers\Helper;

    class Seed extends Helper
    {
        public $aliaces = [
            "ship-to name" => "customer_name",
            "grant total (purchased)" => "grand_total",
        ];

        public function __construct(Cli $cli, array $settings) {
            $this->cli = $cli;
            $this->appDir = $cli->getRootDir();
            $this->dbConfig = $this->appDir . DB_CONFIG;
            $this->settings = $settings;
        }

        public function action(array $params, string $methodName) :void {
            $handler = parent::getHandler($params, $methodName);
        }

    }