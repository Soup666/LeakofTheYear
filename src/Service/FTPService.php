<?php

namespace App\Service;

class FTPService {

    private $connection;

    public function __construct() {
        $this->connection = ftp_connect($_ENV['FTP_HOST']);
        ftp_login($this->connection, $_ENV['FTP_USER'], $_ENV['FTP_PASS']);


    }

    public function test() {
        if (!$this->connection) {
            throw new \Exception('Could not connect to FTP server');
        }
        else {
            return 'Connected to FTP server';
        }
    }

    public function uploadFile(string $localFile, string $remoteFile) {
        ftp_put($this->connection, $remoteFile, $localFile, FTP_BINARY);
    }

    public function downloadFile(string $remoteFile, string $localFile) {
        ftp_get($this->connection, $localFile, $remoteFile, FTP_BINARY);
    }

    public function deleteFile(string $remoteFile) {
        ftp_delete($this->connection, $remoteFile);
    }

    public function __destruct() {
        ftp_close($this->connection);
    }


}